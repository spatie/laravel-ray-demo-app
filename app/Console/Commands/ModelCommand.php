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
        $role = Role::create(['name' => 'admin']);

        /** @var \App\Models\User $user */
        $user = User::create([
            'name' => 'John',
            'password' => bcrypt('password'),
            'email' => now()->timestamp . '@example.com',
            'role_id' => $role->id,
        ]);

        $user = $user->fresh();

        $user->load('role');

        var_dump($user->relationsToArray());

        ray()->model($user);
    }
}
