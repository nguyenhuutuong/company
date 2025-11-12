@extends('layouts.app')

@section('title', 'Chi Tiết Bài Viết - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Chi Tiết Bài Viết',
    'breadcrumbs' => [
        ['name' => 'Tin tức', 'url' => url('/tin-tuc')],
        ['name' => 'Top 5 xu hướng thiết kế...']
    ]
])

<style>
    /* Article content styles */
    .article-title {
        font-weight: 700;
        color: #333;
    }
    .article-meta {
        font-size: 0.9rem;
        color: #999;
        margin-bottom: 20px;
    }
    .article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .article-content h4 {
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    /* Sidebar styles from news/index.blade.php */
    .sidebar-sticky {
        position: -webkit-sticky; /* For Safari */
        position: sticky;
        top: 100px; /* Adjust this value based on your sticky header's height */
    }
    .sidebar-widget {
        margin-bottom: 2.5rem;
        padding: 20px;
        background-color: #f9fafb;
        border-radius: 12px;
    }
    .widget-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #e5e7eb;
    }
    .widget-title::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: #dc3545;
    }
    .category-list .list-group-item {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e5e7eb;
        background: transparent;
    }
    .category-list .list-group-item a {
        text-decoration: none;
        color: #4b5563;
    }
    .category-list .list-group-item a:hover {
        color: #dc3545;
    }
    .category-list .list-group-item:last-child {
        border-bottom: none;
    }

    /* Latest posts in sidebar */
    .post-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
     .post-item:last-child {
        margin-bottom: 0;
     }
    .post-item-thumb {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        margin-right: 15px;
    }
    .post-item-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }
    .post-item-body .post-title {
        font-size: 0.9rem;
        font-weight: 600;
        line-height: 1.4;
        margin-bottom: 2px;
    }
     .post-item-body .post-title a {
         text-decoration: none;
         color: #111827;
     }
      .post-item-body .post-title a:hover {
         color: #dc3545;
     }
    .post-item-body .post-date {
        font-size: 0.8rem;
        color: #6b7280;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Article Content -->
            <div class="col-lg-8">
                <article>
                    <h1 class="article-title mb-3">Top 5 xu hướng thiết kế nội thất nổi bật nhất năm 2024 bạn không nên bỏ lỡ</h1>
                    <div class="article-meta">
                        <span>Đăng bởi <strong>Admin</strong></span> | 
                        <span>Ngày 15, Tháng 7, 2024</span>
                    </div>
                    <div class="article-content">
                        <img src="https://images.unsplash.com/photo-1556955112-28cde3817b0a?q=80&w=1974&auto=format&fit=crop" alt="Xu hướng thiết kế nội thất 2024" class="img-fluid rounded mb-4">
                        
                        <p class="lead">Năm 2024 chứng kiến sự lên ngôi của những xu hướng thiết kế nội thất đề cao tính bền vững, sự tối giản và kết nối với thiên nhiên. Cùng HTcons khám phá những phong cách đang định hình không gian sống hiện đại.</p>
                        
                        <h4>1. Vật liệu bền vững và thân thiện môi trường</h4>
                        <p>Xu hướng sử dụng vật liệu tái chế, gỗ tái sử dụng, tre, và các vật liệu tự nhiên khác ngày càng trở nên phổ biến. Điều này không chỉ giúp bảo vệ môi trường mà còn mang lại vẻ đẹp mộc mạc, gần gũi cho không gian sống.</p>

                        <h4>2. Không gian mở và đa chức năng</h4>
                        <p>Thiết kế không gian mở, kết nối phòng khách, bếp và phòng ăn đang là lựa chọn hàng đầu. Các món đồ nội thất thông minh, đa chức năng giúp tối ưu hóa diện tích, đặc biệt phù hợp với các căn hộ nhỏ.</p>
                        
                        <img src="https://images.unsplash.com/photo-1615873968403-89e068629265?q=80&w=1932&auto=format&fit=crop" alt="Không gian mở" class="img-fluid rounded my-4">

                        <h4>3. Đường cong và hình khối hữu cơ</h4>
                        <p>Thay vì những đường nét góc cạnh, sắc bén, các thiết kế có đường cong mềm mại, hình khối hữu cơ lấy cảm hứng từ thiên nhiên đang được ưa chuộng. Sofa bo tròn, bàn ăn oval hay gương hình vòm mang lại cảm giác thư thái, dễ chịu.</p>

                        <h4>4. Màu sắc lấy cảm hứng từ đất</h4>
                        <p>Các tông màu ấm áp như nâu đất, cam cháy, xanh rêu, và màu be đang quay trở lại mạnh mẽ. Những gam màu này tạo ra một không gian ấm cúng, mời gọi và dễ dàng kết hợp với nhiều phong cách khác nhau.</p>

                        <h4>5. Ánh sáng tự nhiên và cây xanh</h4>
                        <p>Tận dụng tối đa ánh sáng tự nhiên qua các ô cửa kính lớn và đưa cây xanh vào nhà không chỉ giúp không gian thêm sức sống mà còn tốt cho sức khỏe. Đây là xu hướng chưa bao giờ lỗi thời.</p>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                 <div class="sidebar-sticky">
                    <aside class="sidebar">
                        <!-- Latest Posts Widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Bài viết mới nhất</h3>
                            <div class="latest-posts">
                                <div class="post-item">
                                    <div class="post-item-thumb">
                                        <a href="#"><img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c?q=80&w=2070&auto=format&fit=crop" alt="..."></a>
                                    </div>
                                    <div class="post-item-body">
                                        <div class="post-title"><a href="#">KHỞI CÔNG BIỆT THỰ 260M2 TẠI HÀ TĨNH</a></div>
                                        <div class="post-date">10/11/2025</div>
                                    </div>
                                </div>
                                 <div class="post-item">
                                    <div class="post-item-thumb">
                                        <a href="#"><img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1974&auto=format&fit=crop" alt="..."></a>
                                    </div>
                                    <div class="post-item-body">
                                        <div class="post-title"><a href="#">KHỞI CÔNG BIỆT THỰ HƠN 500M2 TẠI NINH KIỀU - CẦN THƠ</a></div>
                                        <div class="post-date">06/11/2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Danh mục</h3>
                            <div class="category-list">
                               <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ route('news.experience') }}">Kinh nghiệm xây nhà</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('news.company-news') }}">Tin tức công ty</a>
                                    </li>
                                     <li class="list-group-item">
                                        <a href="#">Tư vấn thiết kế</a>
                                    </li>
                                     <li class="list-group-item">
                                        <a href="{{ route('consulting.feng-shui') }}">Phong thủy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
