<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png" />
        </a>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a class="" href="/"><img src="/images/logo.png" /></a>
                </li>
                <li class="nav-item has-dropdown">
                    <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link"><label for="header_product">@lang('site.products')</label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item has-dropdown">
                                <input id="header_product_liber" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_liber"
                                        class="d-block mb-0">@lang('site.laptops')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['admiror']) }}">@lang('site.admiror')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['essential']) }}">@lang('site.essential_name')</a>
                                        </li>
                                        <!--
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber12']) }}">@lang('site.liber12')</a>
                                        </li>
                                        --->

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['liber-new-generation']) }}">@lang('site.liber')</a>
                                        </li>



                                        <li class="nav-item has-dropdown">
                                            <input id="liber_v_product" type="checkbox" hidden="">
                                            <a class="nav-link px-md-4 py-2">@lang('site.liber-v')</a>
                                            <div class="dropdown">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item has-dropdown">
                                                        <a class="nav-link px-md-4 py-2"
                                                            href="{{ route('product.overview', ['liber-v-new-collection']) }}">@lang('site.liber_v_new_collection')</a>
                                                    </li>
                                                    <li class="nav-item has-dropdown">
                                                        <a class="nav-link px-md-4 py-2"
                                                            href="{{ route('product.overview', ['liber-v']) }}">@lang('site.liber_v_intel')</a>
                                                    </li>

                                                    <li class="nav-item has-dropdown">
                                                        <a class="nav-link px-md-4 py-2"
                                                            href="{{ route('product.overview', ['liber-v-amd']) }}">@lang('site.liber_v_amd')</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['liber-v-gold']) }}">@lang('site.liber-v-gold')</a>
                                        </li>

                                        <li class="nav-item has-dropdown">
                                            <input id="pura_product" type="checkbox" hidden="">
                                            <a class="nav-link px-md-4 py-2"><label
                                                    for="pura_product">@lang('site.pura')</label></a>
                                            <div class="dropdown">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item has-dropdown">
                                                        <a class="nav-link px-md-4 py-2"
                                                            href="{{ route('product.overview', ['pura']) }}">@lang('site.pura_intel')</a>
                                                    </li>
                                                    <li class="nav-item has-dropdown">
                                                        <a class="nav-link px-md-4 py-2"
                                                            href="{{ route('product.overview', ['pura-amd']) }}">@lang('site.pura_amd')</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', 'magus12-2in1-laptop') }}">@lang('magus.name')</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item has-dropdown">
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device"
                                        class="d-block mb-0">@lang('site.accessories')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2">@lang('site.mouse')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2">@lang('site.sleeve')</a>
                                        </li>
                                    </ul>

                                </div>
                            </li>

                            <li class="nav-item has-dropdown">
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device"
                                        class="d-block mb-0">@lang('site.smart_device')</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['imago']) }}">@lang('site.imago_series')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2"
                                                href="{{ route('product.overview', ['modus']) }}">@lang('site.modus_scale')</a>
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

                @if ($shop_count >= 0)
                    {{-- <a class="nav-link" href="/where-to-buy">@lang('site.header_where_to_buy')</a> --}}

                    <li class="nav-item has-dropdown">
                        <input id="where_to_buy" type="checkbox" hidden="">
                        <a class="nav-link"><label
                                for="where_to_buy">{{ __('site.header_where_to_buy') }}</label></a>

                        <div class="dropdown">
                            <ul class="list-unstyled">
                                <li class="nav-item">
                                    <a class="nav-link px-md-4 py-2"
                                        href="/where-to-buy">{{ __('site.offline_stores') }}</a>
                                </li>


                                <li class="nav-item has-dropdown">
                                    <input id="header_buy_online" type="checkbox" hidden="">
                                    <a class="nav-link px-md-4 py-2"> <label for="header_buy_online"
                                            class="d-block mb-0">{{ __('site.buy_online') }}</label></a>

                                    <div class="dropdown">
                                        <ul class="list-unstyled">

                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" target="_blank"
                                                    href="https://www.daraz.com.bd/shop/b-trac-technologies-ltd">Daraz</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" target="_blank"
                                                    href="https://www.pickaboo.com/computer-pc/laptop-notebook.html?manufacturer=10605">Pickaboo</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                            </ul>
                    </li>
                @endif

                @if ($storeURL)
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ $storeURL }}">@lang('site.header_store')</a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">@lang('site.service')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">@lang('site.blog')</a>
                </li>

            </ul>
        </div>

        <!-- <div id="overlay">

        </div> -->
        @if ($user = Auth::user())
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
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#"
                                    class="useremail pl-4 ">{{ $user->email }}</a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}"
                                    class=" pl-4">@lang('site.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit"
                                        class="btn btn-primary my-3">@lang('site.logout')</button></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
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
