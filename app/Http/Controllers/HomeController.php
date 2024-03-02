<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Vehicle;

class HomeController extends Controller


{
    public function home()
    {
        return redirect('dashboard');
    }

    public function dashboard()
    {
        $pageTitle = 'Dashboard';

        // User Info
        
        $widget['total_users'] = User::count();
        
        $widget['verified_users'] = User::where('status', 1)->count();
        $widget['email_unverified_users'] = User::where('ev', 0)->count();
        $widget['sms_unverified_users'] = User::where('sv', 0)->count();
        $widget['successful_payment'] = Deposit::where('status' , 1)->sum('amount');
        $widget['pending_payment'] = Deposit::where('status' , 2)->sum('amount');
        $widget['rejected_payment'] = Deposit::where('status' , 3)->sum('amount');
        $widget['total_counter'] = Counter::count();
        $widget['vehicle_with_ac'] = Vehicle::whereHas('fleetType', function($q){$q->where('has_ac', 1);})->count();
        $widget['vehicle_without_ac'] = Vehicle::whereHas('fleetType', function($q){$q->where('has_ac', 0);})->count();

        //latest booking history
        $soldTickets = BookedTicket::with('user')->where('status', 1)->latest()->take(5)->get();

        // Deposit Graph
        $deposit = Deposit::where('created_at', '>=', \Carbon\Carbon::now()->subDays(30))->where('status', 1)
            ->selectRaw('sum(amount) as totalAmount')
            ->selectRaw('DATE(created_at) day')
            ->groupBy('day')->get();
        $deposits['per_day'] = collect([]);
        $deposits['per_day_amount'] = collect([]);
        $deposit->map(function ($depositItem) use ($deposits) {
            $deposits['per_day']->push(date('d M', strtotime($depositItem->day)));
            $deposits['per_day_amount']->push($depositItem->totalAmount + 0);
        });

        // user Browsing, Country, Operating Log
        $userLoginData = UserLogin::where('created_at', '>=', \Carbon\Carbon::now()->subDay(30))->get(['browser', 'os', 'country']);

        $chart['user_browser_counter'] = $userLoginData->groupBy('browser')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_os_counter'] = $userLoginData->groupBy('os')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_country_counter'] = $userLoginData->groupBy('country')->map(function ($item, $key) {
            return collect($item)->count();
        })->sort()->reverse()->take(5);
        return view('dashboard', compact('pageTitle', 'widget', 'chart', 'deposits', 'soldTickets'));
    }


}








