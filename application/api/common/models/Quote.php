<?php

namespace api\common\models;

use Yii;

/**
 * This is the model class for table "quote".
 *
 * @property integer $quoteId
 * @property integer $authorId
 * @property string $quote
 *
 * @property Author $author
 */
class Quote extends \api\components\db\ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'quote';
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
				[
						[
								'authorId'
						],
						'required'
				],
				[
						[
								'authorId'
						],
						'integer'
				],
				[
						[
								'quote'
						],
						'string'
				],
				[
						[
								'authorId'
						],
						'exist',
						'skipOnError' => true,
						'targetClass' => Author::className (),
						'targetAttribute' => [
								'authorId' => 'authorId'
						]
				]
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
				'quoteId' => 'Quote ID',
				'authorId' => 'Author ID',
				'quote' => 'Quote'
		];
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	public function getAuthor() {
		return $this->hasOne ( Author::className (), [
				'authorId' => 'authorId'
		] );
	}
}
