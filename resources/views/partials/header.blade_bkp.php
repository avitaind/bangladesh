<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png"/>
        </a>

        @if( $user = Auth::user( ) )
            <div class="navbar-user-toggle navbar-toggler-right hidden-md-up d-flex align-items-center justify-content-center lead text-muted">
                <a class="user-toggle" href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
            </div>
        @else

            @if( Request::is('login') || Request::is('register') )

                {{-- Do nothing, hide the right corner login button in register/login page --}}

            @else
                <div class="navbar-user-toggle navbar-toggler-right hidden-md-up d-flex align-items-center justify-content-center lead text-muted">
                    <a class="" href="{{ route('login' ) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                </div>
            @endif


        @endif

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a class="" href="/"><img src="/images/logo.png"/></a>
                </li>
                <li class="nav-item has-dropdown">
                    <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link"><label for="header_product">@lang('site.products')</label></a>

                    <div class="dropdown">
                        <ul class="list-unstyled">

                            <li class="nav-item has-dropdown">
                                <input id="header_product_liber" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_liber" class="d-block mb-0">@lang('site.laptops')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        @if(!$HAVE_LIBER_12)

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber']) }}">LIBER Series</a>
                                            </li>
                                        @else

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber12']) }}">LIBER Series 12.5"</a>
                                            </li>

                                            

                                            @if ($HAVE_LIBER_U)

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber-new-generation']) }}">LIBER New Generation</a>
                                            </li>

                                            @else

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber']) }}">LIBER Series 13.3" & 14"</a>
                                            </li>

                                            @endif

                                        @endif
                                        @if ($HAVE_MAGUS)

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', 'magus12-2in1-laptop') }}">@lang('magus.name')</a>
                                            </li>

                                        @endif


                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item has-dropdown">
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">@lang('site.smart_device')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['imago']) }}">@lang('site.imago_series')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['modus']) }}">@lang('site.modus_scale')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">@lang('site.news')</a>
                </li>

                @if( $shop_count > 0 )
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.map', ['liber']) }}">@lang('site.header_where_to_buy')</a>
                    </li>
                @endif


                @if( $storeURL )

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ $storeURL }}">@lang('site.header_store')</a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">@lang('site.service')</a>
                </li>

                <li class="nav-item hidden-sm-down">
                @if( $user = Auth::user( ) )
                    <!-- <li class="nav-item hidden-sm-down"> -->
                        <a class="user-toggle fa fa-user-o" href="#"></a>
                    <!-- </li> -->
                @else
                    <!-- <li class="nav-item hidden-sm-down"> -->
                        <a class="" href="{{ route('login') }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                    <!-- </li> -->
                @endif
                @if( $user = Auth::user( ) )
                    <aside class="navbar-user-warp hidden-sm-down">
                        <div class="navbar-user navbar-md-user">
                            <div class="user-header pt-2 px-4">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="username">{{ $user->name }}</div>
                                    <div class="ml-auto">
                                        <a href="" onclick="event.preventDefault();">
                                            <span aria-hidden="true" class="close">&#10005;</span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-content px-3">
                                <div class="align-items-center px-2 pb-2">
                                    <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                                    <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4">{{ $user->email }}</a></div>
                                    <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}" class=" pl-4">@lang('site.member_center')</a></div>
                                </div>
                                <div class="justify-content-center">
                                    <a class="px-4" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3">@lang('site.logout')</button></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </div>
                            </div>
                        </div>
                    </aside>

                @endif
                </li>

                @if ( count( $supported_languages ) > 1 )

                    @foreach( $supported_languages  as $selected_lang  )

                        @if( $selected_lang != $lang )
                        <li class="nav-item hidden-sm-down">

                            <a class="" href="{{ route('lang.switch', $selected_lang) }}">

                                @if( $selected_lang == 'tc' )
                                    中
                                @elseif ( $selected_lang == 'en')
                                    ENG
                                @elseif ( $selected_lang == 'th')
                                    ภาษาไทย
                                @elseif ( $selected_lang == 'id')
                                    Bahasa Indonesia
                                @else
                                    {{ $selected_lang }}
                                @endif

                            </a>
                        </li>
                        @endif
                    @endforeach
                @endif

            </ul>
        </div>

        <!-- <div id="overlay">

        </div> -->
        @if( $user = Auth::user( ) )
            <aside class="navbar-user-warp hidden-md-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username">{{ $user->name }}</div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                            <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4 ">{{ $user->email }}</a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}" class=" pl-4">@lang('site.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3">@lang('site.logout')</button></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </aside>

        @endif

    </div>
</nav>
<!-- ./Header -->
