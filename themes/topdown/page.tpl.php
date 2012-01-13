
  

<div id="header">
	<h1><a href="http://www.topdownconsulting.com"><img src="http://www.topdownconsulting.com/wp-content/themes/topdown/images/topdown_logo.png" alt="TopDown Consulting" /></a></h1>
	<!--<img class="oracle" src="http://www.topdownconsulting.com/wp-content/themes/topdown/images/oracle.png" alt="Oracle" />-->
	<form id="search" method="get" action="http://www.topdownconsulting.com">
		<input type="text" name="s" id="s" size="20" value="search" /><input type="image" id="searchsubmit" value="Search" src="http://www.topdownconsulting.com/wp-content/themes/topdown/images/search-button.png" />
	</form>
</div>
<div id="menu">
	<img class="left" src="http://www.topdownconsulting.com/wp-content/themes/topdown/images/menu-left-end.png" width="5" height="40" />

	<ul id="menu-top-menu" class="menu"><li id="menu-item-225" class="first_page menu-item menu-item-type-post_type menu-item-object-page menu-item-225"><a href="http://www.topdownconsulting.com/our-approach/">Our Approach</a></li><li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-226"><a href="http://www.topdownconsulting.com/services/">Services</a><ul class="sub-menu"><li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-232"><a href="http://www.topdownconsulting.com/services/strategic/">Strategic</a></li><li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233"><a href="http://www.topdownconsulting.com/services/implementation/">Implementation</a></li><li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234"><a href="http://www.topdownconsulting.com/services/education/">Training &#038; Education</a></li><li id="menu-item-235" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-235"><a href="http://www.topdownconsulting.com/services/support/">Support</a></li></ul></li><li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a href="http://www.topdownconsulting.com/solutions/">Solutions</a><ul class="sub-menu"><li id="menu-item-285" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a href="http://www.topdownconsulting.com/solutions/consolidation-reporting/">Consolidation &#038; Reporting</a></li><li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a href="http://www.topdownconsulting.com/solutions/budgeting-planning-forecasting/">Budgeting, Planning &#038; Forecasting</a></li><li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a href="http://www.topdownconsulting.com/solutions/upgrades-migrations/">Upgrades &#038; Migrations</a></li></ul></li><li id="menu-item-272" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-272"><a href="http://www.topdownconsulting.com/resources">Resources</a></li><li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="http://www.topdownconsulting.com/clients/">Clients</a><ul class="sub-menu"><li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="http://www.topdownconsulting.com/clients/industry-overview/">Industry Overview</a></li></ul></li><li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-229"><a href="http://www.topdownconsulting.com/news-events/">News</a><ul class="sub-menu"><li id="menu-item-274" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-274"><a href="http://www.topdownconsulting.com/resources/category/articles/">In the News</a></li><li id="menu-item-273" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-273"><a href="http://www.topdownconsulting.com/resources/category/upcoming-events/">Events</a></li><li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242"><a href="http://www.topdownconsulting.com/news-events/press-releases/">Press Releases</a></li></ul></li><li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="http://www.topdownconsulting.com/company/">Company</a><ul class="sub-menu"><li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a href="http://www.topdownconsulting.com/company/management-team/">Leadership</a></li><li id="menu-item-245" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245"><a href="http://www.topdownconsulting.com/company/partners/">Partners</a></li><li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="http://www.topdownconsulting.com/company/careers/">Careers</a></li></ul></li></ul>	<img class="right" src="http://www.topdownconsulting.com/wp-content/themes/topdown/images/menu-right-end.png" width="5" height="40" />

</div>
<div id="content_wrapper" role="main">

  
  <div class="page_content_wrapper">
   <?php if ($page['left']) {?>
   <div class="leftcol">
  	<?php  print render($page['left']); ?>
   </div>
  <?php }   ?>
  
  <div id="page" class="main_column">
  <?php if(!$is_front): ?>
  	 <div id="branding" class="clearfix">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    
    <?php print render($title_suffix); ?>
    <?php print render($primary_local_tasks); ?>
    <div class="clearboth"></div>
    <hr>
  </div>
  <?php endif; ?>
  <div class="clearboth"></div>
 
    <?php /*if ($secondary_local_tasks): ?>
      <div class="tabs-secondary clearfix"><ul class="tabs secondary"><?php print render($secondary_local_tasks); ?></ul></div>
    <?php endif; */?>

    <div class="clearfix">
      <div class="element-invisible"><a id="main-content"></a></div>
      <?php if ($messages): ?>
        <div id="console" class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
<?php global $user; 
if(($is_front || views_get_page_view()) && !$user->uid) { 
	$welcome = block_render('block', 2);
	if(trim($welcome['block_2']->title) != '')
		echo '<h1 class="welcomemessage_hdr">'.$welcome['block_2']->title.'</h1>';
	if(trim($welcome['block_2']->content['#markup']) != '') {
		echo '<div class="welcomemessage">'.$welcome['block_2']->content['#markup'];
		global $user;
		if (!$user->uid )
		  echo '<a href="/user/register" class="welcome_register_btn">Register</a>';
		echo '</div>';
	}	
	
}

?>

		<div class="act_content">
        <?php
if($is_front) { echo "<h1 class=\"homepage_hdr\">Featured</h1><div class=\"box\">" ; }
 ?>
 
 <?php 
if(views_get_page_view()) { echo "<h1 class=\"homepage_hdr\">".$title."</h1><div class=\"box\">" ; }
 ?>
 		  <?php print render($page['content']); ?>
         
                <?php
if($is_front || views_get_page_view()) { echo "</div>" ; }
 ?>
        </div>
    </div>

    <?php /*<div id="footer">
      <?php print $feed_icons; ?>
    </div>*/ ?>

  </div>
  <div class="clearboth"></div>
  </div>
</div>
<div class="index-btm"></div>
<div id="footer">
<div style="float:left;"><p class="copyright"><a href="http://www.topdownconsulting.com/resources/privacy-policy/">Privacy Policy</a><a href="http://www.topdownconsulting.com/company/terms-of-use/">Terms of Use</a><a href="http://www.topdownconsulting.com/company/careers/">Careers</a><a href="http://www.topdownconsulting.com/contact/">Contact Us</a></p></div>

	<p class="copyright">&copy; Copyright 2012  TopDown Consulting.  All Rights Reserved.</p>
</div>