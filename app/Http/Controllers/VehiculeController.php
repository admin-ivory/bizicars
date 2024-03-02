<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index()
    {
        
        return view('vehicles', [
            'vehicles' => Vehicle::all()
             
        ]);
    }

    public function vehicles(){
        $widget['total_vehicules'] = Vehicle::count();
        $pageTitle = 'All Vehicles';
        $emptyMessage = 'No vehicles found';
       // $fleetType = FleetType::where('status', 1)->orderBy('id','desc')->get();
        $vehicles = Vehicle::with('fleetType')->orderBy('id','desc')->paginate(getPaginate());
        return view('guichets', compact('pageTitle', 'emptyMessage', 'vehicles', ));
    }
}
