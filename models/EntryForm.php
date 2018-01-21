<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.01.2018
 * Time: 23:48
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}