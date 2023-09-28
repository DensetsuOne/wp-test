<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wp_site_test' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o:^GU 2-zc+)}GiTJ>Q9EDi*&~QfmW{50^q_xz.b9u./4yWjZfPub9i/roi5E//r' );
define( 'SECURE_AUTH_KEY',  'Y)Ke&6lPqjmiS0~kZ|C)J ^t-3F)c*8TCus~8&gf6nl<B5N&X!)Ebd9p6#G.{w$k' );
define( 'LOGGED_IN_KEY',    '(gbf}rV0<i|;n:3G_?pI@RVKBGIYN[T]>)AfS `pv(gM%/a|06k_(8_xxgo9EatW' );
define( 'NONCE_KEY',        '@n0UP!`]`>L)5EkmrJlA]V46hn1fhDZ9Vr6SkOlgC1]s^R/F7*#sdA5RDH&?_#JC' );
define( 'AUTH_SALT',        '_!uuf&=wh0)D}{~6.z,0*+C|q1LwUo_0jC<:c#r(2zvrS$}9DT0<,CP|Vx[kymWv' );
define( 'SECURE_AUTH_SALT', '%x.m#F|=_cyMb,^~Ql5v>vRh`qMwNh5$OF]N7c2ID1m3o=l-$qcnblC{)]wCjhI~' );
define( 'LOGGED_IN_SALT',   'e<EN[J `RPAII)IKiG6pimQf4#XN5|G>VS M~J4LV6{7/X${U!t,8UW#JsLo;sq/' );
define( 'NONCE_SALT',       '[nl:Io<vcSM&Nc70:F`6(#7uTn%zg|f;6C.%<qc;/`E|6B:1>j+]sPua( fyvCXN' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
