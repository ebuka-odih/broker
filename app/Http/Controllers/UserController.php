<?php

namespace App\Http\Controllers;

use App\Models\TradePair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $pairs = TradePair::all();
        return view('dashboard.index', compact('user', 'pairs'));
    }
}
