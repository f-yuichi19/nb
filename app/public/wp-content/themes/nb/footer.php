        <!-- フッター -->
        <footer class="footer">
          <section class="footer_section">
            <div class="container footer_container">
              <div class="row footer_row">
                  <div class="col-lg-6 footer_left clearfix">
                    <div>
                      <h2 class="footer_h">望月駿佑Twitter</h2>
                    </div>
                    <div>
                      <a class="twitter-timeline" data-height="265" href="https://twitter.com/ADFshunsuke2112?ref_src=twsrc%5Etfw">Tweets by ADFshunsuke2112</a>
                       <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
  
                        
                  </div>
  
                  <div class="col-lg-6 footer_right">
                    <div class="footer_right_block">
  
                      <div>
                        <h2 class="footer_h">関連リンク</h2>
                      </div>
  
                      <div class="footer_link_container">
                        <div class="footer_link_block">
                          <div class="footer_link_icon">
                            <a class="footer_link_a" href="https://www.youtube.com/channel/UCYUVJgc1b5wOe4IqBMQPwDA">
                              <img src="<?php echo get_template_directory_uri(); ?>\image\tonndora.png" class="tonndora_icon" alt="ロゴ">
                            </a>
                          </div>
          
                          <div class="footer_link_name">
                            <a class="footer_link_a" href="https://www.youtube.com/channel/UCYUVJgc1b5wOe4IqBMQPwDA">
                              <p class="footer_p">とんドラYoutubeチャンネル</p>
                            </a>
                          </div>
                        </div>
    
                        <div class="footer_link_block">
                          <div class="footer_link_icon">
                            <a class="footer_link_a" href="https://twitter.com/gmEInJpumvBhoBr?s=20&t=kbQovqLkpPBKm6VgHaj6aA">
                              <img src="<?php echo get_template_directory_uri(); ?>\image\twitter.png" class="icon_img" alt="ロゴ">
                            </a>
                          </div>
          
                          <div class="footer_link_name">
                            <a class="footer_link_a" href="https://twitter.com/gmEInJpumvBhoBr?s=20&t=kbQovqLkpPBKm6VgHaj6aA">
                              <p class="footer_p">とんドラTwitter</p>
                            </a>
                          </div>
                        </div>
    
                        <div class="footer_link_block">
                          <div class="footer_link_icon">
                            <a class="footer_link_a" href="https://twitter.com/anisondisco?s=20&t=hor_pXDW3uMtJcvRl3W0aQ">
                              <img src="<?php echo get_template_directory_uri(); ?>\image\twitter.png" class="icon_img" alt="ロゴ">
                            </a>
                          </div>
          
                          <div class="footer_link_name">
                            <a class="footer_link_a" href="https://twitter.com/anisondisco?s=20&t=hor_pXDW3uMtJcvRl3W0aQ">
                              <p class="footer_p">アニソンディスコTwitter</p>
                            </a>
                          </div>
                        </div>
                      </div>
  
                    </div>
                  </div>
  
              </div>
            </div>
    
              <div class="row copyright_row">
                <div class="col">
                  <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    <div class="cr_text">
                      Copyright &copy; SHUNSUKE MOTCHIDUKI All Rights Reserved.
                    </div>
                  </div>
                </div>
              </div>
          </section>
          </footer>
    </article>
  </main>
<?php wp_footer(); ?>
  <!--======== jQuery発展編ここから ========-->

  <!-- TOPに戻るボタン -->
  <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/image/suzu2.png" alt="鈴"id="page-top" class="img-fluid" /></a>

  <!-- モーダル -->
  <div class="modal">
    <img src="" alt="" class="big-img">
    <a href="" class="close-btn">✖</a>
  </div>

  <!-- jQueryをCDN経由で読み込む -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <!-- JSファイルを読み込む-->
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  <!--ブートストラップの読み込み-->
    <script src="
    https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- slickをCDN経由で読み込む -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!--======== jQuery発展編ここまで ========-->
</body>

</html>