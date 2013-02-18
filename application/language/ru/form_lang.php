<?php
/*
|--------------------------------------------------------------------------
| Ionize Form library Language file
|
| Copy this file to /themes/<my_theme/language/xx/form_lang.php
| to replace these translations with your one.
|
| IMPORTANT :
| Do not modify this file.
| It will be overwritten when migrating to a new Ionize release.
|
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Labels
| To be used for form lables.
| Also used by Form Validation to display "human" name for each field in the errors messages.
| Declared as "label" for each fields of forms set in /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_label_email'] = 'Email';
$lang['form_label_name'] = 'Имя';
$lang['form_label_firstname'] = 'Имя';
$lang['form_label_lastname'] = 'Фамилия';
$lang['form_label_screen_name'] = 'Как отображать?';
$lang['form_label_username'] = 'Имя пользователя';
$lang['form_label_birthdate'] = 'Дата рождения';
$lang['form_label_gender'] = 'Пол';
$lang['form_label_login'] = 'Логин';
$lang['form_label_password'] = 'Пароль';
$lang['form_label_password_confirmation'] = 'Подтверждение';
$lang['form_label_delete_account'] = 'Удалить профиль';

/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['form_button_send'] = "Отправить";
$lang['form_button_save'] = "Сохранить";
$lang['form_button_register'] = "Регистрация";
$lang['form_button_login'] = "Войти";
$lang['form_button_logout'] = "Выйти";
$lang['form_button_post'] = "Отправить";
$lang['form_button_answer'] = "Ответить";

/*
|--------------------------------------------------------------------------
| Emails
|--------------------------------------------------------------------------
*/
// Registration : Email to the website email
$lang['mail_website_registration_subject'] = "Кто-то зарегистрировался на сайте";
$lang['mail_website_registration_message'] = "Вот подробности этого нового пользователя.";

// Registration : Email to user
$lang['mail_user_registration_subject'] = "Регистрация на сайте %s";
$lang['mail_user_registration_intro'] = "Уважаемый %s,";
$lang['mail_user_registration_message'] = "Вы зарегистрировались на сайте <b>%s</b>.<br/>Ниже, информация о вас.";
$lang['mail_user_registration_activate'] = "До того, как вы войдете, вам необходимо активировать ваш профиль. Ссылка ниже :";

// New Password : Email to user
$lang['mail_user_password_subject'] = "Новый пароль от сайта %s";
$lang['mail_user_password_intro'] = "Уважаемый %s,";
$lang['mail_user_password_message'] = "Вы запопросили новый пароль для входа на сайт <b>%s</b>.<br/>Ниже информаци о вас:";

/*
|--------------------------------------------------------------------------
| Messages
| Success messages for login / registration forms
| Declared as 'success' for each form in form setup : /config/ionize.php
|--------------------------------------------------------------------------
*/
$lang['form_not_logged'] = "Вы не авторизованы.";

$lang['form_login_success_message'] = "Вы успешно вошли.";
$lang['form_login_error_message'] = "Ошибка: Проверьте ваш логин / пароль.";
$lang['form_login_not_found_message'] = "Пользователь не найден.";
$lang['form_login_not_activated_message'] = "Эта учетная запись не активирована. Проверьте вашу электронную почту и нажмите на ссылку активации.";

$lang['form_register_success_message'] = "Вы успешно зарегистрированы.";
$lang['form_register_error_message'] = "Ошибка: Регистрация не удалась.";

$lang['form_profile_success_message'] = "Данные профиля сохранены";
$lang['form_profile_error_message'] = "Этот пользователь уже существует. Пожалуйста, измените имя пользователя или email";
$lang['form_profile_account_deleted'] = "Профиль удален";

$lang['form_password_error_message'] = "Произошла ошибка";
$lang['form_password_not_found_message'] = "Этого email возможно нет в нашей системе.";
$lang['form_password_success_message'] = "Вам был отправлен email с новым паролем.";

/*
|--------------------------------------------------------------------------
| Validation Errors
|--------------------------------------------------------------------------
*/
$lang['form_error_javascript_required'] = "Чтобы использовать эту форму, вы должны включить javascript.";
$lang['form_error_spam'] = "Спасибо за спам !";
$lang['form_error_required'] = "Поле <strong>%s</strong> обязательно для заполнения.";
$lang['form_error_isset'] = "Поле <strong>%s</strong> должно содержать значение.";
$lang['form_error_valid_email'] = "Поле <strong>%s</strong> должно содержкать правильный email.";
$lang['form_error_valid_emails'] = "Поле <strong>%s</strong> должно содержать все правильные email адреса.";
$lang['form_error_valid_url'] = "Поле <strong>%s</strong> должно содержкать правильный URL.";
$lang['form_error_valid_ip'] = "Поле <strong>%s</strong> должно содержкать правильный IP.";
$lang['form_error_min_length'] = "Поле <strong>%s</strong> должно быть не менее %s символов.";
$lang['form_error_max_length'] = "Поле <strong>%s</strong> не должно превышать %s сомволов.";
$lang['form_error_exact_length'] = "Поле <strong>%s</strong> должно содержать %s символов.";
$lang['form_error_alpha'] = "Поле <strong>%s</strong> может содержать только буквы.";
$lang['form_error_alpha_numeric'] = "Поле <strong>%s</strong> может содержать только цифры.";
$lang['form_error_alpha_dash'] = "Поле <strong>%s</strong> может содержать только буквенно-цифровые символы, подчеркивания и тире.";
$lang['form_error_numeric'] = "Поле <strong>%s</strong> должно содержать только цифры.";
$lang['form_error_is_numeric'] = "Поле <strong>%s</strong> должно содержать только цифры.";
$lang['form_error_integer'] = "Поле <strong>%s</strong> должно содержать целое число.";
$lang['form_error_matches'] = "Поле <strong>%s</strong> не совпадает.";
$lang['form_error_is_natural'] = "Поле <strong>%s</strong> должно содержать только положительные числа.";
$lang['form_error_is_natural_no_zero']	= "Поле <strong>%s</strong> должно содержать число больше нуля.";
$lang['form_error_restricted_field'] = "Были переданны недоспутимые данные.";
$lang['form_error_terms'] = "Вы должны согласиться с условиями использования.";
$lang['form_error_upload_something'] = "Что-то пошло не так при загрузке файлов.";
$lang['form_error_upload_file_size'] = "Загруженный файл не должен быть больше 1 Мб.";
$lang['form_error_upload_file_type'] = "Только файлы JPEG, PNG и GIF-файлов могуть быть загружены.";

