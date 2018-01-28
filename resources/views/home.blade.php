@extends('layouts.master')

@section('content')
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Your First step to Immigration</h3>
                        <h4 data-animation="animated bounceInUp">Discover the benefits of canada immigration</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> Change your family's future</h3>
                        <h4 data-animation="animated bounceInUp"> By finding the right path</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="{{ asset('img/workcircle.jpg') }}">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Study towards</h3>
                        <h4 data-animation="animated bounceInUp">Permanent Residency</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 400px;"  data-animation="animated zoomInLeft" src="{{ asset('img/studycircle.jpg') }}">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">We are creative</h3>
                        <h4 data-animation="animated bounceInUp"> Call US</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="{{ asset('img/prcircle.jpg') }}">
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="about-section section-div" id="about-section">
        <h1 class="section-title wow fadeInUp"><span>About Us</span></h1>

        <div class="row about-header">
            <div class="col-md-12 col-sm-12">
                <h1>About Us</h1>
                <h2>sssaa -       ---</h2>
                <button type="button" class="btn btn-danger">Contact US TODAY</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-user-follow font-red-sunglo theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Best Customer Expierence </h2>
                    </div>
                    <div class="card-desc">
                        <span> saaaaaaaa
                            <br>ssssssssssssss </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-trophy font-green-haze theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Awards Winner </h2>
                    </div>
                    <div class="card-desc">
                        <span> aaaaaaaaaaaaaaaa
                            <br> aaaaaaaaaaaaaa</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-basket font-purple-wisteria theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Call us For Free Consultation </h2>
                    </div>
                    <div class="card-desc">
                        <span> aaaaaaaaaa
                            <br> aaaaaaaaaaa fnajdnajdaw</span>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="immigration-section section-div" id="immigration-section">
        <h1 class="section-title wow fadeInUp">Immigration</h1>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/study1.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Study</h2>
            <p>Study towards your Permanent Residence</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('study') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/work.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Work</h2>
            <p>Easy way to enter into canada.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('work') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
<<<<<<< HEAD
            <img class="img-circle" src="{{ asset('img/pr.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Permanent Residence</h2>
            <p>Settle in Canada</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('pr') ?>" role="button">View details »</a></p>
=======
            <img class="img-circle" src="{{ asset('img/business.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Business</h2>
            <p>Good oppurtunities for business</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('business') ?>" role="button">View details »</a></p>
>>>>>>> a739bec06d1f4fe96331316a98af4119652e457b
          </div><!-- /.col-lg-4 -->
        </div>

        

      <!-- START THE FEATURETTES -->

      <!-- <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2MGEyZjIwNzE4IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTYwYTJmMjA3MTgiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEyNSIgeT0iMjYxLjEiPjUwMHg1MDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
        </div>
      </div> -->


      <!-- <hr class="featurette-divider"> -->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <!-- <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
 -->
    <div class="contact-section section-div" id="contact-section">
      <div class="row">
          <h1 class="section-title wow fadeInUp">Contact Us</h1>
          <div class="col-md-7">
              <div class="c-contact">
                  <div class="c-content-title-1">
                      <div class="c-line-left bg-dark"></div>
                      <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                  </div>
                  <form action="#">
                      <div class="form-group">
                          <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                      <div class="form-group">
                          <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                      </div>
                      <button type="submit" class="btn red-mint btn-outline sbold uppercase btn-lg">Submit</button>
                  </form>
              </div>
          </div>
          <div class="col-md-5">
            <div class="c-content-contact-1 c-opt-1">
              <div class="row" data-auto-height=".c-height">
                  <div class="col-lg-12 col-md-12">
                      <div class="c-body">
                          <div class="c-section">
                              <h3>Contact Details</h3>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Address</div>
                              <p>2904 QueensLand Dr,
                                  <br>Richmond VA
                                  <br>United States of America</p>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Contacts</div>
                              <p>
                                  <strong>T</strong> 571 292 7000
                                  <br>
                                  <strong>F</strong> 804 255 9423</p>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Social</div>
                              <br>
                              <ul class="c-content-iconlist-1 ">
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-twitter"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-facebook"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-youtube-play"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-linkedin"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;"></div>
            </div>
          </div>
      </div>
    </div>


@endsection
@section('page-scripts')

@endsection
