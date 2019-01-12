<?php

namespace yii2module\profile\api\v2\controllers;

use yii2lab\rest\domain\rest\Controller;
use yii2lab\extension\web\helpers\Behavior;

class PersonController extends Controller
{

	public $service = 'profile.person';

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'authenticator' => Behavior::auth(),
			'verb' => Behavior::verb([
				'view' => ['GET'],
				'update' => ['PUT'],
			]),
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [
			'view' => [
				'class' => 'yii2lab\rest\domain\rest\IndexActionWithQuery',
				'serviceMethod' => 'getSelf',
			],
			'update' => [
				'class' => 'yii2lab\rest\domain\rest\CreateAction',
				'serviceMethod' => 'updateSelf',
				'successStatusCode' => 204,
			],
		];
	}

}