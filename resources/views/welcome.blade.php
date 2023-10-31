<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
  @include('user.layouts.head')

<body>

@include('user.layouts.header')

<!-- banner -->
@include('user.layouts.banner')
<!-- /banner -->



<!-- faq -->

      
<!-- call to action -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 text-center d-lg-block d-none">
        <img src="images/cta-illustration.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 text-lg-left text-center">
        <h2 class="mb-3">Still Didn&rsquo;t Find Your Answer?</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam <br> nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
    
      </div>
    </div>
  </div>
</section>
<!-- /call to action -->

<footer>
  <div class="container">
    <div class="row align-items-center border-bottom py-5">
      <div class="col-lg-4">
        <ul class="list-inline footer-menu text-center text-lg-left">
          
          <li class="list-inline-item"><a href="contact.html">Home</a></li>
          <li class="list-inline-item"><a href="contact.html">Dashboard</a></li>
          <li class="list-inline-item"><a href="contact.html">contact</a></li>
        </ul>
      </div>
      <div class="col-lg-4 text-center mb-4 mb-lg-0">
        <a class="navbar-brand" href="index.html">
          <img class="img-fluid" src="images/logo.png" alt="Hugo documentation theme">
        </a>
      </div>
      <div class="col-lg-4">
        <ul class="list-inline social-icons text-lg-right text-center">
          <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="py-4 text-center">
      <small class="text-light">Copyright © 2020 a hugo theme by <a href="https://themefisher.com">themefisher</a></small>
    </div>
  </div>
</footer>

<!-- plugins -->
@include('user\layouts\js')

</body>
</html>
