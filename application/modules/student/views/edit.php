<div class="content">
    <div class="panel-card shadow-sm border rounded-4 bg-white p-4" id="editStudentForm">
        
        <!-- PANEL HEADER -->
        <div class="panel-header d-flex flex-wrap justify-content-between align-items-center gap-2 border-bottom pb-3 mb-4">
            <div class="panel-title-wrap d-flex align-items-center gap-3">
                <div class="panel-title-icon fs-4 text-warning bg-warning-subtle p-3 rounded-4">
                    <i class="fa-solid fa-user-pen"></i>
                </div>
                <div>
                    <h5 class="mb-1 fw-bold">Edit Student Information</h5>
                    <p class="text-muted mb-0 small">CodeIgniter 3 & Bootstrap v5.3.8</p>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2">
                <a href="<?php echo base_url('student/create'); ?>" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    <i class="fa-solid fa-arrow-left me-1"></i> Back to Create
                </a>
            </div>
        </div>

        <div class="panel-body">
            <form action="<?php echo base_url('student/update/' . $student->id); ?>" method="POST" enctype="multipart/form-data">
                
                <!-- ================= SIBLING CHECK SECTION (EDITABLE) ================= -->
                <div class="row g-3 mb-4 p-4 bg-light rounded-4 border border-warning border-opacity-25">
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-dark">Is the student a sibling?</label>
                        <select class="form-select shadow-none" id="is_sibling" name="is_sibling">
                            <option value="no">No (Independent Guardian)</option>
                            <option value="yes" selected>Yes (Link with Existing Sibling)</option>
                        </select>
                    </div>

                    <!-- Sibling Search Box -->
                    <div class="col-md-8" id="sibling_search_box">
                        <label class="form-label fw-bold text-primary">Search Sibling (Admission No is enough)</label>
                        <div class="input-group">
                            <input type="text" class="form-control shadow-none" id="search_admission_no" placeholder="Enter Admission No (e.g. ADM-2026-001)">
                            <button type="button" class="btn btn-dark px-4" id="btnSearchSibling">
                                <i class="fa-solid fa-search me-1"></i> Search Sibling
                            </button>
                        </div>
                        <small id="search_result_msg" class="form-text mt-2 d-block fw-semibold text-success">
                            <i class="fa-solid fa-check-circle me-1"></i> Currently Linked Guardian ID: <?php echo $student->guardian_id; ?> (Father: <?php echo $student->father_name; ?>)
                        </small>
                    </div>
                </div>

                <input type="hidden" name="guardian_id" id="guardian_id" value="<?php echo $student->guardian_id; ?>">

                <!-- ================= SECTION 1: GUARDIAN INFORMATION ================= -->
                <div id="guardian_section" style="display: none;">
                    <h6 class="text-primary mb-3 fw-bold"><i class="fa-solid fa-user-shield me-2"></i> Guardian Information</h6>
                    <div class="row g-3 mb-4 p-4 bg-white rounded-4 border shadow-sm">
                        
                        <div class="col-md-12 mb-2">
                            <label class="form-label fw-bold text-dark">Guardian Is <span class="text-danger">*</span></label>
                            <div class="d-flex gap-4 p-2 bg-light rounded-3 border">
                                <div class="form-check">
                                    <input class="form-check-input guardian_is_radio" type="radio" name="guardian_is" id="g_father" value="Father" <?php echo ($student->guardian_is === 'Father') ? 'checked' : ''; ?>>
                                    <label class="form-check-label fw-medium" for="g_father">Father</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input guardian_is_radio" type="radio" name="guardian_is" id="g_mother" value="Mother" <?php echo ($student->guardian_is === 'Mother') ? 'checked' : ''; ?>>
                                    <label class="form-check-label fw-medium" for="g_mother">Mother</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input guardian_is_radio" type="radio" name="guardian_is" id="g_other" value="Other" <?php echo ($student->guardian_is === 'Other') ? 'checked' : ''; ?>>
                                    <label class="form-check-label fw-medium" for="g_other">Other (Relative)</label>
                                </div>
                            </div>
                        </div>

                        <!-- Father Info -->
                        <div class="col-md-4">
                            <label class="form-label">Father's Name</label>
                            <input type="text" class="form-control shadow-none" id="father_name" name="father_name" value="<?php echo $student->father_name; ?>" placeholder="Father's name">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Father's Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-none" id="father_phone" name="father_phone" value="<?php echo $student->father_phone; ?>" placeholder="017XXXXXXXX">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Father's Occupation</label>
                            <input type="text" class="form-control shadow-none" name="father_occupation" value="<?php echo $student->father_occupation; ?>" placeholder="Occupation">
                        </div>

                        <!-- Mother Info -->
                        <div class="col-md-4">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" class="form-control shadow-none" id="mother_name" name="mother_name" value="<?php echo $student->mother_name; ?>" placeholder="Mother's name">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Mother's Phone</label>
                            <input type="text" class="form-control shadow-none" id="mother_phone" name="mother_phone" value="<?php echo $student->mother_phone; ?>" placeholder="017XXXXXXXX">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Mother's Occupation</label>
                            <input type="text" class="form-control shadow-none" name="mother_occupation" value="<?php echo $student->mother_occupation; ?>" placeholder="Occupation">
                        </div>

                        <!-- Main Guardian Dynamic Fields -->
                        <div class="col-md-4">
                            <label class="form-label text-primary fw-bold">Guardian Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-none bg-light" id="guardian_name" name="guardian_name" value="<?php echo $student->guardian_name; ?>" placeholder="Guardian name">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label text-primary fw-bold">Guardian Relation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-none bg-light" id="guardian_relation" name="guardian_relation" value="<?php echo $student->guardian_relation; ?>" placeholder="Relation">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label text-primary fw-bold">Guardian Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-none bg-light" id="guardian_phone" name="guardian_phone" value="<?php echo $student->guardian_phone; ?>" placeholder="Phone number">
                        </div>

                        <div class="col-12 mt-2">
                            <label class="form-label">Present Address <span class="text-danger">*</span></label>
                            <textarea class="form-control shadow-none" name="present_address" rows="2" placeholder="Enter present address"><?php echo $student->present_address; ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- ================= SECTION 2: STUDENT INFORMATION ================= -->
                <h6 class="text-primary mb-3 fw-bold"><i class="fa-solid fa-user me-2"></i> Student Personal Information</h6>
                <div class="row g-3 mb-4 p-4 bg-white rounded-4 border shadow-sm">
                    <div class="col-md-4">
                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control shadow-none" name="firstname" required value="<?php echo $student->firstname; ?>" placeholder="First name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control shadow-none" name="lastname" value="<?php echo $student->lastname; ?>" placeholder="Last name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Admission No <span class="text-danger">*</span></label>
                        <input type="text" class="form-control shadow-none" name="admission_no" required value="<?php echo $student->admission_no; ?>" placeholder="ADM-2026-XXX">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control shadow-none" name="dob" value="<?php echo $student->dob; ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Gender</label>
                        <select class="form-select shadow-none" name="gender">
                            <option value="Male" <?php echo ($student->gender === 'Male') ? 'selected' : ''; ?>>Male</option>
                            <option value="Female" <?php echo ($student->gender === 'Female') ? 'selected' : ''; ?>>Female</option>
                            <option value="Other" <?php echo ($student->gender === 'Other') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Blood Group</label>
                        <select class="form-select shadow-none" name="blood_group">
                            <option value="">Select</option>
                            <option value="A+" <?php echo ($student->blood_group === 'A+') ? 'selected' : ''; ?>>A+</option>
                            <option value="A-" <?php echo ($student->blood_group === 'A-') ? 'selected' : ''; ?>>A-</option>
                            <option value="B+" <?php echo ($student->blood_group === 'B+') ? 'selected' : ''; ?>>B+</option>
                            <option value="B-" <?php echo ($student->blood_group === 'B-') ? 'selected' : ''; ?>>B-</option>
                            <option value="O+" <?php echo ($student->blood_group === 'O+') ? 'selected' : ''; ?>>O+</option>
                            <option value="O-" <?php echo ($student->blood_group === 'O-') ? 'selected' : ''; ?>>O-</option>
                            <option value="AB+" <?php echo ($student->blood_group === 'AB+') ? 'selected' : ''; ?>>AB+</option>
                            <option value="AB-" <?php echo ($student->blood_group === 'AB-') ? 'selected' : ''; ?>>AB-</option>
                        </select>
                    </div>
                </div>

                <!-- ================= SECTION 3: ACADEMIC SESSION INFO ================= -->
                <h6 class="text-primary mb-3 fw-bold"><i class="fa-solid fa-school me-2"></i> Academic Session & Class Assign</h6>
                <div class="row g-3 mb-4 p-4 bg-white rounded-4 border shadow-sm">
                   <div class="col-md-3">
                        <label class="form-label">Academic Year <span class="text-danger">*</span></label>
                        <select class="form-select shadow-none" name="academic_year_id" required>
                            <option value="">Select Academic Year</option>
                            <?php if (!empty($academic_years)): ?>
                                <?php foreach ($academic_years as $year): ?>
                                    <option value="<?php echo $year->id; ?>" <?php echo ($year->id == $student->academic_year_id) ? 'selected' : ''; ?>>
                                        <?php echo $year->year_name; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Class <span class="text-danger">*</span></label>
                        <select class="form-select shadow-none" name="class_id" id="class_id" required>
                            <option value="">Select Class</option>
                            <?php foreach($classes as $cls): ?>
                                <option value="<?php echo $cls->id; ?>" <?php echo ($cls->id == $student->class_id) ? 'selected' : ''; ?>><?php echo $cls->class; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Section <span class="text-danger">*</span></label>
                        <select class="form-select shadow-none" name="section_id" id="section_id" required>
                            <option value="">Select Section</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Roll No</label>
                        <input type="number" class="form-control shadow-none" name="roll_no" value="<?php echo $student->roll_no; ?>" placeholder="Roll No">
                    </div>
                </div>

                <!-- SUBMIT BUTTONS -->
                <div class="col-12 text-end pt-2">
                    <a href="<?php echo base_url('student/create'); ?>" class="btn btn-light border px-4 me-2 shadow-sm">
                        <i class="fa-solid fa-xmark me-1"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-warning px-5 shadow-sm text-dark fw-bold">
                        <i class="fa-solid fa-sync me-1"></i> Update Student
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    
    // By default, since it's an existing record, show sibling box and hide individual guardian inputs
    $('#sibling_search_box').show();
    $('#guardian_section').hide();

    // Toggle Sibling Search Box
    $('#is_sibling').change(function() {
        if ($(this).val() === 'yes') {
            $('#sibling_search_box').show();
            $('#guardian_section').hide();
        } else {
            $('#sibling_search_box').hide();
            $('#guardian_section').show();
        }
    });

    // Auto-load sections for the selected class on page load
    var initialClassId = $('#class_id').val();
    var currentSectionId = "<?php echo $student->section_id; ?>";
    
    if(initialClassId) {
        loadSections(initialClassId, currentSectionId);
    }

    $('#class_id').change(function() {
        var classId = $(this).val();
        loadSections(classId, '');
    });

    function loadSections(classId, selectedSectionId) {
        if(classId) {
            $.ajax({
                url: "<?php echo base_url('student/get_sections_by_class'); ?>",
                type: "POST",
                data: { class_id: classId },
                dataType: "json",
                success: function(data) {
                    $('#section_id').html('<option value="">Select Section</option>');
                    $.each(data, function(key, value) {
                        var selected = (value.id == selectedSectionId) ? 'selected' : '';
                        $('#section_id').append('<option value="'+ value.id +'" '+ selected +'>'+ value.section +'</option>');
                    });
                }
            });
        } else {
            $('#section_id').html('<option value="">Select Section</option>');
        }
    }

    // Ajax Sibling Search using only Admission No
    $('#btnSearchSibling').click(function() {
        var admissionNo = $('#search_admission_no').val();
        if(!admissionNo.trim()) {
            $('#search_result_msg').html('<span class="text-danger">Please enter admission no!</span>');
            return;
        }

        $.ajax({
            url: "<?php echo base_url('student/search_sibling'); ?>",
            type: "POST",
            data: { admission_no: admissionNo },
            dataType: "json",
            success: function(response) {
                if(response.status === 'success') {
                    $('#guardian_id').val(response.guardian_id);
                    $('#search_result_msg').html('<span class="text-success"><i class="fa-solid fa-check-circle me-1"></i> Sibling Found! Father: ' + response.father_name + '</span>');
                } else {
                    $('#search_result_msg').html('<span class="text-danger"><i class="fa-solid fa-times-circle me-1"></i> ' + response.message + '</span>');
                }
            }
        });
    });
});
</script>