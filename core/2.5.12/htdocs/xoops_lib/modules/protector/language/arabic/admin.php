<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', 'الأذونات');
define('_MD_A_MYMENU_MYPREFERENCES', 'التفضيلات');

// index.php
define('_AM_TH_DATETIME', 'الوقت');
define('_AM_TH_USER', 'المستخدم');
define('_AM_TH_IP', 'عنوان IP');
define('_AM_TH_AGENT', 'الوكيل');
define('_AM_TH_TYPE', 'النوع');
define('_AM_TH_DESCRIPTION', 'الوصف');
define('_AM_TH_BADIPS', 'عناوين IP المحظورة<br><br><span style="font-weight:normal;">اكتب كل عنوان IP في سطر<br>فارغ يعني أن جميع عناوين IP مسموح بها</span>');
define('_AM_TH_GROUP1IPS', 'عناوين IP المسموح بها للمجموعة=1<br><br><span style="font-weight:normal;">اكتب كل عنوان IP في سطر.<br>192.168. يعني 192.168.*<br>فارغ يعني أن جميع عناوين IP مسموح بها</span>');
define('_AM_LABEL_COMPACTLOG', 'سجل مضغوط');
define('_AM_BUTTON_COMPACTLOG', 'اضغطه!');
define('_AM_JS_COMPACTLOGCONFIRM', 'سيتم إزالة السجلات المكررة (IP، النوع)');
define('_AM_LABEL_REMOVEALL', 'إزالة جميع السجلات');
define('_AM_BUTTON_REMOVEALL', 'إزالة الكل!');
define('_AM_JS_REMOVEALLCONFIRM', 'سيتم إزالة جميع السجلات نهائيًا. هل أنت موافق فعلاً؟');
define('_AM_LABEL_REMOVE', 'إزالة السجلات المحددة:');
define('_AM_BUTTON_REMOVE', 'إزالة!');
define('_AM_JS_REMOVECONFIRM', 'هل أنت موافق على الإزالة؟');
define('_AM_MSG_IPFILESUPDATED', 'تم تحديث ملفات عناوين IP');
define('_AM_MSG_BADIPSCANTOPEN', 'تعذر فتح ملف عناوين IP المحظورة');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'تعذر فتح ملف السماح للمجموعة=1');
define('_AM_MSG_REMOVED', 'تم إزالة السجلات');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'اجعل دليل الإعدادات قابلًا للكتابة: %s');

// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'مدير البادئة');
define('_AM_MSG_DBUPDATED', 'تم تحديث قاعدة البيانات بنجاح!');
define('_AM_CONFIRM_DELETE', 'سيتم حذف جميع البيانات. هل أنت موافق؟');
define('_AM_TXT_HOWTOCHANGEDB', "إذا كنت ترغب في تغيير البادئة،<br> قم بتعديل %s/data/secure.php يدويًا.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");

// advisory.php
define('_AM_ADV_NOTSECURE', 'غير آمن');
define('_AM_ADV_TRUSTPATHPUBLIC', 'إذا كنت تستطيع رؤية صورة -NG- أو إذا أعاد الرابط صفحة عادية، فإن XOOPS_TRUST_PATH لم يتم وضعه بشكل صحيح. أفضل مكان لـ XOOPS_TRUST_PATH هو خارج DocumentRoot. إذا لم تتمكن من ذلك، يجب وضع .htaccess (DENY FROM ALL) مباشرة تحت XOOPS_TRUST_PATH كأفضل طريقة بديلة.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'تحقق من أن ملفات PHP داخل TRUST_PATH تم ضبطها للقراءة فقط (يجب أن تكون خطأ 404، 403 أو 500)');
define('_AM_ADV_REGISTERGLOBALS', "إذا كان 'مفعل'، فإن هذا الإعداد يفتح الباب لمجموعة متنوعة من هجمات الحقن. إذا استطعت، قم بضبط 'register_globals off' في php.ini، أو إذا لم يكن ذلك ممكنًا، قم بإنشاء أو تعديل .htaccess في دليل XOOPS الخاص بك:");
define('_AM_ADV_ALLOWURLFOPEN', "إذا كان 'مفعل'، فإن هذا الإعداد يسمح للمهاجمين بتنفيذ نصوص عشوائية على خوادم بعيدة.<br>يمكن للمدير فقط تغيير هذا الخيار.<br>إذا كنت مديرًا، قم بتعديل php.ini أو httpd.conf.<br><b>مثال على httpd.conf:<br>   php_admin_flag   allow_url_fopen   off</b><br>وإلا، اطلب ذلك من مديريك.");
define('_AM_ADV_USETRANSSID', "إذا كان 'مفعل'، سيتم عرض معرف الجلسة الخاص بك في علامات الربط وما إلى ذلك.<br>لمنع اختطاف الجلسة، أضف سطرًا إلى .htaccess في XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX', "هذا الإعداد يفتح الباب لـ 'حقن SQL'.<br>لا تنسَ تفعيل 'فرض التنظيف *' في تفضيلات هذه الوحدة.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'انتقل إلى مدير البادئة');
define('_AM_ADV_MAINUNPATCHED', 'يجب عليك تعديل mainfile.php كما هو مكتوب في README.');
define('_AM_ADV_DBFACTORYPATCHED', 'مصنع قاعدة البيانات الخاص بك جاهز لتتبع طبقة قاعدة البيانات ضد حقن SQL');
define('_AM_ADV_DBFACTORYUNPATCHED', 'مصنع قاعدة البيانات الخاص بك غير جاهز لتتبع طبقة قاعدة البيانات ضد حقن SQL. بعض التصحيحات مطلوبة.');
define('_AM_ADV_SUBTITLECHECK', 'تحقق مما إذا كان الحامي يعمل بشكل جيد');
define('_AM_ADV_CHECKCONTAMI', 'التلوث');
define('_AM_ADV_CHECKISOCOM', 'التعليقات المعزولة');

// XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'وضع فيه السطر التالي:');

// XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'البادئة');
define('_AM_PROTECTOR_TABLES', 'الجداول');
define('_AM_PROTECTOR_UPDATED', 'تم التحديث');
define('_AM_PROTECTOR_COPY', 'نسخ');
define('_AM_PROTECTOR_ACTIONS', 'الإجراءات');

// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'حظر عناوين IP في السجلات المحددة:');
define('_AM_BUTTON_BAN_BY_IP', 'حظر IP!');
define('_AM_JS_BANCONFIRM', 'هل أنت موافق على حظر IP؟');
define('_AM_MSG_BANNEDIP', 'تم حظر عناوين IP');
define('_AM_ADMINSTATS_TITLE', 'ملخص سجل الحامي');

// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'الشهر الماضي');
define('_AM_ADMINSTATS_LAST_WEEK', 'الأسبوع الماضي');
define('_AM_ADMINSTATS_LAST_DAY', 'اليوم الماضي');
define('_AM_ADMINSTATS_LAST_HOUR', 'الساعة الماضية');
