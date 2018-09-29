<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class FileController extends Controller
{
    public function download($id)
    {
        $path = File::find($id)->path;
        $file = response()->download(storage_path('app/' . $path));

        return $file;
    }

    public function uploadChannelPicture(Request $request)
    {
        $attachment        = $request->attachment;
        $destinationPath   = 'uploads/';
        $original_filename = $attachment->getClientOriginalName();
        $type              = $attachment->getClientOriginalExtension();
        $path              = $attachment->store($destinationPath);

        $new_file                    = new File;
        $new_file->original_filename = $original_filename;
        $new_file->type              = $type;
        $new_file->path              = $path;
        $new_file->save();

        $channel          = Channel::find($request->channel_id);
        $channel->file_id = $new_file->id;
        $channel->save();

        return $channel;
    }
}
