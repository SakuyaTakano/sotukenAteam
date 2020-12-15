<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use App\Administrator;
use Illuminate\Http\Request;

class Kanri7_8Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('administrator')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('kanri7_8.index', $param);
    }
    public function edit(Request $request)
    {
        $item = DB::table('administrator')->where('id',$request->id)->first();
        return view('Kanri7_8.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('administrator')->where('id',$request->id)->update($param);
        return redirect('/Kanri7_8');
    }
}
