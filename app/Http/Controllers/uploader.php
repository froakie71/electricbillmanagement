<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\subsrcibe_user;
use Illuminate\Routing\Route;

class uploader extends Controller
{
    public function add(Request $request)
    {   
        $table_data = subsrcibe_user::all();
        $created_at = Carbon::now()->toDateString();
        $request->validate([
            'accountno' => 'required',
            'email' => 'required|email',
            'password' => 'required|string',
            'previousbill' => 'required',
            'currentbill' => 'required',
            'wattage' => 'required',
            'status' => 'required'
        ]);
        $data = $request->all();
        subsrcibe_user::insert([
            'AccountNo' => $data['accountno'],
            'email' => $data['email'],
            'password' => $data['password'],
            'PreviousBill' => $data['previousbill'],
            'CurrentBill' => $data['currentbill'],
            'Wattage' => $data['wattage'],
            'Status' => $data['status'],
            'created_at' => $created_at,
            'img_path' => '/imgs/person.png'
        ]);

        return redirect(route('view.user', compact('table_data')));
    }
    public function delete(string $id) {
        $id = decrypt($id);
        if ($id != 0) {
            subsrcibe_user::where('AccountNo', $id)->delete();
        }
        return redirect(Route('view.user'));
    }
}
