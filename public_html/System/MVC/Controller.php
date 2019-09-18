<?php

/**
 *
 * This file is part of mvc-rest-api for PHP.
 *
 */

namespace MVC;

use http\Exception;



//require_once '../../vendor/autoload.php';



/**
 * Class Controller, a port of MVC
 *
 * @package MVC
 */
class Controller {

    /**
     * Request Class.
     */
    public $request;

    /**
     * Response Class.
     */
    public $response;

	/**
	*  Construct
	*/
    public function __construct() 
    {
        $this->request = $GLOBALS['request'];
        $this->response = $GLOBALS['response'];
    }

    /**
     * get Model
     * 
     * @param string $model
     * 
     * @return object
     */
    public function model($model) 
    {
        $file = MODELS . ucfirst($model) . '.php';

		// check exists file
        if (file_exists($file)) {
            require_once $file;

            $model = 'Models' . str_replace('/', '', ucwords($model, '/'));
			// check class exists
            if (class_exists($model))
                return new $model;
            else 
                throw new \Exception(sprintf('{ %s } this model class not found', $model));
        } else {
            throw new \Exception(sprintf('{ %s } this model file not found', $file));
        }
    }

	// send response faster
    public function send($status = 200, $msg) 
    {
        $this->response->setHeader(sprintf('HTTP/1.1 ' . $status . ' %s' , $this->response->getStatusCodeText($status)));
        $this->response->setContent($msg);
    }

    /**
     *
     * ensure that input values are secure
     *
     */
    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     *
     * ensure that forms are secure
     *
     */
    protected function secure_form($form)
    {
        foreach ($form as $key => $value)
        {
            $form[$key] = $this->secure_input($value);
        }
    }


    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        // $file = dirname(__DIR__) . "Application/Views/$view";  // relative to Core directory
        $file = SCRIPT . "Application/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }


        //////////////////////////////////
        ///
//        \Twig_Autoloader::register();

        $loader = new \Twig_Loader_Filesystem(SCRIPT . "Application/Views/");

        $options = array(
            'strict_variables' => false,
            'debug' => false,
            'cache'=> false
        );

        $twig = new \Twig_Environment($loader, $options);


//        $twig = new \Twig_Environment($loader);



    }

    /**
     * Render a view template using Twig
     *
     * @param string $template  The template file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public function renderTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            // $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/Application/Views');
            $loader = new \Twig_Loader_Filesystem(SCRIPT . 'Application/Views/');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }





}
