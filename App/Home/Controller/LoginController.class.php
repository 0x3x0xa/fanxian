<?php

namespace Home\Controller;

use Home\Controller\NotinController;

class LoginController extends NotinController {

    public function index() {
        $this->display();
    }

    public function ajax_login() {
        if (IS_AJAX) {
            $username = I('post.username', '', 'htmlspecialchars');
            $pwd = I('post.pwd', '', 'htmlspecialchars');
            $code = I('post.code', '', 'htmlspecialchars');
            $ergm = "/^[\\w-]+(\\.[\\w-]+)*@[\\w-]+(\\.[\\w-]+)+$/";
            $verify = new \Think\Verify();
            if (!$verify->check($code)) {
                $json['status'] = 0;
                $json['type'] = 3;
                $json['msg'] = '验证码错误！';
                echo json_encode($json);
                exit;
            }
            if (!$username) {
                $json['status'] = 0;
                $json['type'] = 1;
                $json['msg'] = '请输入账号！';
                echo json_encode($json);
                exit;
            }
            if (!$pwd) {
                $json['status'] = 0;
                $json['type'] = 2;
                $json['msg'] = '请输入密码!';
                echo json_encode($json);
                exit;
            }//验证是否冻结

            $user_info = M('member')->where(array('username' => $username))->find();
            if ($user_info['status'] == 3) {
                $json['status'] = 0;
                $json['type'] = 2;
                $json['msg'] = '账号被冻结了!';
                echo json_encode($json);
                exit;
            }



            $map['username'] = $username;
            $map['password'] = md5pwd(1, $pwd);
            $map['status'] = array('neq', 2);
            $res = M('member')->where($map)->find();
            if (!empty($res)) {
                $data['logtime'] = time();
                $data['logip'] = get_client_ip(0, true);
                $data['lognum'] = $res['lognum'] + 1;
                $data['id'] = $res['id'];
                M('member')->save($data);
                session('logintime', time());
                session('uid', $res['id']);

                $json['status'] = 1;
                $json['msg'] = '';
                $json['url'] = U('/Home');
            } else {
                $json['status'] = 0;
                $json['type'] = 2;
                $json['msg'] = '账号或者密码错误！';
            }
        } else {
            $json['status'] = 0;
            $json['type'] = 2;
            $json['msg'] = '非法操作！';
        }
        echo json_encode($json);
        exit;
    }

    /* 退出登录 */

    public function logout() {
        session("uid", NULL);
        redirect(U('/Home/Login'));
    }

   

