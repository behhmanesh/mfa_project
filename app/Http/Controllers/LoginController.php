<?php

namespace App\Http\Controllers;

use App\Models\v;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //login 
        return 'this is login page';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function show(v $v)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function edit(v $v)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, v $v)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\v  $v
     * @return \Illuminate\Http\Response
     */
    public function destroy(v $v)
    {
        //
    }
}
