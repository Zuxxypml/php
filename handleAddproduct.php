<?php

if (isset($_POST['addProduct'])) {
    $image = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $img_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $image = $image . '.' . $img_ext;
    $upload_dir = 'img/';

    if ($imageSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir . $image);
    } else {
        die();
    }

    mysqli_query(
        $conn,
        "INSERT INTO PRODUCT  (productname, productprice, productquantity, productimage) VALUES('$_POST[name]', '$_POST[price]', '$_POST[quantity]', $image)"
    );
}

?>
