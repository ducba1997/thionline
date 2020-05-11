<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('GenderDatabaseSeeder');
        $this->call('ChapterDatabaseSeeder');
        $this->call('GradeDatabaseSeeder');
        $this->call('PermissionDatabaseSeeder');
        $this->call('LevelDatabaseSeeder');
        $this->call('UsersDatabaseSeeder');
        
    }
}
class GenderDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('gender')->insert([
            ['name'=>'Nam'],
            ['name'=>'Nữ'],
            ['name'=>'Không xác định']
        ]);
    }
}
class ChapterDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('chapter')->insert([
            ['name'=>'Chương 1','slug'=>'chuong-1'],
            ['name'=>'Chương 2','slug'=>'chuong-2'],
            ['name'=>'Chương 3','slug'=>'chuong-3'],
            ['name'=>'Chương 4','slug'=>'chuong-4'],
            ['name'=>'Chương 5','slug'=>'chuong-5'],
            ['name'=>'Chương 6','slug'=>'chuong-6'],
            ['name'=>'Chương 7','slug'=>'chuong-7'],
            ['name'=>'Chương 8','slug'=>'chuong-8']
        ]);
    }
}
class GradeDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('grade')->insert([
            ['name'=>'Tiểu học','slug'=>'tieu-hoc'],
            ['name'=>'Lớp 6','slug'=>'lop-6'],
            ['name'=>'Lớp 7','slug'=>'lop-7'],
            ['name'=>'Lớp 8','slug'=>'lop-8'],
            ['name'=>'Lớp 9','slug'=>'lop-9'],
            ['name'=>'Lớp 10','slug'=>'lop-10'],
            ['name'=>'Lớp 11','slug'=>'lop-11'],
            ['name'=>'Lớp 12','slug'=>'lop-12'],
            ['name'=>'Đại học','slug'=>'dai-hoc']
        ]);
    }
}
class SubjectDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('grade')->insert([
            ['name'=>'Toán học','slug'=>'toan-hoc'],
            ['name'=>'Ngữ văn','slug'=>'ngu-van'],
            ['name'=>'Lịch sử','slug'=>'lich-su'],
            ['name'=>'Tiếng Anh','slug'=>'tieng-anh'],
            ['name'=>'Vật lý','slug'=>'vat-ly'],
            ['name'=>'Hóa học','slug'=>'hoa-hoc'],
            ['name'=>'Sinh học','slug'=>'sinh-hoc'],
            ['name'=>'Giáo dục công dân','slug'=>'giao-duc-cong-dan'],
            ['name'=>'Địa lý','slug'=>'dia-ly']
        ]);
    }
}
class PermissionDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('permission')->insert([
            ['name'=>'Admin'],
            ['name'=>'Manager'],
            ['name'=>'Web user']
        ]);
    }
}
class LevelDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('level_question')->insert([
            ['name'=>'Dễ'],
            ['name'=>'Trung bình'],
            ['name'=>'Khó']
        ]);
    }
}
class UsersDatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Nguyễn Đức Bá','email'=>'nguyenducba.97@gmail.com','id_gender'=>1,'id_permission'=>'1','avatar'=>'img-0033-1457797371440rLbS6SWIcrJx9Z5y348u7hIe1lPRtxmtv862hqRQ.jpg','birthday'=>'19970501','address'=>'Vinh','password'=>'$2y$10$xhS/jPT73YGSJNQ2WEt.vOIYtlvN4CX7nhDBA0JWMbDCZy0uiUkb2','active'=>1,'created_at'=>'2020-04-19 07:03:22','updated_at'=>'2020-04-19 07:03:22']
        ]);
    }
}
