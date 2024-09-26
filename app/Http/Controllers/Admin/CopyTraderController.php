<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CopyTrader;
use Illuminate\Http\Request;

class CopyTraderController extends Controller
{
    public function traders()
    {
        $traders = CopyTrader::all();
        return view('admin.copy-trade.traders', compact('traders'));
    }
}
