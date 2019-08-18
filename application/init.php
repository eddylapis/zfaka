<?php
date_default_timezone_set('Asia/Chongqing');
define('ENV', strtoupper(ini_get('yaf.environ')));
define('VERSION', '1.4.3');
define('WEB_NAME',"ZFAKA平台");
define('URL_KEY', 'faG2#@@1');
define('CUR_DATE', date('Y-m-d'));
define('CUR_DATETIME', date('Y-m-d H:i:s'));
define('CUR_TIMESTAMP', time());
define('TB_PK',        'id');
define('TB_PREFIX',    't_');
define('ADMIN_DIR',    'Admin');
define('LIB_PATH',     APP_PATH.'/application/library/');
define('CORE_PATH',    LIB_PATH.'/Core/');
define('MODEL_PATH',   APP_PATH.'/application/model/');
define('FUNC_PATH',    APP_PATH.'/application/function/');
define('MEMBER_COMMON_PATH', APP_PATH . '/application/modules/Member/views/common/');
define('ADMIN_COMMON_PATH', APP_PATH . '/application/modules/'.ADMIN_DIR.'/views/common/');
define('TEMP_PATH',    APP_PATH.'/temp/');
define('UPLOAD_PATH', APP_PATH.'/public/res/upload/');
define('LOG_FILE',APP_PATH.'/log/php/'.CUR_DATE.'.log');
define('REQUEST_FILE',APP_PATH.'/log/request/'.CUR_DATE.'.log');
define('SQL_FILE',APP_PATH.'/log/sqld/'.CUR_DATE.'.log');
define('CRONTAB_FILE',APP_PATH.'/log/crontab/'.CUR_DATE.'.log');
define('YEWU_FILE',APP_PATH.'/log/yewu/'.CUR_DATE.'.log');
define('INSTALL_PATH',APP_PATH.'/install/');
define('INSTALL_LOCK',INSTALL_PATH.'install.lock');
error_reporting(0);
error_reporting(E_ALL ^E_NOTICE);
ini_set('display_errors', 'off');
ini_set('display_startup_errors',0);
ini_set('log_errors', 'on');
ini_set('error_log', LOG_FILE);