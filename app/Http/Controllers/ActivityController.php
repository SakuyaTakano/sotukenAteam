<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Infomation;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //トロフィー画面
    public function acti(Request $request)
    {
        return view('activity.activity');
    }
    //トロフィー画面ここまで



    //レビュー画面
    public function rev(Request $request)
    {
        return view('activity.rev');
    }
    //レビュー画面ここまで



//ハンバーガーメニューの画面
    public function toro(Request $request)
    {
        return view('activity.toro');
    }

    public function ren(Request $request)
    {
        return view('activity.ren');
    }

    public function kon(Request $request)
    {
        return view('activity.kon');
    }

    public function kozin(Request $request)
    {
        return view('activity.kozin');
    }
//ハンバーガーメニューの画面ここまで

public function syousai(Request $request)
    {
        return view('activity.syousai');
    }

   
} 