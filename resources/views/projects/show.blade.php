@extends('layouts.app')

@section('title', 'Chi Tiết Dự Án - HTcons')

@section('content')

@include('partials.page-header', [
    'title' => 'Chi Tiết Dự Án',
    'breadcrumbs' => [
        ['name' => 'Dự án', 'url' => route('projects.index')],
        ['name' => 'Villa nghỉ dưỡng - Anh Vương']
    ]
])

<style>
    .padding-section {
        padding: 4rem 0;
    }

    .project-detail-content .date {
        color: #6c757d;
        margin-bottom: 1rem;
    }

    .project-detail-content .date i {
        margin-right: 0.5rem;
        margin-left: 1rem;
    }
    .project-detail-content .date i:first-child {
        margin-left: 0;
    }

    .project-detail-content .main-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .info-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1.5rem;
    }

    .property-item {
        display: flex;
        padding: 0.8rem 0;
        border-bottom: 1px solid #e9ecef;
        font-size: 0.95rem;
    }

    .property-item span {
        font-weight: 500;
        color: #1e40af; /* Tailwind blue-800 */
        flex: 0 0 180px;
    }

    .property-item div {
        color: #374151; /* Tailwind gray-700 */
        text-align: left;
        flex: 1;
    }

    .detail-content {
        margin-top: 2.5rem;
        line-height: 1.8;
        color: #333;
    }

    .detail-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1.5rem 0;
    }
    
    .detail-content h2, .detail-content h3 {
        font-weight: 700;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .share ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .share button {
        border: none;
        background-color: #f0f0f0;
        color: #555;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 0.5rem;
        transition: all 0.3s ease;
    }

    .share button.facebook:hover {
        background-color: #3b5998;
        color: #fff;
    }
    .share button.instagram:hover {
        background-color: #e4405f;
        color: #fff;
    }
    .share button.twitter:hover {
        background-color: #1da1f2;
        color: #fff;
    }
     .share button.linkedin:hover {
        background-color: #0077b5;
        color: #fff;
    }

    /* Sidebar Styles */
    .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 100px; 
    }
    .article-nav {
        background-color: #f9fafb;
    }
    .ar-title {
        font-size: 1.25rem;
        font-weight: 700;
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
    }
    .article-nav .item {
        display: flex;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
    }
    .article-nav .item:last-child {
        border-bottom: none;
    }

    .article-nav .thuml {
        flex-shrink: 0;
        width: 80px;
        margin-right: 1rem;
    }
    .article-nav .thuml img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .article-nav .body .name a {
        font-weight: 600;
        color: #333;
        text-decoration: none;
    }
     .article-nav .body .name a:hover {
        color: #dc3545;
    }

    .article-nav .body .date {
        font-size: 0.85rem;
        color: #6c757d;
    }

</style>

