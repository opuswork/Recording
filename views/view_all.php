<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img_original = base_url()."resources/opus/img/";
$resources_url_opus_img = base_url()."resources/opus/ds/album_image/";
$resources_url_opus_css = base_url()."resources/opus/css/";
$resources_url_opus_audio = base_url()."resources/opus/ds/tracks/";
$resources_url_opus_js = base_url()."resources/opus/js/";
$resources_url_song_slug = base_url()."song/more/";

$resources_url	= base_url()."resources/aic/";
$resources_opus = base_url()."resources/opus/";
?>
	
	
        <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img_original; ?>banner/home.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <div class="flex-grow-1">
                            <span class="section__subtitle">Grammy Award Winning Recordings</span>
                            <h3 class="mb-0">Top Track of <span class="text-primary">Each</span></h3>
                        </div>
                        <a href="./View_all" class="btn btn-link">View All</a>
                    </div>
                    
                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] 
                    <div class="swiper-carousel swiper-carousel-button">-->
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="5" data-swiper-grid="true" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
<?php
        
	foreach ($top_track_all_recordings as $ttr) {
?>                                
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="<?php echo $ttr->album_code;?>"
                                    data-song-name="<?php echo $ttr->track_title;?>"
                                    data-song-artist="<?php echo $ttr->artist_info; ?>"
                                    data-song-album="<?php echo $ttr->album_name; ?>"
                                    data-song-slug="<?php echo $resources_url_song_slug.$ttr->song_slug;?>"
                                    data-song-url="<?php echo $resources_url_opus_audio.$ttr->album_code."/".$ttr->track_file;?>.m4a"
                                    data-song-cover="<?php echo $resources_url_opus_img.$ttr->album_cover;?>">
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
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="<?php echo $ttr->album_code;?>">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="<?php echo $ttr->album_code;?>">Add to playlist</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="<?php echo $ttr->album_code;?>">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="<?php echo $ttr->album_code;?>">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="<?php echo $ttr->album_code;?>">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img;?><?php echo $ttr->album_cover;?>" alt="<?php echo $ttr->album_name; ?>">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="<?php echo $ttr->album_code;?>">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="<?php echo $resources_url_song_slug.$ttr->song_slug;?>" title="<?php echo $ttr->track_title;?>" class="cover__title text-truncate"><?php echo $ttr->track_title;?></a>
                                            <p class="cover__subtitle text-truncate">
                                                <a title="<?php echo $ttr->artist_info; ?>"><?php echo $ttr->artist_info; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
<?php
	}
?>

                            </div>
                        </div>
                        <!-- End:: swiper -->

                    </div>
                    <!-- End:: swiper carousel -->

                </div>
                <!-- End:: section -->

            </div>
            <!-- End:: under hero -->

            <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
            <footer id="footer">
                <div class="container">
                    <div class="text-center mb-4">
                        <a class="display-5 email">opuscore</a>
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

