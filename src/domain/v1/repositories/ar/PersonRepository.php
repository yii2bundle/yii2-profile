<?php

namespace yii2module\profile\domain\v1\repositories\ar;

use yii\db\BaseActiveRecord;
use yii2lab\domain\BaseEntity;
use Yii;
use yii\db\ActiveRecord;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;

class PersonRepository extends BaseActiveArRepository {
	
	protected $primaryKey = 'login';
	
	public function insert(BaseEntity $entity) {
		$entity->validate();
		$model = Yii::createObject(get_class($this->model));
		$this->massAssignmentForInsert($model, $entity);
		$this->saveModel($model);
	}
	
	protected function massAssignmentForInsert(BaseActiveRecord $model, BaseEntity $entity) {
		$data = $entity->toArray();
		$data = $this->unsetNotExistedFields($model, $data);
		Yii::configure($model, $data);
	}
}
