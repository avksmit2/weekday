<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Weekday.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
      return $app['twig']->render("home.html.twig");
    });


    $app->post("/getWeekday", function() use ($app) {
        $new_date = new Weekday();

        $new_date = $new_date->determineWeekday($_POST['date']);
        return $app['twig']->render("weekday.html.twig", array('date'=>$new_date));
    });

    return $app;
?>
