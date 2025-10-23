<div class="menu-bg">     https://github.com/dev-kmk/the-burger-bar/tree/main/inc
        <div class="container"> 
     <div class="row">
  <div class="col-md-12 col-lg-12">

      <!-- BOOTSTRAP 4 NAVBAR START-->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/"> Brand </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li <?php if($page==""||$page==NULL){echo 'class="active"';}?>><a class="nav-link" href="/">Home</a> </li>
            <li class="nav-item <?php if($page == 'about-us' ) {echo 'active';}?>">
              <a class="nav-link" href="/about-us/">About Us </a>
            </li>
            <li class="nav-item <?php if($page == 'gallery' ) {echo 'active';}?>">
              <a class="nav-link" href="/gallery/">Gallery</a>
            </li>
             <li class="nav-item <?php if($page == 'testimonials' ) {echo 'active';}?>">
              <a class="nav-link" href="/testimonials/">Testimonials</a>
            </li>
            <li class="nav-item <?php if($page == 'contact-us' ) {echo 'active';}?>">
              <a class="nav-link" href="/contact-us/">Contact Us</a>
            </li>

          </ul>
        </div>
      </nav>
      <!-- BOOTSTRAP 4 NAVBAR END -->



      </div>
      </div>
        </div>
  </div>
