<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Input;
use App\ServiceCategory;
use App\Service;

class ServiceController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function categoryAdd(){

		$grandcategories = DB::table('servicecategories')->where('parent_id','=',NULL)->get();
		return view('admin.services.categoryadd',compact('grandcategories'));
	}


	public function postcategoryAdd(){
		if(Request::ajax()){
			$servicecategory = new ServiceCategory;
			$servicecategory->name = Request::input('name');
			$servicecategory->parent_id =  Request::input('parent_id');
			$servicecategory->save();
		}
	}

	public function categoryDelete(){
		$categories = DB::table('servicecategories')->whereNotNull('parent_id')->get();
		return view('admin.services.categorydelete',compact('categories'));
	}

	public function postcategoryDelete($id){

		DB::table('servicecategories')->where('id','=',$id)->delete();
		DB::table('services')->where('category_id','=',$id)->delete();
		$categories = DB::table('servicecategories')->whereNotNull('parent_id')->get();
		return view('admin.services.categorydelete',compact('categories'));
	}

	public function serviceAdd(){
		
		$categories = DB::table('servicecategories')->whereNotNull('parent_id')->get();
		return view('admin.services.service',compact('categories'));
	}

	public function postserviceAdd(Requests\ServiceRequest $request){
		Service::create($request->all());
		return redirect('admin')->with('message',['Успешно въведохте услуга.']);
	}

	public function serviceCorrection(){

		$services = DB::table('services')->get();
		$categories = DB::table('servicecategories')->get();
		return view('admin.services.serviceselect',compact('services','categories'));
	}

	public function postserviceCorrection($id){
			$service = DB::table('services')->where('id','=',$id)->get();
			$categories = DB::table('servicecategories')->whereNotNull('parent_id')->get();
			return view('admin.services.servicecorrection',compact('service','categories'));
	}

	public function serviceDelete($id){
		$service = DB::table('services')->where('id','=',$id)->delete();
		$services = DB::table('services')->get();
		$categories = DB::table('servicecategories')->get();
		return view('admin.services.serviceselect',compact('services','categories'));
	}

	public function serviceCorrectionComplete(Request $request){
		DB::table('services')->where('id','=',$request->id)->update(['name' => $request->name,'price' => $request->price,'time' => $request->time,'category_id'=>$request->category_id]);
		return redirect('admin')->with('message', ['Услугата е коригирана.']);
	}
}
