@include('frontend.layouts.style')

<body id="product-detail">
@include('frontend.layouts.header')
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- CSS -->
<style>
    /* Style for Read More Reviews Button */
#read-more-reviews {
    font-size: 14px;
    padding: 5px 15px;
    border-radius: 5px;
}

/* Style for Larger Rating Stars */
.ratings input[type="radio"] + label.full {
    font-size: 24px; /* Adjust size as needed */
    margin-right: 5px;
    color: #FFD700;
}

/* Optional: Add some hover effects */
#read-more-reviews:hover {
    background-color: #0056b3;
    color: white;
}

       
  .star-content {
    display: flex;
}

.star {
    width: 20px;
    height: 20px;
    background: url('/path-to-empty-star-icon.png') no-repeat;
    background-size: contain;
}

.star.filled {
    background: url('/path-to-filled-star-icon.png') no-repeat;
    background-size: contain;
}
.best_hostels{
    border: 2px solid #e0e0e0; 
    padding: 10px;
    border-radius: 12px; 
    background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
}
                                                        
    .hostel-details-container {
        border: 2px solid #e0e0e0;
        padding: 20px;
        border-radius: 12px;
        max-width: 600px;
        margin: 30px auto;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }
    .facility-group {
        margin-bottom: 15px;
    }
    p {
        font-size: 16px;
        margin: 5px 0;
        color: #333;
    }
    p span {
        
    }
    .category-name {
        font-size: 18px;
        color: #555;
    }
    .hostel-address, .hostel-location {
        color: #777;
    }
    .hostel-detail {
        
        color: #444;
    }
    .facility-group p::before {
        content: "• ";
        color: #007bff;
         
    }


    .review{
        padding: 15px;
         border: 2px solid #e0e0e0; /* Light gray border */
    border-radius: 12px; /* Smooth rounded corners */
    background-color: #f9f9f9; /* Soft background color */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
    transition: box-shadow 0.3s ease; /* Smooth hover effect */
    }

    .room-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    padding: 15px;
    border: 2px solid #e0e0e0; /* Light gray border */
    border-radius: 12px; /* Smooth rounded corners */
    background-color: #f9f9f9; /* Soft background color */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
    transition: box-shadow 0.3s ease; /* Smooth hover effect */
    height: 200px; /* Fixed height for each row */
}

.room-row:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Darker shadow on hover */
}

.room-image {
    width: 30%; /* Image takes left 30% of the row */
    height: 100%; /* Match the height of the row */
    position: relative; /* Required for the ribbon positioning */
    overflow: hidden; /* Ensures the image does not overflow */
}
.fa-star {
    color: #ccc; /* Grey color for unfilled stars */
}

.fa-star.checked {
    color: #ffc107; /* Yellow color for filled stars */
}


.room-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image covers the container without distortion */
    display: block; /* Removes bottom space due to inline-block nature */
    border-radius: 8px; /* Rounded corners for images */
}

.room-description {
    width: 50%; /* Description takes right 50% of the row */
    padding-left: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Vertically center the description */
}

.room-description h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.room-description p {
    margin-bottom: 8px;
}

.room-rows-container {
    display: flex;
    flex-direction: column;
    max-height: 400px; /* Adjust based on your design */
    overflow-y: auto;
}

.carousel-control-prev, .carousel-control-next {
    width: 5%;
}

.carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: blue; /* Set the background color to blue */
    border-radius: 50%; /* Make the background a circle */
    padding: 10px; /* Add some padding to make the circle larger */
}

.carousel-control-prev, .carousel-control-next {
    opacity: 1; /* Ensure the buttons are fully visible */
}



.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}


</style>
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                       
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                        

                                        <!-- best hostels -->
                                        <div class="best_hostels">
                                        <div class="title-block">
    Best Hostels
