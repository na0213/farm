<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        @vite(['resources/css/app.css','resources/css/welcome.css'])
    </head>

    <body>
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ url('/welcome') }}" class="font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">TOP</a>
    
            <a href="{{ url('/index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">FARM</a>
    
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
        @endif
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- スライドたち -->
                <div class="swiper-slide"><img src="{{ asset('images/kurofuji.JPG') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/mongol.JPEG') }}"></div>
                <div class="swiper-slide"><img src="{{ asset('images/sasaki_farm.jpg') }}"></div>
            </div>
            <!-- ページネーション(ページ移動)が必要な場合 -->
            <div class="swiper-pagination"></div>
        
            <!-- 左右にナビゲーションボタンが必要な場合 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            <!-- スクロールバーが必要な場合 -->
            <div class="swiper-scrollbar"></div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- SwiperJSの初期設定を追記 -->
        <script>
          const mySwiper = new Swiper('.swiper-container', {
          // オプションパラメータ
          direction: 'horizontal',
          loop: true,
    
          // ページネーションが欲しい場合
          pagination: {
            el: '.swiper-pagination',
          },
        
          // ナビゲーションボタン
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
    
          // スクロールばーが欲しい場合
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        })
        </script>
    </body>

    {{-- <body class="antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    <a href="{{ url('/welcome') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">TOP</a>

                    <a href="{{ url('/index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">FARM</a>

                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Slider main container -->


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-16">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide"><img src="{{ asset('images/kurofuji.JPG') }}"></div>
                          <div class="swiper-slide"><img src="{{ asset('images/mongol.JPEG') }}"></div>
                          <div class="swiper-slide"><img src="{{ asset('images/sasaki_farm.jpg') }}"></div>
                          ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                      
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                      
                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                      </div>
                </div>
                <div class="mt-16">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide"><img src="{{ asset('images/kurofuji.JPG') }}"></div>
                          <div class="swiper-slide"><img src="{{ asset('images/mongol.JPEG') }}"></div>
                          <div class="swiper-slide"><img src="{{ asset('images/sasaki_farm.jpg') }}"></div>
                          ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                      
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                      
                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                      </div>
                </div>
            </div>
        </div> --}}

        {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            const mySwiper = new Swiper('.mv01 .swiper', {
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            loop: true,
            loopAdditionalSlides: 1,
            speed: 2000,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
                waitForTransition: false,
            },
            followFinger: false,
            pagination: {
                el: '.mv01 .swiper-pagination',
                clickable: true,
            },
            });
        </script> --}}
        {{-- @vite(['resources/js/welcome.js']) --}}
    {{-- </body> --}}
</html>
