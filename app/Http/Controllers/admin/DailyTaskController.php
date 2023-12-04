<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DailyTask;

class DailyTaskController extends Controller
{
    public function index()
    {
        $daily_task = DailyTask::all();
        return view('admin.dailytask.index', compact('daily_task'));
    }
    public function create()
    {
        return view('admin.dailytask.add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'link' => 'required',
            'description' => 'required',
            'price' => 'required',
            'level' => 'required',
            'plan' => 'required',

        ]);

        $product = new DailyTask();
        $product->link = $validated['link'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];
        $product->level = $validated['level'];
        $product->plan = $validated['plan'];
        $product->save();
        return redirect()->back()->with('success', 'Task Added successfully');
    }

    public function show($id)
    {
        // $product = AdminProductModel::find($id);

    }

    public function edit($id)
    {
        $daily_task = DailyTask::find($id);
        return view('admin.dailytask.edit', compact('daily_task'));
    }


    public function update(Request $request, $id)
    {
        $product = DailyTask::find($id);


        $product->title = $request->title;
        $product->description = $request->description;

        $product->save();
        return redirect()->back()->with('success', 'Task Updated successfully');
    }


    public function destroy($id)
    {
        $product = DailyTask::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Task Deleted successfully');
    }
}
