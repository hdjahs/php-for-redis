<?php

namespace core;

class base {

    public static $classMap = array();
    public $assign;

    static public function run() {
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP . '/Controllers/' . $ctrlClass . 'Controller.php';
        $cltrlClass = '\\' . MODULE . '\Controllers\\' . $ctrlClass . 'Controller';
        if (is_file($ctrlfile)) {
            include $ctrlfile;
            $ctrl = new $cltrlClass();
            $ctrl->$action();
        } else {
            throw new \Exception("找不到控制器", $ctrlClass);
        }
    }

    static public function load($class) {
        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = BASE . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    public function assign($name, $value) {
        $this->assign[$name] = $value;
    }

    public function display($file) {
        $file = APP . '/Views/' . $file;
        if (is_file($file)) {
            extract($this->assign);
            include $file;
        }
    }

}
