<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompletedTask;
use Illuminate\Support\Facades\Auth;


class CompletedTaskController extends Controller
{
    public function list(){
        $per_page=2;

        $list = CompletedTask::where('user_id', Auth::id())
            ->orderBy('priority','DESC')
            ->orderBy('period')
            ->orderBy('created_at')
            ->paginate($per_page);
        //echo "<pre>\n"; var_dump($list); exit;
        return view('task.completed_list',['list' => $list]);
    }
}
