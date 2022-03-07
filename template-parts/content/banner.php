<?php
 $image = get_field('hero__banner');
?>

<div class="ni-about__banner ni-about__banner-mb">
    <img src="<?php
     if($image['url']):
        echo $image['url'];
     else :
         echo 'https://www.nuanceinvestments.com/img/hero.jpg' ;
     endif ;
    ?>" class="ni-about__banner-image" alt="<?php echo $image['alt']; ?>" width="980" height="100"/>
    <h1 class="ni-atom-h1 ni-imgbanner__h1">
    <?php the_field('h1_title') ?></h1>
    <h2 style="color:transparent;"></h2>
</div>