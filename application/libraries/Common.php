<?php
class Common{
function adaptdate($dt){
    $dtarr = explode('-',$dt);
    $out = $dtarr[2] . ' ' . $this->convertmonth($dtarr[1]). ' ' . $dtarr[0];
    return $out;
}
function convertmonth($mn){
    switch($mn){
        case '01':
        $out = 'Januari';
        break;
        case '02':
        $out = 'Februari';
        break;
        case '03':
        $out = 'Maret';
        break;
        case '04':
        $out = 'April';
        break;
        case '05':
        $out = 'Mei';
        break;
        case '06':
        $out = 'Juni';
        break;
        case '07':
        $out = 'Juli';
        break;
        case '08':
        $out = 'Agustus';
        break;
        case '09':
        $out = 'September';
        break;
        case '10':
        $out = 'Oktober';
        break;
        case '11':
        $out = 'Nopember';
        break;
        case '12':
        $out = 'Desember';
        break;
    }
    return $out;
}}