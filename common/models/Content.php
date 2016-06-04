<?php
namespace common\models;

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
            [['category_id', 'title', 'content', 'rec', 'status'], 'required'],
        ];
    }
}
