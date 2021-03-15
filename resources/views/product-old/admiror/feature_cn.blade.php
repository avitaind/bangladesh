@extends('layouts.app')

@section('title')
    @lang('title.Admiror_home')
@stop

@section('content')
    <main class="top-nav-padding">

    	@include('partials.product-navbar')
  
          <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item admiror-banner">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/admiror/banner_admiror_e.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/admiror/banner_mob_admiror_e.jpg')"></div>
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
        
        
        <section style="background-color:#000">
                <div class="container">
                        <div class="space60"></div>
                        <div class="banner-para">
                        <div align="center" class="col-lg-12" >
                        	<div class="admiror_h1">现已隆重登场</div>
                        </div>
                            <span class="d-lg-block txt_white text-center">
                            <!--<a href="https://www.nexstmall.com/zh_hk/avita.html/avita-laptops/avita-admiror-laptop?___store=zh_hk?___store=zh_hk&utm_source=brandsiteadmirorproductpage&utm_medium=web&utm_campaign=admirorLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#7accc8">立即购买 > </a>&nbsp;&nbsp; -->
                            <a href="{{ route('product.map', 'admiror') }}" class="txt_white">销售地点 ></a>&nbsp;&nbsp;
                            
                            <!--<a href="#offer" class="txt_white">礼遇 > </a> -->
                            </span>
                        </div>
                </div>
        </section>
        
        
        <section class="admiror-video" style="background-color:#000;">
        	<div class="banner-block">
                <div class="container"> 
                <div class="space60"></div> 
			     <!--<iframe id="ytplayer" type="text/html" width="1110" height="630" src="/videos/AVITA_ADMIROR_HK.mp4?controls=1&rel=0&showinfo=0&autoplay=1&loop=1&mute=1" frameborder="0" allowfullscreen></iframe> -->
                 	<video width="1110" height="625" controls autoplay loop muted> 
                    	<source src="https://avita.com/videos/AVITA_ADMIROR_CN.mp4" type="video/mp4">
                    </video> 
	            </div>
            </div>
        </section>
        

        <section class="product-admiror-computer ls-0" id="test" style="background-color:#000">
            <div class="banner-block">
                <div class="container">
                    <div align="center" >

                        <div class="h1">释放自我 展现个性 #YouCanBe</div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="banner-para ls-0 col-sm-offset-2 col-sm-8">是时候拒绝随波逐流，AVITA艾飞达 全新的 ADMIROR 系列 A01</div>
                        <div class="space30"></div>
                        <div class="Fadein">
                            <img src="/images/admiror/pic_AMIROR01.png">
                        </div>
                        <div class="banner-para ls-0 col-sm-offset-2 col-sm-8">
                           打破常规，以时尚典雅的独特设计及夺目配色，与你超越平凡、大放异彩！
                        </div> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="banner-data text-center col-lg-12">
                                
                            <img class="hidden-sm-down" src='/images/admiror/pic_feature01_cn.png' />
                            <img class="hidden-md-up" src='/images/admiror/pic_feature01_mob_cn.png' /> 
                                
                        </div> 
                        <div class="space60 hidden-sm-down"></div>
                        <div class="space60 hidden-sm-down"></div>
                        <div class="h1">AVITA艾飞达 ADMIROR A01 为您带来</div>
                        
                        
                   		<section class="banner-anchor">
                            <div class="container">
                                
                                <div class="row">
                                
                                <div align="center" class="col-md-4">
                                    <a href="#artistic_design">
                                        <img class="first" src='/images/admiror/btn_artistic_1sc.png' />
                                        <img class="hover" src='/images/admiror/btn_artistic_2sc.png' />
                                    </a>
                                </div>
                                
                                
                                <div align="center" class="col-md-4">
                                     <a href="#usage_experience">
                                        <img class="first" src='/images/admiror/btn_pride_1sc.png' />
                                        <img class="hover" src='/images/admiror/btn_pride_2sc.png' />
                                     </a>
                                </div>
                                
                                
                                <div align="center" class="col-md-4">
                                    <a href="#outstanding">
                                        <img class="first" src='/images/admiror/btn_outstanding_1sc.png' />
                                        <img class="hover" src='/images/admiror/btn_outstanding_2sc.png' />
                                    </a>
                                </div>
                                
                                </div>
                            </div>
                    	</section>
                             
		               <div class="space60"></div>
                         
                    </div>
                </div>
            </div>
        </section>
        
