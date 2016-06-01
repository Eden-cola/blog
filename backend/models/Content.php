<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Login form
 */
class Content extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['class_id', 'title', 'content'], 'required'],
        ];
    }
}
