=== Scoutnet Kalender ===
Contributors: muetze, derweed, lordq, okay75
Tags: Scoutnet, Scoutnetkalender, Scoutnet-Kalender, Scoutnet Kalender, Scoutnetwidget
Requires at least: 3.0
Tested up to: 3.9
Stable tag: 0.2.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Zeigt Termine und Termindetails aus einem Scoutnet-Kalender in einer Seite (via Shortcode) oder in einem eigenen Wordpress-Widget an.

== Description ==

Das Scoutnet-Kalender Wordpress Plugin zeigt Termine und Details aus dem Scoutnet-Kalender direkt in Wordpress an. Keine iFrames, iCAL,
Konverteierung oder aehnliches notwendig. Dieses Plugin enthaelt Shortcodes fuer eigene Seiten und Beitraege und ein modernes Widget.
Einbindung mehrerer verschiedener Kalender moeglich, einfaches Template-System, gute Beispiele. Die Aktualisierung der Widget-Termine
geschieht asynchron, damit die Ausgabe der Webseite nicht verzoegert wird.


== Installation ==

1. .zip file herunterladen, auspacken
2. Den Ordner "scoutnet-kalender" mit allen Dateien in das Pluginverzeichnis (/wp-content/plugins/) hochladen
3. Das Plugin im Wordpress-Dashboard unter Plugins -> "Scoutnet Kalender" aktivieren
4. Das Widget kannst du dann sofort unter Design->Widgets in dein Theme einbinden.

Fuer Seiten und Artikel mit Terminen darauf gibt es einen Shortcode.

Unter den 'Einstellungen' kannst du die Standartwerte vorgeben und die Shortcodes nachschlagen.

== Frequently Asked Questions ==

= Wie nutze ich ein eigenes Template fuer eigenes HTML/CSS? =
Kein Problem, das geht ganz einfach. Diese Anleitung gilt fuer die Inline-Anzeige und das Widget - nimm einfach die jeweils wie gewuenscht benannten Dateien.

1. Kopiere dein Template "scoutnet-kalender_[inline oder widget]_kalender_EXAMPLE_list.php" von plugins/scoutnet-kalender/templates/ in dein Theme-Verzeichnis (wp-content/themes/<deintheme>).
2. Benenne das Template um, z.B. "scoutnet-kalender_inline_kalender_MEINNAME_list.php"
3. Trage DIESEN Namen (achte auf Klein-Grosschreibung) in das Widget oder deinen Shortcode ein
4. Fuege die CSS-Formatierung aus der EXAMPLE_style.css in deine style.css in deinem Theme-Ordner ein (oder formatiere deine Ausgabe selbst)

Du kannst diese Dateien nun in deinem Theme-Ordner bearbeiten, ohne das sie bei einem Update des Plugins ueberschrieben werden.

= Beispiele fuer eigene Templates =
Die findest du in /templates/EXAMPLE. Kopiere diese in dein Theme-Verzeichnis und uebernimm den Inhalt der EXAMPLE_style.css in deine stlye.css.

= Welche Kalender-ID ist welche? =
Dazu findest du mehr Informationen unter: http://www.scoutnet.de/technik/kalender/kurzanleitung.html

= Kann ich mir das Plugin Live ansehen? =
Aber sicher, zum Beispiel hier: http://www.dpsg-paderborn.de

= Kann ich Termine aus mehreren Kalendern anzeigen? =
Ja, kein Problem. Trage in deine Seite in den Shortcode die IDs getrennt durch Kommata ein.

= Das Widget funktioniert nicht, ich sehe nur den Ladehinweis! =
Schau nach, ob du ein Caching-Plugin im Einsatz hast das JS-Minify nutzt. Schalte die das minify/process fuer alle Seiten mit dem Widget aus.
Das 'process' Minify verschiebt das Javascript des Footers in den HEAD deines Dokumentes und macht damit die Funktion kaputt.


== Screenshots ==

1. Die Widget-Konfiguration
2. Das Widget (mit dem EXAMPLE-Template)

== Changelog ==

= 0.2.2 =
- Fix: Readme angepasst, neue Release korrekt getaggt
- Fix: Tippfehler ohne Ende korrigiert
- Fix: Anpassung Doku


= 0.2.1 =
- Fix: Verwendung von "get_stylesheet_directory()" anstelle von "TEMPLATEPATH" fpr die Unterstuetzung von Child-Themes (Danke Tobi)
- Feature: Anpassung der Datenuebernahme für mehrere Kalender (z.B. Bezirkskalender und alle Stammeskalender) (Danke Tobi)

= 0.2.0 =
- Fix: Cleanup (doppelte Dateien entfernt)
- Feature: Template(s) deutlich verbessert (thx Fl!P, phil)
- Feature: URL-Verkuerzung in Inline-Template hinzugefuegt

= 0.1.9 =
- Fix: Termine im Widget sind um eine oder Zwei Stunden verschoben.

= 0.1.8 =
- Fix: CURL-Fehler in safe_mode PHP-Konfigurationen behoben

= 0.1.7b =
- Fix: Readme Markup fixes. Daemliche Umlaute.

= 0.1.7 =
- Erste "offizielle" Release
- Templates hinzugefuegt
- AJAX aktualisierung gegen "Stotterpages" gebaut
- Bugfixes
- Template-Bugfixes

= 0.0.1 =
* Code von muetze bekommen :)