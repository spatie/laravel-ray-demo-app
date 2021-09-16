<?php

namespace App\Console\Commands;

use App\Mail\TestMailable;
use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ModelCommand extends Command
{
    protected $signature = 'model';

    public function handle()
    {
        ray()->newScreen();

        User::truncate();
        Role::truncate();

        $role = Role::create(['name' => 'admin']);

        $user = User::create([
            'name' => 'John',
            'password' => bcrypt('password'),
            'email' => now()->timestamp . '@example.com',
            'role_id' => $role->id,
        ]);

        $user = $user->fresh();
        $user->load('role');

        User::create([
            'name' => 'Paul',
            'password' => bcrypt('password'),
            'email' => now()->timestamp . '2@example.com',
            'role_id' => $role->id,
        ]);

        ray('single user');
        ray()->model($user);

        /*
        ray('Passing 2 models to model');
        ray()->model(User::find(1), User::find(2));

        ray('Passing a collection to model');

        ray()->model(User::all());

        ray('Passing 2 models to models');
        ray()->models(User::all());

        ray('it can handle null');
        ray()->model(null);
        */
    }
}
