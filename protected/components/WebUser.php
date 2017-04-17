<?php

/**
 * @property boolean $isAdmin
 * @property boolean $isSuperAdmin
 * @property User $user
 */
class WebUser extends CWebUser
{
    /**
     * cache for the logged in User active record
     * @return User
     */
    private $_user;

    /**
     * is the user a superadmin ?
     * @return boolean
     */
    function getIsSuperAdmin()
    {
        return ($this->user && $this->user->accessLevel == User::LEVEL_SUPERADMIN);
    }

    /**
     * is the user an administrator ?
     * @return boolean
     */
    function getIsAdmin()
    {
        return ($this->user && $this->user->accessLevel >= User::LEVEL_ADMIN);
    }

    /**
     * get the logged user
     * @return User|null the user active record or null if user is guest
     */
    function getUser()
    {
        if ($this->isGuest)
            return null;
        if ($this->_user === null) {
            $this->_user = User::model()->findByPk($this->id);
        }
        return $this->_user;
    }
}