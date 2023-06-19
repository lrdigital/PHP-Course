<?php
    if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liam's Site - <?php echo h($page_title); ?></title>

    <link rel="stylesheet" media="all" href="<?php echo url_for('stylesheets/staff.css'); ?>" />
</head>
<body>
    <header>
        <h1>Liam's Website: Staff Area</h1>
    </header>

    <navigation>
        <ul>
            <li>
                <a href="<?php echo WWW_ROOT . '/staff/index.php'; ?>">Menu</a>
            </li>
        </ul>
    </navigation>