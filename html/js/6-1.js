$.scrollify({
  section : ".box",//1ページスクロールさせたいエリアクラス名
  scrollbars:"false",//スクロールバー表示・非表示設定
  interstitialSection : "#header,#footer",//ヘッダーフッターを認識し、1ページスクロールさせず表示されるように設定
  easing: "swing", // 他にもlinearやeaseOutExpoといったjQueryのeasing指定可能
  scrollSpeed: 300, // スクロール時の速度
    
  //以下、ページネーション設定
  before:function(i,panels) {
    var ref = panels[i].attr("data-section-name");
      $(".pagination .active").removeClass("active");
      $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
  },

  afterRender:function() {
    var pagination = "<ul class=\"pagination\">";
    var activeClass = "";
    $(".box").each(function(i) {  //1ページスクロールさせたいエリアクラス名を指定
      activeClass = "";
      if(i===$.scrollify.currentIndex()) {
        activeClass = "active";
      }
      pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
    });

    pagination += "</ul>";
  
    $("#box1").append(pagination);//はじめのエリアにページネーションを表示
    $(".pagination a").on("click",$.scrollify.move);
  }
});

/*
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/6-1/js/6-1.js"></script>
*/
$('#page-link a[href*="#"]').click(function () {
  var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  var pos = $(elmHash).offset().top;  //idの上部の距離を取得
  $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});