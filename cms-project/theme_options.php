<?php

$themename = "Telerik CMS";
$shortname = "telerik";
$zm_categories_obj = get_categories('hide_empty=0');
$zm_categories = array();
foreach ($zm_categories_obj as $zm_cat) {
$zm_categories[$zm_cat->cat_ID] = $zm_cat->category_nicename;
}
$categories_tmp = array_unshift($zm_categories, "Select a category:");	

$options = array (

    array(  "name" => "Copyright Text",
        "type" => "title",
        "desc" => "You can setup your copyright from here",
        ), 
     
    array("type" => "open"),
    
    array("name" => "Copyright Text",
            "desc" => "Enter your copyright info here.",
            "id" => $shortname."_copyright",
            "std" => "&copy; Telerik CMS Course | Design: ",
            "type" => "text"),  

     array("name" => "Copyright Url",
            "desc" => "Enter your copyright link here.",
            "id" => $shortname."_copylink",
            "std" => "http://academy.telerik.com/",
            "type" => "text"),         
       
       
    array("name" => "Copyright Link Text",
            "desc" => "Enter the copyright link text here.",
            "id" => $shortname."_linktext",
            "std" => "Telerik Software Academy",
            "type" => "text"),            


    array("type" => "close"),

    array(  "name" => "1140 x 73 Main banner Settings",
        "type" => "title",
        "desc" => "You can setup one 1140 x 73 banner from here",
        ), 
     
    array("type" => "open"),
    
    array("name" => "Main Banner Image",
            "desc" => "Enter your 1140 x 73 banner image url here.",
            "id" => $shortname."_banner2",
            "std" => "",
            "type" => "text"),    
    
    array("name" => "Main Banner Image alt tag",
            "desc" => "Enter your main banner alt tag.",
            "id" => $shortname."_alt2",
            "std" => "",
            "type" => "text"),         
       
       
    array("name" => "Main Banner Url",
            "desc" => "Enter the main banner url here.",
            "id" => $shortname."_url2",
            "std" => "",
            "type" => "text"), 

    array("name" => "Main Banner link title",
            "desc" => "Enter the main banner title here.",
            "id" => $shortname."_lab2",
            "std" => "",
            "type" => "text"), 
            
    array("type" => "close"),
		
	array(  "name" => "125 x 125 banner Settings",
            "type" => "title",
			"desc" => "You can setup just one 125 x 125 banner on your sidebar from here",
       ), 
	 
	array("type" => "open"),
	
	
	array("name" => "Banner Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner",
        	"std" => "http://academy.telerik.com/images/default-album/telerik-academy-banner-160x76BCC894FB8968.jpg?sfvrsn=2",
            "type" => "text"), 
			
	array("name" => "Banner Image alt tag",
			"desc" => "Enter your banner alt tag.",
            "id" => $shortname."_alt",
        	"std" => "Telerik Academy Banner 160x76",
            "type" => "text"),    
	  
	array("name" => "Banner Url",
			"desc" => "Enter the banner url here.",
            "id" => $shortname."_url",
            "std" => "http://academy.telerik.com/?utm_source=site&utm_medium=banner&utm_cont",
            "type" => "text"),    
			
	array("name" => "Banner link title",
			"desc" => "Enter the banner title here.",
            "id" => $shortname."_lab",
            "std" => "Уроци по програмиране",
            "type" => "text"), 

    array("type" => "close"),

    array(  "name" => "Useful Links in Footer",
            "type" => "title",
            "desc" => "You can specify four useful links from here",
       ), 
     
    array("type" => "open"),
    
    array("name" => "Useful link Url 1",
            "desc" => "Enter url here.",
            "id" => $shortname."_linkurl1",
            "std" => "http://academy.telerik.com",
            "type" => "text"), 

    array("name" => "Useful link Text 1",
            "desc" => "Enter the text here.",
            "id" => $shortname."_linktext1",
            "std" => "Уроци по програмиране в Академията на Телерик",
            "type" => "text"),   
            
    array("name" => "Useful link Title 1",
            "desc" => "Enter the title here.",
            "id" => $shortname."_linktitle1",
            "std" => "Уроци по програмиране",
            "type" => "text"), 

    array("type" => "close"),	

    array("type" => "open"),
    
    array("name" => "Useful link Url 2",
            "desc" => "Enter url here.",
            "id" => $shortname."_linkurl2",
            "std" => "http://academy.telerik.com",
            "type" => "text"), 

    array("name" => "Useful link Text 2",
            "desc" => "Enter the text here.",
            "id" => $shortname."_linktext2",
            "std" => "Уроци по програмиране в Академията на Телерик",
            "type" => "text"),   
            
    array("name" => "Useful link Title 2",
            "desc" => "Enter the title here.",
            "id" => $shortname."_linktitle2",
            "std" => "Уроци по програмиране",
            "type" => "text"), 

    array("type" => "close"),	

        array("type" => "open"),
    
    array("name" => "Useful link Url 3",
            "desc" => "Enter url here.",
            "id" => $shortname."_linkurl3",
            "std" => "http://academy.telerik.com",
            "type" => "text"), 

    array("name" => "Useful link Text 3",
            "desc" => "Enter the text here.",
            "id" => $shortname."_linktext3",
            "std" => "Уроци по програмиране в Академията на Телерик",
            "type" => "text"),   
            
    array("name" => "Useful link Title 3",
            "desc" => "Enter the title here.",
            "id" => $shortname."_linktitle3",
            "std" => "Уроци по програмиране",
            "type" => "text"), 

    array("type" => "close"),

    array("type" => "open"),
    
    array("name" => "Useful link Url 4",
            "desc" => "Enter url here.",
            "id" => $shortname."_linkurl4",
            "std" => "http://academy.telerik.com",
            "type" => "text"), 

    array("name" => "Useful link Text 4",
            "desc" => "Enter the text here.",
            "id" => $shortname."_linktext4",
            "std" => "Уроци по програмиране в Академията на Телерик",
            "type" => "text"),   
            
    array("name" => "Useful link Title 4",
            "desc" => "Enter the title here.",
            "id" => $shortname."_linktitle4",
            "std" => "Уроци по програмиране",
            "type" => "text"), 

    array("type" => "close"),
	
);

 
function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=theme_options.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); 
                update_option( $value['id'], $value['std'] );}

            header("Location: themes.php?page=theme_options.php&reset=true");
            die;

        }
    }

      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;
   
    
