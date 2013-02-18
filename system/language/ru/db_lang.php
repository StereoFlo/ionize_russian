<?php

$lang['db_invalid_connection_str'] = 'Невозможно определить настройки базы данных на основании строки соединения.';
$lang['db_unable_to_connect'] = 'Невозможно подключиться к серверу базы данных.';
$lang['db_unable_to_select'] = 'Невозможно выбрать указанную базу данных: %s';
$lang['db_unable_to_create'] = 'Невозможно создать указанную базу данных: %s';
$lang['db_invalid_query'] = 'Отправленный запрос не верный.';
$lang['db_must_set_table'] = 'Вы должны указать таблицу базы данных для выполнения с вашим запросом.';
$lang['db_must_set_database'] = 'Вы должны указать имя базы данных в файле конфигурации базы данных.';
$lang['db_must_use_set'] = 'Вы должны использовать метод "set" для обновления записи.';
$lang['db_must_use_index'] = 'Вы должны указать индекс для сопоставления пакетного обновления.';
$lang['db_batch_missing_index'] = 'Один или несколько ячеек представленных для пакетного обновления отсутствует по указанному индексу.';
$lang['db_must_use_where'] = 'Обновления не допускаются, если они не содержат условия "where".';
$lang['db_del_must_use_where'] = 'Операция delete должна содержать условия "where" или "like".';
$lang['db_field_param_missing'] = 'To fetch fields requires the name of the table as a parameter.';
$lang['db_unsupported_function'] = 'Эта возможность не доступная для БД которую вы используете.';
$lang['db_transaction_failure'] = 'Transaction failure: Rollback performed.';
$lang['db_unable_to_drop'] = 'Unable to drop the specified database.';
$lang['db_unsuported_feature'] = 'Unsupported feature of the database platform you are using.';
$lang['db_unsuported_compression'] = 'The file compression format you chose is not supported by your server.';
$lang['db_filepath_error'] = 'Unable to write data to the file path you have submitted.';
$lang['db_invalid_cache_path'] = 'The cache path you submitted is not valid or writable.';
$lang['db_table_name_required'] = 'Требуется имя таблицы для этой операции.';
$lang['db_column_name_required'] = 'требуется имя столбца для этой операции.';
$lang['db_column_definition_required'] = 'требуется определение столбца для этой операции.';
$lang['db_unable_to_set_charset'] = 'Unable to set client connection character set: %s';
$lang['db_error_heading'] = 'Произошла ошибка БД';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */