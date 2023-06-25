<?php

class Application
{
    /**
     * application class instance
     *
     * @var Application
     */
    public static Application $app;

    /**
     * Request class instance
     *
     * @var Request
     */
    public static Request $request;

    /**
     * Response class instance
     *
     * @var Response
     */
    public static Response $response;

    /**
     * View class instance
     *
     * @var View
     */
    public static View $view;

    /**
     * Router class instance
     *
     * @var Router
     */
    public static Router $router;

    /**
     * WHMCS vars
     *
     * @var array
     */
    public static array $vars;

    //? public static bool $outputReturn;
    //? public const MODULE_DIR = ROOTDIR . '/modules/addons/notify_Anywhere';

    public function __construct($vars = [])
    {
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->view = new View();
        $this->vars = $vars;
        
        //? self::$outputReturn = false;
    }

    public function run()
    {
        //?
    }
}
