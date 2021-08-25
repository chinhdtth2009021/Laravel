<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{

    public function index()
    {
        $list = Event::all();
        return  view('.vent.events.index',[
            'list'=>$list]);

        //
    }


    public function create()
    {
        return view('.event.events.create');
        //
    }


    public function store(Request $request)
    {
        $event = new Event();
        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        $event->name =$name;
        $event->description =$description;
        $event->price =$price;
        $event->save();
        return redirect('/index');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
    public function add(Request $request){
        $name = $request->get('name');
        Session::put('name', $name);
        return 'Ok';
    }
    public function get(){
        $name = Session::get('name');
        return 'wecome ,' . $name;
    }
}
