<style>

    </style>
<section class="content-header">
    <div class="page-title_text">
        <h3>Exam Management</h3><br>
        <p>Manage and monitor all organization Exam</p>
    </div>
</section>

<section class="content">
    <!-- Search Filter -->
    <div class="filter-area">
        <form action="<?= base_url('exam/index'); ?>" method="get">
            <div class="row" style="display: flex; gap: 15px; align-items: flex-end;">
                <div style="flex: 1;">
                    <label>Exam Name</label>
                    <input type="text" name="search" class="form-control" value="<?= html_escape($this->input->get('search')); ?>" placeholder="Search by exam name...">
                </div>
                
                <div style="flex: 1;">
                    <label>Session Year</label>
                    <select name="sessionyear_id" class="form-control select2" style="width:100%" onchange="this.form.submit()">
                        <option value="">All Session Years</option>
                        <?php if (!empty($session_years)): ?>
                            <?php foreach ($session_years as $sy): ?>
                                <option value="<?= $sy->id; ?>" <?= $this->input->get('sessionyear_id') == $sy->id ? 'selected' : ''; ?>>
                                    <?= html_escape($sy->year_name); ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div style="flex: 1;">
                    <label>Status</label>
                    <select name="status" class="form-control select2" style="width:100%" onchange="this.form.submit()">
                        <option value="">All Status</option>
                        <option value="1" <?= $this->input->get('status') === '1' ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?= $this->input->get('status') === '0' ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>

                <div style="display: flex; gap: 10px;">
                    <button type="submit" class="btn btn-primary" style="height: 38px;">
                        <i class="fa fa-search"></i> Filter
                    </button>
                    <a href="<?= base_url('exam/index'); ?>" class="btn btn-default" style="height: 38px; width: 44px; display:flex; align-items:center; justify-content:center;">
                        <i class="fa fa-refresh"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- Data Table Card -->
    <div class="custom-card">
        <div class="card-header-flex" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <h4 style="margin:0; font-weight:700; color: var(--text-main);">
                <i class="fa fa-list-ul" style="color: var(--primary-color); margin-right: 8px;"></i>
                Exam List
            </h4>
            <a href="<?php echo base_url(); ?>exam/create" class="btn btn-success">
                <i class="fa fa-plus-circle"></i> Create Exam
            </a>
        </div>

        <div class="table-responsive">
                <table class="table-modern professional-user-table" >
                <thead>
                    <tr>
                        <th width="60" class="text-center">#</th>
                        <th>Exam Name</th>
                        <th>Exam Group</th>
                        <th>Date</th>
                        <th>Sort Order</th>
                        <th><?php echo display('status'); ?></th>
                        <th width="150" class="text-center"><?php echo display('action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($exams)): foreach($exams as $key => $row): ?>
                    <tr>
                        <td data-label="#" class="text-center"><?php echo $key + 1; ?></td>
                        
                        <td data-label="Exam Name">
                            <span><?= html_escape($row->name); ?></span><br>
                            <?php if(!empty($row->note)): ?>
                                <small class="text-muted"><?= html_escape($row->note); ?></small>
                            <?php endif; ?>
                        </td>

                        <td data-label="Exam Group">
                            <span><?= html_escape($row->examGroup ?? 'N/A'); ?></span>
                        </td>

                        <td data-label="Date">
                            <span><?= date('d M, Y', $row->examDate); ?></span>
                        </td>

                        <td data-label="Sort Order">
                            <span><?= html_escape($row->sortOrder); ?></span>
                        </td>

                        <td data-label="<?php echo display('status'); ?>">
                            <?php if($row->status == 1): ?>
                                <span class="status-badge badge-active">
                                    <span class="status-dot dot-active"></span> Active
                                </span>
                            <?php else: ?>
                                <span class="status-badge badge-inactive">
                                    <span class="status-dot dot-inactive"></span> Inactive
                                </span>
                            <?php endif; ?>
                        </td>

                        <td data-label="<?php echo display('action'); ?>" class="text-center">
                            <div class="action-btns" style="display: flex; gap: 5px; justify-content: center;">
                                <a href="<?php echo base_url()."exam/edit/{$row->id}";?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger delete-item" data-href="<?= base_url('exam/delete/' . $row->id); ?>"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="7" class="text-center" style="padding: 50px; color: #999;">
                                <i class="fa fa-folder-open fa-3x"></i><br><br>
                                <?php echo display('no_data_found'); ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

      <?php if ( $total_rows > 0 ): ?>

        <div class="user-pagination">
            <div class="pagination-info">
                Showing

                <strong> <?= (int) $start; ?>–<?= (int) $end; ?> </strong>

                of

                <strong> <?= (int) $total_rows; ?> </strong>

               <?= html_escape($label); ?>
            </div>

            <?= $pagination; ?>
        </div>

        <?php endif; ?>
    </div>
</section>

<script>
$(document).on('click', '.delete-item', function (e) { 
    e.preventDefault();
    const url = $(this).attr('data-href');

    Swal.fire({
        title: 'Are you sure?', 
        text: 'This action is irreversible!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', 
        cancelButtonColor: '#3085d6',
        confirmButtonText: '<i class="fa fa-trash"></i> Yes, delete it!',
        cancelButtonText: 'No, go back',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Processing request...',
                html: 'Please wait',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            window.location.href = url;
        }
    });
});
</script>