<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $image =  portfolio::limit(15)->get();
        $i = 1;
        return view('/pages.portfolio', compact('image','i'));
    }
    public function store(Request $request){
        $image =  new portfolio();
        $image->titre = $request->titre;
        $image->text = $request->text;
        $image->save();
        return redirect()->back();
    }
    public function destroy($id){
        $image = portfolio::find($id);
        $image->delete();
        return redirect()->back();
    }
    public function show($id){
        $image = portfolio::find($id);
        return view('pages/showPortfolio', compact('image'));
    }
    public function edit(Request $request, $id){
        $image = portfolio::find($id);
        $image->titre = $request->titre;
        $image->text = $request->text;
        $image->save();
        return redirect()->back();
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    
}
