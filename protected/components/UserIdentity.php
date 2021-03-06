<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$data = User::model()->find('user = :user',array(':user'=>$this->username));
		if($data->user==NULL)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($data->pass!==sha1($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->errorCode=self::ERROR_NONE;
			$session = new CDbHttpSession;
			$session->open();
			$session['data.login.admin'] = $data->attributes;

			$group = UserGroup::model()->findByPk($data->group_id);
			$this->username = $group->name;

		}
		
		
		return !$this->errorCode;
	}
}