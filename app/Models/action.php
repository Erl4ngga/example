<?php

namespace App\Models;

use App\Models\action as ModelsAction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Action as NotificationsAction;

class action extends Model
{
    public $table = "action";
    protected $fillable=['title','tags','slug','description','photo','post_cat_id','post_tag_id','added_by','status'];
    public function cat_info(){
        return $this->hasOne('App\Models\PostCategory','id','post_cat_id');
    }
    public function tag_info(){
        return $this->hasOne('App\Models\PostTag','id','post_tag_id');
    }

    public function author_info(){
        return $this->hasOne('App\Models\User','id','added_by');
    }
    public static function getAllAction(){
        return action::with(['cat_info','author_info'])->orderBy('id','DESC')->paginate(10);
    }
    // public function get_comments(){
    //     return $this->hasMany('App\Models\PostComment','post_id','id');
    // }
    public static function getActionBySlug($slug){
        return Post::with(['tag_info','author_info'])->where('slug',$slug)->where('status','active')->first();
    }

}
