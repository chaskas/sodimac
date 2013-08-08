<?php


// require_once(dirname(__FILE__).'/../../sf_projects/sodimac/config/ProjectConfiguration.class.php');
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
