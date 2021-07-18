<?php

namespace App\Http\Controllers;

use App\Models\EventTeamplate;
use Illuminate\Http\Request;

class EventTeamplateController extends Controller
{

    public function index()
    {
        $listEvent = EventTeamplate::all();
        return view('/users/list', ['list'=>$listEvent]);
        //
    }
    public function create()
    {
        return view('/users/form');
        //
    }
    public function store(Request $request)
    {
        $events = new EventTeamplate();
        $events->fill($request->all());
        $events->save();
        return $events;
        //
    }
    public function save(Request $request)
    {
        $detailEvent = new EventTeamplate();
//        $detailEvent->eventName = $request->get('eventName');
//        $detailEvent->bandNames = $request->get('bandNames');
//        $detailEvent->startDate = $request->get('startDate');
//        $detailEvent->endDate = $request->get('endDate');
//        $detailEvent->portfolio = $request->get('portfolio');
//        $detailEvent->ticketPrice = $request->get('ticketPrice');
//        $detailEvent->status = $request->get('status');
        $detailEvent->update($request->all());
        $detailEvent->save();
        return "Edit success";
    }
    public function show($id)
    {

        //
    }
    public function edit(EventTeamplate $eventTeamplate)
    {
        //
    }
    public function update($id)
    {
        $currentEvent = (new EventTeamplate)->find($id);
        return view('EventTeamplate/event/edit',[
            'current' => $currentEvent
        ]);
        //
    }
    public function destroy(EventTeamplate $eventTeamplate)
    {
        //
    }
    public function delete($id)
    {
        $detailEvent = EventTeamplate::find($id);
        $detailEvent->delete();
        return redirect('/EventTeamplate/event/list');
    }
}
