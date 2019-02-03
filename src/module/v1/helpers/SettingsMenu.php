<?php

namespace yii2module\profile\module\v1\helpers;

use yii2rails\extension\menu\base\BaseMenu;
use yii2rails\extension\menu\interfaces\MenuInterface;

class SettingsMenu extends BaseMenu implements MenuInterface {
	
	public function toArray() {
		$items = [
			[
				'url' => 'profile/person',
				'icon' => 'address-card-o',
				'label' => ['profile/person', 'title'],
				'visible' => true,
			],
			[
				'url' => 'profile/avatar',
				'icon' => 'user-o',
				'label' => ['profile/avatar', 'title'],
				'visible' => true,
			],
			[
				'url' => 'profile/address',
				'icon' => 'map-marker',
				'label' => ['profile/address', 'title'],
				'visible' => true,
			],
		];
		$items = $this->filter($items);
		return $items;
	}
	
}
