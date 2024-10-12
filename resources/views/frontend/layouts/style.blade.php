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
.header-top{
    width: 100%;
    height: 20%;
    z-index: 2000; /* Higher than the welcome text */
    background-color: white; /* Ensure the header has a solid background */
    position: fixed;
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
.booked_tag{
    position: absolute;
    
    width: 80px; /* Adjusted width */
    height:80px; /* Adjusted height */
    ; /* Adjust to align with the ribbon */
    right: -92%; /* Adjust to align with the ribbon */
    z-index: -1;
}
.image-container, .best_image-container, .images-container, .product-tab {
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    transition: transform 0.3s ease-in-out; /* Smooth transition */
}

.image-container img, .best_image-container img, .images-container img, .product-tab img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth transition */
}

.image-container:hover img, .best_image-container:hover img {
    transform: scale(1.05); /* Slight zoom on hover */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Add shadow */
}

.image-container:hover, .best_image-container:hover {
    transform: scale(1.02); /* Slight zoom to the container */
}

/* Optional: For a more dynamic hover effect, you can add a filter */
.image-container:hover img, .best_image-container:hover img {
    filter: brightness(1.1); /* Brightens the image on hover */
}

.luxury-button-div {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
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
    height: 250px;
    overflow: hidden;
    margin: 0 auto;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.best_image-container {
    width: 200px;
    height: 200px;
    overflow: hidden;
    margin: 0 auto;
}

.best_image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}


        .view-all-button{
            width: 100%;
            height: 100%;
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
  var owl = $(".category-product-index");

  owl.owlCarousel({
    items: 3,
    loop: false, // Disable looping
    margin: 10,
    nav: false,
    autoplay: true, // Enable auto start
    autoplayTimeout: 3000, // Set the autoplay delay (3 seconds)
    autoplayHoverPause: true, // Pause on hover
    onTranslated: function(event) {
      // Check if the last item is reached
      if (event.item.index + event.page.size >= event.item.count) {
        // If last item reached, jump back to the start
        setTimeout(function() {
          owl.trigger('to.owl.carousel', [0, 300]);
        }, 3000); // Wait 3 seconds before resetting
      }
    }
  });

  // Next/Previous buttons
  $(".prev-btn").click(function(){
    owl.trigger('prev.owl.carousel');
  });
  $(".next-btn").click(function(){
    owl.trigger('next.owl.carousel');
  });
});
</script>

<style>
        .hostel-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 1.5rem;
            display: flex;
            flex-wrap: wrap;
        }

        .hostel-image-container {
            width: 100%;
            max-width: 300px;
            height: 200px;
            overflow: hidden;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .hostel-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hostel-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        .pagination .page-link {
            color: #007bff;
        }

        .pagination .page-link:hover {
            background-color: #0056b3;
            color: white;
        }

        .category_verified_container {
            display: inline-block;
            text-align: center;
            margin-bottom: 15px;
        }

        .categoty_hostel {
            display: block;
            font-size: 1.3rem;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            padding: 8px 16px;
            border-radius: 5px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .verified_tag {
            width: 140px;
            height: 150px;
            margin: 0 auto;
            display: block;
        }

        .hostel-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Add a deeper shadow on hover */
            transform: translateY(-5px); /* Slightly lift the card */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effect */
        }

        .hostel-card:hover .hostel-details h5 {
            color: #007bff; /* Change the title color on hover */
        }

        .hostel-card:hover .hostel-details p {
            color: #333; /* Darken the paragraph text on hover */
        }

        .hostel-card:hover .price-ribbon {
            background-color: #0056b3; /* Darken the price ribbon on hover */
        }
    </style>


<style>
    @media (max-width: 768px) {
    /* Mobile View for Navbar */
    .navbar {
        flex-direction: column; /* Stack elements vertically */
        left: 5%; /* Adjust position for smaller screens */
        width: 90%; /* Ensure navbar takes full width on mobile */
        padding: 15px;
        right: 5%; /* Add padding for better spacing */
    }

    /* Adjust form layout */
    form {
        flex-direction: column; /* Stack form elements vertically */
        gap: 15px; /* Add spacing between form elements */
    }

    /* Make dropdowns and buttons take full width */
    select, button {
        width: 100%;
    }
}

  </style>






</head>