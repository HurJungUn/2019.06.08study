<?php

namespace Gondr\Controller;
use Gondr\Pager;
use Gondr\DB;

class StaticController extends MasterController {
    public function index(){
        $page = isset($_GET['p']) ? $_GET['p'] : 1;
        if (!is_numeric($page)) {
            $page = 1;
        }

        $sql = "SELECT * FROM boards LIMIT " . ($page - 1) * 3 . ", 3";
        $list = DB::fetchAll($sql);
        $imgPattern = '/<img src=".+">/';
        foreach ($list as $item) {
            $match = preg_match($imgPattern, $item->content, $matches);
            if ($match > 0) {
                $item->thumbnail = $matches[0];
            }else {
                $item->thumbnail = "<img src='/imgs/noimg.png'>";
            }
        }
        $pager = new Pager();
        $pager->calc($page);
        $sql = "SELECT * FROM boards ORDER BY id DESC LIMIT 0, 3";
        $imagelist = DB::fetchAll($sql);
        foreach ($imagelist as $item) {
            $match = preg_match($imgPattern, $item->content, $matches);
            if ($match > 0) {
                $item->thumbnail = $matches[0];
            }else {
                $item->thumbnail = "'/imgs/noimg.png'";
            }
        }
        $this->render("main", ['list'=>$list, 'p'=>$pager, 'image'=>$imagelist]);
    }

    public function errorPage($msg) {
        $this->render("error",['msg'=>$msg]);
    }
}