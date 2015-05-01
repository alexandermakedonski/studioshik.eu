<?php namespace App\Http\Controllers;

use DB;
use App\ServiceCategory;
use App\Service;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		/* Promotions in welcome page */

		$promotions = DB::table('promotions')->get();

		/* end Promotions */

		/* Catalog */

		$hairdressing = DB::table('servicecategories')->where('name','=','Фризьор')->get();
		$manicure = DB::table('servicecategories')->where('name','=','Маникюр')->get();
		$cosmetic = DB::table('servicecategories')->where('name','=','Козметика')->get();
		$massage = DB::table('servicecategories')->where('name','=','Масажи')->get();
		$makeup = DB::table('servicecategories')->where('name','=','Грим')->get();
		

		$descendantsHair = ServiceCategory::descendantsOf($hairdressing[0]->id);
		$servicesHair = Service::whereIn('category_id', $descendantsHair->lists('id'))->get();
		$hairCatNumber = count($descendantsHair);
		$hairCatNumber = ceil($hairCatNumber/4)*4;
		/*dd($hairCatNumber);*/

		$descendantsManicure = ServiceCategory::descendantsOf($manicure[0]->id);
		$servicesManicure = Service::whereIn('category_id', $descendantsManicure->lists('id'))->get();
		$manicureCatNumber = count($descendantsManicure);
		$manicureCatNumber = ceil(($hairCatNumber+$manicureCatNumber)/4)*4;
		//dd($manicureCatNumber);

		$descendantsCosmetics = ServiceCategory::descendantsOf($cosmetic[0]->id);
		$servicesCosmetics = Service::whereIn('category_id', $descendantsCosmetics->lists('id'))->get();
		$cosmeticsCatNumber = count($descendantsCosmetics);
		$cosmeticsCatNumber = ceil(($cosmeticsCatNumber+$manicureCatNumber)/4)*4;
		//dd($cosmeticsCatNumber);

		$descendantsMassage = ServiceCategory::descendantsOf($massage[0]->id);
		$servicesMassage = Service::whereIn('category_id', $descendantsMassage->lists('id'))->get();
		$massageCatNumber = count($descendantsCosmetics);
		$massageCatNumber = ceil(($massageCatNumber+$cosmeticsCatNumber)/4)*4;

		$descendantsMakeup = ServiceCategory::descendantsOf($makeup[0]->id);
		$servicesMakeup = Service::whereIn('category_id', $descendantsMakeup->lists('id'))->get();

		$categories=0;

		/* End catalog */

		/* Gallery */

		$gallery = DB::table('gallery')->get();
		$gallerycat = DB::table('gallerycategories')->get();

		/* End gallery */

		/* News */

		$news = DB::table('news')->get();
		$newsNumber = count($news);
		$newsNumber-=6;

		/* End news */

		/* Shik.bg ADS */

		$advs = DB::connection('mysql2')->select('
		    select shopName,price,image from products INNER JOIN images ON products.id = images.product_id order by images.product_id desc limit 10
		    ');
		//dd($advs);
		/* End Shik.bg ADS */

		return view('welcome',compact('promotions','descendantsHair','servicesHair','hairCatNumber','descendantsManicure','servicesManicure','manicureCatNumber','descendantsCosmetics','servicesCosmetics','cosmeticsCatNumber','descendantsMassage','servicesMassage','massageCatNumber','descendantsMakeup','servicesMakeup','categories','gallery','gallerycat','news','newsNumber','advs'));
	}

}
