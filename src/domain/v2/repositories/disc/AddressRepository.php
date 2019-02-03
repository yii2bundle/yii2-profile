<?php

namespace yii2module\profile\domain\v2\repositories\disc;

use yii2rails\extension\arrayTools\repositories\base\BaseActiveDiscRepository;

class AddressRepository extends BaseActiveDiscRepository {
	
	public $table = 'profile_address';
	protected $schemaClass = true;
	
}
