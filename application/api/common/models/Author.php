<?php

namespace api\common\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property integer $authorId
 * @property string $name
 *
 * @property Quote[] $quotes
 */
class Author extends \api\components\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'authorId' => 'Author ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuotes()
    {
        return $this->hasMany(Quote::className(), ['authorId' => 'authorId']);
    }
}
