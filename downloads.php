<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

# Página no facebook
$fbPage = 'https://www.facebook.com/GriffonPVP/';

# Popup para curtir página do facebook deve aparecer de quantos em quantos dias?
$fbPopupDelay = ''; // ex: se setar '2', o popup aparecerá novamente 2 dias após a última vez que o usuário o visualizou

###########################################################

?>
<html>
<head>
	
	<!-- CSS - Início -->
	<link rel='stylesheet' type='text/css' href='estilos.css' media='all' />
	<!-- CSS - Fim -->
	
	<!-- Javascripts - Início -->
	<script src='js/jquery-1.12.0.min.js' type='text/javascript' charset='UTF-8'></script>
	<script src='js/jquery.cookie.js' type='text/javascript' charset='UTF-8'></script>
	<script type='text/javascript'>
		jQuery.noConflict(); jQuery(document).ready(function($){ if(jQuery.cookie('atualstudioPopup') != 'yes'){ $('#fanback').delay(100).fadeIn('medium'); $('#fanclose, #fan-exit').click(function(){ $('#fanback').stop().fadeOut('medium'); }); } jQuery.cookie('atualstudioPopup', 'yes', { path: '/', expires: <?php echo intval($fbPopupDelay); ?> }); });
	</script>
	<!-- Javascripts - Fim -->

</head>
<body>
	
	<!-- HTML - Início -->
	<div id='fanback'><div id='fan-exit'></div><div id='fanbox'><div id='fanclose'></div><iframe src='//www.facebook.com/plugins/likebox.php?href=<?php echo $fbPage; ?>&amp;width=402&amp;height=255&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23E2E2E2&amp;stream=false&amp;header=false&amp;appId=329902783740649' scrolling='no' frameborder='0' style='border: none; overflow: hidden; margin-top: -19px; width: 402px; height: 230px;margin-left: 8px;' allowTransparency='true'></iframe></div></div>
	<!-- HTML - Fim -->
	
</body>
</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Inicial</title>
<link href="cursor.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bg1.gif);
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFFFF;
}
.style2 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<br />
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><div align="center">
      <div align="center"><span class="style8"><font size="6"><strong>DOWNLOADS</strong></font></span><br />
          <br />
          <br />
          <img src="img/barra.png" alt="" width="419" height="29" /> </div>
      <p align="center">&nbsp;</p>
      <table width="350" border="1" align="center" cellpadding="10" bordercolor="#3D3D1F" class="gamefiles">
        <tr>
          <td bordercolor="#2C261D"><div align="center"><span class="style1">[
                Patch L2GRIFFON Updater ] <br />
            </span><span class="style4">Patch
            v1.0 ( Patch COMPLETO )</span></div>
          </td>
          <td width="45" bordercolor="#29241C"><a href="https://www.4shared.com/rar/lETxBmo-iq/Patch.html?" target="_blank"><img src="images/download.gif" alt="Download - Patch COMPLETO" width="39" height="42" border="0" id="Image96" tppabs="http://l2universal.ddns.com.br/images/download.gif" /></a></td>
        </tr>
      </table>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><div align="center">
          <br />
          <br />
      <p align="center">&nbsp;</p>
      <table width="350" border="1" align="center" cellpadding="10" bordercolor="#3D3D1F" class="gamefiles">
        <tr>
          <td bordercolor="#2C261D"><div align="center"><span class="style1">[
                Cliente Interlude ] <br />
            </span><span class="style4">Patch
            CT1.5 Completo</span></div>
          </td>
          <td width="45" bordercolor="#29241C"><a href="https://gameborder.net/file/lineage-ii-interlude-client" target="_blank"><img src="images/download.gif" alt="Download - Patch COMPLETO" width="39" height="42" border="0" id="Image96" tppabs="http://l2universal.ddns.com.br/images/download.gif" /></a></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
