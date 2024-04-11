<div class="onas-container">    
    <div class="wrapper_main-slider">
        <div class="main-video_slider" id="main-video_slider">
            <?= get_field('pervoe_bolshoe_video', 11) ?>
            <div class="views_main_slider" id="views_main_slider">
                <img src="/wp-content/themes/oceanwp-child/assets/img/eye.svg" alt="eye">
                <span><?= get_field('kolichestvo_prosmotrov_1', 11) ?></span>
            </div>
        </div>
        <div class="slider__cont">
            <div class="arrow__main-slider" id="up">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                    <path d="M8.70711 0.292892C8.31658 -0.0976314 7.68342 -0.0976315 7.29289 0.292892L0.928933 6.65685C0.538408 7.04738 0.538408 7.68054 0.928933 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 18L9 1L7 1L7 18L9 18Z" fill="#A3A3A3" />
                </svg>
            </div>
            <div class="carousel__main-slider">
                <? if (get_field('dopolnitelnoe_video_1', 11)) : ?>
                    <div class="video__main-slider" id="1">
                        <?= get_field('dopolnitelnoe_video_1', 11) ?>
                        <div class="youtube-logo__main-slider">
                            <img src="/wp-content/themes/oceanwp-child/assets/img/youtube-logo.svg" alt="logo">
                        </div>
                        <div class="views_main_slider">
                            <img src="/wp-content/themes/oceanwp-child/assets/img/eye.svg" alt="eye">
                            <span><?= get_field('kolichestvo_prosmotrov_2', 11) ?></span>
                        </div>
                    </div>
                <? endif ?>
                <? if (get_field('dopolnitelnoe_video_2', 11)) : ?>
                    <div class="video__main-slider" id="2">
                        <?= get_field('dopolnitelnoe_video_2', 11) ?>
                        <div class="youtube-logo__main-slider">
                            <img src="/wp-content/themes/oceanwp-child/assets/img/youtube-logo.svg" alt="logo">
                        </div>
                        <div class="views_main_slider">
                            <img src="/wp-content/themes/oceanwp-child/assets/img/eye.svg" alt="eye">
                            <span><?= get_field('kolichestvo_prosmotrov_3', 11) ?></span>
                        </div>
                    </div>
                <? endif ?>
                <? if (get_field('dopolnitelnoe_video_3', 11)) : ?>
                    <div class="video__main-slider" id="3">
                        <?= get_field('dopolnitelnoe_video_3', 11) ?>
                        <div class="youtube-logo__main-slider">
                            <img src="/wp-content/themes/oceanwp-child/assets/img/youtube-logo.svg" alt="logo">
                        </div>
                        <div class="views_main_slider">
                            <img src="/wp-content/themes/oceanwp-child/assets/img/eye.svg" alt="eye">
                            <span><?= get_field('kolichestvo_prosmotrov_4', 11) ?></span>
                        </div>
                    </div>
                <? endif ?>
            </div>
            <div class="arrow__main-slider" id="down">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                    <path d="M7.29289 17.7071C7.68342 18.0976 8.31658 18.0976 8.70711 17.7071L15.0711 11.3431C15.4616 10.9526 15.4616 10.3195 15.0711 9.92893C14.6805 9.53841 14.0474 9.53841 13.6569 9.92893L8 15.5858L2.34315 9.92893C1.95262 9.53841 1.31946 9.53841 0.928932 9.92893C0.538407 10.3195 0.538407 10.9526 0.928932 11.3431L7.29289 17.7071ZM7 -4.37114e-08L7 17L9 17L9 4.37114e-08L7 -4.37114e-08Z" fill="#A3A3A3" />
                </svg>
            </div>
        </div>
    </div>
    <div class="wrapper-mobile_main-slider">
        <div class="arrow__main-slider" id="left">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976314 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928933C7.68054 0.538409 7.04738 0.538409 6.65685 0.928933L0.292892 7.29289ZM18 7L1 7L1 9L18 9L18 7Z" fill="#A3A3A3" />
            </svg>
        </div>
        <div class="mobile-main-video_slider" id="mobile-main-video_slider">
            <?= get_field('pervoe_bolshoe_video', 11) ?>
        </div>
        <div class="arrow__main-slider" id="right">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <path d="M17.7071 8.70711C18.0976 8.31659 18.0976 7.68342 17.7071 7.2929L11.3431 0.928934C10.9526 0.53841 10.3195 0.53841 9.92893 0.928934C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM-1.74846e-07 9L17 9L17 7L1.74846e-07 7L-1.74846e-07 9Z" fill="#A3A3A3" />
            </svg>
        </div>
    </div>

    <div class="main-videos__button">
        <a href="<? the_field('yutub', 38); ?>"><img src="/wp-content/uploads/2023/08/you-ikon.svg" alt="">Открыть канал<img src="/wp-content/uploads/2023/08/you-ikon.svg" alt=""></a>
    </div>
</div>