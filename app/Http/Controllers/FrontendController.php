<?php

namespace App\Http\Controllers;

use App\Models\action;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function team(){
        $users=User::orderBy('id','ASC')->paginate(10);
        return view('pages.team')->with('users',$users);
    }

    public function contact(){
        return view('pages.contact');
    }
    public function service(){
        return view('pages.service');
    }
    public function blog(){
        $post=Post::query();
        $posts=Post::getAllPost();
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=PostCategory::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            return $cat_ids;
            $post->whereIn('post_cat_id',$cat_ids);
            // return $post;
        }
        if(!empty($_GET['tag'])){
            $slug=explode(',',$_GET['tag']);
            // dd($slug);
            $tag_ids=PostTag::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // return $tag_ids;
            $post->where('post_tag_id',$tag_ids);
            // return $post;
        }

        if(!empty($_GET['show'])){
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate($_GET['show']);
        }
        else{
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate(9);
        }
        // $post=Post::where('status','active')->paginate(8);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post)->with('posts',$posts);
    }
    public function blogByTag(Request $request){

        $post=Post::getBlogByTag($request->slug);
        // return $post;
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }
    public function blogByCategory(Request $request){
        // dd($request->slug);
        $post=Post::getBlogByCategory($request->slug);
        // return $post;
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }
    public function blogSearch(Request $request){
        // return $request->all();
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $posts=Post::orwhere('title','like','%'.$request->search.'%')
            ->orwhere('quote','like','%'.$request->search.'%')
            ->orwhere('summary','like','%'.$request->search.'%')
            ->orwhere('description','like','%'.$request->search.'%')
            ->orwhere('slug','like','%'.$request->search.'%')
            ->orderBy('id','DESC')
            ->paginate(8);
        return view('pages.blog')->with('posts',$posts)->with('recent_posts',$rcnt_post);
    }
    public function blogDetail($slug){
        $post=Post::getPostBySlug($slug);
        $users = User::where('id', $post->added_by)->first();
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('pages.blog-detail')->with('post',$post)->with('recent_posts',$rcnt_post)->with('users',$users);
    }
    public function about(){
        $users=User::orderBy('id','ASC')->paginate(10);
        return view('pages.about')->with('users',$users);
    }
    public function portfolio(){
        $action=action::orderBy('id','ASC')->paginate(10);
        $post_tag=PostTag::orderBy('id','ASC')->paginate(5);
        return view('pages.portfolio')->with('action',$action)->with('post_tag',$post_tag);
    }
    public function blogFilter(Request $request){
        $data=$request->all();
        // return $data;
        $catURL="";
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catURL)){
                    $catURL .='&category='.$category;
                }
                else{
                    $catURL .=','.$category;
                }
            }
        }

        $tagURL="";
        if(!empty($data['tag'])){
            foreach($data['tag'] as $tag){
                if(empty($tagURL)){
                    $tagURL .='&tag='.$tag;
                }
                else{
                    $tagURL .=','.$tag;
                }
            }
        }
        // return $tagURL;
            // return $catURL;
        return redirect()->route('blog',$catURL.$tagURL);
    }
    public function portfolioDetail($slug){
        $action=action::where('slug',$slug)->first();
        return view('pages.portfolio-detail')->with('action',$action);
    }
}
