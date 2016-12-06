<?php

namespace api\common\controllers;

use \Yii as Yii;

class UserController extends \api\components\ActiveController {
	public $modelClass = 'api\models\User';
	public function accessRules() {
		return [
				[
						'allow' => true,
						'roles' => [
								'@'
						]
				]
		];
	}
}