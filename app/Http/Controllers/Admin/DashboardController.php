<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

  public function __construct()
  {
    //$this->middleware('auth');
  }

  public function index() {
    return view('admin.app');
  }

  public function login() {
    return view('admin.login');
  }

  public function dashboard() {
    return view('admin.dashboard');
  }

  public function home() {
    return view('admin.home');
  }

}
