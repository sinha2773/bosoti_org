<a class="btn btn-primary pull-right" href="<?php echo base_url($admin_path);?>/common/add/<?php echo $action;?>">Add New</a>
<?php $income_types = array();
$exps = $this->master->get_all('tbl_income_types');
if(!empty($exps))
    foreach($exps as $key=>$val){
        $income_types[$val->id] = $val->title;
    }

    $users = $this->master->get_all($this->master->user_table);
    $user_arr = array();
    foreach($users as $obj){
        $user_arr[$obj->id] = $obj->name.' '.$obj->surname;
    }
    ?>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="listTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>By</th>
                            <th>From</th>
                            <th>Inc Type</th>
                            <th>Invoice</th>
                            <th>Amount</th>
                            <th>Invoice Date</th>
                            <th>Remark</th>
                            <th>Status</th>
                            <!-- <th>Created</th> -->
                            <th>Updated</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                     <?php foreach ($lists as $key => $values) { ?>
                     <tr>
                        <td><?php echo $values->id ?></td>
                        <td><?php echo $user_arr[$values->user_id]; ?></td>
                        <td><?php echo $values->payment_from; ?></td>
                        <td><?php echo isset($income_types[$values->intype_id]) ? $income_types[$values->intype_id] : ''; ?></td>
                        <td><?php echo $values->invoice; ?></td>
                        <td><?php echo $values->amount; ?></td>
                        <td><?php echo $values->income_date; ?></td>
                        <td><?php echo $values->remark; ?></td>
                        <td><?php echo $values->status==1?'<span class="btn btn-success btn-xs">Published</span>':'<span class="btn btn-danger btn-xs">Pending</span>'; ?></td>
                        <!-- <td><?php echo $values->created; ?></td> -->
                        <td><?php echo $values->updated; ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-xs btn-primary" href="<?php echo base_url($admin_path) ?>/common/edit/<?php echo $action;?>/<?php echo $values->id ?>">Edit</a> 
                            <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to Delete?')" href="<?php echo base_url() ?>admin/income/delete_income/<?php echo $values->id ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>


            </table>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(function() {
        $('#listTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>