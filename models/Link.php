<?php

require_once 'Model.php';
require_once 'User.php';

class Link extends Model
{
    protected $fields = ['id', 'alias', 'url', 'user_id', 'created_at'];

    public function __construct()
    {
        parent::__construct();
        $this->setTable('links');
    }

    /**
     * Get the user associated with the link.
     *
     * @return User The User object.
     */
    public function getUser()
    {
        $user = new User();
        $result = $user->read(['id' => $this->user_id]);
        return !empty($result) ? $result[0] : null;
    }
}
