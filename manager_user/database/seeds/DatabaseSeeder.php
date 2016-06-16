<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		'username' => 'Bế Văn Khánh',
        		'email' => 'khanhbv57@gmail.com',
                'level' => '1',
        		'password' =>Hash::make('123456'),
        	]);

        DB::table('roles')->insert([
        		'TenCD' => 'Quản lí',
        	]);
        DB::table('roles')->insert([
                'tenCD' => 'Trưởng phòng'
            ]);
        DB::table('roles')->insert([
                'tenCD' => 'Nhân viên'
            ]);

        DB::table('departments')->insert([
        		'TenPB' => 'phòng kế toán',
        	]);
        DB::table('departments')->insert([
        		'TenPB' => 'phòng hành chính',
        	]);
        DB::table('departments')->insert([
                'TenPB' => 'phòng Marketing',
            ]);

    }
}
