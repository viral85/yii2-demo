<?php

namespace api\common\controllers;

use \Yii as Yii;

class InfoController extends \api\components\ActiveController {
	public $modelClass = '\api\common\models\Info';
	public function accessRules() {
		return [
				[
						'allow' => true,
						'roles' => [
								'?'
						]
				]
		];
	}
}