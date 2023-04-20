@extends('layout')

@section('content')
    <section class="offers">
        <div class="offers--item">
            <div class="offers--img--container">
                <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                <h4>$500 <span>/Night</span></h4>
                <h3>$500 <span>/Night</span></h3>
            </div>
            <div class="offers--description">
                <h5>Double bed</h5>
                <h2>Luxury double bed</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, eum dolore provident expedita vel
                    possimus placeat molestias cum molestiae accusantium ipsum? Cum officia dolorum inventore autem
                    itaque repudiandae, ipsa voluptas.</p>
            </div>
            <div class="offers--icons">
                <div>
                    <img src="./resources/offers/wifi.png" alt="Wi-Fi" />
                    <h4>High speed WiFi</h4>
                </div>
                <div>
                    <img src="./resources/offers/wifi.png" alt="Wi-Fi" />
                    <h4>High speed WiFi</h4>
                </div>
                <div>
                    <img src="./resources/offers/wifi.png" alt="Wi-Fi" />
                    <h4>High speed WiFi</h4>
                </div>
            </div>
            <a href="detail.html">
                <button>Book now</button>
            </a>
        </div>

        <div class="offers--item">
            <div class="offers--img--container">
                <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                <h4>$500 <span>/Night</span></h4>
                <h3>$500 <span>/Night</span></h3>
            </div>
            <div class="offers--description">
                <h5>Double bed</h5>
                <h2>Luxury double bed</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, eum dolore provident expedita vel
                    possimus placeat molestias cum molestiae accusantium ipsum? Cum officia dolorum inventore autem
                    itaque repudiandae, ipsa voluptas.</p>
            </div>
            <div class="offers--icons">
                <div>
                    <img src="./resources/offers/wifi.png" alt="Wi-Fi" />
                    <h4>High speed WiFi</h4>
                </div>
                <div>
                    <img src="./resources/offers/wifi.png" alt="Wi-Fi" />
                    <h4>High speed WiFi</h4>
                </div>
                <div>
                    <img src="./resources/offers/wifi.png" alt="Wi-Fi" />
                    <h4>High speed WiFi</h4>
                </div>
            </div>
            <a href="detail.html">
                <button>Book now</button>
            </a>
        </div>
    </section>

    <section class="offers--swiper">
        <h3>Popular list</h3>
        <h2>Popular rooms</h2>
        <div class="swiper offerSwiper">
            <div class="swiper-wrapper">
                <div class="offer--detail swiper-slide">
                    <div class="offer-container">
                        <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                        <div class="offer--detail--icons">
                            <img src="./resources/rooms/beds.png" alt="Beds" />
                            <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                            <img src="./resources/rooms/park.png" alt="Parking" />
                            <img src="./resources/rooms/air.png" alt="AC" />
                            <img src="./resources/rooms/gym.png" alt="Gym" />
                            <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                            <img src="./resources/rooms/drinks.png" alt="Drinks" />
                        </div>
                    </div>
                    <h3>Minimal duplex room</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias
                        necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur
                        itaque earum autem ea officia.</p>
                    <div class="room--price">
                        <h4>$345/Night</h4>
                        <span>Booking now</span>
                    </div>
                </div>
                <div class="offer--detail swiper-slide">
                    <div class="offer-container">
                        <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                        <div class="offer--detail--icons">
                            <img src="./resources/rooms/beds.png" alt="Beds" />
                            <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                            <img src="./resources/rooms/park.png" alt="Parking" />
                            <img src="./resources/rooms/air.png" alt="AC" />
                            <img src="./resources/rooms/gym.png" alt="Gym" />
                            <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                            <img src="./resources/rooms/drinks.png" alt="Drinks" />
                        </div>
                    </div>
                    <h3>Minimal duplex room</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias
                        necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur
                        itaque earum autem ea officia.</p>
                    <div class="room--price">
                        <h4>$345/Night</h4>
                        <span>Booking now</span>
                    </div>
                </div>
                <div class="offer--detail swiper-slide">
                    <div class="offer-container">
                        <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                        <div class="offer--detail--icons">
                            <img src="./resources/rooms/beds.png" alt="Beds" />
                            <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                            <img src="./resources/rooms/park.png" alt="Parking" />
                            <img src="./resources/rooms/air.png" alt="AC" />
                            <img src="./resources/rooms/gym.png" alt="Gym" />
                            <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                            <img src="./resources/rooms/drinks.png" alt="Drinks" />
                        </div>
                    </div>
                    <h3>Minimal duplex room</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias
                        necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur
                        itaque earum autem ea officia.</p>
                    <div class="room--price">
                        <h4>$345/Night</h4>
                        <span>Booking now</span>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="offer">
            <div class="offer--detail">
                <div class="offer-container">
                    <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                    <div class="offer--detail--icons">
                        <img src="./resources/rooms/beds.png" alt="Beds" />
                        <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                        <img src="./resources/rooms/park.png" alt="Parking" />
                        <img src="./resources/rooms/air.png" alt="AC" />
                        <img src="./resources/rooms/gym.png" alt="Gym" />
                        <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                        <img src="./resources/rooms/drinks.png" alt="Drinks" />
                    </div>
                </div>
                <h3>Minimal duplex room</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias
                    necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur
                    itaque earum autem ea officia.</p>
                <div class="room--price">
                    <h4>$345/Night</h4>
                    <span>Booking now</span>
                </div>
            </div>
            <div class="offer--detail">
                <div class="offer-container">
                    <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                    <div class="offer--detail--icons">
                        <img src="./resources/rooms/beds.png" alt="Beds" />
                        <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                        <img src="./resources/rooms/park.png" alt="Parking" />
                        <img src="./resources/rooms/air.png" alt="AC" />
                        <img src="./resources/rooms/gym.png" alt="Gym" />
                        <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                        <img src="./resources/rooms/drinks.png" alt="Drinks" />
                    </div>
                </div>
                <h3>Minimal duplex room</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias
                    necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur
                    itaque earum autem ea officia.</p>
                <div class="room--price">
                    <h4>$345/Night</h4>
                    <span>Booking now</span>
                </div>
            </div>
            <div class="offer--detail">
                <div class="offer-container">
                    <img src="./resources/roomDetail/room1.jfif" alt="Room 1" />
                    <div class="offer--detail--icons">
                        <img src="./resources/rooms/beds.png" alt="Beds" />
                        <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                        <img src="./resources/rooms/park.png" alt="Parking" />
                        <img src="./resources/rooms/air.png" alt="AC" />
                        <img src="./resources/rooms/gym.png" alt="Gym" />
                        <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                        <img src="./resources/rooms/drinks.png" alt="Drinks" />
                    </div>
                </div>
                <h3>Minimal duplex room</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias
                    necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur
                    itaque earum autem ea officia.</p>
                <div class="room--price">
                    <h4>$345/Night</h4>
                    <span>Booking now</span>
                </div>
            </div>
        </div>
    </section>
@endsection