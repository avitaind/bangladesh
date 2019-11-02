@extends('layouts.app')

@section('title')
    @lang('title.whats_new')
@stop

@section('content')
<main>

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.news_title')</h3>
            <div class="row">
                @foreach ($feature_news as $feature_news)
                    @component('news.feature_news_block', ['news' => $feature_news ])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>


    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.news_media')</h3>
            <div class="row">
          <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Avita’s fashion –forward laptop’s launched in India </p><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/sunday_guardian.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 27th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Sunday Guardian </div>
            </figcaption>
        </figure>
      
            </div>

        </div>
        
        <!---
        
        -------->
    
        
        <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Bollywood actress Neha Sharma launches US lifestyle Tech Brand AVITA</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/pc_quest.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 25th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> PC Quest </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.pcquest.com/bollywood-actress-neha-sharma-launches-us-lifestyle-tech-brand-avita/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
        
           
        <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Avita comes to India with new and funky range of laptops</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/gadget_now.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 27th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Gadget Now  </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.gadgetsnow.com/slideshows/tcss-big-achievement-whatsapps-india-first-feature-bsnls-r-day-offers-and-other-top-tech-news-of-the-week/photolist/67702756.cms" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p><br/></p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/sub_guru.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 24th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Sab Guru  </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.sabguru.com/avita-launches-stylish-laptop-avita-libre/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
          <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p><br/></p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/dainik_savera.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 25th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Dainik Savera   </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.dainiksaveratimes.com/news/avita-launches-stylish-laptop-in-indian-market-220476" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
                               
 <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Avita’s fashion forward Launched in India </p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/sunday_guardian_live.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 27th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong>Sunday Guardian Live </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.sundayguardianlive.com/tech/41594" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
            
 <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p><br/><br/></p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/daily_hunt.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 25th January, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Daily Hunt    </div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://m.dailyhunt.in/news/india/hindi/dainiksaveratimes+hindi-epaper-dsaverah/bharatiy+bajar+me+avita+ne+lonch+kiya+stailish+laptop-newsid-107070310" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
        
        <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo Introduces It’s First Flagship Commercial Laptop PRIMUS Enters India market</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_1.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 21th November, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> PC Quest</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.pcquest.com/nexstgo-introduces-first-flagship-commercial-laptop-primus-enters-india-market/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
   <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo enters India with Primus Laptops starting at Rs 80,990</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_2.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> The Mobile Indian</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.themobileindian.com/news/nexstgo-enters-india-with-primus-laptops-starting-at-rs-80990-24356" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Hong Kong’s Nexstgo all set to launch its PRIMUS laptop in India</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_3.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> 91mobiles.com</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.91mobiles.com/hub/nexstgo-primus-laptop-india-launch-rs-80990-price-features-specifications/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Hong Kong-based laptop maker Nexstgo launches its first laptop in India</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_4.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong>20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong>Digit</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.digit.in/laptops/hong-kong-based-laptop-maker-nexstgo-launches-its-first-laptop-in-india-44766.html" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo's First Flagship Commercial Laptop 'PRIMUS' Enters Indian Market</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_5.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong>20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> The Mobile Indian</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://news.franchiseindia.com/content/nexstgos-first-flagship-commercial-laptop-primus-enters-indian-market.n17163" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo forays into India with its Primus laptops</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_6.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong>20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Gadget Bridge</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href=" https://www.gadgetbridge.com/news/nexstgo-forays-in-india-with-its-primus-laptops/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo launches Primus laptops in India </p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_7.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong>20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Gizbot</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.gizbot.com/laptop/news/nexstgo-launches-primus-laptops-india-055533.html" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Hong Kong tech nova Nexstgo’s first flagship laptop PRIMUS enters India market</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_8.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong>H2S Media</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.how2shout.com/news/hong-kong-tech-nova-nexstgos-first-flagship-laptop-primus-enters-india-market.html" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo enters India with Primus Laptops starting at Rs 80,990</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_9.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> Beebom.com</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://beebom.com/nexstgo-india-primus-laptops/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Hong Kong tech nova Nexstgo’s first flagship laptop PRIMUS enters India market</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_10.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong>20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong>Electronics B2B</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.electronicsb2b.com/industry-buzz/hong-kong-based-nexstgo-to-sell-laptops-through-vivek-traders-in-india/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Hong Kong tech nova Nexstgo’s first flagship commercial laptop PRIMUS enters India market</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_11.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> IndiTechBytes</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://inditechbytes.com/hong-kong-tech-nova-nexstgos-first-flagship-commercial-laptop-primus-enters-india-market/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo launches Primus laptops in India</p><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_12.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong> UC News</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href="https://www.ucnews.in/news/Nexstgo-launches-Primus-laptops-in-India/2972665056799779.html" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
         <!-----
                
                ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<p>Nexstgo to Bring its Flagship Laptop PRIMUS to the Indian Market</p>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avita-india.com/images/publication/img_13.png" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 20th November 2018</div>
        <div class="event-status coming_soon ml-auto"></strong>Publication:</strong>Tech Craving</div>
            </figcaption>
        </figure>
        <a class="overlay-link" href=" https://www.techcarving.com/2018/11/nexstgo-to-bring-its-flagship-laptop-primus-to-the-indian-market/" target="_blank"></a>
            </div>

        </div>
        
        <!---
        
        -------->
          </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>
@endsection

@section('js')
    <script>
        $('#news-month-option').change( function(event) {

            window.location = '{{$country}}/news/'+ $(this).val() ;
        })
    </script>
@endsection


@section('css')

    <style>

        .status {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: #692c90;
        }


        .status.in_progress { background-color: #65318f; }
        .status.coming_soon { background-color: #a270c9; }
        .status.finished    { background-color: #a1a1a1; }

        .status-sm {

            display: inline;
            font-size: 0.8rem;
            padding: 3px 1rem;
        }

        .status-md {

            min-width: 160px;

        }
    </style>
@endsection