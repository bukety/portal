<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kisiselBilgi".
 *
 * @property int $PI
 * @property string $name
 * @property string $surname
 * @property int $age
 * @property string $sex
 */
class KisiselBilgi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kisiselBilgi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PI', 'name', 'surname', 'age', 'sex'], 'required'],
            [['PI', 'age'], 'integer'],
            [['name', 'surname', 'sex'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PI' => 'Pi',
            'name' => 'Name',
            'surname' => 'Surname',
            'age' => 'Age',
            'sex' => 'Sex',
        ];
    }
}
