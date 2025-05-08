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
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img; ?>banner/home.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Discover <span class="text-primary">Genres</span></h3>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="4" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=v&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/1.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Voice</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=ky&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/2.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Keyboard</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=st&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/3.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">String</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=wd&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/4.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Woodwind</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=br&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/5.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Brass</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=per&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/6.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Percussion</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=ch&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img; ?>background/horizontal/6.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Chamber Music</span>
                                            </div>
                                        </a>
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
                        <?php if ($this->input->get('sub') == "v" or $this->input->get('sub') == "") { // sub is voice or nothing
                            echo ("<h3 class=\"mb-0\">Voice</h3>");
                        }elseif ($this->input->get('sub') == "st") { // sub is string
                            echo ("<h3 class=\"mb-0\">String</h3>");
                        }elseif ($this->input->get('sub') == "ky") { // sub is keyboard
                            echo ("<h3 class=\"mb-0\">Keyboard</h3>");
                        }elseif ($this->input->get('sub') == "wd") {
                            echo ("<h3 class=\"mb-0\">Woodwind</h3>");
                        }elseif ($this->input->get('sub') == "br") {
                            echo ("<h3 class=\"mb-0\">Brass</h3>");
                        }elseif ($this->input->get('sub') == "per") {
                            echo ("<h3 class=\"mb-0\">Percussion</h3>");
                        }elseif ($this->input->get('sub') == "ch") {
                            echo ("<h3 class=\"mb-0\">Chamber Music</h3>");
                        }
                        ?>
                    </div>
                    <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                    <div class="list">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="list__item" 
                                data-song-id="1"
                                data-song-name="I love you mummy"
                                data-song-artist="Arebica Luna"
                                data-song-album="Mummy"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-1.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/1.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/1.jpg" alt="I love you mummy">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="1" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">I love you mummy</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Arebica Luna</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="1">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>01:14</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="1">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="1">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="1">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="1">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="2"
                                data-song-name="Shack your butty"
                                data-song-artist="Gerrina Linda"
                                data-song-album="Hot shot"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-2.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/2.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/2.jpg" alt="Shack your butty">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Shack your butty</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Gerrina Linda</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="2">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>03:24</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="2">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="2">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="2">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="2">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="3"
                                data-song-name="Do it your way(Female)"
                                data-song-artist="Zunira Willy & Nutty Nina"
                                data-song-album="Own way"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-3.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/3.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/3.jpg" alt="Do it your way(Female)">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="3" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Do it your way(Female)</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Zunira Willy & Nutty Nina</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="3">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>01:41</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="3">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="3">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="3">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="3">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="4"
                                data-song-name="Say yes"
                                data-song-artist="Johnny Marro"
                                data-song-album="Say yes"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-4.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/4.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/4.jpg" alt="Say yes">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="4" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Say yes</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Johnny Marro</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">                                       
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="4">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>02:20</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="4">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="4">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="4">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="4">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="5"
                                data-song-name="Where is your letter"
                                data-song-artist="Jina Moore & Lenisa Gory"
                                data-song-album="Letter"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-5.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/5.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/5.jpg" alt="Where is your letter">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="5" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Where is your letter</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Jina Moore & Lenisa Gory</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">  
                                        <li>
                                            <span class="badge rounded-pill bg-info">
                                                <i class="ri-vip-crown-fill"></i>
                                            </span>
                                        </li>                                          
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="5">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>02:36</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="5">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="5">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="5">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="5">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="list__item"
                                data-song-id="6"
                                data-song-name="Hey not me"
                                data-song-artist="Rasomi Pelina"
                                data-song-album="Find soul"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-6.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/6.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/6.jpg" alt="Hey not me">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="6" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Hey not me</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Rasomi Pelina</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">                                        
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="6">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>03:47</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="6">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="6">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="6">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="6">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="7"
                                data-song-name="Deep inside"
                                data-song-artist="Pimila Holliwy"
                                data-song-album="Deep inside"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-7.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/7.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/7.jpg" alt="Deep inside">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="7" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Deep inside</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Pimila Holliwy</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">    
                                        <li>
                                            <span class="badge rounded-pill bg-info">
                                                <i class="ri-vip-crown-fill"></i>
                                            </span>
                                        </li>                                        
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="7">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>01:04</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="7">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="7">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="7">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="7">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="8"
                                data-song-name="Sadness inside"
                                data-song-artist="Karen Jennings"
                                data-song-album="Sadness"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-8.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/8.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/8.jpg" alt="Sadness">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="8" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Sadness</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Karen Jennings</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">    
                                        <li>
                                            <span class="badge rounded-pill bg-info">
                                                <i class="ri-vip-crown-fill"></i>
                                            </span>
                                        </li>                                        
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="8">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>04:43</li>
                                        <li class="dropstart d-inline-flex">
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
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="9"
                                data-song-name="Electric wave"
                                data-song-artist="Lenisa Gory"
                                data-song-album="Electric wave"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-3.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/9.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/9.jpg" alt="Electric wave">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="9" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Electric wave</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Lenisa Gory</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">                                      
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="9">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>02:48</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="9">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="9">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="9">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="9">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list__item"
                                data-song-id="10"
                                data-song-name="Nothing like your eyes"
                                data-song-artist="Nutty Nina"
                                data-song-album="Lover soul"
                                data-song-url="<?php echo $resources_url_opus_audio; ?>ringtone-2.mp3"
                                data-song-cover="<?php echo $resources_url_opus_img; ?>cover/small/10.jpg">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_img; ?>cover/small/10.jpg" alt="Nothing like your eyes">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="10" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="song-details.html" class="list__title text-truncate">Nothing like your eyes</a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html">Nutty Nina</a>
                                        </p>
                                    </div>
                                    <ul class="list__option">                                        
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="10">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li>03:24</li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="10">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="10">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="10">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="10">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <!-- End:: list -->

                    <div class="mt-5 text-center">
                        <a href="javascript:void(0);" class="btn btn-primary">
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