<?php 
/**
 * The page template file
 * 
 * @package Day Six theme
 */


get_header(); ?>
<div id="loading-screen" class="fixed inset-0 bg-[#FFFCF3] z-[99999]">
    <div class="w-[93.1297709923664vw] md:w-[97.5260416666667vw] lg:w-[94.6875vw] mx-auto h-[13.4860050890585vw] md:h-[7.55208333333333vw] lg:h-[6.953125vw] flex items-center">
        <p id="loading-counter" class="text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] font-gilda font-normal text-[#1E1E1E]">01</p>
    </div>
</div>

<main id="main-content" class="bg-[#FFFCF3] invisible">
    <?php the_content(); ?>
</main>
<?php get_footer(); ?>