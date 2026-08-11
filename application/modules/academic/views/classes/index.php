<div class="content">
    <div class="user-panel">

        <!-- USER PANEL HEADER -->
        <div class="user-panel-header">
            <div class="user-heading">
                <div class="user-heading-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="user-heading-content">
                    <h3>Class Management</h3>
                    <p>Manage and monitor all organization classes</p>
                </div>
            </div>

            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addClassModal">
                <i class="fa-solid fa-plus me-1"></i>
                Add Class
            </button>
        </div>

        <!-- TOOLBAR (SEARCH & STATUS FILTER) -->
        <form method="get" action="<?= base_url('academic/classes'); ?>">
            <div class="user-toolbar">
                <!-- SEARCH -->
                <div class="toolbar-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="search" value="<?= html_escape($this->input->get('search')); ?>" placeholder="Search classes...">
                </div>

                <!-- STATUS FILTER -->
                <div class="toolbar-select">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                    <select name="status" onchange="this.form.submit()">
                        <option value="">All Status</option>
                        <option value="1" <?= $this->input->get('status') === '1' ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?= $this->input->get('status') === '0' ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
            </div>
        </form>

        <!-- USER TABLE CONTAINER -->
        <div class="user-table-container">
            <table class="professional-user-table">
                <thead>
                    <tr>
                        <th class="user-col">CLASS NAME</th>
                        <th>STATUS</th>
                        <th>CREATED AT</th>
                        <th class="action-col">ACTIONS</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($classes)): ?> 
                        <?php foreach ($classes as $row): ?>
                            <tr>
                              <td data-label="Class Name">
                            <div class="d-flex flex-column">
                                <span class="role-text fw-bold"><?= html_escape($row->class); ?></span>
                                <?php if (!empty($row->sections)): ?>
                                    <small class="text-muted">
                                        <i class="fa-solid fa-layer-group me-1"></i> Sections: <?= html_escape($row->sections); ?>
                                    </small>
                                <?php else: ?>
                                    <small class="text-danger">No sections assigned</small>
                                <?php endif; ?>
                            </div>
                        </td>

                                <td data-label="Status">
                                    <?php if ((int) $row->is_active === 1): ?>
                                        <span class="user-status status-active">Active</span>
                                    <?php else: ?>
                                        <span class="user-status status-inactive">Inactive</span>
                                    <?php endif; ?>
                                </td>

                                <td data-label="Created At">
                                    <span class="date-text"><?= date('M d, Y', strtotime($row->created_at)); ?></span>
                                </td>

                                <td data-label="Actions">
                                    <div class="table-actions">
                                    
                                        <a href="<?= base_url('academic/classes/edit/' . (int) $row->id); ?>" class="table-action edit" title="Edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button data-href="<?= base_url('academic/classes/delete/' . $row->id); ?>" type="button" class="table-action delete-item" title="Delete">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?> 
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center py-5">
                                <div class="text-muted">
                                    <i class="fa-solid fa-folder-open fa-2x mb-2"></i>
                                    <div>No classes found.</div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

      
        <?php if ($total_rows > 0): ?>
            <div class="user-pagination">
                <div class="pagination-info">
                    Showing <strong><?= (int) $start; ?>–<?= (int) $end; ?></strong> of <strong><?= (int) $total_rows; ?></strong> <?= html_escape($label); ?>
                </div>
                <?= $pagination; ?>
            </div>
        <?php endif; ?>

    </div>
</div>



<script>
// Select All Checkbox Script for Modal
document.addEventListener('DOMContentLoaded', function () {
    const selectAllBtn = document.getElementById('selectAllSections');
    const selectAllText = document.getElementById('selectAllText');
    const checkboxes = document.querySelectorAll('.section-checkbox');

    if (selectAllBtn && checkboxes.length > 0) {
        selectAllBtn.addEventListener('click', function () {
            let allChecked = true;
            checkboxes.forEach(function (cb) {
                if (!cb.checked) {
                    allChecked = false;
                }
            });

            checkboxes.forEach(function (cb) {
                cb.checked = !allChecked;
            });

            if (!allChecked) {
                selectAllText.textContent = 'Deselect All';
                selectAllBtn.querySelector('i').className = 'fa-solid fa-xmark me-1';
            } else {
                selectAllText.textContent = 'Select All';
                selectAllBtn.querySelector('i').className = 'fa-solid fa-check-double me-1';
            }
        });
    }
});

// SweetAlert Delete Confirmation Script
$(document).on('click', '.delete-item', function (e) { 
    e.preventDefault();
    const url = $(this).attr('data-href');

    Swal.fire({
        title: '<?= display('are_you_sure') ?>', 
        text: '<?= display('warning_this_action_is_irreversible') ?>',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', 
        cancelButtonColor: '#3085d6',
        confirmButtonText: '<i class="fa fa-trash"></i> <?= display('yes_delete_it') ?>!',
        cancelButtonText: '<?= display('no_go_back') ?>',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: '<?= display('processing_request') ?>...',
                html: '<?= display('please_wait') ?>',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            window.location.href = url;
        }
    });
});
</script>