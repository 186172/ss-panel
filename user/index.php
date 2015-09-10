<?php
require_once '_main.php';

//获得流量信息
if($oo->get_transfer()<1000000)
{
    $transfers=0;}else{ $transfers = $oo->get_transfer();

}
//计算流量并保留2位小数
$all_transfer = $oo->get_transfer_enable()/$togb;
$unused_transfer =  $oo->unused_transfer()/$togb;
$used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
$used_100 = round($used_100,2);
$used_100 = $used_100*100;
//计算流量并保留2位小数
$transfers = $transfers/$tomb;
$transfers = round($transfers,2);
$all_transfer = round($all_transfer,2);
$unused_transfer = round($unused_transfer,2);
//最后在线时间
$unix_time = $oo->get_last_unix_time();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <h4 class="callout callout-danger">本站原域名已遇害，请收藏此域名：shadowfax.xyz</h4>
                    <h4 class="callout callout-warning">极为重要：请勿在网络上公开讨论本站的存在。</h4>
                    <h4 class="callout callout-success">欢迎加入本站 [ <strong><a href="https://telegram.me/joinchat/0699febc025fd9ae485b3ae1a47da7dc" target="_blank">Telegram群聊 >></a></strong> ] ，不受大陆特殊照顾，聊天安全无顾虑。</h4>

                    <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">开心一刻</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="最小化"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="关闭"><i class="fa fa-times"></i></button>
                          </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            幼儿园老师教识字，在黑板上写了个“床”，问：“这位小朋友，你认识这个字吗？”<br />
小孩摇头说不知道。<br />
老师开始启发：“昨天晚上睡觉时，你爸爸身下是什么呀？”<br />
小孩：“是妈妈。”<br />
老师忙改口：“我是问，妈妈不在家时，爸爸身下是什么呀？”<br />
小孩：“是王叔叔。”<br />
老师：“小朋友们，这个字比较难，我们以后再学吧。”
                        </div><!-- /.box-body -->
                    </div><!-- /.box0 -->

                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">公告</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="最小化"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="关闭"><i class="fa fa-times"></i></button>
                          </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <ul>
                                <li>所有节点均已优化TCP连接速度，比快更快，体验无墙般的快感！</li>
                                <li class="text-danger">会员暂时关闭邀请功能，未使用的邀请码已全部失效。</li>
                            </ul>
                        </div><!-- /.box-body -->
                    </div><!-- /.box1 -->

                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">通知</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="最小化"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="关闭"><i class="fa fa-times"></i></button>
                          </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p><strong>为了使本站服务器资源得到充分利用，请熟知以下账号删除规则：</strong></p>
                            <ol class="list">
                                <li>大于30天未签到；</li>
                                <li>同时连接使用设备超过6；</li>
                                <li>一人多号。</li>
                            </ol>
                            <p><span>满足以上三个任意条件的账号将会被删除。</span></p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box2 -->

                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">流量使用情况</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 已用流量: <?php echo $transfers."MB";?> </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_100; ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <p> 可用流量: <?php echo $all_transfer ."GB";?> </p>
                            <p> 剩余流量: <?php echo  $unused_transfer."GB";?> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box1 -->

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">签到获取流量</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 22小时内可以签到一次</p>
                            <?php  if($oo->is_able_to_check_in())  { ?>
                                <p id="checkin-btn"> <button id="checkin" class="btn btn-success  btn-flat">签到</button></p>
                            <?php  }else{ ?>
                                <p><a class="btn btn-success btn-flat disabled" href="#">不能签到</a> </p>
                            <?php  } ?>
                            <p id="checkin-msg" ></p>
                            <p>上次签到时间<code><?php echo date('Y-m-d H:i:s',$oo->get_last_check_in_time());?></code></p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box2 -->

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">连接信息</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 端口: <code><?php echo $oo->get_port();?></code> </p>
                            <p> 密码: <?php echo $oo->get_pass();?> </p>
                            <p> 最后使用时间: <code><?php echo date('Y-m-d H:i:s',$unix_time);  ?></code> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box3 -->

                </div><!-- /.col (right) -->

            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#checkin").click(function(){
            $.ajax({
                type:"GET",
                url:"_checkin.php",
                dataType:"json",
                success:function(data){
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                }
            })
        })
    })
</script>

