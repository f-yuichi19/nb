<!DOCTYPE html>
<html lang="ja">

<head>
<title>MyProfile</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--CSSの読み込み-->
  <link 
  rel="stylesheet" 
  href="<?php echo get_template_directory_uri(); ?>\style.css"
  />
  

  <!--ブートストラップの読み込み-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
  crossorigin="anonymous">

  <!-- slickをCDN経由で読み込む -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

<!--フォントの読み込み -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Merriweather&family=Noto+Sans+JP&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
    <!-- ナビゲーションメニュー -->
    <header class="header_a">
        <div class="container header_container">
                <!--ロゴ-->  
                      <div class="aria_logo_header">
                            <div class="header_logo_block">
                                <div class="nav_suzu">
                                    <a class="logo" href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>\image\suzu2.png" class="icon_img" alt="ロゴ">
                                    </a>
                                </div>
    
                                <div>
                                    <a class="nav_name" href="<?php echo home_url(); ?>">
                                        <p>SHUNSUKE MOTHIZUKI</p>
                                    </a>
                                </div>
                            </div>
                      </div>    
                <!--ナビゲーション-->
                <nav class="area_nav_header">
                        <ul class="list_nav_header">
                            <li class="header_list">
                                <a href="<?php echo home_url(); ?>\profiles\">PROFILE</a>
                            </li>
                            <li class="header_list">
                                <a href="<?php echo home_url(); ?>\works\">WORKS</a>
                            </li>
                            <li class="header_list">
                                <a href="<?php echo home_url(); ?>\contacts\">CONTACT</a>
                            </li>
                        </ul>
                </nav>
            </div>
        </header>