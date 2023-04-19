@extends('layout')

@section('content')
    <div class="header--about">
        <p>The ultimate luxury experience</p>
        <h1>About us</h1>
        <div class="header--breadcrumb">
            <h5>Home | <span> About</span></h5>
        </div>
    </div>

    <!-- VIDEO -->
    <div class="vid">
        <video autoplay controls>
            <source src="./resources/_video/hotel.mp4" type="video/mp4">
            <!-- <source src="movie.ogg" type="video/ogg"> -->
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- INTRO -->
    <section class="intro">
        <p>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
        <div class="intro--container">
            <div>
                <img src="./resources/_about/breakfast.png" alt="Breakfast" />
                <h5>Breakfast</h5>
            </div>
            <div>
                <img src="./resources/_about/breakfast.png" alt="Airport pickup" />
                <h5>Airport pickup</h5>
            </div>
            <div>
                <img src="./resources/_about/guide.png" alt="City guide" />
                <h5>City guide</h5>
            </div>
            <div>
                <img src="./resources/_about/room.png" alt="Luxury room" />
                <h5>Luxury room</h5>
            </div>
        </div>
    </section>

    <!-- RESTAURANT -->
    <section class="restaurant">
        <div>
            <img src="./resources/about/about.jpg" alt="Restaurant" />
        </div>
        <div>
            <h4>Restaurant</h4>
            <h1>Get restaurant facilities & many other more</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero hic explicabo blanditiis aliquam
                voluptatibus nobis, repellat unde sed ut eius officia doloribus accusamus nihil, ipsam neque, at
                necessitatibus et consequatur.</p>
            <button>Take a tour</button>
        </div>
    </section>

    <!-- CORE FEATURES -->
    <section class="core">
        <h3>Facilities</h3>
        <h1>Core Features</h1>
        <div class="core--container">
            <div class="core--item">
                <div>
                    <img src="./resources/_core/icon _1.png" alt="Icon" />
                </div>
                <h3>Have high rating</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid error
                    voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                    reiciendis accusantium impedit.</p>
                <h1>01</h1>
            </div>
            <div class="core--item">
                <div>
                    <img src="./resources/_core/icon _1.png" alt="Icon" />
                </div>
                <h3>Have high rating</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid error
                    voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                    reiciendis accusantium impedit.</p>
                <h1>01</h1>
            </div>
            <div class="core--item">
                <div>
                    <img src="./resources/_core/icon _1.png" alt="Icon" />
                </div>
                <h3>Have high rating</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid error
                    voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                    reiciendis accusantium impedit.</p>
                <h1>01</h1>
            </div>
            <div class="core--item">
                <div>
                    <img src="./resources/_core/icon _1.png" alt="Icon" />
                </div>
                <h3>Have high rating</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid error
                    voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                    reiciendis accusantium impedit.</p>
                <h1>01</h1>
            </div>
            <div class="core--item">
                <div>
                    <img src="./resources/_core/icon _1.png" alt="Icon" />
                </div>
                <h3>Have high rating</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid error
                    voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                    reiciendis accusantium impedit.</p>
                <h1>01</h1>
            </div>
            <div class="core--item">
                <div>
                    <img src="./resources/_core/icon _1.png" alt="Icon" />
                </div>
                <h3>Have high rating</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid error
                    voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                    reiciendis accusantium impedit.</p>
                <h1>01</h1>
            </div>
        </div>
        <div class="swiper mySwiper core--swiper">
            <div class="swiper-wrapper">

                <div class="core--item swiper-slide">
                    <div>
                        <img src="./resources/_core/icon _1.png" alt="Icon" />
                    </div>
                    <h3>Have high rating</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid
                        error
                        voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                        reiciendis accusantium impedit.</p>
                    <h1>01</h1>
                </div>
                <div class="core--item swiper-slide">
                    <div>
                        <img src="./resources/_core/icon _1.png" alt="Icon" />
                    </div>
                    <h3>Have high rating</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem dolores mollitia aliquid
                        error
                        voluptate ut porro itaque obcaecati dolore, non commodi perspiciatis minus maxime blanditiis ab
                        reiciendis accusantium impedit.</p>
                    <h1>11</h1>
                </div>
            </div>
            <div class="swiper-paginations"></div>
        </div>
    </section>

    <!-- COUNTER -->
    <section class="counter">
        <h5>Counter</h5>
        <h1>Some fun facts</h1>
        <div class="counter--container">
            <div class="counter--item">
                <img src="./resources/_counter/users.png" alt="Happy users" />
                <div>
                    <h2>8000</h2>
                    <h6>Happy users</h6>
                </div>
            </div>
            <div class="counter--item">
                <img src="./resources/_counter/users.png" alt="Reviews" />
                <div>
                    <h2>10M</h2>
                    <h6>Reviews & Appriciate</h6>
                </div>
            </div>
            <div class="counter--item">
                <img src="./resources/_counter/users.png" alt="Coverage" />
                <div>
                    <h2>100</h2>
                    <h6>Country Coverage</h6>
                </div>
            </div>
        </div>
        <div class="counter--image">
            <img src="./resources/about/about.jpg" alt="Img 1" />
            <img src="./resources/about/about.jpg" alt="Img 2" />
        </div>
    </section>

    <!-- SLIDER -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <img src="./resources/about/about.jpg" alt="Img 1" class="swiper-slide" />
            <img src="./resources/about/about.jpg" alt="Img 2" class="swiper-slide" />
        </div>
        <div class="swiper-pagination"></div>
    </div>
@endsection