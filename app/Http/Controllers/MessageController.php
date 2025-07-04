<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index($id = null)
    {
        return view('Chatify::pages.app', ['id' => $id]);
    }
}
