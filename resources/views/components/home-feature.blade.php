<section class="section feature -mb-16" aria-labelledby="feature-label">
    <div class="container">

        <figure class="feature-banner">
            @if ($dataFeature->image)
                @foreach ($dataFeature->image as $key => $imageFeatureUrl)
                    <img src="{{ Storage::url($imageFeatureUrl) }}" width="800" height="580" alt="{{ $key }}"
                        class="w-100" />
                @endforeach
            @else
                <img src="assets/images/feature-banner.png" width="800" height="580" alt="feature banner"
                    class="w-100">
            @endif
        </figure>

        <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">{{ $dataTideFeature->title }}</p>

            <h2 class="h2 section-title">
                {{ $dataTideFeature->subtitle }}
            </h2>
            @if ($dataFeature)
                <p class="section-text">
                    {{ $dataFeature->tx_description }}
                </p>
            @else
                <p class="section-text">
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
                    justo odio,
                    dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus.
                </p>
            @endif

            <ul class="feature-list">
                @if ($dataFeature)
                    @foreach ($dataFeature->list_check as $key => $list)
                        <li>
                            <div class="feature-card">
                                <div class="card-icon">
                                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                </div>
                                <span class="span">
                                    {{ $list }}
                                </span>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Aenean quam ornare. Curabitur blandit.
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Nullam quis risus eget urna mollis ornare.
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Etiam porta euismod malesuada mollis.
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Vivamus sagittis lacus vel augue rutrum.
                            </span>
                        </div>
                    </li>
                @endif
            </ul>

        </div>

    </div>
</section>
