<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserCRUDController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Item::orderBy('id','DESC')->paginate(5);
        return view('UserCRUD.index');
        
    }
    
    public function show($id)
    {
        $user = user::find($id);
        return view('UserCRUD.show',compact('user'));
    }


    
}