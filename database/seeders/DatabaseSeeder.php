<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Admin',
                'email'=>'stetho@gmail.com',
                'password'=>Hash::make('123456'),
                'security_question'=>'null',
                'question_answer'=>'null',
                'avatar'=>'default-avatar.jpg',
                'description'=>Str::random(200),
                'level'=>0,

            ],
            [
                'id'=>2,
                'name'=>'Shane Lynch',
                'email'=>'ShaneLynch@gmail.com',
                'password'=>Hash::make('123456'),
                'security_question'=>'null',
                'question_answer'=>'null',
                'avatar'=>'avatar-0.png',
                'description'=>Str::random(200),
                'level'=>1,

            ],
            [
                'id'=>3,
                'name'=>'Brandon Kelley',
                'email'=>'BrandonKelley@gmail.com',
                'password'=>Hash::make('123456'),
                'security_question'=>'null',
                'question_answer'=>'null',
                'avatar'=>'avatar-1.png',
                'description'=>Str::random(200),
                'level'=>1,

            ],
            [
                'id'=>4,
                'name'=>'Roy Banks',
                'email'=>'RoyBanks@gmail.com',
                'password'=>Hash::make('123456'),
                'security_question'=>'null',
                'question_answer'=>'null',
                'avatar'=>'avatar-2.png',
                'description'=>Str::random(200),
                'level'=>2,

            ]
        ]);
        DB::table('hotels')->insert([
            [
                'destination_id'=>1,
                'name'=>'Resort Terra Paraiso',
                'address'=>'Gauravaddo, Opp Lane Of Pizza Hut',
                'district'=>'Calangute',
                'city'=>'Bardez Goa',
                'star_ranking'=>5,
                'description'=>Str::random(200),
           ],
            [
                'destination_id'=>4,
                'name'=>'Hotel Sunstar Grand',
                'address'=>' Gauravaddo, Opp Lane Of Pizza Hut',
                'district'=>'Calangute',
                'city'=>'Bardez Goa',
                'star_ranking'=>5,
                'description'=>Str::random(200),
            ],
            [
                'destination_id'=>5,
                'name'=>'Treebo Natraj Yes Please',
                'address'=>' Gauravaddo, Opp Lane Of Pizza Hut',
                'district'=>'Calangute',
                'city'=>'Bardez Goa',
                'star_ranking'=>4,
                'description'=>Str::random(200),
            ],
            [
                'destination_id'=>3,
                'name'=>'Wood Castle Grand',
                'address'=>' Gauravaddo, Opp Lane Of Pizza Hut',
                'district'=>'Calangute',
                'city'=>'Bardez Goa',
                'star_ranking'=>3,
                'description'=>Str::random(200),
            ],
            [
                'destination_id'=>2,
                'name'=>'Khách Sạn Mường Thanh Luxury Sài Gòn',
                'address'=>'261C Nguyễn Văn Trỗi',
                'district'=>'Phường 10, Phú Nhuận',
                'city'=>'Hồ Chí Minh',
                'star_ranking'=>5,
                'description'=>'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ]
        ]);
        DB::table('rooms')->insert([
            [
                'hotel_id'=>1,
                'room_type'=>'Deluxe',
                'description'=>null,
                'price'=>4931000.00,
                'discount'=>45,
                'is_available'=>1,
            ],
            [
                'hotel_id'=>1,
                'room_type'=>'Premium',
                'description'=>null,
                'price'=>5257000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>1,
                'room_type'=>'Grand Premium',
                'description'=>null,
                'price'=>6399000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>1,
                'room_type'=>'The Level Premium',
                'description'=>null,
                'price'=>7704000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>1,
                'room_type'=>'The Level Executive Suite',
                'description'=>null,
                'price'=>8846000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Deluxe',
                'description'=>null,
                'price'=>3125000.00,
                'discount'=>49,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Grand Deluxe',
                'description'=>null,
                'price'=>3454000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Club',
                'description'=>null,
                'price'=>5099000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Deluxe Suite',
                'description'=>null,
                'price'=>6580000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Club Suite',
                'description'=>null,
                'price'=>8225000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Deluxe',
                'description'=>null,
                'price'=>3227000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Senior Deluxe',
                'description'=>null,
                'price'=>3920000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Premier Deluxe',
                'description'=>null,
                'price'=>4443000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Junior Suite',
                'description'=>null,
                'price'=>4965000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Executive',
                'description'=>null,
                'price'=>5488000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Premier Deluxe',
                'description'=>null,
                'price'=>5750000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Acoustic Suite',
                'description'=>null,
                'price'=>7579000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Delxue cozy double room',
                'description'=>null,
                'price'=>1568000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Delxue double room',
                'description'=>null,
                'price'=>1948000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Junior suite double or twin',
                'description'=>null,
                'price'=>2435000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Junior triple',
                'description'=>null,
                'price'=>2979000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Family room',
                'description'=>null,
                'price'=>3659000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>5,
                'room_type'=>'Superior',
                'description'=>null,
                'price'=>5672000.00,
                'discount'=>73,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>5,
                'room_type'=>'Luxury',
                'description'=>null,
                'price'=>6444000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>5,
                'room_type'=>'Superior Club',
                'description'=>null,
                'price'=>8345000.00,
                'discount'=>57,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Deluxe',
                'description'=>null,
                'price'=>1480000.00,
                'discount'=>39,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Deluxe Double',
                'description'=>null,
                'price'=>1480000.00,
                'discount'=>39,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Deluxe Triple',
                'description'=>null,
                'price'=>2097000.00,
                'discount'=>40,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Executive Suite',
                'description'=>null,
                'price'=>2961000.00,
                'discount'=>44,
                'is_available'=>1,

            ],
        ]);
        DB::table('room_images')->insert([
            [
                'room_id'=>1,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>1,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>1,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>1,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-04.jpg'
            ],
        ]);
        DB::table('hotel_comments')->insert([
            [
                'hotel_id'=>1,
                'user_id'=>1,
                'messages'=>Str::random(200),
                'rating'=>4
            ],
            [
                'hotel_id'=>1,
                'user_id'=>2,
                'messages'=>Str::random(200),
                'rating'=>5
            ],
            [
                'hotel_id'=>1,
                'user_id'=>5,
                'messages'=>Str::random(200),
                'rating'=>3
            ],
        ]);
        DB::table('hotel_amenities')->insert([
            [
                'hotel_id'=>1,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Swimming Pool',
                'code'=>'swimmer'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Security Cameras',
                'code'=>'camera-retro'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Security Cameras',
                'code'=>'camera-retro'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Security Cameras',
                'code'=>'camera-retro'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Swimming Pool',
                'code'=>'swimmer'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Swimming Pool',
                'code'=>'swimmer'
            ],
        ]);
        DB::table('hotel_images')->insert([
            [
                'hotel_id'=>1,
                'path'=>'1.jpg'
            ],
            [
                'hotel_id'=>1,
                'path'=>'img-big-01.jpg'
            ],
            [
                'hotel_id'=>1,
                'path'=>'img-big-02.jpg'
            ],
            [
                'hotel_id'=>1,
                'path'=>'img-big-03.jpg'
            ],
            [
                'hotel_id'=>1,
                'path'=>'img-big-04.jpg'
            ],
            [
                'hotel_id'=>2,
                'path'=>'2.jpg'
            ],
            [
                'hotel_id'=>2,
                'path'=>'img-big-01.jpg'
            ],
            [
                'hotel_id'=>2,
                'path'=>'img-big-02.jpg'
            ],
            [
                'hotel_id'=>2,
                'path'=>'img-big-03.jpg'
            ],
            [
                'hotel_id'=>2,
                'path'=>'img-big-04.jpg'
            ],
            [
                'hotel_id'=>3,
                'path'=>'3.jpg'
            ],
            [
                'hotel_id'=>3,
                'path'=>'img-big-01.jpg'
            ],
            [
                'hotel_id'=>3,
                'path'=>'img-big-02.jpg'
            ],
            [
                'hotel_id'=>3,
                'path'=>'img-big-03.jpg'
            ],
            [
                'hotel_id'=>3,
                'path'=>'img-big-04.jpg'
            ],
            [
                'hotel_id'=>4,
                'path'=>'4.jpg'
            ],
            [
                'hotel_id'=>4,
                'path'=>'img-big-01.jpg'
            ],
            [
                'hotel_id'=>4,
                'path'=>'img-big-02.jpg'
            ],
            [
                'hotel_id'=>4,
                'path'=>'img-big-03.jpg'
            ],
            [
                'hotel_id'=>4,
                'path'=>'img-big-04.jpg'
            ],
            [
                'hotel_id'=>5,
                'path'=>'5.jpg'
            ],
            [
                'hotel_id'=>5,
                'path'=>'img-big-01.jpg'
            ],
            [
                'hotel_id'=>5,
                'path'=>'img-big-02.jpg'
            ],
            [
                'hotel_id'=>5,
                'path'=>'img-big-03.jpg'
            ],
            [
                'hotel_id'=>5,
                'path'=>'img-big-04.jpg'
            ],
        ]);
        DB::table('destinations')->insert([
            [
                'name'=>'Orlando',
                'image_path'=>'1.jpg',
                'description'=>Str::random(200)
            ],
            [
                'name'=>'Miami',
                'image_path'=>'2.jpg',
                'description'=>Str::random(200)
            ],
            [
                'name'=>'Los Angerles',
                'image_path'=>'3.jpg',
                'description'=>Str::random(200)
            ],
            [
                'name'=>'San Diego',
                'image_path'=>'4.jpg',
                'description'=>Str::random(200)
            ],
            [
                'name'=>'Houston',
                'image_path'=>'5.jpg',
                'description'=>Str::random(200)
            ],
            [
                'name'=>'New York',
                'image_path'=>'6.jpg',
                'description'=>Str::random(200)
            ],
        ]);
    }
}
