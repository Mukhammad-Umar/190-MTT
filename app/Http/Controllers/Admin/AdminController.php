<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Admin main page.
     *
     * @return void
     */
     public function index()
      {
        return view('back.index');
      }
}
