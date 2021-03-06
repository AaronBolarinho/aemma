<?php
ini_set('display_errors', 'On');
//  Program:  mo_about_about.php
//  Description:  About the Academy, created April 20, 2016
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
$current_pgm = "mo_about_about.php";
$menu_selected = "AEMMA";

$ss_path = $path_dbase."ss_path.stuff"; include "$ss_path";
$db_path = $path_dbase."DB.php"; include "$db_path";
session_start();
// begin check if the browser is still in session with DBLogin
$check_session = $path_members."php-bin/sub_check_session_expiration.php"; include "$check_session";
// end check if the browser is still in session
//$idvalid = $dbase_path."IDValid.php"; include_once "$idvalid";
$retrieve = $path_members."php-bin/retrieve_cookies.php"; include "$retrieve";

$config = $path_members."config/config.php"; include "$config";
$config_about = $path_members."config/content_mo_about_about_$lang.php"; include "$config_about";
$header = $path_members."php-bin/members_only_header.php"; include "$header";
$header2 = $path_members."php-bin/members_only_header2.php"; include "$header2";
?>
  <!-- begin main_content -->
  <div id="main_content_mo">
    <h2><?=$title[$lang_num]?></h2>
    <h3><?=$title_p1[$lang_num]?></h3>
    <div class="about_image_arms">
      <div style="float:left;margin-bottom:10px;"><img src="../images/coatofarms/armorialBearings_CHA_230.jpg" alt="" width="100%"  /></div>
      <div style="float:left;" class="caption"><?=$about_aemma_arms_caption[$lang_num]?></div>
    </div>
    <div class="about_image_right">
      <div style="float:left;margin-bottom:10px;"><a href="../images/about_pas_d_armes_2010.jpg" target="_blank" title="pas d'armes at AEMMA in 2010"><img src="../images/about_pas_d_armes_2010_400.jpg" alt="" width="100%" class="box fade" /></a></div>
      <div style="float:left;" class="caption"><?=$about_pas_d_armes_caption[$lang_num]?></div>
    </div>
    <p>Test text HELLO HELLO WORLD</p>

    <p><?=$about_p1_1[$lang_num]?></p>
    <p><?=$about_p1_2[$lang_num]?><br />&nbsp;</p>

    <div class="about_image_right">
      <div style="float:left;margin-bottom:10px;"><a href="../images/about_unarmoured_tourney_2009.jpg" target="_blank" title="unarmoured tournament at AEMMA in 2009"><img src="../images/about_unarmoured_tourney_2009_400.jpg" alt="" width="100%" class="box fade" /></a></div>
      <div style="float:left;" class="caption"><?=$about_unarmoured_tourney_caption[$lang_num]?></div>
    </div>
    <p><?=$about_p1_3[$lang_num]?></p>


    <h3><?=$title_p2[$lang_num]?></h3>
    <p><?=$about_p2_1[$lang_num]?></p>
    <p><?=$about_p2_2[$lang_num]?></p>

    <h3><?=$title_p3[$lang_num]?></h3>
    <p><?=$about_p3_1[$lang_num]?></p>

    <h3><?=$title_p4[$lang_num]?></h3>
    <p><?=$about_p4_1[$lang_num]?></p>
    <p><?=$about_p4_2[$lang_num]?></p>

    <div style="float:left;">
      <hr width="30%" align="left" /><ol>
      <li><a name="1"></a><?=$about_l1[$lang_num]?></li>
      <li><a name="2"></a><?=$about_l2[$lang_num]?></li>
      <li><a name="3"></a><?=$about_l3[$lang_num]?></li>
      <li><a name="4"></a><?=$about_l4[$lang_num]?></li>
      </ol>
    </div>

  </div><!-- end main_content -->
  <!-- begin footer -->
<?php
include "../php-bin/footer.php";
?>
  <!-- end footer -->
</div><!-- container -->
</body></html>
er -->
<?php
include "../php-bin/footer.php";
?>
  <!-- end footer -->
</div><!-- container -->
</body></html>
