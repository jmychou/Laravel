<?php namespace App\Http\Controllers;
header("Content-type:text/html;charset=utf-8");
use App\Artical;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Request;
use Carbon\Carbon;
//取消引入Request类，添加创建的FromRequest类
//use Illuminate\Http\Request;
 use App\Http\Requests\ArticalRequest;
class ArticlesController extends Controller {

	//
	public function index(){
		//$articles=Artical::all();

        //按日期从新到旧排序，第一种方法
        //$articles=Artical::latest('created_at')->get();

        //第二种
        //$articles=Artical::orderBy('created_at','desc')->where('created_at','<=',Carbon::now())->get();

        //条件选择
        $articles=Artical::orderBy('created_at','desc')->Created()->get();
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
        var_dump($arti->created_at->addDays(8));
        //dd($arti->created_at); //laravel 的方法

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
	//public function store(Request $request){
        //第一种位validate类验证
       // $this->validate($request, ['title' => 'required|min:3','body' => 'required','created_at' => 'required|date']);

        //第二种用FromRequest类验证
    public function store(ArticalRequest $request){
		$input=$request->all();
        //$input['created_at']=Carbon::now();
		Artical::create($input);
		return redirect('articles');
	}

    /**
     * 编辑文章
     */
    public function edit($id){
        $article=Artical::findOrFail($id);
        return view('articles.edit')->with('articles',$article);
    }

    /**
     * 更新文章
     */
    public  function  update($id,ArticalRequest $request){
        $article =Artical::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }

}
