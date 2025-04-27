<div id="help-template" class="outer">
    <h1 class="head">المساعدة: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="العودة إلى إدارة الحماية"> الحماية <img src="<{xoAdminIcons 'home.png'}>" alt="العودة إلى إدارة الحماية"/></a></h1>
    <h4 class="odd">الوصف</h4>

    <p class="even">الحماية هي وحدة للدفاع عن نظام إدارة محتوى زووبس الخاص بك من مختلف الهجمات الخبيثة.</p>
    <h4 class="odd">التثبيت/الإزالة</h4>

    <p>أولاً، قم بتحديد XOOPS_TRUST_PATH في mainfile.php إذا لم تقم بذلك بعد.</p>
    <br>

    <p>انسخ html/modules/protector الموجود في الأرشيف إلى XOOPS_ROOT_PATH/modules/</p>

    <p>انسخ xoops_trust_path/modules/protector الموجود في الأرشيف إلى XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>اجعل صلاحية الكتابة ممكنة للمجلد XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= كيفية الإنقاذ =</h4>

    <p class="even">إذا تم حظرك من قبل الحماية، فما عليك سوى حذف الملفات الموجودة ضمن XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">مقدمة لمكونات التصفية الإضافية في هذا الأرشيف.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        مكون إضافي لمكافحة الرسائل غير المرغوب فيها.
        <br>
        سيتم رفض جميع المشاركات من عناوين IP المسجلة في RBL.
        <br>
        يمكن أن يبطئ هذا المكون الإضافي أداء المشاركات، وخاصة وحدات الدردشة.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        مكون إضافي لمكافحة الرسائل غير المرغوب فيها.
        <br>
        سيتم رفض جميع المشاركات من عناوين IP المسجلة في http:BL.
        <br>
        قبل استخدامه، احصل على HTTPBL_KEY من http://www.projecthoneypot.org/ وقم بتعيينه في ملف التصفية.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        مكون إضافي لمكافحة الرسائل غير المرغوب فيها.
        <br>
        سيتم رفض المشاركات التي لا تحتوي على أحرف متعددة البايتات.
        <br>
        هذا المكون الإضافي مخصص فقط لمواقع اللغات اليابانية والصينية التقليدية والصينية المبسطة والكورية.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        سيتم تنقية جميع بيانات المشاركات المرسلة من قبل الزوار بواسطة HTMLPurifier.
        <br>
        إذا كنت تسمح للزوار بنشر HTML، فإنني أوصي بشدة بتمكينه.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        يمنع هذا المكون الإضافي موقعك من تسجيل المستخدمين بواسطة الروبوتات.
        <br>
        يتطلب تشغيل JavaScript على متصفح الزوار.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        حدد رسالة للزوار الذين حاولوا كلمات مرور خاطئة أكثر من العدد المحدد من المرات.
        <br>
        جميع المكونات الإضافية التي تحمل الاسم *_message.php تحدد الرسالة لعمليات الوصول المرفوضة.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        عندما يعمل تقييد النطاق الترددي بشكل غير متوقع، يقوم هذا المكون الإضافي بتسجيله في سجل أخطاء Apache.
    </p>

    <p>جميع المكونات الإضافية التي تحمل الاسم *_errorlog.php تسجل بعض المعلومات في سجل أخطاء Apache.</p>
    <h4 class="odd">شرح</h4>

    <p class="even">الشرح قادم قريباً.</p>
</div>
