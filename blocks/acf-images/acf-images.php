<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image01 = get_field('image_1');
$image01_url = isset($image01['url']) ? esc_url($image01['url']) : '';
$image01_alt = isset($image01['alt']) ? esc_attr($image01['alt']) : '';
?>
<?php
$image02 = get_field('image_2');
$image02_url = isset($image02['url']) ? esc_url($image02['url']) : '';
$image02_alt = isset($image02['alt']) ? esc_attr($image02['alt']) : '';
?>
<?php
$image03 = get_field('image_3');
$image03_url = isset($image03['url']) ? esc_url($image03['url']) : '';
$image03_alt = isset($image03['alt']) ? esc_attr($image03['alt']) : '';
?>
<?php
$image04 = get_field('image_4');
$image04_url = isset($image04['url']) ? esc_url($image04['url']) : '';
$image04_alt = isset($image04['alt']) ? esc_attr($image04['alt']) : '';
?>
<?php
$image05 = get_field('image_5');
$image05_url = isset($image05['url']) ? esc_url($image05['url']) : '';
$image05_alt = isset($image05['alt']) ? esc_attr($image05['alt']) : '';
?>
<!-- IMAGES -->
<div class="bg-[#FFFCF3]">
 <?php if (get_field('how_many_images') === "one"): ?>   
 <div class="w-full h-[51.6539440203562vw] md:h-[52.734375vw] lg:h-[51.5625vw] overflow-hidden">
    <?php if (get_field('video_1')): ?>   
        <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php echo get_field('video_1');?>#t=0.001" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
    <?php endif; ?>
    <img src="<?php echo $image01_url; ?>" alt="<?php echo $image01_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
 </div>
<?php endif; ?>
<?php if (get_field('how_many_images') === "two"): ?>   
 <div class="w-full overflow-hidden grid grid-cols-1 md:grid-cols-2">
    <div class="w-full h-[102.035623409669vw] md:h-[52.2135416666667vw] lg:h-[51.5625vw] overflow-hidden">
        <?php if (get_field('video_1')): ?>   
            <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video_1');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
        <img src="<?php echo $image01_url; ?>" alt="<?php echo $image01_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    </div>
    <div class="w-full h-[102.035623409669vw] md:h-[52.2135416666667vw] lg:h-[51.5625vw] overflow-hidden">
        <?php if (get_field('video_2')): ?>   
            <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video_2');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
        <img src="<?php echo $image02_url; ?>" alt="<?php echo $image02_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    </div>
 </div>
<?php endif; ?>
<?php if (get_field('how_many_images') === "three"): ?>   
<div class="w-full overflow-hidden grid grid-cols-1 md:grid-cols-2 my-[3.30788804071247vw] md:my-[1.69270833333333vw] lg:my-[1.71875vw] items-stretch">
    <div class="w-full h-[103.307888040712vw] md:h-[54.4270833333333vw] lg:h-[53.28125vw] overflow-hidden">
        <?php if (get_field('video_3')): ?>   
            <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video_3');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
        <img src="<?php echo $image01_url; ?>" alt="<?php echo $image01_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    </div>
    <div class="w-full h-[103.307888040712vw] md:h-[54.4270833333333vw] lg:h-[53.28125vw] grid grid-rows-2 gap-[3.30788804071247vw] md:gap-[1.69270833333333vw] lg:gap-[1.71875vw] md:ml-[1.69270833333333vw] lg:ml-[1.71875vw] pt-[3.30788804071247vw] md:pt-[unset] px-[3.30788804071247vw] md:px-[unset]">
        <div class="overflow-hidden">
            <?php if (get_field('video_2')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_2');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image02_url; ?>" alt="<?php echo $image02_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="overflow-hidden">
            <?php if (get_field('video_3')): ?>   
            <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video_3');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
            <img src="<?php echo $image03_url; ?>" alt="<?php echo $image03_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
    </div>
</div>
<?php endif; ?>
<?php if (get_field('how_many_images') === "four"): ?>   
<div class="w-full overflow-hidden grid grid-cols-1 md:grid-cols-2 my-[3.30788804071247vw] md:my-[1.69270833333333vw] lg:my-[1.71875vw] items-stretch">
    <div class="w-full h-[102.035623409669vw] md:h-[52.2135416666667vw] lg:h-[51.5625vw] grid grid-rows-2 grid-cols-2 gap-[3.30788804071247vw] md:gap-[1.69270833333333vw] lg:gap-[1.71875vw] overflow-hidden md:pr-[1.69270833333333vw] lg:pr-[1.71875vw] pb-[3.30788804071247vw] md:pb-[unset] px-[3.30788804071247vw] md:px-[unset]">
        <div class="w-full h-full row-span-2 overflow-hidden">
            <?php if (get_field('video_1')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_1');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image01_url; ?>" alt="<?php echo $image01_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="w-full h-full overflow-hidden">
            <?php if (get_field('video_2')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_2');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image02_url; ?>" alt="<?php echo $image02_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="w-full h-full overflow-hidden">
             <?php if (get_field('video_3')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_3');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image03_url; ?>" alt="<?php echo $image03_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
    </div>
    <div class="w-full h-[102.035623409669vw] md:h-[52.2135416666667vw] lg:h-[51.5625vw] overflow-hidden ">
         <?php if (get_field('video_4')): ?>   
            <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video_4');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
        <img src="<?php echo $image04_url; ?>" alt="<?php echo $image04_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    </div>
 </div>
<?php endif; ?>
<?php if (get_field('how_many_images') === "five"): ?>   
<div class="w-full overflow-hidden grid grid-cols-1 md:grid-cols-2 my-[3.30788804071247vw] md:my-[1.69270833333333vw] lg:my-[1.71875vw] items-stretch">
    <div class="w-full h-[102.035623409669vw] md:h-[52.2135416666667vw] lg:h-[51.5625vw] grid grid-rows-2 grid-cols-2 gap-[3.30788804071247vw] md:gap-[1.69270833333333vw] lg:gap-[1.71875vw] overflow-hidden md:pr-[1.69270833333333vw] lg:pr-[1.71875vw] pb-[3.30788804071247vw] md:pb-[unset] px-[3.30788804071247vw] md:px-[unset]">
        <div class="w-full h-full overflow-hidden">
            <?php if (get_field('video_1')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_1');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image01_url; ?>" alt="<?php echo $image01_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="w-full h-full overflow-hidden">
            <?php if (get_field('video_2')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_2');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image02_url; ?>" alt="<?php echo $image02_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="w-full h-full overflow-hidden">
            <?php if (get_field('video_3')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_3');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image03_url; ?>" alt="<?php echo $image03_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="w-full h-full overflow-hidden">
            <?php if (get_field('video_4')): ?>   
                <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                <source src="<?php echo get_field('video_4');?>#t=0.001" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
            <img src="<?php echo $image04_url; ?>" alt="<?php echo $image04_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
    </div>
    <div class="w-full h-[102.035623409669vw] md:h-[52.2135416666667vw] lg:h-[51.5625vw] overflow-hidden ">
        <?php if (get_field('video_5')): ?>   
            <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video_5');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
         <img src="<?php echo $image05_url; ?>" alt="<?php echo $image05_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    </div>
 </div>
<?php endif; ?>
</div>
<?php endif; ?>
