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

define('OGP_LANG_support_tickets', "Boletos de soporte");
define('OGP_LANG_ticket_subject', "Asunto");
define('OGP_LANG_ticket_status', "Estado");
define('OGP_LANG_ticket_updated', "Ultima actualización");
define('OGP_LANG_ticket_options', "Opciones");
define('OGP_LANG_viewing_ticket', "Viendo Boleto");
define('OGP_LANG_ticket_not_found', "Los parámetros del boleto no coinciden con uno ya existente.");
define('OGP_LANG_ticket_cant_read', "Permisos insuficientes para ver el boleto");
define('OGP_LANG_cant_view_ticket', "No se puede recuperar la información del boleto");
define('OGP_LANG_ticket_id', "Boleto ID");
define('OGP_LANG_service_id', "Servicio ID");
define('OGP_LANG_ticket_submitted', "Boleto enviado");
define('OGP_LANG_submitter_info', "Información del remitente");
define('OGP_LANG_name', "Nombre");
define('OGP_LANG_ip', "IP");
define('OGP_LANG_role', "Rol de Usuario");
define('OGP_LANG_ticket_submit_response', "Enviar Respuesta");
define('OGP_LANG_ticket_close', "Cerrar");
define('OGP_LANG_no_ticket_replies', "No hay respuestas de Boleto");
define('OGP_LANG_no_tickets_submitted', "No se han enviado Boletos");
define('OGP_LANG_submit_ticket', "Enviar Boleto");
define('OGP_LANG_ticket_service', "Servicio");
define('OGP_LANG_ticket_message', "Mensaje");
define('OGP_LANG_ticket_errors_occured', "Los siguientes errores ocurrieron al enviar su boleto");
define('OGP_LANG_no_ticket_subject', "No hay asunto de Boleto");
define('OGP_LANG_invalid_ticket_subject_length', "Longitud de Asunto inválida (4 a 64 caracteres)");
define('OGP_LANG_invalid_home_selected', "Home Seleccionada Inválida");
define('OGP_LANG_no_ticket_message', "No Hay Mensaje proporcionado en el Boleto");
define('OGP_LANG_invalid_ticket_message_length', "Longitud de Mensaje inválida (Mínimo 4 caracteres)");
define('OGP_LANG_ticket_no_service', "No hay servicio seleccionado para este boleto.");
define('OGP_LANG_failed_to_open', "No se pudo abrir el boleto.");
define('OGP_LANG_failed_to_reply', "No se pudo crear la respuesta al boleto.");
define('OGP_LANG_no_ticket_reply', "No se proporciono respuesta al Boleto");
define('OGP_LANG_invalid_ticket_reply_length', "Longitud de Respuesta inválida (Mínimo 4 caracteres)");
define('OGP_LANG_ticket_closed', "Boleto Cerrado");
define('OGP_LANG_ticket_open', "Boleto Abierto");
define('OGP_LANG_ticket_admin_response', "Respuesta del Administrador");
define('OGP_LANG_ticket_customer_response', "Respuesta del Cliente");
define('OGP_LANG_ticket_invalid_page_num', "Haz intentado ver un número de página sin boletos!");
define('OGP_LANG_ticket_is_closed', "This ticket is closed. You may reply to this ticket to reopen it.");
define('OGP_LANG_reply', "Reply");
define('OGP_LANG_invalid_rating', "The rating received is not valid.");
define('OGP_LANG_successfully_rated_response', "Successfully rated response.");
define('OGP_LANG_failed_rating_response', "Failed to rate the response.");
define('OGP_LANG_attachment_not_all_parameters_sent', "Not all parameters have been sent to download the file.");
define('OGP_LANG_requested_attachment_missing', "The requested attachment does not exist.");
define('OGP_LANG_requested_attachment_missing_db', "The requested attachment does not exist in the database.");
define('OGP_LANG_ratings_disabled', "Rating responses is not enabled.");
define('OGP_LANG_attachments', "Attachments");
define('OGP_LANG_add_file_attachment', "Add More");
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
define('OGP_LANG_ratings_enabled', "Ratings");
define('OGP_LANG_ratings_enabled_info', "Set if rating responses should be allowed.");
define('OGP_LANG_attachments_enabled', "Attachments");
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
