<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function users()
   {
       $users = User::latest()->get();
       return view('admin.user.list', compact('users'));
   }

   public function deleteUser($id)
   {
       $user = User::findOrFail($id);
       $user->delete();
       return redirect()->back()->with('success', 'User has been deleted');
   }



}
