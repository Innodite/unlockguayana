@extends('layouts.app')

@section('content')
<div class="container">
    <div class="about">
      <div class="container">
        <h1 class="m_2">3 Columns</h1>
        <div class="plans-view">
                       <div class="col-md-4">
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
                 <div class="col-md-4">
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
               <div class="col-md-4">
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
             
            <div class="clearfix"> </div>               
           </div>
             </div>
    </div>
    <div class="contact_index">
      <div class="container">
        <div class="col-md-8 contact_index-left">
          <h3>Send Us A Message</h3>
          <div class="contact-form">
            <form>
              <input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
              <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
              <input type="submit" value="Send Now">
            </form>
          </div>
        </div>
        <div class="col-md-4 contact_index-right">
          <h3>Quick Links</h3>
          <ul class="footer_social">
            <li><a href="#"> <i class="email"> </i> </a></li>
            <li><a href="#"> <i class="chat"> </i> </a></li>
            <li><a href="#"> <i class="report"> </i></a></li>
            <li><a href="#"> <i class="phone"> </i></a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection
