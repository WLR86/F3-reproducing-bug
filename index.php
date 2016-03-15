<?PHP

require('vendor/autoload.php');

$f3 = \Base::instance();

$f3->config('cfg/routes.ini');
$f3->set('DEBUG',3);
$f3->set('AUTOLOAD','app/');

// UI Encoding
$f3->set('ENCODING','ISO-8859-15');

$f3->run();
