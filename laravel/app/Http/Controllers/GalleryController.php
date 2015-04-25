<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Input;
use App\Gallery;
use Plupload;
class GalleryController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function addGalleryCategory(){
		return view('admin.gallery.addgallerycategory');
	}

	public function postGalleryCategory(Requests\GalleryCategoryRequest $request){
		GalleryCategoryModel::create($request->all());
		return redirect('admin')->with('message', ['Категорията е добавена.']);
	}

	public function delGalleryCategory(){
		$categories = DB::table('gallerycategories')->get();
		return view('admin.gallery.dellgallerycategory',compact('categories'));
	}

	public function postDelGalleryCategory(Request $request){

			DB::table('gallerycategories')->where('id','=',$request->id)->delete();
			return redirect('admin')->with('message', ['Категорията е изтрита.']);
	}

	public function galleryIndex()
	{
		$categories = DB::table('gallerycategories')->get();
		$images = DB::table('gallery')->get();
		return view('admin.gallery.gallery',compact('categories','images'));
	}

	public function showIndex(){
		if(Request::ajax())
        {
            $id = Request::input('id');
            $show = Request::input('show');
            DB::table('gallery')->where('id','=',$id)->update(['show' => $show]);
        }
	}

	public function saveImage(){
		return Plupload::receive('file', function ($file)
		{
		    $file->move(public_path().'/assets/images/gallery/'.date('Y-m'),$file->getClientOriginalName());
		    return 'ready';
		});
	}

	public function dataImage(){
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
