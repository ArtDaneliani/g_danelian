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
define( 'DB_NAME', 'danelian' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'gregor' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '28051950' );

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
define( 'AUTH_KEY',         '.s/6w0=UW]}s#Y{+dOY}?e9l2f=U=|.ef1><A;UFE9E//:C3JxW?)|iY3h$fT19X' );
define( 'SECURE_AUTH_KEY',  '(d&LB9=arjQ/3{CWYo(CO)Hymj7F|5:(#xKL#l<SP{Tl&:D89H5GDv}j`R }U-ZV' );
define( 'LOGGED_IN_KEY',    '|K9X`K/ySMv>L#(dkXqm`:0Hvg>/aF_BkN%{PHJvZ`I?xi!8Y+Y0nbg,)7Y*3YV1' );
define( 'NONCE_KEY',        'n,Obg|$0Z+woxJ-d:LO-}_;JP5.a^AZmwjith`hI0*%m5c>1N<tB_=FDux2(GNqc' );
define( 'AUTH_SALT',        'sV?:aC1q1sp_jVo]};2dvg<~vZUdtE!vEe`9p5`iJ=w3@dG;7_^wI gs(z$IkWJb' );
define( 'SECURE_AUTH_SALT', 'HoE&aw+&]o(qLVegmz;%,A_9r;)_=e*!,z>$@{~i6w7vFA%=D78yFfnH_D{P[eUr' );
define( 'LOGGED_IN_SALT',   '1;,32Td!Ct9UC%:|e6(Hgbh,OJ:b`31,L*C]TYo{1(Q$)O,u2k+b:jqpE6x0(%RZ' );
define( 'NONCE_SALT',       '*Ds>FeCaA6$tSsAlH{8Bq}P4@i8*qDIe<d0I{C)gvt5u)X=k.d@J{H7~sWAgnfSL' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'gd_';

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

//запрет обновлений плагинов
$DISABLE_UPDATE = array( 'advanced-custom-fields-pro/acf.php', 'classic-editor/classic-editor.php', 'visual-portfolio/class-visual-portfolio.php', 'duplicator/duplicator.php', 'cyr2lat/cyr-to-lat.php');




/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
