<section class="section hero flex has-bg-image 2xl:min-h-screen" aria-label="home" style="background-image: url('assets/images/hero-bg2.jpg')">
    <div class="container justify-center">
        <div class="hero-content">
            <h1 class="h1 hero-title">{{ $dataTideHero->title }}</h1>
            <p class="hero-text">
                {{ $dataTideHero->subtitle }}
            </p>
            <div class="btn-wrapper">
                <a href="{{ $dataHero->link_explore }}" class="transition-all duration-500">
                    <button class="cssbuttons-io-button"> {{ $dataHero->btx_explore }}
                        <div class="icon">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                    fill="currentColor">
                                </path>
                            </svg>
                        </div>
                    </button>
                </a>

                <a href="{{ $dataHero->link_contact }}" class="">
                    <button
                        class="bg-[#5942FF] hover:bg-[#2344FF] text-slate-100 font-bold py-3 px-6 rounded-full shadow-lg shadow-neutral-950 hover:text-white transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
                        {{ $dataHero->btx_contact }}
                    </button>

                </a>
            </div>
        </div>

        <div class="hero-slider" data-slider>

            <div class="slider-inner">
                <ul class="slider-container" data-slider-container>
                    @if($dataHero)
                        @foreach($dataHero->image as $key => $imageUrl)
                            <li class="slider-item">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="{{ Storage::url($imageUrl) }}" width="575" height="550" alt="{{ $key }}" class="img-cover">
                                </figure>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
                <ion-icon name="arrow-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-slider-next>
                <ion-icon name="arrow-forward"></ion-icon>
            </button>

        </div>

    </div>
</section>
