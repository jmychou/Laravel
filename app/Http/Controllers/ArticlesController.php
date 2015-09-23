<?php namespace App\Http\Controllers;
header("Content-type:text/html;charset=utf-8");
use App\Artical;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Carbon\Carbon;
//use Illuminate\Http\Request;

class ArticlesController extends Controller {

	//
	public function index(){
		//$articles=Artical::all();

        //按日期从新到旧排序，第一种方法
        //$articles=Artical::latest('created_at')->get();

        //第二种
        $articles=Artical::orderBy('created_at','desc')->get();
		return view('articles.index')->with('articles',$articles);
	}

    /*
     * 展示页面
     */
	public function show($id){
		$arti=Artical::findOrFail($id);
		/*if(is_null($arti)){
			abort(404);
		}*/
        var_dump($arti->created_at);
		return view('articles.show')->with('articles',$arti);
	}

    /*
     * 创建文章
     */
	public function create(){
		return view('articles.create');
	}

    /*
     * 提交文章到数据库,后续修改
     */
	public function store(){
		$input=Request::all();
        //$input['created_at']=Carbon::now();
		Artical::create($input);
		return redirect('articles');
	}
}