?>
<div class="wrap">
<div class="opwrap" style="background:#fff; margin:20px auto; width:80%; padding:30px; border:1px solid #ddd;" >

<h2 class="wraphead" style="margin:10px 0px; padding:15px 10px; font-family:arial black; font-style:normal; background:#82b518;"><b><?php echo $themename; ?> theme options</b></h2>

<?php
   if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
   if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>
<form method="post">

<?php foreach ($options as $value) {


switch ( $value['type'] ) {

case "image":
?>


<tr>
<td width="30%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="70%"><img src="<?php echo $value['id']; ?>" /></td>
</tr>
<tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>

<?php break;

case "open":
?>
<table width="100%" border="0" style="background-color:#ffc; padding:10px;">

<?php break;

case "close":
?>

</table><br />
<?php break;

case "break":
?>
<tr><td colspan="2" style="border-top:1px solid #C2DCEF;">&nbsp;</td></tr>

<?php break;

case "title":
?>

<table width="100%" border="0" style="background-color:#ffd191; padding:5px 10px;">

<tr>
    <td colspan="2"><h3 style="font-size:18px;font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
</tr>

<?php break;

case 'text':
?>

<tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr>

<tr>
    <td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php
break;

case 'textarea':
?>

<tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes (get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>

</tr>

<tr>
    <td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php
break;

case 'select':
?>
<tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
    <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
</tr>

<tr>
    <td><small><?php echo $value['desc']; ?></small></td>
</tr>
<tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>

<?php
break;

case "checkbox":
?>
    <tr>
    <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
        <td width="80%"><? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                </td>
    </tr>

    <tr>
        <td><small><?php echo $value['desc']; ?></small></td>
   </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #ffffff;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php         break;

}
}
?>

<p class="submit">
<input name="save" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
</div>
<?php
}
add_action('admin_menu', 'mytheme_add_admin'); ?>