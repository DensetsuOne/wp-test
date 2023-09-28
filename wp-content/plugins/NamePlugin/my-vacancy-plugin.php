<?php
/*
Plugin Name: My Vacancy Plugin
Version: 1.0
Description: Реализует публикацию вакансий и сбор откликов с другой площадки.
*/

require_once(dirname(__FILE__) . '/NameApi.php');

// Создание экземпляра класса NameApi
$nameApi = new \NamePlugin\NameApi();