<?php require_once('../../../private/initialize.php'); ?>

<?php
// ternary statement if no page id was given, set it to 1 as default 
$id = $_GET['id'] ?? '1';

$subject = find_subject_by_id($id);
// echo h($id);
?>

<?php $page_title="Show Subject"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id='content'>
    <a class='back-link' href='<?php echo url_for('/staff/subjects/index.php'); ?>'>&laquo; Back to List</a>

    <div class="subject show">
       <div class='attribute'>
        <dl>
            <dt>Menu Name</dt>
            <dd><?php echo h($subject['menu-name']); ?></dd>
        </dl>
        <dl>
            <dt>Position</dt>
            <dd><?php echo h($subject['position']); ?></dd>
        </dl>
        <dl>
            <dt>Visible</dt>
            <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false;'; ?></dd>
        </dl>
       </div>
    </div>

</div>

