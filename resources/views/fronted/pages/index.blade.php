@extends("fronted.layout.layout")
@section("content")

<div id="hero-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($slider as $key => $slide)
      <li data-target="#hero-slider" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach($slider as $key => $slide)
      <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" style="height: 500px;">
        <img class="d-block w-100" src="{{ asset($slide->image) }}" alt="Slide {{ $key + 1 }}">
        <div class="carousel-caption d-md-block text-left">
          <h5>{{ $slide->name }}</h5>
          <p>{{ $slide->content }}</p>
          <a href="{{ url('/').'/'. $slide->link }}" class="btn btn-sm btn-primary">Ürünlerimiz Gör</a>
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#hero-slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#hero-slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="site-section site-section-sm site-blocks-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Ücretsiz Kargo</h2>
            <p>
                Sınırlı süreliğine tüm alışverişlerinizde ücretsiz kargo imkanı sizleri bekliyor. Hemen favori ürünlerinizi seçin, kapınıza kadar ücretsiz teslimat avantajından faydalanın! Acele edin, kampanya bitmeden alışverişinizi tamamlayın.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="icon-refresh2"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Ücretsiz İade</h2>
            <p>
                Memnuniyet garantisiyle, beğenmediğiniz ürünleri kolayca iade edebilme imkanı sizleri bekliyor. Ücretsiz iade seçeneğiyle alışverişinizi risk almadan yapın, keyifle deneyin! Detaylar için hemen ziyaret edin.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="icon-help"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Müşteri Desteği</h2>
            <p>Soru, öneri veya yardım için biz buradayız! Profesyonel müşteri destek ekibimiz size her konuda yardımcı olmaya hazır. İletişime geçmek için hemen bizimle iletişime geçin. Memnuniyetiniz bizim için önemli!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section site-blocks-2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
          <a class="block-2-item" href="{{ route("women_products") }}">
            <figure class="image">
              <img src="images/women.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Giyim</span>
              <h3>Kadın</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <a class="block-2-item" href="{{ route("children_products") }}">
            <figure class="image">
              <img src="images/children.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Giyim</span>
              <h3>Çocuk</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <a class="block-2-item" href="{{ route("men_products") }}">
            <figure class="image">
              <img src="images/men.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Giyim</span>
              <h3>Erkek</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Yeni Eklenenler</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Tank Top</a></h3>
                  <p class="mb-0">Finding perfect t-shirt</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Corater</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Polo Shirt</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">T-Shirt Mockup</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">Corater</a></h3>
                  <p class="mb-0">Finding perfect products</p>
                  <p class="text-primary font-weight-bold">50₺</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section block-8">
    <div class="container">
      <div class="row justify-content-center  mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Kampanya!</h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 mb-5">
          <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-12 col-lg-5 text-center pl-md-5">
          <h2><a href="#">Tüm Ürünlerimizde %50 indirim</a></h2>

          <p>Seçili Ürünlerde İndirim Fırsatlarını kaçırmayın</p>
          <p><a href="{{ route("discountProducts") }}" class="btn btn-primary btn-sm">Şimdi Alışveriş Yapın</a></p>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('scripts')
  <script>
    $(document).ready(function() {
      // Carousel initialize
      $('.carousel').carousel();

      // Otomatik olarak hareket ettirme
      $('.carousel').carousel({
        interval: 3000 // 3 saniye sonra otomatik olarak hareket ettir
      });
    });
  </script>
@endsection
