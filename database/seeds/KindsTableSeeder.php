<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('kinds')->insert([
    		['id'=>1,'Ten'=>'Giáo Dục','Ten_KhongDau'=>'Giao-Duc','ThuTu'=>1,'AnHien'=>1, 'idTL'=>1],
	        ['id'=>2,'Ten'=>'	
Nhịp Điệu Trẻ','Ten_KhongDau'=>'Nhip-Dieu-Tre','ThuTu'=>2,'AnHien'=>1,'idTL'=>2],
	        ['id'=>3,'Ten'=>'	
Du Lịch','Ten_KhongDau'=>'Du-Lich','ThuTu'=>3,'AnHien'=>1, 'idTL'=>3],
	        ['id'=>4,'Ten'=>'Du Học','Ten_KhongDau'=>'Du-Hoc','ThuTu'=>3,'AnHien'=>1,'idTL'=>4],
	        ['id'=>5,'Ten'=>'Cuộc Sống Đó Đây','Ten_KhongDau'=>'Cuoc-Song-Do-Day
','ThuTu'=>5,'AnHien'=>1,'idTL'=>5],
    	]);
    }
}
