@extends('layouts.main')
    @section('content')
      
   
<!-- ======== @Region: #highlighted ======== -->
<div id="highlighted" class="bg-black pos-relative pos-zindex-9">
    <!-- Image Banner: Use the the data-bg-img functionality to create a simple image banner Use spacer classes to make the banner larger with padding, allows for easy responsive changes too see: elements-ctas.htm To make the banner full height add the attributes: data-toggle="full-height" data-offset="#header" -->
    <div class="overlay overlay-op-6" data-animate="fadeIn" data-toggle="backstretch" data-backstretch-target="self" data-backstretch-overlay=false data-backstretch-imgs="assets/img/banner-1.jpg,https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-0.3.5&s=29580c56708408d716cb322480d204f7&auto=format&fit=crop&w=1650&q=80">
        <div data-toggle="full-height" class="pl-2 pr-2 pt-5 py-lg-2 pt-lg-9 text-center text-white d-flex justify-content-center flex-column">
            <div data-toggle="sticky" data-settings='{"persist":true}'>

                <div class="container">

                    <img width="165"
                         height="117" src="assets/img/REVERSELOGO2.png" alt="">



                </div>

                <button type="button" class="mb-3 d-block mx-auto btn btn-xlg btn-green-bright text-uppercase btn-rounded-none">Real Estate & More</button>
                <h2 class="display-3 font-weight-bold mb-2" data-animate="fadeInDown" data-animate-delay="0.6">
                    Affordable Houses in Mauritius
                </h2>
                <h4 class="font-weight-bold display-4 font-weight-light mb-5 mb-0 mb-b-sm-0">
                    Buy, Rent or Sell
                </h4>
                <h5 class="check-details">
                    <a href="#features" data-toggle="scroll-link">More Details <i class="la la-long-arrow-down d-block"></i></a>
                </h5>
            </div>
        </div>
    </div>
</div>
<!--END highlighted-->
<div class="pos-relative pos-zindex-10 bg-white" id="content">
    <!-- ======== @Region: Features ======== -->
    <div id="features" class="py-5 py-lg-6">
        <div class="container container-1000">
            <div class="text-center mb-5">
                <h2 class="h1 font-weight-bold mb-3 text-dark op-9 text-green-bright">
                    Features
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4 text-center" data-animate="fadeIn" data-animate-delay="0.1">
                    <i class="la la-group icon-3x text-blue align-baseline mb-2"></i>
                    <h4 class="text-dark op-9 mb-3">
                        Friendly Neighbourhood
                    </h4>
                    <p class="text-dark op-7 mb-0"> Home away from home</p>
                </div>
                <div class="col-md-4 text-center" data-animate="fadeIn" data-animate-delay="0.2">
                    <i class="la la-map-marker icon-3x text-blue align-baseline mb-2"></i>
                    <h4 class="text-dark op-9 mb-3">
                        Fully Furnished
                    </h4>
                    <p class="text-dark op-7 mb-0">Fully equiped with wifi too</p>
                </div>
                <div class="col-md-4 text-center" data-animate="fadeIn" data-animate-delay="0.3">
                    <i class="la la-bed icon-3x text-blue align-baseline mb-2"></i>
                    <h4 class="text-dark op-9 mb-3">
                        Budget Friendly
                    </h4>
                    <p class="text-dark op-7 mb-0">According to your size</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Features -->
    <!-- ======== @Region: Standout ======== -->
    <div id="details">
        <div data-toggle="full-height" class="text-center overlay overlay-op-2 p-3 d-lg-flex align-items-lg-center" data-bg-img="assets/img/pool_house.jpg" data-css='{"background-position": "center center"}'>
            <div class="p-4 p-lg-6 bg-white container">
                <h2 class="font-weight-normal mb-2 text-green-bright font-md-x3 font-sm-x2">
                    Modern Apartments in Flic and Flac
                </h2>
                <h4 class="font-weight-light text-dark op-9 mb-lg-4 mb-sm-4 font-md-x2 font-sm-x1">
                    Secure and Friendly Neighborhood
                </h4>
                <div class="text-dark op-9 mb-4">Our Apartments in flic and Flac are the most affordable in the region.
                    Wheteher you want to be close to the sea side or the quiet area of the west coast, we have what you are looking for.</div>
                <div class="row row grid-inner-borders-dotted">
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.3">
                        <div class=""><i class="la la-arrows-h icon-3x text-blue"></i></div>
                        <h4 class="text-dark op-9">
                            Wifi
                        </h4>
                        <h4 class="text-dark op-9">
                            Available
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.2">
                        <i class="la la-bed icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Bedrooms
                        </h4>
                        <h4 class="text-dark op-9">
                            1, 2, 3 or more 
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.1">
                        <i class="la la-archive icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Bathroom
                        </h4>
                        <h4 class="text-dark op-9">
                            Private or shared
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.4">
                        <i class="la la-calendar icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Length of stay
                        </h4>
                        <h4 class="text-dark op-9">
                            long or short
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.5">
                        <i class="la la-car icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Car park
                        </h4>
                        <h4 class="text-dark op-9">
                            1 or 2
                        </h4>
                    </div>
                    <div class="p-3 col-6 col-md-4" data-animate="fadeIn" data-animate-delay="0.6">
                        <i class="la la-pagelines icon-3x text-blue"></i>
                        <h4 class="text-dark op-9">
                            Price
                        </h4>
                        <h4 class="text-dark op-9">
                            Pocket Friendly
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END Standout-->
    <hr class="w-lg-80 my-4" /> 
    <!-- ======== @Region: Photo Tour ======== -->
    @include('includes.listings')
    <!-- END Latest News-->
    <!-- ======== @Region: <Hr>
      ======== -->
    <hr class="w-lg-80 my-4" />
    <!-- END <Hr>
      -->
    <!-- ======== @Region: Latest News ======== -->
    @include('includes.blog')
    <!-- END Latest News-->
    <!-- ======== @Region: Footer upper ======== -->

    @include('includes.contact')

    <!-- END Footer upper -->
</div>
 @stop