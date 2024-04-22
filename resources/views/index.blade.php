@include('layouts.header')



<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Find your car today!</h4>
                <h2>Life is a Highway</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Featured Cars</h2>
            <a href="{{url('cars')}}">view more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>

        @php
          $featuredCars = App\Models\CarProducts::limit(6)->get(); // Get 9 featured cars
        @endphp

        @foreach ($featuredCars as $car)
          <div class="col-lg-4 col-md-6">
            <div class="product-item">
                <a href="{{url('/car-details')}}"><img src="{{ $car->image }}" alt=""></a>
                <div class="down-content">
                  <a href="{{url('car-details')}}"><h4>{{ $car->brand }} | {{ $car->model }}</h4></a>

                  <h6>{{ $car->sign }} {{ $car->price }}</h6>

                  <p>{{ $car->description }}</p>

                  <small>
                    <strong title="Author"><i class="fa-solid fa-car"></i> {{ $car->body_type }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Author"><i class="fa-solid fa-gears"></i> {{ $car->engine }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Views"><i class="fa fa-cog"></i> {{ $car->transmission }}</strong>
                  </small>
                </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>


<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse
                        consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora
                        ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur
                        praesentium, corporis, aliquid dicta.</p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                    </ul>
                    <a href="{{url('about-us')}}" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="assets/images/about-1-570x350.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <a href="contact.html" class="filled-button">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
