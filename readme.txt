=== Scoutnet Kalender ===
Contributors: muetze, derweed, lordq, okay75
Tags: Scoutnet, Scoutnetkalender, Scoutnet-Kalender, Scoutnet Kalender, Scoutnetwidget
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 0.2.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Zeigt Termine und Termindetails aus einem Scoutnet-Kalender in einer Seite (via Shortcode) oder in einem eigenen Wordpress-Widget an.

== Description ==

Holt dir Termine und deren Details aus dem Scoutnet-Kalender in dein Wordpress - als eigene Seite oder in ein Widget. Zeigt
auch mehrere Kalender gleichzeitig an und kann sehr einfach angepasst werden. Die Aktualisierung der Widget-Termine aus dem Scoutnet
geschieht via AJAX, damit die Ausgabe der Webseite nicht durch die (zusaetzlichen) Anfragen verzoegert wird. Moeglich ist auch die Anzeige 
von Terminen aus mehreren Kalendern.


== Installation ==

1. .zip file herunterladen und auspacken
2. Den Ordner "scoutnet-kalender" in das Pluginverzeichnis (/wp-content/plugins/) hochladen
3. Das Plugin unter Plugins -> "Scoutnet Kalender" aktivieren
4. Das Widget kannst du dann sofort unter Design->Widgets in dein Theme einbinden. Fuer Seiten und Artikel gibt es einen Shortcode.

Unter den 'Einstellungen' kannst du die Standartwerte vorgeben und die Shortcodes nachschlagen.

== Frequently Asked Questions ==

= Wie nutze ich ein eigenes Template fuer eigenes HTML/CSS? =
Kein Problem, das geht ganz einfach. Diese Anleitung gilt fuer die Inline-Anzeige und das Widget - nimm einfach die jeweils wie gewuenscht benannten Dateien.

1. Kopiere die anzupassende Datei "scoutnet-kalender_[inline oder widget]_kalender_EXAMPLE_list.php" von /templates/ in dein Theme-Verzeichnis (wp-content/themes/<deintheme>).
2. Benenne diese um, wie das Template heissen soll. Z.b. "scoutnet-kalender_inline_kalender_MEINNAME_list.php"
3. Trage diesen Namen (achte auf Klein-Grosschreibung) in das Widget oder deinen Shortcode ein.
4. Fuege die CSS-Formatierung aus der EXAMPLE_style.css in deine style.css in deinem Theme-Ordner ein (oder Formatiere deine Ausgabe selbst)

Du kannst diese Dateien nun in deinem Theme-Ordner bearbeiten, ohne das sie bei einem Update des Plugins ueberschrieben werden.

= Beispiele fuer eigene Templates =
Die findest du in /templates/EXAMPLE. Kopiere diese in dein Theme-Verzeichnis und uebernimm den Inhalt der EXAMPLE_style.css in deine stlye.css.

= Welche Kalender-ID ist welche? =
Dazu findest du mehr Informationen unter: http://www.scoutnet.de/technik/kalender/kurzanleitung.html

= Kann ich mir das Plugin Live ansehen? =
Aber sicher, zum Beispiel hier: http://www.dpsg-paderborn.de

== Screenshots ==

1. Die Widget-Konfiguration
2. Das Widget (mit dem EXAMPLE-Template)

== Changelog ==

= 0.2.1 =
- Verwendung von "get_stylesheet_directory()" anstelle von "TEMPLATEPATH" fpr die Unterstuetzung von Child-Themes (Danke Tobi)
- Anpassung der Datenuebernahme für mehrere Kalender (z.B. Bezirkskalender und alle Stammeskalender) (Danke Tobi)

= 0.2.0 =
- Cleanup (doppelte Dateien entfernt)
- Template(s) deutlich verbessert (thx Fl!P, phil)
- URL-Verkuerzung in Inline-Template hinzugefuegt

= 0.1.9 =
- Fix: Termine im Widget sind um eine oder Zwei Stunden verschoben.

= 0.1.8 =
- CURL-Fehler bei safe_mode Konfiguration behoben

= 0.1.7b =
- Readme Markup fixes. Daemliche Umlaute.

= 0.1.7 =
- "Offizielle" Release
- Template-System
- AJAX aktualisierung
- Bugfixes
- Template-Bugfixes

= 0.0.1 =
* Code von muetze bekommen :)