<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\User;
use App\Models\action;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action=action::getAllAction();
        $profile=Auth()->user();
        // return $posts;
        return view('pages.backend.action.index')->with('action',$action)->with('profile',$profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=PostCategory::get();
        $tags=PostTag::get();
        $users=User::get();
        $profile=Auth()->user();
        return view('pages.backend.action.create')->with('users',$users)->with('categories',$categories)->with('tags',$tags)->with('profile',$profile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'tags'=>'nullable',
            'added_by'=>'nullable',
            'post_cat_id'=>'required',
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();

        $slug=Str::slug($request->title);
        $count=action::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;

        $tags=$request->input('tags');
        if($tags){
            $data['tags']=implode(',',$tags);
        }
        else{
            $data['tags']='';
        }
        // return $data;

        $status=action::create($data);
        if($status){
            request()->session()->flash('success','Post Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('action.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=action::findOrFail($id);
        $categories=PostCategory::get();
        $tags=PostTag::get();
        $users=User::get();
        return view('backend.post.edit')->with('categories',$categories)->with('users',$users)->with('tags',$tags)->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=action::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
            'title'=>'string|required',
            'quote'=>'string|nullable',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'tags'=>'nullable',
            'added_by'=>'nullable',
            'post_cat_id'=>'required',
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();
        $tags=$request->input('tags');
        // return $tags;
        if($tags){
            $data['tags']=implode(',',$tags);
        }
        else{
            $data['tags']='';
        }
        // return $data;

        $status=$post->fill($data)->save();
        if($status){
            request()->session()->flash('success','Post Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('action.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=action::findOrFail($id);
       
        $status=$post->delete();
        
        if($status){
            request()->session()->flash('success','Post successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting post ');
        }
        return redirect()->route('action.index');
    }
}
