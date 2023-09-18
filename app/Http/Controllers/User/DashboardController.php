<?php

namespace App\Http\Controllers\User;

use App\Charts\CheckupMonthlyChart;
use App\Http\Controllers\Controller;
use App\Models\Periksa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(CheckupMonthlyChart $checkupChart)
    {
        $number_of_inspection = Periksa::where('user_id', Auth::user()->id)->get();
        $last_check = Periksa::where('user_id', Auth::user()->id)->latest()->first();
        if ($last_check) {
            $next_inspection = $last_check->date;
        } else {
            $next_inspection = 'Belum ada pemeriksaan';
        }

        return view('user.dashboard', [
            'last_check' => $last_check,
            'number_of_inspection' => $number_of_inspection,
            'next_inspection' => $next_inspection,
            'checkupChart' => $checkupChart->build()
        ]);
    }
}
