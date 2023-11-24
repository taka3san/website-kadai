<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main id="main">
  <article>
    <section id="top">
      <div class="container top-visual">
        <div class="top-message">
          <h1 class="mincho c468">
            根本的な症状改善を<br />サポートします
          </h1>
        </div>
        <!-- カルーセルPC -->
        <div id="top-slider" class="slider only-pc slick-custom">
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/top_carousel_01.png" alt="" />
          </div>
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/top_carousel_02.png" alt="" />
          </div>
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/top_carousel_03.png" alt="" />
          </div>
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/top_carousel_04.png" alt="" />
          </div>
        </div>
        <!-- カルーセルSP -->
        <div id="top-slider-sp" class="slider only-sp slick-custom">
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/sp_top_carousel_01.png" alt="" />
          </div>
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/sp_top_carousel_02.png" alt="" />
          </div>
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/sp_top_carousel_03.png" alt="" />
          </div>
          <div class="top-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-carousel/sp_top_carousel_04.png" alt="" />
          </div>
        </div>
        <!-- プログレスバー -->
        <div class="progress_bar">
          <div class="bar" id="js-progressBar"></div>
        </div>
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/top/carousel_bg.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/sp_carousel_bg.png" alt="黄緑色の背景" />
          </picture>
        </div>
      </div>
    </section>


    <!-- インフォメーション -->
    <section id="top-info">
      <div class="container">
        <!-- サブクエリ -->
        <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_in' => array('campaign', 'others', 'business'),
          // 1ページに表示する投稿数
          'posts_per_page' => 1,
        );
        $posts = get_posts($args);
        ?>
        <!-- ループ処理 -->
        <?php foreach ($posts as $post) :  ?>
          <?php setup_postdata($post); ?>
          <div class="top-info-left">
            <div>
              <h2 class="c468">News</h2>
              <h3 class="c468">お知らせ</h3>
            </div>
            <div>
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
              <p>
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              </p>
            </div>
          </div>
          <div class="top-info-right">
            <p><a href="/news/">→お知らせ一覧へ</a></p>
          </div>
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
      </div>
    </section>
    <!-- コンセプト -->
    <section id="top-concept">
      <h1 class="mer cf0f concept-msg">Concept</h1>
      <div class="big-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/big_icon_light.png" alt="" />
      </div>
      <div class="container">
        <div class="left">
          <div class="title">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_01_Icon.png" alt="" />
              <h4 class="c468">Concept</h4>
            </div>
            <h4 class="c468">特徴</h4>
          </div>
          <div>
            <h3 class="c468">
              日々進化する<br />
              カラダと心を癒す<br />
              パーソナル<br />
              トレーナーとして
            </h3>
            <p>
              当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。<br />
              <br />

              また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。<br />
              <br />

              ご不安な点や疑問点などお気軽にご相談くださいませ。
            </p>

            <div class="concept-btn">
              <div>
                <a href="/about/">→当院について</a>
              </div>
            </div>
          </div>
        </div>
        <div class="right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_img01.png" alt="施術風景" />
        </div>
      </div>
    </section>

    <!-- コース・料金 -->
    <section id="top-course">
      <h1 class="mer ce7e">Course</h1>

      <div class="big-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/big_icon_green.png" alt="" />
      </div>
      <div class="container">
        <div class="top-course-center">
          <div class="center-msg">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_02_DecoLeft16.png" alt="" />
              <h3 class="c468">コース・料金</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_02_DecoRight16.png" alt="" />
            </div>
            <h3 class="c468">
              当院では保険診療、自費診療ともにご対応しております
            </h3>
          </div>
          <div class="center-content">
            <div class="center-content-detail">
              <div class="center-content-left">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/top/treatment_room01.png" alt="" />
                </div>
                <div>
                  <h3 class="c0c4">保険診療</h3>
                  <div>
                    <div>
                      <div>
                        <p>・</p>
                      </div>
                      <h4>骨折・打撲・捻挫・脱臼</h4>
                    </div>
                    <div>
                      <div>
                        <p>・</p>
                      </div>
                      <h4>スポーツ診療</h4>
                    </div>
                    <div>
                      <div>
                        <p>・</p>
                      </div>
                      <h4>交通事故</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="center-content-right">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/top/treatment_room02.png" alt="" />
                </div>
                <div>
                  <h3 class="c0c4">自費診療</h3>
                  <div>
                    <div>
                      <div>
                        <p>・</p>
                      </div>
                      <h4>腰痛・肩こり</h4>
                    </div>
                    <div>
                      <div>
                        <p>・</p>
                      </div>
                      <h4>冷え性・だるさ</h4>
                    </div>
                    <div>
                      <div>
                        <p>・</p>
                      </div>
                      <h4>骨盤・背骨矯正</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn">
              <a href="/course/">→ コース・料金詳細へ</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- お客様の声 -->
    <section id="top-voice">
      <div class="container">
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bottom-carousel/hand_massage01.png" media="(min-width:768px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-carousel/sp_hand_massage01.png" alt="" />
          </picture>

          <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-carousel/half-circle.png" alt="白い半円" />
        </div>

        <div class="customer-voice">
          <div class="center-msg">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_02_DecoLeft16.png" alt="" />
              <h3 class="c468">お客様の声</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_02_DecoRight16.png" alt="" />
            </div>
            <h3 class="c468">
              痛みの改善に加えて自分で予防
              <br class="only-pc" />
              もできるようになりました
            </h3>
          </div>
          <div class="customer-intro">
            <!-- サブクエリ -->
            <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
              // 投稿タイプ
              'post_type'      => 'voice',
              // 1ページに表示する投稿数
              'posts_per_page' => 3,
            );
            $posts = get_posts($args);
            ?>
            <!-- ループ処理 -->
            <?php foreach ($posts as $post) :  ?>
              <?php setup_postdata($post); ?>
              <!-- @@@ -->
              <div class="intro-detail">
                <div class="img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="voice-msg">
                  <h3 class="c0c4"><?php the_title(); ?></h3>
                  <p>
                    <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- 使用した投稿データをリセット -->
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="btn">
            <a href="/voice/">→ お客様の声一覧へ</a>
          </div>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <?php get_footer(); ?>