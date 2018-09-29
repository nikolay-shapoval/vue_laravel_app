<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 12.09.2018
 * Time: 13:18
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Models\Comment;

class ApiController extends Controller
{
    public function getBloggers(Channel $channel)
    {
        return $channel::with('comments')->get();
    }

    public function getBlogger(Channel $channel)
    {
        return $channel::with('comments')->get();
    }

    public function getVideos(Channel $channel)
    {
        return $channel->videos;
    }

    public function updateBlogger(Channel $channel, Request $request)
    {
        $channel->title       = $request['params']['title'];
        $channel->url         = $request['params']['url'];
        $channel->description = $request['params']['description'];
        $channel->is_visible  = $request['params']['is_visible'];
        $channel->save();

        return $channel;
    }

    public function storeComment(Request $request)
    {
        $comment             = new Comment;
        $comment->type       = $request['params']['type'] ? $request['params']['type'] : 'comment';
        $comment->text       = $request['params']['text'];
        $comment->item_id    = $request['params']['item_id'];
        $comment->is_visible = $request['params']['is_visible'];
        $comment->save();

        return $comment;
    }
}