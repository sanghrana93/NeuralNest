<div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-user-plus"></i> Add New Patient</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Patient Details</h3>
                    </div>
                    <form role="form" id="addNewPatient" action="<?php echo base_url() ?>addPatient" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control required" id="name" name="name"
                                    value="<?php echo set_value('name'); ?>" maxlength="128">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control required" id="email" name="email"
                                    value="<?php echo set_value('email'); ?>" maxlength="128">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control required digits" id="mobile" name="mobile"
                                    value="<?php echo set_value('mobile'); ?>" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control required" id="dob" name="dob"
                                    value="<?php echo set_value('dob'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control required" id="address"
                                    name="address"><?php echo set_value('address'); ?></textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>