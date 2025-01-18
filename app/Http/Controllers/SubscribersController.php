<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;

class SubscribersController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validInputs = $request->validate([
            'phone' => 'required'
        ]);

        try
        {
            Subscribers::create($validInputs);
            return back()->with('message', 'Thanks for contacting us.');
        }
        catch (\Throwable $th) {
            return back()->with(['exception' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
