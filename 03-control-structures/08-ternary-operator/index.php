<?php
    $score = 50;

    if($score < 40) {
        echo "Low Score";
    } else {
        echo "High Score";
    }


    echo $score < 40 ? "Low Score" : "High Score";
    $result = $score < 40 ? "Low Score" : "High Score";
    echo $result

?>