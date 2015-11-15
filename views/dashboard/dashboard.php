<!DOCTYPE html>
<html lang="it">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $app_nome; ?> - Dashboard</title>
		<meta name="generator" content="Bluefish 2.2.5" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" type="image/png" href="<?php echo $app_icon; ?>">
		<link href="<?php echo $views_dash; ?>css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		 <link href="<?php echo $views_dash; ?>css/styles.css" rel="stylesheet">

		<script src="<?php echo $views_dash; ?>js/jquery.min.js"></script>
		
		<script src="<?php echo $views_dash; ?>js/bootstrap.min.js"></script>		
		
		<script src="<?php echo $views_dash; ?>js/SimpleAjaxUploader.min.js"></script>
		<script src="<?php echo $views_dash; ?>js/upload.js"></script>

		<script src="<?php echo $views_dash; ?>js/function.js"></script>												
		
		
	</head>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo $app_icon; ?>" width="32" height="32" alt="" border="0" /> <?php echo $app_nome; ?></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['user_name']; ?> <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
           <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 0) { ?>  
            <li><a href="<?php echo $dir_base; ?>?c=users"><i class="glyphicon glyphicon-cog"></i> Utenti</a></li>
            <?php } ?>
            <li><a href="<?php echo $dir_base; ?>?logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
          </ul>
        </li>
      </ul>

    
      
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
  
<div class="page-header">
  <h2>Dashboard <small>principale</small></h2>
</div>  
  
  <!-- upper section -->
  <div class="row">
	<div class="col-sm-3">

<div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            
            <h4>Campagne</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical">
            <div class="control-group">
              
              <div class="controls">
                <select class="form-control" id="selectcamp">
						<?php
							foreach ($_SESSION['campagne'] as $row) {
							echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';    
							}         
						?>        
                
                </select>
              </div>

            </div>    
          </form>

 <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 0) { ?>           
              <div class="btn-group">
  <button type="button" class="btn btn-primary btn-xs">Azioni</button>
  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#" id="modcampagna">Modifica campagna</a></li>
    <li><a href="#" id="nuovacampagna">Nuova campagna</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#" id="elimcampagna">Elimina campagna</a></li>    
  </ul>
</div>


<?php } ?>
          
        </div><!--/panel content-->
      </div><!--/panel-->
      
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            
            <h4>Sedi</h4>
          </div>
        </div>
        <div class="panel-body">
          
		<ul class="nav nav-stacked">      
	   	<?php

			foreach ($_SESSION[sedi] as $row) {
			//foreach ($row as $key => $value) {
    		//echo "Key: $key; Value: $value<br />\n";
   		// echo '<li><a href="javascript:;" name="itemsede" id="'.$row['cod'].'"><i class="glyphicon glyphicon-chevron-right"></i> '.$row['nome'].'</a></li>';
    		echo '<li><a href="javascript:;" name="itemsede" id="'.$row['cod'].'">'.$row['nome'].'</a></li>';
			//}	
			}     
	     
	   		//  echo print_r($_SESSION[sedi]);
	   	?>    
	   </ul>
          
        </div><!--/panel content-->
      </div><!--/panel-->
     
      <hr>   
		<div class="row" >
            <div class="col-sm-9">
              <button id="uploadBtn" class="btn btn-large btn-primary">Carica file dati CSV</button>
            </div>
            <div class="col-sm-12">
          <div id="progressOuter" class="progress progress-striped active" style="display:none;">
            <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            </div>
          </div>
            </div>
          </div>  
          <div class="row" style="padding-top:10px;">
            <div class="col-xs-10">
              <div id="msgBox">
              </div>
            </div>
          </div>      
        
     
     
      <hr>
   

      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
       <h3 id="datatitle"><i class="glyphicon glyphicon-th-list" ></i> Dati </h3>  
       <h6 id="datacodsede"></h6>   
<hr>     
	   <div class="row">
            <!-- center left-->	
            
         	<div class="col-md-12">


          <div id="progressOuterT" class="progress progress-striped active" style="display:none;">
            <div id="progressBarT" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            </div>
          </div>
          <div id="msgBox">
              </div>
          
      <table class="table table-striped" >

		  <thead>
          <tr><th>Nome</th><th>Cognome</th><th>Codice fiscale</th><th>campo</th><th><button type="button" name="btnUploadSinglePDF" id="btnUploadSinglePDF" class="btn btn-xs btn-primary" aria-label="Left Align">
  Carica file PDF
</button> </th></tr>
        </thead>
        <tbody id="datatable">
        
        
 		  </tbody>      
      

      </table>            	

         	
         	
			  <!-- <div class="well">Inbox Messages <span class="badge pull-right">3</span></div> 
              
              <hr>
              -->
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Situazione</h4></div>
                  <div class="panel-body">
                    
                    <small>Completi</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                      </div>
                    </div>
                    <small>In attesa</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <small>Con problemi</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->                     
              
          	</div><!--/col-->
         
            <!--center-right-->
        	
     
       </div><!--/row-->
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  <div class="row">
   
    <hr>
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->


<footer class="text-center"><?php echo $app_nome; ?> - <a href="#"><strong>Rino Russo</strong></a></footer>

<div class="modal" id="addmodcampagna">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="boxtitlecamp">Campagna</h4>
      </div>
      <div class="modal-body">
       
			<form class="form form-vertical" id="formaddmodcampagna">


				<div class="control-group">
              <label>Nome</label>
              <div class="controls">
                <input type="hidden" class="form-control" id="fcid" name="fcid" >
                <input type="text" class="form-control" id="fcnome" name="fcnome" placeholder="Nome">
              </div>
            </div>      
            <div class="control-group">
              <label>Campi CSV (separati da ,)</label>
              <div class="controls">
                <textarea class="form-control" id="fccampi" name="fccampi" ></textarea>
              </div>
            </div> 
            <div class="control-group">
              <label>Stato</label>
              <div class="controls">
                <select class="form-control" id="fcstato" name="fcstato"><option value="0" <?php if($_SESSION['campagna'][0]["stato"]==0) echo 'selected'; ?> >Aperta</option><option value="1" <?php if($_SESSION['campagna'][0]["stato"]==1) echo 'selected'; ?> >Chiusa</option></select>
              </div>
            </div> 
 
            
          </form>       
       
      </div>
      <div class="modal-footer">
        <a href="#" class="btn" id="btnAnnulla">Annulla</a>
        <a href="#" class="btn btn-primary"id="btnSalva" >Salva</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->


		
	</body>
</html>