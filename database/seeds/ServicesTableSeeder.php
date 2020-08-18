<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('services')->insert([
            'services_name' => 'IT Services & Solutions',
            'services_content' =>'With Vietnam senior software developers, we provide a full range of software solutions for your business: Digitize Your Business, E-commerce, hopping, Banking, Payment, E-learning, Customer relationship management (CRM)...',
            'services_name_vi'=>'Dịch vụ & Giải pháp CNTT',
            'services_content_vi'=>'Với các nhà phát triển phần mềm nhiều kinh nghiệm của Việt Nam, chúng tôi cung cấp đầy đủ các giải pháp phần mềm cho doanh nghiệp của bạn: Số hóa Doanh nghiệp của Bạn, Thương mại điện tử, Hopping, Ngân hàng, Thanh toán, Học tập điện tử, Quản lý quan hệ khách hàng (CRM) ...',
            'services_icon' => 'flaticon-creativity',

        ]);

        DB::table('services')->insert([
            'services_name' => 'Mobile App Development',
            'services_content' =>'We design and develop functional and interactive mobile apps, for both iOS and Android. Based on your requirements we build either native or hybrid applications using the latest technologies and suitable cost.',
            'services_name_vi'=>'Phát triển ứng dụng di động',
            'services_content_vi'=>'Chúng tôi thiết kế và phát triển các ứng dụng di động chức năng và tương tác, cho cả iOS và Android. Dựa trên yêu cầu của bạn, chúng tôi xây dựng các ứng dụng gốc hoặc ứng dụng kết hợp sử dụng các công nghệ mới nhất và chi phí phù hợp.',
            'services_icon' => 'flaticon-market',

        ]);
        DB::table('services')->insert([
            'services_name' => 'Web & Software Development',
            'services_content' =>'We has been getting that job done for clients in an effiecient and cost-effective manner. Create usable and accessible web solutions with the best responsive appearance, Full-cycle, compliance with seo standards, high security...',
            'services_name_vi'=>'Phát triển Web & Phần mềm',
            'services_content_vi'=>'Chúng tôi đã và đang hoàn thành công việc đó cho khách hàng một cách hiệu quả và tiết kiệm chi phí. Tạo các giải pháp web có thể sử dụng và truy cập được với giao diện đáp ứng tốt nhất, Full-cycle, tuân thủ các tiêu chuẩn seo, bảo mật cao ...',
            'services_icon' => 'flaticon-research',

        ]);
    }
}
