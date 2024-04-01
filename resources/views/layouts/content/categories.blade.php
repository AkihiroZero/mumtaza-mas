<section class="price_section">
    <div class="container">
        <div class="heading_container pt-5">
            <h2>
                List Kategori Emas
            </h2>
        </div>
        <div class="price_container owl-carousel">
            @foreach ($categories as $category)
                <div class="box">
                    <div class="name">
                        <h6>
                            {{ $category->name }}
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="{{ asset('images/categories/' . $category->image) }}" height="150" alt="">
                    </div>
                    <div class="detail-box">
                        <a href="{{ url('emas-list/kategori/' . $category->name) }}">
                            Check Kategori
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
