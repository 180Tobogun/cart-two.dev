<?php declare(strict_types=1);

$files = [
    "New Text Document.txt",
    "New Text Document (2).txt",
    "New Text Document (3).txt",
];

foreach ($files as $file)
    if (!unlink($file)) {
        echo("Error deleting $file");
    } else {
        echo("Deleted $file");
    }
