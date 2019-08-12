<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\SweetAlertServiceProvider;
use DraperStudio\SweetFlash\ServiceProvider;
use App\Grant;
use App\Orders;
use App\Verification;

class GrantController extends Controller
{
    public function Listgrant(Request $request)
    {
        $lists = Grant::all();
        return view('pages.grantlist', ['lists' => $lists]);
    }

    public function orderGrant(Request $request)
    {
        $id = request("id");
        $order = Grant::where("id", $id)->first();
        return view('pages.order', ['id' => $id, 'order' => $order]);
    }

    public function Savegrant(Request $request)
    {
        $this->validate(request(), [
            // 'image' => 'required',
            'amount' => 'required',
            'cashout' => 'required',
            // 'cateimage' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $grant = new Grant();

        if (Grant::where('amount', '=', $grant->amount = $request->get('amount'))->count() > 0) {
            return redirect()->back()->with('fail', 'Amount already on list');
        } else {

            $grant->image = 'images/our-cheffs1.jpg';
            $grant->amount = $request->amount;
            $grant->cashout = $request->cashout;
            $grant->save();
            // return view('admin.pages.listwinners', ['winner' => $winner]);
            return redirect()->back()->with('success', 'Grant created successfully!');
        }
    }

    public function Viewgrant(Request $request)
    {
        $lists = Grant::all();
        return view('admin.pages.view-grant', ['lists' => $lists]);
    }

    public function EditViewGrant($id)
    {
        $editgrant = Grant::findOrFail($id);
        return view('admin.pages.editgrants', ['editgrant' => $editgrant]);
    }

    public function UpdateGrant(Request $request)
    {
        $updategrant = Grant::find(request("hdid"));
        $updategrant->amount = request('amount');
        $updategrant->cashout = request('cashout');
        $updategrant->save();
        return back()->with('success', 'Grant has been updated successfully.');
    }

    public function DeleteViewGrant($id)
    {
        $deletegrant = Grant::find($id);
        $deletegrant->delete();
        return back()->with('success', 'Grant deleted successfully.');
    }

    public function Saveverify(Request $request)
    {
        $this->validate(request(), [
            // 'image' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'mother' => 'required',
            'job' => 'required',
            'income' => 'required',
            'nextofkin' => 'required',
            // 'cateimage' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        if (Verification::where('name', '=', $request->name = $request->get('name'))->count() > 0) {
            return redirect()->back()->with('fail', 'Winner already verified !!!');
        } else {
            $verify = Verification::create([
                'name'      => $request->name,
                'address'         => $request->address,
                'phone'      => $request->phone,
                'email'      => $request->email,
                'mother'      => $request->mother,
                'job'        => $request->job,
                'income'   => $request->income,
                'nextofkin'   => $request->nextofkin,
                'subject'   => 'Testing',
            ]);
            return redirect()->back()->with('success', 'Winner verified successfully!');
        }
    }


    public function Saveorder(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'deal' => 'required',
            'message' => 'required',
            // 'cateimage' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        $orders = new Orders();

        if (Orders::where('email', '=', $orders->email = $request->get('email'))->count() > 0) {
            return redirect()->back()->with('fail', 'Email already exist');
        } else {
            $orders->name = $request->name;
            $orders->email = $request->email;
            $orders->phone = $request->phone;
            $orders->deal = $request->deal;
            $orders->message = $request->message;
            $orders->save();
            // return view('admin.pages.listwinners', ['winner' => $winner]);
            return redirect()->back()->with('success', 'Ordered successfully!');
        }
    }
}