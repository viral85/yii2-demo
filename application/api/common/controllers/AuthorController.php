<?php

namespace api\common\controllers;

use \Yii as Yii;

class AuthorController extends \api\components\ActiveController {
	public $modelClass = '\api\common\models\Author';
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