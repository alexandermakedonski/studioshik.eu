<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\NewsModel;
use DB;
use File;
use Illuminate\Http\Request;

class NewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addNew()
    {
        return view('admin.news.addnew');
    }

    public function postNew(Requests\NewsRequest $request)
    {

        $file = $request->file('image');
        $fileName = date('Y-m-d-H-i-s') . "-" . $file->getClientOriginalName();
        $file->move(public_path() . '/assets/images/news', $fileName);
        $new = new NewsModel;
        $new->title = $request->title;
        $new->text = $request->text;
        $new->image = $fileName;
        $new->save();
        return redirect('admin')->with('message', ['Новината е добавена.']);

    }

    public function newCorrection()
    {

        $news = DB::table('news')->get();
        return view('admin.news.newselect', compact('news'));
    }

    public function postNewCorrection($id)
    {

        $news = DB::table('news')->where('id', '=', $id)->get();
        return view('admin.news.newcorrection', compact('news'));

    }

    public function postNewDel($id)
    {
        $image = DB::table('news')->where('id', '=', $id)->pluck('image');
        File::delete(public_path() . '\assets\images\news/' . $image);
        DB::table('news')->where('id', '=', $id)->delete();
        return redirect('admin')->with('message', ['Новината е изтрита.']);
    }

    public function postNewCorrectionComplete(Request $request)
    {

        if ($request->file('image')) {
            $file = $request->file('image');
            $fileName = date('Y-m-d-H-i-s') . "-" . $file->getClientOriginalName();
            $file->move(public_path() . '/assets/images/news', $fileName);
            DB::table('news')->where('id', '=', $request->id)->update(['title' => $request->title, 'text' => $request->text, 'image' => $fileName]);
        } else {
            DB::table('news')->where('id', '=', $request->id)->update(['title' => $request->title, 'text' => $request->text]);
        }
        return redirect('admin')->with('message', ['Новината е коригирана.']);
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
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
