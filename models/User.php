<?php

require_once 'Model.php';
require_once 'Link.php';

class User extends Model
{

    protected $fields = ['id', 'name', 'email', 'password', 'slug'];

    public function __construct()
    {
        parent::__construct();
        $this->setTable('users');
    }

    /**
     * Get the links associated with the user.
     *
     * @return array An array of Link objects.
     */
    public function getLinks()
    {
        $link = new Link();
        return $link->read(['user_id' => $this->id]);
    }

    public function getProfileViews()
    {
        $profileView = new ProfileView();
        return $profileView->read(['user_id' => $this->id]);
    }
}
