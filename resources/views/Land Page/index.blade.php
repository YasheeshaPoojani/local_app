<!DOCTYPE html>
<html>

<head>
    <title>Landing page</title>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @include('Land Page.libraries.css')
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="navbar">
                <div class="icon">
                    <img class="logo" src="{{ asset('asset2/Biznest 1.png') }}" alt="logo">
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="">Categories</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">Trending</a></li>
                        <li><a href="">About Us</a></li>
                    </ul>
                </div>

                <div class="button">
                    <a href="{{ route('signup') }}"><button class="signup">Sign Up</button></a>
                    <a href="{{ route('login') }}"><button class="signin">Sign In</button></a>
                </div>
            </div>
            <div>
                <img class="pic1" src="{{ asset('asset2/IMG-20240607-WA0014 .jpg') }}" alt="">
            </div>

            <div class="h1">
                <h1 align="center">Search Your Need</h1>
            </div>

            <div class="srch">
                <form action="" method="get">
                    <input type="text" value="Job title, Keyword" name="search">
                    <select name="category">
                        <option value="all">Location</option>
                        <option value="op1">Polonnaruwa</option>
                        <option value="op2">Ratnapura</option>
                        <option value="op3">Kandy</option>
                        <option value="op4">Jaffna</option>
                        <option value="op5">Colombo</option>
                    </select>
                    <button type="submit" href="">Search</button>
                </form>
            </div>

            <div class="pic">
                <ul>
                    <li><img src="{{ asset('asset2/1.png') }}">
                        <p1>Job</p1>
                        <p>17098</p>
                    </li>
                    <li><img src="{{ asset('asset2/2.png') }}">
                        <p1>User</p1>
                        <p>112096</p>
                    </li>
                    <li><img src="{{ asset('asset2/3.png') }}">
                        <p1>Location</p1>
                        <p>3309</p>
                    </li>
                </ul>
            </div>

            <div class="bank">
                <ul>
                    <li><img src="{{ asset('asset2/a.png') }}"></li>
                    <li><img src="{{ asset('asset2/b.png') }}"></li>
                    <li><img src="{{ asset('asset2/c.png') }}"></li>
                    <li><img src="{{ asset('asset2/d.png') }}"></li>
                    <li><img src="{{ asset('asset2/e.png') }}"></li>
                    <li><img src="{{ asset('asset2/f.png') }}"></li>
                </ul>
            </div>
            <div class="h2">
                Featured Post
            </div>
            <div class="h3">
                Know your worth and find the job that qualify your life
            </div>

            <div class="job1">
                <img class="j1" src="{{ asset('asset2/j1.jpg') }}">

            </div>
            <div class="job2">
                <img class="j2" src="{{ asset('asset2/j2.jpg') }}">
            </div>

            <div class="brws">
                <button type="submit" href="">Browse All</button>
            </div>
            <div class="para1">
                Loreum epusm flow in dwty nor acrc
            </div>
            <div class="list">
                <ul>
                    <li><img class="pic2" src="{{ asset('asset2/IMG-20240607-WA0015.jpg') }}"></li>
                    <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac quis urna, enim, ut. Et nec justo
                            aliquet vitae cum in. Tincidunt commodo ac nulla sit malesuada in vulputate. Volutpat
                            ullamcorper pulvinar suspendisse mauris ipsum consequat suspendisse ullamcorper. Sed nibh
                            ultrices in justo sed. Elit tortor, suscipit nullam aliquet. Vel malesuada morbi donec
                            mattis eu lacus, odio at. Ut nibh massa ornare eleifend vestibulum.</p>
                        <p>Ac erat hendrerit diam risus vitae facilisis a ultricies. Massa eget vulputate maecenas
                            imperdiet dictum malesuada.</p>
                        <p>purus enim facilisis cursus cursus est, vitae arcu.</p>
                    </li>
                </ul>
            </div>

            <div class="expl">
                <button type="submit" href="">Explore Now</button>
            </div>

            <div class="rev">Customer Reviews</div>

            <section class="testimonials">
                <div class="w3-content w3-display-container">
                    @foreach ($reviews as $index => $rew)
                        <div class="mySlides" style="display: {{ $index === 0 ? 'block' : 'none' }};">
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <img class="img" src="{{ asset('asset2/c1.jpg') }}">
                                    <div class="textbox">
                                        <h3 class="name">{{ $rew->name }}</h3>
                                        <span class="job">{{ $rew->job }}</span>
                                    </div>
                                </div>
                                <p>{{ $rew->desc }}</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="btn">
                        <button class="w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>

            </section>
            <script>
                let slideIndex = 0;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    let slides = document.getElementsByClassName("mySlides");
                    if (n >= slides.length) {
                        slideIndex = 0;
                    }
                    if (n < 0) {
                        slideIndex = slides.length - 1;
                    }
                    for (let i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slides[slideIndex].style.display = "block";
                }
            </script>



            <div class="detail">
                <h4>Your One-Stop Shop for Business Success</h4>

                <p>BIZNEST is your comprehensive business directory designed to empower entrepreneurs and established
                    businesses alike. We connect you with the resources you need to thrive, all in one convenien
                    location.</p>


                <h4>Find What You Need, When You Need It</h4>
                <ul>
                    <li>Effortless Searching: Effortlessly search for anything related to your business needs. Whether
                        you're seeking specific materials, tools, or services, BIZNEST puts the best options at your
                        fingertips.</li>
                    <li>Develop Your Business: Go beyond basic listings. BIZNEST helps you discover resources to propel
                        your business forward. Find the right° artners, equipment, and expert advic to nurture your
                        venture from concept to success.</li>
                </ul>

                <h4>BIZNET: More Than Just a Directory</h4>
                <h5>Think of BIZNEST as your launchpad for business growth. We provide the connections and information
                    you need to:</h5>

                <ul>
                    <li>Source Materials: Locate the best places to acquire essential supplies and equipment for your
                        business.</li>
                    <li> Make Informe Decisions: Gain valuable insights and connect with industry experts to make
                        strategic choices for your business.¯</li>
                    <li>Streamline Operations: Discover tools and services that can optimize your workflow and save you
                        valuable time and resources.</li>
                </ul>

                <h6>BIZNES is your partner in building a successful and sustainable business</h6>
            </div>

            <div class="adve">
                <h6>Latest Advertiesments</h6>

                <div class="scroll-container">
                    <img src="{{ asset('asset2/pic1.jpg') }}" class="slide">
                    <img src="{{ asset('asset2/pic2.jpg') }}" class="slide">
                    <img src="{{ asset('asset2/pic3.jpg') }}" class="slide">
                    <img src="{{ asset('asset2/pic4.jpg') }}" class="slide">
                    <img src="{{ asset('asset2/pic5.jpg') }}" class="slide">
                    <img src="{{ asset('asset2/pic6.jpg') }}" class="slide">
                    <img src="{{ asset('asset2/pic7.jpg') }}" class="slide">
                </div>
            </div>
        </div>
    </div>
</body>
