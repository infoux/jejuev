<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>






<!-- S:content -->
<article id="content" class="main">
  <section class="issue">
    <div class="container">
      <h2>
        Jeju Electric Vehicle Serivice
        <small>
          <p><span>전기자동차 인프라 및 신재생에너지 운영기술과</span>
          소프트웨어 기반의 ICT 기술을 전력 및 에너지 산업에 적용하여</p>
          <p>새로운 패러다임의 전환을 이끌고 있습니다.</p>
        </small>
      </h2>
    </div>
  </section>
  <section class="notice">
    <div class="container">
      <h2>NOTICE&NEWS</h2>
      <ul class="slider">







                    <?php
                    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                    echo latest('theme/basic', notice, 5, 100);
                    ?>



        </ul>











    </div>
  </section>
  <section class="banner">
    <div class="container">
      <h2 class="sr-only">바로가기배너</h2>
      <ul>
        <li class="product">
          <a href="/bbs/content.php?co_id=product01&me_code=2010">
            <h3>PRODUCT</h3>
            <p>EV 충전인프라 구축 / 운영 / 관제</p>
            <p>EV 운전자를 위한 서비스 제공</p>
            <p>종합 관제센터 운영 사업</p>
          </a>
          <i class="icon-plus"></i>
        </li>
        <li class="charger">
          <a href="">
            <h3>CHARGER</h3>
            <p>전기자동차 충전기</p>
            <p>위치 안내</p>
          </a>
          <i class="icon-plus"></i>
        </li>
        <li class="membership">
          <a href="">
            <h3>MEMBERSHIP</h3>
            <p>제주전기자동차서비스</p>
            <p>회원서비스</p>
          </a>
          <i class="icon-plus"></i>
        </li>
      </ul>
    </div>
  </section>

</article>
<!-- E:content -->

















<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
