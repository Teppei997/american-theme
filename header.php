<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js" defer></script>


    <script src="<?php echo get_template_directory_uri(); ?>/app.js" defer ></script>
    <?php wp_head(); ?>
</head>
<body>
　　<header>

    <!-- Navigation -->
    <nav id="navi" class="navi" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <div id="navi-in" class="navi-in">
      <?php wp_nav_menu(
        array (
          //カスタムメニュー名
          'theme_location' => 'header-navi',
          //コンテナを表示しない
          'container' => false,
          //カスタムメニューを設定しない際に固定ページでメニューを作成しない
          'fallback_cb' => false,
          //出力されるulに対してidやclassを表示しない
          'items_wrap' => '<ul>%3$s</ul>',
        )
      ); ?>
      </div><!-- /#navi-in -->
    </nav>
<!-- /Navigation -->
      <!-- class="drawer drawer--left" の2つが追加されるように -->
<body <?php body_class( ['drawer', 'drawer--left'] ); ?>>

<!-- 中略 -->

<!-- ハンバーガーボタン -->
<button type="button" class="drawer-toggle drawer-hamburger"><i class="fa fa-bars" aria-hidden="true"></i></button>
<!-- ナビゲーションの中身 -->
<nav class="drawer-nav" role="navigation">
  <!-- メニューの読み込み -->
  <?php wp_nav_menu( array( 'theme_location' => 'my-drawer', 'menu_class' => 'drawer-menu', 'container' => false, 'depth' => 1 ) ); ?>
</nav>

<!-- 中略 -->

      


    <div class="img-box1">
    
      <img class="left u-pc" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      <img class="left u-sp" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">

      <img class="back u-pc"  src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="">
      <img class="back u-sp"  src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="">

      <img class="right u-pc"  src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt=""> 
      <img class="right u-sp"  src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt=""> 

    </div>


   </header>