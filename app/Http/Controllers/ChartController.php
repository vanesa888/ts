<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Kuis;

class ChartController extends Controller
{
    public function index()
    {

     
        // return view('chart');
        
        // $dtkuis = Kuis::select(\DB::raw("COUNT(*) as count"))
        //             ->whereStatus($status::raw())
        //             ->groupBy($status::raw())
        //             ->pluck('count');

        // return view('chart');
    }

    public function create()
    {
        $dtKuis = Kuis::All();
        return view('Kuis.frkuis', compact('dtKuis'));
    }

    public function store(Request $request)
    {
        //
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
