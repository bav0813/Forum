<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use App;

class BanIpController extends Controller
{
    public function getallIPbanned()
    {
        $ipban=DB::table ('ipbans')->paginate(20);
        return view('admin.dashboard.ban_ip_list')->with(['ipban'=>$ipban]);

    }

    public static function is_banned($ip)
    {
        $status=false;
        $st=DB::table('ipbans')
                ->where('ip',$ip)
                ->where('time_till','>',Carbon::now())
                ->count();
        if ($st>0) $status=true;
        return $status;

    }

    public function addIP4ban(Request $request)
    {
        $newip=$request->hostip;
        //dd ($newip);
        DB::table ('ipbans')->insert(['ip' => $newip, 'time_from' => Carbon::now(),'time_till'=>Carbon::now()->addHours(24)]);
        return back();

    }
}
