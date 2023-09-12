<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Periksa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{

    public function step_checkup()
    {
        return view('user.tata_cara_periksa');
    }

    public function index()
    {
        $data = Periksa::where('user_id', Auth::user()->id)->latest()->first();
        return view('user.periksa', [
            'data' => $data
        ]);
    }

    public function start()
    {
        Periksa::create([
            'user_id' => Auth::user()->id,
            'gula_darah' => 0,
            'detak_jantung' => 0,
            'status' => '',
            'date' => Carbon::now()
        ]);
        return redirect('app/checkup/index');
    }


    public function cancel($id)
    {
        Periksa::destroy($id);
        return redirect('/app/checkup');
    }

    public function reset($id)
    {
        $data = Periksa::findOrFail($id);
        $data->update(['gula_darah' => 0.00, 'detak_jantung' => 0.00]);
        return redirect('app/checkup/index');
    }
}
