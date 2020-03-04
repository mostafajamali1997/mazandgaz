<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jdf
{
    /** Software Hijri_Shamsi , Solar(Jalali) Date and Time
     * Copyright(C)2011, Reza Gholampanahi , http://jdf.scr.ir
     * version 2.55 :: 1391/08/24 = 1433/12/18 = 2012/11/15 */

    /*	F	*/
    function jdate($format, $timestamp = '', $none = '', $time_zone = 'Asia/Tehran', $tr_num = 'fa')
    {

        $T_sec = 0;/* <= п▒┘Ђп╣ п«пипД┘і п▓┘ЁпД┘є п│п▒┘ѕп▒ пї пепД пДп╣п»пДп» '+' ┘ѕ '-' пеп▒ пГп│пе пФпД┘є┘і┘Є */

        if ($time_zone != 'local') date_default_timezone_set(($time_zone == '') ? 'Asia/Tehran' : $time_zone);
        $ts = $T_sec + (($timestamp == '' or $timestamp == 'now') ? time() : $this->tr_num($timestamp));
        $date = explode('_', date('H_i_j_n_O_P_s_w_Y', $ts));
        list($j_y, $j_m, $j_d) = $this->gregorian_to_jalali($date[8], $date[3], $date[2]);
        $doy = ($j_m < 7) ? (($j_m - 1) * 31) + $j_d - 1 : (($j_m - 7) * 30) + $j_d + 185;
        $kab = ($j_y % 33 % 4 - 1 == (int)($j_y % 33 * .05)) ? 1 : 0;
        $sl = strlen($format);
        $out = '';
        for ($i = 0; $i < $sl; $i++) {
            $sub = substr($format, $i, 1);
            if ($sub == '\\') {
                $out .= substr($format, ++$i, 1);
                continue;
            }
            switch ($sub) {

                case'E':
                case'R':
                case'x':
                case'X':
                    $out .= 'http://jdf.scr.ir';
                    break;

                case'B':
                case'e':
                case'g':
                case'G':
                case'h':
                case'I':
                case'T':
                case'u':
                case'Z':
                    $out .= date($sub, $ts);
                    break;

                case'a':
                    $out .= ($date[0] < 12) ? '┘ѓ.пИ' : 'пе.пИ';
                    break;

                case'A':
                    $out .= ($date[0] < 12) ? '┘ѓпе┘ё пДп▓ пИ┘Єп▒' : 'пеп╣п» пДп▓ пИ┘Єп▒';
                    break;

                case'b':
                    $out .= (int)($j_m / 3.1) + 1;
                    break;

                case'c':
                    $out .= $j_y . '/' . $j_m . '/' . $j_d . ' пї' . $date[0] . ':' . $date[1] . ':' . $date[6] . ' ' . $date[5];
                    break;

                case'C':
                    $out .= (int)(($j_y + 99) / 100);
                    break;

                case'd':
                    $out .= ($j_d < 10) ? '0' . $j_d : $j_d;
                    break;

                case'D':
                    $out .= $this->jdate_words(array('kh' => $date[7]), ' ');
                    break;

                case'f':
                    $out .= $this->jdate_words(array('ff' => $j_m), ' ');
                    break;

                case'F':
                    $out .= $this->jdate_words(array('mm' => $j_m), ' ');
                    break;

                case'H':
                    $out .= $date[0];
                    break;

                case'i':
                    $out .= $date[1];
                    break;

                case'j':
                    $out .= $j_d;
                    break;

                case'J':
                    $out .= $this->jdate_words(array('rr' => $j_d), ' ');
                    break;

                case'k';
                    $out .= $this->tr_num(100 - (int)($doy / ($kab + 365) * 1000) / 10, $tr_num);
                    break;

                case'K':
                    $out .= $this->tr_num((int)($doy / ($kab + 365) * 1000) / 10, $tr_num);
                    break;

                case'l':
                    $out .= $this->jdate_words(array('rh' => $date[7]), ' ');
                    break;

                case'L':
                    $out .= $kab;
                    break;

                case'm':
                    $out .= ($j_m > 9) ? $j_m : '0' . $j_m;
                    break;

                case'M':
                    $out .= $this->jdate_words(array('km' => $j_m), ' ');
                    break;

                case'n':
                    $out .= $j_m;
                    break;

                case'N':
                    $out .= $date[7] + 1;
                    break;

                case'o':
                    $jdw = ($date[7] == 6) ? 0 : $date[7] + 1;
                    $dny = 364 + $kab - $doy;
                    $out .= ($jdw > ($doy + 3) and $doy < 3) ? $j_y - 1 : (((3 - $dny) > $jdw and $dny < 3) ? $j_y + 1 : $j_y);
                    break;

                case'O':
                    $out .= $date[4];
                    break;

                case'p':
                    $out .= $this->jdate_words(array('mb' => $j_m), ' ');
                    break;

                case'P':
                    $out .= $date[5];
                    break;

                case'q':
                    $out .= $this->jdate_words(array('sh' => $j_y), ' ');
                    break;

                case'Q':
                    $out .= $kab + 364 - $doy;
                    break;

                case'r':
                    $key = $this->jdate_words(array('rh' => $date[7], 'mm' => $j_m));
                    $out .= $date[0] . ':' . $date[1] . ':' . $date[6] . ' ' . $date[4]
                        . ' ' . $key['rh'] . 'пї ' . $j_d . ' ' . $key['mm'] . ' ' . $j_y;
                    break;

                case's':
                    $out .= $date[6];
                    break;

                case'S':
                    $out .= 'пД┘Ё';
                    break;

                case't':
                    $out .= ($j_m != 12) ? (31 - (int)($j_m / 6.5)) : ($kab + 29);
                    break;

                case'U':
                    $out .= $ts;
                    break;

                case'v':
                    $out .= $this->jdate_words(array('ss' => substr($j_y, 2, 2)), ' ');
                    break;

                case'V':
                    $out .= $this->jdate_words(array('ss' => $j_y), ' ');
                    break;

                case'w':
                    $out .= ($date[7] == 6) ? 0 : $date[7] + 1;
                    break;

                case'W':
                    $avs = (($date[7] == 6) ? 0 : $date[7] + 1) - ($doy % 7);
                    if ($avs < 0) $avs += 7;
                    $num = (int)(($doy + $avs) / 7);
                    if ($avs < 4) {
                        $num++;
                    } elseif ($num < 1) {
                        $num = ($avs == 4 or $avs == (($j_y % 33 % 4 - 2 == (int)($j_y % 33 * .05)) ? 5 : 4)) ? 53 : 52;
                    }
                    $aks = $avs + $kab;
                    if ($aks == 7) $aks = 0;
                    $out .= (($kab + 363 - $doy) < $aks and $aks < 3) ? '01' : (($num < 10) ? '0' . $num : $num);
                    break;

                case'y':
                    $out .= substr($j_y, 2, 2);
                    break;

                case'Y':
                    $out .= $j_y;
                    break;

                case'z':
                    $out .= $doy;
                    break;

                default:
                    $out .= $sub;
            }
        }
        return ($tr_num != 'en') ? $this->tr_num($out, 'fa', '.') : $out;
    }

    /*	F	*/
    function jstrftime($format, $timestamp = '', $none = '', $time_zone = 'Asia/Tehran', $tr_num = 'fa')
    {

        $T_sec = 0;/* <= п▒┘Ђп╣ п«пипД┘і п▓┘ЁпД┘є п│п▒┘ѕп▒ пї пепД пДп╣п»пДп» '+' ┘ѕ '-' пеп▒ пГп│пе пФпД┘є┘і┘Є */

        if ($time_zone != 'local') date_default_timezone_set(($time_zone == '') ? 'Asia/Tehran' : $time_zone);
        $ts = $T_sec + (($timestamp == '' or $timestamp == 'now') ? time() : $this->tr_num($timestamp));
        $date = explode('_', date('h_H_i_j_n_s_w_Y', $ts));
        list($j_y, $j_m, $j_d) = $this->gregorian_to_jalali($date[7], $date[4], $date[3]);
        $doy = ($j_m < 7) ? (($j_m - 1) * 31) + $j_d - 1 : (($j_m - 7) * 30) + $j_d + 185;
        $kab = ($j_y % 33 % 4 - 1 == (int)($j_y % 33 * .05)) ? 1 : 0;
        $sl = strlen($format);
        $out = '';
        for ($i = 0; $i < $sl; $i++) {
            $sub = substr($format, $i, 1);
            if ($sub == '%') {
                $sub = substr($format, ++$i, 1);
            } else {
                $out .= $sub;
                continue;
            }
            switch ($sub) {

                /* Day */
                case'a':
                    $out .= $this->jdate_words(array('kh' => $date[6]), ' ');
                    break;

                case'A':
                    $out .= $this->jdate_words(array('rh' => $date[6]), ' ');
                    break;

                case'd':
                    $out .= ($j_d < 10) ? '0' . $j_d : $j_d;
                    break;

                case'e':
                    $out .= ($j_d < 10) ? ' ' . $j_d : $j_d;
                    break;

                case'j':
                    $out .= str_pad($doy + 1, 3, 0, STR_PAD_LEFT);
                    break;

                case'u':
                    $out .= $date[6] + 1;
                    break;

                case'w':
                    $out .= ($date[6] == 6) ? 0 : $date[6] + 1;
                    break;

                /* Week */
                case'U':
                    $avs = (($date[6] < 5) ? $date[6] + 2 : $date[6] - 5) - ($doy % 7);
                    if ($avs < 0) $avs += 7;
                    $num = (int)(($doy + $avs) / 7) + 1;
                    if ($avs > 3 or $avs == 1) $num--;
                    $out .= ($num < 10) ? '0' . $num : $num;
                    break;

                case'V':
                    $avs = (($date[6] == 6) ? 0 : $date[6] + 1) - ($doy % 7);
                    if ($avs < 0) $avs += 7;
                    $num = (int)(($doy + $avs) / 7);
                    if ($avs < 4) {
                        $num++;
                    } elseif ($num < 1) {
                        $num = ($avs == 4 or $avs == (($j_y % 33 % 4 - 2 == (int)($j_y % 33 * .05)) ? 5 : 4)) ? 53 : 52;
                    }
                    $aks = $avs + $kab;
                    if ($aks == 7) $aks = 0;
                    $out .= (($kab + 363 - $doy) < $aks and $aks < 3) ? '01' : (($num < 10) ? '0' . $num : $num);
                    break;

                case'W':
                    $avs = (($date[6] == 6) ? 0 : $date[6] + 1) - ($doy % 7);
                    if ($avs < 0) $avs += 7;
                    $num = (int)(($doy + $avs) / 7) + 1;
                    if ($avs > 3) $num--;
                    $out .= ($num < 10) ? '0' . $num : $num;
                    break;

                /* Month */
                case'b':
                case'h':
                    $out .= $this->jdate_words(array('km' => $j_m), ' ');
                    break;

                case'B':
                    $out .= $this->jdate_words(array('mm' => $j_m), ' ');
                    break;

                case'm':
                    $out .= ($j_m > 9) ? $j_m : '0' . $j_m;
                    break;

                /* Year */
                case'C':
                    $out .= substr($j_y, 0, 2);
                    break;

                case'g':
                    $jdw = ($date[6] == 6) ? 0 : $date[6] + 1;
                    $dny = 364 + $kab - $doy;
                    $out .= substr(($jdw > ($doy + 3) and $doy < 3) ? $j_y - 1 : (((3 - $dny) > $jdw and $dny < 3) ? $j_y + 1 : $j_y), 2, 2);
                    break;

                case'G':
                    $jdw = ($date[6] == 6) ? 0 : $date[6] + 1;
                    $dny = 364 + $kab - $doy;
                    $out .= ($jdw > ($doy + 3) and $doy < 3) ? $j_y - 1 : (((3 - $dny) > $jdw and $dny < 3) ? $j_y + 1 : $j_y);
                    break;

                case'y':
                    $out .= substr($j_y, 2, 2);
                    break;

                case'Y':
                    $out .= $j_y;
                    break;

                /* Time */
                case'H':
                    $out .= $date[1];
                    break;

                case'I':
                    $out .= $date[0];
                    break;

                case'l':
                    $out .= ($date[0] > 9) ? $date[0] : ' ' . (int)$date[0];
                    break;

                case'M':
                    $out .= $date[2];
                    break;

                case'p':
                    $out .= ($date[1] < 12) ? '┘ѓпе┘ё пДп▓ пИ┘Єп▒' : 'пеп╣п» пДп▓ пИ┘Єп▒';
                    break;

                case'P':
                    $out .= ($date[1] < 12) ? '┘ѓ.пИ' : 'пе.пИ';
                    break;

                case'r':
                    $out .= $date[0] . ':' . $date[2] . ':' . $date[5] . ' ' . (($date[1] < 12) ? '┘ѓпе┘ё пДп▓ пИ┘Єп▒' : 'пеп╣п» пДп▓ пИ┘Єп▒');
                    break;

                case'R':
                    $out .= $date[1] . ':' . $date[2];
                    break;

                case'S':
                    $out .= $date[5];
                    break;

                case'T':
                    $out .= $date[1] . ':' . $date[2] . ':' . $date[5];
                    break;

                case'X':
                    $out .= $date[0] . ':' . $date[2] . ':' . $date[5];
                    break;

                case'z':
                    $out .= date('O', $ts);
                    break;

                case'Z':
                    $out .= date('T', $ts);
                    break;

                /* Time and Date Stamps */
                case'c':
                    $key = $this->jdate_words(array('rh' => $date[6], 'mm' => $j_m));
                    $out .= $date[1] . ':' . $date[2] . ':' . $date[5] . ' ' . date('P', $ts)
                        . ' ' . $key['rh'] . 'пї ' . $j_d . ' ' . $key['mm'] . ' ' . $j_y;
                    break;

                case'D':
                    $out .= substr($j_y, 2, 2) . '/' . (($j_m > 9) ? $j_m : '0' . $j_m) . '/' . (($j_d < 10) ? '0' . $j_d : $j_d);
                    break;

                case'F':
                    $out .= $j_y . '-' . (($j_m > 9) ? $j_m : '0' . $j_m) . '-' . (($j_d < 10) ? '0' . $j_d : $j_d);
                    break;

                case's':
                    $out .= $ts;
                    break;

                case'x':
                    $out .= substr($j_y, 2, 2) . '/' . (($j_m > 9) ? $j_m : '0' . $j_m) . '/' . (($j_d < 10) ? '0' . $j_d : $j_d);
                    break;

                /* Miscellaneous */
                case'n':
                    $out .= "\n";
                    break;

                case't':
                    $out .= "\t";
                    break;

                case'%':
                    $out .= '%';
                    break;

                default:
                    $out .= $sub;
            }
        }
        return ($tr_num != 'en') ? $this->tr_num($out, 'fa', '.') : $out;
    }

    /*	F	*/
    function jmktime($h = '', $m = '', $s = '', $jm = '', $jd = '', $jy = '', $is_dst = -1)
    {
        $h = $this->tr_num($h);
        $m = $this->tr_num($m);
        $s = $this->tr_num($s);
        $jm = $this->tr_num($jm);
        $jd = $this->tr_num($jd);
        $jy = $this->tr_num($jy);
        if ($h == '' and $m == '' and $s == '' and $jm == '' and $jd == '' and $jy == '') {
            return mktime();
        } else {
            list($year, $month, $day) = $this->jalali_to_gregorian($jy, $jm, $jd);
            return mktime($h, $m, $s, $month, $day, $year, $is_dst);
        }
    }

    /*	F	*/
    function jgetdate($timestamp = '', $none = '', $tz = 'Asia/Tehran', $tn = 'en')
    {
        $ts = ($timestamp == '') ? time() : $this->tr_num($timestamp);
        $jdate = explode('_', $this->jdate('F_G_i_j_l_n_s_w_Y_z', $ts, '', $tz, $tn));
        return array(
            'seconds' => $this->tr_num((int)$this->tr_num($jdate[6]), $tn),
            'minutes' => $this->tr_num((int)$this->tr_num($jdate[2]), $tn),
            'hours' => $jdate[1],
            'mday' => $jdate[3],
            'wday' => $jdate[7],
            'mon' => $jdate[5],
            'year' => $jdate[8],
            'yday' => $jdate[9],
            'weekday' => $jdate[4],
            'month' => $jdate[0],
            0 => $this->tr_num($ts, $tn)
        );
    }

    /*	F	*/
    function jcheckdate($jm, $jd, $jy)
    {
        $jm = $this->tr_num($jm);
        $jd = $this->tr_num($jd);
        $jy = $this->tr_num($jy);
        $l_d = ($jm == 12) ? (($jy % 33 % 4 - 1 == (int)($jy % 33 * .05)) ? 30 : 29) : 31 - (int)($jm / 6.5);
        return ($jm > 0 and $jd > 0 and $jy > 0 and $jm < 13 and $jd <= $l_d) ? true : false;
    }

    /*	F	*/
    function tr_num($str, $mod = 'en', $mf = '┘Ф')
    {
        $num_a = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');
        $key_a = array('█░', '█▒', '█▓', '█│', '█┤', '█х', '█Х', '█и', '█И', '█╣', $mf);
        return ($mod == 'fa') ? str_replace($num_a, $key_a, $str) : str_replace($key_a, $num_a, $str);
    }

    /*	F	*/
    function jdate_words($array, $mod = '')
    {
        foreach ($array as $type => $num) {
            $num = (int)$this->tr_num($num);
            switch ($type) {

                case'ss':
                    $sl = strlen($num);
                    $xy3 = substr($num, 2 - $sl, 1);
                    $h3 = $h34 = $h4 = '';
                    if ($xy3 == 1) {
                        $p34 = '';
                        $k34 = array('п»┘Є', '█їпДп▓п»┘Є', 'п»┘ѕпДп▓п»┘Є', 'п│█їп▓п»┘Є', '┌є┘ЄпДп▒п»┘Є', '┘ЙпД┘єп▓п»┘Є', 'п┤пД┘єп▓п»┘Є', '┘Є┘Ђп»┘Є', '┘Єпгп»┘Є', '┘є┘ѕп▓п»┘Є');
                        $h34 = $k34[substr($num, 2 - $sl, 2) - 10];
                    } else {
                        $xy4 = substr($num, 3 - $sl, 1);
                        $p34 = ($xy3 == 0 or $xy4 == 0) ? '' : ' ┘ѕ ';
                        $k3 = array('', '', 'пе█їп│пф', 'п│█ї', '┌є┘Є┘ё', '┘Й┘єпгпД┘Є', 'п┤пхпф', '┘Є┘ЂпфпДп»', '┘Єп┤пфпДп»', '┘є┘ѕп»');
                        $h3 = $k3[$xy3];
                        $k4 = array('', '█ї┌Е', 'п»┘ѕ', 'п│┘Є', '┌є┘ЄпДп▒', '┘Й┘єпг', 'п┤п┤', '┘Є┘Ђпф', '┘Єп┤пф', '┘є┘Є');
                        $h4 = $k4[$xy4];
                    }
                    $array[$type] = (($num > 99) ? str_ireplace(array('12', '13', '14', '19', '20')
                                , array('┘Єп▓пДп▒ ┘ѕ п»┘ѕ█їп│пф', '┘Єп▓пДп▒ ┘ѕ п│█їпхп»', '┘Єп▓пДп▒ ┘ѕ ┌є┘ЄпДп▒пхп»', '┘Єп▓пДп▒ ┘ѕ ┘є┘Єпхп»', 'п»┘ѕ┘Єп▓пДп▒')
                                , substr($num, 0, 2)) . ((substr($num, 2, 2) == '00') ? '' : ' ┘ѕ ') : '') . $h3 . $p34 . $h34 . $h4;
                    break;

                case'mm':
                    $key = array
                    ('┘Ђп▒┘ѕп▒п»█ї┘є', 'пДп▒п»█їпе┘Єп┤пф', 'п«п▒п»пДп»', 'пф█їп▒', '┘Ёп▒п»пДп»', 'п┤┘Єп▒█ї┘ѕп▒', '┘Ё┘Єп▒', 'пбпепД┘є', 'пбп░п▒', 'п»█ї', 'пе┘Є┘Ё┘є', 'пДп│┘Ђ┘єп»');
                    $array[$type] = $key[$num - 1];
                    break;

                case'rr':
                    $key = array('█ї┌Е', 'п»┘ѕ', 'п│┘Є', '┌є┘ЄпДп▒', '┘Й┘єпг', 'п┤п┤', '┘Є┘Ђпф', '┘Єп┤пф', '┘є┘Є', 'п»┘Є', '█їпДп▓п»┘Є', 'п»┘ѕпДп▓п»┘Є', 'п│█їп▓п»┘Є',
                        '┌є┘ЄпДп▒п»┘Є', '┘ЙпД┘єп▓п»┘Є', 'п┤пД┘єп▓п»┘Є', '┘Є┘Ђп»┘Є', '┘Єпгп»┘Є', '┘є┘ѕп▓п»┘Є', 'пе█їп│пф', 'пе█їп│пф ┘ѕ █ї┌Е', 'пе█їп│пф ┘ѕ п»┘ѕ', 'пе█їп│пф ┘ѕ п│┘Є',
                        'пе█їп│пф ┘ѕ ┌є┘ЄпДп▒', 'пе█їп│пф ┘ѕ ┘Й┘єпг', 'пе█їп│пф ┘ѕ п┤п┤', 'пе█їп│пф ┘ѕ ┘Є┘Ђпф', 'пе█їп│пф ┘ѕ ┘Єп┤пф', 'пе█їп│пф ┘ѕ ┘є┘Є', 'п│█ї', 'п│█ї ┘ѕ █ї┌Е');
                    $array[$type] = $key[$num - 1];
                    break;

                case'rh':
                    $key = array('█ї┌Еп┤┘єпе┘Є', 'п»┘ѕп┤┘єпе┘Є', 'п│┘Є п┤┘єпе┘Є', '┌є┘ЄпДп▒п┤┘єпе┘Є', '┘Й┘єпгп┤┘єпе┘Є', 'пг┘Ёп╣┘Є', 'п┤┘єпе┘Є');
                    $array[$type] = $key[$num];
                    break;

                case'sh':
                    $key = array('┘ЁпДп▒', 'пДп│пе', '┌»┘ѕп│┘Ђ┘єп»', '┘Ё█ї┘Ё┘ѕ┘є', '┘Ёп▒п║', 'п│┌»', 'п«┘ѕ┌Е', '┘Ё┘ѕп┤', '┌»пД┘ѕ', '┘Й┘ё┘є┌»', 'п«п▒┌»┘ѕп┤', '┘є┘Є┘є┌»');
                    $array[$type] = $key[$num % 12];
                    break;

                case'mb':
                    $key = array('пГ┘Ё┘ё', 'пФ┘ѕп▒', 'пг┘ѕп▓пД', 'п│п▒пипД┘є', 'пДп│п»', 'п│┘єпе┘ё┘Є', '┘Ё█їп▓пД┘є', 'п╣┘ѓп▒пе', '┘ѓ┘ѕп│', 'пгп»█ї', 'п»┘ё┘ѕ', 'пГ┘ѕпф');
                    $array[$type] = $key[$num - 1];
                    break;

                case'ff':
                    $key = array('пе┘ЄпДп▒', 'пфпДпеп│пфпД┘є', '┘ЙпД█ї█їп▓', 'п▓┘Ёп│пфпД┘є');
                    $array[$type] = $key[(int)($num / 3.1)];
                    break;

                case'km':
                    $key = array('┘Ђп▒', 'пДп▒', 'п«п▒', 'пф█їРђЇ', '┘Ёп▒', 'п┤┘ЄРђЇ', '┘Ё┘ЄРђЇ', 'пбпеРђЇ', 'пбп░', 'п»█ї', 'пе┘ЄРђЇ', 'пДп│РђЇ');
                    $array[$type] = $key[$num - 1];
                    break;

                case'kh':
                    $key = array('█ї', 'п»', 'п│', '┌є', '┘Й', 'пг', 'п┤');
                    $array[$type] = $key[$num];
                    break;

                default:
                    $array[$type] = $num;
            }
        }
        return ($mod == '') ? $array : implode($mod, $array);
    }

    /** Convertor from and to Gregorian and Jalali (Hijri_Shamsi,Solar) Functions
     * Copyright(C)2011, Reza Gholampanahi [ http://jdf.scr.ir/jdf ] version 2.50 */

    /*	F	*/
    function gregorian_to_jalali($g_y, $g_m, $g_d, $mod = '')
    {
        $g_y = $this->tr_num($g_y);
        $g_m = $this->tr_num($g_m);
        $g_d = $this->tr_num($g_d);/* <= :пД┘і┘є п│пип▒ пї пгп▓пА пфпДпеп╣ пДпх┘ё┘і ┘є┘іп│пф */
        $d_4 = $g_y % 4;
        $g_a = array(0, 0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334);
        $doy_g = $g_a[(int)$g_m] + $g_d;
        if ($d_4 == 0 and $g_m > 2) $doy_g++;
        $d_33 = (int)((($g_y - 16) % 132) * .0305);
        $a = ($d_33 == 3 or $d_33 < ($d_4 - 1) or $d_4 == 0) ? 286 : 287;
        $b = (($d_33 == 1 or $d_33 == 2) and ($d_33 == $d_4 or $d_4 == 1)) ? 78 : (($d_33 == 3 and $d_4 == 0) ? 80 : 79);
        if ((int)(($g_y - 10) / 63) == 30) {
            $a--;
            $b++;
        }
        if ($doy_g > $b) {
            $jy = $g_y - 621;
            $doy_j = $doy_g - $b;
        } else {
            $jy = $g_y - 622;
            $doy_j = $doy_g + $a;
        }
        if ($doy_j < 187) {
            $jm = (int)(($doy_j - 1) / 31);
            $jd = $doy_j - (31 * $jm++);
        } else {
            $jm = (int)(($doy_j - 187) / 30);
            $jd = $doy_j - 186 - ($jm * 30);
            $jm += 7;
        }
        return ($mod == '') ? array($jy, $jm, $jd) : $jy . $mod . $jm . $mod . $jd;
    }

    /*	F	*/
    function jalali_to_gregorian($j_y, $j_m, $j_d, $mod = '')
    {
        $j_y = $this->tr_num($j_y);
        $j_m = $this->tr_num($j_m);
        $j_d = $this->tr_num($j_d);/* <= :пД┘і┘є п│пип▒ пї пгп▓пА пфпДпеп╣ пДпх┘ё┘і ┘є┘іп│пф */
        $d_4 = ($j_y + 1) % 4;
        $doy_j = ($j_m < 7) ? (($j_m - 1) * 31) + $j_d : (($j_m - 7) * 30) + $j_d + 186;
        $d_33 = (int)((($j_y - 55) % 132) * .0305);
        $a = ($d_33 != 3 and $d_4 <= $d_33) ? 287 : 286;
        $b = (($d_33 == 1 or $d_33 == 2) and ($d_33 == $d_4 or $d_4 == 1)) ? 78 : (($d_33 == 3 and $d_4 == 0) ? 80 : 79);
        if ((int)(($j_y - 19) / 63) == 20) {
            $a--;
            $b++;
        }
        if ($doy_j <= $a) {
            $gy = $j_y + 621;
            $gd = $doy_j + $b;
        } else {
            $gy = $j_y + 622;
            $gd = $doy_j - $a;
        }
        foreach (array(0, 31, ($gy % 4 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31) as $gm => $v) {
            if ($gd <= $v) break;
            $gd -= $v;
        }
        return ($mod == '') ? array($gy, $gm, $gd) : $gy . $mod . $gm . $mod . $gd;
    }
}

/* [ jdf.php ] version 2.55 ?> Download new version from [ http://jdf.scr.ir ] */

