@extends('website.layouts.master')
@section('content')
 <!-- brand -->
 <div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Brand</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <select id="filter-company" class="filter">
                    <option value="0">Choose company</option>
                     <option value="Apple">Apple</option>
                     <option value="Samsung">Samsung</option>
                     <option value="Huawei">Huawei</option>
               </select> 
                  
                 
                     <select id="filter-price" class="filter">
                         <option value="0"  >Choose price</option>
                        <option value="$100" >$100</option>
                        <option value="$1500" >$1500</option>
                        <option value="$500"  >$500</option>
                        <option value="$700" >$700</option>
                        <option value="$200" >$200</option>
               </select>
                          
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <div class="form-outline">
                      <input type="search" id="search"  name="search"  class="form-control" placeholder="search"/>
                    </div>
                    <button type="button"  class="btn btn-danger">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
            </div>
            </div>
    </div>
    
   
    <div class="brand-bg">
        <div class="container">
       
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6   margin brand_box phone">
            <img src="{{ asset('assets/images/1.png') }}" alt="img" />
             <h3 class="company" data-company="Apple">Apple</h3>
            <span class="price" data-price="$1500">$1500</span>
            <p> {{ Str::limit('iPhone 14 Pro Max 256GB 5G With FaceTime Deep Lilac - Middle East Version', 30, '...') }}</p>
              
            </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6   margin brand_box phone">
            <img src="{{ asset('assets/images/2.png') }}" alt="img" />
          <h3 class="company"  data-company="Huawei">Huawei</h3>
        <span class="price"data-price="$500" >$500</span>
        <p>
            {{ Str::limit('Galaxy A04e Dual SIM Black 4GB RAM 128GB 4G LTE', 30, '...') }}
        </p>
        </div>
        <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-6  margin brand_box phone">
            <img src="{{ asset('assets/images/3.png') }}" alt="img" />
          <h3 class="company" data-company="Samsung" >Samsung</h3>
           <span class="price" data-price="$100">$100</span>
           <p>{{ Str::limit('Nova Y61 Dual SIM Sapphire Blue 4GB 128GB 4G - Middle East Version', 30, '...') }}
        </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin  brand_box phone">
            <img src="{{ asset('assets/images/4.png') }}" alt="img" />
          <h3 class="company"  data-company="Samsung" >Samsung</h3>
            <span class="price" data-price="$100">$100</span>
            <p> {{ Str::limit('Galaxy A04e Dual SIM Black 4GB RAM 128GB 4G LTE', 30, '...') }}</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6   margin brand_box phone">
            <img src="{{ asset('assets/images/5.png') }}" alt="img" />
          <h3 class="company"  data-company="Samsung">Samsung</h3>
         <span class="price" data-price="$700">$700</span>
         <p> {{ Str::limit('Galaxy A04e Dual SIM Black 4GB RAM 128GB 4G LTE', 30, '...') }}
        </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  margin brand_box phone">
            <img src="{{ asset('assets/images/6.png') }}" alt="img" />
          <h3 class="company"  data-company="Huawei">Huawei</h3>
          <span class="price" data-price="$200">$200</span>
          <p>{{ Str::limit('Nova Y61 Dual SIM Sapphire Blue 4GB 128GB 4G - Middle East Version', 30, '...') }}
        </p>
        </div>
    </div>
</div>
</div>

<!-- end brand -->
@endsection
