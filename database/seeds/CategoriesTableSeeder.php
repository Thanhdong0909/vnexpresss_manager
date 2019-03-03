<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
    		['id'=>1,'TenTL'=>'Xã Hội','TenTL_KhongDau'=>'Xa-Hoi','ThuTu'=>1,'AnHien'=>1],
	        ['id'=>2,'TenTL'=>'Thế Giới','TenTL_KhongDau'=>'The-Gioi','ThuTu'=>2,'AnHien'=>1],
	        ['id'=>3,'TenTL'=>'Kinh Doanh','TenTL_KhongDau'=>'Kinh-Doanh','ThuTu'=>3,'AnHien'=>1],
	        ['id'=>4,'TenTL'=>'Văn Hóa','TenTL_KhongDau'=>'Van-Hoa','ThuTu'=>3,'AnHien'=>1],
	        ['id'=>5,'TenTL'=>'Thể Thao','TenTL_KhongDau'=>'The-Thao','ThuTu'=>5,'AnHien'=>1],
    	]);
        
    }
}
