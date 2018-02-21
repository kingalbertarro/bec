<!-- // MAIN CONTENT -->
<!-- FOOTER -->
<section id="google-map"> <!-- #google-map -->
  <figure>
    <img src="images/common/map.jpg" alt="">
  </figure>
</section> <!-- // #google-map -->

<footer id="footer"> <!-- #footer -->
  <div class="sitemap-wrap">
   <div class="company-info">
     <h3>Bayside English Cebu</h3>
     <span class="phone">032-494-3632</span>
     <p class="address">Punta engano, Lapu-Lapu City 6015<br>Cebu, The Philippines</p>
     <div class="social-btn">
       <a href=""><img src="images/common/icn-ig.png" alt=""></a>
       <a href=""><img src="images/common/icn-fb02.png" alt=""></a>
       <a href=""><img src="images/common/icn-tw.png" alt=""></a>
     </div>
   </div>
   <div class="about-us">
     <h3>ABOUT US</h3>
     <ul>
       <li><a href="">学校紹介</a></li>
       <li><a href="">特徴</a></li>
       <li><a href="">教師紹介</a></li>
       <li><a href="">キャンパス</a></li>
       <li><a href="">Premium Resort Campus</a></li>
       <li><a href="">RPC Campus</a></li>
       <li><a href="">アクセス</a></li>
     </ul>
   </div>
   <div class="course">
     <h3>COURSE</h3>
     <ul>
       <li><a href="">コース・料金</a></li>
       <li><a href="">General Course</a></li>
       <li><a href="">教師紹介</a></li>
       <li><a href="">General Plus</a></li>
       <li><a href="">Intensive Course</a></li>
       <li><a href="">Absolute Course</a></li>
       <li><a href="">Relax Course</a></li>
       <li><a href="">Attend Course</a></li>
       <li><a href="">Babysitter Course</a></li>
       <li><a href="">Business General Course</a></li>
       <li><a href="">Business Absolute Course</a></li>
     </ul>
   </div>
   <div class="flow">
     <h3>FLOW</h3>
     <ul>
       <li><a href="">留学生活</a></li>
       <li><a href="">General Course</a></li>
       <li><a href="">教師紹介</a></li>
       <li><a href="">ご留学までの流れ</a></li>
       <li><a href="">週間の流れ</a></li>
       <li><a href="">blog</a></li>
     </ul>
   </div>
   <div class="support">
     <h3>SUPPORT</h3>
     <ul>
       <li><a href="">Q&A</a></li>
       <li><a href="">お知らせ</a></li>
       <li><a href="">お問い合わせ</a></li>
       <li><a href="">無料見積</a></li>
       <li><a href="">ご相談</a></li>
       <li><a href="">お申し込み</a></li>
       <li><a href="">法人のお客様</a></li>
     </ul>
   </div>
   <div class="other">
     <ul>
       <li><a href="">会社概要</a></li>
       <li><a href="">規約</a></li>
       <li><a href="">代表メッセージ</a></li>
     </ul>
   </div>
 </div>
 <p class="copyright">Copyright 2016 Bayside English Cebu, Inc. | All Rights Reserved</p>
</footer> <!-- #footer -->
</div> <!-- // #main-wrap -->

 <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script type="text/javascript" src="js/main.js" charset="utf-8"></script>
  <script>
  $(document).ready(function () {
    AOS.init();

    $('.banner-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: '60px',
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 430,
      settings: {
        centerPadding: '0',
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
     });
  });
  </script>
  <script>
  $(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
      $('.sticky-nav').fadeIn("1000").css('display','block');
    }
    else {
      $('.sticky-nav').fadeOut("slow").css('display','none');
    }
  });
  </script>
</body>
</html>
<!-- // FOOTER -->
