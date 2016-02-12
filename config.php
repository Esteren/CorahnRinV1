<?php

## Constantes concernant la BDD
define('P_DB_HOST', '127.0.0.1');
define('P_DB_USER', 'root');
define('P_DB_PWD', 'root');
define('P_DB_DBNAME', 'esteren_v1');
define('P_DB_PREFIX', 'est_');

## Détermine si les erreurs seront affichées
define('P_DB_INITERRORS', true);

## Détermine quel type d'erreur sera envoyé
define('P_DB_ERROR_TYPE', 'notice');

define('P_DEBUG', true);

## Constantes liées aux envois de mail
define('P_ERROR_MAIL_TO', 'pierstoval+esterenErrors@gmail.com');
define('P_ERROR_MAIL_FROM', 'no-reply@pierstoval.com');

##Constantes liées à PHP Mailer
define('P_MAIL_SMTP_HOST', 'auth.smtp.1and1.fr');
define('P_MAIL_SMTP_USER', 'no-reply@pierstoval.com');
define('P_MAIL_SMTP_PASSWORD', '');
define('P_MAIL_SMTP_SECURE', 'TLS');
define('P_MAIL_SMTP_PORT', 587);
define('P_MAIL_DEFAULT_FROM_MAIL', P_MAIL_SMTP_USER);
define('P_MAIL_DEFAULT_FROM_NAME', 'Corahn Rin');
