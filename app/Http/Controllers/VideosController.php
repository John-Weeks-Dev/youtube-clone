<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideosController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_file = null;
        $video_file = null;

        $video = new Video;

        $image_file = $request->file('image');
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'video' => 'required|mimes:mp4'
        ]);
        $video_file = $request->file('video');
        $request->validate([ 'video' => 'required|mimes:mp4' ]);

        $thumbPath = '/videos/Thumbnails/';
        $vidPath = '/videos/';

        $extension = $image_file->getClientOriginalExtension();
        $imageName = time() . '.' . $extension;

        $extension = $video_file->getClientOriginalExtension();
        $videoName = time() . '.' . $extension;

        $video->title = $request->input('title');
        $video->video = $vidPath . $videoName;
        $video->thumbnail = $thumbPath . $imageName;
        $video->user = 'John Weeks Dev';
        $video->views = rand(10,100) . 'k views - ' . rand(1,6) . ' days ago';

        $image_file->move(public_path() . $thumbPath, $imageName);
        $video_file->move(public_path() . $vidPath, $videoName);

        if ($video->save()) {
            return redirect()->route('videos.show', $video['id']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('Video', [
            'video' => Video::find($id),
            'comments' => Comment::all(),
            'recommendedVideos' => Video::inRandomOrder()->limit(20)->get(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if (file_exists(public_path() . $video->video)) {
            unlink(public_path() . $video->video);
        }

        if (file_exists(public_path() . $video->thumbnail)) {
            unlink(public_path() . $video->thumbnail);
        }

        $video->delete();
        return redirect()->route('deleteVideo');
    }
}
