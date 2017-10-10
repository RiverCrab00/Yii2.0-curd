<?php
namespace app\models;
use yii\db\ActiveRecord;
class Found extends ActiveRecord{
	public function rules(){
		return [['title','name','type'],'required'];
	}
}