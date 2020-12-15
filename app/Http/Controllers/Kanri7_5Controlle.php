<?php

namespace App\Http\Controllers;
use App\Site;
use Illuminate\Http\Request;

class Kanri7_5Controlle extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = Site::orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('Kanri7_5.index', $param);
    }
    public function edit(Request $request)
    {
        $item = Site::find($request->site_id);
        return view('Kanri7_5.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Site::$rules);
        $site = Site::find($request->site_id);
        $form = $request->all();
        $site->timestamps = false;
        unset($form['_token']);
        $site->fill($form)->save();
        return redirect('/Kanri7_5');
    }
}
