<!-- ヘッダー -->
<?php get_header(); ?>
<main>
  <article>
    <section id="course-sec01" class="com-sec01">
      <div class="container">
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/course/course_main_visual.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/course/sp_course_main_visual.png" alt="" />
          </picture>
        </div>
        <div class="img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/course/course_bg.png" media="(min-width:769px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/course/sp_course_bg.png" alt="黄緑色の背景" />
          </picture>
        </div>
        <div class="main-msg">
          <h1 class="c468">Price</h1>
          <h4 class="c468">コース・料金</h4>
        </div>
      </div>
    </section>
    <!-- ナビゲーション -->
    <section id="course-sec02">
      <div class="container">
        <!-- パンくずリスト -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
        <!-- <div class="breadcrumb">
              <a href="index.html">ホーム</a
              ><span class="material-symbols-outlined"> navigate_next </span>
              <p class="c0c4">コース・料金</p>
            </div> -->
      </div>
    </section>

    <!-- コース・料金 -->
    <section id="course-sec03">
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
          </div>
        </div>
      </div>
    </section>
    <!-- 診療種類 -->
    <section id="course-sec04">
      <div class="container">
        <!-- 保険診療 -->
        <div class="course-sec04-item">
          <div class="left">
            <div class="title">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_01_Icon.png" alt="" />
                <h4 class="c468">Insurance</h4>
              </div>
              <h4 class="c468">保険診療</h4>
            </div>
            <div class="course-sec04-detail">
              <p>
                健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br />「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
              </p>
            </div>
            <div class="course-sec04-example">
              <ul>
                <li>骨折・打撲・捻挫・脱臼</li>
                <li>スポーツ診療</li>
                <li>交通事故</li>
              </ul>
            </div>
          </div>
          <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/course/insurance.png" alt="保険診療" />
          </div>
        </div>
        <!-- 自費診療 -->
        <div class="course-sec04-item">
          <div class="left">
            <div class="title">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_01_Icon.png" alt="" />
                <h4 class="c468">Self-pay</h4>
              </div>
              <h4 class="c468">自費診療</h4>
            </div>
            <div class="course-sec04-detail">
              <p>
                慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
              </p>
            </div>
            <div class="course-sec04-example">
              <ul>
                <li>腰痛・肩こり</li>
                <li>冷え性・だるさ</li>
                <li>骨盤・背骨矯正</li>
              </ul>
            </div>
            <div class="course-sec04-detail course-sec04-price">
              <p>
                初回　8,800円（税込） / 50分<br /><br class="only-sp" />
                2回目以降　6,600円（税込） / 30分
              </p>
            </div>
          </div>
          <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/course/self-pay.png" alt="保険診療" />
          </div>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <?php get_footer() ?>