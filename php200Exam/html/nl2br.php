<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "SELECT * FROM prodReview ORDER BY prodReviewID DESC LIMIT 1";
    $result = $dbConnect->query($sql);

    $prodReview = $result->fetch_array(MYSQLI_ASSOC);
    echo nl2br($prodReview['content']);