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
        <a href="<?php echo e(route('LangConverter','ar')); ?>">Arabic</a>
        <a href="<?php echo e(route('LangConverter','en')); ?>">English</a>
      <nav class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand" id="brand"
          ><img
            src="<?php echo e(asset('fronted/images/logo.jpeg')); ?>"
            class="img-fluid"
            alt="" style="border-radius:5px ;"
        /></a>
        <a href="#x" data-toggle="collapse" class="navbar-toggler">
          <i class="fa-solid fa-bars navbar-toggler-icon" id="nav-icon"></i>
        </a>
        <div class="collapse navbar-collapse" id="x">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item p-1">
              <a href="<?php echo e(route('home')); ?>" class="nav-link"><?php echo e(__('MyCustom.home')); ?></a>
            </li>
            <li class="nav-item p-1">
              <a href="#" class="nav-link"><?php echo e(__('MyCustom.Property')); ?></a>
            </li>
            <li class="nav-item p-1">
              <a href="<?php echo e(route('gallery')); ?>" class="nav-link"><?php echo e(__('MyCustom.Gallery')); ?></a>
            </li>
            <li class="nav-item p-1">
              <a href="<?php echo e(route('contact')); ?>" class="nav-link active"><?php echo e(__('MyCustom.Contact ')); ?></a>
            </li>
            <li class="nav-item p-1">
              <a href="<?php echo e(route('careers')); ?>" class="nav-link"><?php echo e(__('MyCustom.Careers')); ?></a>
            </li>
          </ul>
          <a href="<?php echo e(route('search')); ?>" class="btn pl-4 pr-4 p-2 ml-3" id="btn">
            <i class="fa-solid fa-magnifying-glass mr-2"></i>Search
          </a>
        </div>
      </nav>
    </header>
  </header>
    <section class="search m-auto">
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
    </section>
    <section class="mt-5 mb-5">
        <div class="container-fluid">
          <h2 class="pt-5 most-searched text-center text-light mb-5 pb-3">
            <?php echo e(__('MyCustom.Congratulations, you found your target')); ?>

            <img src="<?php echo e(asset('fronted/images/line-11.svg')); ?>" style="width: 150px" alt="" />
          </h2>

          <div class="row gallery-2">
            <div class="col-sm-6">
                <img src="<?php echo e(Storage::url($result->photo )); ?>" class="img-fluid w-100 mb-4" style="height: 950px;border-radius:35px;" alt="">
            </div>
            <div class="col-sm-6">
                <img src="<?php echo e(Storage::url($result->photo2 )); ?>" class="img-fluid w-100 mb-4" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo3 )); ?>" class="img-fluid w-100" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo4 )); ?>" class="img-fluid w-100" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo5 )); ?>" class="img-fluid w-100" style="height: 462px;border-radius:35px;" alt="">
                <img src="<?php echo e(Storage::url($result->photo6 )); ?>" class="img-fluid w-100" style="height: 462px;border-radius:35px;" alt="">
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
                <p class="text-dark mr-4">Code : <?php echo e($result->unit_code); ?></p>
            </div>
            <div class="attemps mt-4 mb-4">
                <h6 class="gold mb-5 pl-4 pt-2"><?php echo e($result->type); ?></h6>
                <p class="text-light pl-3"><i class="fa-solid fa-location-dot mr-2 gold"> <?php echo e($result->location); ?> </i></p>
                <div class="row font p-4">
                    <div class="col p-1">
                        <p class="text-light"><?php echo e($result->number_badrooms); ?><img src="<?php echo e(asset('fronted/images/icon8.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">BedRooms</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light"><?php echo e($result->number_bathrooms); ?><img src="<?php echo e(asset('fronted/images/icon9.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Bathroom</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light"><?php echo e($result->kitchen); ?>  <img src="<?php echo e(asset('fronted/images/icon7.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Kitchen</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light"><?php echo e($result->balcony); ?> <img src="<?php echo e(asset('fronted/images/icon6.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Balcony</p>
                    </div>
                    <div class="col p-1 border-left">
                        <p class="text-light"><?php echo e($result->area); ?> <img src="<?php echo e(asset('fronted/images/icon10.jpeg')); ?>" class="img-fluid w-25" alt=""></p>
                        <p class="text-light">Area</p>
                    </div>
                </div>
            </div>
            <h4 class="gold ml-4">More Details</h4>
            <p class="text-light mt-4 ml-4 details-description"><?php echo e($result->description); ?></p>
            <a href="https://wa.link/wd5x4t">
            <div class="d-flex justify-content-around ml-auto mr-auto mt-5 mb-5 align-items-center p-2 text-center contact" >
                <i class="fa-brands fa-whatsapp m-auto"></a>
                <p class="m-auto pl-2 pr-2"><?php echo e(__('MyCustom.Contact Us')); ?></p>
                <i class="fa-solid fa-phone m-auto"></i>
            </div>
        </div>

    </section>
    <section class="footer text-lg-left text-center mt-5 p-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <img
              src="<?php echo e(asset('fronted//images/logo.jpeg')); ?>"
              class="img-fluid w-lg-75"
              alt="" style="border-radius:20px ;" />
            <div class="d-flex justify-content-between ml-auto mr-auto icons mt-4 mb-4">
              <i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-whatsapp"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
          <div class="col-lg-4 text-light text-center m-auto">
            <h4><?php echo e(__('MyCustom.WORKING HOURS')); ?></h4>
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
                <form action="<?php echo e(route('sub.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                <input type="email" placeholder="Enter your email" name="email" />
              </div>
              <div class="col-4 p-2 subscripe"><button type="submit">Subscripe</button></div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="<?php echo e(asset('fronted/js/gallery-target.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/js/jquery-3.6.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('fronted/bootstrap-4.0.0-dist/js/bootstrap.js')); ?>"></script>
  </body>
</html>
<?php /**PATH F:\Laravel Basics\OldWolf\resources\views/fronted/target.blade.php ENDPATH**/ ?>