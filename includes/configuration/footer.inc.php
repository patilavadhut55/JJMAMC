<?php
// This example footer.inc.php is intended to be modfied for your application.
?>
</div>
</div>
</div>
<!--</section>-->
<div style="clear: both; height: 25px;"></div>
<!--<footer>-->
<nav class="navbar navbar-inverse navbar-fixed-bottom"  role="navigation"  
    <?php if(isset($_SESSION['login'])){ ?>style="border-top: none;  background-color: #205081 !important; height: 20px !important;"<?php } ?>>
    <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a style="padding: 5px;" href="" target="_blank">Prowered By : Praxis Infotech Solutions <i class="fa fa-info-circle fa-fw"></i></a></li>                
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div id="snackbar">Saved Successfully..</div>
<!--</footer>-->
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.js"></script>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/bootstrap.min.js"></script>
<script src="<?php _p(__APP_JS_ASSETS__) ; ?>/bootstrap-toggle.min.js"></script>
<!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    $(document).ready(function(){
      // add 30 more rows to the table
      var row = $('table#mytable > tbody > tr:first');
      for (i=0; i<30; i++) {
        $('table#mytable > tbody').append(row.clone());
      }

      // make the header fixed on scroll
      $('.table-fixed-header').fixedHeader();
    });
    </script>
    <script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</body>
</html>