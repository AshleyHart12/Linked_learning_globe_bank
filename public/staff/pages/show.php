<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title= "Show Page"; ?>

<?php
    $id = $_GET['id'] ?? '1';

    echo h($id);
?>

<a class='back-link' href="<?php echo url_for('./staff/pages/index.php'); ?>">Back to List</a>
