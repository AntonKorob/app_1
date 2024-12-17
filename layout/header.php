<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <title><?php if (isset($title)) {echo $title;}
            else {echo "My Website";} ?></title>
  </head>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  
  <div class="col-md-2">
    <a href="/" class=" link-body-emphasis text-decoration-none ">
    <img class="m-4" src="../img/logo_1.png" alt="www" width="72" height="57">
    </a>
  </div>
  <ul class="nav col-12 col-md-auto ">
      
        <a href="tel:+7 (383) 222-55-00" class="text-black text-decoration-none mt-3 pe-5">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.65387 1.32849C3.40343 1.00649 2.92745 0.976861 2.639 1.26531L1.60508 2.29923C1.1216 2.78271 0.94387 3.46766 1.1551 4.06847C2.00338 6.48124 3.39215 8.74671 5.32272 10.6773C7.25329 12.6078 9.51876 13.9966 11.9315 14.8449C12.5323 15.0561 13.2173 14.8784 13.7008 14.3949L14.7347 13.361C15.0231 13.0726 14.9935 12.5966 14.6715 12.3461L12.3653 10.5524C12.2008 10.4245 11.9866 10.3793 11.7845 10.4298L9.59541 10.9771C9.00082 11.1257 8.37183 10.9515 7.93845 10.5181L5.48187 8.06155C5.04849 7.62817 4.87427 6.99919 5.02292 6.40459L5.57019 4.21553C5.62073 4.01336 5.57552 3.79918 5.44758 3.63468L3.65387 1.32849ZM1.88477 0.511076C2.62689 -0.231039 3.8515 -0.154797 4.49583 0.673634L6.28954 2.97983C6.6187 3.40304 6.73502 3.95409 6.60498 4.47423L6.05772 6.66329C5.99994 6.8944 6.06766 7.13888 6.2361 7.30732L8.69268 9.7639C8.86113 9.93235 9.1056 10.0001 9.33671 9.94229L11.5258 9.39502C12.0459 9.26499 12.597 9.3813 13.0202 9.71047L15.3264 11.5042C16.1548 12.1485 16.231 13.3731 15.4889 14.1152L14.455 15.1492C13.7153 15.8889 12.6089 16.2137 11.5778 15.8512C9.01754 14.9511 6.61438 13.4774 4.56849 11.4315C2.5226 9.38562 1.04895 6.98246 0.148838 4.42225C-0.213682 3.39112 0.11113 2.28472 0.85085 1.545L1.88477 0.511076Z" fill="#0C54A0"></path>
          </svg>
          <span>+7 (383) 222-55-00</span>
        </a>
        
        <li><a href="../pages/home.php" class="nav-link px-2 link-secondary">Home</a></li>
      
        <li><a href="../pages/features.php" class="nav-link px-2">Features</a></li>
        <li><a href="../pages/pricing.php" class="nav-link px-2">Pricing</a></li>
        <li><a href="../pages/faqs.php" class="nav-link px-2">FAQs</a></li>
        <li><a href="../pages/about.php" class="nav-link px-2">About</a></li>
      </ul>
      
      <div class="col-md-3 text-end me-3">
        <button type="button" class="btn btn-outline-primary me-2"><a href="../pages/login.php" class="nav-link px-2">Login</a></button>
        <button type="button" class="btn btn-primary"><a href="../pages/sign_up.php" class="nav-link px-2">Sign-up</a></button>
      </div>
    </header>
</div>
<body>