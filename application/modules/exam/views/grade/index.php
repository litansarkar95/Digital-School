<style>

    </style>
<section class="content-header">
    <div class="page-title_text">
        <h3>Grade Management</h3><br>
        <p>Manage and monitor all organization Grade</p>
    </div>
</section>

<section class="content">

    <!-- Data Table Card -->
    <div class="custom-card">
        <div class="card-header-flex" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <h4 style="margin:0; font-weight:700; color: var(--text-main);">
                <i class="fa fa-list-ul" style="color: var(--primary-color); margin-right: 8px;"></i>
                Grade List
            </h4>
            <a href="<?php echo base_url(); ?>exam/grade/create" class="btn btn-success">
                <i class="fa fa-plus-circle"></i> Create Grade
            </a>
        </div>

        <div class="table-responsive">
                <table class="table-modern professional-user-table" >
                <thead>
                    <tr>
                        <th width="60" class="text-center">#</th>
                        <th>Grade </th>
                        <th>Point</th>
                        <th>Mark From</th>
                        <th>Mark Upto</th>
                        <th>Sort Order</th>
                        <th width="150" class="text-center"><?php echo display('action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($exams)): foreach($exams as $key => $row): ?>
                    <tr>
                        <td data-label="#" class="text-center"><?php echo $key + 1; ?></td>
                        
                        <td data-label="Grade">
                            <span><?= html_escape($row->grade ); ?></span><br>
                            
                        </td>

                        <td data-label="Point">
                            <span><?= html_escape($row->point ?? 'N/A'); ?></span>
                        </td>

                         <td data-label="Mark From">
                            <span><?= html_escape($row->mark_from ?? 'N/A'); ?></span>
                        </td>
                         <td data-label="Mark Upto">
                            <span><?= html_escape($row->mark_upto ?? 'N/A'); ?></span>
                        </td>

                        <td data-label="Sort Order">
                            <span><?= html_escape($row->sortOrder); ?></span>
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