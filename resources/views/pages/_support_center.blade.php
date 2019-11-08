<div class="support-center-record my-4">

    <div class="row my-2 my-sm-1 ls-0">

        <div class="col-12 col-md-7">

            <div class="row my-2 my-sm-1 ls-0">
                <div class="col-12 col-sm-4 col-md-4 col-lg-3">@lang('site.form_address')</div>
                <div class="col-12 col-sm-8 col-md-8 col-lg-9">{{ $center->address }}</div>
            </div>
            <div class="row my-2 my-sm-1 ls-0">
                <div class="col-12 col-sm-4 col-md-4 col-lg-3">@lang('site.support_opentime')</div>
                <div class="col-12 col-sm-8 col-md-8 col-lg-9">{{ $center->opening_hour }}</div>
            </div>
            <div class="row my-2 my-sm-1 ls-0">
                <div class="col-12 col-sm-4 col-md-4 col-lg-3">@lang('site.form_phone')</div>
                <div class="col-12 col-sm-8 col-md-8 col-lg-9">{{ $center->phone }}</div>
            </div>
            {{--<div class="row my-2 my-sm-1 ls-0">--}}
                {{--<div class="col-12 col-sm-4 col-md-4 col-lg-3">@lang('site.form_fax')</div>--}}
                {{--<div class="col-12 col-sm-8 col-md-8 col-lg-9">{{ $center->fax }}</div>--}}
            {{--</div>--}}

            <div class="row my-2 my-sm-1 ls-0">
                <div class="col-12 col-sm-4 col-md-4 col-lg-3">@lang('site.form_mail')</div>
                <div class="col-12 col-sm-8 col-md-8 col-lg-9"><a href="mailto:{{ $center->email }}">{{ $center->email }}</a></div>
            </div>
        </div>
 <div class="col-12 col-md-5">
        <div class="map-wrap embed-responsive embed-responsive-16by9">
            <div id="gmap-embed" class="embed-responsive-item google_map" data-lng="{{$center->longitude}}" data-lat="{{$center->latitude}}">
               </div>
            </div>
        </div>
  <hr/>
    </div>


</div>
