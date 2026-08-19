<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
    <div class="container-fluid">

        <div class="erp-card">

            <div class="erp-header clearfix ">

                <!-- LEFT TITLE -->
                <h4 class="header-title">
        <i class="fa fa-money"></i> Student Admission Form
    </h4>

                <!-- RIGHT BUTTON -->
                <a href="<?php echo base_url(); ?>student" id="toggle_info" class="btn btn-info btn-sm pull-right summary-btn">
                    <i class="fa fa-info-circle"></i> All Student List
                </a>

            </div>

            <div class="erp-body">

                <form id="collection_form" action="<?php echo base_url(); ?>student/store" method="post" enctype="multipart/form-data">

                    <div class="row">
 
                        <div class="col-sm-12 section-title"> Student Sibling?</div>

                        <div class="col-sm-3">
                             <div class="form-group">
                                 <label class="control-label" >Is the student a sibling?</label>
                            <select class="form-select form-control shadow-none" id="is_sibling" name="is_sibling">
                            <option value="no">No (New Guardian)</option>
                            <option value="yes">Yes (Existing Sibling)</option>
                        </select>
                            </div>
                        </div>
                     <div class="col-sm-9" id="sibling_search_box" style="display: none;">
    <div class=" "> 
        <label class="control-label" style="color: #337ab7; font-weight: bold;">Search Sibling (Admission No is enough)</label>
        
        <div class="input-group">
            <input type="text" class="form-control" id="search_admission_no" placeholder="Enter Admission No (e.g. ADM-2026-001)">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default" id="btnSearchSibling" style="background-color: #222; color: #fff; border-color: #222;">
                    <i class="fa fa-search" style="margin-right: 4px;"></i> Search Sibling
                </button>
            </span>
        </div>
        
        <span id="search_result_msg" class="help-block" style="margin-top: 8px; font-weight: 600;"></span>
        <input type="hidden" name="existing_guardian_id" id="existing_guardian_id" value="">
    </div>
</div>

                        <!-- BASIC INFO -->
                        <div class="col-sm-12 section-title">Student Personal Information</div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" value="" name="firstname">
                            </div>
                        </div>
                           <div class="col-sm-3">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" value="" name="lastname">
                            </div>
                        </div>
                           <div class="col-sm-3">
                            <div class="form-group">
                                <label for="admission_no">Admission No</label>
                                <input type="text" class="form-control" id="admission_no" value="" name="admission_no">
                            </div>
                        </div>
                         

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Date of Birth <span class="required">*</span></label>
                                <input type="text" class="form-control " id="from_date" value="<?php echo  date('d-m-Y'); ?>" name="dob" required>
                            </div>
                        </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                     </div>
                           <div class="col-sm-3">
                              <div class="form-group">
                        <label class="form-label">Blood Group</label>
                        <select class="form-control" name="blood_group">
                             <option value="">Select</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                     </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="student_image">Student Photo</label>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                
                                    <div style="width: 60px; height: 60px; border: 1px dashed #ccc; border-radius: 4px; display: flex; align-items: center; justify-content: center; background: #f9f9f9; overflow: hidden; position: relative;">
                                        <img id="preview_img" src="#" alt="Preview" style="max-width: 100%; max-height: 100%; display: none;">
                                        <i id="preview_icon" class="fa fa-user" style="font-size: 24px; color: #aaa;"></i>
                                    </div>
                                    
                                    <div style="flex: 1;">
                                        <label for="student_image" class="btn btn-default btn-sm" style="background-color: #f4f4f4; border-color: #ddd; color: #444; cursor: pointer; margin-bottom: 5px; display: inline-flex; align-items: center; gap: 6px;">
                                            <i class="fa fa-paperclip"></i> Attach Image
                                        </label>
                                        <input type="file" class="form-control" id="student_image" name="student_image" accept="image/*" style="display: none;">
                                        <span id="file_name_display" style="display: block; font-size: 12px; color: #666; margin-top: 2px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


       
                        <!-- INVOICE -->
                        <div class="col-sm-12 section-title " id="invoice_details">Guardian Information</div>
                          <div class="col-md-12" style="margin-bottom: 15px;">
    <label class="control-label" >Guardian Is <span style="color: #d9534f;">*</span></label>
    <div style="padding: 10px; background-color: #f5f5f5; border: 1px solid #e3e3e3; border-radius: 4px;">
        <label class="radio-inline" style="font-weight: 500; margin-right: 20px; padding-left: 20px;">
            <input class="guardian_is_radio" type="radio" name="guardian_is" id="g_father" value="Father" checked> Father
        </label>
        <label class="radio-inline" style="font-weight: 500; margin-right: 20px; padding-left: 20px;">
            <input class="guardian_is_radio" type="radio" name="guardian_is" id="g_mother" value="Mother"> Mother
        </label>
        <label class="radio-inline" style="font-weight: 500; padding-left: 20px;">
            <input class="guardian_is_radio" type="radio" name="guardian_is" id="g_other" value="Other"> Other (Relative)
        </label>
    </div>
