<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home',[
            $user_id = Auth::user()->id,
            $user = User::find($user_id),

            'articles' => $user->articles,
        ]);
    }

    public function setting()
    {
        return view('users.setting');
    }

    // update user function
    public function updateUser(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $name = Str::lower($request->input('name'));
        if(Str::wordCount($name) >= 1)
        {
            $splite = explode(" ",$name);
            $fname = array_shift($splite);
            $lname = implode("",$splite);
        }else{
            $fname = $name;
            $lname = "";
        }
        User::where('id',Auth::user()->id)->update([
            'name' => $name,
            'fname' => $fname,
            'lname' => $lname,
            'email' => Str::ucfirst($request->input('email')),
            'password' => Hash::make($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back();
    }
    // end update user function

    public function profile()
    {
        return view('users.profile',[
            $user_id = Auth::user()->id,
            $user = User::find($user_id),
            "user" => $user,
        ]);
    }

    public function avatar(Request $request)
    {
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar')->hashName();
                if(File::exists('storage/users/'.Auth::user()->avatar))
                {
                    File::delete('storage/users/'.Auth::user()->avatar);
                }
            $filename = $file.'.'.time();
            $path = $request->file('avatar')->storeAs('users',$filename,'public');

            User::where('id',Auth::user()->id)->update(['avatar' => $filename]);
        }
        return back();
    }
}
