<html>
 <head>
  <title>PHP Container app</title>
 </head>
 <body>
    <?php 
        require __DIR__ . '/vendor/autoload.php';
        use \WF\Hypernova\Renderer;

        $renderer = new Renderer('http://localhost:3030/batch');
        $renderer->addJob('myViewId', 
        [
            'name' => 'HypernovaExampleReact.js', 
            'data' => ['name' => 'Lusty']
        ]);
        $response = $renderer->render();
        echo $response->results['myViewId']->html;
    ?> 
    <div>Php content</div>
 </body>
</html>