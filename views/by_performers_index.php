<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img = base_url()."resources/opus/img/";
$resources_url_opus_css = base_url()."resources/opus/css/";
$resources_url_opus_audio = base_url()."resources/opus/audio; ?>";
$resources_url_opus_js = base_url()."resources/opus/js/";
$resources_url	= "/resources/opus/ds/artist_image/";
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
                        <h3 class="mb-0">Featured <span class="text-primary">Performers</span></h3>
                    </div>
                    
                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel swiper-carousel-button">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="6" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
<?php
foreach ($featured_performers as $f_each_performers) {
    $f_given_name = $f_each_performers->first_name;
    $f_family_name = $f_each_performers->last_name;
    $f_full_name = $f_family_name.", ".$f_given_name;
    #$f_link_name = $f_each_performers->url_slug;
    #$f_birth_date = $f_each_performers->birth_date;
    #$f_death_date = $f_each_performers->death_date;
/*
    if ($f_birth_date) {
        $f_birth_year = $f_birth_date;
    }

    if (!$f_death_date) {
        $f_death_year = "";
    }else{
        $f_death_year = "-".$f_death_date;
    }
*/    
?>                                
                                <div class="swiper-slide">
                                    <!-- Start:: avatar [[ Find at scss/components/avatar.scss ]] -->
                                    <div class="avatar avatar--xxl d-block text-center scale-animation">
                                        <a href="artist-details.html" class="avatar__image mx-auto">
                                            <img src="<?php echo $resources_url.$f_each_performers->file_name1;?>" alt="Arebica Luna">
                                        </a>
                                        <a href="artist-details.html" class="avatar__title mt-3"><?php echo $f_full_name;?></a>
                                    </div>
                                    <!-- End:: avatar -->
                                </div>
<?php        
}
?>       
                            </div>
                            <!-- Swiper pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- End:: swiper -->
                    </div>
                    <!-- End:: swiper carousel -->

                </div>
                <!-- End:: section -->

                <!-- Start:: section [[ Find at scss/framework/section.scss ]] -->
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Top <span class="text-primary">Performers</span></h3>
                    </div>

                    <!-- Start:: swiper carousel [[ Find at scss/components/swiper.scss ]] -->
                    <div class="swiper-carousel swiper-carousel-button">
                        <!-- Start:: swiper [[ Find at scss/components/swiper.scss ]] -->
                        <div class="swiper" data-swiper-slides="5" data-swiper-grid="true" data-swiper-autoplay="true">
                            <div class="swiper-wrapper">
<?php
foreach ($top_performers as $t_each_performers) {
    $t_given_name = $t_each_performers->first_name;
    $t_family_name = $t_each_performers->last_name;
    $t_full_name = $t_family_name.", ".$t_given_name;
    #$t_link_name = $t_each_composer->url_slug;
    #$t_birth_date = $t_each_composer->birth_date;
    #$t_death_date = $t_each_composer->death_date;
/*
    if ($t_birth_date) {
        $t_birth_year = $t_birth_date;
    }

    if (!$t_death_date) {
        $t_death_year = "";
    }else{
        $t_death_year = "-".$t_death_date;
    }
*/
?>             
                                <div class="swiper-slide">
                                    <!-- Start:: cover [[ Find at scss/components/cover.scss ]] -->
                                    <a href="artist-details.html" class="cover cover--round scale-animation">
                                        <div class="cover__image">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?php echo $resources_url.$t_each_performers->file_name1;?>" alt="">
                                            </div>
                                        </div>
                                        <div class="cover__foot">
                                            <span class="cover__title text-truncate"><?php echo $t_full_name;?></span>
                                        </div>
                                    </a>
                                    <!-- End:: cover -->
                                </div>
<?php        
}
?>  
                            </div>
                        </div>
                        <!-- End:: swiper -->

                        <!-- Swiper controls -->
                        <div class="swiper-button-prev btn-default rounded-pill"></div>
                        <div class="swiper-button-next btn-default rounded-pill"></div>
                    </div>
                    <!-- End:: swiper carousel -->

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