<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEvents = Event::count();
        $totalTransactions = Transaction::count();
        $recentEvents = Event::with('category')->latest()->take(5)->get();
        $recentTransactions = Transaction::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalEvents', 'totalTransactions', 'recentEvents', 'recentTransactions'));
    }
}