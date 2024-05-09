<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the request is AJAX
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        // Check if both title and content are set
        if (isset($_POST["title"]) && isset($_POST["content"])) {
            // Retrieve the submitted data
            $title = $_POST["title"];
            $content = $_POST["content"];

            // You can perform further validation or processing here

            // For demonstration purposes, let's simply display the submitted data
            echo json_encode(array(
                'title' => $title,
                'content' => $content
            ));
            exit();
        } else {
            // If either title or content is not set, return an error message
            echo json_encode(array('error' => 'Please fill in both title and content fields.'));
            exit();
        }
    } else {
        // If the request is not AJAX, redirect the user to the form page
        header("Location: post.html");
        exit();
    }
} else {
    // If the form is not submitted, redirect the user to the form page
    header("Location: post.html");
    exit();
}
?>
