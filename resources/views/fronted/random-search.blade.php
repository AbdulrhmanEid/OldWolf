<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('fronted/bootstrap-4.0.0-dist/css/bootstrap.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('fronted/css/random-search.css') }}" />
    <title>Old Wolf</title>
  </head>
  <body>
    <header>

        <nav class="navbar navbar-expand-lg">
            <a href="{{ route('home') }}" class="navbar-brand" id="brand"
              ><img
                src="{{ asset('fronted/images/logo.jpeg') }}"
                class="img-fluid"
                alt="" style="border-radius:5px ;"
            />
            <a href="{{ route('LangConverter','ar') }}" class="text-light mr-3" style="color: #FCDF5F !important; font-weight: bold ">Ar</a>
            <a href="{{ route('LangConverter','en') }}" class="text-light" style="color: #FCDF5F !important; font-weight: bold ">En</a>
        </a>
            <a href="#x" data-toggle="collapse" class="navbar-toggler">
              <i class="fa-solid fa-bars navbar-toggler-icon" id="nav-icon"></i>
            </a>
            <div class="collapse navbar-collapse" id="x">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item p-1">
                  <a href="{{ route('home')}}" class="nav-link ">{{ __('MyCustom.home') }}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('search') }}" class="nav-link active">{{ __('MyCustom.Property')  }}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('gallery') }}" class="nav-link">{{__('MyCustom.Gallery')}}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('contact')}}" class="nav-link">{{ __('MyCustom.Contact ') }}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('careers') }}" class="nav-link">{{ __('MyCustom.Careers') }}</a>
                </li>
              </ul>
              <a href="{{ route('search') }}" class="btn text-dark pl-4 pr-4 p-2 ml-3" id="btn">
                <i class="fa-solid fa-magnifying-glass mr-2"></i>Search
              </a>
            </div>
          </nav>
    </header>
