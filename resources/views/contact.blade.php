@extends('layouts.app')

@section('content')
<div class="container">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
    </div>
    <div class="about contact">
      <div class="container">
            <form method="post" action="contact-post.html">
              <div class="to">
                          <input type="text" class="text" value="{{ trans('app.views.user.name') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.user.name') }}';}">
                <input type="text" class="text" value="{{ trans('app.views.user.email') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.user.email') }}';}" style="margin-left: 10px">
              </div>
              <div class="to">
                          <input type="text" class="text" value="{{ trans('app.views.user.website') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.user.website') }}';}">
                <input type="text" class="text" value="{{ trans('app.views.contact.subject') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.contact.subject') }}';}" style="margin-left: 10px">
              </div>
              <div class="text">
                         <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '{{ trans('app.views.contact.message') }}';}">{{ trans('app.views.contact.message') }}:</textarea>
                      </div>
                      <div>
                        <input type="submit" value="{{ trans('app.views.welcome.contact.send') }}">
                      </div>
               </form>
      </div>
    </div>
</div>
@endsection
