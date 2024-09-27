<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TradePairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cryptoPairs = [
            'BTC/BCH', 'ETH/LTC', 'BTCETH', 'XRP/BTC', 'ADA/ETH',
            'DOT/USDT', 'BNB/USDT', 'SOL/ETH', 'LTC/USDT', 'DOGE/BTC'
        ];

        $stockPairs = [
            'AAPL/MSFT', 'GOOGL/AMZN', 'TSLA/FB', 'NFLX/AMD', 'INTC/NVDA',
            'BA/F', 'KO/PEP', 'DIS/T', 'GS/JPM', 'XOM/CVX'
        ];

        $forexPairs = [
            'EUR/USD', 'GBP/USD', 'USD/JPY', 'AUD/USD', 'USD/CAD',
            'NZD/USD', 'USD/CHF', 'EUR/GBP', 'EUR/JPY', 'GBP/JPY'
        ];

        foreach ($cryptoPairs as $pair) {
            DB::table('trade_pairs')->insert([
                'type' => 'crypto',
                'pair' => $pair,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($stockPairs as $pair) {
            DB::table('trade_pairs')->insert([
                'type' => 'stock',
                'pair' => $pair,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($forexPairs as $pair) {
            DB::table('trade_pairs')->insert([
                'type' => 'forex',
                'pair' => $pair,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

}
