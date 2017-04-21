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
    
        

    
<?php
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login');
}
?>	
