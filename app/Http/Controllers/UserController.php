<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Flash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::all();
        return view('dashboard.user.index', ['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(UserController $user)
    {

        $url = '/dashboard/user/store';
        return view('dashboard.user.create', ['user' => $user,'url'=>$url]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = \Input::all();

        $validation = Validator::make($input, User::$rules_create);

        if($validation->fails()){
            Flash::error('User not created!');
            return redirect()->back()
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }

        if($validation->passes()){
            $input['password'] = bcrypt($input['password']);
            User::create($input);
            Flash::success('User created!');
            return redirect('/dashboard/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(UserController $user)
    {
//        $user = User::all();
        return view('dashboard.user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $url = '/dashboard/user/'.$id.'/update';
        return view('dashboard.user.edit', ['user' => $user,'url'=>$url]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = \Input::all();

        $validation = Validator::make($input, User::$rules);

        if($validation->fails()){
            return redirect()->back()
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }

        if($validation->passes()){
            $user = User::FindOrFail($id);
            $input['password'] = bcrypt($input['password']);
            $user->update($input);

            return redirect('/dashboard/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/');
    }

}
