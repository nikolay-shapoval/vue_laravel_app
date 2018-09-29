<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 12.09.2018
 * Time: 13:08
 */

namespace App\Services;

use App\Models\Channel;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class YoutubeService
{
    const FEED_URL = '/subscription_manager.xml';

    public function fetchChannels()
    {
        $feed = simplexml_load_string(Storage::get('subscription_manager.xml'));

        foreach ($feed->body->outline->outline as $item) {
            $channel = simplexml_load_file($item->attributes()->xmlUrl);

            $channel_model        = new Channel();
            $channel_model->title = (string)$channel->title;
            $channel_model->description = '';
            $channel_model->url   = (string)$channel->author->uri;
            $channel_model->save();

            foreach ($channel->entry as $video) {
                $video_model            = new Video();
                $video_model->chanel_id = $channel_model->id;
                $video_model->title     = (string)$video->title;
                $video_model->url     = (string)$video->link->attributes()->href;
                $namespaces             = $video->getNamespaces(true);

                $video_model->description = (string)$video->children($namespaces['media'])->group->description;
                $video_model->image_url   = (string)$video->children($namespaces['media'])->group->thumbnail->attributes()->url;
                $video_model->save();
            }

        }

    }

}