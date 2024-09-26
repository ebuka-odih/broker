<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function deposits()
    {
        $deposits = Deposit::latest()->get();
        return view('admin.transactions.deposits', compact('deposits'));
    }
    public function withdrawal()
    {
        $withdrawals = Withdrawal::latest()->get();
        return view('admin.transactions.withdrawal', compact('withdrawals'));
    }
}
