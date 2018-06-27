<?php

function loadImages() {
    for ($i = 0; $i < 6; $i++) {
        $images[] = "<img id='randImage' src='img/$i.png' alt='loading...'>";
    }
    return $images;
}

function randomImage() {
    $randIndex = rand(0, 5);
    displayImage(loadImages()[$randIndex]);
    return loadImages()[$randIndex];
}

function displayImage($randomImage) {
    echo $randomImage;
}

function getImgIndex() {
    $randImge = randomImage();
    $index = 0;
    foreach (loadImages() as $key => $value) {
        if ($randImge == $value) {
            $index = $key;
        }
    }
    return $index;
}

function displayPoints() {

    $index = getImgIndex();

    switch ($index) {

        case 0: $index = 0;
            echo "<h3>Bankrupt</h3>";
            break;
        case 1: $index = getPrizesArray()[0];
            break;
        case 2: $index = getPrizesArray()[1];
            break;
        case 3: $index = getPrizesArray()[2];
            break;
        case 4: $index = getPrizesArray()[3];
            break;
        case 5: $index = getPrizesArray()[4];
            break;
    }
    if ($index > 0) {
        echo "<h2>You won $index Dollars</h2>";
    } else {
        echo "<h3>You lost all your Money</h3>";
    }


    echo "<div id='prizes'>";

    echo "Possible Prizes Are: ";
    for ($i = 0; $i < count(getPrizesArray()); $i++) {
        echo getPrizesArray()[$i] . " ";
    }
    echo "<br><h4>The Sum of All Prizes is: " . array_sum(getPrizesArray()) ."</h4>";
    echo "</div>";
}

function getPrizesArray() {
    $prizesArray = array();
    foreach (loadImages() as $key => $value) {
        if ($key > 0) {
            if ($key == 1) {
                array_push($prizesArray, 1000);
            } elseif ($key == 2) {
                array_push($prizesArray, 250);
            } else {
                array_push($prizesArray, $key * 100);
            }
        }
    }
    return $prizesArray;
}

displayPoints();
?>