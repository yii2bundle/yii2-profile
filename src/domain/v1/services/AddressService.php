<?php

namespace yii2module\profile\domain\v1\services;

use Yii;

use yii\web\NotFoundHttpException;
use yii2lab\domain\services\base\BaseActiveService;

class AddressService extends BaseActiveService {
	
	public function getSelf() {
		$login = Yii::$app->user->identity->login;
		try {
			$profile = $this->oneById($login);
		} catch (NotFoundHttpException $e) {
			$this->create(['login' => $login]);
			$profile = $this->oneById($login);
		}
		return $profile;
	}
	
	public function updateSelf($body) {
		$profile = $this->getSelf();
		$this->updateById($profile->login, $body);
	}
	
}
