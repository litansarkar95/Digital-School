<div class="content">
    <div class="panel-card" id="addClassForm">
        
        <!-- PANEL HEADER -->
        <div class="panel-header">
            <div class="panel-title-wrap">
                <div class="panel-title-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <h5>Create Class</h5>
                    <p>Manage Create Class</p>
                </div>
            </div>

            <a class="btn btn-primary" href="<?= site_url('academic/classes'); ?>">
                <i class="fa-solid fa-list me-1"></i>
                All Class List
            </a>
        </div>

        <div class="panel-body">

            <form id="userForm" method="post" action="<?= site_url('academic/classes/store'); ?>" novalidate>
                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <label class="form-label" for="name">Class Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="class" id="name" value="" placeholder="Enter class name" autocomplete="off" required />
                        </div>
                        
                        <div id="firstNameError" class="validation-error text-danger mt-1" style="display: none; font-size: 0.875rem;">
                            <i class="fa-solid fa-circle-exclamation me-1"></i>
                            Please enter class name.
                        </div>
                    </div>

                    <!-- STATUS FIELD -->
                    <div class="col-md-6">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>

                    <!-- CLASS SECTIONS SECTION -->
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h6 class="mb-1">
                                    <i class="fa-solid fa-layer-group me-1"></i>
                                    Class Sections
                                </h6>
                                <small class="text-muted">Select one or more sections for this class.</small>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="selectAllBtn">
                                <i class="fa-solid fa-check-double me-1"></i>
                                <span id="selectAllText">Select All</span>
                            </button>
                        </div>

                        <div class="section-selection-box" style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 18px; background: #fafafa;">
                            <div class="row g-3">
                                <?php if (!empty($sections)): ?>
                                    <?php foreach ($sections as $section): ?>
                                        <div class="col-md-4 col-lg-3">
                                            <label class="section-option" style="display: flex; align-items: center; gap: 10px; padding: 13px 15px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; cursor: pointer; transition: 0.2s;">
                                                <input type="checkbox" class="form-check-input section-checkbox m-0" name="section_id[]" value="<?= (int) $section->id; ?>" />
                                                <span><?= html_escape($section->section); ?></span>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="col-12">
                                        <div class="alert alert-warning mb-0">
                                            <i class="fa-solid fa-triangle-exclamation me-1"></i>
                                            No active sections found. Please create sections first.
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div id="sectionError" class="validation-error text-danger mt-2" style="display: none; font-size: 0.875rem;">
                            <i class="fa-solid fa-circle-exclamation me-1"></i>
                            Please select at least one section.
                        </div>
                    </div>

                    <!-- SELECTED SECTION PREVIEW -->
                    <div class="col-12">
                        <div id="selectedSectionPreview" class="selected-preview" style="display: none;">
                            <div class="mb-2">
                                <strong>Selected Sections</strong>
                            </div>
                            <div id="selectedSectionList"></div>
                        </div>
                    </div>

                    <!-- FORM ACTIONS / BUTTONS -->
                    <div class="col-12">
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <button type="reset" class="btn btn-light-custom">
                                <i class="fa-solid fa-rotate-left me-1"></i>
                                Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-check me-1"></i>
                                Save
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        
    </div>
</div>

<script>
window.addEventListener('DOMContentLoaded', function () {
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