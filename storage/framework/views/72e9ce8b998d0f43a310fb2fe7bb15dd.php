<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/css/bootstrap.css')); ?>" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('fronted/css/target.css')); ?>" />
    <title>Old Wolf</title>
  </head>
  <body>
    <header>

        <nav class="navbar navbar-expand-lg">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand" id="brand"
              ><img
                src="<?php echo e(asset('fronted/images/logo.jpeg')); ?>"
                class="img-fluid"
                alt="" style="border-radius:5px ;"
            />
            <a href="<?php echo e(route('LangConverter','ar')); ?>" class="text-light mr-3" style="color: #FCDF5F !important; font-weight: bold ">Ar</a>
            <a href="<?php echo e(route('LangConverter','en')); ?>" class="text-light" style="color: #FCDF5F !important; font-weight: bold ">En</a>
        </a>
            <a href="#x" data-toggle="collapse" class="navbar-toggler">
              <i class="fa-solid fa-bars navbar-toggler-icon" id="nav-icon"></i>
            </a>
            <div class="collapse navbar-collapse" id="x">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item p-1">
                  <a href="<?php echo e(route('home')); ?>" class="nav-link "><?php echo e(__('MyCustom.home')); ?></a>
                </li>
                <li class="nav-item p-1">
                  <a href="<?php echo e(route('search')); ?>" class="nav-link active"><?php echo e(__('MyCustom.Property')); ?></a>
                </li>
                <li class="nav-item p-1">
                  <a href="<?php echo e(route('gallery')); ?>" class="nav-link"><?php echo e(__('MyCustom.Gallery')); ?></a>
                </li>
                <li class="nav-item p-1">
                  <a href="<?php echo e(route('contact')); ?>" class="nav-link"><?php echo e(__('MyCustom.Contact ')); ?></a>
                </li>
                <li class="nav-item p-1">
                  <a href="<?php echo e(route('careers')); ?>" class="nav-link"><?php echo e(__('MyCustom.Careers')); ?></a>
                </li>
              </ul>
              <a href="<?php echo e(route('search')); ?>" class="btn text-dark pl-4 pr-4 p-2 ml-3" id="btn">
                <i class="fa-solid fa-magnifying-glass mr-2"></i>Search
              </a>
            </div>
          </nav>
    </header>
  </header>
  <section class="search m-auto">
    <form action="<?php echo e(route('targsearch')); ?>" method="post">
        <?php echo csrf_field(); ?>
    <div class="row m-auto">
      <div class="col-lg-2 text-center p-1 pl-3 pr-3">
        <p class="text-left"><?php echo e(__('MyCustom.location')); ?></p>
        <div>
          <select name="country_name" id="first" class="w-100 select">
            <option value="select option"><?php echo e(__('MyCustom.select option')); ?></option>
          </select>
        </div>
      </div>
      <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left"><?php echo e(__('MyCustom.region')); ?></p>
        <div>
          <select name="region_name" id="second" class="w-100 select">
            <option value="select option"><?php echo e(__('MyCustom.select option')); ?></option>
          </select>
        </div>
      </div>
      <div class="col-3 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left"><?php echo e(__('MyCustom.City')); ?></p>
        <div>
          <select name="city_name" id="third" class="w-100 select">
            <option value=""><?php echo e(__('MyCustom.select option')); ?></option>
          </select>
        </div>
      </div>
      <div class="col-2 text-center p-1 pl-3 pr-3 border-left">
        <p class="text-left"><?php echo e(__('MyCustom.Property Type ')); ?></p>
        <div>
          <select name="pro_name"  class="w-100 select">
            <option value=""><?php echo e(__('MyCustom.select option')); ?></option>
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
        <p class="text-left"><?php echo e(__('MyCustom.Property Status ')); ?></p>
        <div>
          <select name="status_name" id="third" class="w-100 select">
            <option value=""><?php echo e(__('MyCustom.select option')); ?></option>
            <option value="Buy">Buy</option>
            <option value="Rent">Rent</option>
          </select>
        </div>
      </div>

      <button type="submit" class="col-1 text-center search-icon p-1 border-left">
        <i class="fa-solid fa-magnifying-glass mr-2"></i></button>
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
        <form action="<?php echo e(route('targsmsearch')); ?>" method="post">
            <?php echo csrf_field(); ?>
        <div class="d-flex div justify-content-between align-items-center mt-4">
          <select name="lname"  id="fir"  class="w-100 select-small ml-4 mt-auto mb-auto p-2" >
            <option value="select option"><?php echo e(__('MyCustom.location')); ?></option>
          </select> 
          <i class="fa-solid fa-location-dot mr-4"></i>
          <div></div>
        </div>
        <div class="d-flex mt-4">
          <div class="d-flex div justify-content-between align-items-center mr-1 w-50">
            <select name="rname"id="sec"
              class="w-100 select-small ml-3 mt-auto mb-auto p-2">
              <option value=""><?php echo e(__('MyCustom.region')); ?></option>
            </select> 
            <i class="fa-solid fa-location-crosshairs mr-4"></i>
            <div></div>
          </div>
          <div class="d-flex div justify-content-between align-items-center ml-1 w-50">
            <select name="cname"id="thi"
              class="w-100 select-small ml-3 mt-auto mb-auto p-2">
              <option value=""><?php echo e(__('MyCustom.City')); ?></option>
            </select> 
            <i class="fa-solid fa-location-crosshairs mr-4"></i>
            <div></div>
          </div>
        </div>
        <div class="d-flex div justify-content-between align-items-center mt-4">
          <select name="ptype"
            class="w-100 select-small ml-4 mt-auto mb-auto p-2">
            <option value=""><?php echo e(__('MyCustom.Property Type ')); ?></option>
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
    </form>
    </div> 
  </section>
    <section class="mt-5 mb-5">
        <div class="container-fluid">
          <h2 class="pt-5 most-searched text-center text-light mb-5 pb-3">
            <?php echo e(__('MyCustom.Congratulations, you found your target')); ?>

            <img src="<?php echo e(asset('fronted/images/line-11.svg')); ?>" style="width: 150px" alt="" />
          </h2>

          <div class="row gallery-2">
            <div class="col-sm-6">
                <img src="<?php echo e(Storage::url($result->photo )); ?>" class="img-fluid w-100 mb-4 hide" style="height: 950px;border-radius:35px;" alt="">
            </div>
            <div class="col-md-6">
                <img src="<?php echo e(Storage::url($result->photo2 )); ?>" class="img-fluid w-100 mb-4" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo3 )); ?>" class="img-fluid w-100 hide" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo4 )); ?>" class="img-fluid w-100 d-none" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo5 )); ?>" class="img-fluid w-100 d-none" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo6 )); ?>" class="img-fluid w-100 d-none" style="height: 462px;border-radius:35px;" alt="">
            </div>
            <div class="arrows">
              <i class="fa-solid fa-angle-right" id="prev"></i>
              <i class="fa-solid fa-angle-left"id="next"></i>
          </div>
          </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="d-flex justify-content-between mb-3">
                <h4 class="gold ml-4">Over View</h4>
                <p class="text-light mr-4" style="font-weight: bold">Unit Code : <?php echo e($result->unit_code); ?></p>
            </div>
            <div class="attemps mt-4 mb-4">
                <h6 class="gold mb-5 pl-4 pt-2" style="font-size: 22px"><?php echo e($result->type); ?></h6>
                <p class="text-light pl-3"><i class="fa-solid fa-location-dot mr-2 gold"> <?php echo e($result->location); ?> </i></p>
                <div class="row font p-4">
                    <div class="col p-1">
                        <p class="text-light" style="font-weight: bold" ><?php echo e($result->number_badrooms); ?><img src="<?php echo e(asset('fronted/images/icon8.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">BedRooms</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light" style="font-weight: bold" ><?php echo e($result->number_bathrooms); ?><img src="<?php echo e(asset('fronted/images/icon9.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Bathroom</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light" style="font-weight: bold" ><?php echo e($result->kitchen); ?>  <img src="<?php echo e(asset('fronted/images/icon7.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Kitchen</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light" style="font-weight: bold" ><?php echo e($result->balcony); ?> <img src="<?php echo e(asset('fronted/images/icon6.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Balcony</p>
                    </div>
                    <div class="col p-1 border-left ">
                        <p class="text-light"  ><?php echo e($result->area); ?> <img src="<?php echo e(asset('fronted/images/icon10.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Area</p>
                    </div>
                </div>
            </div>
            <h4 class="gold ml-4">More Details</h4>
            <p class="text-light mt-4 ml-4 details-description"><?php echo e($result->description); ?></p>

            <div class="d-flex justify-content-around ml-auto mr-auto mt-5 mb-5 align-items-center p-2 text-center contact" >
                <a href="https://wa.link/i5un02" class="text-dark  m-auto"><i class="fa-brands fa-whatsapp "></i></a>
                <p class="m-auto pl-2 pr-2"><?php echo e(__('MyCustom.Contact Us')); ?></p>
                <i class="fa-solid fa-phone m-auto"></i>
            </div>
        </div>

    </section>
    <section class="footer text-lg-left text-center mt-5 p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 text-center">
              <img
                src="<?php echo e(asset('fronted/images/logo.jpeg')); ?>"
                class="img-fluid w-lg-75 "
                alt="" style="border-radius:20px ;" />
              <div class="d-flex justify-content-between ml-auto mr-auto icons mt-4 mb-4">
               <a href="https://www.facebook.com/oldwolfgroupegyuae" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://wsend.co/201008105192" target="_blank"><i class="fa-brands fa-whatsapp" ></i></a>
                <a href="https://instagram.com/owg.egy?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
            <div class="col-lg-4 text-light text-center m-auto">
              <h4><?php echo e(__('MyCustom. WORKING HOURS')); ?></h4>
              <p class="d-flex justify-content-between p-1 border-bottom">
                <span> <?php echo e(__('MyCustom.Saturday - Thursday')); ?></span>
                <span>10 AM - 19 PM</span>
              </p>
              <p class="d-flex justify-content-between p-1 border-bottom">
                <span><?php echo e(__('MyCustom.Friday')); ?></span>
                <span><?php echo e(__('MyCustom.Closed')); ?></span>
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
              <h4><?php echo e(__('MyCustom.Careers')); ?></h4>
              <div class="border-bottom border-top p-1">
                <p class="mb-2">Join Our Team</p>
                <p class="m-0">HR@oldwolf.ae</p>
              </div>
              <h6 class="pt-4 pb-1 border-bottom">SUBSCRIBE NEWSLETTER</h6>
              <div class="row m-1 mt-4">
                <div class="col-8 p-2 enter-email">
                  <form action="<?php echo e(route('sub.store')); ?>" method="post">
                      <?php echo csrf_field(); ?>
                  <input type="email" placeholder="Enter your email" name="email" />
                </div>
                <button type="submit"class="col-4 p-2 subscripe">Subscripe</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="<?php echo e(asset('fronted/js/search.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/js/gallery-target.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/js/bootstrap.js')); ?>"></script>
  </body>
</html>
<?php /**PATH F:\Laravel Basics\OldWolf\resources\views/fronted/target.blade.php ENDPATH**/ ?>