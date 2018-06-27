<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategories;
use App\Categories;
use App\Topics;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class CategoriesContoller extends Controller
{
    private $categories,$subcat,$cnt_subcat,$topics,$cnt_topics,$cnt_subcatcomm,$get_subcatcomm ;

    public function getCategoriesList()
    {

        $this->categories=Categories::get();
//        $cnt=count($this->categories);
        $this->getTop5Subcategories ();
        $this->cntTop5Subcategories();
        $this->getTopics();
        $this->cntTopics();
        $this->cntTop5SubCatComments();
        $this->getTop5SubCatComments();

        //  dd($this->cnt_subcat);

        //dd($this->categories);

        return view('main')->with ([
            'categories'=>$this->categories,
            'subcat'=>$this->subcat,
            'topics'=>$this->topics,
            'cnt_subcat'=>$this->cnt_subcat,
            'cnt_topics'=>$this->cnt_topics,
            'cnt_subcatcomm'=>$this->cnt_subcatcomm,
            'get_subcatcomm'=>$this->get_subcatcomm

        ]);

    }


    public function getTop5Subcategories(){

        for ($i=1;$i<=count($this->categories);$i++)
        {
            $this->subcat[$i]=DB::table('subcategories')->where('id',$i)->where('is_active',1)->orderBy('created_at','desc')->limit(5)->get();
           // $this->cnt_subcat[$i]=DB::table('topics')->where('subcategory',$i)->where('is_active',1)->count();
        }
       // $school = Subcategories::skip(0)->take(5)->get();
        //return view('main')->with('school', $school,'categories',$this->categories);
        return $this->subcat;
    }

    public function cntTop5Subcategories()
    {

        for ($i = 1; $i <= count ( $this->categories ); $i++) {
            $this->cnt_subcat[$i] = DB::table ( 'topics' )->where ( 'subcategory' , $i )->where ( 'is_active' , 1 )->count ();
        }

        return $this->cnt_subcat;
    }

    public function cntTop5SubCatComments()
    {

        //for ($i = 1; $i <= count ( $this->categories ); $i++) {
            $this->cnt_subcatcomm = DB::select('SELECT topic_id,subcategories.id as subcat_id, COUNT(topic_id) as sbcomm
                FROM comments join topics on comments.topic_id=topics.id
                join subcategories on topics.subcategory=subcategories.id
                where topics.category=1  
                GROUP BY subcategories.id');
       // }
       // dd($this->cnt_subcatcomm);

        return $this->cnt_subcatcomm;
    }

    public function getTop5SubCatComments()
    {

        //for ($i = 1; $i <= count ( $this->categories ); $i++) {
        $this->get_subcatcomm = DB::select('select * from
            (SELECT topic_id,subcategories.id as subcat_id,comments.comment
            FROM comments join topics on comments.topic_id=topics.id
            join subcategories on topics.subcategory=subcategories.id
            where topics.category=1
            order by comments.created_at desc) x  
            group by x.subcat_id');
        // }
      //   dd($this->get_subcatcomm);

        return $this->get_subcatcomm;
    }



    public function getTopics(){


            $this->topics=DB::select('select topics.id as tpc_id,description,category,comment  from topics  left join (
            select * from
            (select * from comments order by `topic_id`, comments.created_at desc) x group by `topic_id`) z on topics.id=z.topic_id');
     //   }
//dd($this->topics);
        return $this->topics;
    }

    public function cntTopics(){

        $this->cnt_topics=DB::select('SELECT topic_id, COUNT(topic_id) as cnt_comm FROM comments
     GROUP BY topic_id');
//dd($this->cnt_topics);

        return $this->cnt_topics;
    }




    public function allschools()
    {
        $school = Subcategories::paginate(5);
        return view('schools')->with('school', $school);

    }

    public function getschool($id)
    {

        $topics=DB::table('topics')
            ->join('subcategories','subcategories.id','=','topics.subcategory')
            ->select('topics.*','subcategories.description as sub_descr')
            ->where('subcategory',$id)
            ->paginate(5);
        $sub_descr=DB::table('topics')
            ->join('subcategories','subcategories.id','=','topics.subcategory')
            ->select('subcategories.description')
            ->where('subcategory',$id)
            ->first();



        if (!isset($sub_descr->description))
        {
            $sub_descr='';
        }
        else
            $sub_descr=$sub_descr->description;
       // dd($topics);
        return view('schools_single')->with([
            'topics'=> $topics,
            'sub_descr'=>$sub_descr,

            ]);

    }

    public function getcategoryindex($id)
    {
      //  $topics = Topics::where('category',$id)->paginate(5);

        $topics=DB::table('topics')
                ->join('categories','categories.id','=','topics.category')
                ->select('topics.*','categories.description_en','categories.description as cat_descr')
                ->where('categories.description_en',$id)
                ->paginate(5);

//dd($topics);
        return view('categories')->with([
            'topics'=> $topics,
            'cat_en'=>$id,
            'cat_ru'=>$topics[0]->cat_descr]);
    }

    public function getsingletopic($category,$id)
    {
        $cat=DB::table ('categories')->where('description_en',$category)->first();
        //test
        if (!Auth::check()){
            $user=\App\User::whereName("Anonymous")->firstOrFail();


        }
        else {
            $user = Auth()->user();


        }


        $topics=DB::table ('topics')->where('category',$cat->id)->where('id',$id)->get(); //works
        $comments=DB::table ('comments')
            ->join('topics','topics.id','=','comments.topic_id')
            ->join('users','users.id','=','comments.user_id')
            ->select ('topics.*','comments.*','users.name')
            ->where('topics.id',$id)
            ->where ('comments.is_active',1)
            ->orderBy ('comments.created_at','asc')
            ->get();
       // dd ($comments);

        return view('topic')->with([
            'topics' => $topics[0],
            'category'=>$cat->description,
            'comments'=>$comments,
            'category_en'=>$cat->description_en,
            'user'=>$user]);

    }


    public function getTopicbySchool($school_id,$topic_id)
    {
        $cat=1;
        $user = Auth()->user();


        $topics=DB::table ('topics')->where('category',1)->where('id',$topic_id)->get(); //works
        $comments=DB::table ('comments')
            ->join('topics','topics.id','=','comments.topic_id')
            ->join('users','users.id','=','comments.user_id')
            ->select ('topics.*','comments.*','users.name')
            ->where('topics.id',$topic_id)
            ->where ('comments.is_active',1)
            ->orderBy ('comments.created_at','asc')
            ->get();
        //dd ($user);

        return view('topic')->with([
            'topics' => $topics[0],
            'category'=>$cat,
            'comments'=>$comments,
            'category_en'=>'schools',
            'user'=>$user]);

    }


}
