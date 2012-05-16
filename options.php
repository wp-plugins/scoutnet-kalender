<div class="wrap">
	<form method="post" action="options.php">
	<h2>Scoutnet Kalender</h2>
	<p>Dieses Plugin zeigt Termine und Details aus einem <a href="http://www.scoutnet.de/technik/kalender/">Scoutnet-Kalender</a> als eigene Seite oder in einem Widget an. Welchen Kalender du anzeigen möchtest, bestimmst du mit der <a href="http://www.scoutnet.de/technik/kalender/kurzanleitung.html">Scoutnet-ID</a>.</p>

	<?php settings_fields('snk-opt'); ?>
	<table class="form-table">
	    <tr valign="top">
	        <th scope="row">Scoutnet-ID</th>
	        <td><input type="text" name="scoutnet_kalender_ssid" value="<?php echo get_option('scoutnet_kalender_ssid'); ?>" />
	            <span class="description">
	            	Diese ID wird dann verwendet, wenn du in deinen Seiten oder dem Widget <u>keine</u> ID angibst.
	            </span>
	        </td>
	    </tr>
	</table>
	<p>Du kannst auch mehrere (und verschiedene) Kalender gleichzeitig nutzen. Gib der jeweiligen Seite oder dem Widget einfach die ID die du anzeigen möchtest mit.</p>
	
	<h2>In Seiten einbinden</h2>
	<p>Du kannst deine Terminübersicht in einer Seite oder einem Artikel anzeigen. verwende dazu einfach folgenden Shortcode:</p>
	<code>[snk elementcount="5" externalTemplateName="NAME" ssid="3" /]</code>
	<blockquote><ul>
		<li><code>elementcount</code> Gibt dabei die Anzahl der angezeigten Elemente an; sinnvoll sind meist Werte um 30</li>
		<li><code>externaltemplatename</code> Gibt de Namen des zu verwendenden Templates an. Mehr zu den Templates findest du in der readme.txt</li>
		<li><code>ssid</code> Die <a href="http://www.scoutnet.de/technik/kalender/include/einbindung_homepage.html">ID</a> des anzuzeigenden Kalenders</li>
	</ul></blockquote>
	
	<p class="submit">
	    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	</form>
</div>