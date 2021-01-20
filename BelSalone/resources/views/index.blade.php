@extends('layout')

@section('content')
    <!-- 
                    <div class="second" style="background: transparent;">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-weight: 700;font-family: RozhaOne;font-size:larger;color:darksalmon">Bel ₻ Salone</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-weight: 700;">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#Review" style="font-weight: 700;">Review</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#" style="font-weight: 700;" >Services</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#Contact" style="font-weight: 700;">Contact</a>
      </li>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>

      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
      <ul></ul>
    </ul>
  </div></nav></div> -->
    <section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="https://source.unsplash.com/Pe9IXUuC6QU">
      <div class="container-fluid tm-brand-container-outer">
        <div class="row">
          <div class="col-12">
            <!-- Logo Area -->
            <!-- Black transparent bg -->
            <div class="ml-auto mr-0 tm-bg-black-transparent text-white tm-brand-container-inner">
              <div class="tm-brand-container text-center">
                <h1 class="tm-brand-name" style="font-family: RozhaOne;">Bel Salone</h1>
                <p class="tm-brand-description mb-0" style="font-family: RozhaOne;">We'll Style You'll Smile</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tm-bg-white-transparent tm-welcome-container">
        <div class="container-fluid">
          <div class="row h-100">
            <!-- Welcome Text -->
            <!-- White transparent bg -->
            <div class="col-md-7 tm-welcome-left-col">
              <div class="tm-welcome-left">
                <h2 class="tm-welcome-title" style="font-family: RozhaOne;">Welcome to Bel Salone</h2>
                <p class="pb-0" style="font-family: RozhaOne;">
                  This website provides platform to the beauticians who want to get 
                  expand their business. Just sign up and we will deliver your msgfmt_format_message
                  to the customers.</p>
              </div>
            </div>
            <!-- Brown bg -->
            <div class="col-md-5">
              <div class="tm-welcome-right">
                <i class="fas fa-4x fa-address-card p-3 tm-welcome-icon"></i>
                <p class="mb-0" style="font-family: RozhaOne;">
                  Please spread a word about templatemo website. Anyone can download free Bootstrap CSS templates.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Welcome section -->

<!-- <section id="slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/W6cwaL7PMSw" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/i3KR4ZoXI9M" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
      <div class="tm-bg-white-transparent tm-welcome-container">
        <div class="container-fluid">
          <div class="row h-100">
          </div></div></div>
