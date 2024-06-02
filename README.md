# Parkhäuser in Zürich
Kurzbeschreibung des Projekts 

Wir haben eine Webseite programmiert, die Daten in einem halbstunden Takt übermittelt. Diese zeigt die verfügbaren Parkplätze und allgemein die Auslastung der Parkhäuser in Zürich an. Die Webseite zeigt die Auslastung der jeweiligen Parkhäuser im letzten Jahr, Monat, Woche und Tag an und bietet eine Gesamtübersicht. Somit kann man diese Auslastungen über einen gewissen Zeitraum analysieren. Wir haben uns hierbei auf die 10 grössten Parkhäuser von Zürich konzentriert. 

 

Vorgehen: 
Als erstes haben wir die IPA angezapft und mit dem Crontool verbunden, damit wir Daten für unsere Datenbank haben. Anschliessend sah unser Vorgehen so aus, dass wir den HTML- und CSS-Code geschrieben haben, um das grundlegende Design der Seite fertigzustellen. Anschliessend haben wir JavaScript und PHP implementiert. Um den Graphen zu erstellen, haben wir Google und ChatGPT um Hilfe gebeten. Dabei war viel Ausprobieren notwendig, da immer wieder neue Probleme auftraten. 

 

Schwierigkeiten und Learnings:  

Bei unserem Projekt hätten wir einige Dinge besser machen können. Zunächst hätten wir das Design in Figma mehr an die Bildschirmgrösse anpassen sollen, damit die Proportionen besser übereinstimmen und die Übertragung des Designs in den Code reibungsloser verläuft. Ein weiterer Punkt war das Hintergrundbild, das nur am unteren Ende der Seite angezeigt wurde, was die Programmierung erschwerte. 

Bei den Grafiken wäre es besser gewesen, den gesamten Zeitstempel nicht als Label zu verwenden. Stattdessen hätten wir die Daten ordentlich kopieren sollen, um eine klarere Darstellung zu erreichen. Ein weiterer Schritt, welcher die Webseite verbessern würde, wäre, wenn man beispielsweise bei den Daten des ganzen Jahres für jeden Tag nur einen Datensatz nehmen darstellen würde und nicht alle. Dies würde dann ein Durchschnittswert der Belegung sein. Es wäre wichtig gewesen, eine Schriftart zu wählen, die die deutschen Umlaute ä, ü und ö korrekt darstellt, da diese momentan kleiner angezeigt werden. 

Die Koordination im Team, insbesondere bei der Arbeit an verschiedenen Modulen der Webseite, war ebenfalls eine Herausforderung. 

Da unterschiedliche Leute am Code gearbeitet haben, war es schwierig für die Zusammensetzung. Wir hätten das von vornehinein klarer definieren sollen, um den Code einheitlicher zu halten, da jeder eine andere Art des Programmierens hat.   

 

Ebenfalls einer der Schwierigkeiten war, dass die Punkte auf der Karte mit absoluten Koordinaten funktionieren. Deshalb muss die Karte immer gleich gross sein, damit die Punkte richtig verteilt sind auf der Karte. Wir konnten die Karte leider nicht vergrössern, da die Punkte ansonsten an der falschen Stelle wären. So hat das Layout der Webseite, vor allem im Desktopformat ein bisschen gelitten. Dies hätten wir vorher bedenken müssen, ist aber ein klares Learning für zukünftige Projekte. Wir wollten hier die Karte sauber in unser Layout einfügen und haben darum bei der Planung das Design über die Funktionalität gestellt. 

 

Benutzte Ressourcen 

Für die Entwicklung der Webseite haben wir verschiedene Technologien und Tools eingesetzt: 

Programmiersprachen: HTML, CSS, JavaScript, PHP 

APIs: Echtzeit-Daten-APIs für Parkplatzinformationen 

Entwicklungsumgebung: FileZilla (wir kennen uns mit FileZilla am besten aus, da wir schon vergangene Projekte damit erstellt haben und haben uns darum dazu entschieden.) 

KI/Hilfe: Chatgpt/Google/Copilot  
