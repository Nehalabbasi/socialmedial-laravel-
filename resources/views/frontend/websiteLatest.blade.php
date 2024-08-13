<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KindSoulz</title>
	<meta property="og:locale" content="en_US" />
	<meta property="fb:app_id" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:secure_url" content="" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="576" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href="css/slick.css" rel="stylesheet">
	<!-- LIBRARIES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="{{ asset('theme_assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('theme_assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('theme_assets/css/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('theme_assets/css/slick.css') }}">
</head>

<body>
    <header>
        <section class="header-sec">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-3">
                    <div class="main-logo">
                        <img src="{{ asset('theme_assets/images/logo.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search-field">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput6" placeholder="Search">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <ul class="site-icons">
                        <li> <a href="#"><i class="fa-solid fa-user-plus"></i></a> </li>
                        <li> <a href="#"><i class="fa-regular fa-comment-dots"></i></a> </li>
                        <li> <a href="#"><i class="fa-regular fa-bell"></i></a> </li>
                        <li> <a href="posts.php"> <img src="{{ asset('theme_assets/images/user-profile.png')}}" alt=""> </a> </li>
                    </ul>
                  </div>
                </div>
            </div>
        </section>
    </header>
    <div class="left-side-bar">
      <div class="user-info">
        <img src="{{ asset('theme_assets/images/user-profile.png')}}" alt="">
        <p>Noah Olivia Fernandes<br> <span>@nolivia</span></p>
      </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/boxes-shape.svg')}}" alt="">
        <a href="index.php"><p>News Feed</p></a>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/icon-new-1.svg')}}" alt="">
        <a href="user-screen-2.php"><p>Explore</p></a>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/broken-chain.svg')}}" alt="">
        <a href="kindness-chain.php"><p>Kindness Chain</p></a>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/icon-new-3.svg')}}" alt="">
        <p>Random Act</p>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/broken-chain.svg')}}" alt="">
        <a href="my-kindness-chain.php"><p>My Kindness Chain</p></a>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/icon-new-4.svg')}}" alt="">
        <a href="favorites.php"><p>Favorite</p></a>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/icon-new-5.svg')}}" alt="">
        <p>Notifications</p>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/icon-new-6.svg')}}" alt="">
        <a href="chat-screen.php"><p>Message</p></a>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/broken-chain.svg')}}" alt="">
        <p>Start New Chain</p>
       </div>
       <div class="opt-1">
        <img src="{{ asset('theme_assets/images/icon-new-7.svg')}}" alt="">
        <a href="user-screen-4.php"><p>Market Place</p></a>
       </div>
	    <div class="opt-1">
		  <i class="fa-solid fa-users"></i>
		  <a href="groups.php"><p>Groups</p></a>
		</div>
    </div>
	<main class="app-container" >

	@yield('content')


     <div class="friend-list">
        <div class="freind_suggest_heading">
            <h4>Your Freinds</h4>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/cynthia-cox.png')}}" alt="">
                <h2>Cynthia Cox</h2>
            </div>
            <div class="user_lsat_status online_status">
               <span>11min</span>
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-1.png')}}" alt="">
                <h2>Danny Quinn</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-2.png')}}" alt="">
                <h2>Morgan</h2>
            </div>
            <div class="user_lsat_status online_status">
               <span>11min</span>
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-3.png')}}" alt="">
                <h2>Stanley Burton</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-4.png')}}" alt="">
                <h2>Allen Anderson</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-5.png')}}" alt="">
                <h2>Lucas West</h2>
            </div>
            <div class="user_lsat_status online_status">
               <span>11min</span>
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-6.png')}}" alt="">
                <h2>Danny Moore</h2>
            </div>
            <div class="user_lsat_status online_status">
               <span>11min</span>
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-7.png')}}" alt="">
                <h2>Jason Gutrierrez</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-8.png')}}" alt="">
                <h2>Jesus Cooper</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-9.png')}}" alt="">
                <h2>Joshua Hunt</h2>
            </div>
            <div class="user_lsat_status online_status">
               <span>11min</span>
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-10.png')}}" alt="">
                <h2>Jimmy Maxell</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="user_profile_left">
            <div class="user_img_left">
                <img src="{{ asset('theme_assets/images/side-bar-user-4.png')}}" alt="">
                <h2>Allen Anderson</h2>
            </div>
            <div class="user_lsat_status online_status">
               <!--<span>11min</span>-->
               <img src="{{ asset('theme_assets/images/Oval-green-sign-dot.svg')}}" alt="">
            </div>
        </div>
        <div class="input_user_search">
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" placeholder="search....">
        </div>
     </div>
</main>
<script src="{{ asset('theme_assets/js/jquery.min.js') }}"></script>
<script  src="{{ asset('theme_assets/js/bootstrap.min.js') }}"></script>
<script  src="{{ asset('theme_assets/js/slick.js') }}"></script>
<!--<script  src="js/jquery.fancybox.min.js"></script>-->
<script  src="{{ asset('theme_assets/js/wow.js') }}"></script>
<script  src="{{ asset('theme_assets/js/functions.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>