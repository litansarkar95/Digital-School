<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
<div class="container-fluid">

<div class="erp-card" id="addClassForm">

    <div class="erp-header clearfix">
        
        <h4 class="header-title">
            <i class="fa fa-users"></i> Create Class
        </h4>

        <a href="<?= site_url('academic/classes'); ?>" class="btn btn-primary btn-sm pull-right summary-btn">
            <i class="fa fa-list me-1"></i> All Class List
        </a>

    </div>

    <div class="erp-body">

        <form id="userForm" method="post" action="<?= site_url('academic/classes/store'); ?>" novalidate>
            <div class="row">

                <div class="col-sm-12 section-title">Basic Information</div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Class Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="class" id="name" value="" placeholder="Enter class name" autocomplete="off" required />
                    </div>
                    <div id="firstNameError" class="validation-error text-danger mt-1" style="display: none; font-size: 0.875rem;">
                        <i class="fa-solid fa-circle-exclamation me-1"></i> Please enter class name.
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-control" id="is_active" name="status">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12 section-title">Class Sections</div>

                <div class="col-sm-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <small class="text-muted">Select one or more sections for this class.</small>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="selectAllBtn" style="padding: 4px 10px; font-size: 12px;">
                            <i class="fa-solid fa-check-double me-1"></i>
                            <span id="selectAllText">Select All</span>
                        </button>
                    </div>

                    <div class="section-selection-box" style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 15px; background: #fafafa;">
                        <div class="row">
                            <?php if (!empty($sections)): ?>
                                <?php foreach ($sections as $section): ?>
                                    <div class="col-sm-3 mb-2">
                                        <label class="section-option" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: #fff; border: 1px solid #e5e7eb; border-radius: 6px; cursor: pointer; transition: 0.2s;">
                                            <input type="checkbox" class="form-check-input section-checkbox m-0" name="section_id[]" value="<?= (int) $section->id; ?>" />
                                            <span><?= html_escape($section->section); ?></span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-warning mb-0">
                                        <i class="fa-solid fa-triangle-exclamation me-1"></i>
                                        No active sections found. Please create sections first.
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div id="sectionError" class="validation-error text-danger mt-2" style="display: none; font-size: 0.875rem;">
                        <i class="fa-solid fa-circle-exclamation me-1"></i> Please select at least one section.
                    </div>
                </div>

                <div class="col-sm-12" style="margin-top: 15px;">
                    <div class="pull-right action-group" style="display: flex; gap: 10px;">
                        <button type="reset" class="btn btn-default">
                            <i class="fa fa-rotate-left me-1"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-success btn-submit">
                            <i class="fa fa-save me-1"></i> Save
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
    // Select All / Deselect All Script
    const selectAllBtn = document.getElementById('selectAllBtn');
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
</script>