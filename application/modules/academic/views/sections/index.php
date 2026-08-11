<div class="content">
    <div class="user-panel">

        <div class="user-panel-header">
            <div class="user-heading">
                <div class="user-heading-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div class="user-heading-content">
                    <h3>Section Management</h3>

                    <p>Manage and monitor all organization sections</p>
                </div>
            </div>
         <button class="btn btn-primary"   type="button"
                data-bs-toggle="modal"
                data-bs-target="#addSectionModal">
                <i class="fa-solid fa-plus me-1"></i>

                 Add Section 
</button>
           
        </div>
        <div class="user-table-container">
            <table class="professional-user-table">
                <thead>
                    <tr>
                        <th class="user-col">SECTION NAME</th>

                        <th>STATUS</th>

                        <th>CREATED AT</th>

                        <th class="action-col">ACTIONS</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ( !empty($sections) ): ?> <?php foreach ( $sections as $row ): ?>

                    <tr>
                        <td data-label="Section Name">
                            <span class="role-text"> <?= html_escape( $row->section ); ?> </span>
                        </td>


                        <td data-label="Status">
                            <?php if ( (int) $row->is_active === 1 ): ?>

                            <span class="user-status status-active"> Active </span>

                            <?php else: ?>

                            <span class="user-status status-inactive"> Inactive </span>

                            <?php endif; ?>
                        </td>

                        <!-- CREATED -->

                        <td data-label="Created At">
                            <span class="date-text"> <?= date( 'M d, Y', strtotime( $row->created_at ) ); ?> </span>
                        </td>

                        <!-- ACTIONS -->

                        <td data-label="Actions">
                            <div class="table-actions">
                                <!-- VIEW -->

                                <a
                                    href="<?= base_url(
                                                'sections/view/' .
                                                (int) $row->id
                                            ); ?>"
                                    class="table-action view"
                                    title="View"
                                >
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <!-- EDIT -->

                                <a
                                    href="<?= base_url(
                                                'sections/edit/' .
                                                (int) $row->id
                                            ); ?>"
                                    class="table-action edit"
                                    title="Edit"
                                >
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                    <button data-href="<?= base_url('academic/sections/delete/'.$row->id) ?>" type="submit" class="table-action delete-item" title="Delete">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                          
                            </div>
                        </td>
                    </tr>

                    <?php endforeach; ?> <?php else: ?>

                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <div class="text-muted">
                                <i class="fa-solid fa-folder-open fa-2x mb-2"></i>

                                <div>No sections found.</div>
                            </div>
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
</div>

<!-- ================================================================
     ADD SECTION MODAL
================================================================ -->

<div class="modal fade" id="addSectionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                  

                    Create Section
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form  method="post" action="<?= base_url(); ?>academic/sections/insert"    >
                <?php if ( $this->config->item( 'csrf_protection' ) ): ?>

                <input
                    type="hidden"
                    name="<?= $this->security->get_csrf_token_name(); ?>"
                    value="<?= $this->security->get_csrf_hash(); ?>"
                />

                <?php endif; ?>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label"> Section Name </label>

                        <input
                            type="text"
                            name="section"
                            class="form-control"
                            maxlength="60"
                            placeholder="Enter section name"
                            required
                        />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save me-1"></i>

                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).on('click', '.delete-item', function (e) { 
    e.preventDefault();
    const url = $(this).attr('data-href');

    Swal.fire({
        title: '<?= display('are_you_sure') ?>', 
        text: '<?= display('warning_this_action_is_irreversible') ?>',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', 
        cancelButtonColor: '#3085d6',
        confirmButtonText: '<i class="fa fa-trash"></i> <?= display('yes_delete_it') ?>!',
        cancelButtonText: '<?= display('no_go_back') ?>',
        reverseButtons: true, 
        showClass: {
            popup: 'animate__animated animate__fadeInDown' 
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: '<?= display('processing_request') ?>...',
                html: '<?= display('please_wait') ?>',
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