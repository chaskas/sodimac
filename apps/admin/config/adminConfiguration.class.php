<?php

class adminConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
  	sfConfig::set('sf_web_images_dir_name', 'img');
  }
}
