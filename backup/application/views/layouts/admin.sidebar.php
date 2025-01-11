<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree" >
            <li class="header">MAIN NAVIGATION</li>

            <!-- Dashboard -->
            <li>
                <a href="<?php echo base_url(); ?>dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Users Section -->
            <li>
                <a href="<?php echo base_url(); ?>userListing">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>demoList" rel="noopener noreferrer">
                    <i class="fa fa-handshake-o"></i>
                    <span>Demo Requests List</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>menuList" rel="noopener noreferrer">
                    <i class="fa fa-handshake-o"></i>
                    <span>Menu List</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>userAnalysis" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>User analysis</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>artificialIntelligence" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Artifical Intelligence</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>dataScience" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Data Science</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>machineLearning" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Machine Learning</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>mlAiIntegration" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>ML & AI Integration</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>dataArchitecture" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>DA Design and Implementation</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>businessAnalytics" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>BI and Analytics</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>dataGovernance" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Data Governance</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>cloudComputing" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Cloud Computing</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>ourTeam" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Our Team</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>testimonial" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>contactUs" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Contact Us</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>blog" rel="noopener noreferrer">
                    <i class="fa fa fa-book"></i>
                    <span>Blog</span>
                </a>
            </li>

            <!-- Create List -->
            <!-- <li>
            <a href="<?php echo base_url(); ?>patients">
                <i class="fa fa-user-md"></i>
                <span>Create List</span>
            </a>
        </li> -->

            <!-- View Website -->
            <!-- <li>
            <a href="<?php echo base_url(); ?>portfolio" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-paper-plane"></i>
                <span>View website</span>
            </a>
        </li> -->

            <!-- Medical History -->
            <!-- <li>
            <a href="<?php echo base_url(); ?>medicalHistory">
                <i class="fa fa-book"></i>
                <span>Medical History</span>
            </a>
        </li> -->

            <!-- Reports Section -->
            <!-- <li>
            <a href="<?php echo base_url(); ?>reports">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
            </a>
        </li> -->

            <!-- Admin/Manager Tasks -->
            <?php if($role == ROLE_ADMIN || $role == ROLE_MANAGER) { ?>
            <!-- <li>
            <a href="<?php echo base_url(); ?>taskStatus">
                <i class="fa fa-thumb-tack"></i>
                <span>Task Status</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>taskUploads">
                <i class="fa fa-upload"></i>
                <span>Task Uploads</span>
            </a>
        </li> -->
            <?php } ?>

            <!-- Admin Only Section -->
            <?php if($role == ROLE_ADMIN) { ?>
            <!-- <li>
            <a href="<?php echo base_url(); ?>userManagement">
                <i class="fa fa-user-plus"></i>
                <span>User Management</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>systemReports">
                <i class="fa fa-file-text"></i>
                <span>System Reports</span>
            </a>
        </li> -->
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>