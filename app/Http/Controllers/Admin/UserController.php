<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::where('is_admin', 0)->latest()->paginate(6);
    return view('admin.users.index', compact('users'));
  }
}