<!-----Section 1 --------------> 
        <section class="artistic_design ls-0" id="artistic_design"/>
            <div class="banner-block ">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_gothic.jpg) center no-repeat;"></div>
                
                <div class="container admiror-content">
                	<div class="hidden-md-up col-md-12">
                        <img src="/images/admiror/ADMIROR03.png">
                        <div class="space60"></div>
                    </div>
                	<div class="row">
                	
                        <div align="center" class="col-lg-12" >
                        <div class="admiror_h1">尽显自我的</div>
                        <div class="admiror_h3 mb-4 mb-sm-5" >时尚典雅设计</div>                        
                            <div class="space60"></div>
                        </div>
                    </div> 
                    
                    <div class="banner-image hidden-sm-down">
                        <img class="bc-computer-image admiror01" src="/images/admiror/ADMIROR03.png">
                    </div>
  
                	<div class="row">
                    	<div class="col-sm-7"></div>
                        <div class="banner-info col-sm-5">
                            <div class="admiror_h2">雅致设计  揉合哥德式建筑美学</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white text-left">A01 以典雅的哥德式建筑设计概念，融入时尚风格，每个细节都别具匠心。屏幕与键盘之间的拱顶装饰参照哥德式建筑的飞扶壁设计，让与众不同的 A01 成为触目焦点。其修长笔挺的机身与圆角转轴浑然天成，完美演绎哥德式建筑的尖拱美学。机身的装饰细节仿如哥德教堂内的花窗玻璃，将典雅时尚风格推向极致。</span>
                            </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                            <div class="space60"></div>
                            <div class="admiror_h2">大放异彩  尽显风格</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white text-left">"以 A01 的5种破格配色-- 极具玩味的「火焰铜」 及「炫酷啡」，率性的「燃亮红」及「冰傲蓝」 ， 祟尚自然的「旅者绿」，配上个性穿搭，让你赢尽目光！（3款已登场配色：火焰铜、燃亮红、炫酷啡）"</span>
                            </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                        </div><!--banner-info col-sm-6-->
                   </div><!--row-->
                </div>
            </div>
        </section>
                
        <section style="background-color:#FFF;">
                <div class="container">
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                        <div class="Fadein-up">
                            <img src="/images/admiror/ADMIROR02.png">
                        </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                    <div class="row">
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">纤细机身  轻巧便携</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">A01 采用3面金属材质，精巧纤细，机身最薄处只有9毫米，重量轻至1.32公斤，方便随身携带，是你探索世界的绝佳良伴。</span>

                        </div>
                    </div>
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">窄边框设计  工作娱乐专心致志</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block">要突破界限，首先要扩阔视野。 A01 的窄边框仅7毫米阔，减低视觉障碍和干扰，屏幕亦变得更广更阔，让你全情投入工作或娱乐。</span>

                        </div>
                    </div>
                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60"></div>
                                        
                    <!-----3 Button-1--------------> 
                       
                        
                    <!-----End 3 Button-1-------------->
                    
                    </div>
                    <div class="space60"></div>
                </div>
        </section>


<!-----Section 2 -------------->
        <section style="background-color:#FFF;" id="usage_experience">
                <div class="container">
                    <div class="space60"></div>
                    <div class="row">
                        <div align="center" class="col-12 col-md-12">
                        <div class="admiror_h3 txt_black">引以为傲的</div>
                        <div class="admiror_h1 txt_black">使用体验</div>
                        </div>
                    </div>
                    <div class="space60"></div>
                    
<!-----9 box -------------->
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-8" style="background:url(/images/admiror/bg_A1sc.jpg) center no-repeat;">
    
                        </div>
                        
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2; padding:80px 30px; height:380px">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">逼真画面 细致清晰</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">A01 提供14吋及15.6吋两款屏幕选择，均可选配4K超高清IPS触控屏（3840 x 2160）*， 其清晰锐利的影像画面，可上触控屏幕，不论浏览网页或观看影片，都能享受细致流畅的体验。</span>   
                            </div>
                        </div>
                    </div>
<!---2nd Row----------->  
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_B1.jpg) center no-repeat;">
    
                        </div>
                        
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2;  padding:100px 30px; height:380px">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">流畅操控  得心应手</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">A01 内置特大触摸板，支持Windows10 多点触控功能，让你精准而流畅地操控，应对各类任务都能得心应手。 </span>
    
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_B3.jpg) center no-repeat;">
    
                        </div>
                        
                    </div>
<!---3rd Row----------->                    
                    <div class="row hidden-sm-down">
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2;  padding:100px 30px; height:380px;">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">背光键盘  不受环境束缚</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">采用背光键盘设计，即使在昏暗的环境中每个键帽依然能清晰可见，工作娱乐从此不受时间及周边环境的限制。</span>
    
                            </div>
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:url(/images/admiror/bg_C2.jpg) center no-repeat;">
    
                        </div>
                        <div align="left" class="col-12 col-md-4" style="background:#f2f2f2; padding:100px 30px;">
                            <div class="admiror_h2" style="font-size: 26px; line-height: 28px;letter-spacing: 0.2rem;">极致音质  震撼人心</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block" style="line-height:1.9rem;">A01 将你的音乐品味完美无瑕地呈现；内置两个全频高品质喇叭及4个被动式喇叭，带来精彩绝伦的视听享受。</span>
    
                            </div>
                        </div>
                      </div>
