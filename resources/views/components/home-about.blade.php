<section class="about" aria-labelledby="about-label" id="about">
    <div class="container">
        <figure class="about-banner">
            @if ($dataAbout->image)
                @foreach ($dataAbout->image as $key => $imageAboutUrl)
                    <img src="{{ Storage::url($imageAboutUrl) }}" width="800" height="580" alt="{{ $key }}"
                        class="w-100" />
                @endforeach
            @else
                <img src="assets/images/about-banner.png" width="800" height="580" alt="about banner"
                    class="w-100">
            @endif
        </figure>
        <div class="about-content">
            <p class="section-subtitle" id="about-label">{{ $dataTideAbout->title }}</p>
            <h2 class="h2 section-title">
                {{ $dataTideAbout->subtitle }}
            </h2>
            <ul>
                @if ($dataAbout)
                    @foreach ($dataAbout->tx_title as $key => $title)
                        @if (isset($dataAbout->tx_description[$key]))
                            @php
                                $description = $dataAbout->tx_description[$key];
                            @endphp
                            <li class="about-item" id="{{ $key }}">
                                <div class="accordion-card" data-accordion>
                                    <h3 class="card-title">
                                        <button class="accordion-btn" data-accordion-btn>
                                            <ion-icon name="chevron-down-outline" aria-hidden="true"
                                                class="down"></ion-icon>
                                            <span class="span h5">{{ $title }}</span>
                                        </button>
                                    </h3>
                                    <p class="accordion-content">
                                        {{ $description }}
                                    </p>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @else
                    <li class="about-item">
                        <div class="accordion-card expanded" data-accordion>

                            <h3 class="card-title">
                                <button class="accordion-btn" data-accordion-btn>
                                    <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                                    <spna class="span h5">Professional Design</spna>
                                </button>
                            </h3>

                            <p class="accordion-content">
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                fermentum massa justo
                                sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent
                                commodo cursus magna,
                                vel.
                            </p>

                        </div>
                    </li>
                @endif

            </ul>

        </div>

    </div>
</section>
