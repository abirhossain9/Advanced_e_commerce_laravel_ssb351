<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){
            DB::table('branches')->insert([
            'name' => Str::random(5).' Branch',
            'bangla_name' => Str::random(5).' শাখা',
            'slug' => Str::random(10).'_'.Str::random(10),
            'address_line1' => Str::random(10),
            'address_line2' => Str::random(10),
            'email' => Str::random(10).'@ssb.com',
            'phone' => Str::random(10),
            'status' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        }

    }
}
