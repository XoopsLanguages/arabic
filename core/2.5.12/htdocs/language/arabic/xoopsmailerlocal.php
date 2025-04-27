<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('تم منع الوصول');

/**
 * توطين وظائف البريد الإلكتروني
 *
 * التوطين باللغة الإنجليزية هنا فقط لأغراض العرض
 */
// لا تغير اسم الكلاس
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * المُنشئ
     */
    public function __construct()
    {
        parent::__construct();
        // لا حاجة لتغيير ترميز الحروف (charset)
        $this->charSet = strtolower(_CHARSET);
        // يجب عليك تحديد رمز اللغة بحيث يوجد الملف: XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-["رمز-اللغة"].php
        $this->multimailer->setLanguage('en');
    }

    /**
     * يُنصح اللغات متعددة البايت بإنشاء طريقتها الخاصة لترميز اسم المرسل (FromName)
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // قم بتفعيل السطر التالي إذا لزم الأمر
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     * يُنصح اللغات متعددة البايت بإنشاء طريقتها الخاصة لترميز عنوان الموضوع (Subject)
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // قم بتفعيل السطر التالي إذا لزم الأمر
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
