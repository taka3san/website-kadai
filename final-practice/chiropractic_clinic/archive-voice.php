<!-- ヘッダー -->
<?php echo get_header(); ?>
<main>
  <article>
    <section id="voice-sec01" class="com-sec01">
      <div class="container">
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/voice/voice_main_visual.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/voice/sp_voice_main_visual.png" alt="" />
          </picture>
        </div>
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/voice/voice_bg.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/voice/sp_voice_bg.png" alt="黄緑色の背景" />
          </picture>
        </div>
        <div class="main-msg">
          <h1 class="c468">Voice</h1>
          <h4 class="c468">お客様の声</h4>
        </div>
      </div>
    </section>
    <!-- ナビゲーション -->
    <section id="voice-sec02">
      <div class="container">
        <div>
          <!-- パンくずリスト -->
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            } ?>
          </div>
          <!-- <div class="breadcrumb">
            <a href="index.html">ホーム</a><span class="material-symbols-outlined"> navigate_next </span>
            <p class="c0c4">お客様の声</p>
          </div> -->
        </div>
    </section>
    <!-- お客様の声 -->
    <section id="voice-sec03">
      <div class="container">
        <div class="customer-voice">
          <div class="customer-intro">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="intro-detail">
                  <div class="img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="voice-msg">
                    <h3 class="c0c4"><?php the_title(); ?></h3>
                    <p>
                      <?php the_content(); ?>
                    </p>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
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
        </div>
      </div>
    </section>
    <!-- フッター -->
    <?php echo get_footer(); ?>