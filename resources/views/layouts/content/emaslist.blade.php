<section class="price_section layout_padding">
    <div class="design-image">
        <img src="images/design-1.png" alt="">
    </div>
    <div class="container">
        <div class="heading_container">
            <h2>
                Harga Emas Kami
            </h2>
        </div>
        <form action="{{ route('search') }}" method="get">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 amber-border" type="search" {{ request('search') }}
                    placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-danger">
                    <i class="fas fa-search text-grey" aria-hidden="true"></i>
                </button>
            </div>
        </form>
        <div class="price_container" id="emasList">
            @forelse ($emass as $emas)
                <div class="box">
                    <div class="name">
                        <h6>
                            {{ $emas->name }}
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="{{ asset('images/emas/' . $emas->image) }}" alt="">
                    </div>
                    <div class="detail-box">
                        {{-- <h5>
                            @php
                                $harga_gram = $emas->Kadar->price + $emas->Level->price;
                                $total_harga = $harga_gram * $emas->weight;
                                $formatted_harga = number_format($total_harga, 0, ',', '.');
                            @endphp
                            Rp <span>{{ $formatted_harga }},00</span>
                        </h5> --}}
                        <a href="{{ url('emas-detail/' . $emas->id) }}">
                            Check Emas
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <nav aria-label="..." class="pagination">
                {{ $emass->appends(request()->query())->links() }}
            </nav>
        </div>
    </div>
    <div class="design-image-right">
        <img src="images/design-2.png" alt="">
    </div>
</section>
