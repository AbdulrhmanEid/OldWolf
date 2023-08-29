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
      referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('fronted/css/style.css') }}" /> {{-- css/style.css --}}
    <title>Old Wolf</title>
  </head>
  <body>
    <header>
        <a href="{{ route('LangConverter','ar') }}">Arabic</a>
        <a href="{{ route('LangConverter','en') }}">English</a>
      <nav class="navbar navbar-expand-lg">
        <a href="{{ route('home') }}" class="navbar-brand" id="brand"
          ><img
            src="{{ asset('fronted/images/logo.jpeg') }}"
            class="img-fluid"
            alt="" style="border-radius:5px ;"
        /></a>
        <a href="#x" data-toggle="collapse" class="navbar-toggler">
          <i class="fa-solid fa-bars navbar-toggler-icon" id="nav-icon"></i>
        </a>
        <div class="collapse navbar-collapse" id="x">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item p-1">
              <a href="{{ route('home')}}" class="nav-link active">{{ __('MyCustom.home') }}</a>
            </li>
            <li class="nav-item p-1">
              <a href="{{ route('search') }}" class="nav-link">{{ __('MyCustom.Property')  }}</a>
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
          <a href="{{ route('search') }}" class="btn pl-4 pr-4 p-2 ml-3" id="btn">
            <i class="fa-solid fa-magnifying-glass mr-2"></i>Search
          </a>
        </div>
      </nav>
    </header>
    <form action="{{ route('search') }}" method="post">
        @csrf
    <section class="search m-auto">
        <div class="row m-auto">
          <div class="col-lg-3 text-center p-1 pl-3 pr-3">
            <p class="text-left">{{ __('MyCustom.location') }}</p>
            <div>
              <select id="country-dd" class="w-100 select" name="country_name">
                <option value="">-- Select --</option>
                @foreach ($counteries as $country)
                <option value="{{ $country->name }}">{{ $country->name }}</option>
                @endforeach
              </select>

            </div>
          </div>
          <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
            <p class="text-left">{{ __('MyCustom.region') }}</p>
            <div>
              <select name="region_name" id="cars" class="w-100 select">
                <option value="">-- Select --</option>
                @foreach ($regions as $region)
                <option>{{$region->name  }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
            <p class="text-left">{{ __('MyCustom.Property Type ') }}</p>
            <div>
              <select name="pro_name"  class="w-100 select">
                <option value="volvo">-- Select --</option>
                @foreach ($types as $type)
                <option value="{{$type->name  }}" >{{$type->name  }}</option>
                @endforeach

              </select>
            </div>
          </div>
          <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
            <p class="text-left">{{ __('MyCustom.Property Status ') }}</p>
            <div>
              <select name="status_name"  class="w-100 select">
                <option value="">-- Select --</option>
                @foreach ($statuses as $status)
                <option value="{{$status->name  }}" >{{$status->name  }}</option>
                @endforeach
            </select>


            </div>
          </div>
          <div class="col-1 text-center search-icon p-1 border-left">
             <button type="submit" class="btn btn-warning"><i class="fa-solid fa-magnifying-glass mr-2"></i></button>{{-- button --}}
          </div>
        </div>

        </form>{{-- End form --}}
      </section>

    <section class="mt-2 mb-5">
      <div class="container-fluid">
        <h2 class="pt-5 mt-lg-5 most-searched Montserrat text-center text-light mb-4">
          {{ __('MyCustom.Most Searched Places ') }}
          <!-- <img src="./images/line-11.svg" style="width: 150px" alt="" /> -->
        </h2>
        <div class="row gallery-1">
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <img src="{{ asset('fronted/images/--4-1@2x.png') }}" class="img-fluid w-100" alt="" style="height:860px ;border-radius: 30px;" />
            <p class="country"><a href="{{ route('uae') }}" class="text-light">{{ __('MyCustom.UAE ') }}</a></p>
          </div>
          <div
            class="col-lg-4 col-sm-6 col-12 text-center mb-3"
            >
            <img
              src="{{ asset('fronted/images/clip-path-group@2x.png') }}"
              class="img-fluid mb-3 w-100"
              style="border-radius: 30px; height: 515px"
              alt="" />
            <p class="country"><a href="{{ route('egy') }}" class="text-light">{{ __('MyCustom.Egypt') }}</a></p>
            <img
              src="{{ asset('fronted/images/real-estate3-1@2x.png') }}"
              class="img-fluid w-100"
              style="height: 330px;border-radius: 30px;"
              alt="" />
            <p class="georgia">
              <a href="{{ route('gor') }}" class="text-light">{{ __('MyCustom.Georgia') }}</a>
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <img
              src="{{ asset('fronted/images/clip-path-group1@2x.png') }}"
              class="img-fluid w-100 mb-3"
              alt="" style="height:860px ;border-radius: 30px;" />
            <p class="country"><a href="{{ route('turk') }}" class="text-light">{{ __('MyCustom.Turkiye') }}</a></p>
          </div>
          <div class="arrows">
            <i class="fa-solid fa-angle-right" id="prev"></i>
            <i class="fa-solid fa-angle-left"id="next"></i>
        </div>
        </div>
        <div class="row gallery-2">
          <div class="col-lg-6 col-6 p-1 mb-3"  style="height:500px ;border-radius: 30px;">
            <img src="{{ asset('fronted/images/tour.jpeg') }}" class="img-fluid w-100 mb-3" alt="" style="height:50% ;border-radius: 30px;" />
            <p class="country"><a href="" class="text-light">UAE</a></p>
            <img
            src="{{ asset('fronted/img/photo.jpg') }}"
            class="img-fluid w-100 mb-3"
            alt="" style="height:50% ;border-radius: 30px;" />
          <p class="second-country"><a href="" class="text-light">Turkiye</a></p>
          </div>
          <div
            class="col-lg-6 col-6 p-1 text-center mb-3"  style="height:500px ;border-radius: 30px;"
            >
            <img
              src="{{ asset('fronted/images/2.png') }}"
              class="img-fluid mb-3 w-100"
              style="border-radius: 30px; height: 50%"
              alt="" />
            <p class="country"><a href="" class="text-light">Egypt</a></p>
            <img
              src="{{ asset('fronted/images/2.png') }}"
              class="img-fluid w-100 mb-3"
              style="height: 50%;border-radius: 30px;"
              alt="" />
            <p class="second-country">
              <a href="" class="text-light">Georgia</a>
            </p>
          </div>
          <div class="arrows-2">
            <i class="fa-solid fa-angle-right prev" id="prev"></i>
            <i class="fa-solid fa-angle-left next" id="next"></i>
        </div>
        </div>
      </div>
    </section>
    <section class="about mt-5 mb-5">
      <div class="container-fluid">
        <div class="row">
          <h2 class="pt-5 p-3 m-auto text-light about-header-1">
            About Us
            <!-- <img src="./images/group-14.svg" style="width: 100px" alt="" /> -->
          </h2>
          <div class="col-lg-6 p-lg-5">
            <img src="{{ asset('fronted/images/---1@2x.png') }}" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-6">
            <h2 class="pt-5 pl-5 text-light about-header-2">
              {{ __('MyCustom.About us') }}
              <!-- <img src="./images/group-14.svg" style="width: 100px" alt="" /> -->
            </h2>
            <p class="about-description text-light pt-3 pl-sm-5 pr-sm-5" style="text-align:justify">
              {{ __('MyCustom.Old Wolf') }}
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="overlay"></div>
      <div class="contact-info">
        <p>{{ __('MyCustom.Looking For More?') }}</p>
        <h3>{{ __('MyCustom.Talk to our experts or browse through more experties') }}</h3>
        <div class="btn pl-3 pr-3 p-2 ml-3 mt-3 text-dark" id="btn"><p><a href="{{ route('contact') }}"><b>{{ __('MyCustom.Contact Us') }}</b></a></p></div>
      </div>
    </section>
    <section
      class="pt-5 pb-5 text-center text-light"
      style="background-color: #141414">
      <div class="container-fluid">
        <h2>
          {{ __('MyCustom.Meet our partners') }}
          <!-- <img src="images/group-14.svg" style="width: 100px" alt="" /> -->
        </h2>
        <p>{{ __('MyCustom.We') }}</p>
        <section class="companies mb-5">
          <section class="product pt-4">
            <div class="product-container">
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/1.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/2.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/3.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/4.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/5.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/6.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/7.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/8.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/9.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/10.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/11.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/12.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/13.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/14.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/15.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/16.jpeg') }}" alt="" />
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/17.jpeg') }}" alt="" />
                </div>
              </div>
            </div>
          </section>
        </section>
      </div>
    </section>
    <section class="mt-5 mb-5 text-center text-light">
      <div class="container-fluid">
        <h2>
         {{ __('MyCustom. Our Employers') }}
          <!-- <img src="images/group-14.svg" style="width: 100px" alt="" /> -->
        </h2>
        <p class="">{{ __('MyCustom. Meet The Team') }}</p>
        <section class="employer">
          <section class="product pt-4">
            <div class="product-container">
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/Ali.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">CEO</h6>
                  <p>Ali Elnagar</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/21.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">GM</h6>
                  <p>Akram Azz Elarab</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/20.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Accountant</h6>
                  <p>Ayman Azz Elarab</p>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/22.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Seo marketing</h6>
                  <p>Islam Samy</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/23.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Director of the Office</h6>
                  <p>Mona Ayad</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/24.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>Hanan Elgendy</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/25.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>Ahmed Tantawy</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/26.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>sayid Eldgheidy</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/27.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>Ahmed Mansour</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/28.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>Ibrahim Hajjaj</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/29.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>Kareem Ali</p>
                </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('fronted/images/30.jpeg') }}" alt="" />
                </div>
                <div class="product-info">
                  <h6 class="mt-2">Sales</h6>
                  <p>Ahmed Ragab</p>
                </div>
              </div>
            </div>
          </section>
        </section>
      </div>
    </section>
    <section class="footer text-lg-left text-center mt-5 p-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <img
              src="{{ asset('fronted/images/logo.jpeg') }}"
              class="img-fluid w-lg-75"
              alt="" style="border-radius:20px ;" />
            <div class="d-flex justify-content-between ml-auto mr-auto icons mt-4 mb-4">
              <i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-whatsapp"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
          <div class="col-lg-4 text-light text-center m-auto">
            <h4>{{ __('MyCustom. WORKING HOURS') }}</h4>
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
              <div class="col-4 p-2 subscripe"><button type="submit">Subscripe</button></div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="{{ asset('fronted/js/main.js') }}"></script>{{-- /js/main.js --}}
    <script src="{{ asset('fronted/js/gallery-index.js') }}"></script>{{-- /js/gallery-index.js --}}
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/bootstrap.js') }}"></script>
  </body>
</html>
