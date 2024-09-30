<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\TradePair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $pairs = TradePair::all();
        $user = Auth::user();
        $trades = Trade::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.index', compact('pairs', 'user', 'trades'));

    }
}
