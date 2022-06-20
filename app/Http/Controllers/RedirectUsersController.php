<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectUsersController extends Controller
{
public function showHome()
    {
        if (auth()->user()) {
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('user.home');
        }
    }
}
