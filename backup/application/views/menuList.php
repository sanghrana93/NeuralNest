<div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-list"></i> Menu Management</h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- Menu Form -->
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Menu</h3>
                    </div>
                    <div class="box-body">
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success flash-message">
                                <?= $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger flash-message">
                                <?= $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <form id="menuForm" action="<?= base_url('menu/add') ?>" method="POST">
                            <div class="form-group">
                                <label>Menu Name *</label>
                                <input type="text" name="menuName" class="form-control" required>
                            </div>
                            <div id="submenuContainer">
                                <div class="form-group submenu-group">
                                    <label>Submenu Name *</label>
                                    <div class="input-group">
                                        <input type="text" name="subMenuNames[]" class="form-control" required>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success add-submenu">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Menu</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Menu List -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Menu Structure</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="40%">Menu</th>
                                        <th width="45%">Submenus</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($menus)): ?>
                                        <?php foreach ($menus as $menu): ?>
                                            <tr data-id="<?= htmlspecialchars($menu->id); ?>">
                                                <td><?= htmlspecialchars($menu->name); ?></td>
                                                <td>
                                                    <ul class="list-unstyled submenu-list" data-menu-id="<?= $menu->id ?>">
                                                        <!-- Submenus will be loaded via AJAX -->
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-info edit-menu">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger delete-menu">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="3" class="text-center">No menus found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Edit Menu Modal -->
<div class="modal fade" id="editMenuModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Menu</h4>
            </div>
            <form id="editMenuForm">
                <div class="modal-body">
                    <input type="hidden" id="editMenuId">
                    <div class="form-group">
                        <label>Menu Name</label>
                        <input type="text" id="editMenuName" class="form-control" required>
                    </div>
                    <div id="editSubmenuContainer">
                        <!-- Submenus will be dynamically added here -->
                    </div>
                    <button type="button" class="btn btn-success btn-sm" id="addSubmenuInEdit">
                        <i class="fa fa-plus"></i> Add Submenu
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Content Modal -->
<div class="modal fade" id="addContentModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Content</h4>
            </div>
            <form id="contentForm">
                <div class="modal-body">
                    <input type="hidden" id="contentMenuId">
                    <input type="hidden" id="contentSubmenuId">
                    
                    <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                        <!-- Banner Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="banner_title" class="form-label hero-sub-headding">Banner Title:</label>
                                <input type="text" id="banner_title" name="banner_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="banner_content" class="form-label hero-sub-headding">Banner Content:</label>
                                <textarea id="banner_content" name="banner_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Card 1 Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="card1_title" class="form-label hero-sub-headding">Card1 Title:</label>
                                <input type="text" id="card1_title" name="card1_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="card1_content" class="form-label hero-sub-headding">Card1 Content:</label>
                                <textarea id="card1_content" name="card1_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Card 2 Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="card2_title" class="form-label hero-sub-headding">Card2 Title:</label>
                                <input type="text" id="card2_title" name="card2_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="card2_content" class="form-label hero-sub-headding">Card2 Content:</label>
                                <textarea id="card2_content" name="card2_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Card 3 Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="card3_title" class="form-label hero-sub-headding">Card3 Title:</label>
                                <input type="text" id="card3_title" name="card3_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="card3_content" class="form-label hero-sub-headding">Card3 Content:</label>
                                <textarea id="card3_content" name="card3_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Service Section -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="Service_title" class="form-label hero-sub-headding">Service Title:</label>
                                <input type="text" id="Service_title" name="Service_title" class="form-control">
                            </div>
                        </div>

                        <!-- Service Card 1 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Service_card_title_1" class="form-label hero-sub-headding">Service Card Title 1:</label>
                                <input type="text" id="Service_card_title_1" name="Service_card_title_1" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="Service_card_content_1" class="form-label hero-sub-headding">Service Card Content 1:</label>
                                <textarea id="Service_card_content_1" name="Service_card_content_1" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Service Card 2 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Service_card_title_2" class="form-label hero-sub-headding">Service Card Title 2:</label>
                                <input type="text" id="Service_card_title_2" name="Service_card_title_2" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="Service_card_content_2" class="form-label hero-sub-headding">Service Card Content 2:</label>
                                <textarea id="Service_card_content_2" name="Service_card_content_2" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Section 1 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="S1_title" class="form-label hero-sub-headding">S1 Title:</label>
                                <input type="text" id="S1_title" name="S1_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="S1_content" class="form-label hero-sub-headding">S1 Content:</label>
                                <textarea id="S1_content" name="S1_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="S2_title" class="form-label hero-sub-headding">S2 Title:</label>
                                <input type="text" id="S2_title" name="S2_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="S2_content" class="form-label hero-sub-headding">S2 Content:</label>
                                <textarea id="S2_content" name="S2_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="S3_title" class="form-label hero-sub-headding">S3 Title:</label>
                                <input type="text" id="S3_title" name="S3_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="S3_content" class="form-label hero-sub-headding">S3 Content:</label>
                                <textarea id="S3_content" name="S3_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Workpress Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="workpress_title" class="form-label hero-sub-headding">Workpress Title:</label>
                                <input type="text" id="workpress_title" name="workpress_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="workpress_content" class="form-label hero-sub-headding">Workpress Content:</label>
                                <textarea id="workpress_content" name="workpress_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Solution Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="solution_title" class="form-label hero-sub-headding">Solution Title:</label>
                                <input type="text" id="solution_title" name="solution_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="solution_content" class="form-label hero-sub-headding">Solution Content:</label>
                                <textarea id="solution_content" name="solution_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Inquiry Section -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Inquary_Title" class="form-label hero-sub-headding">Inquary Title:</label>
                                <input type="text" id="Inquary_Title" name="Inquary_Title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="Inquary_content" class="form-label hero-sub-headding">Inquary Content:</label>
                                <textarea id="Inquary_content" name="Inquary_content" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.submenu-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

