<section class="content-header">
    <h1>
        Keys
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>Key</th>
                            <!-- <th>Action</th> -->
                        </tr>
                        <?php
                        foreach($keys as $key)
                        {
                        ?>
                        <tr>
                            <td><?php echo $key['id'];?></td>
                            <td><?php echo $key['key'];?></td>
                            <!-- <td>
                                <a href="<?php echo base_url();?>/index.php/welcome/feed_detail/<?php echo $feed['feed_id'];?>">View</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo base_url();?>/index.php/welcome/edit_feed/<?php echo $feed['feed_id'];?>">Edit</a>
                            </td> -->
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