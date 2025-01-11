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

                        <!-- Card Controls -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success" id="addCardRow">
                                    <i class="fa fa-plus"></i> Add More Cards
                                </button>
                            </div>
                        </div>

                        <!-- Dynamic Cards Container -->
                        <div id="cardsContainer">
                            <!-- Initial Card Row -->
                            <div class="card-row mb-4">
                                <div class="row">
                                    <div class="col-md-12 mb-2 text-right">
                                        <button type="button" class="btn btn-danger btn-sm delete-card-row">
                                            <i class="fa fa-trash"></i> Delete Row
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Card 1 -->
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label hero-sub-headding">Card Title:</label>
                                                    <input type="text" name="card_titles[]" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label hero-sub-headding">Content Type:</label>
                                                    <select name="content_types[]" class="form-control content-type-select">
                                                        <option value="text">Text</option>
                                                        <option value="image">Image</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                                </div>
                                                <div class="form-group content-container">
                                                    <!-- Content field will be dynamically updated based on selection -->
                                                    <div class="text-content">
                                                        <label class="form-label hero-sub-headding">Text Content:</label>
                                                        <textarea name="card_contents[]" class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="media-content" style="display: none;">
                                                        <label class="form-label hero-sub-headding">Upload File:</label>
                                                        <input type="file" name="card_media[]" class="form-control media-upload" accept="image/*,video/*">
                                                        <div class="media-preview mt-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card 2 -->
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label hero-sub-headding">Card Title:</label>
                                                    <input type="text" name="card_titles[]" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label hero-sub-headding">Content Type:</label>
                                                    <select name="content_types[]" class="form-control content-type-select">
                                                        <option value="text">Text</option>
                                                        <option value="image">Image</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                                </div>
                                                <div class="form-group content-container">
                                                    <!-- Content field will be dynamically updated based on selection -->
                                                    <div class="text-content">
                                                        <label class="form-label hero-sub-headding">Text Content:</label>
                                                        <textarea name="card_contents[]" class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="media-content" style="display: none;">
                                                        <label class="form-label hero-sub-headding">Upload File:</label>
                                                        <input type="file" name="card_media[]" class="form-control media-upload" accept="image/*,video/*">
                                                        <div class="media-preview mt-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Card 3 -->
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label hero-sub-headding">Card Title:</label>
                                                    <input type="text" name="card_titles[]" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label hero-sub-headding">Content Type:</label>
                                                    <select name="content_types[]" class="form-control content-type-select">
                                                        <option value="text">Text</option>
                                                        <option value="image">Image</option>
                                                        <option value="video">Video</option>
                                                    </select>
                                                </div>
                                                <div class="form-group content-container">
                                                    <!-- Content field will be dynamically updated based on selection -->
                                                    <div class="text-content">
                                                        <label class="form-label hero-sub-headding">Text Content:</label>
                                                        <textarea name="card_contents[]" class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="media-content" style="display: none;">
                                                        <label class="form-label hero-sub-headding">Upload File:</label>
                                                        <input type="file" name="card_media[]" class="form-control media-upload" accept="image/*,video/*">
                                                        <div class="media-preview mt-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

.card {
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 10px;
}

.card-body {
    padding: 15px;
}

.delete-card-row {
    margin-bottom: 10px;
}

.card-row {
    position: relative;
    padding: 15px;
    border: 1px dashed #ddd;
    border-radius: 4px;
}

.media-preview-container {
    position: relative;
    display: inline-block;
}

.remove-media {
    position: absolute;
    top: 5px;
    right: 5px;
    z-index: 1;
}

