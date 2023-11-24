<!-- ヘッダー -->
<?php get_header(); ?>

<main>
  <article>
    <section id="info-sec01" class="com-sec01">
      <div class="container">
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/information/info_main_visual.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/information/sp_info_main_visual.png" alt="" />
          </picture>
        </div>
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/information/info_bg.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/information/sp_info_bg.png" alt="黄緑色の背景" />
          </picture>
        </div>
        <div class="main-msg">
          <h1 class="c468">Information</h1>
          <h4 class="c468">お知らせ</h4>
        </div>
      </div>
    </section>
    <!-- ナビゲーション -->
    <section id="info-sec02">
      <div class="container">
        <!-- パンくずリスト -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
        <!-- <div class="breadcrumb">
          <a href="index.html">ホーム</a><span class="material-symbols-outlined"> navigate_next </span>
          <p class="c0c4">お知らせ</p>
        </div> -->
      </div>
    </section>
    <section id="info-sec03">
      <div class="container">
        <div class="frame">
          <div class="info-content">

            <!-- ループ処理 （メインクエリ）-->
            <?php if (have_posts()) : ?>
              <!-- 投稿データをリセット -->
              <?php while (have_posts()) : the_post(); ?>
                <!-- 記事 -->
                <div class="info-list">
                  <div class="img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="info-heading">
                    <h3>
                      <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div>
                      <p><?php echo get_the_date(); ?></p>
                      <?php
                      // カテゴリーをリンクで繰り返し表示
                      $categories = get_the_category();
                      foreach ($categories as $cat) :
                      ?>
                        <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <!-- ループ処理　（メインクエリ終了） -->

          <!-- サイドバー -->
          <?php get_sidebar(); ?>
        </div>

        <!-- ページネーション -->
        <div class="page">
          <?php
          $args = array(
            'mid_size' => 1,
            'prev_text' => '',
            'next_text' => '',
            'screen_reader_text' => ' ',
          );
          the_posts_pagination($args);
          ?>
        </div>

    </section>
    <?php get_footer(); ?>