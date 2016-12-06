<?php

namespace api\common\controllers;

use \Yii as Yii;
use yii\data\ActiveDataProvider;

class QuoteController extends \api\components\ActiveController {
	public $modelClass = '\api\common\models\Quote';
	public function actions() {
		return array_merge ( parent::actions (), [
				'index' => [
						'class' => 'yii\rest\IndexAction',
						'modelClass' => $this->modelClass,
						'checkAccess' => [
								$this,
								'checkAccess'
						],
						'prepareDataProvider' => function ($action) {
							/* @var $model Post */
							$model = new $this->modelClass ();
							$query = $model::find ();
							$dataProvider = new ActiveDataProvider ( [
									'query' => $query
							] );
							$model->setAttribute ( 'authorId', @$_GET ['authorId'] );
							$query->andFilterWhere ( [
									'like',
									'authorId',
									$model->authorId
							] );
							return $dataProvider;
						}
				]
		] );
	}
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