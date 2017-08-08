<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>






  <!-- S:skip_navi -->
  <div class="skip_navi"> <a class="sr-only sr-only-focusable" href="#header">메뉴 바로가기</a> <a class="sr-only sr-only-focusable" href="#content">본문 바로가기</a> <a class="sr-only sr-only-focusable" href="#footer">푸터 바로가기</a> </div>
  <!-- E:skip_navi -->
  <!-- S:header -->
  <header id="header">
    <div class="container">
      <a href="#" class="menuToggle"><i class="icon-th-list"></i>메뉴토글</a>
      <h1><a href="/"><?php echo $config['cf_title']; ?></a></h1>
    </div>
    <!-- S:menu -->
    <nav id="menu">

      <ul class="main-menu">
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용

            for ($i=0; $row=sql_fetch_array($result); $i++) {


              if(strstr($row['me_link'], ".php?"))
        				$qstr = "&me_code=".$row['me_code'];
        			// link주소에 파라미터가 없는 경우
        			else
        				$qstr = "?me_code=".$row['me_code'];
        					?>

            <li>
                <h2><a href="<?php echo $row['me_link']; ?><?php echo $qstr; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a></h2>
                <?php
                $sql2 = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '4'
                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                            order by me_order, me_id ";
                $result2 = sql_query($sql2);

                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                if(strstr($row2['me_link'], ".php?"))
                  $qstr2 = "&me_code=".$row2['me_code'];
        				// link주소에 파라미터가 없는 경우
        				else
        					$qstr2 = "?me_code=".$row2['me_code'];


                    if($k == 0)
                        echo '<ul>'.PHP_EOL;
                ?>
                    <li><a href="<?php echo $row2['me_link']; ?><?php echo $qstr2; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                <?php
                }

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
            <?php } ?>
        </ul>




      <button class="close">창닫기</button>
    </nav>
    <!-- E:mmenu -->
  </header>
  <!-- E:header -->
