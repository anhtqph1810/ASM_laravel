@extends('client.layouts.master')

@section('content')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('client/assets/img/slide1.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Tổng bí thư Nguyễn Phú Trọng sẽ yên nghỉ tại Nghĩa trang Mai Dịch</h2>
                                        <p>
                                            Tổng bí thư Nguyễn Phú Trọng sẽ yên nghỉ tại Nghĩa trang Mai Dịch
                                            Tang lễ Tổng bí thư Nguyễn Phú Trọng sẽ được tổ chức trọng thể theo nghi thức
                                            Quốc tang trong hai ngày 25 và 26/7, sau đó ông được an táng tại Nghĩa trang Mai
                                            Dịch.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('client/assets/img/side2.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Giới siêu giàu có thêm 49.000 tỷ USD nhờ cổ phiếu tăng giá</h2>
                                        <p>Thông tin trên được công bố trong báo cáo về giới siêu giàu thế giới năm 2024
                                            (World Ultra Wealth 2024) của công ty dữ liệu Altrata (Anh). Người siêu giàu
                                            (UHNW) được xác định là các cá nhân có tài sản ròng từ 30 triệu USD sau khi trừ
                                            tất cả nợ.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('client/assets/img/slide3.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Ngân hàng thanh lý căn hộ 13 m2 ở quận Hoàn Kiếm giá 1 tỷ đồng</h2>
                                        <p>SaiGonBank bán đấu giá một căn hộ tập thể ở trung tâm quận Hoàn Kiếm, giá khởi
                                            điểm gần 79 triệu đồng mỗi m2.

                                            Ngân hàng TMCP Sài Gòn Công Thương chi nhánh Hà Nội (SaiGonBank Hà Nội) vừa
                                            thông báo bán đấu giá toàn bộ căn hộ tại số 4B phố Đường Thành, phường Cửa Đông,
                                            quận Hoàn Kiếm</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('client/assets/img/slide4.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>CLB Thanh Hóa không dự Cup C2 châu Á</h2>
                                        <p>CLB Thanh Hóa gửi công văn xin LĐBĐ châu Á (AFC) không dự AFC Champions League
                                            Two mùa 2024-2025 và được chấp thuận.

                                            Lãnh đạo LĐBĐ Việt Nam (VFF) xác nhận thông tin trên với VnExpress tối 20/7. VFF
                                            đề xuất AFC cho một CLB khác của Việt Nam thay thế Thanh Hóa dự giải, nhưng
                                            không được chấp thuận. Vì vậy, bóng đá Việt Nam chỉ còn một đội góp mặt ở giải
                                            C2 châu Á, là Nam Định - nhà tân vô địch V-League.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        @foreach ($sections as $section)
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>{{ $section['loai_tin']->ten_loai_tin }}</h2>
                    <div><a href="" class="more">Xem thêm</a></div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href=""><img src="client/assets/img/anhtin1.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2><a href="single-post.html">Đại học Sư phạm Kỹ thuật TP HCM lấy điểm sàn từ 15 đến 19</a>
                            </h2>
                            <p class="mb-4 d-block">Năm ngoái, điểm chuẩn theo phương thức này của trường khoảng 19-27,25,
                                dẫn đầu là ngành Kinh doanh quốc tế (27,25 điểm) và Sư phạm tiếng Anh (27,2 điểm).

                                Trước khi nhập, điều chỉnh nguyện vọng đại học, thí sinh có thể xem thông tin tuyển sinh,
                                biến động điểm chuẩn các năm trên trang Tra cứu đại học của VnExpress. Hệ thống cũng đưa ra
                                gợi ý nhóm ngành, trường năm ngoái có điểm chuẩn tiệm cận mức mà các em đạt được theo từng
                                tổ hợp.

                                Điểm chuẩn đại học được công bố trước 17h ngày 19/8.</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="client/assets/img/person-1.jpg" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Quocanh</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                @forelse ($section['tin_tucs'] as $tinTuc)
                                    <div class="tin-tuc">
                                        <a href="{{ route('tin_tuc.show', ['id' => $tinTuc->id]) }}">
                                            <h4>{{ $tinTuc->tieu_de }}</h4>
                                        </a>
                                        {{-- <h4>{{ $tinTuc->tieu_de }}</h4> --}}
                                        <p>{{ $tinTuc->tom_tat }}</p>
                                        @if ($tinTuc->hinh_anh)
                                            {{-- <img src="{{ asset('storage/' . $tinTuc->hinh_anh) }}"
                                                alt="{{ $tinTuc->tieu_de }}" style="width:100px;height:auto;"> --}}
                                        @endif
                                        <p>Ngày đăng: {{ $tinTuc->ngay_dang }}</p>
                                    </div>
                                @empty
                                    <p>Không có tin tức nào.</p>
                                @endforelse
                                {{-- <div class="post-entry-1">
                                    <a href="single-post.html"><img src="client/assets/img/post-landscape-2.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Sport</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="client/assets/img/post-landscape-5.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Food</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>Jul 17th '22</span>
                                    </div>
                                    <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="client/assets/img/post-landscape-7.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Design</span> <span
                                            class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                    <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting
                                            Places On the Web?</a></h2>
                                </div> --}}
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                @forelse ($section['tin_tucs'] as $tinTuc)
                                    <div class="tin-tuc">
                                        <h4>{{ $tinTuc->tieu_de }}</h4>
                                        <p>{{ $tinTuc->tom_tat }}</p>
                                        @if ($tinTuc->hinh_anh)
                                            {{-- <img src="{{ asset('storage/' . $tinTuc->hinh_anh) }}"
                                                alt="{{ $tinTuc->tieu_de }}" style="width:100px;height:auto;"> --}}
                                        @endif
                                        <p>Ngày đăng: {{ $tinTuc->ngay_dang }}</p>
                                    </div>
                                @empty
                                    <p>Không có tin tức nào.</p>
                                @endforelse
                                {{-- <div class="post-entry-1">
                                    <a href="single-post.html"><img src="client/assets/img/post-landscape-2.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Sport</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="client/assets/img/post-landscape-5.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Food</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>Jul 17th '22</span>
                                    </div>
                                    <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="client/assets/img/post-landscape-7.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Design</span> <span
                                            class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                    <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting
                                            Places On the Web?</a></h2>
                                </div> --}}
                            </div>

                            <!-- Trending Section -->
                            {{-- <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Trending</h3>
                                    <ul class="trending-post">
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">1</span>
                                                <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                                <span class="author">Jane Cooper</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">2</span>
                                                <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your
                                                    New Haircut</h3>
                                                <span class="author">Wade Warren</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">3</span>
                                                <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons
                                                </h3>
                                                <span class="author">Esther Howard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">4</span>
                                                <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                                <span class="author">Cameron Williamson</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.html">
                                                <span class="number">5</span>
                                                <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                                <span class="author">Jenny Wilson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- End Trending Section --> --}}
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
    </section> <!-- End Post Grid Section -->
    @endforeach
    {{-- <!-- ======= Culture Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Culture</h2>
                <div><a href="category.html" class="more">See All Culture</a></div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <div class="d-lg-flex post-entry-2">
                        <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="client/assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Culture</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce
                                    Gruden doing Now?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error
                                deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?
                            </p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="client/assets/img/person-2.jpg" alt=""
                                        class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-entry-1 border-bottom">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-1.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Culture</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You
                                        Can Do Now</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                            </div>

                            <div class="post-entry-1">
                                <div class="post-meta"><span class="date">Culture</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female
                                        Founders</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-2.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Culture</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused
                                During Video Calls?</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers
                                That Will Inspire Your New Haircut</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and
                                Medium Hair</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working
                                Mom’s Guide</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the
                                Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom
                                Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Business</h2>
                <div><a href="category.html" class="more">See All Business</a></div>
            </div>

            <div class="row">
                <div class="col-md-9 order-md-2">

                    <div class="d-lg-flex post-entry-2">
                        <a href="single-post.html" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                            <img src="client/assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce
                                    Gruden doing Now?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error
                                deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?
                            </p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="client/assets/img/person-4.jpg" alt=""
                                        class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-entry-1 border-bottom">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-5.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Business</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You
                                        Can Do Now</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                            </div>

                            <div class="post-entry-1">
                                <div class="post-meta"><span class="date">Business</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female
                                        Founders</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-7.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Business</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused
                                During Video Calls?</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers
                                That Will Inspire Your New Haircut</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and
                                Medium Hair</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working
                                Mom’s Guide</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the
                                Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom
                                Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Lifestyle</h2>
                <div><a href="category.html" class="more">See All Lifestyle</a></div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="single-post.html"><img src="client/assets/img/post-landscape-8.jpg" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                            temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil
                            tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe
                            perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                            atque eveniet, quo, praesentium dignissimos</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="client/assets/img/person-7.jpg" alt=""
                                    class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Esther Howard</h3>
                            </div>
                        </div>
                    </div>

                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the
                                Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom
                                Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-6.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-5.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                        Video Calls?</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-4.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting
                                        Places On the Web?</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-3.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For
                                        Instagram</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-2.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should
                                        Know</a></h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="single-post.html"><img src="client/assets/img/post-landscape-1.jpg"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in
                                        Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for
                                        Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A
                                        Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face
                                        (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working
                                        Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section><!-- End Lifestyle Category Section --> --}}
@endsection
