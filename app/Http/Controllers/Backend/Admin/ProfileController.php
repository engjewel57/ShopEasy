<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{ public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('backend.admin.profile.dashboard');
    }
}
