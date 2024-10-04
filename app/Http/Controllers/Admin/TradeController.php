<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use App\Models\TradePair;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index()
    {
        $trades = Trade::all();
        $pairs = TradePair::all();
        return view('admin.trade.trade', compact('trades', 'pairs'));
    }

    public function store(Request $request)
    {
        $user = $request->get('user_id');
        $amount = $request->input('amount');

        if (!$user->canPlaceTrade()) {
            return back()->withErrors(['error' => 'You have reached your daily trade limit.']);
        }

        Trade::create([
            'user_id' => $user->id,
            'amount' => $amount,
            'status' => 'pending',
            'leverage' => $request->get('leverage'),
            'interval' => $request->get('interval'),
        ]);

        return back()->with('success', 'Trade placed successfully!');
    }

    public function  openTrades(){
        $trades = Trade::latest()->get();
        return view('admin.trade.open-trades', compact('trades'));
    }
    public function  closedTrades(){
        $trades = Trade::orderBy('updated_at', 'desc')->get();
        return view('admin.trade.closed-trades', compact('trades'));
    }

    public function closeTrade(Request $request, $id)
    {
        $trade = Trade::findOrFail($id);
        $trade->profit_loss = $request->get('profit_loss');
        $trade->status = 'closed';
        $trade->save();
        return redirect()->route('admin.closedTrades')->with('success', 'Trade closed successfully!');
    }

    public function destroy($id)
    {
        $trades = Trade::findOrFail($id);
        $trades->delete();
        return back()->with('success', 'Trade deleted successfully!');
    }

}
