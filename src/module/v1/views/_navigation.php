<?php

use yii\bootstrap\Tabs;
use yii2rails\extension\menu\helpers\MenuHelper;

?>

<?= Tabs::widget([
	'items' => MenuHelper::gen('yii2module\profile\module\v1\helpers\SettingsMenu'),
]) ?>

<br/>
