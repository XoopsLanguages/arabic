<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // اسم الوحدة
    define($constpref . '_NAME', 'الحماية (Protector)');

    // وصف مختصر للوحدة
    define($constpref . '_DESC', 'تحمي هذه الوحدة موقع XOOPS الخاص بك من هجمات مثل DoS، حقن SQL، وتلويث المتغيرات.');

    // القائمة
    define($constpref . '_ADMININDEX', 'مركز الحماية');
    define($constpref . '_ADVISORY', 'استشارات الأمان');
    define($constpref . '_PREFIXMANAGER', 'مدير البادئات');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'الصلاحيات');

    // الإعدادات
    define($constpref . '_GLOBAL_DISBL', 'تعطيل مؤقت');
    define($constpref . '_GLOBAL_DISBLDSC', 'تم تعطيل جميع وسائل الحماية مؤقتًا.<br>لا تنسَ إعادة تفعيلها بعد معالجة المشكلة.');

    define($constpref . '_DEFAULT_LANG', 'اللغة الافتراضية');
    define($constpref . '_DEFAULT_LANGDSC', 'حدد مجموعة اللغة لعرض الرسائل قبل معالجة common.php');

    define($constpref . '_RELIABLE_IPS', 'عناوين IP الموثوقة');
    define($constpref . '_RELIABLE_IPSDSC', 'حدد عناوين IP موثوقة مفصولة بعلامة | . ^ لمطابقة بداية السلسلة، $ لمطابقة نهايتها.');

    define($constpref . '_LOG_LEVEL', 'مستوى السجلات');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'مدة حظر IP (بالثواني)');

    define($constpref . '_LOGLEVEL0', 'لا شيء');
    define($constpref . '_LOGLEVEL15', 'هادئ');
    define($constpref . '_LOGLEVEL63', 'هادئ');
    define($constpref . '_LOGLEVEL255', 'كامل');

    define($constpref . '_HIJACK_TOPBIT', 'عدد البتات المحمية من عنوان IP للجلسة');
    define($constpref . '_HIJACK_TOPBITDSC', 'مكافحة اختطاف الجلسات:<br>القيمة الافتراضية 24/56 (لـ IPv4/IPv6).<br>إذا كان عنوان IP الخاص بك يتغير، حدد نطاق IP حسب عدد البتات.');

    define($constpref . '_HIJACK_DENYGP', 'المجموعات الممنوعة من تغيير IP أثناء الجلسة');
    define($constpref . '_HIJACK_DENYGPDSC', 'مكافحة اختطاف الجلسات:<br>اختر المجموعات التي يُمنع تغيير عنوان IP الخاص بها أثناء الجلسة.');

    define($constpref . '_SAN_NULLBYTE', 'تطهير Null Bytes');
    define($constpref . '_SAN_NULLBYTEDSC', 'يتم استبدال حرف النهاية "\\0" بمسافة.<br>(موصى به بشدة تفعيله)');

    define($constpref . '_DIE_NULLBYTE', 'إنهاء عند اكتشاف Null Bytes');
    define($constpref . '_DIE_NULLBYTEDSC', 'موصى به بشدة تفعيله.');

    define($constpref . '_DIE_BADEXT', 'إنهاء عند رفع ملفات بامتدادات خطرة');
    define($constpref . '_DIE_BADEXTDSC', 'إذا حاول أحد رفع ملفات بامتداد خطير مثل .php، يتم إيقاف عمل XOOPS.');

    define($constpref . '_CONTAMI_ACTION', 'الإجراء عند اكتشاف تلوث المتغيرات');
    define($constpref . '_CONTAMI_ACTIONDS', 'اختر الإجراء عند محاولة تلوث المتغيرات العامة.');

    define($constpref . '_ISOCOM_ACTION', 'الإجراء عند اكتشاف تعليق معزول (/*)');
    define($constpref . '_ISOCOM_ACTIONDSC', 'مكافحة حقن SQL:<br>الإجراء عند العثور على تعليق معزول.');

    define($constpref . '_UNION_ACTION', 'الإجراء عند اكتشاف UNION في الاستعلام');
    define($constpref . '_UNION_ACTIONDSC', 'مكافحة حقن SQL:<br>الإجراء عند العثور على عبارة UNION في SQL.');

    define($constpref . '_ID_INTVAL', 'فرض تحويل المتغيرات إلى أعداد صحيحة');
    define($constpref . '_ID_INTVALDSC', 'تعامل جميع المتغيرات المنتهية بـ id كأعداد صحيحة.');

    define($constpref . '_FILE_DOTDOT', 'حماية من التنقل عبر الدلائل');
    define($constpref . '_FILE_DOTDOTDSC', 'يحذف ".." من جميع الطلبات.');

    define($constpref . '_BF_COUNT', 'مكافحة محاولات الدخول القسري');
    define($constpref . '_BF_COUNTDSC', 'حدد عدد محاولات الدخول المسموحة خلال 10 دقائق.');

    define($constpref . '_BWLIMIT_COUNT', 'تحديد استهلاك عرض النطاق الترددي (Bandwidth)');
    define($constpref . '_BWLIMIT_COUNTDSC', 'حدد الحد الأقصى للطلبات إلى mainfile.php أثناء المراقبة.');

    define($constpref . '_DOS_SKIPMODS', 'استثناء وحدات من فحص DoS/Crawler');
    define($constpref . '_DOS_SKIPMODSDSC', 'حدد أسماء مجلدات الوحدات مفصولة بـ |.');

    define($constpref . '_DOS_EXPIRE', 'مدة المراقبة للحمل الثقيل (ثواني)');
    define($constpref . '_DOS_EXPIREDSC', 'مدة مراقبة الهجمات كثيفة التحديث.');

    define($constpref . '_DOS_F5COUNT', 'عدد النقرات غير المسموحة لهجوم F5');
    define($constpref . '_DOS_F5COUNTDSC', 'القيمة التي تحدد عدد مرات التحديث التي تعتبر هجوم F5.');

    define($constpref . '_DOS_F5ACTION', 'الإجراء ضد هجوم F5');

    define($constpref . '_DOS_CRCOUNT', 'عدد الطلبات غير المسموحة للعناكب (Crawlers)');
    define($constpref . '_DOS_CRCOUNTDSC', 'القيمة التي تحدد عدد الطلبات للعناكب المزعجة.');

    define($constpref . '_DOS_CRACTION', 'الإجراء ضد العناكب المزعجة');

    define($constpref . '_DOS_CRSAFE', 'User-Agent المسموح به');
    define($constpref . '_DOS_CRSAFEDSC', 'نمط تعبير منتظم لعناوين User-Agent المسموح بها.');

    define($constpref . '_OPT_NONE', 'لا شيء (تسجيل فقط)');
    define($constpref . '_OPT_SAN', 'تنظيف');
    define($constpref . '_OPT_EXIT', 'شاشة فارغة');
    define($constpref . '_OPT_BIP', 'حظر IP (دون حد)');
    define($constpref . '_OPT_BIPTIME0', 'حظر IP (مؤقت)');

    define($constpref . '_DOSOPT_NONE', 'لا شيء (تسجيل فقط)');
    define($constpref . '_DOSOPT_SLEEP', 'انتظار');
    define($constpref . '_DOSOPT_EXIT', 'شاشة فارغة');
    define($constpref . '_DOSOPT_BIP', 'حظر IP');
    define($constpref . '_DOSOPT_BIPTIME0', 'حظر IP مؤقت');
    define($constpref . '_DOSOPT_HTA', 'الرفض عبر .htaccess (تجريبي)');

    define($constpref . '_BIP_EXCEPT', 'المجموعات المستثناة من الحظر التلقائي');
    define($constpref . '_BIP_EXCEPTDSC', 'اختر المجموعات التي لن يتم حظر أعضائها حتى لو خالفوا الشروط.');

    define($constpref . '_DISABLES', 'تعطيل الميزات الخطرة في XOOPS');

    define($constpref . '_DBLAYERTRAP', 'تفعيل فخ طبقة قاعدة البيانات لمكافحة SQL Injection');
    define($constpref . '_DBLAYERTRAPDSC', 'يوصى بشدة بتفعيل هذه الخاصية.');

    define($constpref . '_DBTRAPWOSRV', 'عدم التحقق من متغيرات _SERVER');
    define($constpref . '_DBTRAPWOSRVDSC', 'يمكن تفعيل هذا الخيار إذا تسبب الفخ بأخطاء بسبب إعدادات الخادم.');

    define($constpref . '_BIGUMBRELLA', 'تفعيل مكافحة XSS (مظلة كبيرة)');
    define($constpref . '_BIGUMBRELLADSC', 'يوفر حماية ضد معظم هجمات XSS، لكنه ليس ضماناً بنسبة 100%.');

    define($constpref . '_SPAMURI4U', 'مكافحة السبام: عدد الروابط المسموح للمستخدمين العاديين');
    define($constpref . '_SPAMURI4UDSC', 'إذا تجاوز عدد الروابط هذا العدد في POST من مستخدم غير إداري، يعتبر سبام.');

    define($constpref . '_SPAMURI4G', 'مكافحة السبام: عدد الروابط المسموح للزوار');
    define($constpref . '_SPAMURI4GDSC', 'إذا تجاوز عدد الروابط هذا العدد في POST من زائر، يعتبر سبام.');

    // 3.40b
    define($constpref . '_ADMINHOME', 'الرئيسية');
    define($constpref . '_ADMINABOUT', 'عن الوحدة');

    // 3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'التحقق من السبام عبر StopForumSpam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'تحقق من بيانات POST بمقارنة قاعدة بيانات StopForumSpam.com. يتطلب مكتبة CURL.');

    // 3.60
    define($constpref . '_ADMINSTATS', 'نظرة عامة');
    define($constpref . '_BANIP_TIME0DSC', 'مدة التعليق (بالثواني) للحظر التلقائي لعناوين IP');
}
