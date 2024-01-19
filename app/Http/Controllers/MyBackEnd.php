<?php

namespace App\Http\Controllers;

use App\Models\subsrcibe_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

use function Laravel\Prompts\table;

class MyBackEnd extends Controller
{
    public function view_login()
    {

        return view('client.loginpages.login');
    }
    public function view_signup()
    {
        return view('client.signupage.signup');
    }

    public function view_mainpage()
    {
        $table_data = subsrcibe_user::all();
        return view('client.homepages.mainpage', compact('table_data'));

    }
    public function view_historymain(){
        $table_data = $table_data = subsrcibe_user::where('Status', 'paid')->get();
        return view('client.historymain.historymain', compact('table_data'));
    }
    public function view_supportpage($acc_no)
    {
        $credentials = $acc_no;
       // dd($credentials);
        return view('client.homepages.supportpage',compact('credentials'));
        // return redirect()->route('client.homepages.supportpage', ['form' => $credentials]);
    }
    public function view_history($AccountNo)
    {
        // $credentials = $AccountNo

        $table_data = subsrcibe_user::where('AccountNo',$AccountNo)->get();
        return view('client.historypage.history', compact('table_data', 'AccountNo'));
    }
    
    public function view_profile()
    {
        return view('client.settingpage.profile');
    }

    public function view_user()
    {
        $table_data = subsrcibe_user::all();
        return view('client.userpage.user', compact('table_data'));
    }

    public function view_adduser()
    {
        return view('client.inputusers.adduser');
    }

    public function view_paymentpage($acc_no)
    {
        $credentials = $acc_no;

        return view('client.paymentpage.paymentpage',compact('credentials'));
    }
    public function edituser(string $id)
    {
        $id = decrypt($id);

        $data = subsrcibe_user::where('AccountNo', $id)->first();

        return view('client.edituser.edituser', compact('data'));
    }

    public function loginUser()
    {
        return view('client.loginuser.loginuser');
    }

    public function mainpageuser($acc_no)
    {
        $credentials  = $acc_no;
        

        return view('client.mainpageuser.mainpageuser',compact('credentials'));
    }

    public function subscribeuserpage()
    {
        return view('client.subscribeuserpage.subscribeuserpage');
        
    }
    public function account($AccountNo)
    {
        $data = subsrcibe_user::where('AccountNo', $AccountNo)->get();
        return view('client.account.account', compact('data','AccountNo'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        subsrcibe_user::where('AccountNo', $id)->update([
            'PreviousBill' => $data['previousbill'],
            'CurrentBill' => $data['currentbill'],
            'Wattage' => $data['wattage'],
            'Status' => $data['status']
        ]);

        return redirect(Route('view.user'));
    }
}
