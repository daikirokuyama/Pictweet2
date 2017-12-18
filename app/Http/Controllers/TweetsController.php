<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweet;
use Auth;

class TweetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', array('except' => 'index'));
    }

    public function index()
    {
        $tweets = Tweet::with('user')->orderBy('id', 'DESC')->paginate(5);
        return view('tweets.index')->with('tweets', $tweets);
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        Tweet::create(
            array(
            'image' => $request->image,
            'text' => $request->text,
            'user_id' => Auth::user()->id,
            )
        );
        return view('tweets.store');
    }

    public function destroy($id)
    {
        if (Tweet::find($id)->user_id == Auth::user()->id) {
            Tweet::destroy($id);
        }

        return view('tweets/destroy');
    }

    public function edit($id)
    {
        $tweet = Tweet::find($id);
        return view('tweets.edit')->with('tweet', $tweet);
    }

    public function update($id, Request $request)
    {
        $tweet = Tweet::find($id);
        $tweet->update(
            array(
            'image' => $request->image,
            'text' => $request->text,
            )
        );
        return view('tweets.update');
    }
}
