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
$lang['form_password_not_found_message'] = "This email seems not to be in our system";
$lang['form_password_success_message'] = "One email with you new password has just been sent to you.";

/*
|--------------------------------------------------------------------------
| Validation Errors
|--------------------------------------------------------------------------
*/
$lang['form_error_javascript_required'] = "You need to have javascript activated to send this form.";
$lang['form_error_spam'] = "Thank you for your good Spam !";
$lang['form_error_required'] = "The <strong>%s</strong> field is required.";
$lang['form_error_isset'] = "The <strong>%s</strong> field must have a value.";
$lang['form_error_valid_email'] = "The <strong>%s</strong> field must contain a valid email address.";
$lang['form_error_valid_emails'] = "The <strong>%s</strong> field must contain all valid email addresses.";
$lang['form_error_valid_url'] = "The <strong>%s</strong> field must contain a valid URL.";
$lang['form_error_valid_ip'] = "The <strong>%s</strong> field must contain a valid IP.";
$lang['form_error_min_length'] = "The <strong>%s</strong> field must be at least %s characters in length.";
$lang['form_error_max_length'] = "The <strong>%s</strong> field can not exceed %s characters in length.";
$lang['form_error_exact_length'] = "The <strong>%s</strong> field must be exactly %s characters in length.";
$lang['form_error_alpha'] = "The <strong>%s</strong> field may only contain alphabetical characters.";
$lang['form_error_alpha_numeric'] = "The <strong>%s</strong> field may only contain alpha-numeric characters.";
$lang['form_error_alpha_dash'] = "The <strong>%s</strong> field may only contain alpha-numeric characters, underscores, and dashes.";
$lang['form_error_numeric'] = "The <strong>%s</strong> field must contain only numbers.";
$lang['form_error_is_numeric'] = "The <strong>%s</strong> field must contain only numeric characters.";
$lang['form_error_integer'] = "The <strong>%s</strong> field must contain an integer.";
$lang['form_error_matches'] = "The <strong>%s</strong> fields do not match.";
$lang['form_error_is_natural'] = "The <strong>%s</strong> field must contain only positive numbers.";
$lang['form_error_is_natural_no_zero']	= "The <strong>%s</strong> field must contain a number greater than zero.";
$lang['form_error_restricted_field'] = "Data were transmitted, which are not allowed.";
$lang['form_error_terms'] = "You have to accept the terms of usage.";
$lang['form_error_upload_something'] = "Something went wrong while uploading the files.";
$lang['form_error_upload_file_size'] = "The uploaded file needn't be larger than 1 MB.";
$lang['form_error_upload_file_type'] = "Only JPEGs, PNGs and GIFs are allowed.";

