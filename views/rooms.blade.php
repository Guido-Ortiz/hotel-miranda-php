@extends('layout')

@section('content')
    <section class="room--wrapper">
        @foreach ($rooms as $room)
        <div class="room--detail">
            <div class="room-container">
                <!-- <img src="./resources/roomDetail/room1.jfif" alt="Room 1"/> -->
                <img src={{$room["photos"]}} alt="Room 1" />
                <div class="room--detail--icons">
                    <img src="./resources/rooms/beds.png" alt="Beds" />
                    <img src="./resources/rooms/wifi.png" alt="Wi-Fi" />
                    <img src="./resources/rooms/park.png" alt="Parking" />
                    <img src="./resources/rooms/air.png" alt="AC" />
                    <img src="./resources/rooms/gym.png" alt="Gym" />
                    <img src="./resources/rooms/smoke.png" alt="Smoke not allowed" />
                    <img src="./resources/rooms/drinks.png" alt="Drinks" />
                </div>
            </div>
            <!-- <h3>Minimal duplex room</h3> -->
            @if($room["idType"] == 1)
            <h3>Single Bed</h3>
            @endif
            @if($room["idType"] == 2)
            <h3>Double Bed</h3>
            @endif
            @if($room["idType"] == 3)
            <h3>Double Superior</h3>
            @endif
            @if($room["idType"] == 4)
            <h3>Suite</h3>
            @endif
            <!-- <h3>{{$room["idType"]}}</h3> -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur itaque earum autem ea officia.</p>
            <div class="room--price">
                <h4>${{$room["price"]}}/Night</h4>
                <span>Booking now</span>
            </div>
        </div>
        <!-- <div class="room--detail">
            <div class="room-container">
                <img src="./resources/roomDetail/room1.jfif" alt="Room 1"/>
                <div class="room--detail--icons">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur itaque earum autem ea officia.</p>
            <div class="room--price">
                <h4>$345/Night</h4>
                <span>Booking now</span>
            </div>
        </div>
        <div class="room--detail">
            <div class="room-container">
                <img src="./resources/roomDetail/room1.jfif" alt="Room 1"/>
                <div class="room--detail--icons">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur itaque earum autem ea officia.</p>
            <div class="room--price">
                <h4>$345/Night</h4>
                <span>Booking now</span>
            </div>
        </div>
        <div class="room--detail">
            <div class="room-container">
                <img src="./resources/roomDetail/room1.jfif" alt="Room 1"/>
                <div class="room--detail--icons">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error fugit odit molestias necessitatibus veniam reprehenderit aut ex cum minus, atque laboriosam quis hic? Consectetur itaque earum autem ea officia.</p>
            <div class="room--price">
                <h4>$345/Night</h4>
                <span>Booking now</span>
            </div>
        </div> -->
        @endforeach
    </section>
@endsection
