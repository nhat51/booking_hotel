<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
//        $this->call(AddressSeeder::class);
        DB::table('hotels')->insert([
            [
                'destination_id' => 1,
                'name' => 'Mường Thanh Hotel',
                'address' => '60 Trần Phú',
                'district' => 'Lộc Thọ',
                'city' => 'Nha Trang',
                'star_ranking' => 5,
                'description' => 'Với hồ bơi ngoài trời và trung tâm thể dục rộng rãi, Muong Thanh Nha Trang nằm cách Bến Xe Nha Trang chỉ 500 m. Truy cập Wi-Fi miễn phí có sẵn ở tất cả các khu vực. Các phòng được bài trí sang trọng tại đây đặc trưng với sàn trải thảm toàn bộ, truyền hình cáp màn hình phẳng, tiện nghi pha trà/cà phê và khu vực tiếp khách. Phòng tắm riêng đi kèm bồn tắm và áo choàng tắm mềm mại. Du khách có thể tận hưởng các liệu pháp spa và mát-xa xoa dịu cũng như tận dụng dịch vụ cho thuê xe hơi cùng trung tâm dịch vụ doanh nhân. Các tiện nghi khác bao gồm lễ tân 24 giờ và chỗ giữ hành lý. Muong Thanh Nha Trang Hotel nằm cách trung tâm thành phố Nha Trang và Ga Nha Trang 5 km. Sân bay Cam Ranh cách nơi nghỉ này 50 km và tại đây có dịch vụ đưa đón sân bay kèm phụ phí. Khách sạn trang nhã này có 2 nhà hàng – Ngoc Thao Restaurant phục vụ ẩm thực Châu Á và Phương Tây suốt 24 giờ trong khi Yang Bay Restaurant được dành cho các buổi yến tiệc cũng như sự kiện. Các lựa chọn ăn uống trong phòng cũng được cung cấp.',
            ],
            [
                'destination_id' => 1,
                'name' => 'New Sun Hotel',
                'address' => '2/3 Hùng Vương',
                'district' => 'Lộc Thọ',
                'city' => 'Nha Trang',
                'star_ranking' => 5,
                'description' => 'Với sân hiên phơi nắng và tầm nhìn ra biển, New Sun Hotel nằm ở thành phố Nha Trang thuộc Tỉnh Khánh Hòa và cách Tháp Trầm Hương 4 phút đi bộ. Khách có thể dùng bữa ở nhà hàng tại nơi nghỉ. Bãi đỗ xe riêng có sẵn miễn phí ngay trong khuôn viên. Mỗi phòng tại khách sạn này đều được trang bị máy lạnh và truyền hình vệ tinh màn hình phẳng. Ấm đun nước có sẵn trong phòng. Tất cả các phòng còn đi kèm phòng tắm riêng. Những tiện nghi khác bao gồm dép, đồ vệ sinh cá nhân miễn phí cùng máy sấy tóc. New Sun Hotel cung cấp Wi-Fi miễn phí trong toàn khuôn viên. Khách sạn có lễ tân làm việc 24 giờ. Khách sạn cung cấp dịch vụ cho thuê xe hơi. Quảng trường 2/4 Square cách New Sun Hotel 4 phút đi bộ trong khi Bãi biển Nha Trang cách đó 5 phút đi bộ. Sân bay gần nhất là Sân bay Quốc tế Cam Ranh, cách nơi nghỉ 30 km. Đây là khu vực ở Nha Trang mà khách yêu thích, theo các đánh giá độc lập. Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm 8,9 cho kỳ nghỉ dành cho 2 người.',
            ],
            [
                'destination_id' => 1,
                'name' => 'V Hotel',
                'address' => '8 Hùng Vương',
                'district' => 'Lộc Thọ',
                'city' => 'Nha Trang',
                'star_ranking' => 4,
                'description' => 'Nằm trong khu vực Lộc Thọ, Khách sạn V Nha Trang tọa lạc tại vị trí chủ chốt gần các danh lam thắng cảnh, cho khách yêu thích du lịch biển, cho du khách yêu thích ẩm thực ở Nha Trang. Trung tâm thành phố náo nhiệt chỉ cách bạn khoảng 0.5 km. Chỗ nghỉ có vị trí rất thuận tiện, du khách có thể thoải mái tham quan, khám phá các điểm du lịch nổi tiếng. Các tiện nghi và dịch vụ do Khách sạn V Nha Trang cung cấp đảm bảo sẽ mang lại cho du khách một kỳ nghỉ vừa ý nhất. Chỗ nghỉ này được trang bị nhiều tiện nghi đa dạng, hứa hẹn sẽ làm hài lòng ngay cả những khách hàng khó tính nhất. Du khách có thể chọn lựa trong số 100 phòng với không gian yên bình, thư giãn. Bên cạnh đó, các khu vực vui chơi giải trí như phòng thể dục, hồ bơi ngoài trời, spa, massage cũng là nơi thư giãn tuyệt vời. Khách sạn V Nha Trang là điểm đến cung cấp chỗ nghỉ chất lượng cao tại Nha Trang.',
            ],
            [
                'destination_id' => 2,
                'name' => 'Hai Bảy Hotel',
                'address' => '27 Hàng Bông',
                'district' => 'Quận Hoàn Kiếm',
                'city' => 'Hà Nội',
                'star_ranking' => 3,
                'description' => 'Nằm trong khu vực Quận Hoàn Kiếm, Khách sạn Hai Bảy tọa lạc tại vị trí chủ chốt gần các danh lam thắng cảnh, gần nhiều nơi mua sắm, để khám phá nét đẹp văn hóa ở Hà Nội. Cách thành phố nhộn nhịp khoảng 0.1 km, chỗ nghỉ4 sao này có vị trí vô cùng thuận lợi để đi đến các điểm nóng du lịch trong thành phố. Chỗ nghỉ có vị trí rất thuận tiện, du khách có thể thoải mái tham quan, khám phá các điểm du lịch nổi tiếng. Mọi nỗ lực đều nhằm mang lại sự thoải mái tối đa cho du khách. Chính vì vậy, chỗ nghỉ cung cấp các dịch vụ và tiện nghi tốt nhất. Chỗ nghỉ cung cấp các tiện nghi như Wifi miễn phí cho mọi phòng, bảo vệ 24 giờ, dọn phòng hằng ngày, dịch vụ bưu điện, nhận/trả phòng riêng, đảm bảo mang đến cho du khách sự thoải mái tối đa. Mọi phòng nghỉ đều được trang bị tiện nghi chu đáo, mang đến cho du khách cảm giác thoải mái không gì sánh được. Cho dù là một tín đồ thể thao hay chỉ muốn thư giãn sau một ngày dài bận rộn, bạn sẽ được tiêu khiển với các hoạt động vui chơi giải trí nhưspa, massage. Hãy khám phá sự kết hợp hoàn hảo giữa cung cách phục vụ chuyên nghiệp và vô số tiện nghi đa dạng ở Khách sạn Hai Bảy.',
            ],
            [
                'destination_id' => 2,
                'name' => 'Seraton',
                'address' => 'Nghi Tàm',
                'district' => 'Quận Tay Hồ',
                'city' => 'Hà Nội',
                'star_ranking' => 3,
                'description' => 'Nằm trong khu vực Quận Hoàn Kiếm, Khách sạn Hai Bảy tọa lạc tại vị trí chủ chốt gần các danh lam thắng cảnh, gần nhiều nơi mua sắm, để khám phá nét đẹp văn hóa ở Hà Nội. Cách thành phố nhộn nhịp khoảng 0.1 km, chỗ nghỉ4 sao này có vị trí vô cùng thuận lợi để đi đến các điểm nóng du lịch trong thành phố. Chỗ nghỉ có vị trí rất thuận tiện, du khách có thể thoải mái tham quan, khám phá các điểm du lịch nổi tiếng. Mọi nỗ lực đều nhằm mang lại sự thoải mái tối đa cho du khách. Chính vì vậy, chỗ nghỉ cung cấp các dịch vụ và tiện nghi tốt nhất. Chỗ nghỉ cung cấp các tiện nghi như Wifi miễn phí cho mọi phòng, bảo vệ 24 giờ, dọn phòng hằng ngày, dịch vụ bưu điện, nhận/trả phòng riêng, đảm bảo mang đến cho du khách sự thoải mái tối đa. Mọi phòng nghỉ đều được trang bị tiện nghi chu đáo, mang đến cho du khách cảm giác thoải mái không gì sánh được. Cho dù là một tín đồ thể thao hay chỉ muốn thư giãn sau một ngày dài bận rộn, bạn sẽ được tiêu khiển với các hoạt động vui chơi giải trí nhưspa, massage. Hãy khám phá sự kết hợp hoàn hảo giữa cung cách phục vụ chuyên nghiệp và vô số tiện nghi đa dạng ở Khách sạn Hai Bảy.',
            ],
            [
                'destination_id' => 2,
                'name' => 'Melia',
                'address' => '44B Lý Thường Kiệt',
                'district' => 'Quận Hoàn Kiếm',
                'city' => 'Hà Nội',
                'star_ranking' => 3,
                'description' => 'Nằm trong khu vực Quận Hoàn Kiếm, Khách sạn Hai Bảy tọa lạc tại vị trí chủ chốt gần các danh lam thắng cảnh, gần nhiều nơi mua sắm, để khám phá nét đẹp văn hóa ở Hà Nội. Cách thành phố nhộn nhịp khoảng 0.1 km, chỗ nghỉ4 sao này có vị trí vô cùng thuận lợi để đi đến các điểm nóng du lịch trong thành phố. Chỗ nghỉ có vị trí rất thuận tiện, du khách có thể thoải mái tham quan, khám phá các điểm du lịch nổi tiếng. Mọi nỗ lực đều nhằm mang lại sự thoải mái tối đa cho du khách. Chính vì vậy, chỗ nghỉ cung cấp các dịch vụ và tiện nghi tốt nhất. Chỗ nghỉ cung cấp các tiện nghi như Wifi miễn phí cho mọi phòng, bảo vệ 24 giờ, dọn phòng hằng ngày, dịch vụ bưu điện, nhận/trả phòng riêng, đảm bảo mang đến cho du khách sự thoải mái tối đa. Mọi phòng nghỉ đều được trang bị tiện nghi chu đáo, mang đến cho du khách cảm giác thoải mái không gì sánh được. Cho dù là một tín đồ thể thao hay chỉ muốn thư giãn sau một ngày dài bận rộn, bạn sẽ được tiêu khiển với các hoạt động vui chơi giải trí nhưspa, massage. Hãy khám phá sự kết hợp hoàn hảo giữa cung cách phục vụ chuyên nghiệp và vô số tiện nghi đa dạng ở Khách sạn Hai Bảy.',
            ],
            [
                'destination_id' => 3,
                'name' => 'Mường Thanh Luxury',
                'address' => '261C Nguyễn Văn Trỗi',
                'district' => 'Phường 10, Phú Nhuận',
                'city' => 'Sapa',
                'star_ranking' => 5,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 3,
                'name' => 'BamBoo Sapa',
                'address' => '18 Mường Hoa',
                'district' => 'TT Sapa',
                'city' => 'Sapa',
                'star_ranking' => 5,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 3,
                'name' => 'Sapa Charm',
                'address' => '32 Mường Hoa',
                'district' => 'TT Sapa',
                'city' => 'Sapa',
                'star_ranking' => 5,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 4,
                'name' => 'LaDaLat',
                'address' => '106A Mai Anh Đào',
                'district' => 'Đà Lạt',
                'city' => 'Đà Lạt',
                'star_ranking' => 3,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 4,
                'name' => 'Mường Thanh Holiday',
                'address' => '42 Phan Bội Châu',
                'district' => 'Đà Lạt',
                'city' => 'Đà Lạt',
                'star_ranking' => 5,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 4,
                'name' => 'La Sapinete',
                'address' => 'Số 1 Phan Chu Trinh',
                'district' => 'Đà Lạt',
                'city' => 'Đà Lạt',
                'star_ranking' => 3,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 5,
                'name' => 'Golden Bay',
                'address' => '01 Lê Văn Duyệt',
                'district' => 'Đà Nẵng',
                'city' => 'Đà Nẵng',
                'star_ranking' => 2,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 5,
                'name' => 'Hùng Anh',
                'address' => '25 Võ Văn Kiệt',
                'district' => 'Đà Nẵng',
                'city' => 'Đà Nẵng',
                'star_ranking' => 5,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 5,
                'name' => 'Dana Maria',
                'address' => '47-49 Võ Văn Kiệt',
                'district' => 'Đà Nẵng',
                'city' => 'Đà Nẵng',
                'star_ranking' => 1,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 6,
                'name' => 'Hạ Long DC',
                'address' => 'Đường 25/4 Hồng Gai',
                'district' => 'Hạ Long',
                'city' => 'Hạ Long',
                'star_ranking' => 5,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 6,
                'name' => 'Hạ Long Plaza',
                'address' => 'Số 8 Hạ Long',
                'district' => 'Hạ Long',
                'city' => 'Hạ Long',
                'star_ranking' => 3,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],
            [
                'destination_id' => 6,
                'name' => 'Haliot Ha Long',
                'address' => '38 Nguyễn Du',
                'district' => 'Hạ Long',
                'city' => 'Hạ Long',
                'star_ranking' => 4,
                'description' => 'Khách sạn Mường Thanh Luxury Sài Gòn được xây dựng theo tiêu chuẩn 5 sao với 239 phòng nghỉ sang trọng cùng với hệ thống tiện ích đẳng cấp, là điểm dừng chân không thể thiếu của du khách trong hành trình trải nghiệm Sài Gòn.',
            ],

        ]);
        DB::table('rooms')->insert([
            [
                'hotel_id' => 1,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 1,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 1,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 1,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 1,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 2,
                'room_type' => 'Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 3125000.00,
                'discount' => 49,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 2,
                'room_type' => 'Grand Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 3454000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 2,
                'room_type' => 'Club',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5099000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 2,
                'room_type' => 'Deluxe Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6580000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 2,
                'room_type' => 'Club Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8225000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 3227000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Senior Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 3920000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Premier Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 4443000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Junior Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 4965000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Executive',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5488000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Premier Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5750000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 3,
                'room_type' => 'Acoustic Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7579000.00,
                'discount' => 83,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 4,
                'room_type' => 'Delxue cozy double',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 1568000.00,
                'discount' => 67,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 4,
                'room_type' => 'Delxue double',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 1948000.00,
                'discount' => 67,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 4,
                'room_type' => 'Junior suite double or twin',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 2435000.00,
                'discount' => 67,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 4,
                'room_type' => 'Junior triple',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 2979000.00,
                'discount' => 67,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 4,
                'room_type' => 'Family',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 3659000.00,
                'discount' => 67,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 5,
                'room_type' => 'Superior',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5672000.00,
                'discount' => 73,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 5,
                'room_type' => 'Luxury',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6444000.00,
                'discount' => 67,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 5,
                'room_type' => 'Superior Club',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8345000.00,
                'discount' => 57,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 6,
                'room_type' => 'Deluxe',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 1480000.00,
                'discount' => 39,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 6,
                'room_type' => 'Deluxe Double',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 1480000.00,
                'discount' => 39,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 6,
                'room_type' => 'Deluxe Triple',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 2097000.00,
                'discount' => 40,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 6,
                'room_type' => 'Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 2961000.00,
                'discount' => 44,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 7,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 7,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 7,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 7,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 7,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 8,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 8,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 8,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 8,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 8,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 9,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 9,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 9,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 9,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 9,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 10,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 10,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 10,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 10,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 10,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 11,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 11,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 11,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 11,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 11,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 12,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 12,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 12,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 12,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 12,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 13,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 13,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 13,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 13,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 13,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 14,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 14,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 14,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 14,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 14,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 15,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 15,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 15,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 15,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 15,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 16,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 16,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 16,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 16,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 16,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 17,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 17,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 17,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 17,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 17,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 18,
                'room_type' => 'Deluxe',
                'thumb' => 'MuongThanh-Room-1.jpg',
                'description' => null,
                'price' => 4931000.00,
                'discount' => 45,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 18,
                'room_type' => 'Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 5257000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 18,
                'room_type' => 'Grand Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 6399000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 18,
                'room_type' => 'The Level Premium',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 7704000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
            [
                'hotel_id' => 18,
                'room_type' => 'The Level Executive Suite',
                'thumb' => 'img-thum-01.jpg',
                'description' => null,
                'price' => 8846000.00,
                'discount' => 0,
                'is_available' => 1,
                'max_person' => 2

            ],
        ]);
        DB::table('room_images')->insert([
            [
                'room_id' => 1,
                'path' => 'img-big-01.jpg'
            ],
            [
                'room_id' => 2,
                'path' => 'img-big-02.jpg'
            ],
            [
                'room_id' => 3,
                'path' => 'img-big-03.jpg'
            ],
            [
                'room_id' => 4,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 5,
                'path' => 'img-big-01.jpg'
            ],
            [
                'room_id' => 6,
                'path' => 'img-big-02.jpg'
            ],
            [
                'room_id' => 7,
                'path' => 'img-big-03.jpg'
            ],
            [
                'room_id' => 8,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 9,
                'path' => 'img-big-01.jpg'
            ],
            [
                'room_id' => 10,
                'path' => 'img-big-02.jpg'
            ],
            [
                'room_id' => 11,
                'path' => 'img-big-03.jpg'
            ],
            [
                'room_id' => 12,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 13,
                'path' => 'img-big-01.jpg'
            ],
            [
                'room_id' => 14,
                'path' => 'img-big-02.jpg'
            ],
            [
                'room_id' => 15,
                'path' => 'img-big-03.jpg'
            ],
            [
                'room_id' => 16,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 17,
                'path' => 'img-big-01.jpg'
            ],
            [
                'room_id' => 18,
                'path' => 'img-big-02.jpg'
            ],
            [
                'room_id' => 19,
                'path' => 'img-big-03.jpg'
            ],
            [
                'room_id' => 20,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 21,
                'path' => 'img-big-01.jpg'
            ],
            [
                'room_id' => 22,
                'path' => 'img-big-02.jpg'
            ],
            [
                'room_id' => 23,
                'path' => 'img-big-03.jpg'
            ],
            [
                'room_id' => 24,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 25,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 26,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 27,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 28,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 29,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 30,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 31,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 32,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 33,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 34,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 35,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 36,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 37,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 38,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 39,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 40,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 41,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 42,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 43,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 44,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 45,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 46,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 47,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 48,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 49,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 50,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 51,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 52,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 53,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 54,
                'path' => 'img-big-04.jpg'
            ],
            [
                'room_id' => 55,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 56,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 57,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 58,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 59,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 60,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 61,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 62,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 63,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 64,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 65,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 66,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 67,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 68,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 69,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 70,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 71,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 72,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 73,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 74,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 75,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 76,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 77,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 78,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 79,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 80,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 81,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 82,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 83,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 84,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 85,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 86,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 87,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 88,
                'path' => 'img-big-04.jpg'
            ], [
                'room_id' => 89,
                'path' => 'img-big-04.jpg'
            ],
        ]);
        DB::table('hotel_comments')->insert([
            [
                'hotel_id' => 1,
                'user_id' => 1,
                'name' => 'Admin User',
                'messages' => 'Tôi đã chọn Mường Thanh Grand hotel cho chuyến nghĩ dưỡng vừa rồi trong 5 ngày. Tôi đặt loại phòng deluxe nhưng vì do chính sách đặt trong Agoda nên phòng tôi đc up lên Vip room. Tất cả mọi thứ đều tốt tại ks này. Tôi rất hài lòng. Có dịp trở lại Nha Trang du lịch. Tôi sẽ tiếp tục chọn Mường Thanh Grand Hotel',
                'rating' => 4
            ],
            [
                'hotel_id' => 1,
                'user_id' => 2,
                'name' => 'Author User',
                'messages' => 'Hai đứa mình book phòng Deluxe Ocean View nhưng được up free lên Executive Suite !! Các chị lễ tân ai cũng thân thiện hết nè. View biển quá đẹp nhưng hơi xa bên khu đông đúc Trần Phú, việc đi taxi sẽ hơi tốn kém đôi chút. Buffet sáng đầy đủ món, tối t7 mình ở có seafood buffet 280k/người. Điều duy nhất mình không hài lòng là đa số khách đều là người Trung nên lúc nào cũng ồn ào bừa bộn và lộn xộn vô cùng, nhân viên cũng phải chạy liên tục để dọn bàn. Nếu có quay lại Nha Trang mình vẫn chọn Mường Thanh Grand Nha Trang nhé !',
                'rating' => 5
            ],
            [
                'hotel_id' => 1,
                'user_id' => 3,
                'name' => 'Generic User',
                'messages' => 'Tháng 6 vừa rồi tôi đã có chuyến nghỉ dưỡng thật tuyệt vời nhờ Mường Thanh Grand. Đầu tiền thì khi tôi vào là phòng tôi đặt đang hư máy lạnh nên đã đc đổi cho 1 căn khác bự hơn tốt hơn, view nhìn ra biển như tôi muốn. Rất đẹp! Vừa bước vào nhân viên đã rất nhiệt tình từ chị quản lí và có 1 anh hướng dẫn cho tôi. Anh ấy thật sự rất nhiệt tình chỉ tôi chỗ nào có thể đi ăn hải sản ngon, và dặn rất kĩ về tài xế taxi. Thật sự rất thích từ cách bài biện trang trí của phòng ngủ, phòng khách, phòng tắm toàn bộ đều có thể nhìn ra biển rất thích. Đặc biệt trong phòng có két nên an tâm để vật dụng cá nhân quan trọng vào đấy và đi chơi thỏa thích. Rất hài lòng và sẽ quay lại Mường Thanh Grand Nha Trang vào 1 dịp không xa.',
                'rating' => 3
            ],
        ]);
        DB::table('amenities')->insert([
            [
                'amenities_name' => 'Free Wi-Fi',
                'code' => 'wifi'
            ],
            [
                'amenities_name' => '2 Signal Beads',
                'code' => 'bed'
            ],
            [
                'amenities_name' => 'Shower and Bathtub',
                'code' => 'shower'
            ],
            [
                'amenities_name' => 'Pet Friendly',
                'code' => 'paw'
            ],
            [
                'amenities_name' => 'Wheelchair Friendly',
                'code' => 'wheelchair'
            ],
            [
                'amenities_name' => 'Fitness Center',
                'code' => 'dumbbell'
            ],
            [
                'amenities_name' => 'Hot Water',
                'code' => 'hot-tub'
            ],
            [
                'amenities_name' => 'Swimming Pool',
                'code' => 'swimmer'
            ],
            [
                'amenities_name' => 'Security Cameras',
                'code' => 'camera-retro'
            ],
        ]);
        DB::table('hotel_images')->insert([
            [
                'hotel_id' => 1,
                'path' => 'MuongThanh-Hotel-1.jpg'
            ],
            [
                'hotel_id' => 2,
                'path' => 'NewSun-Hotel-2.jpg'
            ],
            [
                'hotel_id' => 3,
                'path' => 'V-Hotel-2.jpg'
            ],
            [
                'hotel_id' => 4,
                'path' => 'HaiBay-Hotel.jpg'
            ],
            [
                'hotel_id' => 5,
                'path' => 'Helios-Hotel-1.jpg'
            ],
            [
                'hotel_id' => 6,
                'path' => 'RisingDragon-Hotel-1.jpg'
            ],
            [
                'hotel_id' => 7,
                'path' => 'KK-Hotel-1.jpg'
            ],
            [
                'hotel_id' => 8,
                'path' => 'KK-Hotel-4.jpg'
            ],
            [
                'hotel_id' => 9,
                'path' => 'KK-Hotel-5.jpg'
            ],
            [
                'hotel_id' => 10,
                'path' => 'MaiThang-Hotel-2.jpg'
            ],
            [
                'hotel_id' => 11,
                'path' => 'NewLife-Hotel-3.jpg'
            ],
            [
                'hotel_id' => 12,
                'path' => 'TheKiMoi-Hotel-1.jpg'
            ],
            [
                'hotel_id' => 13,
                'path' => 'Herriot-Hotel-5.jpg'
            ],
            [
                'hotel_id' => 14,
                'path' => 'Marina-Hotel-5.jpg'
            ],
            [
                'hotel_id' => 15,
                'path' => 'MuongThanh-Hotel-6.jpg'
            ],
            [
                'hotel_id' => 16,
                'path' => 'MuongThanh-Hotel-4.jpg'
            ],
            [
                'hotel_id' => 17,
                'path' => 'MuongThanh-Hotel-3.jpg'
            ],
            [
                'hotel_id' => 18,
                'path' => 'MuongThanh-Hotel-2.jpg'
            ],
        ]);
        DB::table('destinations')->insert([
            [
                'name' => 'Nha Trang',
                'image_path' => 'nha-trang.jpg',
                'description' => '<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Nha Trang?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name' => 'Hà Nội',
                'image_path' => 'ha-noi.jpg',
                'description' => '<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Ha Noi?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name' => 'Sapa',
                'image_path' => 'sapa.jpg',
                'description' => '<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Sapa?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name' => 'Đà Lạt',
                'image_path' => 'da-lat.jpg',
                'description' => '<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Da Lat?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name' => 'Đà Nẵng',
                'image_path' => 'da-nang.jpg',
                'description' => 'Với vị trí là một trong ba trung tâm du lịch lớn trên bản đồ du lịch Việt Nam, Đà Nẵng thành phố biển xinh đẹp hiền hòa và mếm khách, nơi mà bạn có thể dễ dàng đến được bằng cả đường bộ, đường hàng không và đường thủy. Một dấu ấn địa lý và lịch sử, điểm trung chuyển tiện lợi đến các di sản văn hóa thế giới như Huế, Mỹ Sơn, Hội An và khu dự trữ sinh quyển thế giới Cù Lao Chàm. Qua năm tháng Đà Nẵng đang càng khẳng định là một điểm đến hấp dẫn và lý tưởng đối với bàn bè và du khách năm châu. Bạn sẽ đi từ ngạc nhiên này đến ngạc nhiên khác trong hành trình khám phá các di tích văn hóa, lịch sử, danh lam thắng cảnh, đèo Hải Vân – Thiên hạ đệ nhất hùng quang, Ngũ Hành Sơn thuyền thoại, đến dải bờ biển tuyệt đẹp được tôn vinh là một trong sáu bải biển đẹp nhất hành tinh. Hơn thế nữa Đà Nẵng là nơi bạn có thể thưởng thức dịch vụ nghỉ dưỡng đạt chuẩn quốc tế với các thương hiệu nổi tiếng thế giới như Intercontinental, Novotel, Crowne Plaza, Furama… Tham gia những hành trình khám phá thiên nhiên phong phú và cảm nhận sâu sắc về đời sống và văn hóa bản địa.'
            ],
            [
                'name' => 'Vịnh Hạ Long',
                'image_path' => 'ha-long.jpg',
                'description' => '<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Ha Long?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
        ]);
    }
}
