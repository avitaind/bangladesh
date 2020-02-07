@extends('layouts.app')

@section('title')
    @lang('title.campus')
@stop

@section('content')
    <main class="top-nav-padding">
          <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item admiror-banner">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/campus_ambassador_web.png')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/campus_ambassador_web.png')"></div>
                    <div class="banner-info"> 
                      <!--  <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            
        </section>

        <section class="product-liber-banner">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>It’s time to unveil your talents and plunge into a world of colourful opportunities.</h1><br/>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">The Campus Ambassador Program by AVITA is an initiative to motivate the Indian Youth to showcase their skills and uniqueness like the AVITA Liber Series of Personalized Laptops.</p>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">Get ready to become the Face, Voice, and Evangelist of your Campus and build the most vibrant community of students striving to color up their lives!</p>

            <h1>Who are we looking for?</h1>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">We are looking for students who-</p>
            <ul>
                <li>Have a burning desire to make a change in the college student community in India.</li>
                <li>Are interested to lead the student community in their college</li>
                <li>Have taken initiatives/ held leadership positions in college</li>
                <li>Love meeting new people and guiding them about opportunities at AVITA India</li>
                <li>Have a great attitude to learn & an interest to guide students.</li>
                <li>Have great communication skills</li>
            </ul>
           
        </div>

    <div class="col-md-6">
    <div class="container">
    <h3 style="text-align:center;">Signup to receive your welcome kit for getting started</h3>

    @if(session()->has('message'))
    <div class="alert alert-success">
       {{ session()->get('message') }}
     </div>
    @endif
    <form action="{{url('campus')}}" method="POST" role="form" enctype="multipart/form-data">
     <!--Student Name Start-->
    <div class="form-group row">
     <label for="name">Name* :</label>
     <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" require>
    </div>
   <!-- Student Name End-->
   <!-- Email Start-->
   <div class="form-group row">
     <label for="email">Email*:</label>
     <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" require>
   </div>
   <!-- Email End-->
      <!-- Phone Number Start-->
  <div class="form-group row">
   <label for="phone">Phone Number* :</label>
   <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" require>
   </div>
   <!-- Phone Number End-->
    <!-- College Name Start-->
    <div class="form-group row">
     <label for="internship">Will you be interested in pursuing a summer internship with AVITA India? :</label>
     <label class="radio-inline">
      <input type="radio" name="internship" checked> YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="internship"> NO
    </label>
    </div>
   <!-- College Name End-->
   <!-- College Name Start-->
   <div class="form-group row">
     <label for="college">College/University Name* :</label>
     <input type="text" class="form-control" placeholder="Enter College/University Name" id="college" name="college" require>
    </div>
   <!-- College Name End-->
    <!-- College Name Start-->
    <div class="form-group row">
     <label for="fest">Have you ever been part of a college fest before? *:</label>
     <input type="text" class="form-control" placeholder="YES / NO" id="fest" name="fest" require>

    </div>
   <!-- College Name End-->
     <!-- College Name Start-->
     <div class="form-group row">
     <label for="position">Do you hold any position in your college department or society ?:</label>
     <input type="text" class="form-control" placeholder="YES / NO" id="position" name="position">

    </div>
   <!-- College Name End-->
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
    </div>
</div>
</section>
        
        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}"/>


@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection