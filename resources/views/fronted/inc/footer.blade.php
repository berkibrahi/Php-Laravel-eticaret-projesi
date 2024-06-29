<footer class="site-footer border-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Menü</h3>
            </div>
            <div class="col-md-6 col-lg-8">
              <ul class="list-unstyled">
                <li> <a href="{{route("index")}}">anasayfa</a></li>
                <li> <a href="{{route("about")}}">Hakkımızda</a></li>
                <li> <a href="{{route("products")}}">ürünler</a></li>
                <li> <a href="{{route("contact")}}">iletişim</a></li>
              </ul>
            </div>


          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">iletişim bilgileri</h3>
            <ul class="list-unstyled">
              <li class="address">{{ $settings["adres"] }}</li>
              <li class="phone"><a href="tel://23923929210">{{ $settings["telefon"] }}</a></li>
              <li class="email">{{ $settings["email"] }}</li>
            </ul>
          </div>

          <div class="block-7">
            <form action="#" method="post">
              <label for="email_subscribe" class="footer-heading">Abone Ol</label>
              <div class="form-group">
                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                <input type="submit" class="btn btn-sm btn-primary" value="send">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Haklar Saklıdır
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>
