<?php
/*
	Scoutnet Kalender Template: WIDGET-EVENTS (default)
	
	Dir stehen hier alle Inhalte des Kalenders in einem Array zur Verfügung.
	Z.B.:
	    	<?php echo date('d. m. Y', $event->Start); ?>
		<?php echo $event->Title; ?>
		<?php echo $event->Author->get_full_name(); ?>
		<?php var_dump($event); ?>
*/

// Deutsche Zeit
date_default_timezone_set('Europe/Berlin');

?>
<div>
	<strong><?php echo date('d.n.Y', $event->Start); ?> <?php echo date('G:i', $event->Start); ?> <?php echo $event->Location; ?></strong><br />
	<?php
	if (trim($event->URL)=="") {
		echo $event->Title;
		}
	else { ?>
		<a href="<?php echo $event->URL; ?>"><?php echo $event->Title; ?></a>
	<?php } ?>
</div>

<br />