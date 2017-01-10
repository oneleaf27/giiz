<?php
/*つかわない？？*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Giiz extends Model
{
    //
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const COUNT = 'count';
    const ID = 'id';

    //  テーブル名
    protected $table = 'giiz';

    // モデルのタイムスタンプを更新するかの指示(Def:true)
    public $timestamps = true;

    public function addCount() {
      $table->increment('count');
    }

    public function getCount() {
      $table->
      return ;
    }
}