.media-preview img,
.media-preview video {
    display: block;
    margin: 0 auto;
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

    // Add this function to handle content loading
    function loadSavedContent(submenuId) {
        $.ajax({
            url: `${baseUrl}menu/getContent/${submenuId}`,
            type: 'GET',
            success: function(response) {
                if (response.status && response.data) {
                    // Set banner content
                    if (response.data.banner) {
                        $('#banner_title').val(response.data.banner.banner_title);
                        $('#banner_content').val(response.data.banner.banner_content);
                    }

                    // Clear existing card rows except the first one
                    $('#cardsContainer .card-row:not(:first)').remove();

                    // Reset first row
                    const firstRow = $('#cardsContainer .card-row:first');
                    
                    if (response.data.cards && response.data.cards.length > 0) {
                        // Loop through each row of cards
                        Object.keys(response.data.cards).forEach((rowIndex, rowNum) => {
                            let cardRow;
                            if (rowNum === 0) {
                                // Use existing first row
                                cardRow = firstRow;
                            } else {
                                // Create new row for additional cards
                                cardRow = $(createCardRow());
                                $('#cardsContainer').append(cardRow);
                            }

                            // Get cards in this row
                            const cardsInRow = response.data.cards[rowIndex];
                            
                            // Fill in card data
                            cardsInRow.forEach((card, index) => {
                                const cardElement = cardRow.find('.card').eq(index);
                                if (cardElement.length) {
                                    // Set card title
                                    cardElement.find('input[name="card_titles[]"]').val(card.title);
                                    
                                    // Set content type and trigger change event
                                    const contentTypeSelect = cardElement.find('select[name="content_types[]"]');
                                    contentTypeSelect.val(card.content_type).trigger('change');
                                    
                                    // Handle different content types
                                    if (card.content_type === 'text') {
                                        cardElement.find('textarea[name="card_contents[]"]').val(card.content);
                                    } else if (card.media_url) {
                                        const mediaPreview = cardElement.find('.media-preview');
                                        if (card.content_type === 'image') {
                                            mediaPreview.html(`
                                                <div class="media-preview-container">
                                                    <img src="${baseUrl}${card.media_url}" 
                                                         class="img-thumbnail" 
                                                         style="max-height: 150px; max-width: 100%;">
                                                    <button type="button" class="btn btn-sm btn-danger remove-media">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            `);
                                        } else if (card.content_type === 'video') {
                                            mediaPreview.html(`
                                                <div class="media-preview-container">
                                                    <video controls style="max-height: 150px; max-width: 100%;">
                                                        <source src="${baseUrl}${card.media_url}">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <button type="button" class="btn btn-sm btn-danger remove-media">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            `);
                                        }
                                    }
                                }
                            });
                        });
                    } else {
                        // Reset first row if no cards exist
                        firstRow.find('input[name="card_titles[]"]').val('');
                        firstRow.find('textarea[name="card_contents[]"]').val('');
                        firstRow.find('select[name="content_types[]"]').val('text').trigger('change');
                        firstRow.find('.media-preview').empty();
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('Error loading content:', error);
                alert('Error loading content. Please try again.');
            }
        });
    }

    // Modify the existing add content button click handler
    $(document).on('click', '.add-content', function(e) {
        e.preventDefault();
        const menuId = $(this).data('menu-id');
        const submenuId = $(this).data('submenu-id');
        const menuName = $(this).closest('tr').find('td:first').text();
        const submenuName = $(this).closest('.submenu-item').find('.submenu-name').text();
        
        // Set the IDs in the modal
        $('#contentMenuId').val(menuId);
        $('#contentSubmenuId').val(submenuId);
        
        // Clear form
        $('#contentForm')[0].reset();
        
        // Load saved content
        loadSavedContent(submenuId);
        
        // Update modal title
        $('.modal-title').text(`Edit Content for ${menuName} > ${submenuName}`);
        
        // Show the modal
        $('#addContentModal').modal('show');
    });

    // Function to create a new card row
    function createCardRow() {
        return `
            <div class="card-row mb-4">
                <div class="row">
                    <div class="col-md-12 mb-2 text-right">
                        <button type="button" class="btn btn-danger btn-sm delete-card-row">
                            <i class="fa fa-trash"></i> Delete Row
                        </button>
                    </div>
                </div>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label hero-sub-headding">Card Title:</label>
                                    <input type="text" name="card_titles[]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label hero-sub-headding">Content Type:</label>
                                    <select name="content_types[]" class="form-control content-type-select">
                                        <option value="text">Text</option>
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                                <div class="form-group content-container">
                                    <!-- Content field will be dynamically updated based on selection -->
                                    <div class="text-content">
                                        <label class="form-label hero-sub-headding">Text Content:</label>
                                        <textarea name="card_contents[]" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="media-content" style="display: none;">
                                        <label class="form-label hero-sub-headding">Upload File:</label>
                                        <input type="file" name="card_media[]" class="form-control media-upload" accept="image/*,video/*">
                                        <div class="media-preview mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label hero-sub-headding">Card Title:</label>
                                    <input type="text" name="card_titles[]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label hero-sub-headding">Content Type:</label>
                                    <select name="content_types[]" class="form-control content-type-select">
                                        <option value="text">Text</option>
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                                <div class="form-group content-container">
                                    <!-- Content field will be dynamically updated based on selection -->
                                    <div class="text-content">
                                        <label class="form-label hero-sub-headding">Text Content:</label>
                                        <textarea name="card_contents[]" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="media-content" style="display: none;">
                                        <label class="form-label hero-sub-headding">Upload File:</label>
                                        <input type="file" name="card_media[]" class="form-control media-upload" accept="image/*,video/*">
                                        <div class="media-preview mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label hero-sub-headding">Card Title:</label>
                                    <input type="text" name="card_titles[]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label hero-sub-headding">Content Type:</label>
                                    <select name="content_types[]" class="form-control content-type-select">
                                        <option value="text">Text</option>
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                                <div class="form-group content-container">
                                    <!-- Content field will be dynamically updated based on selection -->
                                    <div class="text-content">
                                        <label class="form-label hero-sub-headding">Text Content:</label>
                                        <textarea name="card_contents[]" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="media-content" style="display: none;">
                                        <label class="form-label hero-sub-headding">Upload File:</label>
                                        <input type="file" name="card_media[]" class="form-control media-upload" accept="image/*,video/*">
                                        <div class="media-preview mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Add new card row
    $('#addCardRow').click(function() {
        $('#cardsContainer').append(createCardRow());
    });

    // Delete card row
    $(document).on('click', '.delete-card-row', function() {
        const cardRow = $(this).closest('.card-row');
        const totalRows = $('.card-row').length;
        
        if (totalRows > 1) {
            cardRow.remove();
        } else {
            alert('You cannot delete the last row of cards.');
        }
    });

    // Handle content type changes
    $(document).on('change', '.content-type-select', function() {
        const contentContainer = $(this).closest('.card-body').find('.content-container');
        const textContent = contentContainer.find('.text-content');
        const mediaContent = contentContainer.find('.media-content');
        const mediaUpload = mediaContent.find('.media-upload');
        
        if (this.value === 'text') {
            textContent.show();
            mediaContent.hide();
            mediaUpload.prop('required', false);
        } else {
            textContent.hide();
            mediaContent.show();
            // mediaUpload.prop('required', true);
            
            // Update accepted file types
            mediaUpload.attr('accept', this.value === 'image' ? 'image/*' : 'video/*');
        }
    });

    // Handle media preview
    $(document).on('change', '.media-upload', function() {
        const file = this.files[0];
        const preview = $(this).siblings('.media-preview');
        const contentType = $(this).closest('.card-body').find('.content-type-select').val();
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.empty();
                if (contentType === 'image') {
                    preview.html(`
                        <img src="${e.target.result}" 
                             class="img-thumbnail" 
                             style="max-height: 150px; max-width: 100%;">
                    `);
                } else if (contentType === 'video') {
                    preview.html(`
                        <video controls style="max-height: 150px; max-width: 100%;">
                            <source src="${e.target.result}" type="${file.type}">
                            Your browser does not support the video tag.
                        </video>
                    `);
                }
            };
            reader.readAsDataURL(file);
        }
    });

    // Modify form submission to handle files
    $('#contentForm').submit(function(e) {
        e.preventDefault();
        
        const formData = new FormData();
        formData.append('menu_id', $('#contentMenuId').val());
        formData.append('submenu_id', $('#contentSubmenuId').val());
        
        // Add banner data
        formData.append('banner_title', $('#banner_title').val());
        formData.append('banner_content', $('#banner_content').val());
        
        // Collect card data
        const cardData = [];
        $('.card-row').each(function(rowIndex) {
            const cards = $(this).find('.card').map(function(cardIndex) {
                const card = $(this);
                const contentType = card.find('.content-type-select').val();
                const mediaFile = card.find('.media-upload')[0].files[0];
                
                const cardInfo = {
                    row: rowIndex,
                    position: cardIndex,
                    title: card.find('input[name="card_titles[]"]').val(),
                    content_type: contentType,
                    content: contentType === 'text' ? card.find('textarea[name="card_contents[]"]').val() : ''
                };

                if (mediaFile) {
                    formData.append(`card_media_${rowIndex}_${cardIndex}`, mediaFile);
                }

                return cardInfo;
            }).get();
            
            cardData.push(...cards);
        });
        
        formData.append('cards', JSON.stringify(cardData));
        
        // Show loading state
        const submitBtn = $(this).find('button[type="submit"]');
        const originalBtnText = submitBtn.html();
        submitBtn.html('<i class="fa fa-spinner fa-spin"></i> Saving...').prop('disabled', true);
        
        $.ajax({
            url: `${baseUrl}menu/saveContent`,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response && response.status === 'success') {
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Content saved successfully',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        // Hide the modal
                        $('#addContentModal').modal('hide');
                        
                        // Optional: Reload the content to show updates
                        loadSavedContent($('#contentSubmenuId').val());
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message || 'Failed to save content'
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Server Response:', xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while saving content. Please try again.'
                });
            },
            complete: function() {
                // Reset button state
                submitBtn.html(originalBtnText).prop('disabled', false);
            }
        });
    });

    // Add this to handle modal hidden event
    $('#addContentModal').on('hidden.bs.modal', function () {
        // Reset form
        $('#contentForm')[0].reset();
        // Clear all media previews
        $('.media-preview').empty();
        // Reset content type selects
        $('.content-type-select').val('text').trigger('change');
        // Remove any additional card rows except the first one
        $('#cardsContainer .card-row:not(:first)').remove();
    });

    // Add handler for removing media
    $(document).on('click', '.remove-media', function(e) {
        e.preventDefault();
        const mediaContainer = $(this).closest('.media-content');
        mediaContainer.find('.media-upload').val('');
        mediaContainer.find('.media-preview').empty();
    });
});
</script>
