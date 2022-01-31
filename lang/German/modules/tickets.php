<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('OGP_LANG_support_tickets', "Support Tickets");
define('OGP_LANG_ticket_subject', "Thema");
define('OGP_LANG_ticket_status', "Status");
define('OGP_LANG_ticket_updated', "Zuletzt aktualisiert");
define('OGP_LANG_ticket_options', "Optionen");
define('OGP_LANG_viewing_ticket', "Ticket ansehen");
define('OGP_LANG_ticket_not_found', "Die angegebenen Ticketparameter stimmen nicht mit einem vorhandenen Ticket überein.");
define('OGP_LANG_ticket_cant_read', "Unzureichende Rechte um das Ticket anzuschauen");
define('OGP_LANG_cant_view_ticket', "Die Ticketinformationen konnten nicht abgerufen werden.");
define('OGP_LANG_ticket_id', "Ticket ID");
define('OGP_LANG_service_id', "Service ID");
define('OGP_LANG_ticket_submitted', "Ticket abgeschickt");
define('OGP_LANG_submitter_info', "Submitter Info");
define('OGP_LANG_name', "Name");
define('OGP_LANG_ip', "IP");
define('OGP_LANG_role', "Benutzer-Rolle");
define('OGP_LANG_ticket_submit_response', "Antwort senden");
define('OGP_LANG_ticket_close', "Schließen");
define('OGP_LANG_no_ticket_replies', "Keine Ticket-Antworten");
define('OGP_LANG_no_tickets_submitted', "Es sind keine Tickets eingereicht worden.");
define('OGP_LANG_submit_ticket', "Ticket abschicken");
define('OGP_LANG_ticket_service', "Dienst");
define('OGP_LANG_ticket_message', "Nacchricht");
define('OGP_LANG_ticket_errors_occured', "Bei der Übermittlung Ihres Tickets sind folgende Fehler aufgetreten");
define('OGP_LANG_no_ticket_subject', "Keine Ticket Thema");
define('OGP_LANG_invalid_ticket_subject_length', "Ungültige Betreff-Länge (4 bis 64 Zeichen)");
define('OGP_LANG_invalid_home_selected', "Ungültiges Home ausgewählt");
define('OGP_LANG_no_ticket_message', "Keine Ticketmeldung vorhanden");
define('OGP_LANG_invalid_ticket_message_length', "Ungültiges Ticket Nachrichtenlänge (Mindestens 4 Zeichen)");
define('OGP_LANG_ticket_no_service', "Kein Dienst für das Ticket ausgewählt");
define('OGP_LANG_failed_to_open', "Das Ticket konnte nicht erstellt werden.");
define('OGP_LANG_failed_to_reply', "Es konnte keine Antwort auf das Ticket erstellt werden.");
define('OGP_LANG_no_ticket_reply', "Keine Ticketantwort bereitgestellt");
define('OGP_LANG_invalid_ticket_reply_length', "Ungültige Ticketantwortlänge (mindestens 4 Zeichen)");
define('OGP_LANG_ticket_closed', "Ticket geschlossen");
define('OGP_LANG_ticket_open', "Ticket Offen");
define('OGP_LANG_ticket_admin_response', "Admin-Reaktion");
define('OGP_LANG_ticket_customer_response', "Kunden-Reaktion");
define('OGP_LANG_ticket_invalid_page_num', "Sie haben versucht, eine Seitenzahl ohne Tickets anzuzeigen!");
define('OGP_LANG_ticket_is_closed', "Dieses Ticket ist geschlossen. Sie können auf dieses Ticket antworten, um es wieder zu öffnen.");
define('OGP_LANG_reply', "Antwort");
define('OGP_LANG_invalid_rating', "Die erhaltene Bewertung ist nicht gültig.");
define('OGP_LANG_successfully_rated_response', "Erfolgreich bewertete Antwort.");
define('OGP_LANG_failed_rating_response', "Die Antwort konnte nicht bewertet werden.");
define('OGP_LANG_attachment_not_all_parameters_sent', "Es wurden nicht alle Parameter zum Herunterladen der Datei gesendet.");
define('OGP_LANG_requested_attachment_missing', "Der angeforderte Anhang existiert nicht.");
define('OGP_LANG_requested_attachment_missing_db', "Der angeforderte Anhang existiert in der Datenbank nicht.");
define('OGP_LANG_ratings_disabled', "Bewertungen sind nicht aktiviert.");
define('OGP_LANG_attachments', "Anhänge");
define('OGP_LANG_add_file_attachment', "Mehr hinzufügen");
define('OGP_LANG_attachment_size_info', "Jede ausgewählte Datei darf maximal %s groß sein");
define('OGP_LANG_attachment_file_size_info', "Es können maximal %s Dateien hochgeladen werden. %s");
define('OGP_LANG_attachment_allowed_extensions_info', "Erlaubte Dateiendungen: %s");
define('OGP_LANG_ticket_fix_before_submitting', "Bitte beheben Sie die folgenden Fehler, bevor Sie das Ticket einreichen");
define('OGP_LANG_ticket_fix_before_replying', "Bitte beheben Sie die folgenden Fehler, bevor Sie auf das Ticket antworten");
define('OGP_LANG_ticket_problem_with_attachments', "Es gab ein Problem mit der/den von Ihnen angehängten Datei(en)");
define('OGP_LANG_ticket_attachment_invalid_extension', "%1 enthält keine zulässige Erweiterung.");
define('OGP_LANG_ticket_attachment_invalid_size', "%1 ist größer als die zulässige Dateigröße. %2 maximal!");
define('OGP_LANG_ticket_max_file_elements', "Es dürfen nur maximal %1 Dateieingaben vorhanden sein.");
define('OGP_LANG_ticket_attachment_multiple_files', "Bei einer oder mehreren Dateieingaben sind mehrere Dateien ausgewählt.");
define('OGP_LANG_attachment_err_ini_size', "%s (%s) überschreitet die Einstellung „upload_max_filesize“.");
define('OGP_LANG_attachment_err_partial', "%s wurde nur teilweise hochgeladen.");
define('OGP_LANG_attachment_err_no_tmp', "Es ist kein tmp-Verzeichnis zum Speichern von %s vorhanden");
define('OGP_LANG_attachment_err_cant_write', "Kann %s nicht auf Datenträger schreiben.");
define('OGP_LANG_attachment_err_extension', "An extension stopped the upload of %s. Review your logs.");
define('OGP_LANG_attachment_too_large', "%s (%s) is larger than the maximum allowed size of %s!");
define('OGP_LANG_attachment_forbidden_type', "The file type of %s may not be uploaded.");
define('OGP_LANG_attachment_directory_not_writable', "Unable to save the attached files. The specified save directory is not writable.");
define('OGP_LANG_attachment_invalid_file_count', "The amount of files sent to the server was invalid. Only a maximum of %s may be uploaded");
define('OGP_LANG_ratings_enabled', "Bewertungen");
define('OGP_LANG_ratings_enabled_info', "Lege fest, ob Bewertungsantworten zulässig sein sollen.");
define('OGP_LANG_attachments_enabled', "Anhänge");
define('OGP_LANG_attachments_enabled_info', "Set if the attachment system should be enabled.");
define('OGP_LANG_attachment_max_size', "Max File Size");
define('OGP_LANG_attachment_max_size_info', "Sets the max file size for attachments.");
define('OGP_LANG_attachment_limit', "Attachment Limit");
define('OGP_LANG_attachment_limit_info', "Sets how many files may be attached at once. 0 for no limit.");
define('OGP_LANG_attachment_save_dir', "Attachment Upload Location");
define('OGP_LANG_attachment_save_dir_info', "Sets where attachments should be uploaded. Ideally, outside of the public_html folder or direct access blocked.");
define('OGP_LANG_attachment_extensions', "Attachment Extensions");
define('OGP_LANG_attachment_extensions_info', "Sets the permitted extensions. Each extension should be separated by a comma.");
define('OGP_LANG_show_php_ini', "Show Estimated INI Settings");
define('OGP_LANG_settings_errors_occured', "The following errors occured when attempting to update the settings - not everything has been updated!");
define('OGP_LANG_invalid_max_size', "Invalid value for Max Size setting.");
define('OGP_LANG_invalid_unit', "Invalid unit type for Max Size setting. Expecting KB, MB, GB, TB, or PB.");
define('OGP_LANG_invalid_save_dir', "The specified save directory does not exist and can not be created.");
define('OGP_LANG_invalid_save_dir_not_writable', "The specified save directory exists but is not writable.");
define('OGP_LANG_invalid_extensions', "No attachment extensions have been specified.");
define('OGP_LANG_update_settings', "Update Settings");
define('OGP_LANG_notifications_enabled', "Notifications");
define('OGP_LANG_notifications_enabled_info', "Allow the user/admin to see if they have got a ticket awaiting reply.");
