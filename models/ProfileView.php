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

    public function getProfileViewsData($userId)
    {
        $query = "SELECT DATE(created_at) as date, COUNT(*) as views FROM profile_views WHERE user_id = ? GROUP BY DATE(created_at)";
        return $this->query($query, [$userId])->fetch_all(MYSQLI_ASSOC);
    }

    public function getTopReferrers($userId)
    {
        $query = "SELECT referrer, COUNT(*) as visits FROM profile_views WHERE user_id = ? GROUP BY referrer ORDER BY visits DESC";
        return $this->query($query, [$userId])->fetch_all(MYSQLI_ASSOC);
    }
}
