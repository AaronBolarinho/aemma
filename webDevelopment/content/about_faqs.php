<?php
// 	Program: 	about_faqs.php
//	Description: 	frequently asked questions created Jan 2017.
//	Author:		David M. Cvet
//
//	2017 ------------------
//
include "../php-bin/retrieve_cookies.php";
include "../config/config.php";
include "../config/content_about_faqs_$lang.php";
$current_pgm = "about_faqs.php";
$path = "../";
$menu_passed = $_GET['M'];
if ($menu_passed == "r") {$menu_selected = "resources";}
else  {$menu_selected = "AEMMA";}
include "../php-bin/header.php";
?>
  <script src="<?=$path?>js-bin/jquery.min_v1.9.1.js"></script>
  <link rel="stylesheet" href="<?=$path?>css/faq_style.css">
  <script src="<?=$path?>js-bin/faq_accordion.js"></script>
<?php
include "../php-bin/header2.php";
?>
	<!-- begin page content -->
	<div id="main_content">
		<h2><?=$title[$lang_num]?>&nbsp;<img src="../images/icons/help.png" alt="" style="vertical-align:middle;" /></h2>
		<div class="about_image_arms">
			<div style="float:left;margin-bottom:10px;"><img src="../images/coatofarms/armorialBearings_CHA_230.jpg" alt="" width="100%"  /></div>
			<div style="float:left;" class="caption"><?=$about_aemma_arms_caption[$lang_num]?></div>
		</div>
		<p><?=$faq_intro[$lang_num]?></p>
		<div id="accordion">
			<h4 class="accordion-toggle">Q. <?=$faq_q1[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a1[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q2[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a2[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q3[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a3[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q4[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a4[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q5[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a5[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q6[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a6[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q7[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a7[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q8[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a8[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q9[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a9[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q10[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a10[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q11[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a11[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q12[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a12[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q13[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a13[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q14[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a14[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q15[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a15[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q16[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a16[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q17[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a17[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q18[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a18[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q19[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a19[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q20[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a20[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q21[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a21[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q22[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a22[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q23[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a23[$lang_num]?></p></div>

			<h4 class="accordion-toggle">Q. <?=$faq_q24[$lang_num]?></h4>
			<div class="accordion-content"><p><b>A. </b><?=$faq_a24[$lang_num]?></p></div>

		</div>
	</div><!-- end main_content -->
	<!-- begin footer -->
<?php
include "../php-bin/footer.php";
?>
	<!-- end footer -->
</div><!-- container -->
</body></html>
