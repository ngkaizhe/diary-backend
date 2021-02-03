<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        // show diaries
        if(request()->has('show_user') && request('show_user') === false){
            return redirect(action([DiaryController::class, 'index']));
        }

        // show users
        else{
            return redirect(action([UserController::class, 'index']));
        }
    }
}