</div>
<div class="product-content tab-content">
    <div class="row">
        @foreach($bestHostels as $hostel)
            <div class="item col-md-12">
                <div class="product-miniature js-product-miniature item-one first-item d-flex">
                    <!-- Updated IDs and Names from Code 1 -->
                    <div class="best_image-container border">
                        <div class="price-ribbon">
                            {{$hostel->hostel_price}} Rs / month
                        </div>
                        <a href="{{ route('hostel-detail.show', $hostel->slug) }}">
                            <img  src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="img">
                        </a>
                    </div>
                    <div class="product-description">
                        <div class="product-groups">
                            <div class="product-title">
                                <a href="{{ route('hostel-detail.show', $hostel->slug) }}">{{ $hostel->hostel_name }}</a>
                            </div>
                            <div class="rating">
                                <div class="star-content">
                                    @for($i = 0; $i < 5; $i++)
                                        <div class="star{{ $i < $hostel->rating ? ' filled' : '' }}"></div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>



                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
                                            <div class="title-block">
                                                Populer Tags
                                            </div>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    <li>
                                                        <a href="#" title="Show products matching tag Hot Trend">HCozy Atmosphere</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Jewelry">Warm Lighting</a>
                                                    </li>

                                                    <li>
                                                        <a href="man.html" title="Show products matching tag Man">Rustic Decor</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Party">Reading Nook</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Winter">Air Cooler Room</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9">
                                        <div class="main-product-detail">
                                            <h2>{{$hostel->hostel_name}}</h2>

                                            <div class="product-single row">
                                                
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">

                                                        <div class="price-ribbon">
                                                                        {{$hostel->hostel_price}} Rs / month
                                                                    </div>
                                                                    
                                                        <div class="js-qv-mask mask tab-content border" style="height: 300px; width: 350px; border-radius: 5px; overflow: hidden;">
    <div id="hostel_front_image" class="tab-pane fade active in show" style="height: 100%; width: 100%; object-fit: cover;">
        <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="img" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div id="hostel_video" class="tab-pane fade" style="height: 100%; width: 100%;">
   <video controls style="width: 100%; height: 100%; object-fit: cover;">
    <source src="{{ asset('storage/hostel_videos/' . $hostel->hostel_video) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>

    </div>


                                                                
                                                               
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">
                                                                <li class=" active col">
                                                                    <a href="#hostel_front_image" data-toggle="tab"  class="active show">

                                                                    <div class="price-ribbon">
                                                                        {{$hostel->hostel_price}} Rs / month
                                                                    </div>

                                                                    <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="img" style="width: 100%; height: 100px; object-fit: cover;">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#hostel_video" data-toggle="tab">
                                                                        <img src="/frontend/img/product/2.jpg" alt="vidio" style="width: 100%; height: 100px; object-fit: cover;">
                                                                    </a>
                                                                </li>
                                                                
                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">

                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        
                                                    
                                                        <div class="d-flex2 has-border">
                                                        <div class="facility-group">
                                                         {{ $hostel->hostel_detail }}
                                                       </div>
                                                        </div>
                                                        <div class="rating-comment has-border d-flex">
                                                            <div class="review-description d-flex">
                                                            <span style="font-size: medium;">RATING</span>
                                                            <div class="rating">
                                                            
        
    </div>
    <span style="font-size: medium;">{{ $reviews->avg('rating')}}(/5)</span>
</div>
                                                            <div class="read after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-commenting-o color" aria-hidden="true" ></i>
                                                                    <span style="font-size: medium;">READ REVIEWS ({{$reviews->count();}})</span>
                                                                </a>
                                                            </div>
                                                          
                                                            <div class="btn-group">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-share"></i>
                                                                    <span style="font-size: medium;">Share</span>
                                                                </a>
                                                            </div>

                                                            
                                                        </div>
                                                        
                                                        <div class="hostel-details-container">
                                                           <h2 >Hostel Details</h2> 
    <div class="facility-group">
        <p class="category-name">Category: <span>{{ $hostel->category_name }}</span></p>
        <p class="hostel-address">Address: <span>{{ $hostel->hostel_address }}, {{ $hostel->city }}</span></p>
        <p class="hostel-location">Location: <span>{{ $hostel->hostel_location }}</span></p>
        <p class="hostel-detail">Detail:{{ $hostel->hostel_detail }}</p>
    </div>
    
    <div class="facility-group">
        <p>Capacity: <span>{{ $hostel->capacity }} people</span></p>
        <p>Number of Rooms: <span>{{ $hostel->num_rooms }}</span></p>
        <p>Price: <span>Rs. {{ $hostel->hostel_price }}</span></p>
        <p>Email: <span>{{ $hostel->email }}</span></p>
    </div>
    
    <div class="facility-group">
        <p>Wi-Fi: <span>{{ $hostel->wifi ? 'Available' : 'Not Available' }}</span></p>
        <p>Security: <span>{{ $hostel->security ? 'Available' : 'Not Available' }}</span></p>
        <p>Water Supply: <span>{{ $hostel->water_supply ? 'Available' : 'Not Available' }}</span></p>
    </div>
