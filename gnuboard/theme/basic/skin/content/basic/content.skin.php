<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<article id="content" class="sub">
  <section class="head s<?php echo substr($me_code,  0, 2); ?>">
    <div class="container">
      <h2><?php echo $g5['title']; ?></h2>
    </div>
  </section>
<?php echo groupmenu('sir'); ?>


  <?php echo $str; ?>



</article>
