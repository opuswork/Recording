<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$resources_url_opus_img = base_url()."resources/opus/img/";
$resources_url_opus_css = base_url()."resources/opus/css/";
?>

        <!-- Start:: header [[ Find at scss/framework/header.scss ]] -->
        <header id="header">
            <div class="container">
                <div class="header-container">
                    <div class="d-flex align-items-center">
                        <a role="button" class="header-text sidebar-toggler d-lg-none me-3" aria-label="Sidebar toggler">
                            <i class="ri-menu-3-line"></i>
                        </a>

                        <!-- Start:: search form [[ Find at scss/framework/search.scss ]] -->
                        <form action="#" id="search_form" class="me-3">
                            <label for="search_input">
                                <i class="ri-search-2-line"></i>
                            </label>
                            <input type="text" placeholder="Type anything to get result..." id="search_input" class="form-control form-control-sm">
                        </form>
                        <!-- End:: search form -->

                        <!-- Start:: search [[ Find at scss/framework/search.scss ]] -->
                        <div id="search_results" class="search pb-3">
                            <div class="search__head">
                                <div class="search__head__filter">
                                    <button type="button" class="btn btn-sm btn-light-primary active">Trending</button>
                                    <button type="button" class="btn btn-sm btn-light-primary">Artists</button>
                                    <button type="button" class="btn btn-sm btn-light-primary">Songs</button>
                                    <button type="button" class="btn btn-sm btn-light-primary">Albums</button>
                                </div>
                            </div>
                            <div class="search__body" data-scroll="true">
                                <div class="mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span class="search__title">Artists</span>
                                        <a href="artists.html" class="btn btn-link">View All</a>
                                    </div>
                                    <div class="row g-4 list">
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="artist-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/large/5.jpg" alt="Jina Moore">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="artist-details.html" class="list__title text-truncate">Jina Moore</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="artist-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/large/6.jpg" alt="Rasomi Pelina">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="artist-details.html" class="list__title text-truncate">Rasomi Pelina</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="artist-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/large/7.jpg" alt="Pimila Holliwy">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="artist-details.html" class="list__title text-truncate">Pimila Holliwy</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="artist-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/large/8.jpg" alt="Karen Jennings">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="artist-details.html" class="list__title text-truncate">Karen Jennings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span class="search__title">Songs</span>
                                        <a href="songs.html" class="btn btn-link">View All</a>
                                    </div>
                                    <div class="row g-4 list">
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="song-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/6.jpg" alt="Hey not me">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="song-details.html" class="list__title text-truncate">Hey not me</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Rasomi Pelina</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="song-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/7.jpg" alt="Deep inside">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="song-details.html" class="list__title text-truncate">Deep inside</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Pimila Holliwy</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="song-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/8.jpg" alt="Sadness">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="song-details.html" class="list__title text-truncate">Sadness</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Karen Jennings</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="song-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/9.jpg" alt="Electric wave">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="song-details.html" class="list__title text-truncate">Electric wave</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Lenisa Gory</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span class="search__title">Albums</span>
                                        <a href="albums.html" class="btn btn-link">View All</a>
                                    </div>
                                    <div class="row g-4 list">
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="album-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/1.jpg" alt="Mummy">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="album-details.html" class="list__title text-truncate">Mummy</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Arebica Luna</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="album-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/2.jpg" alt="Hot shot">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="album-details.html" class="list__title text-truncate">Hot shot</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Gerrina Linda</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="album-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/3.jpg" alt="Own way">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="album-details.html" class="list__title text-truncate">Own way</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Zunira Willy & Nutty Nina</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="list__item">
                                                <a href="album-details.html" class="list__cover">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="<?php echo $resources_url_opus_img;?>cover/small/4.jpg" alt="Say yes">
                                                    </div>
                                                </a>
                                                <div class="list__content">
                                                    <a href="album-details.html" class="list__title text-truncate">Say yes</a>
                                                    <p class="list__subtitle text-truncate">
                                                        <a href="artist-details.html">Johnny Marro</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: search -->

                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="header-text d-flex align-items-center" role="button" id="language_menu" data-bs-offset="0,14" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="ri-earth-line fs-5"></i>
                                    <span class="d-none d-md-block ms-1">Language</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="language_menu">
                                    <div class="py-2 px-4">
                                        <span class="d-block fw-bold">What language do you read?</span>
                                        <p>Select languages you want to listen.</p>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex flex-wrap py-2">
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_1">
                                                <label class="form-check-label fw-semibold" for="lang_1">Russian</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_2">
                                                <label class="form-check-label fw-semibold" for="lang_2">French</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_3">
                                                <label class="form-check-label fw-semibold" for="lang_3">Italy</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_4">
                                                <label class="form-check-label fw-semibold" for="lang_4">German</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_5">
                                                <label class="form-check-label fw-semibold" for="lang_5">Chinese</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_6">
                                                <label class="form-check-label fw-semibold" for="lang_6">Japanese</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_7">
                                                <label class="form-check-label fw-semibold" for="lang_7">Korean</label>
                                            </div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="lang_8">
                                                <label class="form-check-label fw-semibold" for="lang_8">English</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="py-2 px-4">
                                        <button type="button" class="btn btn-primary w-100 justify-content-center">Update</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown ms-3 ms-sm-4">
                                <a href="javascript:void(0);" class="avatar header-text" role="button" id="user_menu" data-bs-offset="0,8" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar__image">
                                        <img src="<?php echo $resources_url_opus_img;?>users/thumb.jpg" alt="user">
                                    </div>
                                    <span class="ps-2 d-none d-sm-block">Taeyoung</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-md dropdown-menu-end" aria-labelledby="user_menu">
                                    <li>
                                        <div class="py-2 px-3 avatar avatar--lg">
                                            <div class="avatar__image">
                                                <img src="<?php echo $resources_url_opus_img;?>users/thumb.jpg" alt="user">
                                            </div>
                                            <div class="avatar__content">
                                                <span class="avatar__title">Taeyoung Seon</span>
                                                <span class="avatar__subtitle">Artist</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="profile.html">
                                            <i class="ri-user-3-line fs-5"></i>
                                            <span class="ps-2">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="favorites.html">
                                            <i class="ri-heart-line fs-5"></i>
                                            <span class="ps-2">Favorites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="settings.html">
                                            <i class="ri-settings-line fs-5"></i>
                                            <span class="ps-2">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="plan.html">
                                            <i class="ri-money-dollar-circle-line fs-5"></i>
                                            <span class="ps-2">Plan</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center external text-danger" href="index.html">
                                            <i class="ri-logout-circle-line fs-5"></i>
                                            <span class="ps-2">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End:: header -->