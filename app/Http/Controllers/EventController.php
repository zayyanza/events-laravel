<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('home',['events' => $events]);
    }

    public function createEvent(Request $request){
        $incomingFields = $request->validate([
            'nama_event' => 'required',
            'tempat' => 'required',
            'waktu' => 'required'
        ]);
        $incomingFields['nama_event'] = strip_tags($incomingFields['nama_event']);
        $incomingFields['tempat'] = strip_tags($incomingFields['tempat']);
        $incomingFields['waktu'] = strip_tags($incomingFields['waktu']);
        
        Event::create($incomingFields);
        return redirect('/');
    }

    public function edit(Event $event){
        return view('edit-event',['event' => $event]);
    }

    public function update(Event $event, Request $request){
        $incomingFields = $request->validate([
            'nama_event' => 'required',
            'tempat' => 'required',
            'waktu' => 'required'
        ]);
        $incomingFields['nama_event'] = strip_tags($incomingFields['nama_event']);
        $incomingFields['tempat'] = strip_tags($incomingFields['tempat']);
        $incomingFields['waktu'] = strip_tags($incomingFields['waktu']);
        
        $event->update($incomingFields);
        return redirect('/');
    }

    public function delete(Event $event){
        $event->delete();
        return redirect('/');
    }
}
