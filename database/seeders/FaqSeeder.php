<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('faqs')->insert([
            'username' => "admin",
            'faq' => "admin",
            'foto' => "profil.png",
            'created_at' => $now,
        ]);
    }
}