</div>
           
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label for="father_name">Father's Name <span class="required">*</span></label>
                                <input type="text" name="father_name" id="father_name" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group">
                            <label for="father_phone">Father's Phone <span class="required">*</span></label>
                                <input type="text" name="father_phone" id="father_phone" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group">
                                <label for="father_occupation">Father's Occupation <span class="required">*</span></label>
                                <input type="text" name="father_occupation" id="father_occupation" class="form-control">
                            </div>
                        </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mother_name">Mother's Name <span class="required">*</span></label>
                                <input type="text" name="mother_name" id="mother_name" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group">
                            <label for="mother_phone">Mother's Phone <span class="required">*</span></label>
                                <input type="text" name="mother_phone" id="mother_phone" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mother_occupation">Mother's Occupation <span class="required">*</span></label>
                                <input type="text" name="mother_occupation" id="mother_occupation" class="form-control">
                            </div>
                        </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <label for="guardian_name">Guardian Name <span class="required">*</span></label>
                                <input type="text" name="guardian_name" id="guardian_name" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group">
                            <label for="guardian_relation">Guardian Relation <span class="required">*</span></label>
                                <input type="text" name="guardian_relation" id="guardian_relation" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <div class="form-group">
                                <label for="guardian_phone">Guardian Phone <span class="required">*</span></label>
                                <input type="text" name="guardian_phone" id="guardian_phone" class="form-control">
                            </div>
                        </div>
                         <div class="col-sm-12">
                            <div class="form-group">
                                <label>Present Address  <span class="required">*</span></label>
                                 <textarea class="form-control shadow-none" name="present_address" rows="2" placeholder="Enter present address"></textarea>
                            </div>
                        </div>


                        <!-- PAYMENT -->
                        <div class="col-sm-12 section-title"> Academic Session & Class Assign</div>

                     

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Academic Year  <span class="required">*</span></label>
                                 <select class="form-control" name="academic_year_id" required>
                            <option value="">Select Academic Year</option>
                            <?php if (!empty($academic_years)): ?>
                                <?php foreach ($academic_years as $year): ?>
                                    <option value="<?php echo $year->id; ?>" <?php echo ($year->is_current == 1) ? 'selected' : ''; ?>>
                                        <?php echo $year->year_name; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                            </div>
                        </div>
                           <div class="col-sm-3">
                            <div class="form-group">
                                <label>Class  <span class="required">*</span></label>
                            <select class="form-control" name="class_id" id="class_id" required>
                            <option value="">Select Class</option>
                            <?php foreach($classes as $cls): ?>
                                <option value="<?php echo $cls->id; ?>"><?php echo $cls->class; ?></option>
                            <?php endforeach; ?>
                        </select>
                            </div>
                        </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                                <label>Section  <span class="required">*</span></label>
                            <select class="form-control" name="section_id" id="section_id" required>
                           <option value="">Select Section</option>
                        </select>
                            </div>
                        </div>



                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Roll No</label>
                                <input type="text" name="roll_no" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12" style="margin-top:15px;">

                            <div class="pull-right action-group">

                                
                                <button class="btn btn-success btn-submit" style="margin-left:10px;">
                                    <i class="fa fa-check"></i> Submit 
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
    
    $('.select2').select2({
        width: '100%'
    });
    
    $('.select2').select2();
    $('.datepicker').datepicker().datepicker("setDate", new Date());
    
    // Live Image Preview Script
    $('#student_image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview_img').attr('src', e.target.result).show();
            $('#preview_icon').hide();
        }
        if(this.files && this.files[0]){
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    $('#payment_type').change(function(){
        if($(this).val()=='Invoice'){  
            $('#invoice_details').slideDown(150);
            $('#invoice_row').slideDown(150);
        }else{
            $('#invoice_details').slideUp(150);
            $('#invoice_row').slideUp(150);
            $('#invoice_id').val('').trigger('change');
        }
    });
    
    $('#invoice_id').change(function(){
        let due = $(this).find(':selected').data('due');
        $('#paid_amount').val(due || '');
    });
    
    });
