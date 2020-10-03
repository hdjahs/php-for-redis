<?php

namespace app\Controllers;

use app\Services\IndexService;

class IndexController extends \core\base {

    /**
     * xxx.com/index/index
     * xxx.com/index.php/index/index
     */
    public function index() {
        $title = '视图文件';
        $data = 'hello world';
        $this->assign('title', $title);
        $this->assign('data', $data);

        $obj = new IndexService();
        $obj->index();
//        $model = new \core\lib\model();
//        $sql = 'select * from c';
//        $ret = $model->query($sql);
        $this->display('index.html');
    }

}
