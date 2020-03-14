@extends('homepages.master')
@section('content')
<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                  <h2><em>About</em> Us</h2>
                  <img src="{{ asset('homepages/assets/images/line-dec.png') }}" alt="waves">
                  <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section" id="call-to-action">
  <div class="container">
      <div class="row">
          <div class="col-lg-10 offset-lg-1">
              <div class="cta-content">
                  <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                  <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                  <div class="main-button scroll-to-section">
                      <a href="#our-classes">Join with us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
<section class="section" id="our-classes">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                  <h2>Our <em>Products</em></h2>
                  <img src="{{ asset('homepages/assets/images/line-dec.png') }}" alt="">
                  <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
              </div>
          </div>
      </div>
      <div class="row" id="tabs">
        <div class="col-lg-4">
          <ul>
            <li><a href='#tabs-1'><img src="{{ asset('homepages/assets/images/tabs-first-icon.png') }}" alt="">HRM</a></li>
            <li><a href='#tabs-2'><img src="{{ asset('homepages/assets/images/tabs-first-icon.png') }}" alt="">CRM</a></a></li>
            <li><a href='#tabs-3'><img src="{{ asset('homepages/assets/images/tabs-first-icon.png') }}" alt="">Ecommerce</a></a></li>
            <li><a href='#tabs-4'><img src="{{ asset('homepages/assets/images/tabs-first-icon.png') }}" alt="">School Management</a></a></li>
            <li><a href='#tabs-5'><img src="{{ asset('homepages/assets/images/tabs-first-icon.png') }}" alt="">Hosting & VPS</a></a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <section class='tabs-content'>
            <article id='tabs-1'>
              <img src="{{ asset('assets/images/users-management.png') }}" alt="First Class">
              <h4>Human Resource Management</h4>
              <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
              <div class="main-button">
                  <a href="#">View Schedule</a>
              </div>
            </article>
            <article id='tabs-2'>
              <img src="{{ asset('homepages/assets/images/training-image-02.jpg') }}" alt="Second Training">
              <h4>Customer Relationship Management</h4>
              <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <div class="main-button">
                  <a href="#">View Schedule</a>
              </div>
            </article>
            <article id='tabs-3'>
              <img src="{{ asset('homepages/assets/images/training-image-03.jpg') }}" alt="Third Class">
              <h4>Ecommerce</h4>
              <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
              <div class="main-button">
                  <a href="#">View Schedule</a>
              </div>
            </article>
            <article id='tabs-4'>
              <img src="{{ asset('homepages/assets/images/training-image-04.jpg') }}" alt="Fourth Training">
              <h4>Smart School Management</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
              <div class="main-button">
                  <a href="#">View Schedule</a>
              </div>
            </article>
            <article id='tabs-5'>
              <img src="{{ asset('homepages/assets/images/training-image-04.jpg') }}" alt="Fourth Training">
              <h4>Hosting & VPS</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
              <div class="main-button">
                  <a href="#">View Schedule</a>
              </div>
            </article>
          </section>
        </div>
      </div>
  </div>
</section>
<!-- ***** Our Classes End ***** -->

<!-- ***** Testimonials Starts ***** -->
<section class="section" id="blogs">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                  <h2><em>Blogs</em></h2>
                  <img src="{{ asset('homepages/assets/images/line-dec.png') }}" alt="">
                  <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{ asset('homepages/assets/images/first-trainer.jpg') }}" alt="">
                  </div>
                  <div class="down-content">
                      <span>Strength Trainer</span>
                      <h4>Bret D. Bowers</h4>
                      <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{ asset('homepages/assets/images/second-trainer.jpg') }}" alt="">
                  </div>
                  <div class="down-content">
                      <span>Muscle Trainer</span>
                      <h4>Hector T. Daigl</h4>
                      <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="trainer-item">
                  <div class="image-thumb">
                      <img src="{{ asset('homepages/assets/images/third-trainer.jpg') }}" alt="">
                  </div>
                  <div class="down-content">
                      <span>Power Trainer</span>
                      <h4>Paul D. Newman</h4>
                      <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us">
  <div class="container-fluid contact-form">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Subject">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
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
</section>
<!-- ***** Contact Us Area Ends ***** -->
@endsection