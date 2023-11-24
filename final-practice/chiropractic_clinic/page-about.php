<!-- ヘッダー -->
<?php get_header(); ?>
<article>
  <section id="about-sec01" class="com-sec01">
    <div class="container">
      <div class="img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/about/about_main_visual.png" media="(min-width:769px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/sp_about_main_visual.png" alt="" />
        </picture>
      </div>
      <div class="img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/about/about_bg.png" media="(min-width:769px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/sp_about_bg.png" alt="黄緑色の背景" />
        </picture>
      </div>
      <div class="main-msg">
        <h1 class="c468">About</h1>
        <h4 class="c468">当院について</h4>
      </div>
    </div>
  </section>
  <!-- ナビゲーション -->
  <section id="about-sec02">
    <div class="container">
      <!-- パンくずリスト -->
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
      <!-- <div class="breadcrumb">
        <a href="index.html">ホーム</a><span class="material-symbols-outlined"> navigate_next </span>
        <p class="c0c4">当院について</p>
      </div> -->
    </div>
  </section>
  <!-- コンセプト -->
  <section id="about-sec03">
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
        </div>
      </div>
      <div class="right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_img01.png" alt="施術風景" />
      </div>
    </div>
  </section>

  <section id="about-sec04">
    <h1 class="mer cf0f concept-msg">Flow</h1>
    <div class="big-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icon/big_icon_light.png" alt="" />
    </div>
    <div class="container">
      <div class="left">
        <div class="title">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_01_Icon.png" alt="" />
            <h4 class="c468">Flow</h4>
          </div>
          <h4 class="c468">施術の流れ</h4>
        </div>
        <div class="flow">
          <ol>
            <li>受付</li>
            <li>問診票のご記入</li>
            <li>カウンセリング</li>
            <li>施術</li>
            <li>アフターカウンセリング</li>
          </ol>
        </div>
      </div>
      <div class="right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_img02.png" alt="施術室の流れ" />
      </div>
    </div>
  </section>
  <section id="about-sec05">
    <div class="container">
      <div>
        <div class="center-msg">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_02_DecoLeft16.png" alt="" />
            <h3 class="c468">根本改善のポイント</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/Head_02_DecoRight16.png" alt="" />
          </div>
          <h3 class="c468">
            お体の状態や生活習慣、ご要望<br class="only-sp" />を丁寧にお伺いします。<br /><br class="only-sp" />
            ご自身でできるケアなども含め<br class="only-sp" />て施術方針をお作りします。
          </h3>
        </div>
        <div class="point-intro">
          <div class="point-detail">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_point01.png" alt="カウンセリング" />
            </div>
            <div class="point-msg">
              <h3>丁寧なカウンセリング</h3>
            </div>
          </div>
          <div class="point-detail">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_point02.png" alt="パソコン" />
            </div>
            <div class="point-msg">
              <h3>徹底的分析</h3>
            </div>
          </div>
          <div class="point-detail">
            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_point03.png" alt="カルテ" />
            </div>
            <div class="point-msg">
              <h3>施術計画のご提案</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- フッター -->
  <?php get_footer(); ?>