<?php
//  Program:  mo_equip_recruit.php
//  Description:  A presentation of the required and standard equipment for the rank of recruit, created July 12, 2017
//  Author:   David M. Cvet
//
//  2019 ------------------
//  jan 25: standardized path names
//
$lang = "en";
$modal = 0;         // no need for modal popups as there are no database operations in this script
$lang_num = 0;
$path_members   = "../";            // the location of the members only scripts and files with respect to this calling script
$path_dbase   = $path_members."database/";  // the location of the database scripts and files with respect to this calling script
$path_root    = "../../";           // the root location of the directories
$current_pgm = "mo_equip_recruit.php";
$menu_selected = "training";
$ss_path = $path_dbase."ss_path.stuff"; include "$ss_path";
$db_path = $path_dbase."DB.php"; include "$db_path";
session_start();
// begin check if the browser is still in session with DBLogin
$check_session = $path_members."php-bin/sub_check_session_expiration.php"; include "$check_session";
// end check if the browser is still in session
//$idvalid = $path_dbase."IDValid.php"; include_once "$idvalid";
$retrieve = $path_members."php-bin/retrieve_cookies.php"; include "$retrieve";

$config = $path_members."config/config.php"; include "$config";
$config_about = $path_members."config/content_mo_equip_recruit_$lang.php"; include "$config_about";
$header = $path_members."php-bin/members_only_header.php"; include "$header";
$header2 = $path_members."php-bin/members_only_header2.php"; include "$header2";
$num = rand(1,3);
?>
  <!-- begin main_content -->
  <div id="main_content">
    <h2><?=$banner[$lang_num]?></h2>
    <div class="about_image_arms">
      <div style="float:left;"><img src="../images/coatofarms/armorialBearings_CHA_230.png" alt="" width="100%"  /></div>
    </div>
    <p><?=$equip_p11[$lang_num]?></p>
    <div class="about_image_right">
      <div style="float:left;margin-bottom:10px;"><a href="../images/recruit_equip_<?=$num?>.jpg" target="_blank" title="basic recruit equipment"><img src="../images/recruit_equip_<?=$num?>_400.jpg" alt="" width="100%" class="box fade" /></a></div>
      <div style="float:left;" class="caption"><?=$equip_recruit_caption[$lang_num]?></div>
    </div>

    <h4><?=$title_p2[$lang_num]?></h4>
    <ul>
    <li><a name="21"></a><?=$equip_l21[$lang_num]?></li>
    <li><a name="22"></a><?=$equip_l22[$lang_num]?></li>
    <li><a name="23"></a><?=$equip_l23[$lang_num]?></li>
    <li><a name="23"></a><?=$equip_l24[$lang_num]?></li>
    <li><a name="23"></a><?=$equip_l25[$lang_num]?></li>
    </ul>
    <p><?=$equip_p12[$lang_num]?></p>
  </div><!-- end main_content -->
  <!-- begin footer -->
<?php
include "../php-bin/footer.php";
?>
  <!-- end footer -->
</div><!-- container -->
</body></html>
