<?php

namespace App\Http\Controllers\Client\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.dashboard.index',['title' => 'User Dashboard']);
    }
}
