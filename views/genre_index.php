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
            <div class="hero" style="background-image: url(<?php echo $resources_url_opus_img;?>banner/home.jpg);"></div>

            <!-- Start:: under hero [[ Find at scss/framework/hero.scss ]] -->
            <div class="under-hero container">

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">

                    <div class="section__head">
                        <h3 class="mb-0">Classical Music <span class="text-primary">Genre</span> By Instrument</h3>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="4" data-swiper-grid="true" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?sub=v&menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/1.jpg" alt="">
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
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/2.jpg" alt="">
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
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/3.jpg" alt="">
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
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/4.jpg" alt="">
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
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/4.jpg" alt="">
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
                                        <a href="/moreGenre?menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/5.jpg" alt="">
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
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/6.jpg" alt="">
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
                        <h3 class="mb-0">Podcast <span class="text-primary">Academia</span></h3>
                    </div>
                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="4" data-swiper-grid="true" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/3.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Liederabend</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/5.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-6 text-truncate">Women in the Operas</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End:: cover -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <div class="cover cover--round scale-animation">
                                        <a href="/moreGenre?menu=genre" class="cover__image">
                                            <div class="ratio ratio-16x9">
                                                <img src="<?php echo $resources_url_opus_img;?>background/horizontal/6.jpg" alt="">
                                            </div>
                                            <div class="cover__image__content">
                                                <span class="cover__title mb-1 fs-8 text-truncate">16th Century Counterpoint</span>
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