</section> -->
    <!-- Portfolio section -->
    <section id="tmPortfolio">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tm-portfolio-item">
              <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/i3KR4ZoXI9M/400x400" class="card-img-top" alt="..." >
              </div>
              <div class="tm-portfolio-description">
                <a class="badge badge-light" href="#" style="font-family:RozhaOne;font-size:larger;">Make up</a>
                <p class="mb-0">
                  Nullam a tellus ultricies, ornare purus vel, porttitor massa.
                  Aliquam facilisis purus ac eros sollicidudin, in mollis neque
                  facilisis. Duis malesuada, mi non elementum malesuada.
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/W6cwaL7PMSw/400x400" class="card-img-top" alt="..." >
              </div>
              <div class="tm-portfolio-description">
                <a class="badge badge-light" href="#" style="font-family:RozhaOne;font-size:larger;">Hair</a>
                <p class="mb-0">
                  Nullam a tellus ultricies, ornare purus vel, porttitor massa.
                  Aliquam facilisis purus ac eros sollicidudin, in mollis neque
                  facilisis. Duis malesuada, mi non elementum malesuada.
                </p>
              </div>            </div>

            <div class="tm-portfolio-item">
               <div class="card" style="width: 18rem;">
              <img src="/customAuth/image/bride.jpg" class="card-img-top" alt="..." >
              </div>
              <div class="tm-portfolio-description">
                <a class="badge badge-light" href="#" style="font-family:RozhaOne;font-size:larger;">Brdial Packages</a>
                <p class="mb-0">
                  Nullam a tellus ultricies, ornare purus vel, porttitor massa.
                  Aliquam facilisis purus ac eros sollicidudin, in mollis neque
                  facilisis. Duis malesuada, mi non elementum malesuada.
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
                            <div class="card" style="width: 18rem;">
  <img src="/customAuth/image/manicure.jpg" class="card-img-top" alt="..." >
              </div>
              <div class="tm-portfolio-description">
                <a class="badge badge-light" href="#" style="font-family:RozhaOne;font-size:larger;">Manicure & Pedicure</a>
                <p class="mb-0">
                  Nullam a tellus ultricies, ornare purus vel, porttitor massa.
                  Aliquam facilisis purus ac eros sollicidudin, in mollis neque
                  facilisis. Duis malesuada, mi non elementum malesuada.
                </p>
              </div>
            </div>
            <div class="tm-portfolio-item">
                            <div class="card" style="width: 18rem;">
  <img src="/customAuth/image/Massage.jpeg" class="card-img-top" alt="..." >
              </div>
              <div class="tm-portfolio-description">
                <a class="badge badge-light" href="#" style="font-family:RozhaOne;font-size:larger;">Massage</a>
                <p class="mb-0">
                  Nullam a tellus ultricies, ornare purus vel, porttitor massa.
                  Aliquam facilisis purus ac eros sollicidudin, in mollis neque
                  facilisis. Duis malesuada, mi non elementum malesuada.
                </p>
              </div>
            </div>
            <div class="tm-portfolio-item">
                            <div class="card" style="width: 18rem;">
  <img src="/customAuth/image/facial.jpg" class="card-img-top" alt="..." >
              </div>
              <div class="tm-portfolio-description">
                <a class="badge badge-light" href="#" style="font-family:RozhaOne;font-size:larger;">Facial</a>
                <p class="mb-0">
                  Nullam a tellus ultricies, ornare purus vel, porttitor massa.
                  Aliquam facilisis purus ac eros sollicidudin, in mollis neque
                  facilisis. Duis malesuada, mi non elementum malesuada.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End portfolio section -->

    <!-- Contact section -->
    <section id="Review"></section>
    <div id="tmContact" class="parallax-window" data-parallax="scroll" data-image-src="https://source.unsplash.com/HEde-a_T4E8">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tm-contact-items-container">
              <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
</div>
            </div>
          </div>
        </div>
</section>
<section id="Contact">
        <div class="row">
          <div class="col-12">
            <form
              action="index.html"
              method="POST"
              id="tmContactForm"
              class="tm-bg-white-transparent"
            >
              <div class="form-group">
                <input
                  type="text"
                  id="contact_name"
                  name="contact_name"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Name"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  id="contact_email"
                  name="contact_email"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group">
                <textarea
                  rows="4"
                  id="contact_message"
                  name="contact_message"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="text-center">
                <button
                  type="submit"
                  class="btn tm-btn-submit rounded-0 text-white"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
</section>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- section -->
    <script src="/customAuth/js/jquery.min.js"></script>
    <script src="/customAuth/js/parallax.min.js"></script>
    <script>
      function detectMsBrowser() {
        using_ms_browser =
          navigator.appName == "Microsoft Internet Explorer" ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Edge") > -1) ||
          (navigator.appName == "Netscape" &&
            navigator.appVersion.indexOf("Trident") > -1);

        if (using_ms_browser == true) {
          alert(
            "Please use Chrome or Firefox for the best browsing experience!"
          );
        }
      }
      function setBrandMarginTop() {
        var bottomContainerHeight = $(".tm-welcome-container").height();

        $(".tm-brand-container-outer").css({
          "margin-top": -bottomContainerHeight + "px"
        });
      }

      $(function() {
        setBrandMarginTop();
        detectMsBrowser();

        // Handle window resize event
        $(window).resize(function() {
          setBrandMarginTop();
        });
      });
    </script>
@endsection