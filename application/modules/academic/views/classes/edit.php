<div class="content">
    <div class="panel-card" id="editClassForm">
        
        <div class="panel-header">
            <div class="panel-title-wrap">
                <div class="panel-title-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <h5>Edit Class</h5>
                    <p>Modify class and assigned sections</p>
                </div>
            </div>

            <a class="btn btn-primary" href="<?= base_url('academic/classes'); ?>">
                <i class="fa-solid fa-list me-1"></i>
                All Class List
            </a>
        </div>

        <div class="panel-body">
            <form method="post" action="<?= base_url('academic/classes/update/' . $class->id); ?>">
                <?php if ($this->config->item('csrf_protection')): ?>
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                <?php endif; ?>

                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <label class="form-label" for="name">Class Name</label>
                        <input type="text" class="form-control" name="class" id="name" value="<?= html_escape($class->class); ?>" placeholder="Enter class name" required autocomplete="off" />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="1" <?= (int)$class->is_active === 1 ? 'selected' : ''; ?>>Active</option>
                            <option value="0" <?= (int)$class->is_active === 0 ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h6 class="mb-1">
                                    <i class="fa-solid fa-layer-group me-1"></i>
                                    Assign Sections
                                </h6>
                                <small class="text-muted">Select one or more sections for this class.</small>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="selectAllSections">
                                <i class="fa-solid fa-check-double me-1"></i> <span id="selectAllText">Select All</span>
                            </button>
                        </div>

                        <div class="section-selection-box" style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 18px; background: #fafafa;">
                            <div class="row g-3">
                                <?php if (!empty($sections)): ?>
                                    <?php foreach ($sections as $section): ?>
                                        <div class="col-md-4 col-lg-3">
                                            <label class="section-option" style="display: flex; align-items: center; gap: 10px; padding: 13px 15px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; cursor: pointer;">
                                                <input type="checkbox" class="form-check-input section-checkbox m-0" name="section_id[]" value="<?= (int) $section->id; ?>" <?= in_array((int)$section->id, $assigned_sections) ? 'checked' : ''; ?> />
                                                <span><?= html_escape($section->section); ?></span>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="col-12">
                                        <div class="alert alert-warning mb-0">No active sections found.</div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a href="<?= base_url('academic/classes'); ?>" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-save me-1"></i> Update Changes
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const selectAllBtn = document.getElementById('selectAllSections');
    const selectAllText = document.getElementById('selectAllText');
    const checkboxes = document.querySelectorAll('.section-checkbox');

    if (selectAllBtn && checkboxes.length > 0) {
        selectAllBtn.addEventListener('click', function () {
            let allChecked = true;
            checkboxes.forEach(function (cb) {
                if (!cb.checked) { allChecked = false; }
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
</script>