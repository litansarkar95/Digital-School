
<section class="content">
<div class="container-fluid">

    <div class="top-sub-box">
        <div class="top-sub-box-left">
            <div class="top-sub-box-icon">
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="top-sub-box-text">
                <h5>Staff Management</h5>
                <p>Create and manage school Staff efficiently.</p>
            </div>
        </div>
    </div>

    <!-- MAIN CARD -->
    <div class="erp-card" id="addClassForm">

        <!-- HEADER -->
        <div class="erp-header">
            <h4 class="header-title">
                <i class="fa fa-users"></i> Create Staff
            </h4>
            <a href="<?= base_url(); ?>staff" class="btn btn-primary summary-btn">
                <i class="fa fa-list me-1"></i> All Staff List
            </a>
        </div>

        <!-- BODY -->
        <div class="erp-body">
            <form id="userForm" method="post" action="<?= site_url('academic/classes/store'); ?>" enctype="multipart/form-data" novalidate>
                <div class="row">

                    <!-- SUB DIVISION WRAPPER -->
                    <div class="col-sm-12">
                        <div class="sub-section-box">
                            <div class="row">
                                <!-- BASIC INFORMATION -->
                                <div class="col-sm-12 section-title">
                                    Basic Information
                                </div>

                                <!-- CLASS NAME -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">
                                            Class Name <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="class" id="name" placeholder="Enter class name" autocomplete="off" required>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="is_active">
                                            Status
                                        </label>
                                        <select class="form-control" id="is_active" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="">
                                            Status (Select2)
                                        </label>
                                        <select class="form-control select2" name="estatus">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- DESCRIPTION -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="description">
                                            Description
                                        </label>
                                        <textarea class="form-control" name="description" id="description" placeholder="Write a short description about this class..."></textarea>
                                    </div>
                                </div>

                                <!-- FILE UPLOAD INPUT -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="class_image">
                                            Class Document / PDF
                                        </label>
                                        <div class="file-upload-wrapper">
                                            <input type="file" name="class_image" id="class_image" class="file-upload-input" accept=".pdf,image/jpeg,image/jpg,image/png">
                                            
                                            <div class="file-upload-placeholder" id="uploadPlaceholder">
                                                <i class="fa-solid fa-paperclip"></i>
                                                <span>Attach image or PDF</span>
                                            </div>

                                            <div class="file-preview-container" id="filePreview">
                                                <div class="file-preview-left">
                                                    <i class="fa-solid fa-file-pdf preview-file-icon" id="fileTypeIcon"></i>
                                                    <span class="preview-file-name" id="previewFileName"></span>
                                                </div>
                                                <button type="button" class="remove-file-btn" id="removeFile" title="Remove file">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CLASS SECTIONS -->
                    <div class="col-sm-12 section-title">
                        Class Sections
                    </div>

                    <div class="col-sm-12 mb-2">
                        <div class="section-toolbar">
                            <div>
                                <small class="text-muted">Select one or more sections for this class.</small>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="selectAllBtn">
                                <i class="fa-solid fa-check-double me-1"></i>
                                <span id="selectAllText">Select All</span>
                            </button>
                        </div>

                        <!-- SECTION LIST -->
                        <div class="section-selection-box">
                            <div class="row">
                                <?php if (!empty($sections)): ?>
                                    <?php foreach ($sections as $section): ?>
                                        <div class="col-sm-3 mb-2">
                                            <label class="section-option">
                                                <input type="checkbox" class="form-check-input section-checkbox" name="section_id[]" value="<?= (int) $section->id; ?>">
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
                    </div>

                    <!-- MESSAGE TOGGLE SECTION (মেসেজ পাঠান ট্রাগল বক্স) -->
                    <div class="col-sm-12">
                        <div class="msg-toggle-card" id="msgToggleCard">
                            <div class="msg-toggle-header" id="msgToggleHeader">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-regular fa-comment-dots text-primary"></i>
                                    <span>মেসেজ পাঠান (ঐচ্ছিক নোটিফিকেশন)</span>
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="msg-toggle-body" id="msgToggleBody">
                                <div class="form-group mb-0">
                                    <label class="form-label" for="custom_message">শিক্ষার্থী বা অভিভাবকদের জন্য নোটিফিকেশন বার্তা</label>
                                    <textarea class="form-control" name="custom_message" id="custom_message" placeholder="এই নতুন ক্লাস তৈরি সম্পর্কিত কোনো নোটিফিকেশন মেসেজ লিখতে চাইলে এখানে লিখুন..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ACTION BUTTON -->
                    <div class="col-sm-12" style="margin-top:15px;">
                        <div class="action-group">
                            <button type="reset" class="btn btn-default">
                                <i class="fa fa-rotate-left me-1"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-submit">
                                <i class="fa fa-save me-1"></i> Save Class
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
</section>

