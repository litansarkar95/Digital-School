<link rel="stylesheet" href="<?= base_url('public/dist/css/form.css'); ?>">

<section class="content">
    <div class="container-fluid">
        <div class="erp-card">
            <div class="erp-header clearfix">
                <h4 class="header-title"><i class="fa fa-edit"></i> Edit Subject</h4>
                <a href="<?php echo base_url('subject'); ?>" class="btn btn-info btn-sm pull-right">
                    <i class="fa fa-list"></i> Subject List
                </a>
            </div>

            <div class="erp-body">
                <form action="<?php echo base_url('subject/update/'.$subject->id); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Subject Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $subject->name; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Subject Code</label>
                                <input type="text" class="form-control" name="code" value="<?php echo $subject->code; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Subject Type</label>
                                <select class="form-control" name="type">
                                    <option value="Theory" <?php echo ($subject->type == 'Theory') ? 'selected':''; ?>>Theory</option>
                                    <option value="Practical" <?php echo ($subject->type == 'Practical') ? 'selected':''; ?>>Practical</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="is_active">
                                    <option value="1" <?php echo ($subject->is_active == 1) ? 'selected':''; ?>>Active</option>
                                    <option value="0" <?php echo ($subject->is_active == 0) ? 'selected':''; ?>>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8" style="margin-top:15px;">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update Subject</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>