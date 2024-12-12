<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalReservation = Reservation::count();
        $totalGallery = Gallery::count();
        $totalPackages = Package::count();

        return view('admin.dashboard', compact('totalUser', 'totalReservation', 'totalGallery', 'totalPackages'));
    }
}
