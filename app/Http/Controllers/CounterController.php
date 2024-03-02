<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
class CounterController extends Controller
{
    public function index()
    {
        
        return view('guichets', [
            'guichets' => Counter::all()
             
        ]);
    }
    public function indexx(){
        $widget['total_vehicules'] = Vehicle::count();
        $pageTitle = 'All Vehicles';
        $emptyMessage = 'No vehicles found';
       // $fleetType = FleetType::where('status', 1)->orderBy('id','desc')->get();
        $vehicles = Vehicle::with('fleetType')->orderBy('id','desc')->paginate(getPaginate());
        return view('vehicles', compact('pageTitle', 'emptyMessage', 'vehicles', ));
    }
}
