
<?php

get_header();

?>

<main id="maincontent" role="main" >

<div class="container-fluid py-3 g-0"
    style="background-image: linear-gradient(to top ,#7D868C,#686F73,#515859,#515859,#515859); background-color: rgb(99,112,122) !important;">
    <div class="ni-atom-news">
        <h3 class="pt-3 p-md-0 ni-atom-newsh3">News&Updates</h3>
    </div>


    <div class="ni-home__gridwrapper">
        <?php
             $i=1 ;
            for($i=1 ; $i<4 ; $i++){
              $image = get_field("promoimage_$i");
              echo "<div style=\"position:relative;\">".
                "\n<h3 class=\"ni-atom-h3 ni-home__promo-h3\">" ;
                     echo the_field("promotext$i");
                echo "</h3>".
                  "\n<p class=\"ni-atom-p ni-home__promo-p\">" ;
                  echo the_field("subtext$i");
                echo "</p>".
                "<img src=\"";
                echo $image['url']."\" alt=\"";
                echo $image['alt']."\" class=\"ni-atom-img ni-home__promo-img\" /></div>";

            // if( the_field("promotext$i")):{
            //     echo the_field("promotext$i");
            //   }
            // else:
            //   echo "\t";
            // endif;
            }

        ?>



    </div>
</div>


<?php

    if(have_posts()):
 		while(have_posts()):the_post(); ?>
    <?php the_content() ?>
    <?php endwhile;
    else: ?>
    <?php _e("not posts found","wp_posts") ?>
    <?php
	endif
	?>
<?php

  //echo  wp_get_attachment_image($image);

// var_dump($image);
 ?>

</main>
<?php
get_footer();
?>

