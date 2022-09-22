<?php
/*
Template Name: 出演実績
Template Post Type: post
*/
?>
<?php get_header();?>
   <main class="work-main">
        <section class="work_section">
        <?php    
            $query = new WP_Query(array(
            'post_type' => "post",
            'category_name' => 'works',
            'order' => 'ASC',
            'orderby' => 'modified',
            ));
            if($query->have_posts()){
            while($query->have_posts()){
            $query->the_post();
        ?>
            <div class="container work_container">
                <div class="row">
                    <div class="work_main_block">
                        <div>
                            <div class="work_title_block">
                                <h2 class="profile_title"><?php the_title(); ?></h2>
                            </div>
                        </div>
                        
                        <div class="work_content">
                            <div class="work_p"><?php the_content(); ?></div>
                        </div>
                    </div>
    
                    <?php
                        } //記事の繰り返しの終了
                        }else{
                        echo '随時更新中';//記事が無かった場合の内容
                    } //記事の有無の分岐終了
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
   </main>
<?php get_footer();?>