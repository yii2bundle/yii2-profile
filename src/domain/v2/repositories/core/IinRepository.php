<?php

namespace yii2module\profile\domain\v2\repositories\core;

use yii2rails\extension\core\domain\repositories\base\BaseActiveCoreRepository;
use yii2module\profile\domain\v2\entities\PersonEntity;

class IinRepository extends BaseActiveCoreRepository {
	
	public $version = 'v4';
	public $baseUri = 'user-iin';
	
	public function forgeEntity($data, $class = null) {
		$class = PersonEntity::class;
		return parent::forgeEntity($data, $class);
	}
	
}