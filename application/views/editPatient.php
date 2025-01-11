<div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-edit"></i> Edit Patient</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Patient Details</h3>
                    </div>
                    <form role="form" action="<?php echo base_url() ?>editPatient/<?php echo $patient->id; ?>"
                        method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="<?php echo $patient->name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?php echo $patient->email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    value="<?php echo $patient->mobile; ?>">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob"
                                    value="<?php echo $patient->dob; ?>">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address"
                                    name="address"><?php echo $patient->address; ?></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update">
                            <a href="<?php echo base_url(); ?>patients" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>