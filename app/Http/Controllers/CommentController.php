<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\TinTuc;
use App\Http\Requests;

class CommentController extends Controller
{
    //
    public function getXoa($id,$idTinTuc){
    	$comment = Comment::find($id);
    	$comment->delete();
    	return redirect('admin/tintuc/sua/'.$idTinTuc)->with('thongbao','Delete comment sussess');	
    }
}
