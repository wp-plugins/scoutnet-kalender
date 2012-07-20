=== Scoutnet Kalender ===
Contributors: muetze, derweed, lordq
Tags: Scoutnet, Scoutnetkalender, Scoutnet-Kalender, Scoutnet Kalender, Scoutnetwidget
Requires at least: 3.0
Tested up to: 3.3
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Zeigt Termine und Termindetails aus einem Scoutnet-Kalender in einer Seite (via Shortcode) oder in einem eigenen Wordpress-Widget an.

== Description ==

Holt dir Termine und deren Details aus dem Scoutnet-Kalender in dein Wordpress, als eigene Seite oder in ein Widget. Zeigt
auch mehrere Kalender gleichzeitig an und kann einfach angepasst werden. Die Aktualisierung der Widget-Termine aus dem Scoutnet
geschieht via AJAX, damit die Ausgabe der Webseite nicht durch den zusaetzlichen Request verzoegert wird.


== Installation ==

1. .zip file herunterladen und auspacken
2. Den Ordner "scoutnet-kalender" in das Pluginverzeichnis (/wp-content/plugins/) hochladen
3. Das Plugin unter Plugins -> "Scoutnet Kalender" aktivieren
4. Das Widget kannst du dann sofort unter Design->Widgets in dein Theme einbinden. Fuer Seiten und Artikel gibt es dann den Shortcode.

Unter den Einstellungen kannst du die Standartwerte vorgeben und die Shortcodes nachschlagen.

== Frequently Asked Questions ==

= Wie nutze ich ein eigenes Template fuer eigenes HTML/CSS? =
Kein Problem, das geht ganz einfach. Diese Anleitung gilt fuer die Inline-Anzeige und das Widget - nimm einfach die jeweils wie gewuenscht benannten Dateien.

1. Kopiere die anzupassende Datei "scoutnet-kalender_[inline oder widget]_kalender_EXAMPLE_list.php" von /templates in dein Theme-Verzeichnis (wp-content/themes/<deintheme>).
2. Benenne diese dann dort um, so wie du dein Template nennen moechtest. Z.B. "scoutnet-kalender_inline_kalender_MEINNAME_list.php"
3. Trage diesen Namen (achte auf Klein-Grosschreibung) in das Widget bzw. den Shortcode ein.

Du kannst diese Dateien nun in deinem Theme-Ordner bearbeiten, ohne das sie bei einem Update des Plugins ueberschrieben werden.

= Welche Kalender-ID ist welche? =
Dazu findest du mehr Informationen unter: http://www.scoutnet.de/technik/kalender/kurzanleitung.html

= Kann ich mir das Plugin Live ansehen? =
Zum Beispiel hier: http://www.dpsg-paderborn.derweed

== Screenshots ==

1. Die Widget-Konfiguration
2. Das Widget (mit dem EXAMPLE-Template)

== Changelog ==

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