<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>  
<!DOCTYPE html>
<html>
<head>
	<title>Polo 360</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/pure/grids-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/pure/forms-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/pure/styles.css">
    <?php  Loader::element('header_required'); ?> 
</head>
<body>
<div class="pure-g">
	<div class="pure-u-1" id="header">
		<div class="pure-u-4-5" id="logo">
			<img src="<?php echo $this->getThemePath(); ?>/pure/img/logo.png">
            <div class="menu">
            <?php   
                $a = new Area('menu');  
                $a->display($c);  
            ?> 
            </div>
		</div>
	</div>