<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/random-search.css" />
    <title>Old Wolf</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand" id="brand"
          ><img
            src="../images/logo.jpeg"
            class="img-fluid"
            alt="" style="border-radius:5px ;"
        /></a>
        <a href="#x" data-toggle="collapse" class="navbar-toggler">
          <i class="fa-solid fa-bars navbar-toggler-icon" id="nav-icon"></i>
        </a>
        <div class="collapse navbar-collapse" id="x">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item p-1">
              <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item p-1">
              <a href="#" class="nav-link active">Property</a>
            </li>
            <li class="nav-item p-1">
              <a href="#" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item p-1">
              <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item p-1">
              <a href="#" class="nav-link">Careers</a>
            </li>
          </ul>
          <div class="btn pl-4 pr-4 p-2 ml-3" id="btn">
            <i class="fa-solid fa-magnifying-glass mr-2"></i>Search
          </div>
        </div>
      </nav>
    </header>
</header>
<section class="search m-auto">
    <div class="row m-auto">
      <div class="col-lg-3 text-center p-1 pl-3 pr-3">
        <p class="text-left">Location</p>
        <div class="dropdown">
          <div class="d-flex justify-content-between" id="location" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p>Any</p>
            <i class="fa-solid fa-sort-down"></i>
          </div>
          <div class="dropdown-menu" aria-labelledby="location" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
      </div>
      <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left">Region</p>
        <div class="dropdown">
          <div class="d-flex justify-content-between" id="region" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p>Any</p>
            <i class="fa-solid fa-sort-down"></i>
          </div>
          <div class="dropdown-menu" aria-labelledby="region" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
      </div>
      <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-center">Property Type</p>
        <div class="dropdown">
          <div class="d-flex justify-content-between" id="property-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p>Any</p>
            <i class="fa-solid fa-sort-down"></i>
          </div>
          <div class="dropdown-menu" aria-labelledby="property-type" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
      </div>
      <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left">Property Status</p>
        <div class="dropdown">
          <div class="d-flex justify-content-between" id="property-status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p>Any</p>
            <i class="fa-solid fa-sort-down"></i>
          </div>
          <div class="dropdown-menu" aria-labelledby="property-status" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
      </div>
      <div class="col-1 text-center search-icon p-1 border-left">
        <i class="fa-solid fa-magnifying-glass mr-2"></i>
      </div>
    </div>
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
      <div class="col-4 p-2 text-center buy hide-filter">Buy</div>
      <div class="col-4 p-2 text-center rent hide-filter">Rent</div>
    </div>
    <div class="row hide-filter">
      <div class="col-2 p-0"></div>
      <div class="col-8 p-0">
        <div class="dropdown">
          <div class="d-flex justify-content-between align-items-center mt-4"  id="location" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p class="ml-4 mt-auto mb-auto p-2 text-light">Location</p>
            <i class="fa-solid fa-location-dot mr-4"></i>
          </div>
          <div class="dropdown-menu w-100" aria-labelledby="location" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown">
          <div class="d-flex justify-content-between mt-4  align-items-center" id="region" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p class="ml-4 mt-auto mb-auto p-2 text-light">Region</p>
            <i class="fa-solid fa-location-crosshairs mr-4"></i>
          </div>
          <div class="dropdown-menu w-100" aria-labelledby="region" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown">
          <div class="d-flex justify-content-between mt-4  align-items-center"id="property-status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p class="ml-4 mt-auto mb-auto p-2 text-light">Property type</p>
            <i class="fa-solid fa-building-circle-check mr-4"></i>
          </div>
          <div class="dropdown-menu w-100" aria-labelledby="property-status" style="background-color: #0D0D0D;">
            <a class="dropdown-item text-light" href="#">Action</a>
            <a class="dropdown-item text-light" href="#">Another action</a>
            <a class="dropdown-item text-light" href="#">Something else here</a>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section class="mt-5 mb-5">
        <div class="container-fluid">
          <h2 class="pt-5 most-searched text-center text-light mb-5 pb-3">
            Random Result
            <img src="images/line-11.svg" style="width: 150px" alt="" />
          </h2>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more ml-auto mr-auto p-3 mt-5 mb-5">Load More</div>
          </div>
          <div class="row load-more-div d-none">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background: none;">
                    <img src="../images/50cb1bd86055120b16892a46193d69f6c3f6a6279282c1a9ba94511f-1@2x.png" style="height:250px;border-radius: 50px;" alt="" class="img-fluid w-100">
                    <div class="card-info p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="gold">Studio</h5>
                            <h5 class="gold">Sale</h5>
                        </div>
                        <p class="text-light mt-3"><i class="fa-solid fa-location-dot gold mr-2"></i>Dubia, UAE</p>
                        <div class="row">
                            <div class="col-4 p-2">
                                <p class="text-light">3 <img src="../images/icon1.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">BedRooms</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">2 <img src="../images/icon2.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Bathroom</p>
                            </div>
                            <div class="col-4 border-left p-2">
                                <p class="text-light">120m2 <img src="../images/icon3.jpeg" class="img-fluid w-25" alt=""></p>
                                <p class="text-light">Area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-less ml-auto mr-auto p-3 mt-5 mb-5">Load Less</div>
          </div>
        </div>
    </section>
    <section class="footer text-lg-left text-center mt-5 p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3">
              <img
                src="../images/logo.jpeg"
                class="img-fluid w-lg-75"
                alt="" style="border-radius:20px ;" />
              <div class="d-flex justify-content-between ml-auto mr-auto icons mt-4 mb-4">
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-instagram"></i>
              </div>
            </div>
            <div class="col-lg-4 text-light text-center m-auto">
              <h4>WORKING HOURS</h4>
              <p class="d-flex justify-content-between p-1 border-bottom">
                <span> Saturday - Thursday</span>
                <span>10 AM - 19 PM</span>
              </p>
              <p class="d-flex justify-content-between p-1 border-bottom">
                <span>Friday</span>
                <span>Closed</span>
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
              <h4>Careers</h4>
              <div class="border-bottom border-top p-1">
                <p class="mb-2">Join Our Team</p>
                <p class="m-0">HR@oldwolf.ae</p>
              </div>
              <h6 class="pt-4 pb-1 border-bottom">SUBSCRIBE NEWSLETTER</h6>
              <div class="row m-1 mt-4">
                <div class="col-8 p-2 enter-email">Enter your email</div>
                <div class="col-4 p-2 subscripe">Subscripe</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="../js/random-search.js"></script>
    <script src="../js/main.js"></script>
    <script src="../bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="../bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js"></script>
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.js"></script>
  </body>
</html>
