<?php
require_once '../models/Link.php';
require_once '../models/LinkLog.php';

if (isset($_GET['id'])) {
    $linkId = $_GET['id'];
    $link = new Link();
    $result = $link->read(['id' => $linkId]);

    if (!empty($result)) {
        $link = $result[0];

        // Create a new LinkLog entry
        $linkLog = new LinkLog();
        $linkLog->create([
            'link_id' => $link->id,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // Redirect to the URL
        header("Location: " . $link->url);
        exit();
    }
}

// If no link found or id not set, display 404
http_response_code(404);
echo "404 Not Found";
?>
