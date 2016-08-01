<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u0181833_devpmotion');

/** Имя пользователя MySQL */
define('DB_USER', 'u0181833_default');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'U_I1Q!q1');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',h_ ]MwYH]_+3_jT9AptR,X^Kz40n(c!;3|80VQ[<GqKnR|&h%WrF`025hj&3y6:');
define('SECURE_AUTH_KEY',  'i?.u_8{CPU?|mt-)LkSJFRS~3oHC{[6axV#@^%{o%V~_w/UF[#gewwsOqh%0RM4W');
define('LOGGED_IN_KEY',    'OnOQBrKct{Bd/y-ZIFRO;U.Di`=r([hmuIxjdJG]qEtm-^l3P-SGdCV|2MxA!O{l');
define('NONCE_KEY',        'wN1|Xnqg)R;Ik8^]luCRoFnEL_;_G~gzQQ2PG; :UGTWHmo-o}kY!t<1J.|Pkenf');
define('AUTH_SALT',        '6}0E/(f|C@s_BK+JyuhUZ@}gWW+M_@J7y8wP%?#3YW/0^B09Y[Dfl BpE]_$h+Lm');
define('SECURE_AUTH_SALT', 'f?p0^Rx9rBLY-P=f#9.>e)PB)NUO++lt7Ly=@U0B,H$j7(=!^B]|Zg85^mg-{T*Q');
define('LOGGED_IN_SALT',   '?Nk<iqk^J5[W:vki=o&gM#g~e#rwXes!~.T~H1f5EBH)e:-:kxG .{eJe+)nk-wk');
define('NONCE_SALT',       'NOM`){fz2[X~j!e =i6hZ=#;xoyabtDk!ol^Bu|.4Exo<tkm6I-^dK6:b|vTK@+<');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
