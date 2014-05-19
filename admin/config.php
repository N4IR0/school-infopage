<?php
## MYSQL - CONFIG ##
$mysql_host = 'localhost';
$mysql_database = 'fi13';
$mysql_user = 'fi13';
$mysql_password = 'PASSWORD';
##

$conf['class'] = "FI_13A"; # Klassenname
$conf['city'] = "Plauen"; # Schulort
$conf['url'] = "http://www.fi13a.de"; # URL der Seite
$conf['admurl'] = "http://admin.fi13a.de"; # Admin-URL der Seite
$conf['subject5'] = $conf['class']." Erinnerung 5 Tage"; # Betreff für Mails
$conf['subject1'] = $conf['class']." Erinnerung 1 Tage"; # Betreff für Mails
$conf['subjectconfirm'] = $conf['class']." Infoseite - Anmeldung"; # Betreff für Mails
$conf['from'] = "support@fi13a.de"; # Absendermail
$conf['fromfull'] = $conf['class']."-".$conf['city']." Schulwebsite <".$conf['from'].">"; # Absendermail
$conf['host'] = "ssl://localhost"; # SMTP Server
$conf['port'] = "465"; # PORT
$conf['username'] = "support@fi13a.de"; # Nutzername
$conf['pw'] = "PASSWORD"; # Passwort
$conf['logpath'] = "/var/www/vhosts/fi13a.de/httpdocs/notification_log"; # Path für Notification Log

### FTP Daten
$conf['ftp_host'] = "fi13a.de";
$conf['ftp_port'] = "21";
$conf['ftp_user'] = "fi13";
$conf['ftp_pw'] = "PASSWORD";


### Texte für die automatischen notifications
$conf['textdavor'] = "Dies ist eine Erinnerungsmail fuer anstehende Hausaufgaben oder Arbeiten.\n";
$conf['hwtext5'] = "Folgende Hausaufgaben sind bis in 5 Tage auf:\n\r";
$conf['abtext5'] = "Folgende Arbeiten sind in 5 Tagen:\n\r";
$conf['hwtext1'] = "Folgende Hausaufgaben sind bis in 1 Tag auf:\n\r";
$conf['abtext1'] = "Folgende Arbeiten sind in 1 Tag:\n\r";
$conf['textdanach'] = "

Weitere Informationen unter ".$conf['url']."
Dein Erinnerungsservice der ".$conf['class']."-".$conf['city']." Seite";
$conf['adminnot'] = 'Hallo!

es sind neue E-Mailadressen vorhanden, welche auf Freischaltung warten.

Bitte autorisiere diese im Adminpanel unter '.$conf['admurl'].' unter "E-Mails".

Deine '.$conf['class'].'-Infoseite

- Dies ist eine automatisch generierte E-Mail! -';

$conf['confirmtext'] = 'Hallo!
	 
du hast dich auf der '.$conf['class'].'-Infoseite registriert und bekommst nun immer eine Benachrichtigung wenn Hausaufgaben und Arbeiten anstehen. Hier deine FTP-Logindaten:
	
Host: '.$conf['ftp_host'].'
PORT: '.$conf['ftp_port'].'
Benutzername: '.$conf['ftp_user'].'
Kennwort: '.$conf['ftp_pw'].'
 
Der FTP ist NICHT fuer private Daten oder Aenliches gedacht, nur fuer unsere Schulsachen.
Bitte auch kein Weitergabe der Daten an andere, vor allem nicht Lehrer!
 
Deine '.$conf['class'].'-Infoseite';


?>
