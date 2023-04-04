<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StrategyMonth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $strategy = \App\Models\Strategy::all();

        return view('front.home', [
            'strategies' => $strategy
        ]);
    }

    public function calculateGrowth(Request $request)
    {
        $capitol = $request->capitol;
        $month = $request->month;
        $strategy = $request->strategy;

        $str = StrategyMonth::where('strategy_id', $strategy)->limit($month)->get();

        $profit = $capitol;

        foreach ($str as $s) {
            $profit += ($profit * ($s->month_gain / 100));
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'profit' => $profit
            ]
        ]);
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function services()
    {
        return view('front.service');
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function checkout()
    {
        return view('front.checkout');
    }

    public function terms()
    {
        return view('front.terms');
    }


    public function calculator()
    {
        $strategy = \App\Models\Strategy::all();
        return view('front.calculator', [
            'strategies' => $strategy
        ]);
    }
}
