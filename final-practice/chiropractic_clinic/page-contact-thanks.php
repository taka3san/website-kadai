<!-- ヘッダー -->
<?php get_header(); ?>

<main>
  <article>
    <section id="submit-sec01" class="com-sec01">
      <div class="container">
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact/contact_main_visual.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact/sp_contact_main_visual.png" alt="" />
          </picture>
        </div>
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact/contact_bg.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact/sp_contact_bg.png" alt="黄緑色の背景" />
          </picture>
        </div>
        <div class="main-msg">
          <h1 class="c468">Contact</h1>
          <h4 class="c468">ご予約・お問い合わせ</h4>
        </div>
      </div>
    </section>
    <!-- ナビゲーション -->
    <section id="submit-sec02">
      <div class="container">
        <!-- パンくずリスト -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
        <!-- <div class="breadcrumb">
          <a href="index.html">ホーム</a><span class="material-symbols-outlined"> navigate_next </span>
          <p class="c0c4">ご予約お問い合わせ</p>
        </div> -->
      </div>
    </section>
    <section id="submit-sec03">
      <div class="container">
        <div>
          <div class="thanks">
            <h3 class="c0c4">お問い合わせ内容を送信しました</h3>
            <p>
              ありがとうございます。<br class="only-sp" />２営業日以内にご返信いたします。
            </p>
            <div>
              <button type="">
                <a href="/">戻る</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <?php get_footer(); ?>