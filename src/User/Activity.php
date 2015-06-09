<?php
/*!
* HybridAuth
* http://hybridauth.github.io | http://github.com/hybridauth/hybridauth
* (c) 2015 HybridAuth authors | http://hybridauth.github.io/license.html
*/

namespace Hybridauth\User;

/**
 * Hybrid_User_Activity
 *
 * used to provider the connected user activity stream on a standardized structure across supported social apis.
 *
 * http://hybridauth.sourceforge.net/userguide/Profile_Data_User_Activity.html
 */
final class Activity
{
    /**
    * activity id on the provider side, usually given as integer
    *
    * @var string
    */
    public $id = null;

    /**
    * activity date of creation
    *
    * @var string
    */
    public $date = null;

    /**
    * activity content as a string
    *
    * @var string
    */
    public $text = null;

    /**
    * user who created the activity
    *
    * @var object
    */
    public $user = null;

    /**
    *
    */
    public function __construct()
    {
        $this->user = new \stdClass();

        // typically, we should have a few information about the user who created the event from social apis
        $this->user->identifier  = null;
        $this->user->displayName = null;
        $this->user->profileURL  = null;
        $this->user->photoURL    = null;
    }

    /**
    * Prevent the providers adapters from adding new fields.
    *
    * @var string $name
    * @var mixed  $value
    *
    * @throws \LogicException
    */
    public function __set($name, $value)
    {
        throw new \LogicException('Adding new properties to ' . __CLASS__ . ' is not allowed.');
    }
}