@extends('layouts.main')

@section('welcome')
<section class="section section-bg" id="call-to-action" style="background-image: url('{{ asset('/img/banner-image-1-1920x500.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>会社概要<em>About Company </em></h2>
                </div>
            </div>
        </div>
    </div>
  </section>
    <!-- ***** Our Classes Start ***** -->
       
        <style>
            .company-profile {
                width: 100%;
                max-width: 1200px;
                margin: 50px auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: #fff;
            }
            .company-profile h2 {
                margin-bottom: 30px;
                border-bottom: 2px solid #ed563b;;
                padding-bottom: 10px;
            }
            .company-profile img {
                max-width: 100%;
                height: auto;
                border-radius: 10px;
            }
            .profile-table {
                width: 100%;
                margin-bottom: 20px;
                border-collapse: collapse;
            }
            .profile-table th, .profile-table td {
                border: 1px solid #ddd;
                padding: 10px;
            }
            .profile-table th {
                background-color: #f2f2f2;
                width: 30%;
            }
        </style>
    </head>
    <body>
    
    <div class="company-profile">
        <h2>会社概要</h2>
        <table class="profile-table">
            <tr>
                <th>社名</th>
                <td>株式会社 HORIZON GROUP（英文名称：HORIZON GROUP CORPORATION）</td>
            </tr>
            <tr>
                <th>創業</th>
                <td>2024年（令和5年）6月1日</td>
            </tr>
            <tr>
                <th>事業内容</th>
                <td>電気通信事業</td>
            </tr>
            <tr>
                <th>本社所在地</th>
                <td>東京都新宿区百人町1-20-3 バラードハイム806</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>03-5497-8734（本社代表）</td>
            </tr>
            <tr>
                <th>代表取締役社</th>
                <td>DANGI TILAK &nbsp;&nbsp;(ダンギ　テイラク) <br>
                    SANTOSH SUBEDI &nbsp;&nbsp; （スベデイ　サントス）
                </td>
            </tr>
            <tr>
                <th>資本金</th>
                <td>1000万円</td>
            </tr>
            <tr>
                <th>社員数</th>
                <td>5名</td>
            </tr>
        </table>
    </div>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            
        </div>
    </footer>
  </body>
</html>

@endsection