<section class="comics bg-dark">

    <div class="container  px-3 py-5 position-relative">
        <div id="current_series" class="position-absolute bg-primary p-3 text-white">
            <h2 class="m-0 fw-bold">CURRENT SERIES</h2>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-4">
            @forelse ($comics as $comic)
                <div class="col">
                    <div class="card rounded-0 border-0 bg-transparent pb-5">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <div class="card_text">
                            <span class="text-uppercase text-white">{{ $comic['title'] }}</span>
                        </div>
                    </div>
                </div>


            @empty
                <p>Fumetto non disponibile</p>
            @endforelse

        </div>
        <div class="text-center">
            <button class="btn btn-primary rounded-0 d-inline my-2 text-uppercase">load more</button>
        </div>
    </div>
    </div>


    </div>


    </div>
</section>