</script>
<script>
$(document).ready(function() {
    // Initializer: Set default Guardian details based on default selected radio (Father)
    updateGuardianFields();

    $('#is_sibling').change(function() {
        if ($(this).val() === 'yes') {
            $('#sibling_search_box').show();
            $('#guardian_section').hide();
        } else {
            $('#sibling_search_box').hide();
            $('#guardian_section').show();
            $('#existing_guardian_id').val('');
        }
    });

    // Handle Guardian Is Radio Change
    $('.guardian_is_radio').change(function() {
        updateGuardianFields();
    });

    function updateGuardianFields() {
        var guardianIs = $('input[name="guardian_is"]:checked').val();
        
        if (guardianIs === 'Father') {
            $('#guardian_name').val($('#father_name').val());
            $('#guardian_relation').val('Father');
            $('#guardian_phone').val($('#father_phone').val());
            
            $('#guardian_name, #guardian_relation, #guardian_phone').prop('readonly', false);
        } else if (guardianIs === 'Mother') {
            $('#guardian_name').val($('#mother_name').val());
            $('#guardian_relation').val('Mother');
            $('#guardian_phone').val($('#mother_phone').val());
            
            $('#guardian_name, #guardian_relation, #guardian_phone').prop('readonly', false);
        } else if (guardianIs === 'Other') {
            $('#guardian_name').val('');
            $('#guardian_relation').val('');
            $('#guardian_phone').val('');
            
            $('#guardian_name, #guardian_relation, #guardian_phone').prop('readonly', false);
        }
    }

    // Sync input live typing to Guardian fields if Father/Mother is selected
    $('#father_name').on('keyup', function() {
        if ($('input[name="guardian_is"]:checked').val() === 'Father') {
            $('#guardian_name').val($(this).val());
        }
    });

    $('#father_phone').on('keyup', function() {
        if ($('input[name="guardian_is"]:checked').val() === 'Father') {
            $('#guardian_phone').val($(this).val());
        }
    });

    $('#mother_name').on('keyup', function() {
        if ($('input[name="guardian_is"]:checked').val() === 'Mother') {
            $('#guardian_name').val($(this).val());
        }
    });

    $('#mother_phone').on('keyup', function() {
        if ($('input[name="guardian_is"]:checked').val() === 'Mother') {
            $('#guardian_phone').val($(this).val());
        }
    });

    $('#class_id').change(function() {
        var classId = $(this).val();
        if(classId) {
            $.ajax({
                url: "<?php echo base_url('student/get_sections_by_class'); ?>",
                type: "POST",
                data: { class_id: classId },
                dataType: "json",
                success: function(data) {
                    $('#section_id').html('<option value="">Select Section</option>');
                    $.each(data, function(key, value) {
                        $('#section_id').append('<option value="'+ value.id +'">'+ value.section +'</option>');
                    });
                }
            });
        } else {
            $('#section_id').html('<option value="">Select Section</option>');
        }
    });

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
                    $('#existing_guardian_id').val(response.guardian_id);
                    $('#search_result_msg').html('<span class="text-success"><i class="fa-solid fa-check-circle me-1"></i> Sibling Found! Father: ' + response.father_name + '</span>');
                } else {
                    $('#existing_guardian_id').val('');
                    $('#search_result_msg').html('<span class="text-danger"><i class="fa-solid fa-times-circle me-1"></i> ' + response.message + '</span>');
                }
            }
        });
    });
});
</script>