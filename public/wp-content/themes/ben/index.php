<?php get_header(); ?>
    <main>
        <section id="intro">
            <h2>B³ IS OUR WAY</h2>
            <div class="grid">
                
                <?php
                                $posts = new WP_Query(array('category_name' => 'philosophie' ));
                                if( $posts->have_posts() ) {
                                    while( $posts->have_posts() ) {
                                        $posts->the_post(); // iterate the post here
                            ?>

                              <h2> <?php the_post_thumbnail(); ?> </h2>
                              <div class ="wrapper-image">
                              <?php the_title(); ?>
                              <?php the_content(); ?>
                            </div>
                            <?php
                                    }
                                }
                            ?>
               
                
               
                
        </div>
        </section>
        <section id="workshop">
           <h2>Lerne Backen bei B³</h2>
           <div class="grid">
            <div class="wrapper-text">
                <p>
                    Egal ob Profi oder Anfänger, Ben nimmt sich für euch Zeit und macht euch in kürzester Zeit zum Bäckermeister.
                </p>
                <a href="/?page_id=16">buche jetzt</a>
            </div>
            <img class="grid-image" src="./images/hero.jpg" alt="Brote im Regal"/>

           </div>
        </section>
        <section id="jobs">
            <h2>Lerne Backen bei B³</h2>
           <div class="grid">
            <img class="grid-image" src="./images/hero.jpg" alt="Brote im Regal"/>
            <div class="wrapper-text">
                <p>
                    Dann werde Teil von B³, und mach dein Hobby zum Beruf. Täglich neue Herausforderungen, gratis Backwaren für daheim und viele weitere Boni warten auf dich. 
                </p>
                <a href="/?page_id=28">bewerben</a>
            </div>
                

           </div>
        </section>
    </main>

    <?php get_footer(); ?>