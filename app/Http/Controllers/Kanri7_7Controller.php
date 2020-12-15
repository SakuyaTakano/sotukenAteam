<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class Kanri7_7Controller extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $items = Event::orderBy($sort,'asc')->paginate(5);
        $param = ['input' => '','items' => $items, 'sort' => $sort];
        return view('kanri7_7.index', $param);
    }
    public function edit(Request $request)
    {
        $item = Event::find($request->event_id);
        return view('Kanri7_7.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Event::$rules);
        $event = Event::find($request->event_id);
        $form = $request->all();
        $event->timestamps = false;
        unset($form['_token']);
        $event->fill($form)->save();
        return redirect('/Kanri7_7');
    }
}
