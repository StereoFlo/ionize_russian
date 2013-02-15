<?php

$lang = array();

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['title_ionize_installation'] = 		'Установка';

$lang['title_system_check'] = 		'Результаты проверки системы';
$lang['title_database_settings'] = 	'Настройки БД';
$lang['title_user_account'] = 	'Настройка администраторы';
$lang['title_default_language'] = 	'Язык по умолчанию';
$lang['title_sample_data'] = 	'Установить пример сайта?';

$lang['button_next_step'] = 		'Следущий шаг';
$lang['button_skip_next_step'] = 	'Пропустить & Следущий шаг';
$lang['button_save_next_step'] = 	'Сохранить & Следующий шаг';
$lang['button_install_test_data'] = 	"Установить тестовые данные";
$lang['button_start_migrate'] = 		'Начать миграцию БД';

$lang['nav_check'] = 'Проверка системы';
$lang['nav_db'] = 'База данных';
$lang['nav_settings'] = 'Настройка';
$lang['nav_end'] = 'Финиш';
$lang['nav_data'] = 'Демо данные';


/*
|--------------------------------------------------------------------------
| System check
|--------------------------------------------------------------------------
*/
$lang['php_version'] = 			'PHP >= 5';
$lang['php_version_found'] = 	'Версия PHP';
$lang['mysql_support'] = 		'Поддержка MySQL';
$lang['mysql_version_found'] = 	'Версия MySQL';
$lang['file_uploads'] = 		'Загрузка файлов';
$lang['mcrypt'] = 				'Библиотека PHP Mcrypt';
$lang['gd_lib'] = 				'Библиотека PHP GD';
$lang['write_config_dir'] = 	'<b>/application/config/</b>';
$lang['write_files'] = 			'<b>/files/*</b>';
$lang['write_themes'] = 		'<b>/themes/*</b>';
$lang['config_check_errors'] = 	'Некоторые параметры не соответствуют требуемым.<br/>Пожалуйста, измените это.';
$lang['welcome_text'] = 		"<p>Добро пожаловать ! Этот мастер поможет вам установить Ionize.</p>";
$lang['write_check_text'] = 	"<p>Следующим папкам и файлам требуется разрешение на запись...</p>";
$lang['title_folder_check'] = 	"Следующим папкам требуется разрешение на запись";
$lang['title_files_check'] = 	"Следующим файлам требуется разрешение на запись";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/
$lang['database_driver'] = 			'Драйвер';
$lang['database_hostname'] = 		'Хост';
$lang['database_name'] = 			'БД';
$lang['database_username'] = 		'Пользователь';
$lang['database_password'] = 		'Пароль';
$lang['database_create'] = 			'Создать БД';
$lang['title_database_create'] = 	'Создание БД';
$lang['db_create_text'] = 			"<p>Ionize установит или произведет миграцию вашей БД:</p><p><b class=\"highlight\">Новая установка</b> : БД будет создана с новыми таблицами<br/><b class=\"highlight2\">Обновление</b> : Следующий шаг проверить и обновит то, что нужно</p>";
$lang['db_create_prerequisite'] = 			"Пользователю нужны права на создание БД.<br/>If your database already exists, don't check it.";
$lang['database_error_missing_settings'] = 	'Some information is missing.<br/>Please fill all fields !';
$lang['database_success_install'] = 		'<b class="ex">The database was successfully installed.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">Database OK.</b><br/>As the database already exists, the website settings step will be skipped.';
$lang['database_success_migrate'] = 		'<b class="ex">The database was successfully upgraded.</b>';
$lang['database_error_coud_not_connect'] = 		'Connection to the database fails with the provided settings.';
$lang['database_error_database_dont_exists'] = 		"The database doesn't exist !";
$lang['database_error_writing_config_file'] = 		"<b>Error :</b><br/>The file <b style=\"color:#000;\">/application/config/database.php</b> could not be written!<br/>Check your permissions.";
$lang['database_error_coud_not_write_database'] = 		"<b>Error :</b><br/> Impossible to write data in the database.<br/>Check your DB permissions.";
$lang['database_error_coud_not_create_database'] = "The installer cannot create the database. Check your database name or your rights";
$lang['database_error_no_ionize_tables'] = 			"The database you selected seems not to be an Ionize database. Please check again.";
$lang['database_error_no_users_to_migrate'] = 		"To user account to upgrade";
$lang['database_migration_from'] = 			'This database needs an upgrade.<br/>Upgrade from version : ';
$lang['database_migration_text'] = 		"<p class=\"error\"><b>NOTICE :</b><br/> The database will now be upgraded.<b><br/>Please backup your database before this upgrade.</p>";


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['lang_code'] = 		'Код (2 симв.)';
$lang['lang_name'] = 		'Метка';
$lang['settings_default_lang_title'] = 		'Язык по умолчанию';
$lang['settings_default_lang_text'] = 		'Вашему веб сайту требуется язык по умолчанию.<br/>Вы можете посетить <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">страницу ISO 639-1 Википедии</a> для получения информации о кодах.';
$lang['settings_error_missing_lang_code'] = "The lang code is mandatory";
$lang['settings_error_missing_lang_name'] = "The lang name is mandatory";
$lang['settings_error_lang_code_2_chars'] = "The lang code must be on 2 chars. Example : \"en\"";
$lang['settings_error_write_rights'] = "No write rights on <b>/application/config/language.php</b>. Please check the PHP rights on this file.";
$lang['settings_error_write_rights_config'] = "No write rights on <b>/application/config/config.php</b>. Please check the PHP rights on this file.";
$lang['settings_error_admin_url'] = "The admin URL must be an alphanumerical string, without spaces or special chars";
$lang['settings_admin_url_title'] = 		'Administration panel URL';
$lang['settings_admin_url_text'] = 		'It is strongly recommended to change the default one.';
$lang['admin_url'] = 'Admin URL';

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
$lang['user_introduction'] = 	'Вы сможете входить в админ-панель используя пользователя, которого создадите на этом шаге.';
$lang['username'] = 			'Логин (мин. 4 симв.)';
$lang['screen_name'] = 			'Полное имя';
$lang['email'] = 				'Email';
$lang['password'] = 			'Пароль (мин. 4 симв.)';
$lang['password2'] = 			'Подтвердите пароль';
$lang['user_error_missing_settings'] = 			'Пожалуйста, заполните все поля !';
$lang['user_error_not_enough_char'] = 			'Логин или пароль должны быть больше 4 символов!';
$lang['user_error_email_not_valid'] = 			'Email введен не верно, попробуйте еще раз.';
$lang['user_error_passwords_not_equal'] = 		'Пароль и подтверждение не совпадают.	';
$lang['user_info_admin_exists'] = 		'Администратор существует в базе.<br/>Вы можете пропустить этот шаг, если не хотите создавать или обновлять учетную запись администратора.';
$lang['encryption_key'] = 			'Ключ шифрования';
$lang['encryption_key_text'] = 		"Ionize needs an 128 bits Encryption Key.<br />This key will encode the users account and all sensitive data.<br/>It will be written in the <b>/application/config/config.php</b> file.";
$lang['no_encryption_key_found'] = 	"The encryption key was not found. the user account were not migrated. <b>You must create a new Admin user</b>.";


/*
|--------------------------------------------------------------------------
| Data
|--------------------------------------------------------------------------
*/
$lang['data_install_intro'] = 	"<p>If this is the first time you use Ionize, it's strongly recommended you install the sample website.<br/>This website includes : </p><ul><li>A complete set of data, useful to test Ionize,</li><li>1 working example theme</li></ul>";
$lang['title_skip_this_step'] = "Пропустить этот шаг";

$lang['title_finish'] = 		'Установка завершена';
$lang['finish_text'] = 			'<b>ВАЖНО</b>: <br/>Вы должны удалить папку "<b>/install</b>" вручную, до того, как перейдете к сайту или админ-панели.';
$lang['button_go_to_admin'] = 	'Перейти в админ-панель';
$lang['button_go_to_site'] = 	'Перейти к сайту';
