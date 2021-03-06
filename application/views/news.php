<section class="content-header">
    <h1>
        News
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo site_url('admin/create_news') ?>"><button class="btn btn-info pull-right" style="margin:10px ">Add News</button></a>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Intro</th>
                            <th>Detail</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        foreach($news as $n)
                        {
                        ?>
                        <tr>
                            <td><?php echo $n['news_id'];?></td>
                            <td><?php echo $n['title'];?></td>
                            <td><?php echo $n['intro'];?></td>
                            <td><?php echo $n['detail'];?></td>
                            <td><?php echo $n['date'];?></td>
                            <td><?php echo ($n['is_active'] == 1) ? "Active" : "Inactive";?></td>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/admin/news_detail/<?php echo $n['news_id'];?>">View</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo base_url();?>/index.php/admin/edit_news/<?php echo $n['news_id'];?>">Edit</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            <?php echo $links;?>
        </div></div>
    </div>
</section><!-- /.content