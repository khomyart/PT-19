<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "properties".
 *
 * @property int $id
 * @property string $title
 * @property string $photo_url
 * @property string|null $description
 * @property int $rooms
 * @property int $accommodates
 * @property int $bathrooms
 * @property int $beds
 */
class Properties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'properties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['rooms', 'accommodates', 'bathrooms', 'beds'], 'integer'],
            [['title', 'photo_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'photo_url' => 'Photo Url',
            'description' => 'Description',
            'rooms' => 'Rooms',
            'accommodates' => 'Accommodates',
            'bathrooms' => 'Bathrooms',
            'beds' => 'Beds',
        ];
    }
}