    public function code() {
        $config = array(
            'fontSize' => 14, // 验证码字体大小
            'length' => 4, // 验证码位数  
            'useNoise' => false, // 关闭验证码杂点
            'useCurve' => false,
            'imageW' => '100',
            'imageH' => '30',
        );
        ob_clean();
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    public function back_login($m) {
        if (isset($_SESSION['userid'])) {

            $m = base64_decode($m);
            session('uid', $m);
            session('logintime', time());
            redirect(U('/Home'));
        } else {
            redirect(U('/Home/'));
            exit;
        }
    }

    public function check_username_unique() {
        $username = I('param.param', '', 'htmlspecialchars');
        $res = M('member')->field('id')->where(array('username' => $username))->find();
        if (!empty($res)) {
            $json['status'] = 'n';
            $json['info'] = '账号已经被注册';
            echo json_encode($json);
            exit;
        } else {
            $json['status'] = 'y';
            $json['info'] = '数据验证成功';
            echo json_encode($json);
            exit;
        }
    }

    public function check_mobile_unique() {
        $mobile = I('param.param', '', 'htmlspecialchars');
        $res = M('member')->where(array('mobile' => $mobile))->find();
        if (!empty($res)) {
            $json['status'] = 'n';
            $json['info'] = '手机号已经被注册';
            echo json_encode($json);
            exit;
        } else {
            $json['status'] = 'y';
            $json['info'] = '数据验证成功';
            echo json_encode($json);
            exit;
        }
    }

       public function check_mobile() {
        $mobile = I('param.mobile', '', 'htmlspecialchars');
        if (!$mobile) {
            $json['status'] = 0;
            $json['msg'] = '请输入手机号';
            echo json_encode($json);
            exit;
        } else {

            $res = M('member')->field('id')->where(array('mobile' => $mobile))->find();
            if (!empty($res)) {
                $json['status'] = 0;
                $json['msg'] = '';
            } else {
                $json['status'] = 1;
                $json['msg'] = '手机号不存在！';
            }
            echo json_encode($json);
            exit;
        }
    }
    
    //检测银行账号是否存在
    public function check_bankno_unique() {
        $bankno = I('param.param', '', 'htmlspecialchars');
        $res = M('member')->where(array('bankno' => $bankno))->find();
        if (!empty($res)) {
            $json['status'] = 'n';
            $json['info'] = '银行号已经被注册';
            echo json_encode($json);
        } else {
            $json['status'] = 'y';
            $json['info'] = '数据验证成功';
            echo json_encode($json);
            exit;
        }
    }

    public function run() {

        $this->resetnumber();//重置每日提现次数
        $this->totalgroup();//统计五层的业绩
        $this->updaterate();//设置投资比例
        $this->autorun();//每日利息计算
    }

    protected function autorun() {
        $member_table = M('member');
        $invest_table = M('invest');
        $bonus_table = M('bonus');
        $shouyi_table = M('shouyi');
        $list = $invest_table->select();
        $count = count($list);
        for ($i = 0; $i < $count; $i++) {
            if ($list[$i]['money'] > 0) {
                $returnrate = $this->returnrate($list[$i]['money']);
                $rate = $returnrate['rate'] / 100;
                $money = $rate * $list[$i]['money'];
                $userInfo = $member_table->field('profit,recommend,username')->find($list[$i]['uid']);
                $usermoney = $userInfo['profit'] + $money;
                $invest_table->save(array('id' => $list[$i]['id'], 'day' => $list[$i]['day'] + 1, 'bonus' => $money, 'allbonus' => $list[$i]['allbonus'] + $money));
                $member_table->save(array('id' => $list[$i]['uid'], 'profit' => $usermoney));
                $bonus_table->add(array('uid' => $list[$i]['uid'],'pursetype'=>'2', 'sum' => $money, 'balance' => $usermoney, 'status' => '1', 'create_date' => time(), 'type' => '2', 'explain' => '每日收益'));
                $shouyi_table->add(array('uid' => $list[$i]['uid'], 'order_no' => $list[$i]['no'], 'sum' => $list[$i]['sum'], 'money' => $list[$i]['money'], 'create_date' => time(), 'order_date' => $list[$i]['create_date'], 'rate' => $returnrate['rate'], 'bonus' => $money));

                if ($userInfo['recommend'] > 0) {
                    $this->recommond($userInfo['recommend'], $money, $userInfo['username'],$list[$i]['uid'],1,$list[$i]['no']);
                    $this->group($userInfo['recommend'], $money, $userInfo['username'],$list[$i]['uid'],2,$list[$i]['no']);
                }
            }
        }
    }

    protected function recommond($rid, $bonus, $username,$uid,$type,$order_no) {
        $data = bonusset();
        $rate = $data['ztjlj'] / 100;
        $member_table = M('member');
        $bonus_table = M('bonus');
        $bonusshouyi_table=M('bonusshouyi');
        $money = $rate * $bonus;
        $userInfo = $member_table->field('profit')->find($rid);
        $usermoney = $userInfo['profit'] + $money;
        $member_table->save(array('id' => $rid, 'profit' => $usermoney));
        $bonusshouyi_table->add(array('uid'=>$rid,'fid'=>$uid,'create_date'=>  time(),'bonus'=>$money,'fbonus'=>$bonus,'rate'=> $data['ztjlj'] ,'order_no'=>$order_no,'type'=>$type,'message'=> "来自：" . $username . '直推奖'));
        $bonus_table->add(array('uid' => $rid, 'status' => 1, 'create_date' => time(), 'sum' => $money, 'balance' => $usermoney,'pursetype'=>'2', 'type' => '3', 'explain' => "来自：" . $username . '直推奖', 'source' => '2'));
    }

    protected function group($rid, $bonus, $username,$uid,$type,$order_no) {
        $data = bonusset();
        $rate = $data['tdjlj'] / 100;
        $member_table = M('member');
        $bonus_table = M('bonus');
        $bonusshouyi_table=M('bonusshouyi');
        $money = $rate * $bonus;
        $userInfo = $member_table->field('profit,recommend,flag')->find($rid);
        if ($userInfo['flag'] == 1) {
            $usermoney = $userInfo['profit'] + $money;
            $member_table->save(array('id' => $rid, 'profit' => $usermoney));
            $bonusshouyi_table->add(array('uid'=>$rid,'fid'=>$uid,'create_date'=>  time(),'bonus'=>$money,'fbonus'=>$bonus,'rate'=>$data['tdjlj'] ,'order_no'=>$order_no,'type'=>$type,'message'=> "来自：" . $username . '团队奖'));
            $bonus_table->add(array('uid' => $rid, 'status' => 1, 'create_date' => time(), 'sum' => $money, 'balance' => $usermoney,'pursetype'=>'2', 'type' => '4', 'explain' => "来自：" . $username . '团队奖', 'source' => '2'));
        }
        if ($userInfo['recommend'] > 0) {
            self::group($userInfo['recommend'], $bonus, $username,$uid,$type,$order_no);
        }
    }

    protected function returnrate($money) {
        $rate_copy_table = M('rate_copy');
        $list = $rate_copy_table->order('id desc')->select();
        for ($i = 0; $i < count($list); $i++) {
            if ($money >= $list[$i]['min']) {
                return $list[$i];
            }
        }
    }

    protected function updaterate() {
        //更新比例
        $rate_table = M('rate');
        $rate_copy_table = M('rate_copy');
        $list = $rate_table->select();
        for ($i = 0; $i < count($list); $i++) {
            $rate_copy_table->delete($list[$i]['id']);
            $rate_copy_table->add($list[$i]);
        }
    }

    protected function resetnumber() {
        $number_table = M('number');
        $list = $number_table->select();
        $count = count($list);
        for ($i = 0; $i < $count; $i++) {
            $number_table->save(array('id' => $list[$i]['id'], 'number' => '0'));
        }
    }


    protected function totalgroup() {
        $data=bonusset();
        $money=$data['tdtzje'];
        $member_table = M('member');
        $list = $member_table->field('id,flag')->select();
        $count=count($list);
        for ($i = 0; $i < $count; $i++) {
            $groupmoney = $this->yeji($list[$i]['id'],0);
            if ($groupmoney >=$money) {
                if ($list[$i]['flag'] == 0) {
                    $member_table->save(array('id' => $list[$i]['id'], 'flag' => 1));
                }
            } else {
                if ($list[$i]['flag'] == 1) {
                    $member_table->save(array('id' => $list[$i]['id'], 'flag' => 0));
                }
            }
        }
    }
    


    protected function yeji($id,$level) {
        $member_table = M('member');
        $total_table = M('total');
        $list = $member_table->field('id')->where(array('recommend' => $id))->select();
        $count = count($list);
        $total = 0;
        if ($count > 0&&$level<5) {
            for ($i = 0; $i < $count; $i++) {
                $row = $total_table->field('selftotalmoney')->where(array('uid' => $list[$i]['id']))->find();
                $total+=$row['selftotalmoney'];
                $level++;
                $total+=self::yeji($list[$i]['id'],$level);
            }
        }
        return $total;
    }

}
