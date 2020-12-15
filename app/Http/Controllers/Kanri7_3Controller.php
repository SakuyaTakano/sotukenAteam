<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
//use App\User;
use Illuminate\Http\Request;
use Validator;
class Kanri7_3Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = DB::table('users')->orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_3.index', $param);
    }
    public function edit(Request $request)
    {
        $item = DB::table('users')->where('id',$request->id)->first();
        return view('Kanri7_3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'sex' => $request->sex,
            'weight' => $request->weight,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'email' => $request->email,
            'postal_code' => $request->postal_code,
        ];
        DB::table('users')->where('id',$request->id)->update($param);
        return redirect('/Kanri7_3');
    }



    public function del(Request $request)
    {
        $item = DB::table('users')->where('id',$request->id)->first();
        return view('Kanri7_3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('users')->where('id',$request->id)->delete();
        return redirect('/Kanri7_3');
    }
}