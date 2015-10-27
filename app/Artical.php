<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Artical extends Model {

	//设置要提交的数据库，若没有特别指定，系统会默认自动对应名称为「类名称的小写复数形态」的数据库表。
    protected  $table='articals';

    //要填充的字段
    protected  $fillable=[
        'title',
        'body',
        'created_at'
    ];

    //设置要填充的字段的属性，命名方式为 set+字段名+Attribute
   public  function setCreatedAtAttribute($date){

        //  此方法会设置日期的格式，如果是以后的日期，则时分秒为零点
        //$this->attributes['created_at']=Carbon::parse($date);

        //  此方法会设置日期的格式，如果是以后的日期，则时分秒为当前时间的时分秒
        $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public  function  scopeCreated($query){
        $query->where('created_at','<=',Carbon::now());
    }

    public function user(){
        return $this->belongsTo('App/User');
    }
}
