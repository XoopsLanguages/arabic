<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'مسارات XOOPS الفعلية');
define('LEGEND_DATABASE', 'ترميز قاعدة البيانات');

define('XOOPS_LIB_PATH_LABEL', 'دليل مكتبة XOOPS');
define('XOOPS_LIB_PATH_HELP', 'المسار الفعلي إلى دليل مكتبة XOOPS بدون شرطة مائلة في النهاية، لضمان التوافق المستقبلي. يفضل وضع هذا المجلد خارج ' . XOOPS_ROOT_PATH . ' لزيادة الأمان.');
define('XOOPS_DATA_PATH_LABEL', 'دليل ملفات بيانات XOOPS');
define('XOOPS_DATA_PATH_HELP', 'المسار الفعلي إلى دليل ملفات بيانات XOOPS (يجب أن يكون قابلاً للكتابة) بدون شرطة مائلة في النهاية، لضمان التوافق المستقبلي. يفضل وضع هذا المجلد خارج ' . XOOPS_ROOT_PATH . ' لزيادة الأمان.');

define('DB_COLLATION_LABEL', 'ترميز وتطابق الأحرف لقاعدة البيانات');
define('DB_COLLATION_HELP', "بدءًا من الإصدار 4.12 يدعم MySQL تعيين ترميزات وتطابق مخصص. ومع ذلك فإن هذه العملية أكثر تعقيداً مما هو متوقع، لذا لا تقم بأي تغيير ما لم تكن واثقًا من اختيارك.");
define('DB_COLLATION_NOCHANGE', 'عدم التغيير');

define('XOOPS_PATH_FOUND', 'تم العثور على المسار.');
define('ERR_COULD_NOT_ACCESS', 'تعذر الوصول إلى المجلد المحدد. يرجى التأكد من وجوده وأن الخادم يستطيع قراءته.');
define('CHECKING_PERMISSIONS', 'جارٍ التحقق من صلاحيات الملفات والمجلدات...');
define('ERR_NEED_WRITE_ACCESS', 'يجب منح الخادم صلاحيات الكتابة للملفات والمجلدات التالية<br>(مثال: <em>chmod 777 اسم_الدليل</em> على خادم UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s غير قابل للكتابة.');
define('IS_WRITABLE', '%s قابل للكتابة.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'حدث خطأ أثناء كتابة المحتوى إلى ملف mainfile.php، يرجى كتابة المحتوى يدويًا داخل ملف mainfile.php.');
