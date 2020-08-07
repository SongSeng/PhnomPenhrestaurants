<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class UserListController extends Controller {


    public function index()
    {
        $users = DB::select('select * from users');
        return view('admin/user_list', ['users'=>$users]);
    }

}