<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use App\Company;
use Illuminate\Http\Request;

class Kanri7_6Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('company')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_6.index', $param);
    }
    public function edit(Request $request)
    {
        $item = DB::table('company')->where('id',$request->id)->first();
        return view('Kanri7_6.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        DB::table('company')->where('id',$request->id)->update($param);
        return redirect('/Kanri7_6');
    }



    public function del(Request $request)
    {
        $item = DB::table('company')->where('id',$request->id)->first();
        return view('Kanri7_6.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('company')->where('id',$request->id)->delete();
        return redirect('/Kanri7_6');
    }
}
