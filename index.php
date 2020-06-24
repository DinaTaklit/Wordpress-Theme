<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>

<div class="container">
    <div class="row">
<?php
    if (have_posts()){// Check if there is a post 
        while(have_posts()){ //Loop through Posts 
            the_post();
            ?>
                <div class="col-sm-6">
                    <div class="main-post">
                        <h3 class="post-title">
                            <a href="<?php the_permalink( ) ?>">
                            <?php the_title(); ?>
                            </a>                        
                        </h3>  
                        <span class="post-author"> <i class="fa fa-user fa-fw" aria-hidden="true"></i> <?php the_author_posts_link() ?>, </span>
                        <span class="post-date"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>  <?php the_time('F j, Y')?>, </span>
                        <span class="post-comments"> <i class="fa fa-comment fa-fw" aria-hidden="true"></i>
                          <?php comments_popup_link( "0 Comments", "One Comment", "% Comments", "comment-url", " ")?>
                        </span>
                        <?php the_post_thumbnail( '', ['class' => 'post-img img-fluid img-thumbnail'])?>
                        <hr>
                        <p class="post-categories">
                            <i class="fa fa-tags fa-fw" aria-hidden="true"></i>
                            <?php the_category( ', ')?>
                        </p>                    
                    </div>
                </div>
            <?php     
        }// End Loop 
    }// End If condition
?>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title"> Lean Html </h3>
                <span class="post-author"> <i class="fa fa-user fa-fw" aria-hidden="true"></i> Dina, </span>
                <span class="post-date"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>  13/06/2020, </span>
                <span class="post-comments"> <i class="fa fa-comment fa-fw" aria-hidden="true"></i>  20 comments</span>
                 <img class="post-img img-fluid img-thumbnail" src="http://placehold.it/600x200/300" alt="">
                <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem soluta repudiandae eum natus iure doloribus excepturi veniam libero minima fugiat, repellat, nulla dolorum quod! Iusto quibusdam iure distinctio accusantium hic.Beatae ipsum nam fugit delectus quas voluptas.
                </p>
                <hr>
                <p class="post-categories">
                    <i class="fa fa-tags fa-fw" aria-hidden="true"></i>
                    html, css
                </p>
            </div>
        </div>  
    </div>
</div> -->

<?php
get_footer();