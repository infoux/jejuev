<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>



<!-- S:footer -->
<footer id="footer">
  <div class="container">
    <h2>(주)제주전기자동차서비스</h2>

    <address>
      <p><span>제주특별자치도 제주시 영평동 2170-1</span> <span>제주첨단과학기술단지 스마트빌딩 102호 대표이사 : 장은호</span> 대표번호 : 064-723-0853 팩스 : 064-723-0859</p>
      <p><strong>ⓒ JEJU ELECTRIC VEHICLE SERVICE. ALL RIGHTS RESERVED</strong></p>
      </address>
  </div>
</footer>
<!-- E:footer -->


<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->


<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
