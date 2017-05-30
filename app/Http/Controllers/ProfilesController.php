<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
      public function profile($username)
    {
     return view('profiles.profile');  
    }
    
     public function edit()
    {
        return view('profiles.edit')->with('info', Auth::user()->profile);
    }


public function update(Request $r)
    {
        $this->validate($r, [
            'city' => 'required',
            'country' => 'required',
            'about' => 'required'
        ]);
        Auth::user()->profile()->update([
            'city' => $r->city,
            'country' => $r->country,
            'about' => $r->about
        ]);
        
        return redirect()->route('articles.index')->withOk("votre profile a été modifié avec succes.");
    }

}
