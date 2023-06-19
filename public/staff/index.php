<!-- Site Initialization -->
<?php require_once('../../private/initialize.php'); ?>

<!-- Page Title includes a default value on the header file -->
<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!-- Main Content Area -->
<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="subjects/index.php">Subjects</a></li>
        </ul>
    </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>