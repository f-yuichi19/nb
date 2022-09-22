<?php get_header();?>
<main>
      <article>

        <!-- メイン画像 -->
         
            <section>
            <h1>Shunsuke Motchiduki</h1>
              <div class="container-fluid main_image_container">
                <div class="row">
                  <div class="main_img_block">
                      <img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dora.png" class="mainpic" alt="">
                  </div>
                  <!--<div main_img_slid>          
                    <ul class="slider">
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dora.png" alt="もっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_voice.png" alt="声優もっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_piano.png"alt="ピアニストもっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_dj2.png"alt="DJもっちー" class="mainpic" /></li>
                      <li><img src="<?php echo get_template_directory_uri(); ?>/image/motchi_rakugo.png"alt="落語もっちー" class="mainpic" /></li>
                    </ul>
                  </div>-->
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
                            <div class="about_name"><p class="name">Shunsuke Motchiduki</p></div>
                            <div class="about_motchi_subcontent">
                              <ul class="about_ul">
                                <li class="about_li">1992年 4月26日 静岡県出身</li>
                                <li class="about_li">声優/ピアノ演奏/DJ（アニソン）/フリーBGM作成/バーテンダー/ゲーム実況</li>
                                <li class="about_li">ドラえもんをこよなく愛する</li>
                                <li class="about_li">少し不思議な四次元パフォーマー</li>
                              </ul>
                              <a href="<?php echo home_url(); ?>\work\"><button type="button" class="btn btn-primary">出演実績はこちら</button></a href="<?php echo home_url(); ?>\work\">
                            </div>
                          </div>
  
                       </div>
                     </div>
                  </div>
                </div>
            </section>
            <!--VOICE SAMPLE-->
            <h1 id="sample">Voice Sample</h1>    
            <section>
            <div class="container-fluid sample_container">
              <div class="sample_sub_container">
                
                    <div class="row">
                        <div class="col-lg-6">
                          <div class="sample_motchi_block">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ekfM4qIFNw0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                          </div>
                        </div>
          
                        <div class="col-lg-6">
                          <div class="sample_motchi_block">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/aVCDOPeVGeA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                    </div>
              </div>
                </div>
            </section>
  
            <!-- Forms -->
            <h1 id="forms_top">Contact</h1>
            <section class="forms_section">
                <div class="container-fluid">
                  <div class="row">
                   <div class="form_main_block">
                      <div class="form_sub_block">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">お名前</label>
                          <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="お名前">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">御社名</label>
                          <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="御社名">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">お電話番号</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="お電話番号">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label ">メールアドレス</label>
                          <input type="email" class="form-control" id="exampleFormControlInput4" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">お問い合わせ内容</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary">送信</button>
                      </div>
                   </div>
                  </div>
                </div>
            </section>
            <?php get_footer(); ?>