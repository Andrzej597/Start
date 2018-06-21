<?php
namespace app\models; 

use yii\db\ActiveRecord; 
 
class InsertForm extends ActiveRecord 
{
	/*public $Id;
    public $Username;
    public $Passwd;
*/

	public static function tableName(){
		return 'users';
	}

	public function attributeLabels(){
		/*return [
			'username' => 'Enter Name:',
			'email'=>'E-mail',
			'password'=>'Password',
		];*/
	}
	 	public function rules(){
 		return[
 		 		//[['username', 'password','email'], 'required'],
 				 			];

 	}

}