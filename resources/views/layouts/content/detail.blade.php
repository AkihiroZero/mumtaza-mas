<section class="layout_padding2-top layout_padding-bottom pl-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/emas/' . $emas->image) }}" width="350" alt="">
            </div>
            <div class="col-md-8">
                <h2 class="mb-0">
                    {{ $emas->name }}
                    {{ $emas->barcode }}
                </h2>

                <hr>
                <h5>
                    @php
                        $harga_gram = $emas->Kadar->price + $emas->Level->price;
                        $total_harga = $harga_gram * $emas->weight;
                        $formatted_harga = number_format($total_harga, 0, ',', '.');
                    @endphp

                </h5>
                <label class="me-3" for="">Berat Emas : <span>{{ $emas->weight }} Gram</span></label>
                <br>
                <label class="me-3" for="">Kadar Emas : <span>{{ $emas->Kadar->name }}</span></label>
                <br>
                <label class="me-3" for="">Jenis Emas : <span>{{ $emas->Level->name }}</span></label>
                <br>
                <label class="me-3" for="">Harga Emas : Rp <span>{{ $formatted_harga }},00</span></label>
                <br>
                <p class="mt-3">
                    Setiap produk emas di Toko Mumtaza dijamin keasliannya dan berasal dari sumber-sumber terpercaya.
                    Kadar kemurnian emas yang tersedia biasanya berkisar antara 6 karat hingga 24 karat,
                    memastikan bahwa Anda mendapatkan produk dengan nilai yang tinggi. kami menyarankan Anda untuk
                    selalu memeriksa ketersediaan produk pada nomor Whatsapp admin kami.
                </p>
                <hr>

                <div class="">
                    @if ($emas->status == '1')
                        <label for="" class="badge bg-success" style="color">Stock Tersedia</label>
                    @else
                        <label for="" class="badge bg-danger">Stock Habis</label>
                    @endif
                </div>


                <div class="row mt-2">
                    <div class="col-md-10">
                        <br>
                        <a href="https://wa.me/+6282310072036" type="button"
                            class="btn btn-success me-3 float-start">Hubungi Pihak Berwajib
                            <img src="{{ asset('images/whatsapp.png') }}" width="50" alt="" srcset="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
            <h3>Description</h3>
            <p class="mt-3">
                {{ $emas->description }}
            </p>
        </div>
        <div class="design-image-right">
            <img src="{{ asset('images/design-2.png') }}" alt="">
        </div>
    </div>
</section>
