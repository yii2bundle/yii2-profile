<?php

namespace yii2module\profile\domain\v2\services;

use yii2lab\domain\data\Query;
use yii2lab\domain\services\base\BaseActiveService;
use Exception;
use yii\web\NotFoundHttpException;
use yii2lab\extension\validator\helpers\IinParser;

class IinService extends BaseActiveService {

	public function oneById($id, Query $query = null) {
		try {
			IinParser::parse($id);
		} catch (Exception $e) {
			throw new NotFoundHttpException(__METHOD__ . ': ' . __LINE__);
		}
		return parent::oneById($id, $query);
	}
	
}
