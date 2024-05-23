<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRegisterPostRequest;

class TaskController extends Controller
{
    /**
     * タスク一覧を表示する
     *
     * @return \Illuminate\View\View
     */
     public function list()
     {
         return view('task.list');
     }

    /**
     * タスクの新規登録
     */
    public function register(TaskRegisterPostRequest $request)
    {
        //validate済のデータの取得
        $datum = $request->validated();
        var_dump($datum); exit;
    }
}
