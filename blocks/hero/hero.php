<script src="https://kit.fontawesome.com/ed508f75e6.js" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap');
    </style>

<section class="hero">
    <div class="container">
        <div class="hero-container-left">
            <label for="hero-label"><i></i><?= get_field('label'); ?></label>
            <div><h1><?= get_field('header'); ?></h1></div>
            <p><?= get_field('paragraph'); ?></p>
            <div class="hero-btn-wrapper">
                <button class="hero-btn-left"><a href="<?= get_field('button_left_link'); ?>"><i><?= get_field('button_left_icon'); ?></i><?= get_field('button_left_text'); ?></a></button>
                <button class="hero-btn-right"><a href="<?= get_field('button_right_link'); ?>"><i><?= get_field('button_right_icon'); ?></i><?= get_field('button_right_text'); ?></a></button>     
            </div>
        </div>
    </div>
    <div class="hero-container-right">
        <img src="wp-content\themes\sage\resources\images\hero image 1.jpg" id="img1" alt="Neighbourhood">
        <div class="hero-phone-wrapper">
            <img src="wp-content\themes\sage\resources\images\iPhone-15-straight.png" id="img2" alt="iPhone">
            <img src="wp-content\themes\sage\resources\images\Mockup-hero-mask-phone.png" id="img4" alt="iPhone">
        </div>
        <img src="wp-content\themes\sage\resources\images\Smartwatch.png" id="img3" alt="Smartwatch">
        
    </div>
</section>