<?php require('../qcubed.inc.php');

?>
<?php
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<style type="text/css">
.tp-mrgn {
	margin-top: 100px !important;
}
.frm-container {
	background:#FFF;
	padding-top:20px;
	padding-bottom:20px;
	border-radius: 0px 5px 5px;
	display:none;
}


.bnr-gradiant{ 
background: -moz-linear-gradient(270deg, rgba(2,151,254,1) 0%, rgba(134,187,227,1) 100%); /* ff3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(2,151,254,1)), color-stop(100%, rgba(134,187,227,1))); /* safari4+,chrome */
background: -webkit-linear-gradient(270deg, rgba(2,151,254,1) 0%, rgba(134,187,227,1) 100%); /* safari5.1+,chrome10+ */
background: -o-linear-gradient(270deg, rgba(2,151,254,1) 0%, rgba(134,187,227,1) 100%); /* opera 11.10+ */
background: -ms-linear-gradient(270deg, rgba(2,151,254,1) 0%, rgba(134,187,227,1) 100%); /* ie10+ */
background: linear-gradient(180deg, rgba(2,151,254,1) 0%, rgba(134,187,227,1) 100%); /* w3c */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0297fe', endColorstr='#86bbe3',GradientType=0 ); /* ie6-9 */
	
	}

.bdr {
	border:1px solid red
}

select{ font-size:12px}
select option{ font-size:12px}

.border-right-dash{ border-right:1px dashed #FFF;}

.dropdown-menu{}
.dropdown-menu ul li a:hover{ background-color:#036;}

</style>

  <div class="">
    <div class="row bnr-gradiant" style="padding-bottom:100px;">
      <div class="" style="margin-top:50px;">
       
         <div class="row">
             <div class="col-md-12 text-center"style="text-align:center;"><img src="comingsoon.png" width="700" height="150" style="margin:50px auto 20px auto"></div>
         </div>
         <!-- Top form -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h1 style="color:#FFF; text-align:center"></h1><br>

              <p style="color:#FFF; font-size:18px; text-align:center">We are building something very cool. Stay tuned and be patient. Your patience will be well paid.</p>
            </div>
           
          </div>
         <!-- Top form End -->
       
          
        
      </div>
      
      
    </div>
     <?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
