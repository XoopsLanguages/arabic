دليل المستخدم:

1 تحقق من الملف xoops_version.php الموجود في المسار /xoopseditor/ للتأكد من أنه أحدث من الملفات الموجودة لديك حاليًا.

2 ارفع المجلد /xoopseditor/ إلى /XOOPS/class/ ليصبح المسار النهائي /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 قم بتهيئة الإعدادات المفضلة حيثما ينطبق ذلك.
3.1 في المسار ./dhtmlext(جميع المحررات)/language/: أنشئ ملف اللغة المحلي الخاص بك بناءً على ملف english.php.
3.2 في المسار ./dhtmlext(جميع المحررات)/editor_registry.php: قم بتعيين إعدادات المحرر: الترتيب - ترتيب العرض في حالة استخدام تحديد المحرر، 0 للمعطل؛ nohtml - يعمل مع التركيبات غير النصية.
3.3 في المسار ./FCKeditor/module/: انسخ الملفات إلى مجلدات الوحدات في حالة الحاجة إلى أذونات رفع خاصة بالوحدة، وخيارات التخزين والمحرر.
3.3.1 في المسار ./FCKeditor/module/fckeditor.config.js: لخيارات المحرر، عادةً لا تحتاج إلى تغييره.
3.3.2 في المسار ./FCKeditor/module/fckeditor.connector.php: لتحديد المجلد الخاص باستعراض الملفات (وتخزين الرفع) => XOOPS/uploads/XOOPS_FCK_FOLDER/، المجلد مطلوب إنشاؤه يدويًا.
3.3.3 في المسار ./FCKeditor/module/fckeditor.upload.php: حدد أذونات الرفع وتخزين الرفع.
3.4 في المسار XOOPS/uploads/fckeditor/: قم بإنشاء المجلد إذا كان محرر FCKeditor مُفعّلاً، ويستخدم لعمليات الرفع من حيث لم يتم تحديد مجلد الرفع.
3.5 في المسار ./tinymce/tinymce/jscripts/: قم بتنزيل ملفات اللغة المحلية الخاصة بك من http://tinymce.moxiecode.com/language.php.

4 تحقق من أسماء الملفات: بالنسبة للأنظمة الحساسة لحالة الأحرف في أسماء الملفات، تأكد من أن لديك أسماء الملفات صحيحة تمامًا، على سبيل المثال، "FCKeditor" ليس مطابقًا لـ "fckeditor".

5 تحقق من الملف /xoopseditor/sampleform.inc.php للحصول على دليل التطوير.
