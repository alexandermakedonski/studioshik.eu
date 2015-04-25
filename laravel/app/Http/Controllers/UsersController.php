<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\User;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function signout() {
			Auth::logout();
			 return redirect('/');
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.account.registration');
	}

	public function postcreate(Requests\UserRequest $request)
	{
		$user = new User;
		$user->name = $request->name;
		$user->password = bcrypt($request->password);
		$user->save();
		return redirect('admin')->with('message', ['Акаунтът е добавен.']);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function accountselect()
	{
		$users = DB::table('users')->get();
		return view('admin.account.accountselect',compact('users'));
	}

	public function accountcorrection($id)
	{
			$user = DB::table('users')->where('id','=',$id)->get();
			return view('admin.account.accountcorrection',compact('user'));

	}

	public function accountDelete($id){
		DB::table('users')->where('id','=',$id)->delete();
		$users = DB::table('users')->get();
		return view('admin.account.accountselect',compact('users'));
	}


	public function accountcorrectioncomplete(Request $request){

		DB::table('users')->where('id','=',$request->id)->update(['name' => $request->name,'password' => bcrypt($request->password)]);
		return redirect('admin')->with('message', ['Акаунтът е коригиран.']);
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
