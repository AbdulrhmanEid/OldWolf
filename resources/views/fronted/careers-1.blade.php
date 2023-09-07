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
    <link rel="stylesheet" href="{{ asset('fronted/css/careers-1.css') }}" />
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
                  <a href="{{ route('search') }}" class="nav-link">{{ __('MyCustom.Property')  }}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('gallery') }}" class="nav-link">{{__('MyCustom.Gallery')}}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('contact')}}" class="nav-link">{{ __('MyCustom.Contact ') }}</a>
                </li>
                <li class="nav-item p-1">
                  <a href="{{ route('careers') }}" class="nav-link active">{{ __('MyCustom.Careers') }}</a>
                </li>
              </ul>
              <a href="{{ route('search') }}" class="btn text-dark pl-4 pr-4 p-2 ml-3" id="btn">
                <i class="fa-solid fa-magnifying-glass mr-2"></i>Search
              </a>
            </div>
          </nav>
    </header>
    <section class="mb-5 pb-4">
      <div class="container-fluid">
        <h2 class="pt-5 text-center text-light pb-2">
            {{ __('MyCustom.Careers') }}
        </h2>
        <h4 class="text-light text-center">{{__('MyCustom.Recently posted jobs')  }}</h4>
        <div class="text-center">
          <img src="{{ asset('fronted/images/line-11.svg') }}" style="width: 250px" alt="" />
        </div>
        <section class="companies mt-5 pt-4 mb-5">
          <section class="product pt-4">
            <div class="product-container">

              @foreach ($careers as $career ){
                <div class="product-card">
                    <div class="product-image d-flex justify-content-between">
                      <img src="{{ asset('fronted/images/logo.jpeg') }}" alt=""class="img-fluid"
                      alt="" style="border-radius:5px ;">

                      <img src="{{ asset('fronted/images/save1.jpeg') }}" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="gold mb-4">{{ $career->name }}</h2>
                        <h4 class="text-light mb-4">Old Wolf</h4>
                        <p class="text-light mb-4">{{$career->location}}</p>
                        <div class="text-center">
                           <a href="{{ route('career.info',$career->id) }}" class="p-1 pr-3 pl-3">Apply Now</a>

                        </div>
                    </div>
                  </div>
              }
              @endforeach


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
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/bootstrap.js') }}"></script>
  </body>
</html>
