<?php

namespace App\Http\Controllers\Dashboard;

use App\Delivery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $deliveries = Delivery::all();
        return view('dashboard.dashboard')->with([
            'deliveries' => $deliveries
        ]);
    }
}
