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

    /**
     * Update the user's profile information.
     *
     * @param array $data An associative array of the user's new profile data.
     * @return bool True on success, false on failure.
     */
    public function updateProfile($data)
    {

        return $this->update($data, ['id' => $this->id]);
    }

    public function slugify($text)
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);

        if (empty($text)) {
            $text = 'n-a';
        }

        // Ensure the slug is unique
        $originalText = $text;
        $counter = 1;
        while ($this->slugExists($text)) {
            $text = $originalText . '-' . $counter;
            $counter++;
        }

        return $text;
    }

    /**
     * Check if a slug already exists in the database.
     *
     * @param string $slug The slug to check.
     * @return bool True if the slug exists, false otherwise.
     */
    private function slugExists($slug)
    {
        $result = $this->read(['slug' => $slug]);
        return !empty($result);
    }

    public function getProfileViews()
    {
        $profileView = new ProfileView();
        return $profileView->read(['user_id' => $this->id]);
    }

    public function countProfileViews()
    {
        return count($this->getProfileViews());
    }
}
