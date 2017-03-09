<?php

namespace App\Http\Controllers;

use App\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(){

        $this->validate(request(),[
            'name' => 'required|min:3',
            'month' => 'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'day' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
            'level' => 'required|in:100,200,300,400',
        ]);

        $records = new Records;

        $records->create(request()->all());

        \Session::flash('added', 'Your Operation was Successfull');

        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show() {
        $this->validate(request(),[
            'month' => 'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
        ]);

        $records = Records::where('month', request()->month)->orderBy('day','ASC')->paginate(10);

        if($records->isEmpty()){
            \Session::flash('empty', 'You Search returned an empty result. Please try again');
            return back();
        }

        return view('pages.show', compact('records'));
    }

    /**
     *
     */
    public function week() {
        $month =  date('F');
        $day = date('j');

        return view('pages.week');
    }
}