.submenu-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 12px;
    margin: 4px 0;
    background-color: #f8f9fa;
    border-radius: 4px;
}

.submenu-name {
    color: #333;
}

.add-content {
    margin-left: 10px;
}

#contentBody {
    min-height: 200px;
    resize: vertical;
}

.modal-xl {
    width: 95%;
    max-width: 1200px;
}

.hero-sub-headding {
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
}

.form-control:focus {
    border-color: #66afe9;
    box-shadow: 0 0 8px rgba(102,175,233,.6);
}

.modal-body {
    padding: 20px;
    background-color: #f9f9f9;
}

.mb-3 {
    margin-bottom: 1rem;
}

.row {
    margin-left: -10px;
    margin-right: -10px;
}

.col-md-6 {
    padding-left: 10px;
    padding-right: 10px;
}

textarea.form-control {
    resize: vertical;
    min-height: 80px;
}
</style>

<script>
const baseUrl = '<?= base_url() ?>';

$(document).ready(function() {
    // Add new submenu field
    $('.add-submenu').click(function() {
        const submenuHtml = `
            <div class="form-group submenu-group">
                <div class="input-group">
                    <input type="text" name="subMenuNames[]" class="form-control" required>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-danger remove-submenu">
                            <i class="fa fa-minus"></i>
                        </button>
                    </span>
                </div>
            </div>
        `;
        $('#submenuContainer').append(submenuHtml);
    });

    // Remove submenu field
    $(document).on('click', '.remove-submenu', function() {
        $(this).closest('.submenu-group').remove();
    });

    // Function to load submenus for each menu
    function loadSubmenus() {
        $('.submenu-list').each(function() {
            const menuId = $(this).data('menu-id');
            const submenuList = $(this);
            
            $.ajax({
                url: `${baseUrl}menu/getSubmenus/${menuId}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    submenuList.empty();
                    if (Array.isArray(response) && response.length > 0) {
                        response.forEach(submenu => {
                            submenuList.append(`
                                <li class="submenu-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="submenu-name">${submenu.name}</span>
                                        <button class="btn btn-xs btn-success add-content" 
                                                data-menu-id="${menuId}" 
                                                data-submenu-id="${submenu.id}">
                                            <i class="fa fa-plus"></i> Content
                                        </button>
                                    </div>
                                </li>
                            `);
                        });
                    } else {
                        submenuList.append('<li class="text-muted">No submenus found</li>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error loading submenus:', error);
                    submenuList.html('<li class="text-danger">Error loading submenus</li>');
                }
            });
        });
    }

    // Load submenus when page loads
    loadSubmenus();

    // Reload submenus after adding new menu
    $('#menuForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                try {
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                    }
                    
                    if (response.status === 'success') {
                        alert(response.message || 'Menu added successfully');
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        } else {
                            location.reload();
                        }
                    } else {
                        alert(response.message || 'An error occurred');
                    }
                } catch (e) {
                    console.error('Error parsing response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Server Response:', xhr.responseText);
            }
        });
    });

    // Handle edit button click
    $(document).on('click', '.edit-menu', function() {
        const menuId = $(this).closest('tr').data('id');
        const menuName = $(this).closest('tr').find('td:first').text();
        
        // Set menu data in modal
        $('#editMenuId').val(menuId);
        $('#editMenuName').val(menuName);
        
        // Clear existing submenus
        $('#editSubmenuContainer').empty();
        
        // Load submenus for this menu
        $.ajax({
            url: `${baseUrl}menu/getSubmenus/${menuId}`,
            type: 'GET',
            dataType: 'json',
            success: function(submenus) {
                if (Array.isArray(submenus) && submenus.length > 0) {
                    submenus.forEach(submenu => {
                        const submenuHtml = `
                            <div class="form-group submenu-group">
                                <div class="input-group">
                                    <input type="text" name="editSubMenuNames[]" 
                                           class="form-control" 
                                           value="${submenu.name}" 
                                           data-submenu-id="${submenu.id}" 
                                           required>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger remove-submenu">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        `;
                        $('#editSubmenuContainer').append(submenuHtml);
                    });
                }
                
                // Show the modal
                $('#editMenuModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('Error loading submenus:', error);
                alert('Error loading submenus. Please try again.');
            }
        });
    });

    // Handle add submenu in edit modal
    $('#addSubmenuInEdit').click(function() {
        const submenuHtml = `
            <div class="form-group submenu-group">
                <div class="input-group">
                    <input type="text" name="editSubMenuNames[]" class="form-control" required>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-danger remove-submenu">
                            <i class="fa fa-minus"></i>
                        </button>
                    </span>
                </div>
            </div>
        `;
        $('#editSubmenuContainer').append(submenuHtml);
    });

    // Handle edit form submission
    $('#editMenuForm').submit(function(e) {
        e.preventDefault();
        
        const menuId = $('#editMenuId').val();
        const menuName = $('#editMenuName').val();
        const submenus = [];
        
        // Collect submenu data
        $('#editSubmenuContainer input[name="editSubMenuNames[]"]').each(function() {
            submenus.push({
                id: $(this).data('submenu-id') || null,
                name: $(this).val()
            });
        });
        
        $.ajax({
            url: `${baseUrl}menu/update/${menuId}`,
            type: 'POST',
            data: {
                menuName: menuName,
                submenus: submenus
            },
            success: function(response) {
                try {
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                    }
                    
                    if (response.status === 'success') {
                        $('#editMenuModal').modal('hide');
                        alert(response.message || 'Menu updated successfully');
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        } else {
                            location.reload();
                        }
                    } else {
                        alert(response.message || 'An error occurred');
                    }
                } catch (e) {
                    console.error('Error parsing response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Server Response:', xhr.responseText);
            }
        });
    });

    // Handle delete button click
    $(document).on('click', '.delete-menu', function() {
        const menuId = $(this).closest('tr').data('id');
        const menuName = $(this).closest('tr').find('td:first').text();
        
        // Show confirmation dialog
        if (confirm(`Are you sure you want to delete "${menuName}" and all its submenus?`)) {
            $.ajax({
                url: `${baseUrl}menu/delete/${menuId}`,
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response && response.status === 'success') {
                        alert(response.message || 'Menu deleted successfully');
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        } else {
                            location.reload();
                        }
                    } else {
                        alert(response.message || 'Failed to delete menu');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Server Response:', xhr.responseText);
                }
            });
        }
    });

    // Handle add content button click
    $(document).on('click', '.add-content', function(e) {
        e.preventDefault();
        const menuId = $(this).data('menu-id');
        const submenuId = $(this).data('submenu-id');
        const menuName = $(this).closest('tr').find('td:first').text();
        const submenuName = $(this).closest('.submenu-item').find('.submenu-name').text();
        
        // Set the IDs in the modal
        $('#contentMenuId').val(menuId);
        $('#contentSubmenuId').val(submenuId);
        
        // Clear all fields first
        $('#contentForm')[0].reset();
        
        // Load existing content if any
        $.ajax({
            url: `${baseUrl}api/menu/content/${submenuId}`,
            type: 'GET',
            success: function(response) {
                if (response.status && response.data) {
                    const content = response.data;
                    
                    // Set values for all fields
                    $('#banner_title').val(content.banner_title || '');
                    $('#banner_content').val(content.banner_content || '');
                    $('#card1_title').val(content.card1_title || '');
                    $('#card1_content').val(content.card1_content || '');
                    $('#card2_title').val(content.card2_title || '');
                    $('#card2_content').val(content.card2_content || '');
                    $('#card3_title').val(content.card3_title || '');
                    $('#card3_content').val(content.card3_content || '');
                    $('#Service_title').val(content.Service_title || '');
                    $('#Service_card_title_1').val(content.Service_card_title_1 || '');
                    $('#Service_card_content_1').val(content.Service_card_content_1 || '');
                    $('#Service_card_title_2').val(content.Service_card_title_2 || '');
                    $('#Service_card_content_2').val(content.Service_card_content_2 || '');
                    $('#S1_title').val(content.S1_title || '');
                    $('#S1_content').val(content.S1_content || '');
                    $('#S2_title').val(content.S2_title || '');
                    $('#S2_content').val(content.S2_content || '');
                    $('#S3_title').val(content.S3_title || '');
                    $('#S3_content').val(content.S3_content || '');
                    $('#workpress_title').val(content.workpress_title || '');
                    $('#workpress_content').val(content.workpress_content || '');
                    $('#solution_title').val(content.solution_title || '');
                    $('#solution_content').val(content.solution_content || '');
                    $('#Inquary_Title').val(content.Inquary_Title || '');
                    $('#Inquary_content').val(content.Inquary_content || '');
                }
                
                // Update modal title to show context
                $('.modal-title').text(`${response.data ? 'Edit' : 'Add'} Content for ${menuName} > ${submenuName}`);
                
                // Show the modal
                $('#addContentModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('Error loading content:', error);
                // Show empty modal if there's an error
                $('#addContentModal').modal('show');
            }
        });
    });

    // Handle content form submission
    $('#contentForm').submit(function(e) {
        e.preventDefault();
        
        const formData = {
            menu_id: $('#contentMenuId').val(),
            submenu_id: $('#contentSubmenuId').val(),
            banner_title: $('#banner_title').val(),
            banner_content: $('#banner_content').val(),
            card1_title: $('#card1_title').val(),
            card1_content: $('#card1_content').val(),
            card2_title: $('#card2_title').val(),
            card2_content: $('#card2_content').val(),
            card3_title: $('#card3_title').val(),
            card3_content: $('#card3_content').val(),
            Service_title: $('#Service_title').val(),
            Service_card_title_1: $('#Service_card_title_1').val(),
            Service_card_content_1: $('#Service_card_content_1').val(),
            Service_card_title_2: $('#Service_card_title_2').val(),
            Service_card_content_2: $('#Service_card_content_2').val(),
            S1_title: $('#S1_title').val(),
            S1_content: $('#S1_content').val(),
            S2_title: $('#S2_title').val(),
            S2_content: $('#S2_content').val(),
            S3_title: $('#S3_title').val(),
            S3_content: $('#S3_content').val(),
            workpress_title: $('#workpress_title').val(),
            workpress_content: $('#workpress_content').val(),
            solution_title: $('#solution_title').val(),
            solution_content: $('#solution_content').val(),
            Inquary_Title: $('#Inquary_Title').val(),
            Inquary_content: $('#Inquary_content').val()
        };
        
        $.ajax({
            url: `${baseUrl}menu/saveContent`,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response && response.status === 'success') {
                    $('#addContentModal').modal('hide');
                    // alert(response.message || 'Content saved successfully');
                } else {
                    alert(response.message || 'Failed to save content');
                }
            },
            error: function(xhr, status, error) {
                console.error('Server Response:', xhr.responseText);
                alert('An error occurred while saving content. Please try again.');
            }
        });
    });
});
</script>
