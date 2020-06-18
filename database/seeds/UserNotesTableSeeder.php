<?php

use Illuminate\Database\Seeder;

class UserNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 2)->create()->each(function ($u) {
            $u->note()->saveMany(
                factory(\App\Models\Note::class, rand(1, 2))->make()
            );
        });
    }
}