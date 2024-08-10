<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('main.index') }}" class="logo">株式会社<em> HORIZON GROUP</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('main.index') }}" class="{{ Route::is('main.index') ? 'active' : '' }}">ホーム</a></li>
                        <li><a href="{{ route('front.job')}}" class="{{ Route::is('front.job') ? 'active' : '' }}">仕事検索</a></li>
                        <li><a href="{{ route('front.company')}}" class="{{ Route::is('front.company') ? 'active' : '' }}">企業のご担当様</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">その他のサービス</a>     
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">IT サービス</a>
                                <a class="dropdown-item" href="">不動産</a>
                                <a class="dropdown-item" href="">飲食店</a>
                                
                            </div>
                        </li>
                        <li><a href="{{ route('front.about')}}" class="{{ Route::is('front.about') ? 'active' : '' }}">会社概要</a></li>
                        {{-- <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">私たち</a>
                          
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('front.about')}}">会社概要</a>
                                <a class="dropdown-item" href="team.html">チーム</a>
                                <a class="dropdown-item" href="blog.html">ブログ</a>
                                <a class="dropdown-item" href="testimonials.html">ハッピカストマ</a>
                                <a class="dropdown-item" href="terms.html">Terms</a>
                            </div>
                        </li> --}}
                        <li><a href="{{ route('front.contact')}}" class="{{ Route::is('front.contact') ? 'active' : '' }}">お問い合わせ</a></li> 
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>