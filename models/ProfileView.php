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
}
