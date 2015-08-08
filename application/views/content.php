<!--Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    
</section>

<!-- Main content -->
<section class="content">

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                        <?php echo $total_keys;?>
                    </h3>
                    <p>
                        Total Keys
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        <?php echo $total_news;?>
                    </h3>
                    <p>
                        Total News
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        </div><!-- ./col -->
    </div><!-- /.row -->

    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Latest Keys</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Key</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Full Name</th>
                                        </tr>
                                        <?php
                                        $i=0;
                                        foreach($latest_five_keys as $key)
                                        {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $key['key'];?></td>
                                            <td><?php echo $key['phone'];?></td>
                                            <td><?php echo $key['email'];?></td>
                                            <td><?php echo $key['full_name'];?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Latest News</h3>

                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Title</th>
                                            <th>Intro</th>
                                            <th>Detail</th>
                                            <th>Date</th>
                                            <!-- <th style="width: 40px">View</th> -->
                                        </tr>
                                        <?php
                                        $i=0;
                                        foreach($latest_five_news as $news)
                                        {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $news['title'];?></td>
                                            <td><?php echo $news['intro'];?></td>
                                            <td>
                                                <?php echo $news['detail'];?>
                                            </td>
                                            <td>
                                                <?php echo date("F j,Y",strtotime($news['date']));?>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- /.col -->
                    </div>

    <!-- Main row -->


</section>
<!-- /.content