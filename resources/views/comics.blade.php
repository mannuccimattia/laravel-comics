@extends('layouts.master')

@section('title')
    Comics | DC Comics
@endsection

@section('content')
    <section class="top-main">
        @include('partials/jumbo')
        <div class="container">
            <div class="comics-wrapper">
                @foreach ($comics as $comic)
                    <x-comic-card :comic="$comic" />
                @endforeach
            </div>
            <div class="btn-wrapper">
                <div id="load-btn">
                    <a href="#">LOAD MORE</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-main">
        <div class="container">
            <div>
                <ul>
                    <li>
                        <a href="#">
                            <div class="list-wrapper">
                                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                                    alt="logo digital comics" />
                                <div>DIGITAL COMICS</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="list-wrapper">
                                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                                    alt="logo merchandise" />
                                <div>DC MERCHANDISE</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="list-wrapper">
                                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                                    alt="logo subscriptions" />
                                <div>SUBSCRIPTION</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="list-wrapper">
                                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                    alt="logo shop locator" />
                                <div>COMIC SHOP LOCATOR</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="list-wrapper">
                                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                                    alt="logo dc power visa" />
                                <div>DC POWER VISA</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