</div>



                                                    </div>
                                                </div>
                                            </div>

                                            
											
                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                    <a data-toggle="tab" href="#review" class="active show">Reviews ({{$reviews->count();}})</a>
                                                    </li>
                                                    
                                                    <li>
                                                    <a data-toggle="tab" href="#rooms" >Rooms ({{$hostel->rooms->count();}})</a>
                                                        
                                                    </li>
                                                </ul>
												
                                                <div class="tab-content">
                                                <div id="review" class="tab-pane fade in active show">
                                                <div class="spr-form">
    <div class="user-comment">
        <div class="reviews-section">
            @if($reviews->isNotEmpty())
                @foreach($reviews->take(4) as $review) <!-- Show only the first 4 reviews initially -->
                    <div class="spr-review">
                        <div class="spr-review-header">
                            <span class="spr-review-header-byline">
                                {{ $review->user->name }} - {{ $review->created_at->format('d M Y') }}
                            </span>
                            <div class="rating">
                                <div class="star-content">
                                    @for($i = 0; $i < 5; $i++)
                                        <span class="fa fa-star{{ $i < $review->rating ? ' checked' : '' }}"></span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="spr-review-content">
                            <p>{{ $review->review }}</p>
                        </div>
                    </div>
                @endforeach

                <!-- Hidden Reviews -->
                <div id="more-reviews" style="display: none;">
                    @foreach($reviews->skip(4) as $review) <!-- The remaining reviews -->
                        <div class="spr-review">
                            <div class="spr-review-header">
                                <span class="spr-review-header-byline">
                                    {{ $review->user->name }} - {{ $review->created_at->format('d M Y') }}
                                </span>
                                <div class="rating">
                                    <div class="star-content">
                                        @for($i = 0; $i < 5; $i++)
                                            <span class="fa fa-star{{ $i < $review->rating ? ' checked' : '' }}"></span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="spr-review-content">
                                <p>{{ $review->review }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Read More Button -->
                @if($reviews->count() > 4)
                    <button id="show-more-reviews" class="btn btn-primary">Read More Reviews</button>
                @endif
            @else
                <p>No reviews yet. Be the first to write one!</p>
            @endif
        </div>
    </div>
</div>

<div class="reviews-section">
                                                         
                                                      
<form id="new-review-form" method="POST" action="{{ route('reviews.store', $hostel->id) }}" class="new-review-form">
@csrf
        
        <h3 class="spr-form-title">Write a Review</h3>

        <!-- Ratings -->
        <fieldset>
            <div class="spr-form-review-rating">
                <label class="spr-form-label">Your Rating</label>
                <fieldset class="ratings">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                    <input type="radio" id="star4" name="rating" value="4" />
                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                    <input type="radio" id="star3" name="rating" value="3" />
                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                    <input type="radio" id="star2" name="rating" value="2" />
                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                    <input type="radio" id="star1" name="rating" value="1" />
                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                </fieldset>
            </div>
        </fieldset>

        <!-- Review Text -->
        <fieldset class="spr-form-contact">
            <div class="spr-form-contact-name">
                <textarea name="review" class="spr-form-input-textarea form-control" placeholder="Write your comments here" required></textarea>
            </div>
        </fieldset>
<br>
        <!-- Submit Button -->
        <div class="submit">
            <button type="submit" class="btn btn-default">Submit Review</button>
        </div>
    </form>

    <!-- Success Message -->
    @if(session('success'))
        <div id="success-message">
            <p>{{ session('success') }}</p>
        </div>
    @endif
</div>

                                                    </div>
                                                    
                                                    <div id="rooms" class="tab-pane fade">
                                                    <div class="room-cards mt-5">
    @if($hostel && $hostel->rooms && !$hostel->rooms->isEmpty())
        <div class="room-rows-container">
            @foreach($hostel->rooms as $room)
                <div class="room-row">
                    @php
                        $images = json_decode($room->room_images, true);
                    @endphp
                    <div class="room-image">
                        @if($images && is_array($images) && count($images) > 0)
                            <div id="carousel-{{ $room->id }}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach($images as $index => $image)
                                        <li data-target="#carousel-{{ $room->id }}" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">


                                <div class="price-ribbon">
                                                                        {{$hostel->hostel_price}} Rs / month
                                                                    </div>


                                    @foreach($images as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/room_images/' . $image) }}" class="d-block w-100" alt="Room Image">
                                            <div class="ribbon"></div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carousel-{{ $room->id }}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-{{ $room->id }}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                    <div class="room-description">
                        <h2 class="room-title">{{ $room->room_type }}</h2>
                        <p class="room-size">Size: {{ $room->room_size }}</p>
                        <p class="room-detail">{{ $room->room_detail }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No rooms available for this hostel.</p>
    @endif
</div>




</div>



													
                                                  
                                                    <div id="tag" class="tab-pane fade in">
                                                        <p>Warm lighting, Wooden floors, Plush armchair, Large window, Sheer curtains, Bookshelves, Novels, Trinkets, Rustic coffee table, Steaming tea, Magazines, Vanilla scent, Cinnamon scent, Welcoming atmosphere, Peaceful.
                                                        </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- related hostels -->

                                            <style>
                                                /* Main Div Border Styling */
.related {
    border: 2px solid #ddd;
    border-radius: 8px;
    padding: 16px;
    margin: 20px 0;
    background-color: #f9f9f9;
    position: relative;
}



/* Navigation Buttons Styling */
.navigation-buttons {
    display: flex;
    justify-content: space-between;

}

.prev-btn, .next-btn {
    border: 1px solid #007bff;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    padding: 8px 16px;
    cursor: pointer;
    
}

.prev-btn:hover, .next-btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
                                            </style>

                                          


<div class="related">
    <div class="title-tab-content d-flex justify-content-between align-items-center nav-tabs">
        <div class="title-product">
            <h2>Related Hostels</h2>
        </div>
        <!-- Next/Previous buttons -->
        <div class="navigation-buttons">
            <button class="prev-btn">
                <i > Previous</i> <!-- Font Awesome icon for Previous -->
            </button>
            <button class="next-btn">
                <i >Next</i> <!-- Font Awesome icon for Next -->
            </button>
        </div>
    </div>

    <div class="section related-hostels col-lg-12 col-xs-12">
        <div class="row">
            <div class="category-product-index owl-carousel owl-theme">
                @foreach($relatedHostels as $hostel)
                    <div class="item text-center">
                        <div class="product-miniature first-item js-product-miniature item-one">
                            <div class="image-container">
                                <div class="price-ribbon">
                                    {{$hostel->hostel_price}} Rs / month
                                </div>
                                <a href="{{ route('hostel-detail.show', $hostel->slug) }}">
                                    <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="img">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-groups">
                                    <div class="product-title">
                                        <a href="{{ route('hostel-detail.show', $hostel->slug) }}">{{ $hostel->hostel_name }}</a>
                                    </div>
                                    <div class="rating">
                                        <div class="star-content">
                                            @for($i = 0; $i < 5; $i++)
                                                <div class="star{{ $i < $hostel->rating ? ' filled' : '' }}"></div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include this at the bottom of your main layout -->
     <!-- Check if login_required flag exists and show modal -->

@include('popups.login-register-popup')
<script>

document.addEventListener('DOMContentLoaded', function () {
    const reviewForm = document.getElementById('new-review-form');

    reviewForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(reviewForm);

        fetch(reviewForm.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json',
            },
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.login_required) {
                // Show the login modal
                $('#loginModal').modal('show');
            } else if (data.success) {
                // Show a SweetAlert2 success popup
                Swal.fire({
                    icon: 'success',
                    title: 'Review Submitted!',
                    text: 'Your review has been submitted successfully.',
                    showConfirmButton: false,
                    timer: 2000 // Popup will automatically close after 2 seconds
                }).then(() => {
                    // Reload the page after the popup is closed
                    location.reload();
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const showMoreButton = document.getElementById('show-more-reviews');
    const moreReviews = document.getElementById('more-reviews');

    if (showMoreButton) {
        showMoreButton.addEventListener('click', function () {
            // Show the hidden reviews
            moreReviews.style.display = 'block';

            // Optionally, scroll to the newly revealed reviews
            moreReviews.scrollIntoView({ behavior: 'smooth' });

            // Hide the "Read More" button after reviews are shown
            showMoreButton.style.display = 'none';
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const showMoreButton = document.getElementById('show-more-reviews');
    const moreReviews = document.getElementById('more-reviews');

    if (showMoreButton) {
        showMoreButton.addEventListener('click', function () {
            // Show the hidden reviews
            moreReviews.style.display = 'block';

            // Optionally, scroll to the newly revealed reviews
            moreReviews.scrollIntoView({ behavior: 'smooth' });

            // Hide the "Read More" button after reviews are shown
            showMoreButton.style.display = 'none';
        });
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const showMoreButton = document.getElementById('show-more-reviews');
    const moreReviews = document.getElementById('more-reviews');

    if (showMoreButton) {
        showMoreButton.addEventListener('click', function () {
            // Show the hidden reviews
            moreReviews.style.display = 'block';

            // Optionally, scroll to the newly revealed reviews
            moreReviews.scrollIntoView({ behavior: 'smooth' });

            // Hide the "Read More" button after reviews are shown
            showMoreButton.style.display = 'none';
        });
    }
});

</script>


    @include('frontend.layouts.footer')