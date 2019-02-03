<?php

namespace yii2module\profile\module\v1\helpers;

use Yii;
use yii2rails\domain\helpers\ServiceHelper;
use yii2rails\extension\menu\interfaces\MenuInterface;
use yii2rails\extension\common\helpers\ModuleHelper;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			[
				'label' => ['profile/main','title'],
				'url' => 'profile',
				'module' => 'profile',
				'domain' => 'profile',
				'access' => ['@'],
				'active' => Yii::$app->controller->module->id == 'profile',
				'visible' => ModuleHelper::has('profile', FRONTEND) && ServiceHelper::has('profile.person'),
			],
		];
	}
	
}
