<?php

require_once 'Model.php';
require_once 'Link.php';

class LinkLog extends Model
{

    protected $fields = ['id', 'link_id', 'created_at'];

    public function __construct()
    {
        parent::__construct();
        $this->setTable('link_logs');
    }

    // get the link associated with this log
    public function getLink()
    {
        $link = new Link();
        $result = $link->read(['id' => $this->link_id]);
        return !empty($result) ? $result[0] : null;
    }
}
