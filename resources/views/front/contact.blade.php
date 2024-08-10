@extends('layouts.main')

@section('welcome')

<section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('/img/banner-image-1-1920x500.jpg') }}">
  <div class="container">
      <div class="row">
          <div class="col-lg-10 offset-lg-1">
              <div class="cta-content">
                  <br>
                  <br>
                  <h2>Feel free to <em>Contact Us</em></h2>
                  <p>お気軽にお問い合わせください</p>
              </div>
          </div>
      </div>
  </div>
</section>
 <!-- ***** Features Item Start ***** -->
 <section class="section" id="features">
  <div class="container">
      <div class="row text-center">
          <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                  <h2>contact <em> info</em></h2>
                  <img src="{{asset('/img/line-dec.png')}}" alt="waves">
                  
              </div>
          </div>

          <div class="col-md-4">
              <div class="icon">
                  <i class="fa fa-phone"></i>
              </div>

              <h5><a href="#">03 5497 8734</a></h5>

              <br>
          </div>

          <div class="col-md-4">
              <div class="icon">
                  <i class="fa fa-envelope"></i>
              </div>

              <h5><a href="#">info@horizongroup.co.jp</a></h5>

              <br>
          </div>

          <div class="col-md-4">
              <div class="icon">
                  <i class="fa fa-map-marker"></i>
              </div>
              <h6><a >〒169-0012 東京都新宿区百人町1-20-3 <br>バラードハイム806</a></h6>
              <br>
          </div>
      </div>
  </div>
</section>
        <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                  <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202.5038921804367!2d139.69646123563516!3d35.70008510735227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d2ea7313d41%3A0x572a2ec88336042d!2z44CSMTY5LTAwNzMg5p2x5Lqs6YO95paw5a6_5Yy655m-5Lq655S677yR5LiB55uu77yS77yQ4oiS77yS77yWIOODoOOCteOCt-ODk-ODqyDvvJLvvJDvvJY!5e0!3m2!1sja!2sjp!4v1718867960296!5m2!1sja!2sjp&zoom=14" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                  <div class="contact-form section-bg" style="background-image: url('{{ asset('/img/contact-1-720x480.jpg') }}')">
                      <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="お名前*" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="メールアドレス*" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="タイトル">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="お問い合わせメッセージここに入力下さい" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Send Message</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Contact Us Area Ends ***** -->
@endsection