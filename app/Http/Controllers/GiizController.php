<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Response;
use Log;
use DB;

class GiizController extends Controller
{
    //
    public function addCount() {
      Log::debug("ガルパンはいいぞ！");
      DB::table('giiz')->increment('count', 1);
      //$iiz = DB::table('giiz')->where('id', 1)->first();
      $count = DB::table('giiz')->where('id', 1)->value('count');
      return Response::json($count);
    }

    // 現在のカウンタを返す
    public function getCount() {
      Log::debug("ガルパンはいいのか？");
      $count = DB::table('giiz')->where('id', 1)->value('count');
      return Response::json($count);
    }
}
