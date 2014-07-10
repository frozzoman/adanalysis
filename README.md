Projekt um Werbung mit adblockplus zu analysieren

Damit die Software funktioniert muss XAMPP installiert sein.
Es muss eine Datenbank mit den Namen „adblockplus“ geben.
Diese Datenbank muss eine Tabelle mit den Namen „adblock_data“ haben.
Die Tabelle muss drei Felder haben: 1. Datestamp 2. String 3. String
In /opt/htdocs muss es ein Verzeichnis mit dem Namen „adblock“.
Darin muss die Datei „adblock.php“ sein. Kopiere dafür einfach das nebenstehende Verzeichnis auf die htdocs.
Die Eingangsdaten sind in dieser Datei beinhaltet (Password, Tabellennamen,...). Diese kann man verändern.

Installation:
1. Öffne Konsole
2. Navigiere zum Verzeichnis, wo sich die Addon-SDK befindet (cd /../addons)
3. Tippe: source bin/activate
4. Navigiere zum Verzeichnis wo der neue Quelltext vom neuen Adblock ist: (cd /../adblockanalyser)
5. Tippe: python build.py autoinstall 8888

Program starten:
1. Initialisiere XAMPP
	1. Öffne Konsole
	2. Tippe: sudo /opt/lampp/lampp start
	3. Tippe Passwort
2. Öffne Firefox
3. Sei sicher, dass Adblockplus aktiviert ist

Daten sehen:
1. Tippe in Firefox: localhost/phpmyadmin
2. Klicke auf „adblockplus“ und dann auf „adblockdata“
3. Um die Daten zu exportieren:
	1. Klicke auf „Mehr“
	2. Klicke auf „Export“
	3. Wähle das gewünschte Format





