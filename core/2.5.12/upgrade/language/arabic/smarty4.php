<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'ترحيل XOOPS إلى Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'نتائج الفحص');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'تشغيل الفحص');
define('_XOOPS_SMARTY4_SCANNER_END', 'إنهاء الفحص');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'القاعدة');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'التطابق');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'الملف');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'عدد التصحيحات');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'مراجعة يدوية مطلوبة');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'غير قابل للكتابة');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'خيارات إعادة الفحص');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'انقر على مربع "نعم" أدناه ثم اضغط على زر تشغيل الفحص لمحاولة تصحيح أي مشكلات تم العثور عليها تلقائيًا.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'تمييز كمكتمل');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'دليل القوالب (اختياري)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'امتداد القالب (اختياري)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12 يقدم تغييراً مهماً: الانتقال إلى Smarty 4</h3>

<p>للأسف، قد يتسبب هذا التغيير في تعطل بعض القوالب القديمة. لذلك، قبل متابعة الترقية، يرجى التأكد من اتباع الخطوات التالية:

<li>شغل ملف preflight.php لفحص القوالب أو قوالب الوحدات القديمة.</li>
<li>إذا تم اكتشاف أي مشكلات، راجع هذا المستند لفهم التعديلات اللازمة قبل متابعة الترقية.</li>
<li>بعد إجراء التعديلات المطلوبة، شغل ملف preflight.php مرة أخرى.</li>
<li>إذا لم يتم العثور على أي مشكلات أخرى، يمكنك بدء عملية الترقية.</li>
</p>
EOT,
);
