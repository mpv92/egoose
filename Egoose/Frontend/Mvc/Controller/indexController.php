<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author Marjan
 */
namespace Frontend\Mvc\Controller;
use Core\Config\DataBaseConfig;
use Core\Controller;

class indexController extends Controller
{
    /*
     * no arguments allowed
     * */
    public function index()
    {
        $this->SetTitle("Start");
        $this->View("index");
    }
}
