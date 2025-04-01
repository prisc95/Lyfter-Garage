<section class="media-text">
    <div class="container">
        <div class="mt-container-left">
            <img class="swirl" src="wp-content\themes\sage\resources\images\Swirl-pink.png" alt="Swirl">
            <div class="mt-img-wrapper">
                <img id="img1" src="wp-content\themes\sage\resources\images\iPhone-15-straight.png" alt="">
                <img id="img2" src="wp-content\themes\sage\resources\images\Mockup-tm-mask-phone.png" alt="iPhone">
        </div>
    </div>
        <div class="mt-container-right">
            <label for="label" class="tm-label"><i class="circle" ></i><?= get_field('label'); ?></label>
            <h1><?= get_field('header'); ?></h1>
            <p><?= get_field('paragraph'); ?></p>
            <div class="mt-btn-wrapper">
                <button class="btn btn-left"><a href="<?= get_field('button_left_link'); ?>"><i><?= get_field('button_left_icon'); ?></i><p><?= get_field('button_left_text'); ?></p></a></button>
                <button class="btn btn-right"><a href="<?= get_field('button_right_link'); ?>"><i><?= get_field('button_right_icon'); ?></i><p><?= get_field('button_right_text'); ?></p></a></button>
            </div>
            </div>
    </div>
    
</section>