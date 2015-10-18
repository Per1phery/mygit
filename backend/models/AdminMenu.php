<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin_menu".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $type
 * @property integer $position
 * @property string $url
 */
class AdminMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'position'], 'integer'],
            [['name', 'type', 'url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'type' => 'Type',
            'position' => 'Position',
            'url' => 'Url',
        ];
    }
}
