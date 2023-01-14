<?php

namespace App\Http\Controllers;

use App\Models\workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkspaceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

    }
    public function index()
    {

    }
    public function noheader()
    {
        Session(['noheader' => 'value']);
        Session()->put('noheader', '1');
        return view('crm/workspace/chooseworkspace');
    }
    public function nh_chooseworkspace()
    {
        Session(['noheader' => 'value']);
        Session()->put('noheader', '1');
        return view('crm/workspace/choose');
    }
    public function nh_add_workspace()
    {
        Session(['noheader' => 'value']);
        Session()->put('noheader', '1');
        return view('crm/workspace/add');
    }
    public function nh_add_buss_dtl()
    {
        Session(['noheader' => 'value']);
        Session()->put('noheader', '1');
        return view('crm/workspace/bussinessdetail');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function show(workspace $workspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function edit(workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workspace $workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(workspace $workspace)
    {
        //
    }
}
