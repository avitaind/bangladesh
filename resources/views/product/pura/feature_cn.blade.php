@extends('layouts.app')

@section('title')
    @lang('title.Pura_home')
@stop

@section('content')
    <main class="top-nav-padding">
    
    	@include('partials.product-navbar')
 

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/pura/AW_PURA_1920x720.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/pura/AW_PURA_991x1050.jpg')"></div>
                    <div class="banner-info">
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-liber-computer ls-0" id="test" style="background-color:#fff;">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="h2 banner-header">全新上市</div>
                        </div>
                        <div class="banner-para text-center">
                            <span class="d-lg-block">
                            <!--<a href="https://www.nexstmall.com/zh_hk/avita.html/avita-laptops/avita-pura-laptop?___store=zh_hk&utm_source=brandsitepuraproductpage&utm_medium=web&utm_campaign=puraLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#09F">立即购买
 ></a>&nbsp;&nbsp; -->
                            <a href="{{ route('product.map', 'pura') }}" style="color:#09F">销售地点 ></a>&nbsp;&nbsp; 
                            <!--<a href="#offer" style="color:#09F">礼遇 > </a>-->
                            </span>
                        </div>
                        <div class="space30"></div>
                    </div>
                </div>
        </section>
        
         <section class="admiror-video" style="background-color:#fff;">
        	<div class="banner-block">
                <div class="container"> 
                 <div class="space30"></div> 
			    <iframe id="ytplayer" type="text/html" width="1110" height="630" src="/videos/AVITA_PURA_CN.mp4?controls=1&rel=0&showinfo=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe> 
	            </div>
            </div>
            <div class="space60"></div>
             <div class="space30"></div>
        </section>
        
        <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
                <div class="container">
                    <div class="banner-info">
                        <div class="space60"></div>
                        <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">简约．不简单</div>
                        <div class="banner-para">
                            <span class="d-lg-block">崇尚简约，随心所欲，</span>
                            <span class="d-lg-block">一切化繁为简，彰显真我风格。</span>
                        </div>
                        <div class="space60"></div>
                    </div>
                </div>
        </section>


        
        <section class="product-liber-wifi ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-2" src="/images/pura/pic_pura01.png">
                </div>
                <div class="container">
                    <div class="banner-info ls-0" style="text-align:left">
                        <div class="h2 mob-text-center banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">全新．全功能</div>
                        
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura01.png">
                        </div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">全新AVITA艾飞达 PURA 系列 P01 展现不一样的简洁轻巧，率性而为，配备优良的硬件配置，全功能的 P01 以轻便摆脱传统手提电脑的累赘。</span>
                            <span class="d-lg-block"><a href="{{ route('product.spec', 'pura') }}" style="color:#09F">@lang('site.productnav_spec') ></a></span>
                        </div>
                        
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">操作系统</div>
								<div class="badge-value">Windows 10 家庭版S模式</div>
                                <div class="badge-caption"><a href="https://support.microsoft.com/zh-cn/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">了解更多 ></a></div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
								<div class="badge-value">酷睿 i3 / i5</div>
                                <div class="badge-caption">Intel® 全新第八代酷睿处理器</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">最高</div>
								<div class="badge-value">256<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">固态硬盘</div>
							</div>
							<div class="data-card my-3 text-left">
								<div class="badge-caption">最高</div>
								<div class="badge-value">8<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">内存</div>
                            </div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
        <div class="banner-block ls-0">
        <div class="banner-bg hidden-sm-down" style="background:url(/images/pura/pura_bg3.jpg) top center no-repeat;"></div>
        <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left"></div>
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">轻巧．过人</div></div>
                		<div class="space60"></div>
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pic_pura02.png">
                        </div>                
                        <div class="banner-para ls-0">14英寸 P01 机身轻巧纤薄，整机轻至1.34kg，为喜欢无拘无束的您提供十分舒适的易携性。</span></div>
                        <section class="product-liber-wifi">
                            <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                            <div class="data-card mx-3 text-left">
                                <span class="badge-value">5</span>
								<span class="badge-caption">mm</span>
								<div class="badge-caption">机身薄至</div>
                            </div>
                            <div class="data-card mx-3 text-left">
                                <span class="badge-value">1.344</span>
								<span class="badge-caption">kg</span>
								<div class="badge-caption">机身轻至</div>
                            </div>
                        </div>
						</section>  

                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div>
        </div>    
        </section>

        <section>
        <div class="banner-block" >
        <div class="banner-bg hidden-sm-down" style="background:url(/images/pura/pura_bg2.jpg) top center no-repeat;"></div>
            <div class="container">
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-6" align="left">
                    	<div class="h2 banner-header mob-text-center"><div class="d-sm-inline" style="text-transform:uppercase;">瞬间．跃动</div></div>
                        <div class="ac-computer-wrap hidden-sm-up">
                            <img class="ac-computer-image ac-computer-2" style="" src="/images/pura/pura_bg2_mob.jpg">
                        </div>
                <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0">捕捉稍纵即逝的绝佳灵感，快速启动至为关键！P01 展现出现代计算机理念，配合快速启动，让您在弹指之间进入工作状态，配合10小时电池续航能力*，让您完美演绎Work Life Combined理念，随时随地为您时刻待命！<br />
