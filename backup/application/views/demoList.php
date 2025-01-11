<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar"></i> Neural Nest, LLC
            <small>Manage Demo Requests</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <!-- <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addDemoRequest"><i class="fa fa-plus"></i>
                        Add New Demo Request</a>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Demo Requests List</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>demoRequestListing" method="POST" id="searchList">
                                <div class="input-group">
                                    <input type="text" name="searchText" value="<?php //echo $searchText; ?>"
                                        class="form-control input-sm pull-right" style="width: 150px;"
                                        placeholder="Search Requests" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default searchList"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 20%">Client Name</th>
                                <th style="width: 20%">Email</th>
                                <th style="width: 20%">Company Name</th>
                                <th style="width: 15%">Demo Date</th>
                                <th style="width: 15%">Demo Time</th>
                                <th class="text-center" style="width: 10%">Actions</th>
                            </tr>
                            <?php
                            if (!empty($demoRecords)) {
                                foreach ($demoRecords as $record) {
                            ?>
                            <tr>
                                <td><?php echo $record->client_name ?></td>
                                <td><?php echo $record->email ?></td>
                                <td><?php echo $record->company_name ?></td>
                                <td><?php echo date("d-m-Y", strtotime($record->demo_date)) ?></td>
                                <td><?php echo date("h:i A", strtotime($record->demo_time)) ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info"
                                        href="<?php echo base_url().'editDemoRequest/'.$record->id; ?>" title="Edit"><i
                                            class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger deleteDemoRequest" href="#"
                                        data-demoid="<?php echo $record->id; ?>" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('ul.pagination li a').click(function(e) {
        e.preventDefault();
        var link = jQuery(this).get(0).href;
        var value = link.substring(link.lastIndexOf('/') + 1);
        jQuery("#searchList").attr("action", baseURL + "demoRequestListing/" + value);
        jQuery("#searchList").submit();
    });
});
</script>
<script type="text/javascript">
$(document).on('click', '.deleteDemoRequest', function() {
    var demoId = $(this).data('demoid');
    if (confirm("Are you sure you want to delete this demo request?")) {
        window.location.href = "<?php echo base_url(); ?>deleteDemoRequest/" + demoId;
    }
});
</script>