<?php
// 	Program: 	trng_armoured.php
//	Description: 	Armoured training page, created January 16, 2017
//	Author:		David M. Cvet
//
//	2017 ------------------
//
include "../php-bin/retrieve_cookies.php";
include "../config/config.php";
$menu_selected = "training";
$current_pgm = "trng_armoured.php";
include "../config/content_trng_armoured_$lang.php";
$path = "../";
include "../php-bin/header.php";
include "../php-bin/header2.php";
shuffle($liberi);	// shuffle the Liberi images within the array to randomize the presentation of the folios on this page
$i = rand(0,9);		// randomize the armoured photos just to add a little spice to the page
$armoured_image[$lang_num] = $armoured_photo[$i];
$armoured_image_caption[$lang_num] = $armoured_photo_caption[$i];
?>
	<!-- begin main_content -->
	<div id="main_content">
		<h2><?=$title[$lang_num]?>&nbsp;<img src="<?=$path?>images/training/armoured.png" alt="" style="vertical-align:middle;" /></h2>
		<h3><?=$title_1[$lang_num]?></h3>
		<p><?=$trng_1_p1[$lang_num]?></p>
		<div style="float:left;width:100%;text-align:center;">
			<div class="arte_fola"><img src="../images/training/<?=$liberi[0]?>" alt="" width="100%" class="box" /></div>
			<div class="arte_fola"><img src="../images/training/<?=$liberi[1]?>" alt="" width="100%" class="box"  /></div>
			<div class="arte_folb"><img src="../images/training/<?=$liberi[2]?>" alt="" width="100%" class="box"  /></div>
			<div class="arte_folb"><img src="../images/training/<?=$liberi[3]?>" alt="" width="100%" class="box"  /></div>
			<div class="arte_folc"><img src="../images/training/<?=$liberi[4]?>" alt="" width="100%" class="box"  /></div>
			<div style="float:left;width:100%;margin-top:15px;margin-bottom:20px;" class="caption"><?=$about_trng_caption[$lang_num]?></div>
		</div>
		<div class="trng_poleweapons">
			<div style="float:left;"><a href="../images/training/<?=$armoured_image[$lang_num]?>" title="armoured combat with poleaxe"><img src="../images/training/<?=$armoured_image[$lang_num]?>" alt="" width="100%" class="fade box" /></a></div>
			<div style="float:left;margin-top:15px;margin-bottom:15px;" class="caption"><?=$armoured_image_caption[$lang_num]?></div>
		</div>
		<p><?=$trng_1_p2[$lang_num]?></p>
		<p><?=$trng_1_p3[$lang_num]?></p>

		<p><hr width="30%" align="left" /><ol>
		<li><a name="1"></a><?=$trng_l1[$lang_num]?></li>
		<li><a name="2"></a><?=$trng_l2[$lang_num]?></li>
		<li><a name="3"></a><?=$trng_l3[$lang_num]?></li>
		</ol></p>
	</div><!-- end main_content -->
	<!-- begin footer -->
<?php
include "../php-bin/footer.php";
?>
	<!-- end footer -->
</div><!-- container -->
</body></html>
