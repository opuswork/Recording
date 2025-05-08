<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img = base_url()."resources/opus/img/";
$resources_url_opus_css = base_url()."resources/opus/css/";
$resources_url_opus_audio = base_url()."resources/opus/audio/";
$resources_url_opus_js = base_url()."resources/opus/js/";
?>
        
        
        <!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img; ?>banner/radio.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Live <span class="text-primary">Frequency</span></h3>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel swiper-carousel-button">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="5" data-swiper-grid="true" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="2"
                                    data-song-name="Shack your butty"
                                    data-song-artist="Gerrina Linda"
                                    data-song-album="Hot shot"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-2.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/2.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="2">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="2">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="2">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="2">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/2.jpg" alt="Network">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Network</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="3"
                                    data-song-name="Do it your way(Female)"
                                    data-song-artist="Zunira Willy & Nutty Nina"
                                    data-song-album="Own way"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-3.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/3.jpg">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="3">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="3">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="3">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="3">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/3.jpg" alt="Alpha Gamma">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Alpha Gamma</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="4"
                                    data-song-name="Say yes"
                                    data-song-artist="Johnny Marro"
                                    data-song-album="Say yes"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-4.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/4.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-danger">
                                                        <i class="ri-heart-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="4">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="4">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="4">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="4">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/4.jpg" alt="Leanne Hutton">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Leanne Hutton</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="5"
                                    data-song-name="Where is your letter"
                                    data-song-artist="Jina Moore & Lenisa Gory"
                                    data-song-album="Letter"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-5.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/5.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="5">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="5">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="5">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="5">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/5.jpg" alt="K S N F">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">K S N F</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="6"
                                    data-song-name="Hey not me"
                                    data-song-artist="Rasomi Pelina"
                                    data-song-album="Find soul"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-6.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/6.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="6">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="6">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="6">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="6">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/6.jpg" alt="Clay Gandy">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Clay Gandy</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                            </div>
                        </div>
                        <!-- End:: swiper -->

                        <!-- Swiper controls -->
                        <div class="swiper-button-prev btn-default rounded-pill"></div>
                        <div class="swiper-button-next btn-default rounded-pill"></div>
                    </div>
                    <!-- End:: swiper carousel -->


                    
                </div>
                <!-- End:: section -->

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Top <span class="text-primary">Radio</span></h3>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel swiper-carousel-button">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="5" data-swiper-grid="true" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="2"
                                    data-song-name="Shack your butty"
                                    data-song-artist="Gerrina Linda"
                                    data-song-album="Hot shot"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-2.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/2.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="2">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="2">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="2">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="2">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/2.jpg" alt="Network">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Network</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="3"
                                    data-song-name="Do it your way(Female)"
                                    data-song-artist="Zunira Willy & Nutty Nina"
                                    data-song-album="Own way"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-3.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/3.jpg">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="3">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="3">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="3">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="3">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/3.jpg" alt="Alpha Gamma">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Alpha Gamma</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="4"
                                    data-song-name="Say yes"
                                    data-song-artist="Johnny Marro"
                                    data-song-album="Say yes"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-4.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/4.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-danger">
                                                        <i class="ri-heart-fill"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="4">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="4">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="4">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="4">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/4.jpg" alt="Leanne Hutton">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Leanne Hutton</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="5"
                                    data-song-name="Where is your letter"
                                    data-song-artist="Jina Moore & Lenisa Gory"
                                    data-song-album="Letter"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-5.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/5.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="5">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="5">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="5">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="5">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/5.jpg" alt="K S N F">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">K S N F</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="6"
                                    data-song-name="Hey not me"
                                    data-song-artist="Rasomi Pelina"
                                    data-song-album="Find soul"
                                    data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-6.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/6.jpg">
                                        <div class="cover__head">
                                            <ul class="cover__label d-flex">
                                                <li>
                                                    <span class="badge rounded-pill bg-info">
                                                        <i class="ri-vip-crown-fill"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="6">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="6">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="6">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="6">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/6.jpg" alt="Clay Gandy">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a role="button" class="cover__title text-truncate">Clay Gandy</a>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                            </div>
                        </div>
                        <!-- End:: swiper -->

                        <!-- Swiper controls -->
                        <div class="swiper-button-prev btn-default rounded-pill"></div>
                        <div class="swiper-button-next btn-default rounded-pill"></div>
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