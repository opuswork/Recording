<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img_original = base_url()."resources/opus/img/";
$resources_url_opus_img = base_url()."resources/opus/ds/album_image/";
$resources_url_opus_css = base_url()."resources/opus/css/";
$resources_url_opus_audio = base_url()."resources/opus/ds/tracks/";
$resources_url_opus_js = base_url()."resources/opus/js/";

$resources_url	= base_url()."resources/aic/";
$resources_opus = base_url()."resources/opus/";
?>

<!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img_original; ?>banner/song.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="row"
                    data-song-id="<?php echo $morels[0]->album_code;?>"
                    data-song-name="<?php echo $morels[0]->track_title;?>"
                    data-song-artist="<?php echo $morels[0]->artist_info;?>"
                    data-song-album="<?php echo $morels[0]->album_title;?>"
                    data-song-url="<?php echo $resources_url_opus_audio.$morels[0]->album_code."/".$morels[0]->track_file;?>"
                    data-song-cover="<?php echo $resources_url_opus_img."/".$morels[0]->front_cover; ?>">
                        <div class="col-xl-3 col-md-4">
                            <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                            <div class="cover cover--round">
                                <div class="cover__image">
                                    <div class="ratio ratio-1x1">
                                        <img src="<?php echo $resources_url_opus_img."/".$morels[0]->front_cover; ?>" alt="Treasure face">
                                    </div>
                                </div>
                            </div>
                            <!-- End:: cover -->
                        </div>
                        <div class="col-1 d-none d-xl-block"></div>
                        <div class="col-md-8 mt-5 mt-md-0">
                            <div class="d-flex flex-wrap mb-2">
                                <span class="text-dark fs-4 fw-semibold pe-2"><?php echo $morels[0]->track_title;?></span>
                                <div class="dropstart d-inline-flex ms-auto">
                                    <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                        <i class="ri-more-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li><a class="dropdown-item" role="button" data-playlist-id="8">Add to playlist</a></li>
                                        <li><a class="dropdown-item" role="button" data-queue-id="8">Add to queue</a></li>
                                        <li><a class="dropdown-item" role="button" data-next-id="8">Next to play</a></li>
                                        <li><a class="dropdown-item" role="button">Share</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" role="button" data-play-id="8">Play</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                            <ul class="info-list info-list--dotted mb-3">
                                <li><?php echo $morels[0]->genre; ?></li>
                                <li>01:23</li>
                                <li>Apr 14, 2019</li>
                                <li><?php echo $morels[0]->record_company; ?></li>
                            </ul>
                            <!-- End:: info list -->
                            <div class="mb-4">
                                <p class="mb-2">Music by: <span class="text-dark fw-medium"><?php echo $morels[0]->comp_info; ?></span></p>
                                <p class="mb-2">Libretto/Poem by: <span class="text-dark fw-medium">Unknown</span></p>
                                <p class="mb-2">Featured musicians: <span class="text-dark fw-medium"><?php echo $morels[0]->artist_info; ?></span></p>
                            </div>
                            <!-- Start:: info list [[ Find at scss/components/list.scss ]] -->
                            <ul class="info-list mb-5">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <button type="button" id="play_all" class="btn btn-icon btn-primary rounded-pill" aria-label="Play" data-play-id="8">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </button>
                                        <span class="ps-2 fw-semibold">348</span>
                                    </div>
                                </li>
                                <li>
                                    <a role="button" class="text-dark d-flex align-items-center" aria-label="Favorite" data-favorite-id="1">
                                        <i class="ri-heart-line heart-empty"></i>
                                        <i class="ri-heart-fill heart-fill"></i>
                                        <span class="ps-2 fw-medium">121</span>
                                    </a>
                                </li>
                                <li>
                                    <a role="button" class="text-dark d-flex align-items-center" aria-label="Download">
                                        <i class="ri-download-2-line"></i>
                                        <span class="ps-2 fw-medium">24</span>
                                    </a>
                                </li>
                                <li>
                                    <span class="text-dark d-flex align-items-center">
                                        <i class="ri-star-fill text-warning"></i>
                                        <span class="ps-2 fw-medium">4.5</span>
                                    </span>
                                </li>
                            </ul>
                            <!-- End:: info list -->
                            <div class="mt-2">
                                <span class="d-block text-dark fs-6 fw-semibold mb-3">Description</span>
                                <?php echo $morels[0]->lyrics; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: section -->

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Related <span class="text-primary">Songs</span></h3>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel swiper-carousel-button">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="1"
                                    data-song-name="I love you mummy"
                                    data-song-artist="Arebica Luna"
                                    data-song-album="Mummy"
                                    data-song-url="audio/ringtone-1.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img_original; ?>cover/small/1.jpg">
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
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="1">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="1">Add to playlist</a></li>
                                                    <li><a class="dropdown-item" role="button" data-queue-id="1">Add to queue</a></li>
                                                    <li><a class="dropdown-item" role="button" data-next-id="1">Next to play</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" role="button" data-play-id="1">Play</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img_original; ?>cover/large/1.jpg" alt="I love you mummy">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="1">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="song-details.html" class="cover__title text-truncate">I love you mummy</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Arebica Luna</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation" 
                                    data-song-id="2"
                                    data-song-name="Shack your butty"
                                    data-song-artist="Gerrina Linda"
                                    data-song-album="Hot shot"
                                    data-song-url="audio/ringtone-2.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img_original; ?>cover/small/2.jpg">
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
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="2">Add to playlist</a></li>
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
                                                <img src="<?php echo $resources_url_opus_img_original; ?>cover/large/2.jpg" alt="Shack your butty">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="song-details.html" class="cover__title text-truncate">Shack your butty</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Gerrina Linda</a>
                                            </p>
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
                                    data-song-url="audio/ringtone-3.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img_original; ?>cover/small/3.jpg">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="3">Favorite</a></li>
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="3">Add to playlist</a></li>
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
                                                <img src="<?php echo $resources_url_opus_img_original; ?>cover/large/3.jpg" alt="Do it your way(Female)">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="song-details.html" class="cover__title text-truncate">Do it your way(Female)</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Zunira Willy</a>,
                                                <a href="artist-details.html">Nutty Nina</a>
                                            </p>
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
                                    data-song-url="audio/ringtone-4.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img_original; ?>cover/small/4.jpg">
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
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="4">Add to playlist</a></li>
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
                                                <img src="<?php echo $resources_url_opus_img_original; ?>cover/large/4.jpg" alt="Say yes">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="song-details.html" class="cover__title text-truncate">Say yes</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Johnny Marro</a>
                                            </p>
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
                                    data-song-url="audio/ringtone-5.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img_original; ?>cover/small/5.jpg">
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
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="5">Add to playlist</a></li>
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
                                                <img src="<?php echo $resources_url_opus_img_original; ?>cover/large/5.jpg" alt="Where is your letter">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="song-details.html" class="cover__title text-truncate">Where is your letter</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Jina Moore</a>,
                                                <a href="artist-details.html">Lenisa Gory</a>
                                            </p>
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
                                    data-song-url="audio/ringtone-6.mp3"
                                    data-song-cover="<?php echo $resources_url_opus_img_original; ?>cover/small/6.jpg">
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
                                                    <li><a class="dropdown-item" role="button" data-playlist-id="6">Add to playlist</a></li>
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
                                                <img src="<?php echo $resources_url_opus_img_original; ?>cover/large/6.jpg" alt="Hey not me">
                                            </div>
                                            <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6">
                                                <i class="ri-play-fill icon-play"></i>
                                                <i class="ri-pause-fill icon-pause"></i>
                                            </button>
                                        </div>
                                        <div class="cover__foot">
                                            <a href="song-details.html" class="cover__title text-truncate">Hey not me</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Rasomi Pelina</a>
                                            </p>
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
                        <h3 class="mb-0">Comments</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <form action="#" class="row mb-5">
                                <div class="col-12 mb-3 d-flex align-items-center">
                                    <span class="form-label mb-0">Ratings:</span>
                                    <div class="ps-2">
                                        <select class="form-select" style="min-width: 100px;" aria-label="Select ratings">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Full name">
                                </div>
                                <div class="col-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Email ID">
                                </div>
                                <div class="col-12 mb-4">
                                    <textarea name="comment" id="comment" cols="30" rows="4" class="form-control" placeholder="Write your comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary" style="min-width: 160px;">Submit</button>
                                </div>
                            </form>
                            <div class="avatar avatar--lg align-items-start">
                                <div class="avatar__image">
                                    <img src="<?php echo $resources_url_opus_img_original; ?>users/thumb.jpg" alt="user">
                                </div>
                                <div class="avatar__content">
                                    <span class="avatar__title mb-1">Androws Kinny</span>
                                    <span class="avatar__subtitle mb-2">Apr 22, 2019</span>
                                    <div class="text-warning d-flex mb-1">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vel necessitatibus suscipit dicta quasi velit ratione nemo, voluptatum debitis cum sit quod dolor pariatur laudantium cumque.</p>
                                    <a href="javascript:void(0);" class="btn btn-link">
                                        <div class="btn__wrap">
                                            <i class="ri-reply-line fs-6"></i>
                                            <span>Reply</span>
                                        </div>
                                    </a>
                                    <div class="avatar avatar--lg align-items-start mt-4">
                                        <div class="avatar__image">
                                            <img src="<?php echo $resources_url_opus_img_original; ?>users/thumb.jpg" alt="user">
                                        </div>
                                        <div class="avatar__content">
                                            <span class="avatar__title">Androws Kinny</span>
                                            <span class="avatar__subtitle mb-2">Apr 23, 2019</span>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vel necessitatibus suscipit dicta quasi velit ratione nemo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="avatar avatar--lg align-items-start mt-4">
                                <div class="avatar__image">
                                    <img src="<?php echo $resources_url_opus_img_original; ?>users/thumb.jpg" alt="user">
                                </div>
                                <div class="avatar__content">
                                    <span class="avatar__title mb-1">Androws Kinny</span>
                                    <span class="avatar__subtitle mb-2">Apr 16, 2019</span>
                                    <div class="text-warning d-flex mb-1">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vel necessitatibus suscipit dicta quasi velit ratione nemo, voluptatum debitis cum sit quod dolor pariatur laudantium cumque.</p>
                                    <a href="javascript:void(0);" class="btn btn-link">
                                        <div class="btn__wrap">
                                            <i class="ri-reply-line fs-6"></i>
                                            <span>Reply</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4"></div>
                    </div>
                </div>
                <!-- End:: section -->

            </div>
            <!-- End:: under hero -->

            <!-- Start:: footer [[ Find at scss/framework/footer.scss ]] -->
            <footer id="footer">
                <div class="container">
                    <div class="text-center mb-4">
                        <a href="mailto:aiopus@opuscore.net" class="display-5 email">opuscore apps</a>
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