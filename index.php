<?php
$templates = __DIR__ . '/templates/';
define('BASE_DIR', __DIR__);
?>
<?php
require_once (__DIR__ . '/helpers/Session.php');
$currentSession = new Session();
//require_once(__DIR__ . '/helpers/Cookie.php');
//
//$cookieObj = new Cookie();
//
//if (!$cookieObj->read('PageViewCount')) {
//    $cookieObj->create('PageViewCount', 1, time() + 2 * 60 * 60);
//    echo "Вы впервые на нашем сайте!";
//} else {
//    $cookieObj->update('PageViewCount',$cookieObj->read('PageViewCount')+1,time() + 2 * 60 * 60);
//    echo "Вы на нашем сайте " . $cookieObj->read('PageViewCount') . "  раз";
//}

require_once($templates . 'header.php');
require_once(__DIR__ . '/helpers/FileUpload.php');

?>

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout
                    called a
                    jumbotron and three supporting pieces of content. Use it as a starting point to create something
                    more
                    unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">

            <?php

            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            if (file_exists($templates . $page . '.php')) {
                require_once($templates . $page . '.php');
            } else {
                require_once($templates . '404.php');

            }

            ?>
        </div> <!-- /container -->

    </main>

<?php
require_once($templates . 'footer.php');
?>