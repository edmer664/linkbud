<?php

require_once 'Model.php';

class ProfileView extends Model
{
    protected $fields = ['id', 'user_id', 'referrer', 'created_at'];

    public function __construct()
    {
        parent::__construct();
        $this->setTable('profile_views');
    }

    // get the user associated with this profile view
    public function getUser()
    {
        $user = new User();
        $result = $user->read(['id' => $this->user_id]);
        return !empty($result) ? $result[0] : null;
    }
}
