<?php

namespace Home\Controller;

use Think\Controller;

/**
 * 会员模块公共控制器
 * @author 285734743
 * 
 */
class NotinController extends Controller {

    function _initialize() {


        $webconfig = M('webconfig');
        $webconfig = $webconfig->where('id=1')->find();
        $arr = json_decode($webconfig['value'], true);
        $data=  bonusset();
        if ($arr['onoff'] == 0) {
            $this->assign('webmsg',$data['webmsg']);
            $this->display('Common:info');
            exit;
        }
//手机版  需要使用则去掉注释
        $mobile = new \Common\Plugin\Mobile_Detect();
        if ($mobile->isMobile() || $mobile->isMobile() && $mobile->isTablet()) {
            C('DEFAULT_V_LAYER', 'Mobile');
            C('TMPL_ACTION_ERROR', "./Home/Mobile/html/tip.html");
            C('TMPL_ACTION_SUCCESS', "./Home/Mobile/html/tip.html");
            C('TMPL_EXCEPTION_FILE', "./Home/Mobile/html/error.html");
            session('hot',$_GET['hot']);
            $this->assign('hot',  session('hot'));
        }
        
        
    }

}
