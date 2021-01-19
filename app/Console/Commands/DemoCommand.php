<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {
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

        ray()->raw($user);
        return;
        User::create([
            'name' => 'Paul',
            'password' => bcrypt('password'),
            'email' => now()->timestamp . '2@example.com',
            'role_id' => $role->id,
        ]);

        ray()->model($user);
        ray(now());
    }
}
