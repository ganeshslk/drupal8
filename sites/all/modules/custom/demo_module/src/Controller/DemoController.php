<?php
namespace Drupal\demo_module\Controller;
class DemoController {
	public function demo(){
		return array(
			'#title' => 'Demo Module',
			'#markup' => 'This module is for demo purpose',
		);
	}
}