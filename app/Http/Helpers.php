<?php

use App\Models\action;
use App\Models\Message;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\User;

// use Auth;
class Helper{
    public static function messageList()
    {
        return Message::whereNull('read_at')->orderBy('created_at', 'desc')->get();
    } 
    public static function postTagList($option='all'){
        if($option='all'){
            return PostTag::orderBy('id','desc')->paginate(5);
        }
        return PostTag::has('posts')->orderBy('id','desc')->get();
    }

    public static function postCategoryList($option="all"){
        if($option='all'){
            return PostCategory::orderBy('id','DESC')->paginate(5);
        }
        return PostCategory::has('posts')->orderBy('id','DESC')->get();
    }
    public static function userList($option="all"){
        if($option='all'){
            return User::orderBy('id','DESC')->get();
        }
        return User::has('users')->orderBy('id','DESC')->get();
    }
    public static function actionList($option="all"){
        if($option='all'){
            return action::orderBy('id','DESC')->get();
        }
        return action::has('users')->orderBy('id','DESC')->get();
    }
}

?>