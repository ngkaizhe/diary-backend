<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return response()->json([
            'status_code' => 200,
            'message' => 'Diaries retrieved successfully',
            'diaries' => $user->diaries()->get(
                [
                    'id',
                    'title',
                    'content',
                    'diary_date',
                ]
            ),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the diary from the request
        $validator = $this->validateDiary($request);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 400,
                'message' => 'Diary failed validation',
            ]);
        }

        $diary = new Diary($validator->valid());
        $diary->user_id = Auth::user()->id;
        $diary->save();

        return response()->json([
            'status_code' => 200,
            'message' => 'Diary stored successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Diary $diary
     * @return \Illuminate\Http\Response
     */
    public function show(Diary $diary)
    {
        // you shouldn't called this function
        return response()->json([
            'status_code' => 400,
            'message' => 'Bad Request',
        ]);
        //
//        if (auth()->user()->id == $diary->user_id) {
//            return response()->json([
//                'status_code' => 200,
//                'message' => 'Diary retrieved successfully',
//                'diary' => $diary,
//            ]);
//        } else {
//            return response()->json([
//                'status_code' => 400,
//                'message' => 'Bad Request',
//            ]);
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Diary $diary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diary $diary)
    {
        //
        $validator = $this->validateDiary($request);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 400,
                'message' => 'Diary failed validation',
            ]);
        }

        if ($diary->user_id == Auth::user()->id) {
            $diary->update($validator->valid());
            $diary->save();

            return response()->json([
                'status_code' => 200,
                'message' => 'Diary updated successfully',
            ]);
        } else {
            return response()->json([
                'status_code' => 400,
                'message' => 'You dont have enough rights',
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Diary $diary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diary $diary)
    {
        if ($diary->user_id == Auth::user()->id) {
            //
            $diary->delete();

            return response()->json([
                'status_code' => 200,
                'message' => 'Diary deleted successfully',
            ]);
        } else {
            return response()->json([
                'status_code' => 400,
                'message' => 'You dont have enough rights',
            ]);
        }

    }

    // help to validate the input request
    private function validateDiary(Request $request)
    {
        // change the type of diary_date from 'string' to 'date'
        // $request->diary_date = date($request->diary_date);

        return Validator::make($request->all(), [
            'title' => ['required'],
            'content' => ['required'],
            'diary_date' => ['required', 'date', 'before:tomorrow'],
        ]);
    }
}
