<?php
/**
*
* acp_database [Deutsch — Sie]
*
* @package language
* @version $Id: database.php 307 2007-11-29 07:05:01Z philipp $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* (http://www.phpbb.de/go/3/uebersetzer)
* Frank Doerr, Dirk Gaffke, Christopher Gerharz, Ingo Köhler, Philipp Kordowich, Ingo Migliarina, Paul Rauch
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Hier können Sie all Ihre phpBB-Daten sichern. Sie können die Sicherung in Ihrem <samp>store/</samp>-Ordner speichern oder sie direkt herunterladen. Abhängig von der Konfiguration Ihres Servers können Sie die Datei auf verschiedene Arten komprimieren.',
	'ACP_RESTORE_EXPLAIN'	=> 'Hiermit wird eine vollständige Wiederherstellung aller phpBB-Tabellen aus einer gespeicherten Datei durchgeführt. Sofern von Ihrem Server unterstützt, kann auch eine komprimierte gzip- oder bzip2-Datei verwendet werden, die dann automatisch dekomprimiert wird. <strong>ACHTUNG:</strong> Dieser Vorgang überschreibt alle vorhandenen Daten. Die Wiederherstellung kann einige Zeit in Anspruch nehmen, bitte wechslen Sie nicht auf eine andere Seite, bis der Vorgang abgeschlossen ist. Backups werden im <samp>store/</samp>-Ordner gespeichert. phpBB geht davon aus, dass die Backups in diesem Ordner mit der phpBB-eigenen Backup-Funktion erstellt wurden. Die Wiederherstellung anders erstellter Backups kann, muss aber nicht funktionieren.',

	'BACKUP_DELETE'		=> 'Die Backup-Datei wurde erfolgreich gelöscht.',
	'BACKUP_INVALID'	=> 'Die ausgewählte Backup-Datei ist ungültig.',
	'BACKUP_OPTIONS'	=> 'Backup-Optionen',
	'BACKUP_SUCCESS'	=> 'Die Backup-Datei wurde erfolgreich erstellt.',
	'BACKUP_TYPE'		=> 'Backup-Art',

	'DATABASE'			=> 'Datenbank-Tools',
	'DATA_ONLY'			=> 'Nur Daten',
	'DELETE_BACKUP'		=> 'Backup löschen',
	'DELETE_SELECTED_BACKUP'	=> 'Sind Sie sicher, dass Sie das ausgewählte Backup löschen möchten?',
	'DESELECT_ALL'		=> 'Alle Markierungen aufheben',
	'DOWNLOAD_BACKUP'	=> 'Backup herunterladen',

	'FILE_TYPE'			=> 'Dateityp',
	'FULL_BACKUP'		=> 'Komplett',

	'RESTORE_FAILURE'		=> 'Die Backup-Datei könnte beschädigt sein.',
	'RESTORE_OPTIONS'		=> 'Wiederherstellungs-Optionen',
	'RESTORE_SUCCESS'		=> 'Die Datenbank wurde erfolgreich wiederhergestellt.<br /><br />Ihr Board sollte nun den Stand haben, den es zur Zeit des Backups hatte.',

	'SELECT_ALL'			=> 'Alle markieren',
	'SELECT_FILE'			=> 'Wählen Sie eine Sicherung aus',
	'START_BACKUP'			=> 'Backup starten',
	'START_RESTORE'			=> 'Wiederherstellung starten',
	'STORE_AND_DOWNLOAD'	=> 'Speichern und herunterladen',
	'STORE_LOCAL'			=> 'Auf Server speichern',
	'STRUCTURE_ONLY'		=> 'Nur Struktur',

	'TABLE_SELECT'		=> 'Tabellen-Auswahl',
	'TABLE_SELECT_ERROR'=> 'Sie müssen mindestens eine Tabelle auswählen.',
));

?>