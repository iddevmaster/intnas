<x-landing-layout>

    <!-- Header -->
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="video-background">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="/img/poster.jpg" onload="this.load()">
                <source src="/video/forest.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8 header-content">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12 fadeIn">
                <div class="flex justify-center lg:max-w-xl lg:mx-auto">
                    <img src="/img/logodronettc.png" alt="">
                </div>
                {{-- <h1 class="text-center h1-large mb-5 text-white fadeIn" >Drone Technology Training Center</h1> --}}
                <h1 class="text-center h1-large mb-5 text-white fadeIn" id="typewriter"></h1>
                {{-- <div class="w-full h-full flex justify-center items-center">
                    <h1 id="typewriter" class="text-4xl font-bold"></h1>
                </div> --}}
                {{-- ศูนย์ฝึกอบรมเทคโนโลยีโดรนสำหรับผู้ที่หลงใหลในการบินและนวัตกรรม, --}}
                <p class="text-center p-large mb-8 text-gray-200 fadeIn2">
                    เปิดประตูสู่โลกแห่งทักษะการบินพร้อมทั้งประสบการณ์ทางปฏิบัติและความรู้เฉพาะทางจากผู้เชี่ยวชาญ
                </p>
                {{-- <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a> --}}
            </div>
            <div class="xl:text-right hidden sm:flex justify-center items-center slideInRight">
                <img
                    class="inline sm:w-1/3 lg:w-auto drone-float "
                    src="img/dronewhite.png"
                    alt="alternative" />
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Introduction -->
    <div class="pt-4 pb-14 text-center">
        <div class="container px-4 sm:px-8 xl:px-4">
            <p class="mb-4 font-bold text-black text-3xl leading-10 lg:max-w-5xl lg:mx-auto" style="color: var(--second-color)">
                "เปิดโลกมุมมองใหม่, บินสู่อนาคตกับหลักสูตรการบินโดรนของเรา"
            </p>
            <p class="mb-4 text-gray-800 text-xl leading-10 lg:max-w-4xl lg:mx-auto">
                ที่นี่คุณจะได้เรียนรู้ทักษะที่จำเป็นทั้งหมดเพื่อควบคุมและใช้งานโดรนอย่างมืออาชีพ, พร้อมก้าวสู่อาชีพในโลกของเทคโนโลยีการบินที่ไม่มีขีดจำกัด!
            </p>
        </div> <!-- end of container -->
    </div>
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1">
        <p class="text-4xl mb-12 font-bold text-black">สินค้าและบริการของเรา</p>
        <div class="container px-4 sm:px-8 xl:px-4">
            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-1.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ตัวแทนจำหน่ายโดรน</h5>
                    <p class="mb-4">You sales force can use the app on any smartphone platform without compatibility issues</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-2.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">หลักสูตรอบรม</h5>
                    <p class="mb-4">Works smoothly even on older generation hardware due to our optimization efforts</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-3.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ขึ้นทะเบียนโดรน</h5>
                    <p class="mb-4">Optimized code and innovative technology insure no delays and ultra-fast responsiveness</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-4.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ทำประกันภัยโดรน</h5>
                    <p class="mb-4">Choose from one of the 40 languages that come pre-installed and start selling smarter</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-5.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">บริการฉีดพ่น</h5>
                    <p class="mb-4">Don't worry about future costs, pay once and receive all future updates at no extra cost</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-6.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">การจัดแสดงสินค้า</h5>
                    <p class="mb-4">Register the app and get acces to knowledge and ideas from the Pavo online community</p>
                </div>
            </div>
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Details 1 -->
    <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="300"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <h2 class="mb-6">โดรนเกษตร</h2>
                        <p class="mb-4">Based on our team's extensive experience in developing line of business applications and constructive customer feedback we reached a new level of revenue.</p>
                        <p class="mb-4">We enjoy helping small and medium sized tech businesses take a shot at established Fortune 500 companies</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7 transition hover:scale-125">
                <div class="xl:ml-14"
                    data-aos="fade-left"
                    {{-- data-aos-offset="200" --}}
                    {{-- data-aos-delay="50" --}}
                    data-aos-duration="600"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="true"
                    >
                        <img class="inline drone-float" src="img/droneagri.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7 transition hover:scale-125">
                <div class="mb-12 lg:mb-0 xl:mr-14"
                    data-aos="fade-right"
                    data-aos-duration="600"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="true"
                    >
                        <img class="inline drone-float" src="img/dronesurv.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="300"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <h2 class="mb-6">โดรนสำรวจ</h2>
                        <ul class="list mb-7 space-y-2">
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Features that will help you and your marketers</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Smooth learning curve due to the knowledge base</div>
                            </li>
                            <li class="flex">
                                <i class="fas fa-chevron-right"></i>
                                <div>Ready out-of-the-box with minor setup settings</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                        <a class="btn-outline-reg" href="article.html">Details</a>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="lg:col-span-8">
                <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                    <img class="inline rounded-lg" src="images/details-lightbox.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-4">
                <h3 class="mb-2">Goals Setting</h3>
                <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4 class="mt-7 mb-2.5">User Feedback</h4>
                <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list mb-6 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Splash screen panel</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Statistics graph report</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Events calendar layout</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Location details screen</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    <div class="pt-16 pb-12">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="300"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <h2 class="mb-6">โดรนถ่ายภาพ</h2>
                        <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo
                            together with their teams.</p>
                        <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level agreement</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7 transition hover:scale-125">
                <div class="ml-14"
                    data-aos="fade-left"
                    data-aos-duration="600"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="true"
                    >
                        <img class="inline drone-float" src="img/dronecamera.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 3 -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container px-4 sm:px-8">

            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div class="counter-value number-count" data-count="231">1</div>
                    <p class="counter-info">Happy Users</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="385">1</div>
                    <p class="counter-info">Issues Solved</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="159">1</div>
                    <p class="counter-info">Good Reviews</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="127">1</div>
                    <p class="counter-info">Case Studies</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="211">1</div>
                    <p class="counter-info">Orders Received</p>
                </div>
            </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Video -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="text-center lg:max-w-xl lg:mx-auto">ฝึกอบรมที่ DRONE TTC</h2>
            <p class="mb-10 text-center lg:max-w-xl lg:mx-auto">จุดประกายความเป็นมืออาชีพ พัฒนาทักษะการบินโดรนและนำไปใช้ในอาชีพที่หลากหลาย</p>

            <!-- container -->
            <div class="container">
                {{-- <video class="w-full shadow-lg" autoplay loop controls>
                    <source src="/video/banner.mp4" type="video/mp4" />
                </video> --}}
                <video playsinline="playsinline" autoplay="autoplay" id="videoElement" loop="loop" preload="auto">
                    <source src="/video/banner.mp4" type="video/mp4">
                </video>
            </div> <!-- end of slider-container -->
            <!-- end of container -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of Video -->


    <!-- Testimonials -->
    <div class="slider-1 py-32">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as possible that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that can help businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app was difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with some issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="absolute bottom-0 h-40 w-full bg-white"></div>
        <div class="container px-4 pb-px sm:px-8">
            <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">หลักสูตรอบรมเชิงปฏิบัติการ</h2>
            <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto">
                หลักสูตรการบินโดรนที่ถูกออกแบบมาอย่างพิถีพิถันเพื่อมอบประสบการณ์ที่คุ้มค่าและการฝึกอบรมที่ครอบคลุมให้กับคุณ
                ไม่ว่าคุณจะเป็นมือใหม่ที่กำลังเริ่มต้นหรือผู้ที่มีประสบการณ์และต้องการพัฒนาทักษะของตนเอง
            </p>

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">โดรนเกษตร</div>
                    <div class="price"><span class="value">15k</span></div>
                    <div class="frequency">บาท</div>
                    <p>หลักสูตรอบรม การสอนนักบินโดรนเพื่อการเกษตรมืออาชีพ</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ระยะเวลาอบรม 19 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคทฤษฎี 8 บทเรียน 5 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคปฏิบัติ 7 บทเรียน 14 ชั่วโมง</div>
                        </li>
                        {{-- <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li> --}}
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">โดรนสำรวจ</div>
                    <div class="price"><span class="value">15k</span></div>
                    <div class="frequency">บาท</div>
                    <p>หลักสูตรอบรม การสอนนักบินโดรนเพื่อการสำรวจมืออาชีพ</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ระยะเวลาอบรม 19 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคทฤษฎี 8 บทเรียน 5 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคปฏิบัติ 7 บทเรียน 14 ชั่วโมง</div>
                        </li>
                        {{-- <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li> --}}
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">โดรนถ่ายภาพ</div>
                    <div class="price"><span class="value">9k</span></div>
                    <div class="frequency">บาท</div>
                    <p>หลักสูตรอบรม การสอนนักบินโดรนถ่ายภาพมืออาชีพ</p>
                    <ul class="list mb-7 text-left space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ระยะเวลาอบรม 12 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคทฤษฎี 8 บทเรียน 4 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคปฏิบัติ 7 บทเรียน 8 ชั่วโมง</div>
                        </li>
                        {{-- <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>15+ บทเรียน</div>
                        </li> --}}
                    </ul>
                    <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div>
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Conclusion -->
    <div id="download" class="basic-5">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
            <div class="mb-16 lg:mb-0">
                <img src="img/controller.png" alt="alternative" />
            </div>
            <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                <p class="mb-9 text-gray-800 text-2xl leading-10">
                    <span class="text-4xl font-bold" >"บินสู่อนาคตกับ <span style="color: var(--second-color)">Drone TTC</span>"</span> <br>
                    ฝึกอบรมโดรนกับมืออาชีพ พร้อมเปิดประสบการณ์ใหม่ในโลกแห่งการบินไร้คนขับ!
                </p>
                {{-- <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a> --}}
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of conclusion -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var video = document.getElementById('videoElement');
    video.volume = 0.2;
    // Function to check if the video is in the viewport
    function checkIfVideoInView() {
        var rect = video.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Event listener for scrolling and resizing
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll);

    function handleScroll() {
        if (checkIfVideoInView()) {
            if (video.paused) {
                video.play();
            }
        } else {
            // video.currentTime = 0;
            video.pause();
        }
    }

    // Initial check
    handleScroll();
});

const words = ["Drone Technology Training Center", "Welcome to my website!", "This is a Drone TTC."];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];

  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j - 1);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
      }
    }
    setTimeout(type, 50);  // Standard speed when deleting
  } else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j + 1);
    j++;
    if (j == currentWord.length) {
      isDeleting = true;
      setTimeout(type, 5000);  // Delay before deleting
    } else {
      setTimeout(type, 50);  // Standard speed when typing
    }
  }
}

type(); // Start the typewriter effect

</script>
<style>
    .video-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}
#header {
  width: 100%;
  height: 100vh;
  position: relative;
  display: flex;
  justify-content: center;
  margin-bottom: 10%;
}
.video-background video {
    object-fit: cover;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    z-index: 1;
    filter: brightness(0.4);
}
.header-content {
    z-index: 2;
}
/* Add this to your CSS file */
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

.drone-float {
  animation: float 3s ease-in-out infinite;
}
.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
  -webkit-animation-duration: 1s;
  animation-duration: 2s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInRight {
  0% {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  visibility: hidden;
  }
  100% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  visibility: visible;
  }
  }
  .fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  animation-delay: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  .fadeIn2 {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  animation-delay: 2.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
  }
</style>
</x-landing-layout>
