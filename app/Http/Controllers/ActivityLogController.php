<?php

namespace App\Http\Controllers;

use App\Models\Activity_log;
use App\Http\Requests\StoreActivity_logRequest;
use App\Http\Requests\UpdateActivity_logRequest;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreActivity_logRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivity_logRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity_log  $activity_log
     * @return \Illuminate\Http\Response
     */
    public function show(Activity_log $activity_log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity_log  $activity_log
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity_log $activity_log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivity_logRequest  $request
     * @param  \App\Models\Activity_log  $activity_log
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivity_logRequest $request, Activity_log $activity_log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity_log  $activity_log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity_log $activity_log)
    {
        //
    }
}
