<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CASE INFORMATION -->
<div class="bg-[#FFFCF3] case">
 <section>
    <div class="ml-[2.734375vw] hidden lg:block"><a href="/#work" class="text-[0.78125vw] text-[#1E1E1E] font-light uppercase flex"><div class="mr-[5.08905852417303vw] md:mr-[2.60416666666667vw] lg:mr-[0.625vw] flex items-center"><span class="h-[1.12468193384224vw] md:h-[0.575520833333333vw] lg:h-[0.40546875vw] w-[1.12468193384224vw] md:w-[0.575520833333333vw] lg:w-[0.40546875vw] bg-[#1E1E1E] rounded-full"></span></div>Back to cases overview</a></div>
 </section>
 <section class="element-fade-in mt-[9.66921119592875vw] md:mt-[4.94791666666667vw] lg:mt-[3.90625vw]">
    <div class="w-[73.2824427480916vw] md:w-[87.5vw] lg:w-[82.96875vw] mx-auto flex flex-wrap justify-between">
        <div class="w-[73.2824427480916vw] md:w-[56.9010416666667vw] lg:w-[53.828125vw]">
            <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.09375vw] font-medium text-[#1E1E1E] uppercase">Client</h3>
            <h1 class="swift-up-text text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] leading-[5.34351145038168vw] md:leading-[3.125vw] lg:leading-[2.734375vw] font-gilda font-normal text-[#1E1E1E] mt-[1.01781170483461vw] md:mt-[0.520833333333333vw] lg:mt-[0.3125vw]"><?php echo get_field('client');?></h1>
            <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.09375vw] font-medium text-[#1E1E1E] uppercase mt-[7.63358778625954vw] md:mt-[3.25520833333333vw] lg:mt-[2.34375vw]">Project</h3>
            <h2 class="swift-up-text text-[4.58015267175572vw] md:text-[2.60416666666667vw] lg:text-[2.34375vw] leading-[5.34351145038168vw] md:leading-[3.125vw] lg:leading-[2.734375vw] font-gilda font-normal text-[#1E1E1E] mt-[1.01781170483461vw] md:mt-[0.520833333333333vw] lg:mt-[0.3125vw]"><?php echo get_field('project');?></h2>
        </div>
        <div class="delayed-animation w-[73.2824427480916vw] md:w-[26.0416666666667vw] lg:w-[23.4375vw] text-left md:text-right">
            <?php if (get_field('scope')): ?> 
            <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.09375vw] font-medium text-[#1E1E1E] uppercase mt-[7.63358778625954vw] md:mt-[unset]">Project scope</h3>
            <?php
            if( have_rows('scope') ):
                while( have_rows('scope') ) : the_row(); ?>
                <p class="text-[2.79898218829517vw] md:text-[1.43229166666667vw] lg:text-[1.09375vw] leading-[3.30788804071247vw] md:leading-[1.69270833333333vw] lg:leading-[1.25vw] font-gilda font-normal text-[#1E1E1E] my-[1.01781170483461vw] md:my-[1.30208333333333vw] lg:my-[0.9375vw]"><?php echo get_sub_field('scope_attribute');?></p>
                <?php
                endwhile;
            else :
            endif;
            ?>
            <?php endif; ?>
        </div>
    </div>
 </section>
 <section class="mt-[7.63358778625954vw] md:mt-[7.8125vw] lg:mt-[4.6875vw] mb-[12.7226463104326vw] md:mb-[5.46875vw] lg:mb-[3.28125vw]">
    <div class="w-[83.4605597964377vw] md:w-[87.5vw] lg:w-[82.96875vw] mx-auto">
        <div class="element-fade-in md:hidden">
            <div class="accordion-group">
                <div class="block-fade-in accordion-item">
                    <button class="accordion text-left">
                        <span class="text-[2.54452926208651vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] font-normal text-[#1E1E1E] uppercase my-[5.85241730279898vw]">The challange</span>
                    </button>
                    <div class="panel">
                        <div class="border-[#000] borer-t-[0.5px]"></div>
                        <div class="my-[6.87022900763359vw]">
                            <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-left font-light text-[#1E1E1E]"><?php echo get_field('the_challenge_text');?></p>
                        </div>
                    </div>
                </div>
                <div class="block-fade-in accordion-item">
                    <button class="accordion text-left">
                        <span class="text-[2.54452926208651vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] font-normal text-[#1E1E1E] uppercase my-[5.85241730279898vw]">The approach</span>
                    </button>
                    <div class="panel">
                        <div class="border-[#000] borer-t-[0.5px]"></div>
                        <div class="my-[6.87022900763359vw]">
                            <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-left font-light text-[#1E1E1E]"><?php echo get_field('the_approach_text');?></p>
                        </div>
                    </div>
                </div>
                <div class="block-fade-in accordion-item">
                    <button class="accordion text-left">
                        <span class="text-[2.54452926208651vw] md:text-[1.82291666666667vw] lg:text-[1.71875vw] leading-[4.58015267175572vw] md:leading-[2.34375vw] lg:leading-[2.03125vw] font-normal text-[#1E1E1E] uppercase my-[5.85241730279898vw]">The outcome</span>
                    </button>
                    <div class="panel">
                        <div class="border-[#000] borer-t-[0.5px]"></div>
                        <div class="my-[6.87022900763359vw]">
                            <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] mx-auto text-left font-light text-[#1E1E1E]"><?php echo get_field('the_outcome_text');?></p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="border-[#000] border-t-[0.5px]"></div>
        </div>

        <div class="element-fade-in flex-wrap justify-between hidden md:flex">
            <div class="block-fade-in w-[83.4605597964377vw] md:w-[26.0416666666667vw] lg:w-[23.4375vw]">
                <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.09375vw] font-medium text-[#1E1E1E] uppercase">The challange</h3>
                <div class="border-[#000] border-t-[0.5px] md:my-[2.47395833333333vw] lg:my-[1.484375vw]"></div>
                <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] font-light text-[#1E1E1E]"><?php echo get_field('the_challenge_text');?></p>
            </div>
            <div class="block-fade-in w-[83.4605597964377vw] md:w-[26.0416666666667vw] lg:w-[23.4375vw]">
                <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.09375vw] font-medium text-[#1E1E1E] uppercase">The approach</h3>
                <div class="border-[#000] border-t-[0.5px] md:my-[2.47395833333333vw] lg:my-[1.484375vw]"></div>
                <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] font-light text-[#1E1E1E]"><?php echo get_field('the_approach_text');?></p>
            </div>
            <div class="block-fade-in w-[83.4605597964377vw] md:w-[26.0416666666667vw] lg:w-[23.4375vw]">
                <h3 class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.78125vw] leading-[3.56234096692112vw] md:leading-[1.82291666666667vw] lg:leading-[1.09375vw] font-medium text-[#1E1E1E] uppercase">The outcome</h3>
                <div class="border-[#000] border-t-[0.5px] md:my-[2.47395833333333vw] lg:my-[1.484375vw]"></div>
                <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] md:w-[27.4vw] lg:w-[23.2375vw] font-light text-[#1E1E1E]"><?php echo get_field('the_outcome_text');?></p>
            </div>
        </div>
    </div>
 </section>
 <?php if (get_field('note')): ?> 
 <section class="mb-[12.7226463104326vw] md:mb-[5.46875vw] lg:mb-[3.28125vw] hidden md:block">
    <div class="w-[83.4605597964377vw] md:w-[87.5vw] lg:w-[82.96875vw] mx-auto">
        <p class="text-[2.54452926208651vw] md:text-[1.30208333333333vw] lg:text-[0.9375vw] w-[73.2824427480916vw] font-light text-[#1E1E1E]"><?php echo get_field('note');?></p>
    </div>
 </section>
 <?php endif; ?>
 </div>
<?php endif; ?>
