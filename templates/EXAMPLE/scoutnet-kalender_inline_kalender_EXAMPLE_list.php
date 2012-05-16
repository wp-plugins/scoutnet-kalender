<?php
/*
	Scoutnet Kalender Template: INLINE (default)
	
	Dir stehen hier alle Inhalte des Kalenders in einem Array zur Verfügung.
	Z.B.:
	    	<?php echo date('d. m. Y', $event->Start); ?>
		<?php echo $event->Title; ?>
		<?php echo $event->Author->get_full_name(); ?>
		<?php var_dump($event); ?>

	Die Einbindung über den Shortcode [snk] ist mit den folgenden Parametern möglich:
		- elementcount		Anzahl auszulesender Elemente
		- externalTemplateName	Name des externen Templates (wie im Widget)

	z.B. [snk elementcount=5 externalTemplateName=MEINNAME]
*/

// deutsch, deutscher, am deutschesten
setlocale (LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

foreach($events as $event) { /* @var $event SN_Model_Event */
?>
	<div>
		<div class="date-container">
			<span class="day"><?php echo date('d', $event->Start); ?></span>
			<span class="month"><?php echo htmlentities(strftime('%b', $event->Start)); ?></span>
		</div>	
		<div class="info-container">	
			<?php // Titel mit Link (wenn nicht leer)
			if (trim($event->URL)=="") {
				echo "<h3>".$event->Title."</h3>";
				}
			else 	{
				echo "<h3><a href=".$event->URL.">".$event->Title."</a></h3>";
				} ?>
	
			<?php // Beschreibung
			if (trim($event->Description)!="") { echo "<p>" . $event->Description . "</p>"; } ?>
	
			<small>
				<?php // Ort mit PLZ ausgeben
				if (trim($event->Location)!="") {
					echo "Ort: ";
					if (trim($event->ZIP)!="") {echo $event->ZIP . " ";}
					echo $event->Location;
					echo "<br />";
				} ?>
				Start: <?php echo date('G:i', $event->Start); ?> Uhr<br />
				<?php if (trim($event->URL)!="") { echo "Link: <a href=".$event->URL.">".$event->URL."</a><br />"; } ?>
				Autor: <?php echo $event->Author->get_full_name(); ?> (g&auml;ndert am <?php echo date('d.m.Y', $event->Last_Modified_At);?>)
			</small>	
		</div>
	</div>
	<br style="clear: both;" />
	<br /><br />
<?php } ?>