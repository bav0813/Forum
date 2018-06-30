<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Categories;
use App\Topics;


use DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->search;
        //       $articles = DB::table ( 'news' )->where ( 'description' , 'LIKE' , '%' . $query . '%' )->paginate ( 10 );
        //       $articles = News::where ( 'description' , 'LIKE' , '%' . $query . '%' )->paginate ( 10 );
        $articles[0]=DB::table('topics')
            ->leftjoin ('comments','comments.topic_id','=','topics.id')
            ->join('categories','categories.id','=','topics.category')
            ->select('topics.id as topic_id','topics.*','categories.description_en')
            ->where('topics.description','LIKE','%'.$query.'%')
        ->get();

        $articles[1]=DB::table('topics')
            ->leftjoin ('comments','topics.id','=','comments.topic_id')
            ->join('categories','topics.category','=','categories.id')
            ->select('topics.id as topic_id','topics.*','comments.comment','categories.description_en')
            ->where('comments.comment','LIKE','%'.$query.'%')
            ->paginate(10);

        //return view ( 'page.search' , compact ( 'articles' , 'query' ) );

       //dd($articles);

        //   $pos=strpos($articles[0]->description,$query);
        // dd($pos);

        return view ( 'search')->with(['articles' => $articles,'query'=>$query]);
    }

    public function livesearch(Request $request,$str)
    {
        $query = $str;
        $resp='';
//        $articles=DB::table('topics')
//
//            ->select('topics.*')
//            ->groupby('topics.description')
//            ->having('topics.description','LIKE','%'.$query.'%')
//            ->get();

        $articles[0]=DB::table('topics')
            ->leftjoin ('comments','comments.topic_id','=','topics.id')
            ->join('categories','categories.id','=','topics.category')
            ->select('topics.id as topic_id','topics.*','categories.description_en')
            ->where('topics.description','LIKE','%'.$query.'%')
            ->limit(5)
            ->get();

        foreach ($articles[0] as $key => $article){
            $resp.="<a href='/$article->description_en/$article->topic_id'>".$article->description.'</a><br>';
        }


        return response($resp);
    }

//    public function livesearchResults(Request $request,$str)
//    {
//        $articles=DB::table('topics')
//            ->join('categories','categories.id','=','topics.category')
//
//            //            ->join ('categories','categories.id','=','news.category')
//            ->select('topics.id as topic_id','topics.*','categories.description_en')
////            ->where('news.tags',$str)
//            ->paginate(5);
//        // dd($articles);
//        return view ( 'searchres')->with(['articles' => $articles]);
//
//
//    }
}
