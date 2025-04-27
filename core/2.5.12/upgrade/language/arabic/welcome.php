<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>مُرقي XOOPS</h2>

<p>
سيقوم <em>الترقية</em> بفحص تثبيت XOOPS هذا وتطبيق أي تصحيحات لازمة لجعله متوافقًا 
مع كود XOOPS الجديد. قد تشمل التصحيحات تغييرات في قاعدة البيانات، إضافة إعدادات افتراضية لعناصر 
التهيئة الجديدة، تحديثات الملفات والبيانات، وأكثر من ذلك.
<p>
بعد كل تصحيح، سيقوم المُرقي بالإبلاغ عن الحالة، وينتظر إدخالك للمتابعة. في نهاية الترقية، 
سيتم تمرير التحكم إلى وظيفة تحديث وحدة النظام.

<div class="alert alert-warning">
بمجرد اكتمال الترقية، لا تنسَ:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> حذف مجلد الترقية</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> تحديث أي وحدات تم تغييرها</li>
</ul>
</div>

EOT,
);
