<?php

namespace App\Http\Controllers;

use App\Classes\DBHelper;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get the request parameter
        // sort_by
        $sort_by = request()->get('sort_by');
        // ascending order or descending order
        $is_ascen = request()->get('is_ascen');

        //
        $users = User::all();
        $columns = User::columns();

        $users_collection = collect([]);

        // update some values of the $diaries_collection var
        foreach ($users as $user){
            $tempUser = [];

            $tempUser[$columns[0]] = $user->id;
            $tempUser[$columns[1]] = $user->name;
            $tempUser[$columns[2]] = $user->email;
            $tempUser[$columns[3]] = date('Y/m/d', strtotime($user->email_verified_at));
            $tempUser[$columns[4]] = date('Y/m/d', strtotime($user->created_at));

            $users_collection->push($tempUser);
        }

        if($sort_by !== null){
            $users = $users_collection->sortBy($columns[$sort_by]);
            if(!$is_ascen){
                $users = $users->reverse();
            }
        }
        else{
            $users = $users_collection;
        }

        return response()
            ->view('user.index', compact(['users', 'columns']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
