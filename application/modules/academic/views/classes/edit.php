<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
<div class="container-fluid">

<div class="erp-card" id="editClassForm">
    <div class="erp-header clearfix">
        
        <h4 class="header-title">
            <i class="fa fa-users"></i> Edit Class
            <p style="font-size: 13px; font-weight: normal; color: #6b7280; margin: 4px 0 0 0;">Modify class and assigned sections</p>
        </h4>

        <a href="<?= base_url('academic/classes'); ?>" class="btn btn-primary btn-sm pull-right summary-btn">
            <i class="fa fa-list me-1"></i> All Class List
        </a>

    </div>
    <div class="erp-body">

        <form method="post" action="<?= base_url('academic/classes/update/' . $class->id); ?>">
            <?php if ($this->config->item('csrf_protection')): ?>
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
            <?php endif; ?>

            <div class="row">
                <div class="col-sm-12 section-title">Basic Information</div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Class Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="class" id="name" value="<?= html_escape($class->class); ?>" placeholder="Enter class name" required autocomplete="off" />
                    </div>
                </div>

                <!-- STATUS FIELD -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="is_status">Status</label>
                        <select class="form-control" id="is_status" name="status">
                            <option value="1" <?= (int)$class->is_active === 1 ? 'selected' : ''; ?>>Active</option>
                            <option value="0" <?= (int)$class->is_active === 0 ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- ASSIGN SECTIONS SECTION -->
                <div class="col-sm-12 section-title">Assign Sections</div>

                <div class="col-sm-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <small class="text-muted">Select one or more sections for this class.</small>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="selectAllSections" style="padding: 4px 10px; font-size: 12px;">
                            <i class="fa-solid fa-check-double me-1"></i> 
                            <span id="selectAllText">Select All</span>
                        </button>
                    </div>

                    <div class="section-selection-box" style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 15px; background: #fafafa;">
                        <div class="row">
                            <?php if (!empty($sections)): ?>
                                <?php foreach ($sections as$section): ?>
                                    <div class="col-sm-3 mb-2">
                                        <label class="section-option" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: #fff; border: 1px solid #e5e7eb; border-radius: 6px; cursor: pointer; transition: 0.2s;">
                                            <input type="checkbox" class="form-check-input section-checkbox m-0" name="section_id[]" value="<?= (int) $section->id; ?>" <?= in_array((int)$section->id,$assigned_sections) ? 'checked' : ''; ?> />
                                            <span><?= html_escape($section->section); ?></span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-warning mb-0">
                                        <i class="fa fa-triangle-exclamation me-1"></i> No active sections found.
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="margin-top: 15px;">
                    <div class="pull-right action-group" style="display: flex; gap: 10px;">
                        <a href="<?= base_url('academic/classes'); ?>" class="btn btn-default">
                            <i class="fa fa-rotate-left me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-success btn-submit">
                            <i class="fa fa-save me-1"></i> Update Changes
                        </button>
                    </div>
                </div>

            </div>
        </form>

    </div>

</div>

</div>
</section>

<script>
$(document).ready(function(){
    // Select All / Deselect All Script for Edit Form
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