<?php require_once('../../../private/initialize.php');

if (is_post_request){

    $page_name = $_POST['name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Page Name: " . $page_name . "<br/>";
    echo "Position: " . $position . "<br/>";
    echo "Visibility: " . $visible . "<br/>";

} else {
    redirect_to('/staff/pages/new.php');
}

?>

