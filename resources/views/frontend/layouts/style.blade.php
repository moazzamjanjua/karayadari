<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">



<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Karayadari</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/img/home/favicon.png') }}">
    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/frontend/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/frontend/libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/frontend/libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="/frontend/libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="/frontend/libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="/frontend/libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/reponsive.css">
    <style>
  .price-ribbon {
    background: linear-gradient(45deg, #ff6b6b, #f06595);
    color: #fff;
    padding: 5px 20px; /* Reduced padding for better height */
    position: absolute;
    ; /* Adjust the distance from the top */
   ; /* Adjust the distance from the left */
    z-index: 3;
    border-bottom-right-radius: 5px;
    font-weight: bold;
    font-size: 14px; /* Adjusted font size to match the ribbon */
    width: auto; /* Let width adjust based on content */
    height: auto; /* Let height adjust naturally */
}

.price-ribbon:before {
    position: absolute;
    content: '';
    width: 50px; /* Adjusted width */
    height:50px; /* Adjusted height */
    background: linear-gradient(45deg, #ff6b6b, #f06595);
    top: -10px; /* Adjust to align with the ribbon */
    left: -10px; /* Adjust to align with the ribbon */
    transform: rotate(45deg);
    z-index: -1;
}

.image-container, .best_image-container ,.images-container, .product-tab {
    position: relative;
    overflow: hidden;
    margin: 0 auto;
}

.image-container img, .best_image-container img , .images-container img  , .product-tab img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}
        .luxury-button-div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Full screen height */
            background-color: #f0f0f0;
        }

        .luxury-button {
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            border: none;
            border-radius: 50px;
            padding: 15px 30px;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .luxury-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .luxury-button:active {
            transform: scale(0.95);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .nav-link {
            text-decoration: none;
        }

        .image-container {
            width: 250px;
            /* Set your desired width */
            height: 250px;
            /* Set your desired height */
            overflow: hidden;
            /* Ensures that images larger than the container are cropped */
            margin: 0 auto;
            /* Center the container horizontally if needed */
        }

        .image-container img {
            width: 100%;
            /* Ensures the image takes the full width of the container */
            height: 100%;
            /* Ensures the image takes the full height of the container */
            object-fit: cover;
            /* Maintains aspect ratio without distortion, cropping the excess */
            border-radius: 10px;
            /* Optional: Adds rounded corners to images */
        }

        .best_image-container {
            width: 200px;
            /* Set your desired width */
            height: 200px;
            /* Set your desired height */
            overflow: hidden;
            /* Ensures that images larger than the container are cropped */
            margin: 0 auto;
            /* Center the container horizontally if needed */
        }


        .best_image-container img {
            width: 100%;
            /* Ensures the image takes the full width of the container */
            height: 100%;
            /* Ensures the image takes the full height of the container */
            object-fit: cover;
            /* Maintains aspect ratio without distortion, cropping the excess */
            border-radius: 10px;
            /* Optional: Adds rounded corners to images */
        }
        

        
    </style>
                    <!-- for related hostel -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl.carousel/1.3.3/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
$(document).ready(function(){
  $(".category-product-index").owlCarousel({
    items: 3,
    loop: false,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
  });

  // Next/Previous buttons
  $(".prev-btn").click(function(){
    $(".category-product-index").trigger('prev.owl.carousel');
  });
  $(".next-btn").click(function(){
    $(".category-product-index").trigger('next.owl.carousel');
  });
});
</script>




</head>