

<div class="content">
    <div class="user-panel">
        <div class="user-panel-header">
            <div class="user-heading">
                <div class="user-heading-icon">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <div class="user-heading-content">
                    <h3>Academic Year Management</h3>
                    <p>Manage and monitor all academic years</p>
                </div>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addAcademicYearModal">
                <i class="fa-solid fa-plus me-1"></i> Add Academic Year
            </button>
        </div>

        <div class="user-table-container">
            <table class="professional-user-table">
                <thead>
                    <tr>
                        <th class="user-col">YEAR NAME</th>
                        <th>DURATION</th>
                        <th>CURRENT</th>
                        <th>STATUS</th>
                        <th>CREATED AT</th>
                        <th class="action-col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($academic_years)): ?> 
                        <?php foreach ($academic_years as $row): ?>
                        <tr>
                            <td data-label="Year Name">
                                <span class="role-text"><?= html_escape($row->year_name); ?></span>
                            </td>
                            <td data-label="Duration">
                                <span class="date-text"><?= date('d/m/Y', $row->start_date); ?> - <?= date('d/m/Y',$row->end_date); ?></span>
                            </td>
                            <td data-label="Current">
                                <?php if ((int) $row->is_current === 1): ?>
                                    <span class="user-status status-active">Current</span>
                                <?php else: ?>
                                    <span class="user-status status-inactive">No</span>
                                <?php endif; ?>
                            </td>
                            <td data-label="Status">
                                <?php if ($row->status === 'active'): ?>
                                    <span class="user-status status-active">Active</span>
                                <?php else: ?>
                                    <span class="user-status status-inactive">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td data-label="Created At">
                                <span class="date-text"><?= date('d/m/Y', strtotime($row->created_at)); ?></span>
                            </td>
                          <td data-label="Actions">
    <div class="table-actions">
        <!-- EDIT BUTTON -->
        <button type="button" class="table-action edit edit-academic-year" 
            data-id="<?= $row->id; ?>"
            data-year_name="<?= html_escape($row->year_name); ?>"
            data-start_date="<?= !empty($row->start_date) && $row->start_date != '0000-00-00' ? date('d/m/Y', $row->start_date) : ''; ?>"
            data-end_date="<?= !empty($row->end_date) && $row->end_date != '0000-00-00' ? date('d/m/Y', $row->end_date) : ''; ?>"
            data-is_current="<?= $row->is_current; ?>"
            data-status="<?= $row->status; ?>"
            title="Edit">
            <i class="fa-regular fa-pen-to-square"></i>
        </button>

        <!-- DELETE BUTTON -->
        <button data-href="<?= base_url('academic/academic_years/delete/' . $row->id); ?>" type="button" class="table-action delete-item" title="Delete">
            <i class="fa-regular fa-trash-can"></i>
        </button>
    </div>
</td>
                        </tr>
                        <?php endforeach; ?> 
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <div class="text-muted">
                                    <i class="fa-solid fa-folder-open fa-2x mb-2"></i>
                                    <div>No academic years found.</div>
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

<!-- ================================================================
     ADD ACADEMIC YEAR MODAL
================================================================ -->
<div class="modal fade" id="addAcademicYearModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Academic Year</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" action="<?= base_url('academic/academic_years/insert'); ?>">
                <?php if ($this->config->item('csrf_protection')): ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                <?php endif; ?>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Year Name (e.g., 2026 or 2026-2027)</label>
                        <input type="text" name="year_name" class="form-control" maxlength="50" placeholder="Enter year name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="text" name="start_date" class="form-control datepicker" placeholder="DD/MM/YYYY" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">End Date</label>
                        <input type="text" name="end_date" class="form-control datepicker" placeholder="DD/MM/YYYY" autocomplete="off" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_current" value="1" class="form-check-input" id="isCurrentCheck">
                        <label class="form-check-label" for="isCurrentCheck">Set as Current Academic Year</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save me-1"></i> Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ================================================================
     EDIT ACADEMIC YEAR MODAL
================================================================ -->
<div class="modal fade" id="editAcademicYearModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Academic Year</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" id="editAcademicYearForm" action="">
                <?php if ($this->config->item('csrf_protection')): ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                <?php endif; ?>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Year Name</label>
                        <input type="text" name="year_name" id="edit_year_name" class="form-control" maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="text" name="start_date" id="edit_start_date" class="form-control datepicker" placeholder="DD/MM/YYYY" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">End Date</label>
                        <input type="text" name="end_date" id="edit_end_date" class="form-control datepicker" placeholder="DD/MM/YYYY" autocomplete="off" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_current" value="1" class="form-check-input" id="edit_is_current">
                        <label class="form-check-label" for="edit_is_current">Set as Current Academic Year</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="edit_status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save me-1"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Initialize Datepicker with d/m/Y format
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });
});

$(document).on('click', '.edit-academic-year', function () {
    const id = $(this).data('id');
    $('#edit_year_name').val($(this).data('year_name'));
    $('#edit_start_date').val($(this).data('start_date'));
    $('#edit_end_date').val($(this).data('end_date'));
    
    if($(this).data('is_current') == 1) {
        $('#edit_is_current').prop('checked', true);
    } else {
        $('#edit_is_current').prop('checked', false);
    }
    
    $('#edit_status').val($(this).data('status'));
    $('#editAcademicYearForm').attr('action', '<?= base_url("academic/academic_years/update/"); ?>' + id);
    $('#editAcademicYearModal').modal('show');
});

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
        reverseButtons: true,
        showClass: { popup: 'animate__animated animate__fadeInDown' },
        hideClass: { popup: 'animate__animated animate__fadeOutUp' }
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: '<?= display('processing_request') ?>...',
                html: '<?= display('please_wait') ?>',
                allowOutsideClick: false,
                didOpen: () => { Swal.showLoading(); }
            });
            window.location.href = url;
        }
    });
});
</script>