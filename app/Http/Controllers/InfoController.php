<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function viewUser() {
        $user = auth()->user();
        // dd($user);
        return view('show-user', ['user' => $user]);
    }
}
