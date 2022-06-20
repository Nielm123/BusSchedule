<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use App\Models\Schedule;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showHome()
    {
        return view('user.home',[
            //pass current user to view
        'is_logged_in' => Auth::check()
            //check if user is logged in\

        ]);
    }

    public function showSchedules($id)
    {

        $busRoute = BusRoute::find($id);
        if(!$busRoute){
            return redirect(route('user.routes'))->with('status', "Id of bus route is invalid");
        }

        $schedules = Schedule::where('route_id', $id)->paginate(5);


        return view('user.schedules',[
            'is_logged_in' => Auth::check(),
            'schedules' => $schedules,
            'route' => $busRoute
        ]);
    }

    public function showRoutes()
    {
        return view('user.routes',[
            'is_logged_in' => Auth::check(),
            'routes' => BusRoute::paginate(5),
        ]);
    }

    public function showStops($id)
    {

        $schedlue = Schedule::find($id);



        if(!$schedlue){
            return redirect(route('user.schedules'))->with('status', "Id of bus schedule is invalid");
        }

        //redirect do not logout user


        //get paginated stops of this schedule
        $stops = $schedlue->stops()->paginate(5);
        return view('user.stops',[
            'is_logged_in' => Auth::check(),
            'schedule' => $schedlue,
            'stops' => $stops,
        ]);
    }
    public function showVehicle()
    {

        return view('user.vehicles',[
            'is_logged_in' => Auth::check(),
            'vehicles' => Vehicle::paginate(5),
        ]);
    }
}
