<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\TradePair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function trade($id)
    {
        $pairs = TradePair::all();
        $trade_pair = TradePair::findOrFail($id);
        $user = Auth::user();
        $trades = Trade::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.trade.trade', compact('pairs', 'trade_pair', 'user', 'trades'));
    }

    public function placeTrade(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'leverage' => 'required',
            'duration' => 'required',
            'trade_pair_id' => 'required',
        ]);
        if ($request->amount <= \auth()->user()->balance){
            $trade = new Trade();
            $trade->amount = $validated['amount'];
            $trade->leverage = $validated['leverage'];
            $trade->duration = $validated['duration'];
            $trade->trade_pair_id = $validated['trade_pair_id'];
            $trade->action_type = $request->get("action_type");
            $trade->user_id = Auth::id();
            $trade->save();

            $user = Auth::user();
            $user->balance -= $trade->amount;
            $user->save();
            return redirect()->back()->with('success', 'Trade Order Placed');
        }
        return redirect()->back()->with('error', 'Insufficient Balance');
    }

    public function closeTrade($id)
    {
        $trade = Trade::findOrFail($id);
        $trade->status = "closed";
        $trade->save();
        return redirect()->back()->with('success', 'Trade Closed');
    }
}
