<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'إظهار/إخفاء نص المساعدة');

// License
//define('LICENSE_NOT_WRITEABLE', 'ملف الرخصة "%s" غير قابل للكتابة!');
//define('LICENSE_IS_WRITEABLE', 'رخصة %s قابلة للكتابة.');

// Configuration check page
define('SERVER_API', 'واجهة برمجة التطبيقات للخادم');
define('PHP_EXTENSION', 'امتداد %s');
define('CHAR_ENCODING', 'ترميز الأحرف');
define('XML_PARSING', 'تحليل XML');
define('REQUIREMENTS', 'المتطلبات');
define('_PHP_VERSION', 'إصدار PHP');
define('RECOMMENDED_SETTINGS', 'الإعدادات الموصى بها');
define('RECOMMENDED_EXTENSIONS', 'الامتدادات الموصى بها');
define('SETTING_NAME', 'اسم الإعداد');
define('RECOMMENDED', 'موصى به');
define('CURRENT', 'الحالي');
define('RECOMMENDED_EXTENSIONS_MSG', 'هذه الامتدادات ليست مطلوبة للاستخدام العادي، ولكن قد تكون ضرورية لاستكشاف
    بعض الميزات الخاصة (مثل دعم اللغات المتعددة أو RSS). لذلك، يُوصى بتثبيتها.');
define('NONE', 'لا شيء');
define('SUCCESS', 'نجاح');
define('WARNING', 'تحذير');
define('FAILED', 'فشل');

// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'معالج تثبيت XOOPS');
define('LANGUAGE_SELECTION', 'اختيار اللغة');
define('LANGUAGE_SELECTION_TITLE', 'اختر لغتك');        // L128
define('INTRODUCTION', 'مقدمة');
define('INTRODUCTION_TITLE', 'مرحبًا بك في معالج تثبيت XOOPS');        // L0
define('CONFIGURATION_CHECK', 'فحص الإعدادات');
define('CONFIGURATION_CHECK_TITLE', 'فحص إعدادات الخادم الخاص بك');
define('PATHS_SETTINGS', 'إعدادات المسارات');
define('PATHS_SETTINGS_TITLE', 'إعدادات المسارات');
define('DATABASE_CONNECTION', 'الاتصال بقاعدة البيانات');
define('DATABASE_CONNECTION_TITLE', 'الاتصال بقاعدة البيانات');
define('DATABASE_CONFIG', 'إعداد قاعدة البيانات');
define('DATABASE_CONFIG_TITLE', 'إعداد قاعدة البيانات');
define('CONFIG_SAVE', 'حفظ الإعدادات');
define('CONFIG_SAVE_TITLE', 'حفظ إعدادات النظام الخاص بك');
define('TABLES_CREATION', 'إنشاء الجداول');
define('TABLES_CREATION_TITLE', 'إنشاء جداول قاعدة البيانات');
define('INITIAL_SETTINGS', 'الإعدادات الأولية');
define('INITIAL_SETTINGS_TITLE', 'يرجى إدخال إعداداتك الأولية');
define('DATA_INSERTION', 'إدخال البيانات');
define('DATA_INSERTION_TITLE', 'حفظ إعداداتك في قاعدة البيانات');
define('WELCOME', 'مرحبًا');
define('WELCOME_TITLE', 'مرحبًا بك في موقع XOOPS الخاص بك');        // L0

// Settings (labels and help text)
define('XOOPS_PATHS', 'المسارات الفيزيائية لـ XOOPS');
define('XOOPS_URLS', 'مواقع الويب');
define('XOOPS_ROOT_PATH_LABEL', 'المسار الفيزيائي لجذر مستندات XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'المسار الفيزيائي لدليل مستندات XOOPS (المقدمة) بدون شرطة مائلة في النهاية');
define('XOOPS_LIB_PATH_LABEL', 'دليل مكتبة XOOPS');
define('XOOPS_LIB_PATH_HELP', 'المسار الفيزيائي لدليل مكتبة XOOPS بدون شرطة مائلة في النهاية، للتوافق المستقبلي. ضع المجلد خارج ' . XOOPS_ROOT_PATH_LABEL . ' لتأمينه.');
define('XOOPS_DATA_PATH_LABEL', 'دليل ملفات بيانات XOOPS');
define('XOOPS_DATA_PATH_HELP', 'المسار الفيزيائي لدليل ملفات بيانات XOOPS (القابلة للكتابة) بدون شرطة مائلة في النهاية، للتوافق المستقبلي. ضع المجلد خارج ' . XOOPS_ROOT_PATH_LABEL . ' لتأمينه.');
define('XOOPS_URL_LABEL', 'موقع الويب (URL)'); // L56
define('XOOPS_URL_HELP', 'عنوان URL الرئيسي الذي سيتم استخدامه للوصول إلى تثبيت XOOPS الخاص بك'); // L58
define('LEGEND_CONNECTION', 'اتصال الخادم');
define('LEGEND_DATABASE', 'قاعدة البيانات'); // L51
define('DB_HOST_LABEL', 'اسم مضيف الخادم');    // L27
define('DB_HOST_HELP', 'اسم مضيف خادم قاعدة البيانات. إذا لم تكن متأكدًا، فإن <em>localhost</em> يعمل في معظم الحالات'); // L67
define('DB_USER_LABEL', 'اسم المستخدم');    // L28
define('DB_USER_HELP', 'اسم حساب المستخدم الذي سيتم استخدامه للاتصال بخادم قاعدة البيانات'); // L65
define('DB_PASS_LABEL', 'كلمة المرور');    // L52
define('DB_PASS_HELP', 'كلمة مرور حساب مستخدم قاعدة البيانات الخاص بك'); // L68
define('DB_NAME_LABEL', 'اسم قاعدة البيانات');    // L29
define('DB_NAME_HELP', 'اسم قاعدة البيانات على المضيف. سيحاول المثبت إنشاء قاعدة البيانات إذا لم تكن موجودة'); // L64
define('DB_CHARSET_LABEL', 'مجموعة أحرف قاعدة البيانات');
define('DB_CHARSET_HELP', 'تتضمن MySQL دعمًا لمجموعة الأحرف التي تمكنك من تخزين البيانات باستخدام مجموعة متنوعة من مجموعات الأحرف وإجراء المقارنات وفقًا لمجموعة متنوعة من الترتيبات.');
define('DB_COLLATION_LABEL', 'ترتيب قاعدة البيانات');
define('DB_COLLATION_HELP', 'الترتيب هو مجموعة من القواعد لمقارنة الأحرف في مجموعة أحرف.');
define('DB_PREFIX_LABEL', 'بادئة الجدول');    // L30
define('DB_PREFIX_HELP', 'سيتم إضافة هذه البادئة إلى جميع الجداول الجديدة التي يتم إنشاؤها لتجنب تعارض الأسماء في قاعدة البيانات. إذا لم تكن متأكدًا، احتفظ بالإعداد الافتراضي'); // L63
define('DB_PCONNECT_LABEL', 'استخدام اتصال دائم');    // L54
define('DB_PCONNECT_HELP', "الافتراضي هو 'لا'. اتركه فارغًا إذا لم تكن متأكدًا"); // L69
define('DB_DATABASE_LABEL', 'قاعدة البيانات');
define('LEGEND_ADMIN_ACCOUNT', 'حساب المسؤول');
define('ADMIN_LOGIN_LABEL', 'تسجيل دخول المسؤول'); // L37
define('ADMIN_EMAIL_LABEL', 'بريد المسؤول الإلكتروني'); // L38
define('ADMIN_PASS_LABEL', 'كلمة مرور المسؤول'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'تأكيد كلمة المرور'); // L74

// Buttons
define('BUTTON_PREVIOUS', 'السابق'); // L42
define('BUTTON_NEXT', 'متابعة'); // L47

// Messages
define('XOOPS_FOUND', 'تم العثور على %s');
define('CHECKING_PERMISSIONS', 'فحص أذونات الملفات والأدلة...'); // L82
define('IS_NOT_WRITABLE', '%s غير قابل للكتابة.'); // L83
define('IS_WRITABLE', '%s قابل للكتابة.'); // L84
define('XOOPS_PATH_FOUND', 'تم العثور على المسار.');
//define('READY_CREATE_TABLES', 'لم يتم اكتشاف جداول XOOPS.<br>المثبت الآن جاهز لإنشاء جداول نظام XOOPS.');
define('XOOPS_TABLES_FOUND', 'جداول نظام XOOPS موجودة بالفعل في قاعدة البيانات الخاصة بك.'); // L131
define('XOOPS_TABLES_CREATED', 'تم إنشاء جداول نظام XOOPS.');
//define('READY_INSERT_DATA', 'المثبت الآن جاهز لإدراج البيانات الأولية في قاعدة البيانات الخاصة بك.');
//define('READY_SAVE_MAINFILE', 'المثبت الآن جاهز لحفظ الإعدادات المحددة في <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'تم حفظ الإعدادات');
define('SAVED_MAINFILE_MSG', 'قام المثبت بحفظ الإعدادات المحددة في <em>mainfile.php</em> و <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'تم العثور على بيانات XOOPS في قاعدة البيانات.');
define('DATA_INSERTED', 'تم إدراج البيانات الأولية في قاعدة البيانات.');
// %s is database name
define('DATABASE_CREATED', 'تم إنشاء قاعدة البيانات %s!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'غير قادر على إنشاء الجدول %s'); // L118
define('TABLE_CREATED', 'تم إنشاء الجدول %s.'); // L45
define('ROWS_INSERTED', 'تم إدراج %d إدخالات في الجدول %s.'); // L119
define('ROWS_FAILED', 'فشل إدراج %d إدخالات في الجدول %s.'); // L120
define('TABLE_ALTERED', 'تم تحديث الجدول %s.'); // L133
define('TABLE_NOT_ALTERED', 'فشل تحديث الجدول %s.'); // L134
define('TABLE_DROPPED', 'تم حذف الجدول %s.'); // L163
define('TABLE_NOT_DROPPED', 'فشل حذف الجدول %s.'); // L164

// Error messages
define('ERR_COULD_NOT_ACCESS', 'لا يمكن الوصول إلى المجلد المحدد. يرجى التحقق من وجوده وأنه قابل للقراءة بواسطة الخادم.');
define('ERR_NO_XOOPS_FOUND', 'لم يتم العثور على تثبيت XOOPS في المجلد المحدد.');
define('ERR_INVALID_EMAIL', 'بريد إلكتروني غير صالح'); // L73
define('ERR_REQUIRED', 'المعلومات مطلوبة.'); // L41
define('ERR_PASSWORD_MATCH', 'كلمتا المرور غير متطابقتين');
define('ERR_NEED_WRITE_ACCESS', 'يجب منح الخادم صلاحية الكتابة للملفات والمجلدات التالية<br>(مثل <em>chmod 775 directory_name</em> على خادم UNIX/LINUX)<br>إذا لم تكن متوفرة أو لم يتم إنشاؤها بشكل صحيح، يرجى إنشاؤها يدويًا وتعيين الأذونات المناسبة.');
define('ERR_NO_DATABASE', 'لا يمكن إنشاء قاعدة البيانات. اتصل بمدير الخادم للحصول على التفاصيل.'); // L31
define('ERR_NO_DBCONNECTION', 'لا يمكن الاتصال بخادم قاعدة البيانات.'); // L106
define('ERR_WRITING_CONSTANT', 'فشل كتابة الثابت %s.'); // L122
define('ERR_COPY_MAINFILE', 'لا يمكن نسخ ملف التوزيع إلى %s');
define('ERR_WRITE_MAINFILE', 'لا يمكن الكتابة في %s. يرجى التحقق من أذونات الملف وحاول مرة أخرى.');
define('ERR_READ_MAINFILE', 'لا يمكن فتح %s للقراءة');
define('ERR_INVALID_DBCHARSET', "مجموعة الأحرف '%s' غير مدعومة.");
define('ERR_INVALID_DBCOLLATION', "الترتيب '%s' غير مدعوم.");
define('ERR_CHARSET_NOT_SET', 'لم يتم تعيين مجموعة الأحرف الافتراضية لقاعدة بيانات XOOPS.');

define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'الدعم');
define('LOGIN', 'المصادقة');
define('LOGIN_TITLE', 'المصادقة');
define('USER_LOGIN', 'تسجيل دخول المسؤول');
define('USERNAME', 'اسم المستخدم:');
define('PASSWORD', 'كلمة المرور:');
define('ICONV_CONVERSION', 'تحويل مجموعة الأحرف');
define('ZLIB_COMPRESSION', 'ضغط Zlib');
define('IMAGE_FUNCTIONS', 'وظائف الصور');
define('IMAGE_METAS', 'بيانات وصفية للصور (exif)');
define('FILTER_FUNCTIONS', 'وظائف التصفية');
define('ADMIN_EXIST', 'حساب المسؤول موجود بالفعل.');
define('CONFIG_SITE', 'إعداد الموقع');
define('CONFIG_SITE_TITLE', 'إعداد الموقع');
define('MODULES', 'تثبيت الوحدات');
define('MODULES_TITLE', 'تثبيت الوحدات');
define('THEME', 'اختيار القالب');
define('THEME_TITLE', 'اختيار القالب الافتراضي');
define('INSTALLED_MODULES', 'تم تثبيت الوحدات التالية.');
define('NO_MODULES_FOUND', 'لم يتم العثور على وحدات.');
define('NO_INSTALLED_MODULES', 'لم يتم تثبيت أي وحدة.');
define('THEME_NO_SCREENSHOT', 'لم يتم العثور على لقطة شاشة');

define('IS_VALOR', ' => ');

// Password message
define('PASSWORD_LABEL', 'قوة كلمة المرور');
define('PASSWORD_DESC', 'لم يتم إدخال كلمة المرور');
define('PASSWORD_GENERATOR', 'مولد كلمات المرور');
define('PASSWORD_GENERATE', 'إنشاء');
define('PASSWORD_COPY', 'نسخ');
define('PASSWORD_VERY_WEAK', 'ضعيف جدًا');
define('PASSWORD_WEAK', 'ضعيف');
define('PASSWORD_BETTER', 'أفضل');
define('PASSWORD_MEDIUM', 'متوسط');
define('PASSWORD_STRONG', 'قوي');
define('PASSWORD_STRONGEST', 'الأقوى');

// 2.5.7
define('WRITTEN_LICENSE', 'تم كتابة مفتاح رخصة XOOPS %s: <strong>%s</strong>');

// 2.5.8
define('CHMOD_CHGRP_REPEAT', 'إعادة المحاولة');
define('CHMOD_CHGRP_IGNORE', 'استخدام على أي حال');
define('CHMOD_CHGRP_ERROR', 'قد لا يتمكن المثبت من كتابة ملف الإعدادات %1$s.<p>PHP يكتب الملفات تحت المستخدم %2$s والمجموعة %3$s.<p>الدليل %4$s/ لديه المستخدم %5$s والمجموعة %6$s');

// 2.5.9
define("CURL_HTTP", "مكتبة URL للعميل (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'نطاق ملفات تعريف الارتباط للموقع');
define('XOOPS_COOKIE_DOMAIN_HELP', 'النطاق لتعيين ملفات تعريف الارتباط. يمكن أن يكون فارغًا، أو المضيف الكامل من عنوان URL (www.example.com)، أو النطاق المسجل بدون نطاقات فرعية (example.com) للمشاركة عبر النطاقات الفرعية (www.example.com و blog.example.com.)');
define('INTL_SUPPORT', 'وظائف التدويل');
define('XOOPS_SOURCE_CODE', "XOOPS على GitHub");
define('XOOPS_INSTALLING', 'جارٍ التثبيت');
define('XOOPS_ERROR_ENCOUNTERED', 'خطأ');
define('XOOPS_ERROR_SEE_BELOW', 'انظر أدناه للرسائل.');
define('MODULES_AVAILABLE', 'الوحدات المتاحة');
define('INSTALL_THIS_MODULE', 'إضافة %s');

// 2.5.11
define('ERR_COPY_CONFIG_FILE', 'لا يمكن نسخ ملف الإعدادات %s');
