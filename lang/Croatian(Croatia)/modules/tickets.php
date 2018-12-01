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

define('OGP_LANG_support_tickets', "Korisnička Podrška");
define('OGP_LANG_ticket_subject', "Predmet");
define('OGP_LANG_ticket_status', "Status");
define('OGP_LANG_ticket_updated', "Zadnje Ažurirano");
define('OGP_LANG_ticket_options', "Opcije");
define('OGP_LANG_viewing_ticket', "Pregledavanje Upita");
define('OGP_LANG_ticket_not_found', "Parametri upita ne odgovaraju postojećem upitu.");
define('OGP_LANG_ticket_cant_read', "Nedovoljna dozvola za pregledavanje upita.");
define('OGP_LANG_cant_view_ticket', "Nije moguće dohvatiti podatke o upitu.");
define('OGP_LANG_ticket_id', "ID Upita");
define('OGP_LANG_service_id', "ID Usluge");
define('OGP_LANG_ticket_submitted', "Upit je poslan");
define('OGP_LANG_submitter_info', "Podaci o podnositelju");
define('OGP_LANG_name', "Ime");
define('OGP_LANG_ip', "IP Adresa");
define('OGP_LANG_role', "Korisnička uloga");
define('OGP_LANG_ticket_submit_response', "Pošaljite odgovor");
define('OGP_LANG_ticket_close', "Zatvoriti");
define('OGP_LANG_no_ticket_replies', "Nema odgovoreni upita");
define('OGP_LANG_no_tickets_submitted', "Nema poslani upita");
define('OGP_LANG_submit_ticket', "Pošalji Upit");
define('OGP_LANG_ticket_service', "Usluga");
define('OGP_LANG_ticket_message', "Poruka");
define('OGP_LANG_ticket_errors_occured', "Sljedeće su se pogreške pojavile prilikom slanja vašeg upita");
define('OGP_LANG_no_ticket_subject', "Upit Bet Predmeta");
define('OGP_LANG_invalid_ticket_subject_length', "Nevažeća dužina predmeta (4 do 64 znaka)");
define('OGP_LANG_invalid_home_selected', "Nevažeći odabrani Home");
define('OGP_LANG_no_ticket_message', "Nema predbilježbe za upit");
define('OGP_LANG_invalid_ticket_message_length', "Nevažeća duljina poruke (minimalno 4 znaka)");
define('OGP_LANG_ticket_no_service', "Nijedna usluga nije odabrana za ovaj upit.");
define('OGP_LANG_failed_to_open', "Otvaranje upita nije uspjelo.");
define('OGP_LANG_failed_to_reply', "Izrada odgovora na upit nije uspjela.");
define('OGP_LANG_no_ticket_reply', "Ne postoji odgovor na upit");
define('OGP_LANG_invalid_ticket_reply_length', "Nevažeća duljina odgovora za upit (minimalno 4 znaka)");
define('OGP_LANG_ticket_closed', "Upit Zaključan");
define('OGP_LANG_ticket_open', "Upit Otvoren");
define('OGP_LANG_ticket_admin_response', "Odgovor Administratora");
define('OGP_LANG_ticket_customer_response', "Odgovor Korisnika");
define('OGP_LANG_ticket_invalid_page_num', "Pokušali ste pregledati broj stranice bez upita!");
define('OGP_LANG_ticket_is_closed', "Ovaj upit je zatvoren. Možete odgovoriti na ovaj upit kako biste ponovno otvorili.");
define('OGP_LANG_reply', "Odgovoriti");
define('OGP_LANG_invalid_rating', "Primljena ocjena nije valjana.");
define('OGP_LANG_successfully_rated_response', "Uspješno ocijenjen odgovor.");
define('OGP_LANG_failed_rating_response', "Nije uspjelo ocijeniti odgovor.");
define('OGP_LANG_attachment_not_all_parameters_sent', "Nisu poslani svi parametri za preuzimanje datoteke.");
define('OGP_LANG_requested_attachment_missing', "Zatraženi privitak ne postoji.");
define('OGP_LANG_requested_attachment_missing_db', "Zatraženi privitak ne postoji u bazi podataka.");
define('OGP_LANG_ratings_disabled', "Ociienjivanje odgovora nije omogućeno.");
define('OGP_LANG_attachments', "Privitci");
define('OGP_LANG_add_file_attachment', "Dodati Više");
define('OGP_LANG_attachment_size_info', "Each selected file may be a maximum of %s");
define('OGP_LANG_attachment_file_size_info', "A maximum of %s file(s) may be uploaded, %s each.");
define('OGP_LANG_attachment_allowed_extensions_info', "Allowed File Extensions: %s");
define('OGP_LANG_ticket_fix_before_submitting', "Please fix the following errors before submitting the ticket");
define('OGP_LANG_ticket_fix_before_replying', "Please fix the following errors before replying to the ticket");
define('OGP_LANG_ticket_problem_with_attachments', "There was a problem with the file(s) you attached");
define('OGP_LANG_ticket_attachment_invalid_extension', "%1 does not contain a permitted extension.");
define('OGP_LANG_ticket_attachment_invalid_size', "%1 is larger than the allowed file size. %2 maximum!");
define('OGP_LANG_ticket_max_file_elements', "Only a maximum of %1 file inputs may exist.");
define('OGP_LANG_ticket_attachment_multiple_files', "One or more file inputs have multiple files selected.");
define('OGP_LANG_attachment_err_ini_size', "%s (%s) exceeds the 'upload_max_filesize' setting.");
define('OGP_LANG_attachment_err_partial', "%s was only partially uploaded.");
define('OGP_LANG_attachment_err_no_tmp', "No tmp directory exists to save %s");
define('OGP_LANG_attachment_err_cant_write', "Unable to write %s to disk.");
define('OGP_LANG_attachment_err_extension', "An extension stopped the upload of %s. Review your logs.");
define('OGP_LANG_attachment_too_large', "%s (%s) is larger than the maximum allowed size of %s!");
define('OGP_LANG_attachment_forbidden_type', "The file type of %s may not be uploaded.");
define('OGP_LANG_attachment_directory_not_writable', "Unable to save the attached files. The specified save directory is not writable.");
define('OGP_LANG_attachment_invalid_file_count', "The amount of files sent to the server was invalid. Only a maximum of %s may be uploaded");
define('OGP_LANG_ratings_enabled', "Ocijene");
define('OGP_LANG_ratings_enabled_info', "Set if rating responses should be allowed.");
define('OGP_LANG_attachments_enabled', "Privitci");
define('OGP_LANG_attachments_enabled_info', "Set if the attachment system should be enabled.");
define('OGP_LANG_attachment_max_size', "Max File Size");
define('OGP_LANG_attachment_max_size_info', "Sets the max file size for attachments.");
define('OGP_LANG_attachment_limit', "Ograničenje privitka");
define('OGP_LANG_attachment_limit_info', "Sets how many files may be attached at once. 0 for no limit.");
define('OGP_LANG_attachment_save_dir', "Attachment Upload Location");
define('OGP_LANG_attachment_save_dir_info', "Sets where attachments should be uploaded. Ideally, outside of the public_html folder or direct access blocked.");
define('OGP_LANG_attachment_extensions', "Proširenja privitaka");
define('OGP_LANG_attachment_extensions_info', "Sets the permitted extensions. Each extension should be separated by a comma.");
define('OGP_LANG_show_php_ini', "Show Estimated INI Settings");
define('OGP_LANG_settings_errors_occured', "The following errors occured when attempting to update the settings - not everything has been updated!");
define('OGP_LANG_invalid_max_size', "Invalid value for Max Size setting.");
define('OGP_LANG_invalid_unit', "Invalid unit type for Max Size setting. Expecting KB, MB, GB, TB, or PB.");
define('OGP_LANG_invalid_save_dir', "The specified save directory does not exist and can not be created.");
define('OGP_LANG_invalid_save_dir_not_writable', "The specified save directory exists but is not writable.");
define('OGP_LANG_invalid_extensions', "No attachment extensions have been specified.");
define('OGP_LANG_update_settings', "Ažurirati postavke");
define('OGP_LANG_notifications_enabled', "Obavijesti");
define('OGP_LANG_notifications_enabled_info', "Allow the user/admin to see if they have got a ticket awaiting reply.");
