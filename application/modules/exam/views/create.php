<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
    <div class="container-fluid">

        <div class="erp-card">

            <div class="erp-header clearfix ">

                <!-- LEFT TITLE -->
                <h4 class="header-title">
        <i class="fa fa-money"></i> Exam
    </h4>

                <!-- RIGHT BUTTON -->
                <a href="<?php echo base_url(); ?>exam" id="toggle_info" class="btn btn-info btn-sm pull-right summary-btn">
                    <i class="fa fa-info-circle"></i> All Exam List
                </a>

            </div>

            <div class="erp-body">

                <form id="collection_form" action="<?php echo base_url(); ?>exam/insert" method="post" enctype="multipart/form-data">

                    <div class="row">
 
                       

                        <!-- BASIC INFO -->
                        <div class="col-sm-12 section-title">Exam Information</div>

                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="examName">Exam Name</label>
                                    </div>
                                    <div class="col-md-8">
                                            <input type="text" class="form-control" id="examName" value="" name="examName">
                                            <?php echo form_error('examName', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                         <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="examGroup">Exam Group</label>
                                    </div>
                                    <div class="col-md-8">
                                            <input type="text" class="form-control" id="examGroup" value="" name="examGroup">
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>

                         <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="from_date">Date</label>
                                    </div>
                                    <div class="col-md-8">
                                          <input type="text" class="form-control " id="from_date" value="<?php echo  date('d-m-Y'); ?>" name="examDate" required>
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="examID">Exam</label>
                                    </div>
                                    <div class="col-md-8">
                                     <select class="form-control select2" name="examID[]" multiple id="examID">

                                        <?php if (!empty($allExam)): ?>
                                            <?php foreach ($allExam as $exam): ?>
                                                <option value="<?php echo $exam->id; ?>">
                                                    <?php echo $exam->name; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>

                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>

                         <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="sessionyearID">Academic Year</label>
                                    </div>
                                    <div class="col-md-8">
                                <select class="form-control" name="sessionyearID" id="sessionyearID" required>
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
                                
                            
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="sortOrder">Sort Order</label>
                                    </div>
                                    <div class="col-md-8">
                                            <input type="text" class="form-control" id="sortOrder" value="" name="sortOrder">
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                         <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="note">Note</label>
                                    </div>
                                    <div class="col-md-8">
                                          <textarea class="form-control shadow-none" name="note" rows="2" id="note" placeholder="Enter Note"></textarea>
                                    </div>
                                </div>
                                
                            
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