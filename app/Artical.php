<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model {

	//设置要提交的数据库，若没有特别指定，系统会默认自动对应名称为「类名称的小写复数形态」的数据库表。
    protected  $table='articals';

    //要填充的字段
    protected  $fillable=[
        'title',
        'body',
        'created_at'
    ];

}
