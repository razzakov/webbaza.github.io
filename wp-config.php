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
define( 'DB_NAME', 'webbaza' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'razzakov' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ti|Rg{3+l%*=hWT8zx{y&Ni,qFbNi,,j?0HK$o^*`Tj#jB3UApqL.Ya8cOEWrs9Z' );
define( 'SECURE_AUTH_KEY',  'g]h:o7u;uBd$6/[3(0LE50I-|/o #|!#2Sr{L0Z=?=d]#wKRLyb@5m~0zAwm8=?V' );
define( 'LOGGED_IN_KEY',    'l8m,(.;`bOTHYI{^edx2kA>AM>V!JY%0VK|G4kF[V@ecmmdqu4p+-&m=8N[9+gUR' );
define( 'NONCE_KEY',        '6YG!c9d/d qPo:7HA,YhfH7N8OZ!$t9xXA*|Xm=q{X@<(Sm6J}h|g.XHN!SD*jxz' );
define( 'AUTH_SALT',        '`vD]@4`{S{|/V651NqpQkWeHd/]p37H@<+y($-sBtfCA?,}ZEMXvdZh#K&5I9(*j' );
define( 'SECURE_AUTH_SALT', '<>gWh<]R!!lnn9aW6Io+=T-?W`?wNZjAq9%`gHstatF6[70w]D;bsEPGsX];Ys:,' );
define( 'LOGGED_IN_SALT',   'n?!=,Ih=jlcCF,inIiay*;&B%HcF4NQl84.wP-aTqO>LPKq7U:-4lBH/Gk}XVa`~' );
define( 'NONCE_SALT',       'CN^Dy+xd,%nFdp%M:AT(0X?CA5i?oHN*?.$wwPlWD}R8B.~~Jtn)}W^P4m8SmH?%' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
