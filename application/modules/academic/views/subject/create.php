<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
    <div class="container-fluid">
        <div class="erp-card">
            <div class="erp-header clearfix">
                <h4 class="header-title">
                    <i class="fa fa-book"></i> Add Subject
                </h4>
                <a href="<?php echo base_url('academic/subject'); ?>" class="btn btn-info btn-sm pull-right summary-btn">
                    <i class="fa fa-list"></i> All Subject List
                </a>
            </div>

            <div class="erp-body">
                <form id="subject_form" action="<?php echo base_url('academic/subject/insert'); ?>" method="post">
                    <div class="row">

                        <div class="col-sm-12 section-title">Subject Information</div>

                        <!-- Subject Name -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name">Subject Name <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="name" value="<?php echo set_value('name'); ?>" name="name" required>
                                        <?php echo form_error('name', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Subject Code -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="code">Subject Code <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="code" value="<?php echo set_value('code'); ?>" name="code" required>
                                        <?php echo form_error('code', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Subject Type (Theory / Practical) -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="type">Subject Type <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="type" id="type" required>
                                            <option value="">Select Type</option>
                                            <option value="Theory">Theory</option>
                                            <option value="Practical">Practical</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="is_active">Status</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="is_active" id="is_active">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
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
                        <!-- Submit Button -->
                        <div class="col-sm-12" style="margin-top:15px;">
                            <div class="pull-right action-group">
                                <button type="submit" class="btn btn-success btn-submit" style="margin-left:10px;">
                                    <i class="fa fa-check"></i> Save Subject
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>