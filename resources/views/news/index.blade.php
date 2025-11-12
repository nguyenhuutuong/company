@extends('layouts.app')

@section('title', 'Tin Tức - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Tin Tức & Sự Kiện',
    'breadcrumbs' => [
        ['name' => 'Tin tức']
    ]
])

<style>
    /* Article list style */
    .article-entry {
        display: flex;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        background-color: #fff;
        transition: box-shadow 0.3s;
    }
    .article-entry:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
    .article-thumb {
        flex: 0 0 250px; /* Fixed width for thumbnail */
    }
    .article-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .article-body {
        padding: 20px;
        flex: 1;
    }
    .article-body .article-title {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .article-body .article-title a {
        text-decoration: none;
        color: #111827;
    }
    .article-body .article-title a:hover {
        color: #dc3545;
    }
    .article-meta {
        font-size: 0.85rem;
        color: #6b7280;
        margin-bottom: 0.75rem;
    }
    .article-description {
        color: #4b5563;
        font-size: 0.95rem;
    }

    /* Sidebar styles */
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

<div class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content (col-lg-8) -->
            <div class="col-lg-8">
                
                <!-- Article 1 -->
                <article class="article-entry">
                    <div class="article-thumb">
                        <a href="{{ route('news.show') }}">
                            <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c?q=80&w=2070&auto=format&fit=crop" alt="KHỞI CÔNG BIỆT THỰ 260M2 TẠI HÀ TĨNH">
                        </a>
                    </div>
                    <div class="article-body">
                        <h3 class="article-title"><a href="{{ route('news.show') }}">KHỞI CÔNG BIỆT THỰ 260M2 TẠI HÀ TĨNH</a></h3>
                        <div class="article-meta"><i class="bi bi-calendar-alt"></i> 10/11/2025</div>
                        <p class="article-description">Vừa qua, ngày 8/11/2025, HTcons đã cùng gia đình anh Nguyễn Xuân Huân khởi công công trình biệt thự hiện đại với quy mô 2 tầng...</p>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="article-entry">
                    <div class="article-thumb">
                        <a href="{{ route('news.show') }}">
                            <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1974&auto=format&fit=crop" alt="KHỞI CÔNG BIỆT THỰ HƠN 500M2 TẠI NINH KIỀU - CẦN THƠ">
                        </a>
                    </div>
                    <div class="article-body">
                        <h3 class="article-title"><a href="{{ route('news.show') }}">KHỞI CÔNG BIỆT THỰ HƠN 500M2 TẠI NINH KIỀU - CẦN THƠ</a></h3>
                        <div class="article-meta"><i class="bi bi-calendar-alt"></i> 06/11/2025</div>
                        <p class="article-description">Vừa qua, ngày 5/11/2025 HTcons cùng gia chủ khởi công công trình biệt thự hơn 500m2, quy mô 3 tầng tại Ninh Kiều, Cần Thơ...</p>
                    </div>
                </article>

                 <!-- More articles can be added here to demonstrate scrolling -->

            </div>

            <!-- Sidebar (col-lg-4) -->
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
</div>

@endsection
