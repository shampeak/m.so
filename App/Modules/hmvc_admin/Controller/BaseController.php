<?php

//hook
class BaseController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function _init(){
        header("Content-Type:text/html; charset=utf-8");
        //+--------------------------------------------------
    }

    public function behaviors()
    {

        return [
            'access' => [
                'only' => [],
                'rules' => [
                    [
                        'actions' => ['signout'],
                        'allow' => true,
                        'roles' => ['G'],
                    ],
                ],
            ],
        ];
    }


} 
