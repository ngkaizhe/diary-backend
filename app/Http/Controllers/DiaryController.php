<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
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
        $diaries = Diary::all();
        $columns = Diary::columns();

        $diaries_collection = collect([]);

        // update some values of the $diaries_collection var
        foreach ($diaries as $diary){
            $tempDiary = [];

            $tempDiary[$columns[0]] = $diary->id;
            $tempDiary[$columns[1]] = $diary->user->id;
            $tempDiary[$columns[2]] = $diary->user->name;
            $tempDiary[$columns[3]] = str_limit($diary->title, $limit = 10, $end = '...');
            $tempDiary[$columns[4]] = str_limit($diary->content, $limit = 20, $end = '...');
            $tempDiary[$columns[5]] = date('Y/m/d', strtotime($diary->diary_date));
            $tempDiary[$columns[6]] = date('Y/m/d', strtotime($diary->created_at));

            $diaries_collection->push($tempDiary);
        }

        if($sort_by !== null){
            $diaries = $diaries_collection->sortBy($columns[$sort_by]);
            if(!$is_ascen){
                $diaries = $diaries->reverse();
            }
        }
        else{
            $diaries = $diaries_collection;
        }

        return response()
            ->view('diary.index', compact(['diaries', 'columns']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()
            ->view('diary.create');
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
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function show(Diary $diary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function edit(Diary $diary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diary $diary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diary $diary)
    {
        //
    }
}
