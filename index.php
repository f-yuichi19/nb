<?php get_header();?>
<main>
      <article>

        <!-- メイン画像 -->
         
            <section>
  
              <div class="container-fluid">
                <div class="row">
                  <div main_img_slid>
                    <!--======== jQuery発展編ここから ========-->          
                    <ul class="slider">
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dora.png" alt="もっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_voice.png" alt="声優もっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_piano.png"alt="ピアニストもっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dj2.png"alt="DJもっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_rakugo.png"alt="落語もっちー" class="mainpic" /></li>
                    </ul>
                
                    <!--======== jQuery発展編ここまで ========-->
                  </div>
                </div>
              </div>
            </section>
  
            <!-- About -->
            <h1 id="about">About Motchi!</h1>
            <section class="about">
                <div class="container-fluid">
                  <div class="row">
                     <div class="col-md">
                       <div class="about_motchi_main">
                          <div> 
                            <img src="<?php echo get_template_directory_uri(); ?>/image/motchi2.png"alt="落語もっちー" class="circle" />
                          </div>
                          
                          <div class="about_motchi_content">
                            <div><p class="name">Shunsuke Motchiduki</p></div>
                            <div>
                              <ul class="about_ul">
                                <li>1992年 4月26日 静岡県出身</li>
                                <li>声優/ピアノ演奏/DJ（アニソン）/フリーBGM作成/バーテンダー/ゲーム実況</li>
                                <li>ドラえもんをこよなく愛する</li>
                                <li>少し不思議な四次元パフォーマー</li>
                              </ul>
                            </div>
                          </div>
  
                       </div>
                     </div>
                  </div>
                </div>
            </section>
                
            <section>
  
            </section>
  
            <!-- Works -->
            <h1 id="works">Styles</h1>
            <section class="works">
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-4">
                        <div class="styles_motchi_block">
                          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/motchi8.png" alt="日本海" class="styles_motchi_img pw-100" /></a>
                          <p class="styles_motchi_p">好きをとことん追及する。</p>
                        </div>
                      </div>
        
                      <div class="col-lg-4">
                        <div class="styles_motchi_block">
                          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/motchi6.png" alt="冠雪した御嶽山" class="styles_motchi_img pw-100" /></a>
                          <p class="styles_motchi_p">あらゆる経験が僕を強くする。</p>
                        </div>
                      </div>
        
                      <div class="col-lg-4">
                        <div class="styles_motchi_block">
                          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/motchi7.png" alt="京都の街並み" class="styles_motchi_img pw-100" /></a>
                          <p class="styles_motchi_p">最高のエンターテイメントをあなたへ。</p>
                        </div>
                      </div>
                  </div>
                </div>
            </section>
            <?php get_footer(); ?>