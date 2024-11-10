<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Sample data array simulating the "article" table hello
$articles = [
    [
        "id" => 1,
        "Title" => "Ligula tristique quis risus",
        "Image" => "placeholder.png",
        "HeaderImage" => "placeholder.png",
        "Introduction" => "Mauris convallis non ligula non interdum.",
        "Description" => "Detailed description of the article...",
        "LastMod" => "2024-10-01 10:30:00",
        "Language" => "EN",
        "KeyWords" => "example, blog, tech",
        "State" => 1,
        "NumVisit" => 150,
        "IdTheme" => 2,
        "IdUser" => 1,
        "IdHost" => 1
    ],
    [
        "id" => 2,
        "Title" => "Example Article Title",
        "Image" => "placeholder.png",
        "HeaderImage" => "placeholder.png",
        "Introduction" => "Brief introduction for the article.",
        "Description" => "Another detailed article description...",
        "LastMod" => "2024-10-05 14:00:00",
        "Language" => "FR",
        "KeyWords" => "tech, tutorial",
        "State" => 1,
        "NumVisit" => 75,
        "IdTheme" => 3,
        "IdUser" => 2,
        "IdHost" => 1
    ]
    // Add more articles as needed
];

// Output the articles in JSON format
echo json_encode($articles);
?>
