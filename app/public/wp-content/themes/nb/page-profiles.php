<?php
/*
Template Name: プロフィール
Template Post Type: profiles
*/
?>

<?php get_header();?>
<main class="profile_main">
    <!--
            <section class="profile_section">
                    <div class="container profile_container">
                        <div class="row">
                            <div class="l-wrapper_02 card-radius_02">
                                <article class="card_02">
                                    <div class="card__header_02">
                                    <p class="card__title_02">望月駿佑</p>
                                    <figure class="card__thumbnail_02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/motchi7.png" alt="サムネイル" class="card__image_02">
                                    </figure>
                                    </div>
                                    <div class="card__body_02">
                                    <p class="card__text2_02">
                                            声優でありながらＤＪとしても活躍するマルチプレイヤー
                                            元・声優+ストリートダンスユニット「A+DF」メンバーで
                                            絶対音感を持つピアニストでもある。<br>
                                            大ファンである漫画作品【ドラえもん】から着想を得た
                                            「すこし・不思議な四次元パフォーマー」として活動し、
                                            バーテンダーや脚本執筆等、幅広く活躍の場を広げている。
                                    </p>
                                    </div>    
                                </article>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="profile_section">
                    <div class="container profile_container">
                        <div class="row">
                            <div class="l-wrapper_02 card-radius_02">
                                <article class="card_02">
                                    <div class="card__header_02">
                                    <p class="card__title_02">DJ</p>
                                    <figure class="card__thumbnail_02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dj2.png" alt="サムネイル" class="card__image_02">
                                    </figure>
                                    </div>
                                    <div class="card__body_02">
                                    <p class="card__text2_02">
                                        所属するアニソンディスコでは、
                                        毎回汗だくになる全力パフォーマンスでフロアを沸かせている。<br>
                                        懐かしのアニメから現代のアニメまで幅広い年代のアニソンを駆使、
                                        トリを飾るのはもちろんドラえもんの曲である。
                                    </p>
                                    </div>    
                                </article>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="profile_section">
                    <div class="container profile_container">
                        <div class="row">
                            <div class="l-wrapper_02 card-radius_02">
                                <article class="card_02">
                                    <div class="card__header_02">
                                    <p class="card__title_02">DANCE</p>
                                    <figure class="card__thumbnail_02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dance.png" alt="サムネイル" class="card__image_02">
                                    </figure>
                                    </div>
                                    <div class="card__body_02">
                                    <p class="card__text2_02">
                                            ジャズダンスをメインとし、
                                            ストリートダンスユニット「A+DF（エー・ディーエフ）」としても活動。<br>
                                            数々のダンスイベントにも出演した経歴を持つ。<br>
                                            ダンスでも全力のパフォーマンスで観客を魅了する。
                                    </p>
                                    </div>    
                                </article>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="profile_section">
                    <div class="container profile_container">
                        <div class="row">
                            <div class="l-wrapper_02 card-radius_02">
                                <article class="card_02">
                                    <div class="card__header_02">
                                    <p class="card__title_02">PIANO</p>
                                    <figure class="card__thumbnail_02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/motchi_piano.png" alt="サムネイル" class="card__image_02">
                                    </figure>
                                    </div>
                                    <div class="card__body_02">
                                    <p class="card__text2_02">
                                        ピアノの演奏動画や配信、
                                        オリジナルのフリー音源を作成しYouTubeやTwitterなどでも公開している。<br>
                                        また、仲間のアーティストと共にピアノの生演奏と生歌のコラボ動画も多数あげている。
                                    </p>
                                    </div>    
                                </article>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="profile_game_section">
                    <div class="container profile_container">
                        <div class="row">
                            <div class="l-wrapper_02 card-radius_02">
                                <article class="card_02">
                                    <div class="card__header_02">
                                    <p class="card__title_02">GAME</p>
                                    <figure class="card__thumbnail_02">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/motchi_game.png" alt="サムネイル" class="card__image_02">
                                    </figure>
                                    </div>
                                    <div class="card__body_02">
                                    <p class="card__text2_02">
                                    とんドラというゲーム実況ユニットでドラキチ名義でも活動。<br>
                                    相方のとんこつとは和気藹々とした雰囲気で息の合った実況プレーを発揮。<br>
                                    ただしホラーゲームなどではいつも饒舌なもっちーも驚きのあまり語彙力を喪失することもしばしば。
                                    </p>
                                    </div>    
                                </article>
                            </div>
                        </div>
                    </div>
            </section>-->

            <section class="profile_section">
                <?php    
                $query = new WP_Query(array(
                'post_type' => "post",
                'category_name' => 'profiles',
                'order' => 'ASC',
                'orderby' => 'modified',
                ));
                if($query->have_posts()){
                while($query->have_posts()){
                $query->the_post();
                ?>
                    <div class="container profile_container">
                        <div class="row">
                            <div class="l-wrapper_02 card-radius_02">
                                <article class="card_02">
                                    <div class="card__header_02">
                                    <p class="card__title_02"><?php the_title(); ?></p>
                                    <figure class="card__thumbnail_02">
                                        <div class="card__image_02">
                                        <img src="<?php the_field('sub_image'); ?>" alt="サムネイル" class="card__image_02">
                                        </div>
                                    </figure>
                                    </div>
                                    <div class="card__body_02">
                                    <p class="card__text2_02">
                                        <?php the_content(); ?>
                                    </p>
                                    </div>    
                                </article>
                            </div>
                        </div>
                    </div>
                    <?php
                        } //記事の繰り返しの終了
                        }else{
                        echo '随時更新中';//記事が無かった場合の内容
                    } //記事の有無の分岐終了
                    wp_reset_postdata();
                    ?>
            </section>
</main>
    <?php get_footer();?>