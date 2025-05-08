<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img = base_url()."resources/opus/img/";
$resources_url_opus_css = base_url()."resources/opus/css/";
$resources_url_opus_audio = base_url()."resources/opus/audio; ?>";
$resources_url_opus_js = base_url()."resources/opus/js/";
$resources_url	= "/resources/opus/ds/album_image/";

$resources_url	= base_url()."resources/aic/";
$resources_opus = base_url()."resources/opus/";
?>
<link rel="stylesheet" href="<?php echo $resources_url_opus_css; ?>custom-album-slider.css">
<script>
<!--
document.addEventListener('DOMContentLoaded', function () {
    const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (screenWidth > 1024) {
        var swiper = new Swiper('.swiper', {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: false,  // Set loop to false to prevent continuous scrolling
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Add pagination if needed to see all albums
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 5,  // 6 slides per view on larger screens
                    slidesPerGroup: 5, // Scroll by groups of 6
                    loop: false,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    }
                }
            }
        });
    } else {
        // For mobile, use the previous logic
        document.getElementById('album-container').classList.remove('swiper');
        const slides = document.querySelectorAll('.swiper-slide');
        slides.forEach(slide => {
            slide.classList.remove('swiper-slide');
        });
    }
});




//-->
</script>

        <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img;?>banner/home.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0"><span class="text-primary">Recordings</span></h3>
                    </div>

                    <!-- Start:: album container -->
                    <div id="albums-container" class="album-grid" data-swiper-grid="true" data-swiper-autoplay="true">
                        <div class="album-wrapper">
                            <?php foreach ($popular_recordings as $index => $pr) {?>
                            <div class="album-item">
                                <div class="cover cover--round scale-animation">
                                    <div class="cover__head">
                                        <ul class="cover__label d-flex">
                                            <li>
                                                <span class="badge rounded-pill bg-danger">
                                                    <i class="ri-heart-fill"></i>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="cover__options dropstart d-inline-flex ms-auto">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-favorite-id="100">Favorite</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-1.mp3" download>Download</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="/about_recording">View details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="/recording_details/more/<?php echo $pr->catalog_no; ?>" class="cover__image">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_opus;?>ds/album_image/<?php echo $pr->file_name1; ?>" alt="<?php echo $pr->album_name; ?>">
                                        </div>
                                    </a>
                                    <div class="cover__foot">
                                        <a href="/about_recording" class="cover__title text-truncate"><?php echo $pr->album_name; ?></a>
                                        <p class="cover__subtitle text-truncate">
                                            <a href="/about_artist"><?php echo $pr->artist_info; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <!-- End:: album wrapper -->
                    </div>
                    <!-- End:: album container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function() {
    var page = 1; // Start with the first page

    $('#loadBtn').on('click', function() {
        console.log("Load more button clicked."); // Log when the button is clicked
        var btn = $(this);
        btn.prop('disabled', true).text('Loading...'); // Disable the button and change text

        $.ajax({
            url: '<?php echo site_url('recordings/load_more'); ?>', // Adjust URL if needed
            type: 'POST',
            data: { page: page },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                console.log("Data received:", response); // Log the response data

                if (Array.isArray(response) && response.length > 0) {
                    var html = '';
                    $.each(response, function(index, item) {
                        html += '<div class="album-item">';
                        html += '    <div class="cover cover--round scale-animation">';
                        html += '        <div class="cover__head">';
                        html += '            <ul class="cover__label d-flex">';
                        html += '                <li>';
                        html += '                    <span class="badge rounded-pill bg-danger">';
                        html += '                        <i class="ri-heart-fill"></i>';
                        html += '                    </span>';
                        html += '                </li>';
                        html += '            </ul>';
                        html += '            <div class="cover__options dropstart d-inline-flex ms-auto">';
                        html += '                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">';
                        html += '                    <i class="ri-more-2-fill"></i>';
                        html += '                </a>';
                        html += '                <ul class="dropdown-menu dropdown-menu-sm">';
                        html += '                    <li><a class="dropdown-item" role="button" data-favorite-id="100">Favorite</a></li>';
                        html += '                    <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-1.mp3" download>Download</a></li>';
                        html += '                    <li><a class="dropdown-item" role="button">Share</a></li>';
                        html += '                    <li class="dropdown-divider"></li>';
                        html += '                    <li><a class="dropdown-item" href="/about_recording">View details</a></li>';
                        html += '                </ul>';
                        html += '            </div>';
                        html += '        </div>';
                        html += '        <a href="/recording_details/more/' + item.catalog_no + '" class="cover__image">';
                        html += '            <div class="ratio ratio-1x1">';
                        html += '                <img src="<?php echo $resources_opus;?>ds/album_image/' + item.file_name1 + '" alt="' + item.album_name + '">';
                        html += '            </div>';
                        html += '        </a>';
                        html += '        <div class="cover__foot">';
                        html += '            <a href="/about_recording" class="cover__title text-truncate">' + item.album_name + '</a>';
                        html += '            <p class="cover__subtitle text-truncate">';
                        html += '                <a href="/about_artist">' + item.artist_info + '</a>';
                        html += '            </p>';
                        html += '        </div>';
                        html += '    </div>';
                        html += '</div>';
                    });

                    console.log("Generated HTML:", html); // Log the generated HTML
                    $('#albums-container .album-wrapper').append(html); // Append new elements to the correct container
                    page++; // Increment page number
                    btn.prop('disabled', false).text('Load more'); // Re-enable the button
                } else {
                    $('#loadBtn').hide(); // Hide button if no more items to load
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX error:", status, error); // Log any errors
                btn.prop('disabled', false).text('Load more'); // Re-enable the button on error as well
            }
        });
    });
});

</script>

<div class="mt-5 text-center">
    <a href="javascript:void(0);" class="btn btn-primary" id="loadBtn">
        <div class="btn__wrap">
            <i class="ri-loader-3-fill"></i>
            <span>Load more</span>
        </div>
    </a>
</div>


                    


                </div>
                <!-- End:: section -->

            </div>
            <!-- End:: under hero -->

            <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
            <footer id="footer">
                <div class="container">
                    <div class="text-center mb-4">
                        <a href="#" class="display-5 email">Opuscore App</a>
                    </div>
                    <div class="app-btn-group pt-2">
                        <a href="#" class="btn btn-lg btn-primary">
                            <div class="btn__wrap">
                                <i class="ri-google-play-fill"></i>
                                <span class="ms-2">Google Play</span>
                            </div>
                        </a>
                        <a href="#" class="btn btn-lg btn-primary">
                            <div class="btn__wrap">
                                <i class="ri-app-store-fill"></i>
                                <span class="ms-2">App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
            </footer>
            <!-- End:: footer -->

        </main>
        <!-- End:: page content -->