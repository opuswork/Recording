<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img = base_url()."resources/opus/img/";
$resources_url_opus_album_img = base_url()."resources/opus/ds/album_image";
$resources_url_opus_css = base_url()."resources/opus/css/";
$resources_url_opus_audio = base_url()."resources/opus/audio";
$resources_url_opus_audio_ds = base_url()."resources/opus/ds";
$resources_url_opus_js = base_url()."resources/opus/js/";
$resources_url_song_slug = base_url()."song/more/";

function get_remote_file_info($audio_url) {

    $ch = curl_init($audio_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    curl_setopt($ch, CURLOPT_HEADER, TRUE);

    curl_setopt($ch, CURLOPT_NOBODY, TRUE);

    $data = curl_exec($ch);

    $fileSize = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

    $httpResponseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    return [

        'fileExists' => (int) $httpResponseCode == 200,

        'fileSize' => (int) $fileSize

    ];

}

?>


<!-- Start:: page content [[ Find at scss/framework/wrapper.scss ]] -->
        <main id="page_content">

             <!-- Hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img; ?>banner/home.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head align-items-center">
                        <span class="d-block pe-3 fs-6 fw-semibold">272150 Songs in the list</span>
                        <div>
                            <select class="form-select" aria-label="Filter song">
                                <option value="Popular">Popular</option>
                                <option value="Most played">Most played</option>
                                <option value="A to Z">A to Z</option>
                                <option value="Z to A">Z to A</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Start:: list [[ Find at scss/components/list.scss ]] -->
                    <div class="list">
                        <div class="row">
                            <div class="col-xl-6">
<?php
	foreach ($song_list_left as $slists_l) {

		$audio_url = $resources_url_opus_audio_ds."/tracks/".$slists_l->album_code."/1.m4a";
                

        // calculate play time of the media file 

		$result = get_remote_file_info($audio_url);

        $ratio = 16210; //bytespersec - m4a

		$duration = intval($result['fileSize'] / $ratio);

        $run_time_l = date("i:s", $duration);          
        
?>                    

                                <div class="list__item" 
                                data-song-id="<?php echo $slists_l->album_code;?>"
                                data-song-name="<?php echo $slists_l->track_title;?>"
                                data-song-artist="<?php echo $slists_l->artist_info;?>"
                                data-song-album="<?php echo $slists_l->album_name;?>"
                                data-song-url="<?php echo $resources_url_opus_audio_ds."/tracks/".$slists_l->album_code."/";?>1.m4a"
                                data-song-cover="<?php echo $resources_url_opus_album_img."/"; ?><?php echo $slists_l->album_cover;?>">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_album_img."/"; ?><?php echo $slists_l->album_cover;?>" alt="<?php echo $slists_l->track_title;?>">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="<?php echo $slists_l->album_code;?>" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="<?php echo $resources_url_song_slug.$slists_l->title_slug;?>" title="<?php echo $slists_l->track_title;?>" class="list__title text-truncate"><?php echo $slists_l->track_title;?></a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html"><?php echo $slists_l->artist_info;?></a>
                                        </p>
                                    </div>
                                    <ul class="list__option">
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="1">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li><?php echo $run_time_l;?></li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="<?php echo $slists_l->album_code;?>">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="<?php echo $slists_l->album_code;?>">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="<?php echo $slists_l->album_code;?>">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="<?php echo $slists_l->album_code;?>">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
<?php
	}
?>
                            </div>

                            <div class="col-xl-6">

                            <?php
	foreach ($song_list_right as $slists_r) {

		$audio_url = $resources_url_opus_audio_ds."/tracks/".$slists_r->album_code."/1.m4a";
                

        // calculate play time of the media file 

		$result = get_remote_file_info($audio_url);

        $ratio = 16210; //bytespersec - m4a

		$duration = intval($result['fileSize'] / $ratio);

        $run_time_r = date("i:s", $duration);         
?>                    

                                <div class="list__item" 
                                data-song-id="<?php echo $slists_r->album_code;?>"
                                data-song-name="<?php echo $slists_r->track_title;?>"
                                data-song-artist="<?php echo $slists_r->artist_info;?>"
                                data-song-album="<?php echo $slists_r->album_name;?>"
                                data-song-url="<?php echo $resources_url_opus_audio_ds."/tracks/".$slists_r->album_code."/";?>1.m4a"
                                data-song-cover="<?php echo $resources_url_opus_album_img."/"; ?><?php echo $slists_r->album_cover;?>">
                                    <div class="list__cover">
                                        <div class="ratio ratio-1x1">
                                            <img src="<?php echo $resources_url_opus_album_img."/"; ?><?php echo $slists_r->album_cover;?>" alt="<?php echo $slists_r->track_title;?>">
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="<?php echo $slists_r->album_code;?>" aria-label="Play pause">
                                            <i class="ri-play-fill icon-play"></i>
                                            <i class="ri-pause-fill icon-pause"></i>
                                        </a>
                                    </div>
                                    <div class="list__content">
                                        <a href="<?php echo $resources_url_song_slug.$slists_r->title_slug;?>" title="<?php echo $slists_r->track_title;?>" class="list__title text-truncate"><?php echo $slists_r->track_title;?></a>
                                        <p class="list__subtitle text-truncate">
                                            <a href="artist-details.html"><?php echo $slists_r->artist_info;?></a>
                                        </p>
                                    </div>
                                    <ul class="list__option">
                                        <li>
                                            <a role="button" class="d-inline-flex" aria-label="Favorite" data-favorite-id="1">
                                                <i class="ri-heart-line heart-empty"></i>
                                                <i class="ri-heart-fill heart-fill"></i>
                                            </a>
                                        </li>
                                        <li><?php echo $run_time_r;?></li>
                                        <li class="dropstart d-inline-flex">
                                            <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" role="button" data-playlist-id="<?php echo $slists_r->album_code;?>">Add to playlist</a></li>
                                                <li><a class="dropdown-item" role="button" data-queue-id="<?php echo $slists_r->album_code;?>">Add to queue</a></li>
                                                <li><a class="dropdown-item" role="button" data-next-id="<?php echo $slists_r->album_code;?>">Next to play</a></li>
                                                <li><a class="dropdown-item" role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" role="button" data-play-id="<?php echo $slists_r->album_code;?>">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
<?php
	}
?>

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

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Free <span class="text-primary">Albums</span></h3>
                        </div>
                        <a href="albums.html" class="btn btn-link">View All</a>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel swiper-carousel-button">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
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
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="album-details.html" class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/1.jpg" alt="Mummy">
                                            </div>
                                        </a>
                                        <div class="cover__foot">
                                            <a href="album-details.html" class="cover__title text-truncate">Mummy</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Arebica Luna</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="101">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-2.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="album-details.html" class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/2.jpg" alt="Hot shot">
                                            </div>
                                        </a>
                                        <div class="cover__foot">
                                            <a href="album-details.html" class="cover__title text-truncate">Hot shot</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Gerrina Linda</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="102">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-3.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="album-details.html" class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/3.jpg" alt="Own way">
                                            </div>
                                        </a>
                                        <div class="cover__foot">
                                            <a href="album-details.html" class="cover__title text-truncate">Own way</a>
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
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="103">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-4.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="album-details.html" class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/4.jpg" alt="Say yes">
                                            </div>
                                        </a>
                                        <div class="cover__foot">
                                            <a href="album-details.html" class="cover__title text-truncate">Say yes</a>
                                            <p class="cover__subtitle text-truncate">
                                                <a href="artist-details.html">Johnny Marro</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="104">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-5.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="album-details.html" class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/5.jpg" alt="Letter">
                                            </div>
                                        </a>
                                        <div class="cover__foot">
                                            <a href="album-details.html" class="cover__title text-truncate">Letter</a>
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
                                    <div class="cover cover--round scale-animation">
                                        <div class="cover__head">
                                            <div class="cover__options dropstart d-inline-flex ms-auto">
                                                <a class="dropdown-link" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-sm">
                                                    <li><a class="dropdown-item" role="button" data-favorite-id="105">Favorite</a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $resources_url_opus_audio; ?>ringtone-6.mp3" download>Download</a></li>
                                                    <li><a class="dropdown-item" role="button">Share</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="album-details.html">View details</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="album-details.html" class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url_opus_img; ?>cover/large/6.jpg" alt="Find soul">
                                            </div>
                                        </a>
                                        <div class="cover__foot">
                                            <a href="album-details.html" class="cover__title text-truncate">Find soul</a>
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