@extends('layouts.app')

@section('content')
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="content_top">
  <div class="container">
    <div class="col-md-3 grid_1">
      <i class="time"> </i>
      <h3>{{ trans('app.views.welcome.top_services.unlock_imei') }}</h3>
      <p>{{ trans('app.views.welcome.services.content.unlock_imei') }}</p>
    </div>
    <div class="col-md-3 grid_1">
      <i class="platform"> </i>
      <h3>{{ trans('app.views.welcome.top_services.check_imei') }}</h3>
      <p>{{ trans('app.views.welcome.services.content.check_imei') }}</p>
    </div>
    <div class="col-md-3 grid_1">
      <i class="fast"> </i>
      <h3>{{ trans('app.views.welcome.top_services.unlock_hash') }}</h3>
      <p>{{ trans('app.views.welcome.services.content.unlock_hash') }}</p>
    </div>
    <div class="col-md-3 grid_1">
      <i class="data"> </i>
      <h3>{{ trans('app.views.welcome.top_services.activations') }}</h3>
      <p>{{ trans('app.views.welcome.services.content.activations') }}</p>
    </div>
  </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="content_bottom">
  <div class="container">
    <div class="box3">
      <h2>Mejores Planes . Mejores Precios .</h2>
      <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>
     <div class="plans">
                   <div class="col-md-3">
              <div class="pricing-table-grid">
                <div class="plans_head">
                  <h3>Personal</h3>
                    <h4 class="m_4"><small class="m_2">$</small>10<small small class="m_3">/mo</small></h4>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                </div>
                <ul>
                  <li><a href="#">20GB Disk Space</a></li>
                  <li><a href="#">20GB Monthly Bandwidth</a></li>
                  <li><a href="#">Unlimited Users</a></li>
                  <li><a href="#">100 Domains</a></li>
                  <li><a href="#">430 Email Accounts</a></li>
                  <li><a href="#">Automatic Cloud Backups</a></li>
                  </ul>
                  <a class="popup-with-zoom-anim button" href="#small-dialog">Order Now</a>
                  <div id="small-dialog" class="mfp-hide">
                  <div class="pop_up">
                    <div class="payment-online-form-left">
                      <form>
                        <h4><span class="shipping"> </span>Shipping</h4>
                        <ul>
                          <li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
                          <li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
                        </ul>
                        <ul>
                          <li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
                          <li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
                        </ul>
                        <ul>
                          <li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
                          <li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
                          <div class="clearfix"> </div>
                        </ul>
                        <div class="clear"> </div>
                      <ul class="payment-type">
                        <h4><span class="payment"> </span> Payments</h4>
                        <li>
                          <span class="col_checkbox">
                          <input id="3" class="css-checkbox1" type="checkbox">
                          <label for="3" name="demo_lbl_1" class="css-label1"> </label>
                          <a class="visa" href="#"> </a>
                          </span>
                        </li>
                        <li>
                          <span class="col_checkbox">
                            <input id="4" class="css-checkbox2" type="checkbox">
                            <label for="4" name="demo_lbl_2" class="css-label2"> </label>
                            <a class="paypal" href="#"> </a>
                          </span>
                        </li>
                        <div class="clearfix"> </div>
                      </ul>
                        <ul>
                          <li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
                          <li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
                          <div class="clearfix"> </div>
                        </ul>
                        <ul>
                          <li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
                          <li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
                          <div class="clearfix"> </div>
                        </ul>
                        <ul class="payment-sendbtns">
                          <li><input type="reset" value="Cancel"></li>
                          <li><input type="submit" value="Process order"></li>
                        </ul>
                        <div class="clearfix"> </div>
                      </form>
                    </div>
                    </div>
                </div>
             </div>
         </div>
             <div class="col-md-3">
          <div class="pricing-table-grid">
                <div class="plans_head1">
                  <h3>Professional</h3>
                    <h4 class="m_4"><small class="m_2">$</small>24<small small class="m_3">/mo</small></h4>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                </div>
                <ul>
                  <li><a href="#">20GB Disk Space</a></li>
                  <li><a href="#">20GB Monthly Bandwidth</a></li>
                  <li><a href="#">Unlimited Users</a></li>
                  <li><a href="#">100 Domains</a></li>
                  <li><a href="#">430 Email Accounts</a></li>
                  <li><a href="#">Automatic Cloud Backups</a></li>
                  </ul>
                  <a class="popup-with-zoom-anim button1" href="#small-dialog">Order Now</a>
              </div>
         </div> 
           <div class="col-md-3">
        <div class="pricing-table-grid">
                <div class="plans_head">
                  <h3>Business</h3>
                    <h4 class="m_4"><small class="m_2">$</small>99<small small class="m_3">/mo</small></h4>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                </div>
                <ul>
                  <li><a href="#">20GB Disk Space</a></li>
                  <li><a href="#">20GB Monthly Bandwidth</a></li>
                  <li><a href="#">Unlimited Users</a></li>
                  <li><a href="#">100 Domains</a></li>
                  <li><a href="#">430 Email Accounts</a></li>
                  <li><a href="#">Automatic Cloud Backups</a></li>
                  </ul>
                  <a class="popup-with-zoom-anim button" href="#small-dialog">Order Now</a>
        </div>
        </div>
          <div class="col-md-3">
        <div class="pricing-table-grid1">
          <p>Looking for something simple to get started ?</p>    
          <h5>Starter</h5>
          
          <h4 class="m_4 m_5"><small class="m_2 sm1">$</small>0<small small class="m_3 sm2">/mo</small></h4>
          <a class="popup-with-zoom-anim button" href="#small-dialog">Get Start Today</a>      
        </div>
        </div>  
        <div class="clearfix"> </div>               
       </div>
       <div class="plans_desc">
        <h3>Want some Customize Plan for your need ?</h3>
        <a class="contact_btn" href="#">Contact Us</a>
       </div>
  </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="services">
  <div class="container">
     <div class="span_1">
      <h3>{{ trans('app.views.welcome.services.titles.parent') }}</h3>
      <p>{{ trans('app.views.welcome.services.titles.concept') }}</p>
     </div>
     <div class="span_2">
      <div class="span_2-top">
        <div class="col-md-4">
          <ul class="hosting">
            <i class="icon1"> </i>
            <li class="host_desc">
              <h4>{{ trans('app.views.welcome.services.titles.unlock_imei') }}</h4>
              <p>{{ trans('app.views.welcome.services.content.unlock_imei') }}</p>
              <a class="button2" href="#">Ver más...</a>
              </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="hosting">
            <i class="icon2"> </i>
            <li class="host_desc">
              <h4>{{ trans('app.views.welcome.services.titles.check_imei') }}</h4>
              <p>{{ trans('app.views.welcome.services.content.check_imei') }}</p>
              <a class="button2" href="#">Ver más...</a>
              </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="hosting">
            <i class="icon3"> </i>
            <li class="host_desc">
              <h4>{{ trans('app.views.welcome.services.titles.unlock_hash') }}</h4>
              <p>{{ trans('app.views.welcome.services.content.unlock_hash') }}</p>
              <a class="button2" href="{{ route('unlock_hash_service') }}">Ver más...</a>
              </li>
          </ul>
        </div>
        <div class="clearfix"> </div>
     </div>
     <div class="span_2-bottom">
        <div class="col-md-4">
          <ul class="hosting">
            <i class="icon4"> </i>
            <li class="host_desc">
              <h4>{{ trans('app.views.welcome.services.titles.activations') }}</h4>
              <p>{{ trans('app.views.welcome.services.content.activations') }}</p>
              <a class="button2" href="#">Ver más...</a>
              </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="hosting">
            <i class="icon5"> </i>
            <li class="host_desc">
              <h4>{{ trans('app.views.welcome.services.titles.credits') }}</h4>
              <p>{{ trans('app.views.welcome.services.content.credits') }}</p>
              <a class="button2" href="#">Ver más...</a>
              </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="hosting">
            <i class="icon6"> </i>
            <li class="host_desc">
              <h4>{{ trans('app.views.welcome.services.titles.direct_care') }}</h4>
              <p>{{ trans('app.views.welcome.services.content.direct_care') }}</p>
              <a class="button2" href="#">Ver más...</a>
              </li>
          </ul>
        </div>
        <div class="clearfix"> </div>
     </div>
     </div>
  </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="about_grid">
  <div class="container">
    <div class="span_1 span_3">
      <h4>{{ trans('app.views.welcome.about.title') }}</h4>
      <p>{{ trans('app.views.welcome.about.concept') }}</p>
     </div>
     <div class="span_5">
       <div class="col-md-5 span_5-left">
        <p class="m_1" style="text-align:justify">{{ trans('app.views.welcome.about.content') }}</p>
          <a class="button3" href="about.html">Ver más...</a>
       </div>
       <div class="col-md-7">
          <div class="span_5-right">
        <span> </span>
          </div>
       </div>
       <div class="clearfix"> </div>
     </div>
  </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="testimonail">
  <div class="container">
    <ul class="test">
      <li class="test_img"><img src="images/avatar_ceo.png" class="img-responsive" alt=""/></li>
      <li class="test_desc">
        <p><span class="quotes"> </span>{{ trans('app.views.welcome.about.team.ceo') }} - <span class="link"><a href="#">simón moreno (CEO)</a></span></p>
      </li>
      <div class="clearfix"> </div>
    </ul>
  </div>
</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="col-md-12 map">
  <div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
  </div>
  <div class="col-md-6">
        <div class="col-md-10 contact-form-titles">
          <h3>{{ trans('app.views.welcome.contact.contact_us') }}</h3>
          <div class="contact-form">
            <form>
              <input type="text" class="textbox form-control" value="{{ trans('app.views.user.email') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.user.email') }}';}">
              <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.contact.message') }}';}">{{ trans('app.views.contact.message') }}</textarea>
              <input type="submit" value="{{ trans('app.views.welcome.contact.send') }}">
            </form>
          </div>
        </div>
        <div class="col-md-10 contact-form-titles">
          <h3>{{ trans('app.views.welcome.contact.quick_links') }}</h3>
          <ul class="footer_social">
            <li><a href="#"> <i class="email"> </i> </a></li>
            <li><a href="#"> <i class="chat"> </i> </a></li>
            <li><a href="#"> <i class="report"> </i></a></li>
            <li><a href="#"> <i class="phone"> </i></a></li>
          </ul>
        </div>
  </div>
</div>
@endsection