<div class="container padding-section">
    <div class="row">
        <div class="col-lg-8 project-detail-content">
            <div class="img-list">
                <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded" alt="VILLA NGHỈ DƯỠNG">
            </div>
            <hr>
            <div class="date"><i class="far fa-calendar-alt"></i> 17/04/2023 <i class="far fa-eye"></i> 2156</div>
            <h1 class="main-title mt-3">VILLA NGHỈ DƯỠNG - ANH VƯƠNG - XÃ HÒA SƠN, HUYỆN LƯƠNG SƠN, HOÀ BÌNH</h1>
            
            <h2 class="info-title">Thông tin công trình</h2>
            <div class="property-item"><span>Chủ đầu tư</span><div>Anh Vương</div></div>
            <div class="property-item"><span>Loại hình</span><div>Villa nghỉ dưỡng</div></div>
            <div class="property-item"><span>Diện tích khu đất</span><div>7000m2</div></div>
            <div class="property-item"><span>Diện tích xây dựng</span><div>400m2/sàn</div></div>
            <div class="property-item"><span>Số tầng</span><div>3</div></div>
            <div class="property-item"><span>Công năng </span><div>1 phòng khách + bếp ăn <br>1 phòng ngủ master (kèm WC) <br>2 phòng vệ sinh <br>3 phòng ngủ <br>1 phòng karaoke <br>1 hầm, 1 bể bơi <br>1 sân mái</div></div>
            <div class="property-item"><span>Địa chỉ</span><div>Xã Hòa Sơn - Huyện Lương Sơn - Tỉnh Hòa Bình</div></div>
            <div class="property-item"><span>Hợp đồng</span><div>Thi công trọn gói</div></div>
            <div class="property-item"><span>Năm thực hiện </span><div>2022</div></div>

            <div class="detail-content">
                <p style="text-align:justify">Khu nghỉ dưỡng nằm trên khu đất rộng 7000m2 tại trung tâm xã Hòa Sơn – Huyện Lương Sơn – Tỉnh Hòa Bình. Là một khu nghỉ dưỡng được chủ đầu tư có kế hoạch đầu tư&nbsp;rất tâm huyết và bài bản. Công trình được chia thành nhiều hạng mục gồm cụm biệt thự nghỉ dưỡng, khu bể bơi vô cực, khu vực hầm để làm khu vui chơi giải trí và các cụm công trình khác như hồ điều hòa, nhà nghỉ… được bố trí theo kiến trúc hiện đại trên tổng mặt bằng. Công trình sau khi hoàn thành hứa hẹn sẽ là một khu nghỉ dưỡng cuối tuấn cực VIP&nbsp;cho chủ đầu tư và đại gia đình.</p>
                <h2 style="text-align:justify"><strong>Một số hình ảnh thiết kế</strong></h2>
                <p style="text-align:center"><img alt="luong son 1" src="https://images.unsplash.com/photo-1600585152220-406b9b21dc3b?q=80&w=1974&auto=format&fit=crop"></p>
                <p style="text-align:center"><em>Phối cảnh chính diện của căn villa nghỉ dưỡng</em></p>
                 <p style="text-align:center"><img alt="luong son 2" src="https://images.unsplash.com/photo-1600585153492-7a216b259146?q=80&w=1974&auto=format&fit=crop"></p>
                 <p style="text-align:center"><img alt="luong son interior" src="https://images.unsplash.com/photo-1618220179428-22790b461013?q=80&w=1974&auto=format&fit=crop"></p>
                <p style="text-align:center"><em>Phối cảnh nội thất căn villa</em></p>

                <h2>Cập nhật tiến độ thi công công trình:</h2>
                <p style="text-align:center"><img alt="hình ảnh thi công" src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop"></p>
                <h3>Bước tới giai đoạn hoàn thiện</h3>
                 <p style="text-align:center"><img alt="hoàn thiện dự án" src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?q=80&w=2070&auto=format&fit=crop"></p>
            </div>
            <hr>
            <div class="share">
                <ul class="d-flex align-items-center ul-reset">
                    <li class="mr-3">Chia sẻ:</li>
                    <li><button class="facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href));return false"><i class="fab fa-facebook-f"></i></button></li>
                    <li><button class="twitter" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href));return false"><i class="fab fa-twitter"></i></button></li>
                    <li><button class="linkedin" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href));return false"><i class="fab fa-linkedin-in"></i></button></li>
                </ul>
            </div>
            
        </div>
        <div class="col-lg-4">
            <div class="sidebar-sticky">
                <div class="article-nav border rounded">
                    <div class="ar-title">Dự án cùng mẫu</div>
                    <div class="p-3">
                        <div class="item">
                            <div class="thuml"><a href="#"> <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c?q=80&w=2070&auto=format&fit=crop" alt="Dự án tương tự 1"> </a></div>
                            <div class="body">
                                <div class="name"><a class="truncate" href="#">BIỆT THỰ HIỆN ĐẠI - ANH MINH - QUẬN 2</a></div>
                                <div class="date mt-lg-2 mt-0"><i class="far fa-calendar-alt"></i> 10/11/2025</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thuml"><a href="#"> <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1974&auto=format&fit=crop" alt="Dự án tương tự 2"> </a></div>
                            <div class="body">
                                <div class="name"><a class="truncate" href="#">VILLA VƯỜN - CHỊ LAN - CẦN GIỜ</a></div>
                                <div class="date mt-lg-2 mt-0"><i class="far fa-calendar-alt"></i> 06/11/2025</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thuml"><a href="#"> <img src="https://images.unsplash.com/photo-1598228723793-52759bba239c?q=80&w=1974&auto=format&fit=crop" alt="Dự án tương tự 3"> </a></div>
                            <div class="body">
                                <div class="name"><a class="truncate" href="#">NHÀ PHỐ TÂN CỔ ĐIỂN - GIA ĐÌNH ANH BẢO</a></div>
                                <div class="date mt-lg-2 mt-0"><i class="far fa-calendar-alt"></i> 21/10/2025</div>
                            </div>
                        </div>
                         <div class="item">
                            <div class="thuml"><a href="#"> <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=2070&auto=format&fit=crop" alt="Dự án tương tự 4"> </a></div>
                            <div class="body">
                                <div class="name"><a class="truncate" href="#">BIỆT THỰ SÂN VƯỜN - ANH KHẢI - BÌNH DƯƠNG</a></div>
                                <div class="date mt-lg-2 mt-0"><i class="far fa-calendar-alt"></i> 15/09/2025</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
