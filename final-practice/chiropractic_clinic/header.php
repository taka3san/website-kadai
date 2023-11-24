<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <!-- <link rel="stylesheet" href="css/reset.css" /> -->
  <!-- <link rel="stylesheet" href="css/slick.css" /> -->

  <!-- google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


  <!-- <link rel="stylesheet" href="css/style.css" /> -->

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP:wght@400;700&family=Shippori+Mincho:wght@500&display=swap" rel="stylesheet" />

  <title>SAMURAI整骨院</title>

  <!-- CSSファイルの読み込み -->
  <!-- プラグインのCSSも読み込む -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header id="<?php if (is_front_page()) : ?>header<?php else : ?>header-stati<?php endif; ?>">
    <div class="container">
      <nav class="nav-content">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon/header_logo.png" alt="SAMURAI整骨院" />
        </div>
        <!-- PC版メニュー -->
        <div class="nav-list">
          <ul>
            <li class="nav-item"><a href="/">ホーム</a></li>
            <li class="nav-item"><a href="/about/">当院について</a></li>
            <li class="nav-item"><a href="/course/">コース・料金</a></li>
            <li class="nav-item"><a href="/news/">お知らせ</a></li>
            <li class="nav-item"><a href="/voice/">お客様の声</a></li>
          </ul>
          <div class="btn">
            <a class="wh" href="/contact/">ご予約・お問い合わせ</a>
          </div>
        </div>
        <!-- ハンバーガーメニュー -->
        <div class="sp-nav">
          <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
          <input id="drawer_input" class="drawer_hidden" type="checkbox" />

          <!-- ハンバーガーアイコン -->
          <label for="drawer_input" class="drawer_open"><span></span></label>

          <!-- メニュー -->
          <nav class="sp-nav_content">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon/sp_header_logo.png" alt="SAMURAI整体院" />
            </div>
            <div class="sp-menu">
              <h3 class="c0c4">メニュー</h3>
              <ul class="sp-nav_list">
                <li class="sp-nav_item"><a href="/">ホーム</a></li>
                <li class="sp-nav_item">
                  <a href="/about/">当院について</a>
                </li>
                <li class="sp-nav_item">
                  <a href="/course/">コース・料金</a>
                </li>
                <li class="sp-nav_item">
                  <a href="/news/">お知らせ</a>
                </li>
                <li class="sp-nav_item">
                  <a href="/voice/">お客様の声</a>
                </li>
              </ul>
              <div class="btn">
                <a class="wh" href="contact">ご予約・お問い合わせ</a>
              </div>
            </div>
          </nav>
        </div>
      </nav>
    </div>


  </header>