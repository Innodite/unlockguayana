@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard Probando git</div>
        <div class="panel-body">

          <div class="container">
            <a href="{{ route('payment') }}" class="btn btn-warning">
              Pagar con <i class="fa fa-cc-paypal fa-3x"></i>
            </a>
          </div>

          <div class="container">
            <input type="number" name="mp_credits" id="mp_credits" placeholder="Credits">
            <button class="btn btn-primary" id="mp_credit_check">Check</button>
            <div id="mp_result_btn" style="display:none;">
              <a href="#" name="MP-Checkout" id="mp_link_action" class="orange-ar-m-sq-arall">Pagar</a>
              <script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>
            </div>
            
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  
  $(document).ready(function() {
    $("#mp_credit_check").click(function(event) {

      $.ajax({
          url : '{{ URL::to("/mp_credit_check") }}',
          type : 'GET',
          data : { credits: $("#mp_credits").val() }
      }).done(function(data){
        if (data.status == 201) {
          $("#mp_link_action").attr("href",data.response.sandbox_init_point);
          $("#mp_result_btn").css("display","block");
        } else {
          $("#mp_result_btn").css("display","none");
        }
      });
    });
  });
</script>
@endsection