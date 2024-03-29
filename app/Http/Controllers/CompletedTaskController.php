<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompletedTask;
use Illuminate\Support\Facades\Auth;

class CompletedTaskController extends Controller
{
    /**
     * 完了タスク一覧を表示する
     * 
     * @return \Illuminate\View\View
     */
    public function list()
    {
        // 1Pageあたりの表示アイテム数を設定
        $per_page = 20;
       
        // 一覧の取得
        $completed_list = CompletedTask::where('user_id', Auth::id())
                                       ->orderBy('created_at')
                                       ->orderBy('period')
                                       ->paginate($per_page);
                                      // ->get();
//$sql = CompletedTask::where('user_id', Auth::id())->orderBy('created_at')->toSql();
//echo "<pre>\n"; var_dump($sql, $list); exit;
//var_dump($sql);
        
        //
        return view('task.completed_list', ['completed_list' => $completed_list]);
    }
}
