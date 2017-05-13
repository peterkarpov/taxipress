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
define('DB_NAME', 'wp-denwer');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 's.adm.000');

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
define('AUTH_KEY',         'ObUB8~W -]Sk9|W)AT7nLw_Y+otzvU2hE]ykNVkJ<-u7fKcs[o*!ZOBCE8/ZU5;o');
define('SECURE_AUTH_KEY',  'ML?C8`D(0>s:,RuV2sy562}gwD|,AcZT-YE~_|:^w_%euKTLA:I;H~MWF?}]8xEz');
define('LOGGED_IN_KEY',    '>8 v+rd&Hg$BAn)T?Mufuv?+ &]~A{xMN/-Z?OZ:b@h{JRztq[7l1jwz%R.?jO}<');
define('NONCE_KEY',        '(B*bj-0!Usp1+Bl3lth|Ra2e*H=c`nAvB2r:gq)k.u6r  !08gkL,j@<?2mg@<IU');
define('AUTH_SALT',        'YpG!4h@Z/@p6.p:~Jt>d+3K _)od)&9d5dg$A66G)5ui>TL>?$MA=5F7dW?D^A>>');
define('SECURE_AUTH_SALT', 'yh@pzu_%iQ_1b6GC(>CA$|tuF[#8BDv|0hsgqF*r5,W!r9_-F.(`C{ghE[]n~_[*');
define('LOGGED_IN_SALT',   '4@<=7(&o7.c[(/Tg*]E7U)$Ig*>(_8bmTm#1Qa%U93yuDKVL`IDwJoE~}:&3y+0O');
define('NONCE_SALT',       '6-&9n9%0J<N]%qP+b)@v10V!&=hB}Lb?_*YdW#R8/29X*{rB_rF*=2)B)4]2Bd 2');

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
