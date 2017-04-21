<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "conn.php";
	$username=$_SESSION['username'];
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>(Sistem Informasi Nilai Sekolah)</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
        <!--  jquery core -->
        <script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
        
        <!--  checkbox styling script -->
        <script src="js/jquery/ui.core.js" type="text/javascript"></script>
        <script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function(){
            $('input').checkBox();
            $('#toggle-all').click(function(){
            $('#toggle-all').toggleClass('toggle-checked');
            $('#mainform input[type=checkbox]').checkBox('toggle');
            return false;
            });
        });
        </script>  
        
        <![if !IE 7]>
        
        <!--  styled select box script version 1 -->
        <script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect').selectbox({ inputClass: "selectbox_styled" });
        });
        </script>
         
        
        <![endif]>
        
        <!--  styled select box script version 2 --> 
        <script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
            $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
        });
        </script>
        
        <!--  styled select box script version 3 --> 
        <script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
        });
        
        
        <!-- Custom jquery scripts -->
        <script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
         
        <!-- Tooltips -->
        <script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            $('a.info-tooltip ').tooltip({
                track: true,
                delay: 0,
                fixPNG: true, 
                showURL: false,
                showBody: " - ",
                top: -35,
                left: 5
            });
        });
	
	<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $(document).pngFix( );
        });
        </script>
    </head>
    
    <body> 
    <!-- Start: page-top-outer -->
    <div id="page-top-outer">    
    
    <!-- Start: page-top -->
    <div id="page-top">
    
        <!-- start logo -->
        <div id="logo">
        <a href=""><img src="images/login/logo.png" width="300" height="40" alt="" /></a>
        </div>
        <!-- end logo -->
        
        <!--  start top-search -->
        <div id="top-search">
        </div>
        <!--  end top-search -->
        <div class="clear"></div>
    
    </div>
    <!-- End: page-top -->
    
    </div>
    <!-- End: page-top-outer -->
        
    <div class="clear">&nbsp;</div>
     
    <!--  start nav-outer-repeat................................................................................................. START -->
    <div class="nav-outer-repeat"> 
    <!--  start nav-outer -->
    <div class="nav-outer"> 
    
            <!-- start nav-right -->
            <div id="nav-right">
            
                <div class="nav-divider">&nbsp;</div>
                <div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
                <div class="nav-divider">&nbsp;</div>
                <a href="logout.php" id="logout" onclick="return confirm('Apakah Anda yakin?')"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
                <div class="clear">&nbsp;</div>
            
                <!--  start account-content -->	
                <div class="account-content">
                <div class="account-drop-inner">
                    <a href="" id="acc-settings">Settings</a>
                    <div class="clear">&nbsp;</div>
                    <div class="acc-line">&nbsp;</div>
                    <a href="" id="acc-inbox">Inbox</a>
                    <div class="clear">&nbsp;</div>
                </div>
                </div>
                <!--  end account-content -->
            
            </div>
            <!-- end nav-right -->
    
    
            <!--  start nav -->
            <div class="nav">
            <div class="table">

    		<?php 
			$domain=$_SESSION['domain'];
			
			if($domain=='admin'){
				include "menu-admin.php";
			}
			
			if($domain=='guru'){
				include "menu-guru.php";
			}
			
			if($domain=='siswa'){
				include "menu-siswa.php";
			}
			
			?>

            <div class="nav-divider">&nbsp;</div>
    
    
            <div class="clear"></div>
            </div>
            <div class="clear"></div>
            </div>
            <!--  start nav -->
    
    </div>
    <div class="clear"></div>
    <!--  start nav-outer -->
    </div>
    <!--  start nav-outer-repeat................................................... END -->
    
      <div class="clear"></div>
     
    <!-- start content-outer ........................................................................................................................START -->
    <div id="content-outer">
    <!-- start content -->
    <div id="content">
    
    	<?php include "content.php"; ?>
        
        <div class="clear">&nbsp;</div>
    
    </div>
    <!--  end content -->
    <div class="clear">&nbsp;</div>
    </div>
    <!--  end content-outer........................................................END -->
    
    <div class="clear">&nbsp;</div>
        
   
    </div>
    <!-- end footer -->
     
    </body>
    </html>
    
        

    
<?php
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login');
}
?>	