<!-----End 9 box -------------->                    	



                    <div class="space60 hidden-sm-down"></div>
                    <div class="space60 hidden-sm-down"></div>
                </div>
        </section>
<!-----PRIDE & DELIGHTED Mobile -------------->
        <section class="hidden-md-up" style="background-color:#FFF;" >
        	<div class="banner-block">
                <div class="container">
                    <div class="row">
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_01.jpg' style="width:100%"/> 
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">逼真画面 细致清晰</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">A01 提供14吋及15.6吋两款屏幕选择，均可选配4K超高清IPS触控屏（3840 x 2160）*， 其清晰锐利的影像画面，可上触控屏幕，不论浏览网页或观看影片，都能享受细致流畅的体验。</span>
								<p>
                                <small>*现率先提供 14吋全高清 IPS（1920 x 1080）型号，15.6吋及其他4K触控屏型号快将推出。</small>
                                </p>
                    	<div class="space30"></div>
							</div>                                    
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_02.jpg' style="width:100%"/>   
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">流畅操控  得心应手</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">A01 内置特大触摸板，支持Windows10 多点触控功能，让你精准而流畅地操控，应对各类任务都能得心应手。</span>
							</div>    
                    	<div class="space30"></div>
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_03.jpg' style="width:100%"/> 
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">极致音质  震撼人心</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">A01 将你的音乐品味完美无瑕地呈现；内置两个全频高品质喇叭及4个被动式喇叭，带来精彩绝伦的视听享受。</span></div>
                    	<div class="space30"></div>
						</div>
                        
						<div class="col-12 col-md-4">
							<img src='/images/admiror/pic_pride_04.jpg' style="width:100%"/>  
                    	<div class="space30"></div>
						</div>
						<div class="col-12 col-md-4">
							<div class="admiror_h2">背光键盘  不受环境束缚</div>
							<div class="banner-para ls-0">
								<span class="d-lg-block">采用背光键盘设计，即使在昏暗的环境中每个键帽依然能清晰可见，工作娱乐从此不受时间及周边环境的限制。</span>
							</div>         
                    	<div class="space30"></div>
						</div>
                        
                        
                    </div>
                </div>
        	</div>
        </section>



<!-----Section 3 -------------->

        <section id="outstanding">
        	<div class="banner-block">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_admiror02.jpg) top center no-repeat;"></div>
                <div class="container">
                	<div class="padding-bottom-l">                    
        <!-----3 Button-1-------------->
                 
        <!-----End 3 Button-1-------------->        
        			
                    <div class="space60"></div>
                    <div class="space60"></div>
                    
                    <div class="outstanding">
                        
                        
                        <div class="row">
                        	 <div class="hidden-md-up col-md-12">
                                <img src="/images/admiror/amiror_top.png">
                                <div class="space60"></div>
                            </div>

                             <div align="left" class="col-12 col-md-4"></div>
                            <div align="left" class="col-12 col-md-8">
                            <div class="admiror_h1 txt_white" >安全可靠的</div>
                            <div class="admiror_h3 txt_white" >卓越性能</div>
                            </div>
                        </div>

                        <div class="space60"></div>
                        <div class="row">
                        <div align="left" class="col-12 col-md-4"></div>
                        <div align="left" class="col-12 col-md-8">
                            <div class="admiror_h2">出色效能  无与伦比</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">A01 不仅外观出众，其自身的硬件配置亦同样出色。搭载全新第八代酷睿i5处理器及8GB DDR4内存，性能大幅提升。内置256GB固态硬盘，可储存大量数据。即使创意再多，A01 都可以一一收录。</span>
    
                            </div>
                        </div>
                        </div><!--row--->
	                    <div class="space60"></div>
                    
                    </div><!--outstanding--?
                    
                    
                   </div><!-- banner-padding -->
                </div>
        	</div>
        </section>
        
        <div class="float_img hidden-md-down">
            <img src="/images/admiror/amiror_top.png">
        </div>

