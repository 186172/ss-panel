<?php
require_once '_main.php';
$node = new Ss\Node\Node();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                节点列表
                <small>Node List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-success">
                        <h3>注意：</h3>
                        <h4>请注意节点地址变化！</h4>
                        <h4>以防封锁，请勿在任何地方公开节点地址！</h4>
                        <h4>建议使用{Shadowsocks}自带的“扫描二维码”方式配置，可降低配置出错机率。（二维码中包含个人端口、密码信息，请妥善保管。）</h4>
                    </div>

                    <!-- TABLE: 节点列表 -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">GAV1N - 节点</h3>
                        </div>
                        <style type="text/css">
                            .table th, .table td {text-align: center}
                        </style>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>节点</th>
                                            <th>节点地址</th>
                                            <th>加密方式</th>
                                            <th>状态</th>
                                            <th>快速操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $node0 = $node->NodesArray(0);
                                        foreach($node0 as $row){
                                            ?>

                                            <tr>
                                                <td><?php echo $row[ 'node_name']; ?></td>
                                                <td><code><?php echo $row['node_server']; ?></code></td>
                                                <td><?php echo $row[ 'node_method']; ?></td>
                                                <td><span class="btn btn-xs bg-green"><?php echo $row[ 'node_status']; ?></span></td>
                                                <td>
                                                    <!-- <a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">生成配置文件</a> -->
                                                    <a class="btn btn-info btn-sm" role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">生成二维码</a>
                                                </td>
                                            </tr>
                                            <!-- <div><?php echo $row[ 'node_info']; ?></div> -->

                                        <?php }?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div><!-- /.col (left) -->


            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
