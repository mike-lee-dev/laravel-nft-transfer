<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showUser()
    {
        $user_info = DB::table('users')
            ->select('users.*', 'admin_check')
            ->LeftJoin('user_info', 'users.id', 'user_info.user_id')
            ->get();
        return view('adminDash', ['users' => $user_info]);
    }

    public function userCheck(Request $request)
    {
        $user_id = $request['user_id'];
        DB::table('user_info')
            ->where('user_id', $user_id)
            ->update([
                'admin_check' => 1
            ]);
        return True;
    }

    public function showAccount()
    {
        $account_info = DB::table('account')
            ->select('users.name', 'account.*')
            ->LeftJoin('users', 'account.user_id', 'users.id')
            ->get();

        $users = DB::table('user_info')
            ->select('user_info.user_id', 'users.*')
            ->where('user_info.admin_check', 1)
            ->where('users.is_admin', 0)
            ->leftJoin('users', 'users.id', 'user_info.user_id')
            ->get();
        return view('admin.account', ['accounts' => $account_info, 'users' => $users]);
    }

    public function createAccount(Request $request)
    {
        $user_id = $request['user_id'];
        DB::table('account')
            ->insert([
                'user_id'       =>  $user_id,
                'point'         =>  0
            ]);
        return true;
    }

    public function accountAddPoint(Request $request)
    {
        $account_list = $request['account_id'];
        $method = $request['add_method'];
        $point = $request['point'];

        foreach ($account_list as $account_id)
        {
            if ($method == 1)
            {
                DB::table('account')
                    ->where('id', $account_id)
                    ->update([
                        'point'=>DB::raw('point+'.$point)
                    ]);
            }
            else if ($method == 2)
            {
                $percent = (100 + $point) / 100;
                DB::table('account')
                    ->where('id', $account_id)
                    ->update([
                        'point'=>DB::raw('point*'.$percent)
                    ]);
            }
        }

        return true;
    }

    public function showGroup()
    {
        $groups = DB::table('groups')
            -> get();
        $users = DB::table('user_info')
            ->select('user_info.user_id', 'users.*')
            ->where('user_info.admin_check', 1)
            ->where('users.is_admin', 0)
            ->leftJoin('users', 'users.id', 'user_info.user_id')
            ->get();
        return view('admin.group', ['groups' => $groups, 'users' => $users]);
    }

    public function createGroup(Request $request)
    {
        $group_name = $request['group_name'];
        DB::table('groups')
            ->insert([
                'group_name'    =>  $group_name,
            ]);
        return true;
    }

    public function getGroupMembers(Request $request)
    {
        $group_id = $request['id'];
        return DB::table('user_group')
            ->select('users.*', 'user_group.*')
            ->LeftJoin('users', 'users.id', 'user_group.user_id')
            ->where('group_id', $group_id)
            ->get();
    }

    public function addUserGroup(Request $request)
    {
        $user_id = $request['user_id'];
        $group_id = $request['group_id'];

        DB::table('user_group')
            ->insert([
                'user_id'   =>  $user_id,
                'group_id'  =>  $group_id
            ]);
        return true;
    }

    public function deleteUserGroup(Request $request)
    {
        $user_id = $request['user_id'];
        $group_id = $request['group_id'];

        DB::table('user_group')
            ->where([
                'user_id'   =>  $user_id,
                'group_id'  =>  $group_id
            ])
            ->delete();
        return true;
    }

    public function deleteGroup(Request $request)
    {
        $group_id = $request['group_id'];

        DB::table('user_group')
            ->where([
                'group_id'  =>  $group_id
            ])
            ->delete();
        DB::table('groups')
            ->where([
                'id'  =>  $group_id
            ])
            ->delete();
        return true;
    }

    public function groupAddPoint(Request $request)
    {
        $user_list = $request['user_id'];
        $method = $request['add_method'];
        $point = $request['point'];

        foreach ($user_list as $user_id)
        {
            $account_list = DB::table('account')
                ->select('id')
                ->where('user_id', $user_id)
                ->get();
            foreach($account_list as $account_id)
            {
                if ($method == 1)
                {
                    DB::table('account')
                        ->where('id', $account_id->id)
                        ->update([
                            'point'=>DB::raw('point+'.$point)
                        ]);
                }
                else if ($method == 2)
                {
                    $percent = (100 + $point) / 100;
                    DB::table('account')
                        ->where('id', $account_id->id)
                        ->update([
                            'point'=>DB::raw('point*'.$percent)
                        ]);
                }
            }
        }

        return true;
    }

    public function showHistory()
    {
        $history_data = DB::table('point_movement_history')
            ->select('point_movement_history.*')
            ->get();
        return view('admin.history', ['history_data' => $history_data]);
    }
}