<!-- ========================================================= 
    JAVASCRIPT 
========================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* Initialize Select2 if available */
    if (typeof jQuery !== 'undefined' && jQuery().select2) {
        $('.select2').select2({
            minimumResultsForSearch: Infinity
        });
    }

    /* Message Toggle Script */
    const msgToggleHeader = document.getElementById('msgToggleHeader');
    const msgToggleCard = document.getElementById('msgToggleCard');
    const msgToggleBody = document.getElementById('msgToggleBody');

    if (msgToggleHeader) {
        msgToggleHeader.addEventListener('click', function () {
            if (msgToggleCard.classList.contains('open')) {
                msgToggleCard.classList.remove('open');
                $(msgToggleBody).slideUp(200);
            } else {
                msgToggleCard.classList.add('open');
                $(msgToggleBody).slideDown(200);
            }
        });
    }

    /* Select All Script */
    const selectAllBtn = document.getElementById('selectAllBtn');
    const selectAllText = document.getElementById('selectAllText');
    const checkboxes = document.querySelectorAll('.section-checkbox');

    function updateSelectAll() {
        if (!checkboxes.length) { return; }
        let checked = document.querySelectorAll('.section-checkbox:checked').length;
        if (checked === checkboxes.length) {
            selectAllText.textContent = 'Deselect All';
            selectAllBtn.querySelector('i').className = 'fa-solid fa-xmark me-1';
        } else {
            selectAllText.textContent = 'Select All';
            selectAllBtn.querySelector('i').className = 'fa-solid fa-check-double me-1';
        }
    }

    if (selectAllBtn) {
        selectAllBtn.addEventListener('click', function () {
            let allChecked = document.querySelectorAll('.section-checkbox:checked').length === checkboxes.length;
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = !allChecked;
            });
            updateSelectAll();
        });
    }

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateSelectAll);
    });

    /* File Name Inside Input Script */
    const fileInput = document.getElementById('class_image');
    const uploadPlaceholder = document.getElementById('uploadPlaceholder');
    const filePreview = document.getElementById('filePreview');
    const previewFileName = document.getElementById('previewFileName');
    const fileTypeIcon = document.getElementById('fileTypeIcon');
    const removeFile = document.getElementById('removeFile');

    if (fileInput) {
        fileInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) { return; }

            if (file.size > 5 * 1024 * 1024) {
                alert('File size must be less than 5MB.');
                fileInput.value = '';
                return;
            }

            const fileName = file.name;
            const fileExtension = fileName.split('.').pop().toLowerCase();

            if (fileExtension === 'pdf') {
                fileTypeIcon.className = 'fa-solid fa-file-pdf preview-file-icon text-danger';
            } else if (['jpg', 'jpeg', 'png'].includes(fileExtension)) {
                fileTypeIcon.className = 'fa-solid fa-file-image preview-file-icon text-success';
            } else {
                fileTypeIcon.className = 'fa-solid fa-file-lines preview-file-icon text-primary';
            }

            previewFileName.textContent = fileName;
            uploadPlaceholder.style.display = 'none';
            filePreview.style.display = 'flex';
        });
    }

    if (removeFile) {
        removeFile.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            fileInput.value = '';
            previewFileName.textContent = '';
            filePreview.style.display = 'none';
            uploadPlaceholder.style.display = 'flex';
        });
    }

    /* Form Reset Script */
    const userForm = document.getElementById('userForm');
    if (userForm) {
        userForm.addEventListener('reset', function () {
            setTimeout(function () {
                if (fileInput) { fileInput.value = ''; }
                if (previewFileName) { previewFileName.textContent = ''; }
                if (filePreview) { filePreview.style.display = 'none'; }
                if (uploadPlaceholder) { uploadPlaceholder.style.display = 'flex'; }
                if (selectAllText) { selectAllText.textContent = 'Select All'; }
                if (msgToggleCard && msgToggleCard.classList.contains('open')) {
                    msgToggleCard.classList.remove('open');
                    $(msgToggleBody).slideUp(200);
                }
                if (typeof jQuery !== 'undefined' && jQuery().select2) {
                    $('.select2').val(null).trigger('change');
                }
            }, 50);
        });
    }
});
</script>