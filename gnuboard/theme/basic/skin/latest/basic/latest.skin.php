<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->

    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <li>
            <?php
            //echo $list[$i]['icon_reply']." ";
            echo "<a href=\"".$list[$i]['href']."\">";
            echo $list[$i]['subject'];
            echo "<i>".date("Y-m-d", strtotime($list[$i]['wr_datetime']))."</i>";


            echo "</a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            // if (isset($list[$i]['icon_new'])) echo " " . $list[$i]['icon_new'];
            // if (isset($list[$i]['icon_hot'])) echo " " . $list[$i]['icon_hot'];
            // if (isset($list[$i]['icon_file'])) echo " " . $list[$i]['icon_file'];
            // if (isset($list[$i]['icon_link'])) echo " " . $list[$i]['icon_link'];
            // if (isset($list[$i]['icon_secret'])) echo " " . $list[$i]['icon_secret'];
             ?>







        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li>게시물이 없습니다.</li>
    <?php }  ?>

<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->
