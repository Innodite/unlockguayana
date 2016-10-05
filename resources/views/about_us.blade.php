@extends('layouts.app')

@section('content')
<div class="container">
    <div class="about">
      <div class="container">
        <div class="col-md-8 grid_2">
          <h1>{{ trans('app.views.about.title') }}</h1>
          <div class="box-4 box-5">
                    <div class="put-left">
                        <img src="images/pic1.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="caption">
                       <h3><a href="#">{{ trans('app.views.about.vision.title') }}</a></h3>
                        <p style="text-align:justify">
                            {{ trans('app.views.about.vision.content') }}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="box-4 box-5">
                    <div class="put-left">
                        <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="caption">
                        <h3><a href="#">{{ trans('app.views.about.mission.title') }}</a></h3>
                        <p style="text-align:justify">
                            {{ trans('app.views.about.mission.content') }}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="box-4 box-5">
                    <div class="put-left">
                        <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="caption">
                        <h3><a href="#">{{ trans('app.views.about.enterprise.title') }}</a></h3>
                        <p style="text-align:justify">
                            {{ trans('app.views.about.enterprise.content') }}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="box-4 box-5">
                    <div class="put-left">
                        <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="caption">
                        <h3><a href="#">{{ trans('app.views.about.clients.title') }}</a></h3>
                        <p style="text-align:justify">
                            {{ trans('app.views.about.clients.content') }}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="box-4">
                    <div class="put-left">
                        <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="caption">
                        <h3><a href="#">{{ trans('app.views.about.support.title') }}</a></h3>
                        <p style="text-align:justify">
                            {{ trans('app.views.about.support.content') }}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
        </div>
        <div class="col-md-4 grid_3">
          <h2>{{ trans('app.views.about.why.title') }}</h2>
          <ul class="list_1">
                    <li>
                        <div class="index-box">
                            <div class="data-index">1.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.1') }}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="index-box">
                            <div class="data-index">2.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.2') }}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="index-box">
                            <div class="data-index">3.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.3') }}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="index-box">
                            <div class="data-index">4.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.4') }}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="index-box">
                            <div class="data-index">5.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.5') }}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="index-box">
                            <div class="data-index">6.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.6') }}</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="index-box">
                            <div class="data-index">7.</div>
                            <div class="caption"><p>{{ trans('app.views.about.why.7') }}</p></div>
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
        </div>
      </div>
    </div>
</div>
@endsection
