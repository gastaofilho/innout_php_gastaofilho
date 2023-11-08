<?php
session_start();
requireValidSession();

$activeUsersCount = User::getActiveUsersCount();
$abentUsers = WorkingHours::getAbsentUsers();

$yearAndMonth = (new DateTime())->format('Y-m');
$seconds =  WorkingHours::getWorkedTimeInMonth($yearAndMonth);
$hoursInMonth = explode(':', getTimeStringFromSeconds($seconds))[0];

loadTemplateView('manager_report.php', [
    'activeUsersCount' => $activeUsersCount,
    'abentUsers' => $abentUsers,
    'hoursInMonth' => $hoursInMonth
]);
