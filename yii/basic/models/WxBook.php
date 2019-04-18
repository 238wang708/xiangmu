<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "WxBook".
 *
 * @property string $id
 * @property string $book
 * @property string $author
 * @property string $type
 * @property string $number
 * @property string $times
 * @property string $state
 * @property string $img
 */
class WxBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'WxBook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book', 'author', 'type', 'times', 'state', 'img'], 'string', 'max' => 255],
            [['number'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book' => 'Book',
            'author' => 'Author',
            'type' => 'Type',
            'number' => 'Number',
            'times' => 'Times',
            'state' => 'State',
            'img' => 'Img',
        ];
    }
}
