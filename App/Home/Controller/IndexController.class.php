<?php

namespace Home\Controller;

use Home\Controller\CommonController;

class IndexController extends CommonController {

    public function index() {
       // $data=  bonusset();
       // $this->assign('topmsg',$data['topmsg']);
        $this->display();
    }

    public function main() {
        //$data=  bonusset();
        $uid = session('uid');
        $total_table=M('total');
        $totalInfo=$total_table->where(array('uid'=>$uid))->find();
        $this->assign('touzimoney',$totalInfo['selftotalmoney']);
        $article_table = M('article');
        $count = $article_table->where(array('art_status' => '1'))->count();
        $Page = new \Think\Page($count, 20);
        $show = $Page->show();
        $list = $article_table->order('art_time desc')->where(array('art_status' => '1','type'=>'1'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('page', $show);
        $this->assign('list', $list);
        //$this->assign('daymsg',$data['daymsg']);
        $this->display();
    }

}
