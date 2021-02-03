<?php

namespace App\Http\Controllers;

use App\Models\userDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserDetailsController extends Controller
{
    public function __construct()
    {
        //The prevent.back.history middleware prevents the user from accessing the homepage via the back button after the user has logged out.
        //The auth middleware means only users who are logged in to the site can access these pages.
        $this->middleware('auth');
        $this->middleware('prevent.back.history');
    }

    public function index(){
        //Returns the username of the user who is logged in with the secure page view.
        $user = Auth::user();

        return view('userDetails.secure', compact('user'));
    }
}
