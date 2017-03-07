<?php

namespace App\Http\Controllers;
use App\Records;
class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){

        $month =  date('F');
        $day = date('j');

        $birthdays = Records::where('month',$month)->where('day', $day)->get();

        if(!Empty($birthdays)){
            return view('pages.home' ,compact('birthdays'));
        }

        return view('pages.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(){
        return view('pages.view');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        return view('pages.add');
    }
}
