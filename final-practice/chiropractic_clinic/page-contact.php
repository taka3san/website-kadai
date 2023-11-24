<!-- ヘッダー -->
<?php get_header(); ?>

<main>
  <article>
    <section id="contact-sec01" class="com-sec01">
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
    <section id="contact-sec02">
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


    <section id="contact-sec03">
      <div class="container">
        <div>
          <div class="contact-tell">
            <h3 class="c0c4">お電話でのご予約・お問い合わせ</h3>
            <div>
              <p>
                〒101-0022 東京都千代田区神田練塀町300番地<br />住友不動産秋葉原駅前ビル
                5F
              </p>
              <h3 class="c0c4"><span>tel:</span> 03-1234-5678</h3>
            </div>
          </div>
          <div class="contact-reserve">
            <h3 class="c0c4">ご予約・お問い合わせフォーム</h3>
            <p>※ 2営業日以内にご返信いたします。</p>

            <!-- お問い合わせフォーム（WP forms） -->
            <?php echo do_shortcode('[wpforms id="66"]'); ?>

            <!-- お問合せフォーム -->
            <!-- <form class="contact-form" action="submit" method="get">
              <div class="form-item">
                <label for="name">氏名（必須）</label>
                <input type="text" name="name" id="name" placeholder="侍　太郎" required />
              </div>
              <div class="form-item">
                <label for="furigana">フリガナ（必須）</label>
                <input type="text" name="furigana" id="furigana" placeholder="サムライ　タロウ" required />
              </div>
              <div class="form-item">
                <label for="phone-number">電話番号（必須）<span>半角</span></label>
                <input type="tel" name="phone-number" id="phone-number" placeholder="0312345678" required />
              </div>
              <div class="form-item">
                <label for="email">メールアドレス（必須）<span>半角英数</span>
                </label>
                <input type="mail" name="email" id="email" placeholder="samurai-chiropractic@example.com" required />
              </div>
              <div class="form-item">
                <label for="reservation">ご予約希望日</label>
                <input type="text" name="reservation" id="reservation" placeholder="例）2023年3月1日" />
              </div>
              <div class="form-item">
                <label for="trouble">お悩み（必須）</label>
                <select name="trouble" id="trouble" required>
                  <option value="">お悩みを選択してください</option>
                  <option value="injury">スポーツでの怪我</option>
                  <option value="stiff-shoulder">肩こり・五十肩</option>
                  <option value="lumbago">腰痛</option>
                  <option value="traffic-accident">
                    交通事故施術・むち打ち
                  </option>
                </select>
              </div>
              <div class="form-item">
                <label for="form-msg">お問合せ内容</label>
                <textarea name="form-msg" id="form-msg" cols="30" rows="8" placeholder="できるだけ詳しいお問い合わせ内容を記入してください"></textarea>
              </div>
              <div>
                <button type="submit" onclick="location.href='#'">
                  送信
                </button>
              </div>
            </form> -->
          </div>
        </div>
      </div>
    </section>
    <!-- フッター -->
    <?php get_footer(); ?>