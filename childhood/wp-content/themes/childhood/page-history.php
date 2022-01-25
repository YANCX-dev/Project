<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
            <div class="container">
                <h1 class="title">Наша история</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('h_title1'); ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('h_text1'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="about__img"><br><br>
                                <?php 
                                    $image = get_field('h_img1');

                                if (!empty($image)): ?>
                                    <img 
                                    src= "<?php echo $image['url']; ?>"
                                    alt= "<?php echo $image['alt']; ?>">
                                    <?php endif; ?>
                    
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                    <div class="about__img"><br><br>
                                <?php 
                                    $image = get_field('h_img2');

                                if (!empty($image)): ?>
                                    <img 
                                    src= "<?php echo $image['url']; ?>"
                                    alt= "<?php echo $image['alt']; ?>">
                                    <?php endif; ?>
                    
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('h_title2'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('h_text2'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('h_title3'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('h_text3'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="about__img"><br><br>
                                <?php 
                                    $image = get_field('h_img3');

                                if (!empty($image)): ?>
                                    <img 
                                    src= "<?php echo $image['url']; ?>"
                                    alt= "<?php echo $image['alt']; ?>">
                                    <?php endif; ?>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
    get_footer();
?>