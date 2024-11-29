<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header('notitle'); ?>
<main>
    <?php the_content();?>
     <section class="my-[3.30788804071247vw] md:my-[1.69270833333333vw] lg:my-[1.71875vw]">
        <div class="text-center w-full py-[7.63358778625954vw] md:py-[5.20833333333333vw] lg:py-[3.90625vw]"><a href="/#work" class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw]	text-[#1E1E1E] font-medium uppercase">Back to cases overview</a></div>
    </section>
    <section class="w-full">
        <div class="swiper myservices w-full h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] bg-[#1E1E1E] relative">
            <div class="swiper-wrapper">
                <?php
                if( have_rows('services', 'option') ):
                    while( have_rows('services', 'option') ) : the_row(); ?>
                    <div class="swiper-slide h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] w-fit flex items-center">
                        <div class="mx-[5.08905852417303vw] md:mx-[2.60416666666667vw] lg:mx-[1.796875vw] flex items-center"><div class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[white] rounded-full"></div></div>
                        <p class="text-[2.67175572519084vw] md:text-[1.3671875vw] lg:text-[0.8203125vw] leading-[2.67175572519084vw] md:leading-[1.3671875vw] lg:leading-[0.8203125vw] text-white font-normal font-gilda"><?php echo get_sub_field('service', 'option');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('services', 'option') ):
                    while( have_rows('services', 'option') ) : the_row(); ?>
                    <div class="swiper-slide h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] w-fit flex items-center">
                        <div class="mx-[5.08905852417303vw] md:mx-[2.60416666666667vw] lg:mx-[1.796875vw] flex items-center"><div class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[white] rounded-full"></div></div>
                        <p class="text-[2.67175572519084vw] md:text-[1.3671875vw] lg:text-[0.8203125vw] leading-[2.67175572519084vw] md:leading-[1.3671875vw] lg:leading-[0.8203125vw] text-white font-normal font-gilda"><?php echo get_sub_field('service', 'option');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            <?php
                if( have_rows('services', 'option') ):
                    while( have_rows('services', 'option') ) : the_row(); ?>
                    <div class="swiper-slide h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] w-fit flex items-center">
                        <div class="mx-[5.08905852417303vw] md:mx-[2.60416666666667vw] lg:mx-[1.796875vw] flex items-center"><div class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[white] rounded-full"></div></div>
                        <p class="text-[2.67175572519084vw] md:text-[1.3671875vw] lg:text-[0.8203125vw] leading-[2.67175572519084vw] md:leading-[1.3671875vw] lg:leading-[0.8203125vw] text-white font-normal font-gilda"><?php echo get_sub_field('service', 'option');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            <?php
                if( have_rows('services', 'option') ):
                    while( have_rows('services', 'option') ) : the_row(); ?>
                    <div class="swiper-slide h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] w-fit flex items-center">
                        <div class="mx-[5.08905852417303vw] md:mx-[2.60416666666667vw] lg:mx-[1.796875vw] flex items-center"><div class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[white] rounded-full"></div></div>
                        <p class="text-[2.67175572519084vw] md:text-[1.3671875vw] lg:text-[0.8203125vw] leading-[2.67175572519084vw] md:leading-[1.3671875vw] lg:leading-[0.8203125vw] text-white font-normal font-gilda"><?php echo get_sub_field('service', 'option');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            <?php
                if( have_rows('services', 'option') ):
                    while( have_rows('services', 'option') ) : the_row(); ?>
                    <div class="swiper-slide h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] w-fit flex items-center">
                        <div class="mx-[5.08905852417303vw] md:mx-[2.60416666666667vw] lg:mx-[1.796875vw] flex items-center"><div class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[white] rounded-full"></div></div>
                        <p class="text-[2.67175572519084vw] md:text-[1.3671875vw] lg:text-[0.8203125vw] leading-[2.67175572519084vw] md:leading-[1.3671875vw] lg:leading-[0.8203125vw] text-white font-normal font-gilda"><?php echo get_sub_field('service', 'option');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            <?php
                if( have_rows('services', 'option') ):
                    while( have_rows('services', 'option') ) : the_row(); ?>
                    <div class="swiper-slide h-[7.63358778625954vw] md:h-[3.90625vw] lg:h-[2.734375vw] w-fit flex items-center">
                        <div class="mx-[5.08905852417303vw] md:mx-[2.60416666666667vw] lg:mx-[1.796875vw] flex items-center"><div class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[white] rounded-full"></div></div>
                        <p class="text-[2.67175572519084vw] md:text-[1.3671875vw] lg:text-[0.8203125vw] leading-[2.67175572519084vw] md:leading-[1.3671875vw] lg:leading-[0.8203125vw] text-white font-normal font-gilda"><?php echo get_sub_field('service', 'option');?></p>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="absolute top-0 left-0 right-0 bottom-0 z-[6]"></div>
        </div>
</section>

</main>
<?php get_footer(); ?>
