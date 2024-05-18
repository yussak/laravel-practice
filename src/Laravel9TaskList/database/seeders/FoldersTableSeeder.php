<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Carbonライブラリを使用するためインポート
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * foldersTable要テストデータ
     *
     * @return void
     */
    public function run()
    {
        // テストデータを３つ作成
        $titles = ['プライベート', '仕事', '旅行'];

        foreach ($titles as $title) {
            DB::table('folders')->insert([
                'title' => $title,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
