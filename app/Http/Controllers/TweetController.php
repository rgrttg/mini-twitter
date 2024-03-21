<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    // zeige alle Tweets an ~index~
    public function all(){
        return Tweet::all();
    }
    
    public function  store(Request $request) {
        $newTweet = Tweet::create([
            // 'datenbank' => $request->post-daten
            'title' => $request->requestTitle,
            'text' => $request->requestText,
        ]);
        // gebe Tweet zurück
        return $newTweet;
    }
    
    // zeige einen Tweet an ~show(id)~
    public function show(Request $request){
        // $tweet = Tweet::find($request->id);
        $tweet = Tweet::find($request->requestId);
        return $tweet;
    }
    
    // zeige den Tweet zum edieren an ~show(id)~
    // code löschen
    public function edit($id){
        $tweet = Tweet::find($id);
        return view('edit', ['tweets' => $tweet]);
    }

}
