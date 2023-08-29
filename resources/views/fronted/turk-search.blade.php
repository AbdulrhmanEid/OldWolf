<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('fronted/bootstrap-4.0.0-dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('fronted/css/random-search.css') }}" />
    <title>Old Wolf</title>
</head>

<body>
    <header>
        <a href="{{ route('LangConverter','ar') }}">Arabic</a>
        <a href="{{ route('LangConverter','en') }}">English</a>
        <nav class="navbar navbar-expand-lg">
            <a href="{{route('home') }}" class="navbar-brand" id="brand"><img src="{{ asset('fronted/images/logo.jpeg') }}" class="img-fluid"
                    alt="" style="border-radius:5px ;" /></a>
            <a href="#x" data-toggle="collapse" class="navbar-toggler">
                <i class="fa-solid fa-bars navbar-toggler-icon" id="nav-icon"></i>
            </a>
            <div class="collapse navbar-collapse" id="x">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item p-1">
                        <a href="{{ route('home') }}" class="nav-link">{{ __('MyCustom.home') }}</a>
                    </li>
                    <li class="nav-item p-1">
                        <a href="{}" class="nav-link active">{{ __('MyCustom.Property') }}</a>
                    </li>
                    <li class="nav-item p-1">
                        <a href="{{ route('gallery') }}" class="nav-link">{{ __('MyCustom.Gallery') }}</a>
                    </li>
                    <li class="nav-item p-1">
                        <a href="{{ route('contact') }}" class="nav-link">{{ __('MyCustom.Contact ') }}</a>
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
                                <option>{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
                    <p class="text-left">{{ __('MyCustom.Property Type ') }}</p>
                    <div>
                        <select name="pro_name" class="w-100 select">
                            <option value="volvo">-- Select --</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
                    <p class="text-left">{{ __('MyCustom.Property Status ') }}</p>
                    <div>
                        <select name="status_name" class="w-100 select">
                            <option value="">-- Select --</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->name }}">{{ $status->name }}</option>
                            @endforeach
                        </select>


                    </div>
                </div>
                <div class="col-1 text-center search-icon p-1 border-left">
                    <button type="submit" class="btn btn-warning"><i
                            class="fa-solid fa-magnifying-glass mr-2"></i></button>{{-- button --}}
                </div>
            </div>

    </form>{{-- End form --}}
    </section>


    <section class="small-search container-fluid mt-5">
        <div class="row">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-filter text-light col-2" viewBox="0 0 16 16">
                <path
                    d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
            <div class="col-4 p-2 text-center buy hide-filter">Buy</div>
            <div class="col-4 p-2 text-center rent hide-filter">Rent</div>
        </div>

    </section>
    <section class="mt-5 mb-5">
        <div class="container-fluid">
            <h2 class="pt-5 most-searched text-center text-light mb-5 pb-3">
               {{ __('MyCustom.Turkiye Random Result') }}
            </h2>
            <div class="row">
                @foreach ($results as $result)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card" style="background: none;">
                            <a href="{{ route('target', $result->id) }}">
                                <img src="{{ Storage::url($result->image) }} "
                                    style="height:250px;border-radius: 50px;" alt=""
                                    class="img-fluid w-100"></a>
                            <div class="card-info p-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="gold">{{ $result->type }}</h5>
                                    <h5 class="gold">{{ $result->status }}</h5>
                                </div>
                                <p class="text-light mt-3"><i
                                        class="fa-solid fa-location-dot gold mr-2"></i>{{ $result->location }}</p>
                                <div class="row">
                                    <div class="col-4 p-2">
                                        <p class="text-light">{{ $result->number_badrooms }} <img
                                                src="{{ asset('fronted/images/icon1.jpeg') }}" class="img-fluid w-25"
                                                alt=""></p>
                                        <p class="text-light">BedRooms</p>
                                    </div>
                                    <div class="col-4 border-left p-2">
                                        <p class="text-light">{{ $result->number_bathrooms }} <img
                                                src="{{ asset('fronted/images/icon2.jpeg') }}" class="img-fluid w-25"
                                                alt=""></p>
                                        <p class="text-light">Bathroom</p>
                                    </div>
                                    <div class="col-4 border-left p-2">
                                        <p class="text-light">{{ $result->area }} <img
                                                src="{{ asset('fronted/images/icon3.jpeg') }}" class="img-fluid w-25"
                                                alt=""></p>
                                        <p class="text-light">Area</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load-less ml-auto mr-auto p-3 mt-5 mb-5">Load Less</div>
        </div>
        </div>
    </section>
    <section class="footer text-lg-left text-center mt-5 p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <img src="../images/logo.jpeg" class="img-fluid w-lg-75" alt=""
                        style="border-radius:20px ;" />
                    <div class="d-flex justify-content-between ml-auto mr-auto icons mt-4 mb-4">
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <div class="col-lg-4 text-light text-center m-auto">
                    <h4>{{ __('MyCustom.WORKING HOURS') }}</h4>
                    <p class="d-flex justify-content-between p-1 border-bottom">
                        <span> {{ __('MyCustom.Saturday - Thursday') }}</span>
                        <span>10 AM - 19 PM</span>
                    </p>
                    <p class="d-flex justify-content-between p-1 border-bottom">
                        <span>{{ __('MyCustom.Friday') }}</span>
                        <span>{{ __('MyCustom.Closed') }}</span>
                    </p>
                    <div class="text-left">
                        <p><i class="fa-solid fa-phone mr-2"></i>+20 0100 810 5192</p>
                        <p><i class="fa-solid fa-phone mr-2"></i>+971 154 444 9674</p>
                        <p>
                            <i class="fa-solid fa-blender-phone mr-2"></i>+2040 2222 057
                        </p>
                        <p>
                            <i class="fa-solid fa-envelope-circle-check mr-2"></i>info@oldwolf.ae
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
                    <h4>{{ __('MyCustom.Careers') }}</h4>
                    <div class="border-bottom border-top p-1">
                        <p class="mb-2">Join Our Team</p>
                        <p class="m-0">HR@oldwolf.ae</p>
                    </div>
                    <h6 class="pt-4 pb-1 border-bottom">SUBSCRIBE NEWSLETTER</h6>
                    <div class="row m-1 mt-4">
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
    <script src="{{ asset('fronted//js/random-search.js') }}"></script>
    <script src="{{ asset('fronted/js/main.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('fronted/bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('froted/bootstrap-4.0.0-dist/js/bootstrap.js') }}"></script>
</body>

</html>
