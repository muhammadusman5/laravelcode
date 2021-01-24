<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\qualification;
use App\carddetail;

class accreditationcardController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::select("SELECT * FROM carddetails JOIN qualifications ON carddetails.id=qualifications.p_id;");
        return view('datafetch')->with('posts',$posts);
    }

    public function query()
    {
        $posts = DB::select("SELECT carddetails.name,carddetails.father_name,qualifications.matricyoc, qualifications.interyoc, qualifications.graduationyoc, qualifications.mastersyoc, qualifications.phdsyoc, qualifications.otheryoc, qualifications.matricboard, qualifications.interboard, qualifications.graduationboard, qualifications.mastersboard, qualifications.phdsboard, qualifications.otherboard FROM carddetails INNER JOIN qualifications ON carddetails.id=qualifications.p_id;");
        return view('datafetch')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $post = new carddetail;
        $post->name = $request->input('name'); 
        $post->father_name = $request->input('father_name');
        $post->save();
        $p_id = $post->id; 
        $qpost = new qualification;
        $qpost->matricyoc = $request->input('marticyoc');
        $qpost->p_id = $p_id;
        $qpost->interyoc = $request->input('interyoc');
        $qpost->graduationyoc = $request->input('graduationyoc');
        $qpost->mastersyoc = $request->input('mastersyoc');
        $qpost->phdsyoc = $request->input('phdsyoc');
        $qpost->otheryoc = $request->input('otheryoc');
        $qpost->matricboard = $request->input('matricboard');
        $qpost->interboard = $request->input('interboard');
        $qpost->graduationboard = $request->input('graduationboard');
        $qpost->mastersboard = $request->input('mastersboard');
        $qpost->phdsboard = $request->input('phdsboard');
        $qpost->otherboard = $request->input('otherboard');
        $qpost->save();
        return redirect('/acccard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
