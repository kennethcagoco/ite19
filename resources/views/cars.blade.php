@include('layouts.header')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Cars</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-form">
                    <form action="{{ route('cars.show') }}" method="GET">
                        <div class="filter-container">
                            <label for="brand">Brand:</label>
                                <select name="brand" id="brand">
                                    <option value=""> All Products</option>
                                    @foreach ($allBrands as $brand)
                                        <option value="{{ $brand }}" {{ $brand === $request->get('brand') ? 'selected' : '' }}>{{ $brand }}</option>
                                    @endforeach
                                </select>

                            <label for="engine">Engine Type:</label>
                                    <select name="engine" id="engine">
                                    <option value=""> All Engines</option>
                                    @foreach ($uniqueEngines as $engine)
                                        <option value="{{ $engine }}" {{ $engine === $request->get('engine') ? 'selected' : '' }}>{{ $engine }}</option>
                                    @endforeach
                                    </select>

                            <label for="body_type">Body Type:</label>
                                    <select name="body_type" id="body_type">
                                      <option value="">All Body Types</option>
                                      @foreach ($uniqueBodyTypes as $bodyType)
                                        <option value="{{ $bodyType }}" {{ $bodyType === $request->get('body_type') ? 'selected' : '' }}>{{ $bodyType }}</option>
                                      @endforeach
                                    </select>

                            <label for="min_price">Min Price:</label>
                                <input type="text" name="min_price" id="min_price" value="{{ $request->get('min_price') }}">
                            <label for="max_price">Max Price:</label>
                                <input type="text" name="max_price" id="max_price" value="{{ $request->get('max_price') }}">
                                <br><br><br>



                            <button type="submit" class="filled-button btn-block">Search</button>
                        </div>
                    </form>
                </div>
             </div>



          <div class="col-md-9">
            <div class="row">
                @foreach ($data as $data)
              <div class="col-md-6">
                <div class="product-item">
                  <a href="{{url('/car-details')}}"><img src="{{ $data->image }}" alt=""></a>
                  <div class="down-content">
                    <a href="{{url('car-details')}}"><h4>{{ $data->brand }} | {{ $data->model }}</h4></a>

                    <h6>{{ $data->sign }} {{ $data->price }}</h6>

                    <p>{{ $data->description }}</p>

                    <small>
                      <strong title="Author"><i class="fa-solid fa-car"></i> {{ $data->body_type }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa-solid fa-gears"></i> {{ $data->engine }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Views"><i class="fa fa-cog"></i> {{ $data->transmission }}</strong>
                    </small>
                  </div>
                </div>
              </div>
                @endforeach










            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>





    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

      </body>

</html>
