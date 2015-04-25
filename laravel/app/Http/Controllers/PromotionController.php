<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Promotion;
use Request;
use DB;

class PromotionController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function addpromotion(){
		return view('admin.promotions.promotion');
	}

	public function postPromotion(Requests\PromotionRequest $request){
		Promotion::create($request->all());
		return redirect('admin')->with('message',['Промоцията е добавена']);
	}

	public function panelPromotion(){
		$promotions = DB::table('promotions')->get();
		return view('admin.promotions.panelpromotions',compact('promotions'));
	}

	public function hidePromotion(){
		 if(Request::ajax())
        {
            $id = Request::input('id');
            $show = Request::input('show');
            DB::table('promotions')->where('id','=',$id)->update(['show' => $show]);
        }
	}


	public function promotionCorrection(){

			$promotions = DB::table('promotions')->get();
			return view('admin.promotions.correctionselect',compact('promotions'));
		
	}

	public function postpromotionCorrection($id){
		$promotions = DB::table('promotions')->where('id','=',$id)->get();
		return view('admin.promotions.correctionselectcomplete',compact('promotions'));

	}

	public function postpromotionCorrectionComplete(Request $request){
		DB::table('promotions')->where('id','=',$request->id)->update(['name' => $request->name,'popuptext' => $request->popuptext,'price' => $request->price,'percent' => $request->percent]);
		return redirect('admin')->with('message', ['Промоцията е коригирана.']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
