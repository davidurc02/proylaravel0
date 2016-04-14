<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $layout = 'layouts.master';

    public function showProfile()
    {
        $this->layout->content = View::make('user.profile');
    }
    
    public function index()
    {

        $users = User::all();
        return View('users.index') -> with('users', $users);  //'users' es la variable que se va a usar en la View
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View('users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $user = new User;
        $user->real_name = $request->real_name;
        $user->email = $request->email;
        $user->save();
        */
        $inputs = $request->all();
        //return $inputs;

        $user = User::create($inputs);
        
        //return "Se ha guardado un nuevo usuario"; //Documentación: responses, redirect //ESTO SIRVE
        //return redirect()->route('user.index');       //ESTO SIRVE
        return redirect()->action('UsersController@index');     //ESTO SIRVE

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        //return $user;
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$user = User::where('id', $id)->first();//TAMBIEN SIRVE
        $user = User::find($id);
        //return $user;
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->real_name = $request->real_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$user = User::find($id)
        //    ->delete();
        
        User::destroy($id);
        return redirect()->route('user.index');
    }
}
