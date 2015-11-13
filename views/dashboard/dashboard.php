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
		
		<script src="<?php echo $views_dash; ?>js/function.js"></script>
		
		<script src="<?php echo $views_dash; ?>js/bootstrap.min.js"></script>		
		
		
		<script src="<?php echo $views_dash; ?>js/SimpleAjaxUploader.min.js"></script>
		<script src="<?php echo $views_dash; ?>js/upload.js"></script>								
		
		
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
  <h2>NaSPI <small>calcolo importo</small></h2>
</div>  
  
  <!-- upper section -->
  <div class="row">
	<div class="col-sm-3">

<div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            
            <h4>Anno di competenza</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical">
            <div class="control-group">
              
              <div class="controls">
                <select class="form-control" id="selectcamp">
                <option value="2015">2015</option>
						<?php
							//foreach ($_SESSION['campagne'] as $row) {
							//echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';    
							//}         
						?>        
                
                </select>
              </div>

            </div>    
          </form>


          
        </div><!--/panel content-->
      </div><!--/panel-->
      
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            
            <h4>Altro</h4>
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
   

      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
	   <div class="row">
            <!-- center left-->	
            
         	<div class="col-md-12">
<form class="form form-horizontal" id="formtabanni">
      <table class="table table-striped" id="datatable">

		  <thead>
          <tr><th>Anno</th><th>Tipo contributo</th><th>Diritto</th><th>Misura</th><th>Retribuzione</th><th>Settimane utilizzate</th></tr>
        </thead>
        <tbody>

			<tr><td>2015</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir0" name="ftdir0" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis0" name="fmis0" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret0" name="fret0" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu0" name="fsu2015" size="2"></div></td></tr>
    		<tr><td>2014</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir1" name="ftdir1" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis1" name="fmis1" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret1" name="fret1" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu1" name="fsu2014" size="2"></div></td></tr>
    		<tr><td>2013</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir2" name="ftdir2" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis2" name="fmis2" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret2" name="fret2" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu2" name="fsu2013" size="2"></div></td></tr>
    		<tr><td>2012</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir3" name="ftdir3" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis3" name="fmis3" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret3" name="fret3" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu3" name="fsu2012" size="2"></div></td></tr>
    		<tr><td>2011</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir4" name="ftdir4" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis4" name="fmis4" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret4" name="fret4" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu4" name="fsu2011" size="2"></div></td></tr>
    		<tr><td>2010</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir5" name="ftdir5" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis5" name="fmis5" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret5" name="fret5" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu5" name="fsu2010" size="2"></div></td></tr>
    		<tr><td>2009</td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" placeholder="Contributo"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftdir6" name="ftdir6" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="fmis6" name="fmis6" size="2" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fret6" name="fret6" size="7" value="0"></div></td><td><div class="controls"><input type="text" class="form-control" id="fsu6" name="fsu2009" size="2"></div></td></tr>

    		<tr><td></td><td align="right" valign="bottom">TOTALI</td><td><div class="controls"><input type="text" class="form-control" id="ftotdir" name="ftotdir" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftotmis" name="ftotmis" size="2" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftotretr" name="ftotretr" size="7" readonly="readonly"></div></td><td><div class="controls"><input type="text" class="form-control" id="ftotsu" name="ftotsu" size="2" readonly="readonly"></div></td></tr>
    		


			</tbody>


      </table>            	

 	
 	      <hr>
 	      
      <h3>Calcolo NaSPI</h3>   	

      <table class="table table-striped" id="datatable">

		  <thead>
          <tr><th>Totale retribuzione</th><th>Retribuzione settimanale</th><th>Retribuzione mensile</th><th>Diff tra mens e max mens naspi</th><th>Quote di calcolo al 25% e 75%</th><th>Importo giornaliero</th></tr>
        </thead>
        <tbody>

			<tr><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readnly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td></tr>
			 		


			</tbody>


      </table>            	

 	      <hr>
 	      
      <h3>Durata NaSPI</h3>   	

      <table class="table table-striped" id="datatable">

		  <thead>
          <tr><th>Totale settimane per diritto</th><th>Settimane utilizzate</th><th>Settimane utili (detratte quelle utilizzate)</th><th>Settimane indennizabili</th><th>GG indennizzabili</th></tr>
        </thead>
        <tbody>

			<tr><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readonly"></td><td><div class="controls"><input type="text" class="form-control" id="fc" name="fc" readonly="readnly"></td></tr>
			  		


			</tbody>


      </table>            	
			                  
</form>              
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