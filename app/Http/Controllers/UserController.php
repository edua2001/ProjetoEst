<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('users.index' ,[
            'users' => DB::table('users')->orderBy('name')-> paginate(10)

        ]);
    }

    public function edit($id)
    {
        return view ('users.edit' ,[
            'user' => ModelsUser::findOrFail($id)
        ]);
    }
    public function update(Request $id)
    {
        ModelsUser::findOrFail($id -> id)->update($id ->all());
        return redirect() -> route('user.index');
    }
}