</header>
<section class="search m-auto">
    <form action="{{ route('ransearch') }}" method="post">
        @csrf
    <div class="row m-auto">
      <div class="col-lg-2 text-center p-1 pl-3 pr-3">
        <p class="text-left">{{ __('MyCustom.location') }}</p>
        <div>
          <select name="country_name" id="first" class="w-100 select">
            <option value="select option">{{ __('MyCustom.select option') }}</option>
          </select>
        </div>
      </div>
      <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left">{{ __('MyCustom.region') }}</p>
        <div>
          <select name="region_name" id="second" class="w-100 select">
            <option value="select option">{{ __('MyCustom.select option') }}</option>
          </select>
        </div>
      </div>
      <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left">{{ __('MyCustom.City') }}</p>
        <div>
          <select name="city_name" id="third" class="w-100 select">
            <option value="">{{ __('MyCustom.select option') }}</option>
          </select>
        </div>
      </div>
      <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left">{{ __('MyCustom.Property Type ') }}</p>
        <div>
          <select name="pro_name"  class="w-100 select">
            <option value="">{{ __('MyCustom.select option') }}</option>
            <option value="Appartment">Appartment</option>
            <option value="Studio">Studio</option>
            <option value="Villa">Villa</option>
            <option value="town house">Town House</option>
            <option value="compound">Compound</option>
            <option value="chalet">Chalet</option>
            <option value="twin house">Twin House</option>
            <option value="duplex">Duplex</option>
            <option value="full fioor">Full Floor</option>
            <option value="half floor">Half Floor</option>
            <option value="whole building">Whole Building</option>
            <option value="land">Land</option>
            <option value="bulk sale unit">Bulk Sale Unit</option>
            <option value="bungalow">Bungalow</option>
            <option value="hotel apartment">Hotel Apartment</option>
            <option value="ivilla">Ivilla</option>
          </select>
        </div>
      </div>
      <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left">{{ __('MyCustom.Property Status ') }}</p>
        <div>
          <select name="status_name" id="third" class="w-100 select">
            <option value="">{{ __('MyCustom.select option') }}</option>
            <option value="Buy">Buy</option>
            <option value="Rent">Rent</option>
          </select>
        </div>
      </div>

      <button type="submit" class="col-1 text-center search-icon p-1 border-left">
        <i class="fa-solid fa-magnifying-glass mr-2"></i></button>{{-- button --}}
      </div>
    </div>
    </form>
  </section>
  <section class="small-search container-fluid mt-5">
    <div class="row">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="30"
        height="30"
        fill="currentColor"
        class="bi bi-filter text-light col-2"
        viewBox="0 0 16 16">
        <path
          d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
      </svg>
      <div class="col-4 p-2 text-center buy hide-filter active ">Buy</div>
      <div class="col-4 p-2 text-center rent hide-filter">Rent</div>
    </div>
    <div class="row hide-filter">
      <div class="col-2 p-0"></div>
      <div class="col-8 p-0">
        <form action="{{ route('rnsmsearch') }}" method="post">
            @csrf
        <div class="d-flex div justify-content-between align-items-center mt-4">
          <select name="lname"  id="fir"  class="w-100 select-small ml-4 mt-auto mb-auto p-2" >
            <option value="select option">{{ __('MyCustom.location') }}</option>
          </select> {{-- fir --}}
          <i class="fa-solid fa-location-dot mr-4"></i>
          <div></div>
        </div>
        <div class="d-flex mt-4">
          <div class="d-flex div justify-content-between align-items-center mr-1 w-50">
            <select name="rname"id="sec"
              class="w-100 select-small ml-3 mt-auto mb-auto p-2">
              <option value="">{{ __('MyCustom.region') }}</option>
            </select> {{-- sec --}}
            <i class="fa-solid fa-location-crosshairs mr-4"></i>
            <div></div>
          </div>
          <div class="d-flex div justify-content-between align-items-center ml-1 w-50">
            <select name="cname"id="thi"
              class="w-100 select-small ml-3 mt-auto mb-auto p-2">
              <option value="">{{ __('MyCustom.City') }}</option>
            </select> {{-- Thi --}}
            <i class="fa-solid fa-location-crosshairs mr-4"></i>
            <div></div>
          </div>
        </div>
        <div class="d-flex div justify-content-between align-items-center mt-4">
          <select name="ptype"
            class="w-100 select-small ml-4 mt-auto mb-auto p-2">
            <option value="">{{ __('MyCustom.Property Type ') }}</option>
            <option value="Appartment">Appartment</option>
            <option value="Studio">Studio</option>
            <option value="Villa">Villa</option>
            <option value="town house">Town House</option>
            <option value="compound">Compound</option>
            <option value="chalet">Chalet</option>
            <option value="twin house">Twin House</option>
            <option value="duplex">Duplex</option>
            <option value="full fioor">Full Floor</option>
            <option value="half floor">Half Floor</option>
            <option value="whole building">Whole Building</option>
            <option value="land">Land</option>
            <option value="bulk sale unit">Bulk Sale Unit</option>
            <option value="bungalow">Bungalow</option>
            <option value="hotel apartment">Hotel Apartment</option>
            <option value="ivilla">Ivilla</option>
          </select>
          <i class="fa-solid fa-building-circle-check mr-4"></i>
          <div></div>
        </div>
        <button type="submit" class="btn w-100 mt-3 small-search-btn">Search</button>
      </div>
    </form>{{-- end Form --}}
    </div> {{-- filter --}}
  </section>



    <section class="mt-5 mb-5">
        <div class="container-fluid">
          <h2 class="pt-5 most-searched text-center text-light mb-5 pb-3">
            {{ __('MyCustom.Random Result') }}
          </h2>
          <div class="row">
            @foreach ($results as $result)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <a href="{{ route('target',$result->id) }}">
                        <img src="{{ Storage::url( $result->image ) }} " style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100"></a>
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">{{$result->type }}</h5>
                            <h5 class="gold">{{$result->status }}</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>{{$result->location  }}</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">{{$result->number_badrooms  }} <img src="{{ asset('fronted/images/icon1.jpeg') }}" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">{{$result->number_bathrooms  }} <img src="{{ asset('fronted/images/icon2.jpeg') }}" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">{{$result->area  }} <img src="{{ asset('fronted/images/icon3.jpeg') }}" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>

        </div>
    </div>
    </section>
    <section class="footer text-lg-left text-center mt-5 p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 text-center">
              <img
                src="{{ asset('fronted/images/logo.jpeg') }}"
                class="img-fluid w-lg-75 "
                alt="" style="border-radius:20px ;" />
              <div class="d-flex justify-content-between ml-auto mr-auto icons mt-4 mb-4">
               <a href="https://www.facebook.com/oldwolfgroupegyuae" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://wsend.co/201008105192" target="_blank"><i class="fa-brands fa-whatsapp" ></i></a>
                <a href="https://instagram.com/owg.egy?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
            <div class="col-lg-4 text-light text-center m-auto">
              <h4>{{ __('MyCustom. WORKING HOURS')}}</h4>
              <p class="d-flex justify-content-between p-1 border-bottom">
                <span> {{ __('MyCustom.Saturday - Thursday') }}</span>
                <span>10 AM - 19 PM</span>
              </p>
              <p class="d-flex justify-content-between p-1 border-bottom">
                <span>{{ __('MyCustom.Friday')}}</span>
                <span>{{__('MyCustom.Closed')  }}</span>
              </p>
              <div class="text-left">
                <p><i class="fa-solid fa-phone mr-2"></i>+20 0100 810 5192</p>
                <p><i class="fa-solid fa-phone mr-2"></i>+971 154 444 9674</p>
                <p>
                  <i class="fa-solid fa-blender-phone mr-2"></i>+2040 2222 057
                </p>
                <p>
                  <i class="fa-solid fa-envelope-circle-check mr-2"></i
                  >info@oldwolf.ae
                </p>
                <p>
                  <i class="fa-solid fa-location-dot mr-2"></i>Business Bay ,
                  Dubai United Arab Emirates.
                </p>
                <p>
                  <i class="fa-solid fa-location-dot mr-2"></i>Al-Alshon Square,
                  El-Mahalla El-Kobra, Gharbia Governorate, Egypt
                </p>
              </div>
            </div>
            <div class="col-lg-4 text-light text-center ml-lg-5">
              <h4>{{__('MyCustom.Careers')  }}</h4>
              <div class="border-bottom border-top p-1">
                <p class="mb-2">Join Our Team</p>
                <p class="m-0">HR@oldwolf.ae</p>
              </div>
              <h6 class="pt-4 pb-1 border-bottom">SUBSCRIBE NEWSLETTER</h6>
              <div class="row m-1 mt-4">
                <div class="col-8 p-2 enter-email">
                  <form action="{{ route('sub.store') }}" method="post">
                      @csrf
                  <input type="email" placeholder="Enter your email" name="email" />
                </div>
                <button type="submit"class="col-4 p-2 subscripe">Subscripe</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="{{ asset('fronted/js/search.js') }}"></script>
    <script src="{{ asset('fronted/js/random-search.js') }}"></script>
    <script src="{{ asset('fronted/js/main.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('froted/bootstrap-4.0.0-dist/js/bootstrap.js') }}"></script>
  </body>
</html>