<!-----Section 4 -------------->

        <section class="worry-free" >
        	<div class="banner-block">
                <div class="banner-bg hidden-md-down" style=" background:url(/images/admiror/bg_admiror03.jpg) center no-repeat"></div>
                <div class="hidden-md-up col-md-12">
                    <img src="/images/admiror/bg_admiror03_mob.jpg">
                </div>
                <div class="container">
                    <div class="space60"></div>
                    <div class="row">
                    <div align="left" class="col-12 col-md-6">
                        <div class="admiror_h2">指纹登入 轻松安全</div>
                        <div class="banner-para ls-0">
                            <span class="d-lg-block txt_white">A01 内置指纹传感器，支持Windows Hello功能，指尖轻触传感器，即可瞬间登录操作系统，免去繁琐密码输入，在确保数据安全性的前提下，让您更为轻松便捷。</span> 
                        </div>
                        <div class="img-inline">
                        	<ul>
                                <li>
                                <img src='/images/admiror/pic_window_hello.png' width="100px" /> 
                                </li>
                                <li>
                                <img src='/images/admiror/pic_fingerprint.png' width="100px" />                                
                                </li>
                           </ul>   
                        </div>
                    </div>
                    </div>
                    <div class="space60"></div>
                </div>
        	</div>
        </section>


<!-----Section 5 -------------->

        <section class="product-liber-power" style="background-color:#777;" >
        	<div class="banner-block">
                <div class="container"> 
                <div class="bottom-banner-bg">

                    <div class="row">
                    	<div class="float_img2">
                            <img src="/images/admiror/ADMIROR05.png">
                        </div>
                        <div align="left" class="col-12 col-md-5">
                            <div class="admiror_h2">持久电量  释放潜能</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">长达十小时的电池续航力，工作娱乐从此不受电量限制，让你无间断释放潜能。</span>    
                            </div> 
                    		<div class="space30"></div>
                            <div class="admiror-battery-wrap txt_white">
                                     最高<br />
                                    <img src='/images/admiror/10hr_c.png' />
                                    <br />
                                    电池续航力
                            </div> 
                    		<div class="space30"></div>
                            <span class="d-lg-block txt_white">
                              <small>* 电池续航时间是基于AVITA工程师使用内部测试工具得出的测试结果，由于使用环境和操作方式的不同，实际电池续航时间会和本处提及的电池续航时间存在差异。</small>
                             </span>
                        </div>
                        <div align="left" class="col-12 col-md-2"> 
                    		<div class="space60 hidden-md-up"></div>
                        </div>
                        <div align="left" class="col-12 col-md-5">
                            <div class="admiror_h2">全方位连接 无拘无束</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">出外工作要灵活轻便，A01 内置两个USB-C接口，同时随机附送USB-C转USB-A，HDMI及3.5mm耳机接口的多功能扩展坞，连接不同外设都能得心应手。另附带USB-C转3.5mm耳机接口转接线，让你畅游于音乐世界之中。 <br />
    <br />
    同款时尚色系无线滑鼠及手提蓝芽喇叭即将登场</span>
    
                            </div>
                             <div class="img-inline">
                                <ul>
                                    <li>
                                    <img src='/images/admiror/pic_usb_adapter.png' width="220px" />
                                    <p class=" txt_white">USB-C至<br/>USB、HDMI及3.5mm<br/>全方位外置转换器</p>
                                    </li>
                                    <li>
                                    <img src='/images/admiror/pic_usb_c.png' width="100px" />                                
                                    </li>
                               </ul>  
                            </div>
                        </div>
                    
                    </div>
                    <div class="space60"></div>
                </div>
        	</div>
            </div>
        </section>
        
<!-----Section 6 -------------->

        <section class="color-choice" id="offer">
        	<div class="banner-block">
                <div class="banner-bg hidden-sm-down" style="background:url(/images/admiror/bg_admiror06.jpg) top center no-repeat;"></div>
                <div class="banner-bg hidden-sm-up" style="background-color:#000;"></div>
                <div class="container">  

                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="admiror_h2">三款时尚配色现已登场</div>
                            <div class="banner-para ls-0">
                                <span class="d-lg-block txt_white">火焰铜、炫酷啡、燃亮红(冰傲蓝及旅者绿即将登场，敬请期待）</span>    
                            </div> 
                        </div>
                    </div>        
                    <div class="row">
                        <div align="left" class="col-12 col-md-5">
                            <div class="img-inline">
                            <!--<img src="/images/admiror/pic_offer_c.png" width="100%">-->
                        </div>
                            <div class="banner-para">
                                <span class="d-lg-block txt_white text-center" style="margin-top:15px;">
                                 
                            		<a href="{{ route('product.map', 'admiror') }}" class="txt_white">销售地点 ></a>
                                  
                                </span>
                            </div>
                        </div>
                    
                    </div>
                    <div class="space60"></div> 
        	</div>
            </div>
        </section>

        <section class="product-statement">
            <div class="container">
            <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
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
