<?php get_header();?>

              <main>
                <?php if (have_posts( )): ?>
                  <?php while(have_posts()): the_post() ?>
                      <h1 id="archive_forms_top"><?php the_title(); ?></h1>
                      <?php endwhile; ?>
                <?php endif; ?>
  
  
              <section class="archive_forms_section">
                  <div class="container-fluid archive_main_container">
                    <div class="row">
                     <div class="archiveform_main_block">
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
              </main>
            <?php get_footer(); ?>