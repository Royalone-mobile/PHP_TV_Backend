<?php include("includes/connection.php");
 	  include("includes/function.php"); 
    $ua = $_SERVER ['HTTP_USER_AGENT'];
	$path = $_SERVER['SERVER_NAME'];
 	if (strpos($ua, 'Android') !== false){
    $file_path = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']).'/'; 	  

   function get_user_info($user_id)
	{
 		global $mysqli;

	 	$user_qry="SELECT * FROM tbl_users where id='".$user_id."'";
		$user_result=mysqli_query($mysqli,$user_qry);
		$user_row=mysqli_fetch_assoc($user_result);
 
		return $user_row['name'];
	 }
	if(isset($_GET['is_enabled'])){
		echo $val = 'true';
		die();
		
	}

  if(isset($_GET['get_home_channels']))
  {

  	$jsonObj_0= array();	 
 
 		$query_home="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.status=1 AND tbl_channels.slider_channel=1 ORDER BY tbl_channels.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_channel_id';

			array_push($jsonObj_0,$row0);
			  
		}

		$query_home="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 AND tbl_TV.slider_channel=1 ORDER BY tbl_TV.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_TV_id';

			array_push($jsonObj_0,$row0);
			  
		}

		$query_home="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 AND tbl_highlight.slider_channel=1 ORDER BY tbl_highlight.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_highlight_id';

			array_push($jsonObj_0,$row0);
			  
		}

		$query_home="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 AND tbl_video.slider_channel=1 ORDER BY tbl_video.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_video_id';
			
			array_push($jsonObj_0,$row0);
			  
		}

		$row['slider_list']=$jsonObj_0; 

		

 		$jsonObj= array();	

		$query="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.status=1 ORDER BY tbl_channels.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_channel_id'; 
			 
			array_push($jsonObj,$row1);
		
		}

		$query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_highlight_id'; 
			 
			array_push($jsonObj,$row1);
		
		}

		$query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 ORDER BY tbl_TV.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_TV_id'; 
			 
			array_push($jsonObj,$row1);
		
		}

		$query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 ORDER BY tbl_video.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_video_id'; 
			 
			array_push($jsonObj,$row1);
		
		}

		$row['latest_channels']=$jsonObj;


		$jsonObj_2= array();	
 

		$query2="SELECT cid,category_name,category_image FROM tbl_category WHERE status=1 ORDER BY cid DESC LIMIT 20";
		$sql2 = mysqli_query($mysqli,$query2)or die(mysql_error());

		while($data2 = mysqli_fetch_assoc($sql2))
		{
			
			$row2['cid'] = $data2['cid'];
			$row2['category_name'] = $data2['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data2['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data2['category_image'];
			 

			array_push($jsonObj_2,$row2);
		
		}

		$row['cat_list']=$jsonObj_2; 
		$set['LIVETV'] = $row;

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

  }	
  else if(isset($_GET['get_home_highlight']))
  {

  	$jsonObj_0= array();	 
 
 		$query_home="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 AND tbl_highlight.slider_channel=1 ORDER BY tbl_highlight.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_highlight_id';

			array_push($jsonObj_0,$row0);
			  
		}

		$row['slider_list']=$jsonObj_0; 

 		$jsonObj= array();	

		$query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_highlight_id';			 
			 
			array_push($jsonObj,$row1);
		
		}

		$row['latest_channels']=$jsonObj;


		$jsonObj_2= array();	
 

		$query2="SELECT cid,category_name,category_image FROM tbl_category WHERE status=1 ORDER BY cid DESC LIMIT 3";
		$sql2 = mysqli_query($mysqli,$query2)or die(mysql_error());

		while($data2 = mysqli_fetch_assoc($sql2))
		{
			
			$row2['cid'] = $data2['cid'];
			$row2['category_name'] = $data2['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data2['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data2['category_image'];
			 

			array_push($jsonObj_2,$row2);
		
		}

		$row['cat_list']=$jsonObj_2; 
		$set['LIVETV'] = $row;

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
	  
  }
  else if(isset($_GET['get_home_TV']))
  {

  	$jsonObj_0= array();	 
 
 		$query_home="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 AND tbl_TV.slider_channel=1 ORDER BY tbl_TV.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_TV_id';

			array_push($jsonObj_0,$row0);
			  
		}

		$row['slider_list']=$jsonObj_0; 

 		$jsonObj= array();	

		$query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 ORDER BY tbl_TV.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_TV_id';			 
			 
			array_push($jsonObj,$row1);
		
		}

		$row['latest_channels']=$jsonObj;


		$jsonObj_2= array();	
 

		$query2="SELECT cid,category_name,category_image FROM tbl_category WHERE status=1 ORDER BY cid DESC LIMIT 3";
		$sql2 = mysqli_query($mysqli,$query2)or die(mysql_error());

		while($data2 = mysqli_fetch_assoc($sql2))
		{
			
			$row2['cid'] = $data2['cid'];
			$row2['category_name'] = $data2['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data2['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data2['category_image'];
			 

			array_push($jsonObj_2,$row2);
		
		}

		$row['cat_list']=$jsonObj_2; 
		$set['LIVETV'] = $row;

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
	  
  }
  else if(isset($_GET['get_all_channels']))
  {

  	$jsonObj= array();	

		$query="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.status=1 ORDER BY tbl_channels.id DESC";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_channel_id'; 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

  }
  else if(isset($_GET['get_all_highlight']))
  {

  	$jsonObj= array();	

		$query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_highlight_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

  }
  else if(isset($_GET['get_all_TV']))
  {

  	$jsonObj= array();	

		$query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 ORDER BY tbl_TV.id DESC";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_TV_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

  }
  else if(isset($_GET['get_latest_all']))
  {
		$limit=API_LATEST_LIMIT;
  		$jsonObj= array();

		$query="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id = tbl_category.cid 
		WHERE tbl_channels.status=1 ORDER BY tbl_channels.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_channel_id'; 
			$row['time'] = $data['time']; 

			array_push($jsonObj,$row);
		
		}

		$query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 ORDER BY tbl_video.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_video_id'; 
			$row['time'] = $data['time'];  

			array_push($jsonObj,$row);
		
		}

		$query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_highlight_id'; 
			$row['time'] = $data['time'];  

			array_push($jsonObj,$row);
		
		}

		$query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 ORDER BY tbl_TV.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_TV_id'; 
			$row['time'] = $data['time'];  

			array_push($jsonObj,$row);
		
		}

		$latest_len = count($jsonObj);
		for($i = 0; $i<$latest_len - 1; $i++){
			for($j = $i+1;$j<$latest_len; $j++){
				if(strcmp($jsonObj[$i]['time'],$jsonObj[$j]['time'])<0){
				//if($jsonObj[$i]['time']>$jsonObj[$i]['time']){
					$middle = $jsonObj[$i];
					$jsonObj[$i] = $jsonObj[$j];
					$jsonObj[$j] = $middle;
				}
			}
			// array_push($jsonObj,$jsonObj[$i]['time']);
		}
		

		$set['LIVETV'] = $jsonObj;


  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_latest_channels']))
  {
  		$limit=API_LATEST_LIMIT;
  		$jsonObj= array();

		$query="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.status=1 ORDER BY tbl_channels.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_channel_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_latest_highlight']))
  {
  		$limit=API_LATEST_LIMIT;
  		$jsonObj= array();

		$query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_highlight_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_latest_TV']))
  {
  		$limit=API_LATEST_LIMIT;
  		$jsonObj= array();

		$query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 ORDER BY tbl_TV.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_TV_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_featured_channels']))
  {
  		$jsonObj_2= array();	

		$query_all1="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid
		WHERE tbl_channels.featured_channel=1 AND tbl_channels.status=1 ORDER BY tbl_channels.id DESC";

		$sql_all1 = mysqli_query($mysqli,$query_all1)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all1))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row2['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_channel_id'; 

			array_push($jsonObj_2,$row2);
		
		}

		$query_all2="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid
		WHERE tbl_TV.featured_channel=1 AND tbl_TV.status=1 ORDER BY tbl_TV.id DESC";

		$sql_all2 = mysqli_query($mysqli,$query_all2)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all2))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row2['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_TV_id'; 

			array_push($jsonObj_2,$row2);
		
		}

		$query_all3="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid
		WHERE tbl_highlight.featured_channel=1 AND tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC";

		$sql_all3 = mysqli_query($mysqli,$query_all3)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all3))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row2['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_highlight_id'; 

			array_push($jsonObj_2,$row2);
		
		}

		$query_all4="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid
		WHERE tbl_video.featured_channel=1 AND tbl_video.status=1 ORDER BY tbl_video.id DESC";

		$sql_all4 = mysqli_query($mysqli,$query_all4)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all4))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row2['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_video_id'; 

			array_push($jsonObj_2,$row2);
		
		}
  
		$set['LIVETV'] = $jsonObj_2;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_featured_highlight']))
  {
  		$jsonObj_2= array();	

		$query_all="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid
		WHERE tbl_highlight.featured_channel=1 AND tbl_highlight.status=1 ORDER BY tbl_highlight.id DESC";

		$sql_all = mysqli_query($mysqli,$query_all)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row2['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_highlight_id'; 
			
			

			array_push($jsonObj_2,$row2);
		
		}
  
		$set['LIVETV'] = $jsonObj_2;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_featured_TV']))
  {
  		$jsonObj_2= array();	

		$query_all="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid
		WHERE tbl_TV.featured_channel=1 AND tbl_TV.status=1 ORDER BY tbl_TV.id DESC";

		$sql_all = mysqli_query($mysqli,$query_all)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_TV_id'; 

			array_push($jsonObj_2,$row2);
		
		}
  
		$set['LIVETV'] = $jsonObj_2;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_category']))
  {
  		$jsonObj= array();
		
		$cid=API_CAT_ORDER_BY;


		$query="SELECT cid,category_name,category_image FROM tbl_category WHERE status=1 ORDER BY tbl_category.".$cid."";
		$sql = mysqli_query($mysqli,$query)or die(mysql_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			
			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_category_channels']))
  {
  		$jsonObj= array();
		
		$cid=API_CAT_ORDER_BY;


		$query="SELECT * FROM tbl_channels LEFT JOIN tbl_category ON tbl_channels.cat_id = tbl_category.cid WHERE tbl_channels.status = 1 GROUP BY cat_id";
		$sql = mysqli_query($mysqli,$query)or die(mysql_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			
			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_category_highlight']))
  {
  		$jsonObj= array();
		
		$cid=API_CAT_ORDER_BY;


		$query="SELECT *FROM tbl_highlight LEFT JOIN tbl_category ON tbl_highlight.cat_id = tbl_category.cid WHERE tbl_highlight.status = 1 GROUP BY cat_id";
		$sql = mysqli_query($mysqli,$query)or die(mysql_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			
			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_category_TV']))
  {
  		$jsonObj= array();
		
		$cid=API_CAT_ORDER_BY;


		$query="SELECT * FROM tbl_TV LEFT JOIN tbl_category ON tbl_TV.cat_id = tbl_category.cid WHERE tbl_TV.status = 1 GROUP BY cat_id";
		$sql = mysqli_query($mysqli,$query)or die(mysql_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			
			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_channels_by_cat_id']))
  {		
  		$post_order_by=API_CAT_POST_ORDER_BY;

		$cat_id=$_GET['get_channels_by_cat_id'];	

		$jsonObj= array();	
	
	    $query="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.cat_id='".$cat_id."' AND tbl_channels.status=1 ORDER BY tbl_channels.".$post_order_by."";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_channel_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;	 

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
   else if(isset($_GET['get_all_by_cat_id']))
  {		
  		$post_order_by=API_CAT_POST_ORDER_BY;

		$cat_id=$_GET['get_all_by_cat_id'];	

		$jsonObj= array();	
	
	    $query1="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.cat_id='".$cat_id."' AND tbl_channels.status=1 ORDER BY tbl_channels.".$post_order_by."";

		$sql1 = mysqli_query($mysqli,$query1)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql1))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_channel_id'; 

			array_push($jsonObj,$row);
		
		}

	    $query2="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.cat_id='".$cat_id."' AND tbl_highlight.status=1 ORDER BY tbl_highlight.".$post_order_by."";

		$sql2 = mysqli_query($mysqli,$query2)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql2))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_highlight_id'; 

			array_push($jsonObj,$row);
		
		}

		$query3="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.cat_id='".$cat_id."' AND tbl_TV.status=1 ORDER BY tbl_TV.".$post_order_by."";

		$sql3 = mysqli_query($mysqli,$query3)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql3))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_TV_id'; 

			array_push($jsonObj,$row);
		
		}

		$query4="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.cat_id='".$cat_id."' AND tbl_video.status=1 ORDER BY tbl_video.".$post_order_by."";

		$sql4 = mysqli_query($mysqli,$query4)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql4))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_video_id';  

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;	 

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
else if(isset($_GET['get_highlight_by_cat_id']))
  {		
  		$post_order_by=API_CAT_POST_ORDER_BY;

		$cat_id=$_GET['get_highlight_by_cat_id'];	

		$jsonObj= array();	
	
	    $query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.cat_id='".$cat_id."' AND tbl_highlight.status=1 ORDER BY tbl_highlight.".$post_order_by."";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_highlight_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;	 

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
else if(isset($_GET['get_TV_by_cat_id']))
  {		
  		$post_order_by=API_CAT_POST_ORDER_BY;

		$cat_id=$_GET['get_TV_by_cat_id'];	

		$jsonObj= array();	
	
	    $query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.cat_id='".$cat_id."' AND tbl_TV.status=1 ORDER BY tbl_TV.".$post_order_by."";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_TV_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;	 

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_single_channel_id']))
  {		
  		$SQL1="select * from tbl_channels
		 LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		 where id='".$_GET['get_single_channel_id']."'";	
		$result1 = mysqli_query($mysqli,$SQL1)or die(mysqli_error());	
						
			$jsonObj= array();

			while ($row1 = mysqli_fetch_assoc($result1)) 
			{
	  
					$catArr=array();
					$catArr['id'] = $row1['id'];
					$catArr['cat_id'] = $row1['cat_id'];
					$catArr['channel_type'] = $row1['channel_type'];
					$catArr['channel_title'] = $row1['channel_title'];
					$catArr['channel_url'] = $row1['channel_url'];
					$catArr['channel_type_ios'] = $row1['channel_type_ios'];
					$catArr['channel_url_ios'] = $row1['channel_url_ios'];
					$catArr['channel_thumbnail'] = $file_path.'images/'.$row1['channel_thumbnail'];
					$catArr['channel_desc'] = $row1['channel_desc'];
					$catArr['total_views'] = $row1['total_views'];
					$catArr['total_rate'] = $row1['total_rate'];
					$catArr['rate_avg'] = $row1['rate_avg'];

					$catArr['category_name'] = $row1['category_name'];
					$catArr['cat_type'] = 'get_single_channel_id';

					$SQL2 = "SELECT * FROM tbl_channels WHERE tbl_channels.status=1 AND cat_id = '".$row1['cat_id']."'";
	       			$result2 = mysqli_query($mysqli,$SQL2);
					
					$subvidArr=array();
					while ($row2 = mysqli_fetch_assoc($result2)) 
					{	
	 					if($row1['id'] != $row2['id'])
						{									
						$temp = array('rel_id' => $row2['id'], 'rel_channel_title' => $row2['channel_title'] , 'rel_channel_url' =>$row2['channel_url'],'rel_channel_url_ios' => $row2['channel_url_ios'],
						 'rel_channel_thumbnail' => $file_path.'images/'.$row2['channel_thumbnail']);
						$subvidArr[]=$temp;
						}
					}
					$catArr['related']=$subvidArr;								 
	  				array_push($jsonObj,$catArr);
	  
			}

		$view_qry=mysqli_query($mysqli,"UPDATE tbl_channels SET total_views = total_views + 1 WHERE id = '".$_GET['get_single_channel_id']."'");
	
				 
				
		$set['LIVETV'] = $jsonObj;
 
  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_single_highlight_id']))
  {		
  		$SQL1="select * from tbl_highlight
		 LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		 where id='".$_GET['get_single_highlight_id']."'";	
		$result1 = mysqli_query($mysqli,$SQL1)or die(mysqli_error());	
						
			$jsonObj= array();

			while ($row1 = mysqli_fetch_assoc($result1)) 
			{
	  
					$catArr=array();
					$catArr['id'] = $row1['id'];
					$catArr['cat_id'] = $row1['cat_id'];
					$catArr['channel_type'] = $row1['channel_type'];
					$catArr['channel_title'] = $row1['channel_title'];
					$catArr['channel_url'] = $row1['channel_url'];
					$catArr['channel_type_ios'] = $row1['channel_type_ios'];
					$catArr['channel_url_ios'] = $row1['channel_url_ios'];
					$catArr['channel_thumbnail'] = $file_path.'images/'.$row1['channel_thumbnail'];
					$catArr['channel_desc'] = $row1['channel_desc'];
					$catArr['total_views'] = $row1['total_views'];
					$catArr['total_rate'] = $row1['total_rate'];
					$catArr['rate_avg'] = $row1['rate_avg'];

					$catArr['category_name'] = $row1['category_name'];
					$catArr['cat_type'] = 'get_single_highlight_id';

					$SQL2 = "SELECT * FROM tbl_highlight WHERE tbl_highlight.status=1 AND cat_id = '".$row1['cat_id']."'";
	       			$result2 = mysqli_query($mysqli,$SQL2);
					
					$subvidArr=array();
					while ($row2 = mysqli_fetch_assoc($result2)) 
					{	
	 					if($row1['id'] != $row2['id'])
						{									
						$temp = array('rel_id' => $row2['id'], 'rel_channel_title' => $row2['channel_title'] , 'rel_channel_url' =>$row2['channel_url'],'rel_channel_url_ios' => $row2['channel_url_ios'],
						 'rel_channel_thumbnail' => $file_path.'images/'.$row2['channel_thumbnail']);
						$subvidArr[]=$temp;
						}
					}
					$catArr['related']=$subvidArr;								 
	  				array_push($jsonObj,$catArr);
	  
			}

		$view_qry=mysqli_query($mysqli,"UPDATE tbl_highlight SET total_views = total_views + 1 WHERE id = '".$_GET['get_single_highlight_id']."'");
	
				 
				
		$set['LIVETV'] = $jsonObj;
 
  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_single_TV_id']))
  {		
  		$SQL1="select * from tbl_TV
		 LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		 where id='".$_GET['get_single_TV_id']."'";	
		$result1 = mysqli_query($mysqli,$SQL1)or die(mysqli_error());	
						
			$jsonObj= array();

			while ($row1 = mysqli_fetch_assoc($result1)) 
			{
	  
					$catArr=array();
					$catArr['id'] = $row1['id'];
					$catArr['cat_id'] = $row1['cat_id'];
					$catArr['channel_type'] = $row1['channel_type'];
					$catArr['channel_title'] = $row1['channel_title'];
					$catArr['channel_url'] = $row1['channel_url'];
					$catArr['channel_type_ios'] = $row1['channel_type_ios'];
					$catArr['channel_url_ios'] = $row1['channel_url_ios'];
					$catArr['channel_thumbnail'] = $file_path.'images/'.$row1['channel_thumbnail'];
					$catArr['channel_desc'] = $row1['channel_desc'];
					$catArr['total_views'] = $row1['total_views'];
					$catArr['total_rate'] = $row1['total_rate'];
					$catArr['rate_avg'] = $row1['rate_avg'];

					$catArr['category_name'] = $row1['category_name'];
					$catArr['cat_type'] = 'get_single_TV_id';

					$SQL2 = "SELECT * FROM tbl_TV WHERE tbl_TV.status=1 AND cat_id = '".$row1['cat_id']."'";
	       			$result2 = mysqli_query($mysqli,$SQL2);
					
					$subvidArr=array();
					while ($row2 = mysqli_fetch_assoc($result2)) 
					{	
	 					if($row1['id'] != $row2['id'])
						{									
						$temp = array('rel_id' => $row2['id'], 'rel_channel_title' => $row2['channel_title'] , 'rel_channel_url' =>$row2['channel_url'],'rel_channel_url_ios' => $row2['channel_url_ios'],
						 'rel_channel_thumbnail' => $file_path.'images/'.$row2['channel_thumbnail']);
						$subvidArr[]=$temp;
						}
					}
					$catArr['related']=$subvidArr;								 
	  				array_push($jsonObj,$catArr);
	  
			}

		$view_qry=mysqli_query($mysqli,"UPDATE tbl_TV SET total_views = total_views + 1 WHERE id = '".$_GET['get_single_TV_id']."'");
	
				 
				
		$set['LIVETV'] = $jsonObj;
 
  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_search_channels']))
  {	
  		$jsonObj= array();	

		$query="SELECT * FROM tbl_channels
		LEFT JOIN tbl_category ON tbl_channels.cat_id= tbl_category.cid 
		WHERE tbl_channels.status=1 AND channel_title like '%".$_GET['get_search_channels']."%' ";
		$sql = mysqli_query($mysqli,$query);
		
		if(mysqli_num_rows($sql)>0){

				while($data = mysqli_fetch_assoc($sql))
				{
					$row['id'] = $data['id'];
					$row['cat_id'] = $data['cat_id'];
					$row['channel_title'] = $data['channel_title'];
					$row['channel_url'] = $data['channel_url'];
					$row['channel_url_ios'] = $data['channel_url_ios'];
					$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
					$row['channel_desc'] = $data['channel_desc'];

					$row['rate_avg'] = $data['rate_avg'];

					$row['cid'] = $data['cid'];
					$row['category_name'] = $data['category_name'];
					$row['category_image'] = $file_path.'images/'.$data['category_image'];
					$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
					$row['cat_type'] = 'get_single_channel_id'; 
					 

					array_push($jsonObj,$row);
				
				}

				$set['LIVETV'] = $jsonObj;
				 
		}
		else
		{
			    $set['LIVETV'][]=array('msg' => 'No Channel Found! Try Different Keyword','Success'=>'0');
 
		}

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_search_highlight']))
  {	
  		$jsonObj= array();	

		$query="SELECT * FROM tbl_highlight
		LEFT JOIN tbl_category ON tbl_highlight.cat_id= tbl_category.cid 
		WHERE tbl_highlight.status=1 AND channel_title like '%".$_GET['get_search_highlight']."%' ";
		$sql = mysqli_query($mysqli,$query);
		
		if(mysqli_num_rows($sql)>0){

				while($data = mysqli_fetch_assoc($sql))
				{
					$row['id'] = $data['id'];
					$row['cat_id'] = $data['cat_id'];
					$row['channel_title'] = $data['channel_title'];
					$row['channel_url'] = $data['channel_url'];
					$row['channel_url_ios'] = $data['channel_url_ios'];
					$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
					$row['channel_desc'] = $data['channel_desc'];

					$row['rate_avg'] = $data['rate_avg'];

					$row['cid'] = $data['cid'];
					$row['category_name'] = $data['category_name'];
					$row['category_image'] = $file_path.'images/'.$data['category_image'];
					$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
					$row['cat_type'] = 'get_single_highlight_id'; 
					 

					array_push($jsonObj,$row);
				
				}

				$set['LIVETV'] = $jsonObj;
				 
		}
		else
		{
			    $set['LIVETV'][]=array('msg' => 'No Channel Found! Try Different Keyword','Success'=>'0');
 
		}

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_search_TV']))
  {	
  		$jsonObj= array();	

		$query="SELECT * FROM tbl_TV
		LEFT JOIN tbl_category ON tbl_TV.cat_id= tbl_category.cid 
		WHERE tbl_TV.status=1 AND channel_title like '%".$_GET['get_search_TV']."%' ";
		$sql = mysqli_query($mysqli,$query);
		
		if(mysqli_num_rows($sql)>0){

				while($data = mysqli_fetch_assoc($sql))
				{
					$row['id'] = $data['id'];
					$row['cat_id'] = $data['cat_id'];
					$row['channel_title'] = $data['channel_title'];
					$row['channel_url'] = $data['channel_url'];
					$row['channel_url_ios'] = $data['channel_url_ios'];
					$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
					$row['channel_desc'] = $data['channel_desc'];

					$row['rate_avg'] = $data['rate_avg'];

					$row['cid'] = $data['cid'];
					$row['category_name'] = $data['category_name'];
					$row['category_image'] = $file_path.'images/'.$data['category_image'];
					$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
					$row['cat_type'] = 'get_single_TV_id'; 
					 

					array_push($jsonObj,$row);
				
				}

				$set['LIVETV'] = $jsonObj;
				 
		}
		else
		{
			    $set['LIVETV'][]=array('msg' => 'No Channel Found! Try Different Keyword','Success'=>'0');
 
		}

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_POST['post_channel_report']))
  {		
  		$report=$_POST['report'];   
		
		if($report)
		{
			  
			$qry1="INSERT INTO tbl_reports (`user_id`,`email`,`channel_id`,`report`) VALUES ('".$_POST['user_id']."','".$_POST['email']."','".$_POST['channel_id']."','".$report."')"; 
            
            $result1=mysqli_query($mysqli,$qry1);  	

				
			$set['LIVETV'][] = array('msg' => 'Report has been sent successfully...','success'=>'1');
		}
		else
		{
			$set['LIVETV'][] = array('msg' => 'Please add report text','success'=>'0');
		}

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_POST['post_user_register']))
  {	
  		if($_POST['name']!='' AND $_POST['email']!='' AND $_POST['password']!='')
		{

			$qry = "SELECT * FROM tbl_users WHERE email = '".$_POST['email']."'"; 
			$result = mysqli_query($mysqli,$qry);
			$row = mysqli_fetch_assoc($result);
			
			if($row['email']!="")
			{
				$set['LIVETV'][]=array('msg' => "Email address already used!",'success'=>'0');
			}
			else
			{ 
	 			
	 			 
	 			$qry1="INSERT INTO tbl_users (`user_type`,`name`,`email`,`password`,`phone`,`status`) VALUES ('Normal','".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phone']."','1')"; 
	            
	            $result1=mysqli_query($mysqli,$qry1);  										 
						 
					
				$set['LIVETV'][]=array('msg' => "Register successflly...!",'success'=>'1');
						
			}
	  

		}
		else
		{
			$set['LIVETV'][]=array('msg' => "Empty fields!",'success'=>'0');
		}

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_POST['post_user_login']))
  {

  		$email = $_POST['email'];
		$password = $_POST['password'];

		$qry = "SELECT * FROM tbl_users WHERE email = '".$email."' and password = '".$password."'"; 
		$result = mysqli_query($mysqli,$qry);
		$num_rows = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		
    if ($num_rows > 0)
		{ 
					 
			     $set['LIVETV'][]=array('user_id' => $row['id'],'name'=>$row['name'],'success'=>'1');
			      
			 
		}		 
		else
		{
				 
 				$set['LIVETV'][]=array('msg' =>'Login failed','success'=>'0');
 				 
		}

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

  }
  else if(isset($_GET['get_user_profile']))
  {
  		$qry = "SELECT * FROM tbl_users WHERE id = '".$_GET['get_user_profile']."'"; 
		$result = mysqli_query($mysqli,$qry);
		 
		$row = mysqli_fetch_assoc($result);
	  				 
	    $set['LIVETV'][]=array('user_id' => $row['id'],'name'=>$row['name'],'email'=>$row['email'],'phone'=>$row['phone'],'success'=>'1');

	    header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_POST['post_user_profile_update']))
  {
  		if($_POST['password']!="")
		{
			$user_edit= "UPDATE tbl_users SET name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['password']."',phone='".$_POST['phone']."' WHERE id = '".$_POST['user_id']."'";	 
		}
		else
		{
			$user_edit= "UPDATE tbl_users SET name='".$_POST['name']."',email='".$_POST['email']."',phone='".$_POST['phone']."' WHERE id = '".$_POST['user_id']."'";	 
		}
   		
   		$user_res = mysqli_query($mysqli,$user_edit);
 		 
	  				 
		$set['LIVETV'][]=array('msg'=>'Updated','success'=>'1');

  		 header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['user_forgot_pass_email']))
  {
  		$host = $_SERVER['HTTP_HOST'];
		preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
        $domain_name=$matches[0];
         
	 	 
		$qry = "SELECT * FROM tbl_users WHERE email = '".$_GET['user_forgot_pass_email']."'"; 
		$result = mysqli_query($mysqli,$qry);
		$row = mysqli_fetch_assoc($result);
		
		if($row['email']!="")
		{
 
			$to = $row['email'];
			// subject
			$subject = '[IMPORTANT] '.APP_NAME.' Forgot Password Information';
 			
			$message='<div style="background-color: #f9f9f9;" align="center"><br />
					  <table style="font-family: OpenSans,sans-serif; color: #666666;" border="0" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
					    <tbody>
					      <tr>
					        <td colspan="2" bgcolor="#FFFFFF" align="center"><img src="http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']).'/images/'.APP_LOGO.'" alt="header" /></td>
					      </tr>
					      <tr>
					        <td width="600" valign="top" bgcolor="#FFFFFF"><br>
					          <table style="font-family:OpenSans,sans-serif; color: #666666; font-size: 10px; padding: 15px;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
					            <tbody>
					              <tr>
					                <td valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0" style="font-family:OpenSans,sans-serif; color: #666666; font-size: 10px; width:100%;">
					                    <tbody>
					                      <tr>
					                        <td><p style="color: #262626; font-size: 28px; margin-top:0px;"><strong>Dear '.$row['name'].'</strong></p>
					                          <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;">Thank you for using '.APP_NAME.',<br>
					                            Your password is: '.$row['password'].'</p>
					                          <p style="color:#262626; font-size:20px; line-height:32px;font-weight:500;margin-bottom:30px;">Thanks you,<br />
					                            '.APP_NAME.'.</p></td>
					                      </tr>
					                    </tbody>
					                  </table></td>
					              </tr>
					               
					            </tbody>
					          </table></td>
					      </tr>
					      <tr>
					        <td style="color: #262626; padding: 20px 0; font-size: 20px; border-top:5px solid #52bfd3;" colspan="2" align="center" bgcolor="#ffffff">Copyright © '.APP_NAME.'.</td>
					      </tr>
					    </tbody>
					  </table>
					</div>';


			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			//$headers .= 'From: '.APP_NAME.' <noreply@'.$domain_name.'>' . "\r\n";
			$headers .= 'From: '.APP_NAME.' <'.APP_FROM_EMAIL.'>' . "\r\n";
			// Mail it
			@mail($to, $subject, $message, $headers);

			 	  
			$set['LIVETV'][]=array('msg' => "Password has been sent on your mail!",'success'=>'1');
		}
		else
		{  	 
				
			$set['LIVETV'][]=array('msg' => "Email not found in our database!",'success'=>'0');
					
		}

	    header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_POST['post_item_rate']))
  {
  		  $ip = $_POST['user_id'];
	      $post_id = $_POST['post_id'];
	      $user_id = $_POST['user_id'];
	      $therate = $_POST['rate'];

	  
	      $query1 = mysqli_query($mysqli,"select * from tbl_rating where post_id  = '$post_id' and user_id = '$user_id'"); 
	      while($data1 = mysqli_fetch_assoc($query1)){
	        $rate_db1[] = $data1;
	      }
	      if(@count($rate_db1) == 0 ){
	      	 
	          
	  		$qry1="INSERT INTO tbl_rating (`post_id`,`user_id`,`rate`,`ip`) VALUES ('".$post_id."','".$user_id."','".$therate."','".$ip."')"; 
            $result1=mysqli_query($mysqli,$qry1);  
	      
	          //Total rate result
	           
	        $query = mysqli_query($mysqli,"select * from tbl_rating where post_id  = '$post_id' ");
	               
	         while($data = mysqli_fetch_assoc($query)){
	                    $rate_db[] = $data;
	                    $sum_rates[] = $data['rate'];
	               
	                }
	        
	                if(@count($rate_db)){
	                    $rate_times = count($rate_db);
	                    $sum_rates = array_sum($sum_rates);
	                    $rate_value = $sum_rates/$rate_times;
	                    $rate_bg = (($rate_value)/5)*100;
	                }else{
	                    $rate_times = 0;
	                    $rate_value = 0;
	                    $rate_bg = 0;
	                }
	         
	        $rate_avg=round($rate_value); 
	        
	      $sql="update tbl_channels set total_rate=total_rate + 1,rate_avg='$rate_avg' where id='".$post_id."'";
	      mysqli_query($mysqli,$sql);
	        
	      $total_rat_sql="SELECT * FROM tbl_channels WHERE id='".$post_id."'";
	      $total_rat_res=mysqli_query($mysqli,$total_rat_sql);
	      $total_rat_row=mysqli_fetch_assoc($total_rat_res);
	    
	         
	        $set['LIVETV'][]=array('total_rate' =>$total_rat_row['total_rate'],'rate_avg' =>$total_rat_row['rate_avg'],'msg' => "You have succesfully rated",'success'=>'1');
	        
	      }else{
	                
	 
	        $set['LIVETV'][]=array('msg' => "You have already rated",'success'=>'0');
	      }

	    header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_POST['post_item_comment']))
  {
  		  $post_id = $_POST['post_id'];
	      $user_id = $_POST['user_id'];
		  $user_name = $_POST['user_name'];
	      $comment_text = $_POST['comment_text'];

			$qry1="INSERT INTO tbl_comments (`post_id`,`user_id`,`user_name`,`comment_text`) VALUES ('".$post_id."','".$user_id."','".$user_name."','".$comment_text."')"; 
            $result1=mysqli_query($mysqli,$qry1);	


            $set['LIVETV'][]=array('msg' => "Comment post successfully...",'success'=>'1');
            header( 'Content-Type: application/json; charset=utf-8' );
		    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
			die();
  }
  else if(isset($_GET['get_item_comments_id']))
  {
  	     $SQL1="select * from tbl_comments		  
		 where post_id='".$_GET['get_item_comments_id']."'";	
		 $result = mysqli_query($mysqli,$SQL1)or die(mysqli_error());	
						
			$jsonObj= array();

			while ($data = mysqli_fetch_assoc($result)) 
			{
	  				$row['id'] = $data['id'];
					$row['post_id'] = $data['post_id'];
					$row['user_name'] =($data['user_id']!='-9999')?get_user_info($data['user_id']):$data['user_name'];
					$row['comment_text'] = $data['comment_text'];
					$row['date'] = $data['dt_rate']; 

	  				array_push($jsonObj,$row);
	  
			}
 
				
		 $set['LIVETV'] = $jsonObj;			
  		 header( 'Content-Type: application/json; charset=utf-8' );
		    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
			die();
  }

  else if(isset($_GET['get_all_videos']))
  {

  	$jsonObj= array();	

		$query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 ORDER BY tbl_video.id DESC";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_video_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

  }

  else if(isset($_GET['get_video_by_cat_id']))
  {		
  		$post_order_by=API_CAT_POST_ORDER_BY;

		$cat_id=$_GET['get_video_by_cat_id'];	

		$jsonObj= array();	
	
	    $query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.cat_id='".$cat_id."' AND tbl_video.status=1 ORDER BY tbl_video.".$post_order_by."";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_video_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;	 

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_home_video']))
  {

  	$jsonObj_0= array();	 
 
 		$query_home="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 AND tbl_video.slider_channel=1 ORDER BY tbl_video.id DESC";
		$sql_home = mysqli_query($mysqli,$query_home)or die(mysqli_error());

		while($data_home = mysqli_fetch_assoc($sql_home))
		{ 

			$row0['id'] = $data_home['id'];
			$row0['cat_id'] = $data_home['cat_id'];
			$row0['channel_title'] = $data_home['channel_title'];
			$row0['channel_url'] = $data_home['channel_url'];
			$row0['channel_url_ios'] = $data_home['channel_url_ios'];
			$row0['channel_thumbnail'] = $file_path.'images/'.$data_home['channel_thumbnail'];
			$row0['channel_desc'] = $data_home['channel_desc'];
			$row0['rate_avg'] = $data_home['rate_avg'];

			$row0['cid'] = $data_home['cid'];
			$row0['category_name'] = $data_home['category_name'];
			$row0['category_image'] = $file_path.'images/'.$data_home['category_image'];
			$row0['category_image_thumb'] = $file_path.'images/thumbs/'.$data_home['category_image'];
			$row0['cat_type'] = 'get_single_video_id'; 

			array_push($jsonObj_0,$row0);
			  
		}

		$row['slider_list']=$jsonObj_0; 

 		$jsonObj= array();	

		$query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 ORDER BY tbl_video.id DESC LIMIT 3";

		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row1['id'] = $data['id'];
			$row1['cat_id'] = $data['cat_id'];
			$row1['channel_title'] = $data['channel_title'];
			$row1['channel_url'] = $data['channel_url'];
			$row1['channel_url_ios'] = $data['channel_url_ios'];
			$row1['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row1['channel_desc'] = $data['channel_desc'];
			$row1['rate_avg'] = $data['rate_avg'];

			$row1['cid'] = $data['cid'];
			$row1['category_name'] = $data['category_name'];
			$row1['category_image'] = $file_path.'images/'.$data['category_image'];
			$row1['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row1['cat_type'] = 'get_single_video_id'; 
			 
			 
			array_push($jsonObj,$row1);
		
		}

		$row['latest_channels']=$jsonObj;


		$jsonObj_2= array();	
 

		$query2="SELECT cid,category_name,category_image FROM tbl_category WHERE status=1 ORDER BY cid DESC LIMIT 3";
		$sql2 = mysqli_query($mysqli,$query2)or die(mysql_error());

		while($data2 = mysqli_fetch_assoc($sql2))
		{
			
			$row2['cid'] = $data2['cid'];
			$row2['category_name'] = $data2['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data2['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data2['category_image'];
			 

			array_push($jsonObj_2,$row2);
		
		}

		$row['cat_list']=$jsonObj_2; 
		$set['LIVETV'] = $row;

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
	  
  }
  else if(isset($_GET['get_latest_video']))
  {
  		$limit=API_LATEST_LIMIT;
  		$jsonObj= array();

		$query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 ORDER BY tbl_video.id DESC LIMIT $limit";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			$row['id'] = $data['id'];
			$row['cat_id'] = $data['cat_id'];
			$row['channel_title'] = $data['channel_title'];
			$row['channel_url'] = $data['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
			$row['channel_desc'] = $data['channel_desc'];

			$row['total_views'] = $data['total_views'];
			$row['total_rate'] = $data['total_rate'];
			$row['rate_avg'] = $data['rate_avg'];

			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			$row['cat_type'] = 'get_single_video_id'; 
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_featured_video']))
  {
  		$jsonObj_2= array();	

		$query_all="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid
		WHERE tbl_video.featured_channel=1 AND tbl_video.status=1 ORDER BY tbl_video.id DESC";

		$sql_all = mysqli_query($mysqli,$query_all)or die(mysqli_error());

		while($data_all = mysqli_fetch_assoc($sql_all))
		{
			$row2['id'] = $data_all['id'];
			$row2['cat_id'] = $data_all['cat_id'];
			$row2['channel_title'] = $data_all['channel_title'];
			$row2['channel_url'] = $data_all['channel_url'];
			$row['channel_url_ios'] = $data['channel_url_ios'];
			$row2['channel_thumbnail'] = $file_path.'images/'.$data_all['channel_thumbnail'];
			$row2['channel_desc'] = $data_all['channel_desc'];
			$row2['rate_avg'] = $data_all['rate_avg'];

			$row2['cid'] = $data_all['cid'];
			$row2['category_name'] = $data_all['category_name'];
			$row2['category_image'] = $file_path.'images/'.$data_all['category_image'];
			$row2['category_image_thumb'] = $file_path.'images/thumbs/'.$data_all['category_image'];
			$row2['cat_type'] = 'get_single_video_id'; 
			
			

			array_push($jsonObj_2,$row2);
		
		}
  
		$set['LIVETV'] = $jsonObj_2;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_category_video']))
  {
  		$jsonObj= array();
		
		$cid=API_CAT_ORDER_BY;


		$query="SELECT * FROM tbl_video LEFT JOIN tbl_category ON tbl_video.cat_id = tbl_category.cid WHERE tbl_video.status = 1 GROUP BY cat_id";
		$sql = mysqli_query($mysqli,$query)or die(mysql_error());

		while($data = mysqli_fetch_assoc($sql))
		{
			
			$row['cid'] = $data['cid'];
			$row['category_name'] = $data['category_name'];
			$row['category_image'] = $file_path.'images/'.$data['category_image'];
			$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
			 

			array_push($jsonObj,$row);
		
		}

		$set['LIVETV'] = $jsonObj;

  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_single_video_id']))
  {		
  		$SQL1="select * from tbl_video
		 LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		 where id='".$_GET['get_single_video_id']."'";	
		$result1 = mysqli_query($mysqli,$SQL1)or die(mysqli_error());	
						
			$jsonObj= array();

			while ($row1 = mysqli_fetch_assoc($result1)) 
			{
	  
					$catArr=array();
					$catArr['id'] = $row1['id'];
					$catArr['cat_id'] = $row1['cat_id'];
					$catArr['channel_type'] = $row1['channel_type'];
					$catArr['channel_title'] = $row1['channel_title'];
					$catArr['channel_url'] = $row1['channel_url'];
					$catArr['channel_type_ios'] = $row1['channel_type_ios'];
					$catArr['channel_url_ios'] = $row1['channel_url_ios'];
					$catArr['channel_thumbnail'] = $file_path.'images/'.$row1['channel_thumbnail'];
					$catArr['channel_desc'] = $row1['channel_desc'];
					$catArr['total_views'] = $row1['total_views'];
					$catArr['total_rate'] = $row1['total_rate'];
					$catArr['rate_avg'] = $row1['rate_avg'];

					$catArr['category_name'] = $row1['category_name'];
					$catArr['cat_type'] = 'get_single_video_id';

					$SQL2 = "SELECT * FROM tbl_TV WHERE tbl_video.status=1 AND cat_id = '".$row1['cat_id']."'";
	       			$result2 = mysqli_query($mysqli,$SQL2);
					
					$subvidArr=array();
					while ($row2 = mysqli_fetch_assoc($result2)) 
					{	
	 					if($row1['id'] != $row2['id'])
						{									
						$temp = array('rel_id' => $row2['id'], 'rel_channel_title' => $row2['channel_title'] , 'rel_channel_url' =>$row2['channel_url'],'rel_channel_url_ios' => $row2['channel_url_ios'],
						 'rel_channel_thumbnail' => $file_path.'images/'.$row2['channel_thumbnail']);
						$subvidArr[]=$temp;
						}
					}
					$catArr['related']=$subvidArr;								 
	  				array_push($jsonObj,$catArr);
	  
			}

		$view_qry=mysqli_query($mysqli,"UPDATE tbl_video SET total_views = total_views + 1 WHERE id = '".$_GET['get_single_video_id']."'");
	
				 
				
		$set['LIVETV'] = $jsonObj;
 
  		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else if(isset($_GET['get_search_video']))
  {	
  		$jsonObj= array();	

		$query="SELECT * FROM tbl_video
		LEFT JOIN tbl_category ON tbl_video.cat_id= tbl_category.cid 
		WHERE tbl_video.status=1 AND channel_title like '%".$_GET['get_search_video']."%' ";
		$sql = mysqli_query($mysqli,$query);
		
		if(mysqli_num_rows($sql)>0){

				while($data = mysqli_fetch_assoc($sql))
				{
					$row['id'] = $data['id'];
					$row['cat_id'] = $data['cat_id'];
					$row['channel_title'] = $data['channel_title'];
					$row['channel_url'] = $data['channel_url'];
					$row['channel_url_ios'] = $data['channel_url_ios'];
					$row['channel_thumbnail'] = $file_path.'images/'.$data['channel_thumbnail'];
					$row['channel_desc'] = $data['channel_desc'];

					$row['rate_avg'] = $data['rate_avg'];

					$row['cid'] = $data['cid'];
					$row['category_name'] = $data['category_name'];
					$row['category_image'] = $file_path.'images/'.$data['category_image'];
					$row['category_image_thumb'] = $file_path.'images/thumbs/'.$data['category_image'];
					$row['cat_type'] = 'get_single_video_id'; 
					 

					array_push($jsonObj,$row);
				
				}

				$set['LIVETV'] = $jsonObj;
				 
		}
		else
		{
			    $set['LIVETV'][]=array('msg' => 'No Channel Found! Try Different Keyword','Success'=>'0');
 
		}

		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
  else
  {
  	$jsonObj= array();	

		$query="SELECT * FROM tbl_settings WHERE id='1'";
		$sql = mysqli_query($mysqli,$query)or die(mysqli_error());


		while($data = mysqli_fetch_assoc($sql))
		{
			 
			$row['app_name'] = $data['app_name'];
			$row['app_logo'] = $data['app_logo'];
			$row['app_version'] = $data['app_version'];
			$row['app_author'] = $data['app_author'];
			$row['app_contact'] = $data['app_contact'];
			$row['app_email'] = $data['app_email'];
			$row['app_website'] = $data['app_website'];
			$row['app_description'] = $data['app_description'];
			$row['app_developed_by'] = $data['app_developed_by'];

			$row['app_privacy_policy'] = stripslashes($data['app_privacy_policy']);
 
			$row['publisher_id'] = $data['publisher_id'];
			$row['interstital_ad'] = $data['interstital_ad'];
			$row['interstital_ad_id'] = $data['interstital_ad_id'];
			$row['interstital_ad_click'] = $data['interstital_ad_click'];
 			$row['banner_ad'] = $data['banner_ad'];
 			$row['banner_ad_id'] = $data['banner_ad_id'];

 			$row['publisher_id_ios'] = $data['publisher_id_ios'];
 			$row['app_id_ios'] = $data['app_id_ios'];
			$row['interstital_ad_ios'] = $data['interstital_ad_ios'];
			$row['interstital_ad_id_ios'] = $data['interstital_ad_id_ios'];
			$row['interstital_ad_click_ios'] = $data['interstital_ad_click_ios'];
 			$row['banner_ad_ios'] = $data['banner_ad_ios'];
 			$row['banner_ad_id_ios'] = $data['banner_ad_id_ios'];

			array_push($jsonObj,$row);
		
		}
 
		$set['LIVETV'] = $jsonObj;
		
		header( 'Content-Type: application/json; charset=utf-8' );
		echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
  }
 }  