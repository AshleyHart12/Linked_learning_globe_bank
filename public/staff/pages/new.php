<?php require_once('../../../private/initialize.php');

$pages = $_GET['page'] ?? '';

if($pages == '404') {
    error_404();
  } elseif($pages == '500') {
    error_500();
  } elseif($pages == 'redirect') {
    redirect_to(url_for('/staff/pages/index.php'));
  }


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

<?php $page_title='Create Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create Page</h1>

    <form action="<?php echo url_for('/staff/pages/new.php') ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Page" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

