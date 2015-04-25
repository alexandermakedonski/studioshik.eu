<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Input;
use App\Gallery;
use Plupload;
class TestController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function test(){
		$categories = DB::table('gallerycategories')->get();
		$images = DB::table('gallery')->get();
		return view('admin.test.test1',compact('categories','images'));

	}

	public function gallerypost(){
		if(Request::ajax())
        {
            $id = Request::input('id');
            $show = Request::input('show');
            DB::table('gallery')->where('id','=',$id)->update(['show' => $show]);
        }
	}

	public function imagepost(){

		return Plupload::receive('file', function ($file)
		    {
		        $file->move(public_path().'/assets/images/gallery/'.date('Y-m'),$file->getClientOriginalName());
		        return 'ready';
		    });
	}

	public function iamgedata(){
		if(Request::ajax())
        {	
        	$category = Input::get('category');
        	$name = Request::input('name');
		    $gallery = new Gallery;
			$gallery->photo = date('Y-m').'/'.$name;
			$gallery->category = $category;
			$gallery->save();
            return $gallery->id;
        }
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
