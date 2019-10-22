<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Categoria:'; wp_title('');
			} elseif (is_search()) {
			echo 'Resultado da Busca';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Arquivos:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?>
		</title>

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

	</head>

	<body>
<map name="Map" id="Map">
	<area shape="rect" coords="8,57,105,82" href="index.php" title="Página Inicial"/>
	<area shape="rect" coords="6,112,104,138" href="?page_id=4" alt="Informações sobre o evento" title="Veja Informações sobre o evento"/>
	<area shape="rect" coords="6,160,105,188" href="?page_id=12" title="Conheça a história sobre o evento"/>
	<area shape="rect" coords="7,209,106,237" href="?page_id=18"  title="Entre em contato"/>
</map>
<map name="Map2" id="Map2">
	<area shape="poly" coords="3,87,164,73,177,191,16,209" href="imagens/encontro_2007_078.jpg" target="_blank" alt="Ampliar foto" />
	<area shape="rect" coords="212,6,374,124" href="imagens/encontro_2007_094.jpg" target="_blank" alt="Ampliar foto" />
	<area shape="poly" coords="411,100,569,74,588,191,428,219" href="imagens/encontro_2007_143.jpg" target="_blank" alt="Ampliar foto" />
	<area shape="poly" coords="226,171,385,191,376,310,214,290" href="imagens/encontro_2007_229.jpg" target="_blank" alt="Ampliar foto" />
</map>
	<div align="center">
		<table width="922" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
		<tbody>
			<tr>
				<td height="95" valign="top" bgcolor="#ffffff" colspan="3">
					<div align="left">
						<img height="95" width="922" src="wp-content/themes/egpb/style/imagens/top_bar.jpg"/>
					</div>
				</td>
			</tr>
			<tr>

    <td width="110" rowspan="2" valign="top" background="wp-content/themes/egpb/style/imagens/lateral_bg.jpg">
		<img src="wp-content/themes/egpb/style/imagens/menu.jpg" width="109" height="348" border="0" usemap="#Map" />
	</td>