<?php

class LinkLog extends Model
{

    protected $fields = ['id', 'link_id', 'created_at'];

    public function __construct()
    {
        parent::__construct();
        $this->setTable('link_logs');
    }
}
