<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->where('email','guest@guest.com')->first();

        $names = ['コンピュータサイエンス基礎','Linux基礎','HTML/CSS基礎'];
        $counter = 0;

        foreach($names as $name){
            DB::table('tutorials')->insert([
                'name' => $name,
                'user_id' => $user->id,
                'order_id' => $counter+1,
                'status' => $counter+1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $counter++;
        }


    }
}
