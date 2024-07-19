@extends('layouts.main')

@section('welcome')
        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source src="{{ asset('/img/video.mp4') }}" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="caption">
                    <h6>株式会社HORIZON GROUPでは、スキルアップやキャリアチェンジをお手伝いします</h6>
                    <h2>マッチングで理想の仕事を<em>見つけよう</em></h2>
                    <div class="main-button">
                        <a href="contact.html">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="contact.html">会員登録</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->
    <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                      <article>
                        <img src="{{ asset('/img/blog-image-1-940x460.jpg') }}" alt="">
                        
                      </article>                 
                    </section>
                </div>
    
                <div class="col-lg-4">
                    <h2>FUTURE</h2>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere
                        leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula.
                        Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. 
                        Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>    
                </div>
            </div>
    
            <div class="row mt-5">
                <div class="col-lg-4">
                   
                    <h2>OUR GOAL</h2>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere
                        leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula.
                        Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. 
                        Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>    
                </div>
    
                <div class="col-lg-8">
                     <section class='tabs-content'>
                      <article>
                        <img src="{{ asset('/img/about-image-1-940x460.jpg') }}" alt="">
                        
                      </article>                 
                    </section>
                   
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                      <article>
                        <img src="{{ asset('/img/blog-image-1-940x460.jpg') }}" alt="">
                        
                      </article>                 
                    </section>
                </div>
    
                <div class="col-lg-4">
                    <h2>OUR WORK</h2>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere
                        leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula.
                        Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. 
                        Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>    
                </div>
            </div>
    
            
            <div class="row mt-5">
                <div class="col-lg-4">
                   
                    <h2>OUR GOAL</h2>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere
                        leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula.
                        Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. 
                        Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>    
                </div>
    
                <div class="col-lg-8">
                     <section class='tabs-content'>
                      <article>
                        <img src="{{ asset('/img/about-image-1-940x460.jpg') }}" alt="">
                        
                      </article>                 
                    </section>
                   
                </div>
            </div>
        </div>
    <br>
    <br>   
    <section class="section section-bg" id="schedule" style="background-image: url({{ asset('/img/about-fullscreen-1-1920x700.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>私たち <em>について</em></h2>
                        <img src=" {{ asset('img/line-dec.png') }}" alt="">
                        <p>当社は、人材紹介業界において卓越したサービスを提供しています。私たちの使命は、企業と求職者を最適な形で結びつけることです。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>私たちは、各業界のトップ企業と協力し、優秀な人材を紹介することで、企業の成長を支援しています。私たちのチームは、経験豊富なリクルーターと専門家で構成されており、最高のマッチングを実現します。</p>
    
                    <p>私たちのサービスは、企業のニーズに合わせてカスタマイズされており、求職者が自分のスキルとキャリア目標に合った仕事を見つける手助けをします。私たちの目標は、クライアントと求職者の双方が満足する結果を生み出すことです。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- ***** Cars Ends ***** -->
{{-- 
    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>私たち <em>について</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>当社は、人材紹介業界において卓越したサービスを提供しています。私たちの使命は、企業と求職者を最適な形で結びつけることです。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>私たちは、各業界のトップ企業と協力し、優秀な人材を紹介することで、企業の成長を支援しています。私たちのチームは、経験豊富なリクルーターと専門家で構成されており、最高のマッチングを実現します。</p>

                    <p>私たちのサービスは、企業のニーズに合わせてカスタマイズされており、求職者が自分のスキルとキャリア目標に合った仕事を見つける手助けをします。私たちの目標は、クライアントと求職者の双方が満足する結果を生み出すことです。</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-3">
                    <div class="section-heading">
                        <h2>キャリアチェンジに成功した人の <em>インタビュー</em></h2>
                        <img src="{{asset ('/img/line-dec.png') }}" alt="waves">
                        <p>私たちのサービスを利用してキャリアチェンジに成功した方々の声をご紹介します。</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('/img/features-first-icon.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>田中 太郎</h4>
                                <p><em>"キャリアチェンジを決意した時、どこから始めれば良いか分かりませんでした。しかし、このサービスのおかげで、新しい仕事にスムーズに移行できました。"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('/img/features-first-icon.png')}}" alt="Second One">
                            </div>
                            <div class="right-content">
                                <h4>佐藤 花子</h4>
                                <p><em>"このサービスは、私のスキルと経験を最大限に活かせる仕事を見つける手助けをしてくれました。今は新しい職場で充実した毎日を送っています。"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ ('/img/features-first-icon.png') }}" alt="Third One">
                            </div>
                            <div class="right-content">
                                <h4>鈴木 一郎</h4>
                                <p><em>"転職活動はストレスが多いですが、このサービスのおかげで安心して進めることができました。新しい職場でのチャレンジが楽しみです。"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('/img/features-first-icon.png') }}" alt="Fourth One">
                            </div>
                            <div class="right-content">
                                <h4>中村 美咲</h4>
                                <p><em>"専門的なアドバイスとサポートが受けられたことで、自信を持って新しいキャリアに踏み出すことができました。"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
       
   
            <br>
            <div class="main-button text-center">
                <a href="testimonials.html">もっと 見る</a>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 mt-5">
                    <h5>株式会社HORIZON GROUP</h5>
                    <p class="mx-0 my-0">
                        〒169-0012 東京都新宿区百人町1-20-3 バラードハイム806<br>
                        TEL : 03-5497-8734 FAX: 03-5497-8735<br>
                        メール : <a href="mailto:info@horizongroup.co.jp">info@horizongroup.co.jp</a><br>
                        営業時間 : 月-金 10:00〜19:00<br>
                        定休日 : 土 日 祝日
                    </p>
                </div>
           
                <div class="col-lg-6 mt-5">
                    <div class="social-icons">
                        <a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.tiktok.com" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
                        <a href="https://line.me" target="_blank" title="Line"><i class="fab fa-line"></i></a>
                        <a href="https://www.youtube.com" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

