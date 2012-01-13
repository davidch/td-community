<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>

<?php
if ($teaser) {
 ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="typeicon <?php echo $node->field_asset_type['und'][0]['value']; ?>_icon">
  	<div class="type"><?php echo $node->field_asset_type['und'][0]['value']; ?></div>
   <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?> class="teaser_hdr"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
		
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  </div>
</div>

 <?
} else { ?>

<h1 class="homepage_hdr" style="margin:0;margin-top:10px;"><?php echo $node->field_asset_type['und'][0]['value']; ?></h1>
		  
<div class="box">

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="typeicon <?php echo $node->field_asset_type['und'][0]['value']; ?>_icon">
	
<div class="type">
<?php /*
if(isset($node->field_item_date['und'])){
if($node->field_item_date['und'][0]['value'] == $node->field_item_date['und'][0]['value2']) 
	echo date("F j, Y", strtotime($node->field_item_date['und'][0]['value'])); 
else
{
	echo date("F j, Y", strtotime($node->field_item_date['und'][0]['value'])); 
	echo " - ";
	echo date("F j, Y", strtotime($node->field_item_date['und'][0]['value2'])); 
}}	*/?>
</div>
 <h2<?php print $title_attributes; ?> class="teaser_hdr"><?php print $node->title; ?></h2>
</div>
  <?php /*if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif;*/ ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php //print_r($node);
	if(isset($node->field_featured_image['und'])){
	if($node->field_featured_image['und'][0]['filename'] != '')
	{
	echo "<div class=\"fimage\"><img src=\"/sites/default/files/". $node->field_featured_image['und'][0]['filename']."\"/></div>";
	}
	}
	else
	{
	echo "<style>.finfo {width:auto;}</style>";
	}
	?>
	<div class="finfo">
	<?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
     print render($content);
    ?>
    </div>
    <div class="clearboth"></div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>


<?php global $user; $redirect = drupal_get_destination(); ?>  <?php if (!$user->uid) : ?>
<div class="welcomemessage">
<h2>Please Login or Register to view this item.</h2>
<form action="/user/login?destination=<?php echo curPageURL(); ?>" method="post" id="user-login" class="userlogin_custom">
    <input type="text" maxlength="60" name="name" id="edit-namef" size="20" value="Enter Username" class="form-text required" onfocus="if (this.value=='Enter Username'){this.value=''}" onblur="if (this.value==''){this.value='Enter Username'}" />
    <input type="text" id="mockpass2" class="mock" value="Enter Password" onFocus="document.getElementById('mockpass2').style.display='none'; document.getElementById('realpass2').style.display='inline'; document.getElementById('realpass2').focus();" />
    <input type="password" name="pass" id="realpass2" class="real" style="display: none;" onBlur="if(this.value=='') {document.getElementById('mockpass2').style.display='inline'; document.getElementById('realpass2').style.display='none';}" /><input type="hidden" value="user_login_block" name="form_id">
    <input type="hidden" name="form_id" id="edit-user-login" value="user_login" />
    <input type="submit" name="op" id="edit-submit" value="Log in" class="form-submit" />
<div class="login_links">
<a href="/user/register" title="Create account">Create account</a>
<br/>
<a href="/user/password" title="Retrieve lost password">Lost password</a>
<br/>
<?php print l('Register','user/register'); ?>
</div>
</form>
</div>
<?php endif; ?>

</div>
</div>

<? } ?>