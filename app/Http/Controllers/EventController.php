<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function saveEvent(Request $request)
    {
        
        // Validate the incoming request
        $request->validate([
            'summary' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            // Add more validation rules as needed
        ]);

        // Create a new event instance and save it to the database
        $event = new Event();
        $event->summary = $request->input('summary');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->customer_id = Auth::id();
       
        // Set other attributes accordingly

        $event->save();

        return response()->json(['message' => 'Event saved successfully']);
    }

    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end','summary']);
  
             return response()->json($data);
        }
  
        return view('calender-event');
    }
 
    public function manageEvent(Request $request)
    {
        switch ($request->type) {
            
            case 'add':
                
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                    'customer_id'=>Auth::id(),
                    'summary'=>$request->summary
                ]);
    
                return response()->json($event);
                break;
    
            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
    
                return response()->json($event);
                break;
    
            case 'delete':
                $event = Event::find($request->id)->delete();
    
                return response()->json($event);
                break;
                
            default:
                
                break;
        }
    }
}
