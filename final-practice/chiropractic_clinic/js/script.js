    // スライダーPC-----------------------------
$(function(){
    // スライダーPC-----------------------------
    var $slider4 = $("#top-slider");

    $slider4.slick({
      arrows: false,
      fade: true,
      speed: 3000,
      autoplay: true,
      autoplaySpeed: 4000,
    });
  
      /*--- pc用プログレスバー設定 -----------------------*/
      var time = 3,
      $bar = $("#js-progressBar"),
      isPause,
      tick,
      percentTime;
    function startProgressbar() {
      resetProgressbar();
      percentTime = 0;
      isPause = false;
      tick = setInterval(interval, 10);
    }
    function interval() {
      if (isPause === false) {
        percentTime += 1 / (time + 0.1);
        $bar.css({
          width: percentTime + "%",
        });
        if (percentTime >= 100) {
          $slider4.slick("slickNext");
          startProgressbar();
        }
      }
    }
    function resetProgressbar() {
      $bar.css({
        width: 0 + "%",
      });
      clearTimeout(tick);
    }
    startProgressbar();
});

  // スライダーSP-----------------------------
$(function(){
  // スライダーSP-----------------------------
  var $slider4 = $("#top-slider-sp");

  $slider4.slick({
    arrows: false,
    fade: true,
    speed: 3000,
    autoplay: true,
    autoplaySpeed: 4000,
  });

    /*--- sp用プログレスバー設定 -----------------------*/
    var time = 3,
    $bar = $("#js-progressBar"),
    isPause,
    tick,
    percentTime;
  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }
  function interval() {
    if (isPause === false) {
      percentTime += 1 / (time + 0.1);
      $bar.css({
        width: percentTime + "%",
      });
      if (percentTime >= 100) {
        $slider4.slick("slickNext");
        startProgressbar();
      }
    }
  }
  function resetProgressbar() {
    $bar.css({
      width: 0 + "%",
    });
    clearTimeout(tick);
  }
  startProgressbar();

});

  // トップへ戻るボタン
$(function () {
  // トップへ戻るボタン
  //スクロールした際の動きを関数でまとめる
  function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      //上から200pxスクロールしたら
      $("#page-top").removeClass("DownMove"); //#page-topについているDownMoveというクラス名を除く
      $("#page-top").addClass("UpMove"); //#page-topについているUpMoveというクラス名を付与
    } else {
      if ($("#page-top").hasClass("UpMove")) {
        //すでに#page-topにUpMoveというクラス名がついていたら
        $("#page-top").removeClass("UpMove"); //UpMoveというクラス名を除き
        $("#page-top").addClass("DownMove"); //DownMoveというクラス名を#page-topに付与
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // #page-topをクリックした際の設定
  $("#page-top a").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0, //ページトップまでスクロール
      },
      500
    ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false; //リンク自体の無効化
  });
});
