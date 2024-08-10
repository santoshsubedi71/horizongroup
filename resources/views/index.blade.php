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
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article>
                            <img src="{{ asset('/img/blog-image-1-940x460.jpg') }}" alt="">
                        </article>
                    </section>
                </div>
    
                <div class="col-lg-4">
                    <h2 class="beautiful-title">
                        <span class="title">FUTURE</span> <span class="jtitle">未来</span>
                    </h2>
                    <p>私たちの未来は、多岐にわたる業界でのサービス提供を通じて、お客様のニーズに応え続けることにあります。人材紹介においては、最新の技術を駆使して企業と最適な人材をマッチングさせ、労働市場に革新をもたらします。また、居酒屋業界では、独自のビジネスモデルを展開し、地域社会に貢献します。不動産事業においても、最適な物件の提供とアフターサービスでお客様の信頼を築きます。IT分野では、革新的なソリューションを提供し、企業のデジタル変革をサポートします。</p>
                </div>
            </div>
    
            <div class="row mt-5">
                <div class="col-lg-4">
                    <h2 class="beautiful-title">
                        <span class="title">OUR GOAL</span> <span class="jtitle">目標</span>
                    </h2>
                    <p>私たちの目標は、各業界で最高のサービスを提供し、お客様の期待を超えることです。人材紹介においては、企業と人材の最適なマッチングを実現し、双方の成長と幸福をサポートします。居酒屋では、訪れる全ての方に心地よい時間を提供し、地域に根付いた存在になることを目指します。不動産では、お客様が安心して暮らせる住まいを提供し、長期的な関係を築くことを目指します。IT分野では、最新の技術を駆使して、お客様のビジネスを次のステージへと導きます。</p>
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
                    <h2 class="beautiful-title">
                        <span class="title">OUR WORK</span> <span class="jtitle">作業</span>
                    </h2>
                    <p>私たちの仕事は、多岐にわたるサービスを通じて、お客様の多様なニーズに応えることです。人材紹介においては、企業のニーズを詳細に理解し、それに合った優秀な人材を紹介します。居酒屋では、最高の料理とサービスを提供し、訪れる方々に特別な時間を過ごしていただきます。不動産では、最適な物件の提案から購入後のサポートまで、一貫したサービスを提供します。IT分野では、システム開発から運用サポートまで、包括的なソリューションを提供し、お客様のビジネスを支援します。</p>
                </div>
            </div>
    
            <div class="row mt-5">
                <div class="col-lg-4">
                    <h2 class="beautiful-title">
                        <span class="title">OUR TEAM</span> <span class="jtitle">チーム</span>
                    </h2>
                    <p>私たちのチームは、各業界の専門家で構成されています。人材紹介のプロフェッショナルから、居酒屋の運営に長けたスタッフ、不動産のエキスパート、そしてIT技術者まで、多様なメンバーが揃っています。各メンバーは、豊富な経験と専門知識を持ち、お客様に最高のサービスを提供するために日々努力しています。また、私たちは常に最新のトレンドや技術を学び続け、業務に反映させることで、お客様に信頼されるパートナーであり続けます。</p>
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
</div>
<br>
<br>
<section class="section section-bg" id="schedule"
    style="background-image: url({{ asset('/img/about-fullscreen-1-1920x700.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>私たち <em>について</em></h2>
                    <img src=" {{ asset('img/line-dec.png') }}" alt="">
                    <p>当社は、人材紹介業界において卓越したサービスを提供しています。私たちの使命は、企業と求職者を最適な形で結びつけることです。</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cta-content text-center">
                    <p>私たちは、各業界のトップ企業と協力し、優秀な人材を紹介することで、企業の成長を支援しています。私たちのチームは、経験豊富なリクルーターと専門家で構成されており、最高のマッチングを実現します。
                    </p>
                    <p>私たちのサービスは、企業のニーズに合わせてカスタマイズされており、求職者が自分のスキルとキャリア目標に合った仕事を見つける手助けをします。私たちの目標は、クライアントと求職者の双方が満足する結果を生み出すことです。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!-- ***** Cars Ends ***** -->
{{--
<section class="section section-bg" id="schedule"
    style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
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
                    <p>私たちは、各業界のトップ企業と協力し、優秀な人材を紹介することで、企業の成長を支援しています。私たちのチームは、経験豊富なリクルーターと専門家で構成されており、最高のマッチングを実現します。
                    </p>

                    <p>私たちのサービスは、企業のニーズに合わせてカスタマイズされており、求職者が自分のスキルとキャリア目標に合った仕事を見つける手助けをします。私たちの目標は、クライアントと求職者の双方が満足する結果を生み出すことです。
                    </p>
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
                    <img src="{{ asset('/img/line-dec.png') }}" alt="waves">
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
                            <img src="{{ asset('/img/features-first-icon.png') }}" alt="Second One">
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
                            <img src="{{ '/img/features-first-icon.png' }}" alt="Third One">
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
                    <a href="https://www.facebook.com" target="_blank" title="Facebook"><i
                            class="fab fa-facebook"></i></a>
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

<style>
    .beautiful-title {
        font-size: 25px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-align: center;
        margin: 20px 0;
    }
    .beautiful-title span.title {
        color: #232d39; /* Black color */
    }
    .beautiful-title span.jtitle {
        color: #ed563b; /* Orange color */
    }
</style>