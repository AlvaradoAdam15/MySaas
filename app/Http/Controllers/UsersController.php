<?php

namespace App\Http\Controllers;

use App\Events\UserHasChanged;
use App\User;
use Cache;
use Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{


    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Cache::remember('query.users', 10, function(){
            return User::all();
        });

        return $users;
    }

    public function store()
    {
        User::create(['name' =>'Pepe', 'email' => 'pepe@pepitor.com']);

        $this->fireUserHasChanged();

//        Cache::forget('query.users');

//        Cache:flush();

    }

    public function update()
    {
        $user = User::first();

        $user->name='Pepita';

        $user->save;

        $this->fireUserHasChanged();

//        Cache::forget('query.users');

//        Cache:flush();
    }

    public function destroy($id)
    {
        User::destroy($id);

        $this->fireUserHasChanged();

//        Cache::forget('query.users');

//        Cache:flush();
    }

    private function fireUserHasChanged()
    {
        Event::fire(new UserHasChanged());

    }
}
