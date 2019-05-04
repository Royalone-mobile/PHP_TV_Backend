<?php 
  include("includes/header.php");
	require("includes/function.php");
	require("language/language.php");
	
	require __DIR__ . '/vendor/autoload.php' ;

  use Kreait\Firebase\Factory ;
  use Kreait\Firebase\ServiceAccount ;
  $serviceAccount = ServiceAccount::fromJsonFile('./symmetric-sonar-225003-firebase-adminsdk-4kmcw-a6718070bb.json');
  $firebase = ( new Factory )
      -> withServiceAccount ( $serviceAccount )
      ->withDatabaseUri('https://symmetric-sonar-225003.firebaseio.com/')
      -> create ();
  $database = $firebase->getDatabase();
  $serverURI = $database->getReference('serverURI');
  $AdPlatform = $database->getReference('switchAdPlatform');

if(isset($_POST['serverURI']))
{
  $value1 = $serverURI->set($_POST['serverURI']);
  $value1 = $serverURI->getValue();
}else{
  $value1 = $serverURI->getValue();
}

if(isset($_POST['AdPlatform']))
{
  $value2 = $AdPlatform->set($_POST['AdPlatform']);
  $value2 = $AdPlatform->getValue();
}else{
  $value2 = $AdPlatform->getValue();
}
?>
  
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="page_title_block">
            <div class="col-md-5 col-xs-12">
               <div class="page_title">ADS SETTING</div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row mrg-top">
            <div class="col-md-12">
               
              <div class="col-md-12 col-sm-12">
                <?php if(isset($_SESSION['msg'])){?> 
               	 <div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                	<?php echo $client_lang[$_SESSION['msg']] ; ?></a> </div>
                <?php unset($_SESSION['msg']);}?>	
              </div>
            </div>
          </div>
          <div class="card-body mrg_bottom">
            <form class="form form-horizontal" action="" method="post"  enctype="multipart/form-data" onsubmit="return editValidation(this);">
            	<input  type="hidden" name="channel_id" value="<?php echo $_GET['channel_id'];?>" />


              <div class="section">
                <div class="section-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Ads ServerURI is:-</label>
                    <div class="col-md-6">
                      <input type="text" name="serverURI" id="serverURI" value="<?php echo $value1;?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="section">
                <div class="section-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">AdPlatform Num is:-</label>
                    <div class="col-md-6">
                      <input type="text" name="AdPlatform" id="AdPlatform" value="<?php echo $value2;?>" class="form-control">
                      <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>           
        
<?php include("includes/footer.php");?>       
