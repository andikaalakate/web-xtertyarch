<section class="section service" aria-labelledby="service-label">
    <div class="container">
        <p class="section-subtitle" id="service-label">{{ $dataTideService->title }}</p>
        <h2 class="h2 section-title">
            {{ $dataTideService->subtitle }}
        </h2>
        <ul class="grid-list-srv">
            @if ($dataService)
                @foreach ($dataService as $item)
                    <li>
                        <div class="srv-card">
                            <div class="">
                                <div class="card-icon">
                                    <ion-icon class="my-8" name="{{ $item->icon }}" aria-hidden="true"></ion-icon>
                                </div>
                                <h3 class="h4 card-title">{{ $item->tx_title }}</h3>
                                <p class="card-text">
                                    {{ $item->tx_description }}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
                <li>
                    <div class="srv-card">
                        <div class="">
                            <div class="card-icon">
                                <ion-icon class="my-8" name="call-outline" aria-hidden="true"></ion-icon>
                            </div>
                            <h3 class="h4 card-title">24/7 Support</h3>
                            <p class="card-text">
                                Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                eget metus cras
                                justo.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="srv-card">
                        <div class="">
                            <div class="card-icon">
                                <ion-icon class="my-8" name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                            </div>
                            <h3 class="h4 card-title">Secure Payments</h3>
                            <p class="card-text">
                                Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                eget metus cras
                                justo.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="srv-card">
                        <div class="">
                            <div class="card-icon">
                                <ion-icon class="my-8" name="cloud-download-outline" aria-hidden="true"></ion-icon>
                            </div>
                            <h3 class="h4 card-title">Daily Updates</h3>
                            <p class="card-text">
                                Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                eget metus cras
                                justo.
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="srv-card">
                        <div class="">
                            <div class="card-icon">
                                <ion-icon class="my-8" name="pie-chart-outline" aria-hidden="true"></ion-icon>
                            </div>
                            <h3 class="h4 card-title">Market Research</h3>
                            <p class="card-text">
                                Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                eget metus cras
                                justo.
                            </p>
                        </div>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</section>
