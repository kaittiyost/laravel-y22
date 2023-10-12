<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Exception;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){

        $games = Game::all();

        return view('game.showall', compact('games'));
    }

    public function create(){
        return view('game.create');
    }

    public function upload(Request $request){
        try {
            $g = Game::create([
                'title' => $request->title,
                'description' => $request->description,
                'slug' => $request->slug,
                'thumbnail' => $request->file('thumbnail')->getClientOriginalName(),
                'user_id' => session('user')->id
            ]);

            $game_id = $g->id;

        } catch (Exception $e) {
            return redirect('/game/create')->withErrors('Error Upload! :'.$e->getMessage());
        }

        try {
            $request->file('thumbnail')->storeAs($request->slug, $request->file('thumbnail')->getClientOriginalName());
        } catch (Exception $e) {
            return redirect('/game/create')->withErrors('Error Thumbnail! :'.$e->getMessage());
        }

        try {
            $zip = new \ZipArchive();
            if($zip->open($request->file('gamefile')) === true){
                $path = $request->file('gamefile')->store($request->slug);
                $zip->extractTo(storage_path('app/'.$request->slug));
                $game_name = $request->file('gamefile')->getClientOriginalName();

                $basename = explode('.', $game_name)[0];
                rename(storage_path('app/'.$request->slug.'/'.$basename), storage_path('app/'.$request->slug.'/FileGame'));
            }
        } catch (Exception $e) {
            return redirect('/game/create')->withErrors('Error GameFile! :'.$e->getMessage());
        }
    }

    public function play($slug){
        $game = Game::where('slug',$slug)->first();
        return view('game.play',compact('game'));
    }
}