<br />
P01 配备具有 S 模式的 Windows 10 家庭版，搭载第8代 Intel® 全新第八代酷睿 i5-8265U 处理器，最高搭载 8GB 内存及 256GB 固态硬盘， 以及内置多个日常使用必备的接口，可充分满足您的日常所需，从而摆脱遗忘外接转接器的尴尬。<br /><br />
                        <span class="d-lg-block">
                            <small>* 电池续航时间是基于AVITA艾飞达工程师使用内部测试工具得出的测试结果，由于使用环境和操作方式的不同，实际电池续航时间会和本处提及的电池续航时间存在差异。</small>
                        </span>
                    </div>
                  </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
                <div class="space60"></div>
            </div>
        </div>    
        </section>
        

        <section style="background-color:#fff;">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-2">
                    </div>
                	<div class="col-12 col-lg-8" align="center">
                    	<div class="h2 banner-header"><div class="d-sm-inline" style="text-transform:uppercase;">绝佳．体验</div></div>
                        <div>
                            <img class="Fadein-up" src="/images/pura/pic_pura03.png">
                        </div>
                <div class="space60"></div>
                        <div class="banner-para ls-0">
    						<span class="d-lg-block">P01 的每项细节，无不经过悉心考虑。高度舒适与准确的键盘能提升工作表现，所以 P01 配备了耳目一新的优化键盘设计，而具备防滑设计的外壳，有效减低损坏风险</span>
                        </div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </section>

<!--- SIMPLY PERFECT--------->        
        
        <section style="background-color:#fff;">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-2">
                    </div>
                	<div class="col-12 col-lg-8" align="center">
                    	<div class="h2 banner-header"><div class="d-sm-inline" style="text-transform:uppercase;">抛开繁琐．发挥极致</div></div>
                        <div class="banner-para ls-0 py-3">
    						<span class="d-lg-block">P01 预载Windows 10 S模式。S模式是一个为了降低装置负担而只保留基本功能的Windows版本。除了令启动速度大幅提升之外，装置的续航力也变得更持久耐用。除了效能外，你能在Microsoft Store 找到经过 Microsoft 认证安全性的喜爱应用程序及使用Edge 浏览网页。使用更无忧，浏览更安全。视乎个人需要，你更可以随时将S 模式免费升级至Windows 10家庭版，打造贴心使用设定。</span>
                            <span class="d-lg-block  py-3">
                            <a href="https://support.microsoft.com/zh-cn/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">免费将 S 模式切换到 Windows 10 家庭版　></a>
                            </span>
                            <span class="d-lg-block  mb-3">
								<small>
									*当退出 S 模式并升级至Windows 10家庭版后，将无法回复至最初的Windows 10 S 模式。
								</small>
							</span>
                        </div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </section>

   
<!--- Show your color--------->        
        <section style="background-color:#fff;" id="offer">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-2">
                    </div>
                	<div class="col-12 col-lg-8  Fadein" align="center">
                    	<div class="h2 banner-header"><div class="d-sm-inline" style="text-transform:uppercase;">首发特惠</div></div>
                <div class="space60"></div>
                        <div class="banner-para ls-0">
    						<span class="d-lg-block">首发期间，P01 随机附送三合一计算机包一个，该计算机包采用优质的材料，质感柔软，为有品位的您量身定制。</span>
                            <span class="d-lg-block">
<small>*推广期有限，逾期无效。数量有限，送完即止。</small></span>
                        </div>
                    </div>
                </div>
                <div class="space60 hidden-sm-down"></div>
            </div>
        </section>
       
        <section style="background-color:#fff;">
            <div class="container">
                <div class="space60"></div>
                <div class="row">
                	<div class="col-12 col-lg-12  Fadein" align="center">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-2" src="/images/pura/bag_color.png">
                        </div>
                          <section class="product-liber-wifi">
                             <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center">
                                
                                  <div class="banner-para">
                                    <span class="d-lg-block txt_white text-center">
                                        <!--<a href="https://www.nexstmall.com/zh_hk/avita.html/avita-laptops/avita-pura-laptop?___store=zh_hk&utm_source=brandsitepuraproductpage&utm_medium=web&utm_campaign=puraLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#7accc8">立即购买 > </a>&nbsp;&nbsp; -->
                                        <a href="{{ route('product.map', 'pura') }}" style="color:#7accc8">销售地点 ></a>
                                    </span>
                                </div>
                                 
                            </div>
                          </section>
                    </div>
                </div>
                <div class="space60"></div>
            </div>
        </section>
   
        
        

        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
<li>备注: S 模式的 Windows 10 家用版只能在 Windows 与 Microsoft Store 中的应用程式搭配运作，并且搭配使用与 S 模式的 Windows 10 家用版相容的配件。单向切换脱离 S 模式可供使用。如需详细资讯，请浏览 <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>。 </li>
<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside 等trademarks 属于美国及其他国家的Intel 公司所有。 </li>
<li>产品规格可能会依国家地区而有所变动，我们诚挚的建议您与当地的经销商或零售商确认目前贩售产品的规格。 </li>
<li>重量会因组态及制造差异而有所不同。 </li>
<li>产品颜色可能会因拍照光线误差或萤幕设定而与实际产品有所差异。 </li>
<li>我们会尽力提供正确与完整的资料于网页上，并保留更动、修正页面资讯的权利，恕不另行通知。 </li>
</ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/pura.js') }}"></script>


@endsection
