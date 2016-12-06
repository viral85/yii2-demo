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
class Info extends \api\components\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info'], 'required'],
            [['info'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'info' => 'Info',
        ];
    }
}
