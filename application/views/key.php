<section class="content-header">
    <h1>
        Keys
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <a href="<?php echo site_url('admin/create_key') ?>"><button class="btn btn-info pull-right" style="margin:10px ">Add Key</button></a>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>#</th>
                            <th>Key</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        foreach($keys as $key)
                        {
                        ?>
                        <tr>
                            <td><?php echo $key['id'];?></td>
                            <td><?php echo $key['key'];?></td>
                            <td><?php echo $key['phone'];?></td>
                            <td><?php echo $key['email'];?></td>
                            <td><?php echo $key['full_name'];?></td>
                            <td><?php echo ($key['is_active'] == 1) ? "Active" : "Inactive";?></td>
                            <td>
                                <a href="<?php echo base_url();?>/index.php/admin/key_detail/<?php echo $key['id'];?>">View</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo base_url();?>/index.php/admin/edit_key/<?php echo $key['id'];?>">Edit</a>
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