<?php
session_start();
requireValidSession();

$user = $_SESSION['user'];

$registries = WorkingHours::getMonthlyReport($user->id, new DateTime());

loadTemplateView('monthly_report.php', ['registries' => $registries]);
