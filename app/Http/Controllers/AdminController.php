<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use App\Models\Schedule;
use App\Models\Stop;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function deleteVehicle(Request $request){
        $vehicle = Vehicle::find($request->id);
        if(!$vehicle){
            return redirect(route('admin.vehicles'))->with('status', "Id of vehicle is invalid");
        }
        $vehicle->delete();
        return redirect()
            ->back()
            ->with('status', __('Vehicle has been deleted'));
    }

    public function deleteRoute(Request $request){
        $route = BusRoute::find($request->id);
        if(!$route){
            return redirect(route('admin.routes'))->with('status', "Id of bus route is invalid");
        }
        $route->delete();
        return redirect()
            ->back()
            ->with('status', __('Route has been deleted'));
    }
    public function deleteSchedule(Request $request){
        $schedule = Schedule::find($request->id);
        if(!$schedule){
            return redirect(route('admin.schedules'))->with('status', "Id of bus schedule is invalid");
        }
        $schedule->delete();
        return redirect()
            ->route('admin.schedules',['id'=>$schedule->route_id])
            ->with('status', __('Schedule has been deleted'));
    }
    public function deleteStop(Request $request){

        $stop = Stop::find($request->id);
        $schedule_id = $stop->schedule_id;

        if(!$stop){
            return redirect(route('admin.stops',['schedule_id'=>$schedule_id]))->with('status', "Id of bus stop is invalid");
        }
        $stop->delete();

        return redirect(route('admin.stops',['schedule_id'=>$schedule_id]))
            ->with('status', __('Stop has been deleted'));
    }



    public function createVehicle(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        $vehicle = Vehicle::create([
            'name' => $request->name,
            'type' => $request->type,
        ]);

        return redirect(route('admin.vehicles'))
            ->with('status', __('New Vehicle has been added'));

    }

    public function createRoute(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'vehicle_id' => 'required|exists:vehicles,id',
        ]);


        $route = BusRoute::create([
            'name' => $request->name,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return redirect(route('admin.routes'))
            ->with('status', __('New Route has been added'));
    }
    public function createSchedule(Request $request){

        $request->validate([
            'route_id' => 'required|integer|exists:routes,id'
            ]);
        //create new schedule
        Schedule::create([
            'route_id' => $request->route_id,
        ]);

        return redirect(route('admin.schedules',['id'=>$request->route_id]))
            ->with('status', __('New Schedule has been added'));
    }
    public function createStop(Request $request){

        //join id to request
        $request->merge(['id' => $request->route('schedule_id')]);
        //validate request
        $request->validate([
            'schedule_id' => 'required|integer|exists:schedules,id',
            'name' => 'required|string|max:255',
            'hour'=>'required|integer|between:0,23',
            'minute'=>'required|integer|between:0,59',
        ]);
        //create stop
        Stop::create([
            'schedule_id' => $request->schedule_id,
            'name' => $request->name,
            'hour' => $request->hour,
            'minute' => $request->minute,
        ]);

        return redirect(route('admin.stops',['id'=>$request->schedule_id]))
            ->with('status', __('New Stop has been added'));
    }
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

    public function showHome()
    {
        return view('admin.home',[
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


        return view('admin.schedules',[
            'is_logged_in' => Auth::check(),
            'schedules' => $schedules,
            'route' => $busRoute
        ]);
    }

    public function showRoutes()
    {
        return view('admin.routes',[
            'vehicles' => Vehicle::all(),
            'is_logged_in' => Auth::check(),
            'routes' => BusRoute::paginate(5),
        ]);
    }

    public function showStops($id)
    {

        $schedlue = Schedule::find($id);

        if(!$schedlue){
            return redirect(route('admin.schedules'))->with('status', "Id of bus schedule is invalid");
        }




        //get paginated stops of this schedule
        $stops = $schedlue->stops()->paginate(5);
        return view('admin.stops',[
            'is_logged_in' => Auth::check(),
            'schedule' => $schedlue,
            'stops' => $stops,
        ]);
    }
    public function showVehicle()
    {

        return view('admin.vehicles',[
            'is_logged_in' => Auth::check(),
            'vehicles' => Vehicle::paginate(5),
        ]);
    }
}
