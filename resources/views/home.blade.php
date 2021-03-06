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
                        <h4 data-animation="animated bounceInUp">Contact Dreams Canada</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> Change your future</h3>
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
                        <h3 data-animation="animated bounceInDown">Spot For</h3>
                        <h4 data-animation="animated bounceInUp">World Class Education</h4>
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
                        <h3 data-animation="animated bounceInDown">Dream Big</h3>
                        <h4 data-animation="animated bounceInUp"> Embrace Canada</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="{{ asset('img/prcircle.JPG') }}">
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
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
                <h2> Dreams Canada LLC is a consulting firm, providing solutions & guidance for education , work permit, Visitor Visa & Permanent residence processing platform for the aspiring.  It is our goal to provide knowledge based guidance to achieve your goals.

                Our Promoters are professionals, who are living abroad and have over a decade of experience in overseas consulting</h2>
                <button type="button" class="btn btn-danger">Contact US TODAY</button>
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
            <img class="img-circle" src="{{ asset('img/pr.JPG') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Permanent Residency</h2>
            <p>Settle in Canada</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('pr') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>

      <div class="fqa-section section-div" id="fqa-section">
        <h1 class="section-title wow fadeInUp"><span>FAQS</span></h1>
          <div class="alert alert-success" role="alert">
           <strong> Why study in Canada?</strong>
           <p> Studying in Canada would be a beautiful experience for anyone, literally, since Canada is ranked as the BEST PLACE in the world to LIVE. Because of its access to education, high life expectancy and low crime rates, Canada is a very attractive destination for students through out the world. </p>
          </div>
        <br>
           <strong>What is the official language?</strong>
           <p> Canada is a bilingual country with two official languages - English and French. Most of the French-speaking inhabitants live in Quebec. However, almost all non-Quebec based universities offer education instruction in English only.</p>
          <div class="alert alert-success" role="alert">
            <strong> What is Student Partners Program?</strong>
           <p> The Student Partners Program (SPP) is an administrative framework designed and implemented in partnership between the Canadian visa offices in India and the Association of Canadian Community Colleges (ACCC). The SPP was launched in April 2009 as a pilot to improve student recruitment outcomes. Due to the improvement achieved during the pilot, the program is being extended and expanded in 2010. </p>
          </div>
          <br>
          <strong>What is the IELTS requirement?</strong>
           <p> It differs from institution to institution but the minimum requirement is 6.0 and not less than 5.0 in each individual band with minimum 50% of academic mark </p>
          <br>
          <div class="alert alert-success" role="alert">
            <strong> What type of institutions are their?</strong>
           <p>There are more than 175 post-secondary institutions that offer various programs such as Certificate, Diploma and Bachelor's, including vocational and adult-education. These institutions are known as Community colleges, Technical Institute, University College and Universities. All these colleges are members of the Association of Canadian Community colleges.</p>
          </div>
          <br>
          <strong>What is the duration of the program offered?</strong>
           <p>Undergraduate programs are of 4 years duration, except in Ontario, where there is three-year Bachelor degrees and three-year Master's degrees. In the other parts of Canada, post-graduate programs (Master's) are of two years duration.</p>
          <br>
          <div class="alert alert-success" role="alert">
            <strong>What is the currency used and INR equivalent?</strong>
            <p> Canadian Dollar 1CAD$ is equivalent to Rs.45 approximately.</p>
          </div>          
          <br>
          <strong>What is the living expense?</strong>
           <p>Canada would be between CAN $ 8,000-12,000, depending upon the location of their residence</p>
          <br>
          <div class="alert alert-success" role="alert">
            <strong>What type of accommodation is available for the students?</strong>
            <p>Students have a number of options available that can be on-campus or off-campus such as hostels, rented housing, home stay etc.</p>
          </div>
          <strong>Can student go for a part time job?</strong>
           <p>Yes but only after 6 months of studies with the permission of the institution.</p>
          <br>
          <div class="alert alert-warning" role="alert">
          <strong>Do I have to pay fee before the visa?</strong>
          <p>Yes at least first semester fee is to be paid before the visa.</p>
          </div>
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
                  <form id="messageForm">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <input type="text" placeholder="Your Name" class="form-control input-md" name="name" required> </div>
                      <div class="form-group">
                          <input type="email" placeholder="Your Email" class="form-control input-md" name="email" required> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Contact Phone" class="form-control input-md" name="contact" required> </div>
                      <div class="form-group">
                          <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md" name="message" required></textarea>
                      </div>
                      <button type="submit" class="btn red-mint btn-outline sbold uppercase btn-lg sendMessage">Submit</button>
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
                              <div class="c-content-label uppercase bg-red-mint">
                              Address</div>
                              <h4>K. PAVAN REDDY </h4>
                              <p>2904 QueensLand Dr,
                                  <br>Richmond VA
                                  <br>United States of America</p>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Contacts</div> <br>
                                  <strong><a href="mailto:pavankumar2ca@gmail.com?Subject=DreamsCanada" target= blank>pavankumar2ca@gmail.com</a></strong>
                                  <br>
                                  <strong>T</strong> 571 292 7000
                                  <br>
                                  <strong>T</strong> 719 963 2256
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
<script type="text/javascript">
$(function(){
    $(document).on("submit","#messageForm",function(event){
      event.preventDefault();
      var data = $(this).serialize();
        $.ajax({
            url:'<?= url('') ?>/newMessage',
            type:'post',
            dataType:'json',
            data:data,
            success:function(response) {
              console.log(response);
            }
          });
    });

    validateForm("#messageForm");
    
    // form validation function
    function validateForm(form) {
        jQuery.validator.addMethod( "phoneNumber", function(value, element, regexp = "^[0-9 ()+-]+$") {
                // console.log(regexp);
                var re = new RegExp(regexp);
                return this.optional( element ) || re.test(value);
            },
            "Please enter a valid phone number."
        );

        $(form).validate({
            rules: {
                    "contact": {
                        phoneNumber: "^[0-9 ()+-]+$" 
                },
            },
            submitHandler: function(form) {
                return true;
            }
        });
    }
});
</script>

@endsection
