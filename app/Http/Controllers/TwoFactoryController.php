<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TwoFactoryController extends Controller
{
    //
    public function index()
    {
        return view('auth.verify');
    }

    public function store(Request $request)
    {
        $user = auth()->user();


        if($user->code == $request->code)
        {

            $user->resetCode();

            return redirect()->route('dashboard');
        }

        return redirect()->route('verifyed')->withErrors(['meg'=>'فيه غلط في الحقل بتاعك ي معلمة']);
    }
}
