<?php

function getDateAsDAteTime($date) {
    return is_string($date) ? new DateTime($date) : $date;
}

function isWekeend($date) {
    $inputDate = getDateAsDAteTime($date);
    return $inputDate->format('N') >= 6;
}

function isBefore($date1, $date2) {
    $inputDate1 = getDateAsDAteTime($date1);
    $inputDate2 = getDateAsDAteTime($date2);
    return $inputDate1 <= $inputDate2;
}

function getNextDay($date) {
    $inputDate = getDateAsDAteTime($date);
    $inputDate->modify('+1day');
    return $inputDate;
}