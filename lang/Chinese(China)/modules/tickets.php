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

define('OGP_LANG_support_tickets', "支持票证");
define('OGP_LANG_ticket_subject', "主题");
define('OGP_LANG_ticket_status', "状态");
define('OGP_LANG_ticket_updated', "最后更新");
define('OGP_LANG_ticket_options', "选项");
define('OGP_LANG_viewing_ticket', "查看票证");
define('OGP_LANG_ticket_not_found', "给定的票证参数与现有票证不匹配。");
define('OGP_LANG_ticket_cant_read', "没有足够的权限查看票证。");
define('OGP_LANG_cant_view_ticket', "无法检索票证信息。");
define('OGP_LANG_ticket_id', "票证ID");
define('OGP_LANG_service_id', "服务ID");
define('OGP_LANG_ticket_submitted', "票证已提交");
define('OGP_LANG_submitter_info', "提交者信息");
define('OGP_LANG_name', "名称");
define('OGP_LANG_ip', "IP");
define('OGP_LANG_role', "用户角色");
define('OGP_LANG_ticket_submit_response', "提交回应");
define('OGP_LANG_ticket_close', "关闭");
define('OGP_LANG_no_ticket_replies', "没有票证回复");
define('OGP_LANG_no_tickets_submitted', "没有提交的票证。");
define('OGP_LANG_submit_ticket', "提交票证");
define('OGP_LANG_ticket_service', "服务");
define('OGP_LANG_ticket_message', "消息");
define('OGP_LANG_ticket_errors_occured', "提交票证时发生以下错误");
define('OGP_LANG_no_ticket_subject', "无票证主题");
define('OGP_LANG_invalid_ticket_subject_length', "无效的主题长度（4到64个字符）");
define('OGP_LANG_invalid_home_selected', "选择了无效的主页");
define('OGP_LANG_no_ticket_message', "没有提供票证消息");
define('OGP_LANG_invalid_ticket_message_length', "无效的票证消息长度（最少4个字符）");
define('OGP_LANG_ticket_no_service', "此票证未选择服务。");
define('OGP_LANG_failed_to_open', "打开票证失败。");
define('OGP_LANG_failed_to_reply', "创建票证回复失败。");
define('OGP_LANG_no_ticket_reply', "没有提供票证回复");
define('OGP_LANG_invalid_ticket_reply_length', "无效的票证回复长度（最少4个字符）");
define('OGP_LANG_ticket_closed', "票证已关闭");
define('OGP_LANG_ticket_open', "票证开放");
define('OGP_LANG_ticket_admin_response', "管理员回应");
define('OGP_LANG_ticket_customer_response', "客户回应");
define('OGP_LANG_ticket_invalid_page_num', "您尝试查看的页码没有票证！");
define('OGP_LANG_ticket_is_closed', "此票证已关闭。您可以回复此票证以重新打开它。");
define('OGP_LANG_reply', "回复");
define('OGP_LANG_invalid_rating', "接收到的评分无效。");
define('OGP_LANG_successfully_rated_response', "成功评分回应。");
define('OGP_LANG_failed_rating_response', "评分回应失败。");
define('OGP_LANG_attachment_not_all_parameters_sent', "未发送所有参数以下载文件。");
define('OGP_LANG_requested_attachment_missing', "请求的附件不存在。");
define('OGP_LANG_requested_attachment_missing_db', "数据库中不存在请求的附件。");
define('OGP_LANG_ratings_disabled', "评分回应未启用。");
define('OGP_LANG_attachments', "附件");
define('OGP_LANG_add_file_attachment', "添加更多");
define('OGP_LANG_attachment_size_info', "每个选定的文件最大可为 %s");
define('OGP_LANG_attachment_file_size_info', "最多可上传 %s 个文件(s)，每个文件 %s。");
define('OGP_LANG_attachment_allowed_extensions_info', "允许的文件扩展名：%s");
define('OGP_LANG_ticket_fix_before_submitting', "提交票证前请修复以下错误");
define('OGP_LANG_ticket_fix_before_replying', "回复票证前请修复以下错误");
define('OGP_LANG_ticket_problem_with_attachments', "您附加的文件(s)有问题");
define('OGP_LANG_ticket_attachment_invalid_extension', "%1 不包含允许的扩展名。");
define('OGP_LANG_ticket_attachment_invalid_size', "%1 大于允许的文件大小。最大 %2！");
define('OGP_LANG_ticket_max_file_elements', "最多只能有 %1 个文件输入。");
define('OGP_LANG_ticket_attachment_multiple_files', "一个或多个文件输入选择了多个文件。");
define('OGP_LANG_attachment_err_ini_size', "%s (%s) 超过了 'upload_max_filesize' 设置。");
define('OGP_LANG_attachment_err_partial', "%s 只上传了一部分。");
define('OGP_LANG_attachment_err_no_tmp', "不存在临时目录来保存 %s");
define('OGP_LANG_attachment_err_cant_write', "无法将 %s 写入磁盘。");
define('OGP_LANG_attachment_err_extension', "一个扩展停止了 %s 的上传。查看您的日志。");
define('OGP_LANG_attachment_too_large', "%s (%s) 大于最大允许大小 %s！");
define('OGP_LANG_attachment_forbidden_type', "%s 的文件类型不允许上传。");
define('OGP_LANG_attachment_directory_not_writable', "无法保存附件文件。指定的保存目录不可写。");
define('OGP_LANG_attachment_invalid_file_count', "发送到服务器的文件数量无效。最多只能上传 %s 个");
define('OGP_LANG_ratings_enabled', "评分");
define('OGP_LANG_ratings_enabled_info', "设置是否允许评分回应。");
define('OGP_LANG_attachments_enabled', "附件");
define('OGP_LANG_attachments_enabled_info', "设置是否启用附件系统。");
define('OGP_LANG_attachment_max_size', "最大文件大小");
define('OGP_LANG_attachment_max_size_info', "设置附件的最大文件大小。");
define('OGP_LANG_attachment_limit', "附件限制");
define('OGP_LANG_attachment_limit_info', "设置一次可以附加多少个文件。0表示无限制。");
define('OGP_LANG_attachment_save_dir', "附件上传位置");
define('OGP_LANG_attachment_save_dir_info', "设置应上传附件的位置。理想情况下，应在public_html文件夹之外或阻止直接访问。");
define('OGP_LANG_attachment_extensions', "附件扩展名");
define('OGP_LANG_attachment_extensions_info', "设置允许的扩展名。每个扩展名应由逗号分隔。");
define('OGP_LANG_show_php_ini', "显示PHP.INI设置");
define('OGP_LANG_settings_errors_occured', "尝试更新设置时发生以下错误 - 并非所有内容都已更新！");
define('OGP_LANG_invalid_max_size', "最大大小设置的值无效。");
define('OGP_LANG_invalid_unit', "最大大小设置的单位类型无效。期望KB, MB, GB, TB或PB。");
define('OGP_LANG_invalid_save_dir', "指定的保存目录不存在且无法创建。");
define('OGP_LANG_invalid_save_dir_not_writable', "指定的保存目录存在但不可写。");
define('OGP_LANG_invalid_extensions', "未指定附件扩展名。");
define('OGP_LANG_update_settings', "更新设置");
define('OGP_LANG_notifications_enabled', "通知");
define('OGP_LANG_notifications_enabled_info', "允许用户/管理员看到他们是否有等待回复的票证。");
