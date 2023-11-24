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
          <a class="c0c4" href="information.html">お知らせ</a>
        </div> -->
      </div>
    </section>
    <section id="info-detail-sec03">
      <div class="container">
        <div class="frame">
          <div class="info-content">
            <!-- 記事 -->
            <div class="info-list">
              <div class="img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="info-heading">
                <h2 class="c0c4"><?php the_title(); ?></h2>
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
            <div class="info-text">
              <!-- 投稿記事本文 -->
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <!-- ページネーション -->
            <div class="only-sp">
              <div class="post__pagination">
                <?php $prevpost = get_adjacent_post(false, '', true);
                if ($prevpost) : ?>
                  <div class="post__pagination__left">
                    <a href="<?php echo get_permalink($prevpost->ID); ?>">
                      <span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
                      <span class="post__pagination__right__text"><span class="material-symbols-outlined">
                          chevron_left </span>前に記事へ</span>
                    </a>
                  </div>
                <?php endif; ?>

                <div class="post__pagination__center">
                  <a href="/news/">お知らせ一覧</a>
                </div>

                <?php $nextpost = get_adjacent_post(false, '', false);
                if ($nextpost) : ?>
                  <div class="post__pagination__right">
                    <a href="<?php echo get_permalink($nextpost->ID); ?>">
                      <span class="post__pagination__left__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
                      <span class="post__pagination__left__text">次の記事へ<span class="material-symbols-outlined">
                          chevron_right
                        </span></span>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <!-- サイドバー -->
          <?php get_sidebar(); ?>
        </div>

        <!-- ページネーション -->
        <div class="only-pc">
          <div class="post__pagination">
            <?php $prevpost = get_adjacent_post(false, '', true);
            if ($prevpost) : ?>
              <div class="post__pagination__left">
                <a href="<?php echo get_permalink($prevpost->ID); ?>">
                  <span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
                  <span class="post__pagination__right__text"><span class="material-symbols-outlined">
                      chevron_left </span>前に記事へ</span>
                </a>
              </div>
            <?php endif; ?>

            <div class="post__pagination__center">
              <a href="/news/">お知らせ一覧</a>
            </div>

            <?php $nextpost = get_adjacent_post(false, '', false);
            if ($nextpost) : ?>
              <div class="post__pagination__right">
                <a href="<?php echo get_permalink($nextpost->ID); ?>">
                  <span class="post__pagination__left__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
                  <span class="post__pagination__left__text">次の記事へ<span class="material-symbols-outlined">
                      chevron_right
                    </span></span>
                </a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- フッター -->
    <?php get_footer(); ?>