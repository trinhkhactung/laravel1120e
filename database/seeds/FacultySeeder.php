<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty')->insert([
        	[
				'title'        =>	'Công nghệ thông tin',
				'descriptions' =>	'Mô tả về khoa',
				'notes'        =>	'Ghi chú về khoa'
        	],

        	[
        		'title'        =>	'Thiết kế đồ họa',
				'descriptions' =>	'Mô tả về khoa',
				'notes'        =>	'Ghi chú về khoa'
        	],

        	[
        		'title'        =>	'Điện tử truyền thông',
				'descriptions' =>	'Mô tả về khoa',
				'notes'        =>	'Ghi chú về khoa'
        	],
        ]);
    }
}
