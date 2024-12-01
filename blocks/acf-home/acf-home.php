<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('image');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<div class="bg-[#FFFCF3]">
<!-- HEADER -->
<section class="mt-[13.9949109414758vw] md:mt-[7.16145833333333vw] lg:mt-[5.078125vw]">
    <div class="element-fade-in w-[78.8804071246819vw] md:w-[68.40625vw] lg:w-[61.609375vw] mx-auto">
        <h1 class="swift-up-text text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] leading-[5.34351145038168vw] md:leading-[3.125vw] lg:leading-[2.734375vw] text-[#1E1E1E] font-normal text-center font-gilda"><?php echo get_field('header_title');?></h1>
    </div>
</section>


<!-- CASES -->
<div id="work"></div>
<section class="mt-[12.7226463104326vw] md:mt-[11.4583333333333vw] lg:mt-[7.03125vw]">
    <div class="swiper mycases">
        <div class="swiper-wrapper pl-[3.56234096692112vw] md:pl-[2.34375vw] lg:pl-[2.65625vw]">
            <?php
            $count = 0; // Start de teller

            $loop = new WP_Query( array(
                'post_type' => 'case',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                <?php $count++; // Verhoog de teller één keer per iteratie ?>
                <?php
                $image1 = get_field('teaser_image', $post_id);
                $image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
                $image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
                ?>
                
                <a href="<?php the_permalink(); ?>" class="swiper-slide flex odd:items-center even:items-start justify-center w-[53.6895674300254vw] md:w-[27.0833333333333vw] lg:w-[25.625vw] h-[95.9287531806616vw] md:h-[48.9583333333333vw] lg:h-[43.4375vw] border-l-[0.127226463104326vw] md:border-l-[0.0651041666666667vw] lg:border-l-[0.0390625vw] last-of-type:border-r-[0.127226463104326vw] last-of-type:md:border-r-[0.0651041666666667vw] last-of-type:mr-[3.56234096692112vw] last-of-type:md:mr-[2.34375vw] last-of-type:lg:mr-[2.65625vw] border-[#000000]">
                    <div class="w-[44.529262086514vw] md:w-[22.7864583333333vw] lg:w-[20.9375vw]">
                        <!-- Gebruik sprintf om cijfers met een 0 voor de eerste 9 weer te geven -->
                        <span class="text-[5.08905852417303vw] md:text-[2.60416666666667vw] lg:text-[2.03125vw] leading-[6.10687022900763vw] md:leading-[3.125vw] lg:leading-[2.421875vw] font-normal font-gilda text-[#1E1E1E]">
                            <?php echo sprintf("%02d", $count); ?>
                        </span>
                        <div class="w-[44.529262086514vw] md:w-[22.7864583333333vw] lg:w-[20.9375vw] h-[63.1043256997455vw] md:h-[32.2916666666667vw] lg:h-[29.609375vw] overflow-hidden">
                            <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                        </div>
                        <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.05343511450382vw] md:leading-[1.5625vw] lg:leading-[0.9375vw] text-[#1E1E1E] font-medium uppercase mt-[2.79898218829517vw] md:mt-[1.43229166666667vw] lg:mt-[0.859375vw]"><span class="font-bold"><?php the_title(); ?></span> <?php if (get_field('category', $post_id)): ?> | <?php echo get_field('category', $post_id);?><?php endif; ?></h3>
                        <p class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] mt-[1.27226463104326vw] md:mt-[0.651041666666667vw] lg:mt-[0.390625vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_field('introduction_text', $post_id);?></p>
                    </div>
                </a>
            <?php endwhile; wp_reset_query(); ?>

        </div>
    </div>
</section>


<!-- SERVICES SLIDER -->
<section class="mt-[11.1959287531807vw] md:mt-[10.4166666666667vw] lg:mt-[7.578125vw]">
    <div id="services"></div>
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


<!-- SERVICES -->
    <section class="mt-[19.8473282442748vw] md:mt-[11.9791666666667vw] lg:mt-[8.515625vw]">
    <div class="element-fade-in w-[77.791349vw] md:w-[64.41875vw] lg:w-[58.03125vw] mx-auto">
        <h2 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.05343511450382vw] md:leading-[1.5625vw] lg:leading-[0.9375vw] text-[#1E1E1E] font-medium uppercase text-center">Services</h2>
        <h3 class="swift-up-text text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] leading-[5.34351145038168vw] md:leading-[3.125vw] lg:leading-[2.734375vw] text-[#1E1E1E] font-normal text-center font-gilda mt-[7.63358778625954vw] md:mt-[3.38541666666667vw] lg:mt-[2.109375vw]"><?php echo get_field('services_title');?></h3>
    </div>
    </section>

    <section class="mt-[16.2849872773537vw] md:mt-[10.8072916666667vw] lg:mt-[8.28125vw]">
    <div class="element-fade-in w-[83.4605597964377vw] mx-auto md:hidden">
        <div class="accordion-group">
            <div class="block-fade-in accordion-item">
                <button class="accordion text-left">
                    <span class="text-[3.56234096692112vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] font-normal text-[#1E1E1E] uppercase my-[5.85241730279898vw]"><?php echo get_field('services_title_column_1');?></span>
                </button>
                <div class="panel">
                    <hr class="border-[#000]">
                    <div class="my-[6.87022900763359vw]">
                        <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-left font-light text-[#1E1E1E]"><?php echo get_field('services_text_column_1');?></p>
                    </div>
                    <ul class="grid gap-[1.27226463104326vw] md:gap-[0.651041666666667vw] lg:gap-[0.546875vw] text-[#1E1E1E] my-[6.87022900763359vw]">
                        <?php
                        if( have_rows('services_bullets_column_1') ):
                            while( have_rows('services_bullets_column_1') ) : the_row(); ?>
                            <li class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_sub_field('bullet');?></li>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="block-fade-in accordion-item">
                <button class="accordion text-left">
                    <span class="text-[3.56234096692112vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] font-normal text-[#1E1E1E] uppercase my-[5.85241730279898vw]"><?php echo get_field('services_title_column_2');?></span>
                </button>
                <div class="panel">
                    <hr class="border-[#000]">
                    <div class="my-[6.87022900763359vw]">
                        <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-left font-light text-[#1E1E1E]"><?php echo get_field('services_text_column_2');?></p>
                    </div>
                    <ul class="grid gap-[1.27226463104326vw] md:gap-[0.651041666666667vw] lg:gap-[0.546875vw] text-[#1E1E1E] my-[6.87022900763359vw]">
                        <?php
                        if( have_rows('services_bullets_column_2') ):
                            while( have_rows('services_bullets_column_2') ) : the_row(); ?>
                            <li class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_sub_field('bullet');?></li>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="block-fade-in accordion-item">
                <button class="accordion text-left">
                    <span class="text-[3.56234096692112vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] font-normal text-[#1E1E1E] uppercase my-[5.85241730279898vw]"><?php echo get_field('services_title_column_3');?></span>
                </button>
                <div class="panel">
                    <hr class="border-[#000]">
                    <div class="my-[6.87022900763359vw]">
                        <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-left font-light text-[#1E1E1E]"><?php echo get_field('services_text_column_3');?></p>
                    </div>
                    <ul class="grid gap-[1.27226463104326vw] md:gap-[0.651041666666667vw] lg:gap-[0.546875vw] text-[#1E1E1E] my-[6.87022900763359vw]">
                        <?php
                        if( have_rows('services_bullets_column_3') ):
                            while( have_rows('services_bullets_column_3') ) : the_row(); ?>
                            <li class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_sub_field('bullet');?></li>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            
        </div>
        <hr class="border-[#000]">
    </div>
    <div class="element-fade-in w-[83.4605597964377vw] md:w-[88.1510416666667vw] lg:w-[83.828125vw] flex-wrap justify-between mx-auto hidden md:flex">
        <div class="block-fade-in w-[83.4605597964377vw] md:w-[27.4vw] lg:w-[23.4375vw]">
            <h4 class="text-[3.56234096692112vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] text-center font-normal text-[#1E1E1E] uppercase"><?php echo get_field('services_title_column_1');?></h4>
            <hr class="border-[0.5px] border-[#000000] my-[7.63358778625954vw] md:my-[3.25520833333333vw] lg:my-[1.953125vw]">
            <div class="md:h-[16.9322916666667vw] lg:h-[10.765625vw]">
                <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-center font-light text-[#1E1E1E]"><?php echo get_field('services_text_column_1');?></p>
            </div>
            <hr class="border-[0.5px] border-[#000000] mb-[7.63358778625954vw] md:mb-[3.25520833333333vw] lg:mb-[1.953125vw]">
            <ul class="grid gap-[1.27226463104326vw] md:gap-[0.651041666666667vw] lg:gap-[0.546875vw] text-[#1E1E1E]">
                <?php
                if( have_rows('services_bullets_column_1') ):
                    while( have_rows('services_bullets_column_1') ) : the_row(); ?>
                    <li class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_sub_field('bullet');?></li>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </ul>
        </div>
        <div class="block-fade-in w-[83.4605597964377vw] md:w-[27.4vw] lg:w-[23.4375vw]">
            <h4 class="text-[3.56234096692112vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] text-center font-normal text-[#1E1E1E] uppercase"><?php echo get_field('services_title_column_2');?></h4>
            <hr class="border-[0.5px] border-[#000000] my-[7.63358778625954vw] md:my-[3.25520833333333vw] lg:my-[1.953125vw]">
            <div class="md:h-[16.9322916666667vw] lg:h-[10.765625vw]">
                <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-center font-light text-[#1E1E1E]"><?php echo get_field('services_text_column_2');?></p>
            </div>
            <hr class="border-[0.5px] border-[#000000] mb-[7.63358778625954vw] md:mb-[3.25520833333333vw] lg:mb-[1.953125vw]">
            <ul class="grid gap-[1.27226463104326vw] md:gap-[0.651041666666667vw] lg:gap-[0.546875vw] text-[#1E1E1E]">
                <?php
                if( have_rows('services_bullets_column_2') ):
                    while( have_rows('services_bullets_column_2') ) : the_row(); ?>
                    <li class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_sub_field('bullet');?></li>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </ul>
        </div>
        <div class="block-fade-in w-[83.4605597964377vw] md:w-[27.4vw] lg:w-[23.4375vw]">
            <h4 class="text-[3.56234096692112vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] text-center font-normal text-[#1E1E1E] uppercase"><?php echo get_field('services_title_column_3');?></h4>
            <hr class="border-[0.5px] border-[#000000] my-[7.63358778625954vw] md:my-[3.25520833333333vw] lg:my-[1.953125vw]">
            <div class="md:h-[16.9322916666667vw] lg:h-[10.765625vw]">
                <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-center font-light text-[#1E1E1E]"><?php echo get_field('services_text_column_3');?></p>
            </div>
            <hr class="border-[0.5px] border-[#000000] mb-[7.63358778625954vw] md:mb-[3.25520833333333vw] lg:mb-[1.953125vw]">
            <ul class="grid gap-[1.27226463104326vw] md:gap-[0.651041666666667vw] lg:gap-[0.546875vw] text-[#1E1E1E]">
                <?php
                if( have_rows('services_bullets_column_3') ):
                    while( have_rows('services_bullets_column_3') ) : the_row(); ?>
                    <li class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E]"><?php echo get_sub_field('bullet');?></li>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </ul>
        </div>
    </div>
    </section>


    <!-- ABOUT -->
<section class="mt-[18.0661577608142vw] md:mt-[10.546875vw] lg:mt-[8.125vw]">
    <div id="about"></div>
    <div class="bg-[#1E1E1E] w-full py-[15.2671755725191vw] md:py-[10.546875vw] lg:py-[9.6875vw]">
        <div class="w-[83.4605597964377vw] md:w-[85.4166666666667vw] lg:w-[73.359375vw] mx-auto flex flex-wrap justify-between items-center">
            <div class="w-[61.5776081424936vw] md:w-[31.5104166666667vw] lg:w-[25.703125vw] mx-auto md:mx-[unset] order-2 md:order-1 mt-[9.66921119592875vw] md:mt-[unset]">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-auto">
            </div>
            <div class="element-fade-in w-[81.4249363867684vw] md:w-[46.7447916666667vw] lg:w-[37.96875vw] order-1 md:order-2 grid gap-[6.87022900763359vw] md:gap-[3.515625vw] lg:gap-[2.96875vw]">
                <h2 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.05343511450382vw] md:leading-[1.5625vw] lg:leading-[0.9375vw] text-white font-bold uppercase text-center md:text-left">About</h2>
                <h3 class="swift-up-text text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] leading-[5.34351145038168vw] md:leading-[3.125vw] lg:leading-[2.734375vw] text-white font-gilda font-normal text-center md:text-left"><?php echo get_field('about_title');?></h3>
                <hr class="border-[0.25px] border-[#fff] w-[83.4605597964377vw] md:w-[39.0625vw] lg:w-[23.4375vw] hidden md:block">
                <p class="block-fade-in w-[71.2468193384224vw] md:w-[47.1354166666667vw] lg:w-[38.1vw] text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.40625vw] text-white font-light hidden md:block"><?php echo get_field('about_text');?></p>
                <hr class="border-[0.25px] border-[#fff] w-[83.4605597964377vw] md:w-[39.0625vw] lg:w-[23.4375vw] hidden md:block">
            </div>
            <div id="read" class="order-3 md:hidden mt-[10.66921119592875vw] md:mt-[unset] read-more">
                <hr class="border-[0.25px] border-[#fff] w-[83.4605597964377vw] md:w-[39.0625vw] lg:w-[23.4375vw]">
                <div class="w-[71.2468193384224vw] md:w-[47.1354166666667vw] lg:w-[38.1vw] my-[9.66921119592875vw] mx-auto">
                    <p id="read-text" class="line-clamp-4 text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.40625vw] text-white font-light mx-auto"><?php echo get_field('about_text');?></p>
                    <button id="read-button" class="text-[2.54452926208651vw] font-medium uppercase text-white mt-[2.54452926208651vw] flex items-center">
                        <span id="more">Read more</span>
                        <span id="less">Read less</span>
                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-[1.52671755725191vw]">
                            <path d="M11.125 1.85355C11.3203 1.65829 11.3203 1.34171 11.125 1.14645C10.9298 0.951184 10.6132 0.951184 10.4179 1.14645L11.125 1.85355ZM10.4179 1.14645L5.41793 6.14645L6.12504 6.85355L11.125 1.85355L10.4179 1.14645Z" fill="#FFFCF3"/>
                            <path d="M1.35355 0.646447C1.15829 0.451184 0.841709 0.451184 0.646447 0.646447C0.451184 0.841709 0.451184 1.15829 0.646447 1.35355L1.35355 0.646447ZM0.646447 1.35355L5.64645 6.35355L6.35355 5.64645L1.35355 0.646447L0.646447 1.35355Z" fill="#FFFCF3"/>
                        </svg>

                    </button>
                </div>
                <hr class="border-[0.25px] border-[#fff] w-[83.4605597964377vw] md:w-[39.0625vw] lg:w-[23.4375vw]">
            </div>
        </div>
    </div>
</section>


<!-- FOOTER HOME -->
    <div id="contact"></div>
    <section class="contact-footer mt-[20.3562340966921vw] md:mt-[13.0208333333333vw] lg:mt-[9.53125vw]">
    <div class="element-fade-in w-[81.4249363867684vw] md:w-[66.015625vw] lg:w-[57.03125vw] mx-auto">
        <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.05343511450382vw] md:leading-[1.5625vw] lg:leading-[0.9375vw] text-[#1E1E1E] font-medium uppercase text-center"><b>Email</b> | <a href="mailto:<?php echo get_field('email', 'option');?>"><?php echo get_field('email', 'option');?></a></p>
        <h3 class="swift-up-text text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] leading-[5.34351145038168vw] md:leading-[3.125vw] lg:leading-[2.734375vw] text-[#1E1E1E] font-normal text-center font-gilda mt-[7.63358778625954vw] md:mt-[3.38541666666667vw] lg:mt-[2.109375vw]"><?php echo get_field('contact_title');?></h3>
    </div>
    <div class="contact-fade-in mt-[15.2671755725191vw] md:mt-[10.4166666666667vw] lg:mt-[8.203125vw]">
        <h2 class="text-[20.3vw] md:text-[20.3vw] lg:text-[20.4vw] leading-[20.3vw] md:leading-[20.3vw] lg:leading-[20.4vw] uppercase font-gilda text-[#1E1E1E] text-center font-normal">Contact</h2>
    </div>
    <div class="contact-fade-in-end"></div>
    </section>
</div>
<?php endif; ?>
