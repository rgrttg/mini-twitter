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
        // return $request->title;
        // echo "Hello";
        $newTweet = Tweet::create([
            // 'datenbank' => $request->post-daten
            'title' => $request->requestTitle,
            'text' => $request->requestText,
        ]);

        // $this->show($newContact->id);
        // jetzt nach show weiterleiten
        // return redirect("/tweet/$newTweet->id");
        // im vue.js machen?
        return $newTweet;
    }
    
    // zeige einen Tweet an ~show(id)~
    public function show($id){
        $tweet = Tweet::find($id);
        return $tweet;
    }
    
    // zeige den Tweet zum edieren an ~show(id)~
    // code löschen
    public function edit($id){
        $tweet = Tweet::find($id);
        return view('edit', ['tweets' => $tweet]);
    }

}
