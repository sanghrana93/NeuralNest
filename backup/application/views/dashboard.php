<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-tachometer-alt"></i> Dashboard
            <small>Overview of the system</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Total Patients -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $totalDemo; ?></h3>
                        <p>Total Demo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>demoList" class="small-box-footer">More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- New Appointments -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>TESTING<?php //echo $newAppointments; ?></h3>
                        <p>New Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>appointmentList" class="small-box-footer">More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Total Staff -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>TESTING<?php //echo $totalStaff; ?></h3>
                        <p>Staff Members</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>staffList" class="small-box-footer">More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Reopened Issues -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>TESTING<?php //echo $reopenedIssues; ?></h3>
                        <p>Reopened Issues</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>issueList" class="small-box-footer">More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>