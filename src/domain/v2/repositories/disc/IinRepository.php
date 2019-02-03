<?php

namespace yii2module\profile\domain\v2\repositories\disc;

use yii2rails\extension\arrayTools\repositories\base\BaseActiveDiscRepository;
use yii2module\profile\domain\v2\entities\PersonEntity;

class IinRepository extends BaseActiveDiscRepository {
	
	public $table = 'iin';

	public function forgeEntity($data, $class = null) {
		return parent::forgeEntity($data, PersonEntity::class);
	}

}