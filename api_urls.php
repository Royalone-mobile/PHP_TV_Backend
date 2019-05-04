<?php include("includes/header.php");

$file_path = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']).'/';
// echo $file_path;
?>
<div class="row">
      <div class="col-sm-12 col-xs-12">
     	 	<div class="card">
		        <div class="card-header">
		          Example API urls
		        </div>
       			    <div class="card-body no-padding">
         		
					  <pre><code class="html">
<b>Check Connection</b><br><?php echo $file_path."api.php?is_enabled"?><br><br>					  
<b>Home Channels</b><br><?php echo $file_path."api.php?get_home_channels"?><br><br>
<b>Home Highlight</b><br><?php echo $file_path."api.php?get_home_highlight"?><br><br>
<b>Home TV</b><br><?php echo $file_path."api.php?get_home_TV"?><br><br>
<b>Home Video</b><br><?php echo $file_path."api.php?get_home_video"?><br><br>
<b>All Channels</b><br><?php echo $file_path."api.php?get_all_channels"?><br><br>
<b>All Highlight</b><br><?php echo $file_path."api.php?get_all_highlight"?><br><br>
<b>All TV</b><br><?php echo $file_path."api.php?get_all_TV"?><br><br>
<b>All Videos</b><br><?php echo $file_path."api.php?get_all_videos"?><br><br>
<b>Latest Channels</b><br><?php echo $file_path."api.php?get_latest_channels"?><br><br>
<b>Latest Highlight</b><br><?php echo $file_path."api.php?get_latest_highlight"?><br><br>
<b>Latest TV</b><br><?php echo $file_path."api.php?get_latest_TV"?><br><br>
<b>Latest Video</b><br><?php echo $file_path."api.php?get_latest_video"?><br><br>
<b>Featured Channels</b><br><?php echo $file_path."api.php?get_featured_channels"?><br><br>
<b>Featured Highlight</b><br><?php echo $file_path."api.php?get_featured_highlight"?><br><br>
<b>Featured TV</b><br><?php echo $file_path."api.php?get_featured_TV"?><br><br>
<b>Featured Video</b><br><?php echo $file_path."api.php?get_featured_video"?><br><br>
<b>Category List</b><br><?php echo $file_path."api.php?get_category"?><br><br>
<b>Channel Category List</b><br><?php echo $file_path."api.php?get_category_channels"?><br><br>
<b>Highlight Category List</b><br><?php echo $file_path."api.php?get_category_highlight"?><br><br>
<b>TV Category List</b><br><?php echo $file_path."api.php?get_category_TV"?><br><br>
<b>Video Category List</b><br><?php echo $file_path."api.php?get_category_video"?><br><br>
<b>Channels list by Cat ID</b><br><?php echo $file_path."api.php?get_channels_by_cat_id=3"?><br><br>
<b>Highlight list by Cat ID</b><br><?php echo $file_path."api.php?get_highlight_by_cat_id=3"?><br><br>
<b>TV list by Cat ID</b><br><?php echo $file_path."api.php?get_TV_by_cat_id=3"?><br><br>
<b>Video list by Cat ID</b><br><?php echo $file_path."api.php?get_video_by_cat_id=3"?><br><br>
<b>All list by Cat ID</b><br><?php echo $file_path."api.php?get_all_by_cat_id=3"?><br><br>
<b>Single Channels</b><br><?php echo $file_path."api.php?get_single_channel_id=14"?><br><br>
<b>Single Highlight</b><br><?php echo $file_path."api.php?get_single_highlight_id=14"?><br><br>
<b>Single TV</b><br><?php echo $file_path."api.php?get_single_TV_id=14"?><br><br>
<b>Single Video</b><br><?php echo $file_path."api.php?get_single_video_id=14"?><br><br>
<b>Search Channels</b><br><?php echo $file_path."api.php?get_search_channels=tv"?><br><br>
<b>Search Highlight</b><br><?php echo $file_path."api.php?get_search_highlight=tv"?><br><br>
<b>Search TV</b><br><?php echo $file_path."api.php?get_search_TV=tv"?><br><br>
<b>Search Video</b><br><?php echo $file_path."api.php?get_search_video=tv"?><br><br>
<b>Report Channels</b>(Post method: post_channel_report,user_id,email,channel_id,report)<br><?php echo $file_path."api.php"?><br><br>
<b>User Register</b>(Post Mehtod: post_user_register, name,email,password,phone)<br><?php echo $file_path."api.php"?><br><br>
<b>User Login</b>(Post Mehtod: post_user_login, email,password)<br><?php echo $file_path."api.php"?><br><br>
<b>User Profile</b><br><?php echo $file_path."api.php?get_user_profile=2"?><br><br>
<b>User Profile Update</b>(Post method: post_user_profile_update,  user_id,name,email,password,phone)<br><?php echo $file_path."api.php"?><br><br>
<b>Forgot Password</b><br><?php echo $file_path."api.php?user_forgot_pass_email=john@gmail.com"?><br><br>
<b>Rating</b>(Post Mehtod: post_item_rate,post_id,user_id,rate)<br><?php echo $file_path."api.php"?><br><br>
<b>User Comment</b>(Post Mehtod: post_item_comment, post_id,user_id,comment_text)<br><?php echo $file_path."api.php"?><br><br>
<b>Get Comment</b><br><?php echo $file_path."api.php?get_item_comments_id=15"?><br><br>
<b>App Details</b><br><?php echo $file_path."api.php"?>
						  </code></pre>
       		
       				</div>
          	</div>
        </div>
</div>
    <br/>
    <div class="clearfix"></div>
        
<?php include("includes/footer.php");?>       
