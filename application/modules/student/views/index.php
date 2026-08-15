<style>
    /* =========================================================
   PAGINATION
========================================================= */

  .pagination-page-form {
        display: inline-flex;
        margin: 0;
        padding: 0;
    }

    .pagination-buttons {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .page-btn {
        width: 36px;
        height: 36px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 0;

        border: 1px solid #d0d5dd;

        border-radius: 8px;

        background: #fff;

        color: #344054;

        font-size: 14px;

        font-weight: 500;

        cursor: pointer;

        transition:
            background 0.2s ease,
            border-color 0.2s ease,
            color 0.2s ease,
            box-shadow 0.2s ease;
    }

    .page-btn:hover:not(:disabled) {
        background: #f5f7ff;

        border-color: #536dfe;

        color: #536dfe;
    }

    .page-btn.page-active {
        background: #536dfe;

        border-color: #536dfe;

        color: #fff;

        box-shadow: 0 2px 5px rgba(83, 109, 254, 0.2);
    }

    .page-btn.page-disabled,
    .page-btn:disabled {
        background: #f9fafb;

        border-color: #eaecf0;

        color: #98a2b3;

        cursor: not-allowed;
    }

    .page-dots {
        width: 36px;
        height: 36px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        color: #667085;
    }

    .user-pagination {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;

        padding: 18px 20px;

        border-top: 1px solid #eaecf0;
    }

    .pagination-info {
        color: #667085;

        font-size: 14px;
    }

    .pagination-info strong {
        color: #344054;

        font-weight: 600;
    }

    .table-actions form {
        display: inline-flex;

        margin: 0;
    }

    @media (max-width: 768px) {
        .user-pagination {
            flex-direction: column;

            align-items: flex-start;
        }

        .pagination-buttons {
            flex-wrap: wrap;
        }
    }


    .content-header {
    background: #ffffff;
    padding: 20px 24px;
    border-radius: 2px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    border-left: 4px solid #5cb85c; 
}

.page-title_text h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
}

.page-title_text br {
    display: none;
}

.page-title_text p {
    font-size: 14px;
    color: #6b7280;
    margin: 6px 0 0 0;
}
    </style>

<section class="content-header">
    <div class="page-title_text">
            <h3>Student Management</h3><br>
            <p>Manage and monitor all organization students, classes & guardians</p>
    </div>
</section>

<section class="content">
 <!-- Search Filter -->
    <div class="filter-area">
       
        <form action="#" method="get">
            <div class="row" style="display: flex; gap: 15px; align-items: flex-end;">
                <div style="flex: 1;">
                    <label> Name or Admission no</label>
                   <input type="text" name="search" class="form-control-custom "value="<?= html_escape($this->input->get('search')); ?>" placeholder="Search by name, admission no...">
                </div>
                <div style="flex: 1;">
                    <label>Status</label>
                     <select name="class_id" class="form-control select2" name="class_id" style="width:100%"  onchange="this.form.submit()">
                        <option value="">All Classes</option>
                <?php if (!empty($classes)): ?>
                       <?php foreach ($classes as $cls): ?>
                        <option value="<?= $cls->id; ?>" <?= $this->input->get('class_id') == $cls->id ? 'selected' : ''; ?>>
                            <?= html_escape($cls->class); ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
                    </select>

                   
                </div>
                <div style="flex: 1;">
                    <label>Status</label>
                     <select name="section_id" class="form-control select2" style="width:100%" onchange="this.form.submit()">
                        <option value="">All Sections</option>
                <?php if (!empty($sections)): ?>
                    <?php foreach ($sections as $sec): ?>
                        <option value="<?= $sec->id; ?>" <?= $this->input->get('section_id') == $sec->id ? 'selected' : ''; ?>>
                            <?= html_escape($sec->section); ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
                    </select>

                   
                </div>
               
                <div style="flex: 1;">
                    <label>Status</label>
                     <select name="status" class="form-control select2" style="width:100%" onchange="this.form.submit()">
                           <option value="">All Status</option>
                <option value="yes" <?= $this->input->get('status') === 'yes' ? 'selected' : ''; ?>>Active</option>
                <option value="no" <?= $this->input->get('status') === 'no' ? 'selected' : ''; ?>>Inactive</option>
                    </select>

                   
                </div>
                <div style="display: flex; gap: 10px;">
                    <button type="submit" class="btn-jv" style="height: 38px; box-shadow: none;">
                        <i class="fa fa-search"></i> Filter
                    </button>
                    <a href="#" class="btn-action" style="height: 38px; width: 44px; border-radius: 10px;">
                         <i class="fa fa-refresh"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>


    <!-- Data Table Card -->
    <div class="custom-card">
        <div class="card-header-flex">
            <h4 style="margin:0; font-weight:700; color: var(--text-main);">
                <i class="fa fa-list-ul" style="color: var(--primary-color); margin-right: 8px;"></i>
               Student  List
            </h4>
            <a href="<?php echo base_url(); ?>student/create" class="btn-jv">
                <i class="fa fa-plus-circle"></i> Create Student
            </a>
        </div>
      <div class="table-responsive">
    <table class="table-modern professional-user-table" >
        <thead>
            <tr>
                <th width="60" class="text-center">#</th>
               
                <th>Student Info </th>
                <th>Admission No </th>
                <th>Class & Section</th>
                <th>Guardian Details </th>
                <th><?php echo display('status'); ?></th>
                <th width="150" class="text-center"><?php echo display('action'); ?></th>
            </tr>
        </thead>
        <tbody>
             <?php if($students): foreach($students as $key => $row): ?>
            <tr>
             
                  <td data-label="#" class="text-center"><?php echo $key + 1; ?></td>
                <td data-label="Student Info">
                   <span ><?= html_escape($row->firstname . ' ' . $row->lastname); ?></span><br>
                 
                                    <small class="text-muted">
                                        <i class="fa-solid fa-layer-group me-1"></i> <?= html_escape($row->gender); ?> | DOB: <?= html_escape($row->dob); ?>
                                    </small>
                               
                </td>
                  <td data-label="Admission No">
                   <span ><?= html_escape($row->admission_no); ?></span><br>
                               
                </td>
                  <td data-label="Class & Section">
                   <span ><?= html_escape($row->class_name); ?></span><br>
                    <small class="text-muted">
                        Section: <?= html_escape($row->section_name ?? 'N/A'); ?>
                         </small>
                               
                </td>
                  <td data-label="Guardian Details">
                   <span ><?= html_escape($row->father_name ?? $row->guardian_name); ?></span><br>
                           <small class="text-muted">
                        <?= html_escape($row->father_phone ?? $row->guardian_phone); ?>
                         </small>    
                </td>
              
                    <td data-label="<?php echo display('status'); ?>"  >
                                <?php if($row->is_active == 'yes'): ?>
                                    <span class="status-badge badge-active">
                                        <span class="status-dot dot-active"></span>
                                        Active
                                    </span>
                                <?php else: ?>
                                    <span class="status-badge badge-inactive">
                                        <span class="status-dot dot-inactive"></span>
                                        Inactive
                                    </span>
                                <?php endif; ?>
                            </td>
                <td data-label="<?php echo display('action'); ?>">
                    <div class="action-btns">
                        <a href="<?php echo base_url()."student/edit/{$row->id}";?>" class="btn-action view-btn"><i class="fa fa-edit"></i></a>
                       
                        <a href="#" class="btn-action delete-item" data-href="<?= base_url('student/delete/' . $row->id); ?>"  onclick="confirmDelete('<?php echo $row->id; ?>')" ><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
                <?php endforeach; else: ?>
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 50px; color: #999;">
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