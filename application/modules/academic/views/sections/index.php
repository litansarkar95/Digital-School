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
    </style>

<section class="content-header">
    <div class="page-title">
        <i class="fa fa-file-invoice-dollar" style="color: var(--primary-color);"></i>
        Section Management
    </div>
</section>

<section class="content">


    <!-- Data Table Card -->
    <div class="custom-card">
        <div class="card-header-flex">
            <h4 style="margin:0; font-weight:700; color: var(--text-main);">
                <i class="fa fa-list-ul" style="color: var(--primary-color); margin-right: 8px;"></i>
               Section List
            </h4>
            <a href="<?php echo base_url(); ?>products/create" class="btn-jv">
                <i class="fa fa-plus-circle"></i> Create Section 
            </a>
        </div>
      <div class="table-responsive">
    <table class="table-modern professional-user-table" >
        <thead>
            <tr>
                <th width="60" class="text-center">#</th>
               
                <th><?php echo display('name'); ?> </th>
                <th><?php echo display('status'); ?></th>
                <th width="150" class="text-center"><?php echo display('action'); ?></th>
            </tr>
        </thead>
        <tbody>
             <?php if($sections): foreach($sections as $key => $row): ?>
            <tr>
             
                  <td data-label="#" class="text-center"><?php echo $key + 1; ?></td>
                <td data-label="<?php echo display('name'); ?>">
                   <span ><?php echo $row->section ?? ''; ?></span><br>
                </td>
              
                    <td data-label="<?php echo display('status'); ?>"  >
                                <?php if($row->is_active == 1): ?>
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
                        <a href="<?php echo base_url()."academic/sections/edit/{$row->id}";?>" target="_blank" class="btn-action view-btn"><i class="fa fa-edit"></i></a>
                       
                        <a href="#" class="btn-action delete-btn" onclick="confirmDelete('<?php echo $row->id; ?>')" ><i class="fa fa-trash"></i></a>
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
    function confirmDelete(id) {
        Swal.fire({
            title: "Confirm Delete",
            text: "Are you sure you want to delete this Item  ? ",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo base_url(); ?>academic/sections/delete/" + id;
            }
        });
    }

  
</script>