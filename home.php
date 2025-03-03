<?php get_header(); ?>
    <main>
        <section class="blog-regular mt-5">
            <h2>Popular topics</h2>
            <nav class="nav_main_item">
                <a href="" class="main-item m-1">All</a>
                <a href="" class="main-item m-1">Adventure</a>
                <a href="" class="main-item m-1">Travel</a>
                <a href="" class="main-item m-1">Fashion</a>
                <a href="" class="main-item m-1">Technology</a>
                <a href="" class="main-item m-1">Branding</a>
                <a href="" class="main-item ms-1">View All</a>
            </nav>


<!-- Loop entades -->

    <section>
     <div class="blog-row1 row mt-4">

    <?php 
    if (have_posts()){
        global $wp_query;


        the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'Anterior', 'textdomain'),
            'next_text' => __( 'Siguiente', 'textdomain'),
        ));


        while (have_posts()){
            the_post();
    ?>

                <div class="blog">
                    <div class="fashion blog">
                    <picture class="thumbnail">
                    <?php
                    if (has_post_thumbnail()){
                        the_post_thumbnail('medium', array('class' => 'rounded v-100'));
                    } else {
                        _e('Sense imatge en el post');                    
                    }
                    ?>
                    </picture>
                        <p>Fashion</p>
                    </div> 
                    <p class="blog-date">08.08.2021</p>
                    <a class="noticia_link" href="<?php the_permalink(); ?>">
                        <h3 class="blog-title"><?php echo the_title(); ?></h3>                    
                    </a>
                    <p class="blog-text"><?php the_excerpt(); ?></p>
                </div>
                
    <?php
      }            
      
      
      the_posts_pagination( array(
          'mid_size' => 2,
          'prev_text' => __( 'Anterior', 'textdomain'),
          'next_text' => __( 'Siguiente', 'textdomain'),
        ));
        
    } else {
        _e('No hi ha posts disponibles');
    }
    ?>           
    </div>
    </section>



<!-- Acaba el loop -->
        </section>
        
        <section class="blog_big_post">
            <div class="big_post_content">
                <div class="fashion">
                    <p>Fashion</p>
                </div>
                <div>
                    <h3>Richird Norton photorealistic
                        rendering as real photos</h3>
                </div>
                <div>
                    <p class="sub_title">Progressively incentivize cooperative systems through technically sound functionalities. 
                        The credibly productivate seamless data.</p>
                </div>
                <div>
                    <p class="sub_title">08.08.2021</p>
                </div>
                
            </div>
        </section>
        <section class="blog_metro container pb-5">
            <h2 class="text-start my-4">Editor's Pick</h2>
            <div class="row">
                <div class="col-12 col-lg-6 mb-4">
                    <div class="blog_editors_pick_1 p-3 border rounded">
                        <div class="editors_pick_content">
                            <p><b>08.08.2021</b></p>
                            <h3>Richard Norton photorealistic rendering as real photos</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Veritatis fuga maxime vel pariatur rerum vero, ex doloremque odio magnam</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <div class="blog_editors_pick_2 p-3 border rounded">
                        <div class="editors_pick_content">
                            <p><b>08.08.2021</b></p>
                            <h3>Richard Norton photorealistic rendering as real photos</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Veritatis fuga maxime vel pariatur rerum vero, ex doloremque odio magnam</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer() ?>