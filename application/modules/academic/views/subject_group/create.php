<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
<div class="container-fluid">

<div class="erp-card" id="addGroupForm">

    <div class="erp-header clearfix">
        <h4 class="header-title">
            <i class="fa fa-object-group"></i> Create Subject Group
        </h4>
        <a href="<?= site_url('academic/subjectgroup'); ?>" class="btn btn-primary btn-sm pull-right summary-btn">
            <i class="fa fa-list me-1"></i> All Group List
        </a>
    </div>

    <div class="erp-body">
        <form id="groupForm" method="post" action="<?= site_url('academic/subjectgroup/insert'); ?>" novalidate>
            <div class="row">

                <div class="col-sm-12 section-title">Basic Information</div>
                
                <!-- Group Name -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="name">Group Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter group name (e.g. Science)" required />
                    </div>
                </div>

                <!-- Select Class -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label" for="class_id">Select Class <span class="required">*</span></label>
                        <select class="form-control" id="class_id" name="class_id" required>
                            <option value="">-- Select Class --</option>
                            <?php if(!empty($classes)): ?>
                                <?php foreach($classes as $cls): ?>
                                    <option value="<?= $cls->id; ?>"><?= html_escape($cls->class); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

             

                <div class="col-sm-12 section-title mt-3">Class Sections</div>

                <div class="col-sm-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <small class="text-muted">Select one or more sections for this group.</small>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm" id="selectAllSections" style="padding: 4px 10px; font-size: 12px;">
                            <i class="fa-solid fa-check-double me-1"></i>
                            <span id="selectAllSectionsText">Select All</span>
                        </button>
                    </div>

                    <div class="section-selection-box" style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 15px; background: #fafafa;">
                     
                        <div class="row" id="section_checkbox_container">
                            <div class="col-sm-12">
                                <span class="text-muted">Please select a class first to load sections.</span>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="col-sm-12 section-title mt-3">Assign Subjects</div>

                <div class="col-sm-12 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <small class="text-muted">Select one or more subjects for this group.</small>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm select-all-btn" data-target=".subject-checkbox" style="padding: 4px 10px; font-size: 12px;">
                            <i class="fa-solid fa-check-double me-1"></i>
                            <span class="btn-text">Select All</span>
                        </button>
                    </div>

                    <div class="section-selection-box" style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 15px; background: #fafafa;">
                        <div class="row">
                            <?php if (!empty($subjects)): ?>
                                <?php foreach ($subjects as $sub): ?>
                                    <div class="col-sm-3 mb-2">
                                        <label class="section-option" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: #fff; border: 1px solid #e5e7eb; border-radius: 6px; cursor: pointer; transition: 0.2s;">
                                            <input type="checkbox" class="form-check-input subject-checkbox m-0" name="subject_ids[]" value="<?= (int) $sub->id; ?>" />
                                            <span><?= html_escape($sub->name); ?> (<?= html_escape($sub->code); ?>)</span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-sm-12">
                                    <div class="alert alert-warning mb-0">No subjects found.</div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
   <!-- Description -->
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="2" placeholder="Optional details"></textarea>
                    </div>
                </div>
                <!-- Action Buttons -->
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
    $('#class_id').change(function() {
        var classId = $(this).val();
        if(classId) {
            $.ajax({
                url: "<?php echo base_url('student/get_sections_by_class'); ?>",
                type: "POST",
                data: { class_id: classId },
                dataType: "json",
                success: function(data) {
                    var html = '';
                    if(data.length > 0) {
                        $.each(data, function(key, value) {
                            html += '<div class="col-sm-3 mb-2">';
                            html += '<label class="section-option" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; background: #fff; border: 1px solid #e5e7eb; border-radius: 6px; cursor: pointer; transition: 0.2s;">';
                            html += '<input type="checkbox" class="form-check-input section-checkbox m-0" name="section_ids[]" value="'+ value.id +'" />';
                            html += '<span>'+ value.section +'</span>';
                            html += '</label>';
                            html += '</div>';
                        });
                    } else {
                        html += '<div class="col-sm-12"><span class="text-danger">No sections found for this class.</span></div>';
                    }
                    $('#section_checkbox_container').html(html);
                }
            });
        } else {
            $('#section_checkbox_container').html('<div class="col-sm-12"><span class="text-muted">Please select a class first to load sections.</span></div>');
        }
    });

    $(document).on('click', '#selectAllSections', function () {
        let checkboxes = $('.section-checkbox');
        if(checkboxes.length > 0) {
            let allChecked = checkboxes.length === checkboxes.filter(':checked').length;
            checkboxes.prop('checked', !allChecked);
            
            if (!allChecked) {
                $('#selectAllSectionsText').text('Deselect All');
                $(this).find('i').removeClass('fa-check-double').addClass('fa-xmark');
            } else {
                $('#selectAllSectionsText').text('Select All');
                $(this).find('i').removeClass('fa-xmark').addClass('fa-check-double');
            }
        }
    });

    $('.select-all-btn').on('click', function() {
        let targetClass = $(this).data('target');
        let checkboxes = $(targetClass);
        let btnText = $(this).find('.btn-text');
        let icon = $(this).find('i');

        let allChecked = checkboxes.length === checkboxes.filter(':checked').length;
        checkboxes.prop('checked', !allChecked);

        if (!allChecked) {
            btnText.text('Deselect All');
            icon.removeClass('fa-check-double').addClass('fa-xmark');
        } else {
            btnText.text('Select All');
            icon.removeClass('fa-xmark').addClass('fa-check-double');
        }
    });
});
</script>