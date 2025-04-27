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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('الوصول مقيد');

setlocale(LC_ALL, 'ar_SA');

// !!مهم!! أدخل '\' قبل أي حرف من الأحرف المحجوزة: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// أدخل '\\' مزدوجة قبل 't','r','n'
define('_TODAY', "\T\o\d\a\y G:i");
define('_YESTERDAY', "\Y\\e\s\\t\\e\\r\d\a\y G:i");
define('_MONTHDAY', 'j/n G:i');
define('_YEARMONTHDAY', 'Y/n/j G:i');
define('_ELAPSE', 'منذ %s');
define('_TIMEFORMAT_DESC', "التنسيقات الصالحة: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" أو \"custom\" - التنسيق يتم تحديده وفقًا للفترة الزمنية المعروضة; \"e\" - المنقضي; \"mysql\" - Y-m-d H:i:s;<br>" . "سلسلة محددة - راجع <a href=\"https://php.net/manual/ar/function.date.php\" rel=\"external\">دليل PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * محلي XOOPS
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 مشروع XOOPS (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * تنسيقات الأرقام
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * تنسيق العملة
     *
     * @param  string $format
     * @param  string $number
     * @return تنسيق العملة
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'ar_SA');

        return money_format($format, $number);
    }
}
