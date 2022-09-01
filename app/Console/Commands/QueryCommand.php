<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class QueryCommand extends Command
{
    protected $signature = 'query';

    public function handle()
    {
        ray()->newScreen();

        ray()->showQueries();

        DB::statement("SELECT * FROM users /*controller='UsersController',action='index'*/");
return;
        User::where('name', '??? test')->get();

        return;

        $user = User::first();

        //$user->update(['name' => ' ? name ?' . now()->timestamp]);

        ray()->stopShowingQueries();


        User::where('name', 'test')->get();

        /*
        ray()->countQueries(function() {
            $user = User::first();
            $user = User::first();
            $user = User::first();
        });
        */
    }
}
