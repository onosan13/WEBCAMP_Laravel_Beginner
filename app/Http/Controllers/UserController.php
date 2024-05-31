<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterPost;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //登録画面表示
    public function index(){
        return view('user.register');
    }

    //登録処理
    public function register(UserRegisterPost $request){
        $datum = $request->validated();
        $datum['password'] = Hash::make($datum['password']);

        try{
            $r = UserModel::create($datum);
        }catch(\Throwable $e){
            echo $e->getMessage();
            exit;
        }


        //登録成功のデータ
        $request->session()->flash('user.register_success', true);
        //登録出来たらトップに戻る
        return redirect('');
    }
}
