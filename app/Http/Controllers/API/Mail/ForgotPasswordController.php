<?php

namespace App\Http\Controllers\API\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index(Request $request)
    {
        $email_user = User::where('email', $request->email)->first();
        if ($email_user) {
            $data = ['name' => $email_user->name, 'email' => $email_user->email, 'id' => $email_user->id];
            Mail::to($request->email)->send(new ForgotPasswordEmail($data));
            return redirect()->route('forgot_password')->with(['message' => 'success']);
        } else {
            return redirect()->route('forgot_password')->with(['message' => 'error']);
        }
    }


    public function update_password($any)
    {
        $id = base64_decode($any);
        dd($id);
    }
}
