<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Periksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        $data = Periksa::where('user_id', Auth::user()->id)->get();
        return view('user.riwayat', [
            'data' => $data
        ]);
    }
}
