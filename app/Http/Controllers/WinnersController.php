<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winners;
use App\Slider;

class WinnersController extends Controller
{
    public function Savewinners(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'gender' => 'required',
            'status' => 'required',
            // 'cateimage' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $winner = new Winners();

        if (Winners::where('name', '=', $winner->name = $request->get('name'))->count() > 0) {
            return redirect()->back()->with('fail', 'Winner already on list');
        } else {

            $winner->name = $request->name;
            $winner->gender = $request->gender;
            $winner->status = $request->status;
            $winner->save();
            // return view('admin.pages.listwinners', ['winner' => $winner]);
            return redirect()->back()->with('success', 'Winners created successfully!');
        }
    }

    public function Listwinners(Request $request)
    {
        $list = Winners::all();
        return view('admin.pages.listwinners', ['list' => $list]);
    }
    public function winnerslist(Request $request)
    {
        $listwin = Winners::all();
        return view('pages.winners', ['listwin' => $listwin]);
    }

    public function Editwinner($id)
    {
        $editwin = Winners::findOrFail($id);
        return view('admin.pages.editwinners', ['editwin' => $editwin]);
    }

    public function UpdateWinner(Request $request)
    {

        request()->validate([

            'name' => 'required',
            'gender' => 'required',
            'status' => 'required',
        ]);
        $updatewin = Winners::find(request("hdid"));
        $updatewin->name = request('name');
        $updatewin->gender = request('gender');
        $updatewin->status = request('status');
        // $updatecate->update($request->all());
        $updatewin->save();
        return back()->with('success', 'Winners list has been updated successfully.');
    }

    public function DeleteWinner($id)
    {
        $deletewin = Winners::find($id);
        $deletewin->delete();
        return back()->with('success', 'Category deleted successfully.');
    }

    public function Uploadslider(Request $request)
    {
        request()->validate([

            'slider' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = time() . '.' . request()->slider->getClientOriginalExtension();
        request()->slider->move(\public_path('sliders'), $image);

        $winslide = new slider();

        $winslide->image = $image;
        $winslide->save();

        return back()
            ->with('success', 'You have successfully upload a new slider')
            ->with('slider', $image);
    }
}