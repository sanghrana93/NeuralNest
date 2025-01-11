<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Neural Nest, LLC 
            <small>Add, Edit, Delete</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addPatient"><i class="fa fa-plus"></i>
                        Add New Patient</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Patients List</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>patientListing" method="POST" id="searchList">
                                <div class="input-group">
                                    <input type="text" name="searchText" value="<?php //echo $searchText; ?>"
                                        class="form-control input-sm pull-right" style="width: 150px;"
                                        placeholder="Search Patients" />
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
                                <th style="width: 23%">Name</th>
                                <th style="width: 23%">Email</th>
                                <th style="width: 15%">Mobile</th>
                                <th style="width: 12%">Date of Birth</th>
                                <th style="width: 12%">Created On</th>
                                <th class="text-center" style="width: 15%">Actions</th>
                            </tr>
                            <?php


                    if(!empty($patientRecords))
                    {
                        foreach($patientRecords as $record)
                        {
                    ?>
                            <tr>
                                <td><?php echo $record->name ?></td>
                                <td><?php echo $record->email ?></td>
                                <td><?php echo $record->mobile ?></td>
                                <td><?php echo date("d-m-Y", strtotime($record->dob)) ?></td>
                                <td><?php echo date("d-m-Y", strtotime($record->createdDtm)) ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info"
                                        href="<?php echo base_url().'editPatient/'.$record->id; ?>" title="Edit"><i
                                            class="fa fa-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger deletePatient" href="#"
                                        data-patientid="<?php echo $record->id; ?>" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                    <a class="btn btn-sm btn-primary"
                                        href="<?= base_url().'patient-history/'.$record->id; ?>" title="View History"><i
                                            class="fa fa-eye"></i></a>
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
        jQuery("#searchList").attr("action", baseURL + "patientListing/" + value);
        jQuery("#searchList").submit();
    });
});
</script>
<script type="text/javascript">
$(document).on('click', '.deletePatient', function() {
    var patientId = $(this).data('patientid');
    if (confirm("Are you sure you want to delete this patient?")) {
        window.location.href = "<?php echo base_url(); ?>deletePatient/" + patientId;
    }
});
</script>