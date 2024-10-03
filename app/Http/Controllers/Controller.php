<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Carbon\Carbon;

abstract class Controller
{
    public function checkTradeDuration()
    {
        $openTrades = Trade::where('status', 'open')->get();

        foreach ($openTrades as $trade) {
            $tradeOpenedAt = Carbon::parse($trade->created_at);
            $tradeDuration = $trade->duration;

            if (now()->diffInMinutes($tradeOpenedAt) >= $tradeDuration) {
                $trade->status = 'closed';
                $trade->save();
            }
        }

        // You can return or log something if needed, or leave this function as void
    }
}
