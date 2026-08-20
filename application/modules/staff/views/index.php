<style>
/* ========================================================= 
    CUSTOM TABLE CARD & FILTER STYLES (MATCHING THEME)
========================================================= */
.table-card {
    background: #ffffff;
    border: 1px solid #e1e5e9;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
    margin: 25px 15px;
    overflow: hidden;
}

.table-card-header {
    position: relative;
    min-height: 56px;
    padding: 12px 20px;
    background: #f8f9fb;
    border-bottom: 1px solid #e8e8e8;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    flex-wrap: wrap;
}

.table-card-header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #5cb85c, #06ce06);
}

.table-card-title {
    margin: 0;
    color: #333;
    font-size: 18px;
    font-weight: 600;
    line-height: 30px;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Header Right Area (Export + Create Buttons) */
.table-header-right {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

/* Create Button Style */
.create-btn {
    height: 36px;
    padding: 0 14px;
    background: #10b981;
    border: 1px solid #10b981;
    color: #fff;
    border-radius: 6px;
    font-weight: 600;
    font-size: 13px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    text-decoration: none;
    transition: all 0.2s;
}

.create-btn:hover {
    background: #047857;
    border-color: #047857;
    color: #fff;
}

/* Export Buttons Group (PDF, Excel, Print) */
.export-buttons-group {
    display: flex;
    align-items: center;
    gap: 8px;
}

.export-btn {
    height: 36px;
    padding: 0 12px;
    font-size: 13px;
    font-weight: 600;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border: 1px solid #cbd5e1;
    background: #fff;
    color: #475569;
    transition: all 0.2s;
    text-decoration: none;
}

.export-btn:hover {
    background: #f1f5f9;
    color: #1e293b;
    border-color: #94a3b8;
}

.table-filter-box {
    background: #f8fafc;
    border-bottom: 1px solid #e2e8f0;
    padding: 18px 20px;
}

.filter-form-grid {
    display: flex;
    align-items: flex-end;
    flex-wrap: wrap;
    gap: 15px;
}

.filter-col {
    flex: 1;
    min-width: 200px;
}

.filter-col-btns {
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: fit-content;
}

.filter-label {
    display: block;
    margin-bottom: 6px;
    color: #475569;
    font-size: 13px;
    font-weight: 600;
}

.filter-control {
    width: 100%;
    height: 40px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    padding: 8px 14px;
    font-size: 14px;
    background: #fff;
    color: #333;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.filter-control:focus {
    border-color: #10b981;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.12);
}

/* ========================================================= 
    SELECT2 FIXES
========================================================= */
.select2-container {
    width: 100% !important;
}
.select2-container .select2-selection--single {
    height: 40px !important;
    min-height: 40px !important;
    border: 1px solid #cbd5e1 !important;
    border-radius: 6px !important;
    background-color: #fff !important;
    outline: none !important;
    box-shadow: none !important;
    transition: border-color 0.2s, box-shadow 0.2s !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #333 !important;
    line-height: 38px !important;
    padding-left: 14px !important;
    padding-right: 40px !important;
    font-size: 14px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 38px !important;
    width: 30px !important;
    right: 6px !important;
    top: 1px !important;
    background: transparent !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    display: none !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 7px;
    height: 7px;
    margin-top: -5px;
    margin-left: -3px;
    border-right: 2px solid #666;
    border-bottom: 2px solid #666;
    transform: rotate(45deg);
    pointer-events: none;
}
.select2-container--default.select2-container--open .select2-selection--single,
.select2-container--default .select2-selection--single:focus {
    border-color: #10b981 !important;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.12) !important;
}
.select2-dropdown {
    border: 1px solid #cbd5e1 !important;
    border-radius: 6px !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08) !important;
    overflow: hidden;
    margin-top: 4px;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #10b981 !important;
    color: #fff !important;
}

.filter-btn-search {
    height: 40px;
    padding: 0 16px;
    background: #10b981;
    border: 1px solid #10b981;
    color: #fff;
    border-radius: 6px;
    font-weight: 600;
    font-size: 13px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all 0.2s;
}

.filter-btn-search:hover {
    background: #047857;
    border-color: #047857;
    color: #fff;
}

.filter-btn-reset {
    height: 40px;
    padding: 0 16px;
    background: #fff;
    border: 1px solid #cbd5e1;
    color: #64748b;
    border-radius: 6px;
    font-weight: 600;
    font-size: 13px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all 0.2s;
}

.filter-btn-reset:hover {
    background: #f1f5f9;
    color: #334155;
    border-color: #94a3b8;
}

.table-responsive {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.custom-table {
    width: 100%;
    margin-bottom: 0;
    border-collapse: separate;
    border-spacing: 0;
    white-space: nowrap;
}

.custom-table th {
    background: #f8fafc;
    color: #475569;
    font-weight: 600;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 14px 20px;
    border-bottom: 1px solid #e2e8f0;
}

.custom-table td {
    padding: 14px 20px;
    vertical-align: middle;
    color: #334155;
    font-size: 14px;
    border-bottom: 1px solid #f1f5f9;
    background: #fff;
}

.custom-table tbody tr:hover td {
    background-color: #f8fafc;
}

.custom-table tbody tr:last-child td {
    border-bottom: none;
}

.action-buttons-group {
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.action-buttons-group .btn {
    width: 32px;
    height: 32px;
    padding: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    transition: all 0.2s;
}

.table-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 15px;
    padding: 16px 20px;
    border-top: 1px solid #e2e8f0;
    background: #f8f9fb;
}

.pagination {
    display: inline-flex;
    padding-left: 0;
    list-style: none;
    border-radius: 6px;
    margin: 0;
    gap: 4px;
}

.pagination .page-item .page-link {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 34px;
    height: 34px;
    padding: 0 12px;
    font-size: 13px;
    font-weight: 500;
    color: #475569;
    background-color: #fff;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.2s;
}

.pagination .page-item .page-link:hover {
    background-color: #f1f5f9;
    color: #10b981;
    border-color: #cbd5e1;
}

.pagination .page-item.active .page-link {
    color: #fff;
    background-color: #10b981;
    border-color: #10b981;
    box-shadow: 0 2px 6px rgba(16, 185, 129, 0.25);
}

.pagination .page-item.disabled .page-link {
    color: #94a3b8;
    background-color: #f8fafc;
    border-color: #e2e8f0;
    cursor: not-allowed;
}

@media (max-width: 768px) {
    .table-card {
        margin: 15px;
    }
    .table-card-header {
        flex-direction: column;
        align-items: stretch;
        gap: 12px;
        padding: 12px 15px;
    }
    .table-header-right {
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    .table-filter-box {
        padding: 15px;
    }
    .filter-form-grid {
        flex-direction: column;
        align-items: stretch;
    }
    .filter-col, .filter-col-btns {
        width: 100%;
        min-width: 100%;
    }
    .filter-col-btns {
        display: flex;
        gap: 10px;
    }
    .filter-btn-search, .filter-btn-reset {
        flex: 1;
    }
    .custom-table, 
    .custom-table tbody, 
    .custom-table tr, 
    .custom-table td, 
    .custom-table th {
        display: block;
    }
    .custom-table thead {
        display: none;
    }
    .custom-table tr {
        margin-bottom: 12px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 1px 2px rgba(0,0,0,0.02);
        overflow: hidden;
    }
    .custom-table td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: right;
        padding: 12px 15px;
        border-bottom: 1px solid #f1f5f9;
        white-space: normal;
    }
    .custom-table td:last-child {
        border-bottom: none;
        background: #f8fafc;
    }
    .custom-table td::before {
        content: attr(data-label);
        font-weight: 600;
        color: #64748b;
        font-size: 12px;
        text-transform: uppercase;
        text-align: left;
        margin-right: 15px;
    }
    .table-footer {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 12px;
        padding: 15px;
    }
}
</style>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- ========================================================= 
    TABLE HTML STRUCTURE 
========================================================= -->
<div class="table-card">
    <div class="table-card-header">
        <h3 class="table-card-title">
            <i class="fa-solid fa-table-list"></i> Recent Customers
        </h3>
        
        <!-- ডানপাশে এক্সপোর্ট এবং ক্রিয়েট বাটন একত্রে -->
        <div class="table-header-right">
            <div class="export-buttons-group">
                <a href="#" class="export-btn" title="Export Excel">
                    <i class="fa-solid fa-file-excel text-success"></i> Excel
                </a>
                <a href="#" class="export-btn" title="Export PDF">
                    <i class="fa-solid fa-file-pdf text-danger"></i> PDF
                </a>
                <a href="#" class="export-btn" title="Print Table">
                    <i class="fa-solid fa-print text-info"></i> Print
                </a>
            </div>
            
            <a href="#" class="create-btn">
                <i class="fa-solid fa-plus"></i> Add New
            </a>
        </div>
    </div>

    <!-- আলাদা ফিল্টার ডিভ -->
    <div class="table-filter-box">
        <form method="get" action="">
            <div class="filter-form-grid">
                <!-- Name Search -->
                <div class="filter-col">
                    <label class="filter-label" for="search_name">Customer Name</label>
                    <input type="text" class="filter-control" id="search_name" name="name" placeholder="Search by name..." autocomplete="off">
                </div>

                <!-- Select Active Status -->
                <div class="filter-col">
                    <label class="filter-label" for="filter_status">Status</label>
                    <select class="filter-control select2" id="filter_status" name="status">
                        <option value="">All Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="filter-col-btns">
                    <button type="submit" class="filter-btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i> Search
                    </button>
                    <a href="" class="filter-btn-reset">
                        <i class="fa-solid fa-rotate-left"></i> Reset
                    </a>
                </div>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="custom-table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                  <?php if(!empty($exams)): foreach($exams as $key => $row): ?>
                <tr>
                    <td data-label="ID">#101</td>
                    <td data-label="Customer Name">Sojib Ahmed</td>
                    <td data-label="Phone">+8801700000000</td>
                    <td data-label="Country">Bangladesh</td>
                    <td data-label="Action" class="text-end">
                        <div class="action-buttons-group">
                            <button class="btn btn-sm btn-light border text-primary" title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-sm btn-light border text-danger delete-btn" data-id="101" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </button>
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
                <tr>
                    <td data-label="ID">#102</td>
                    <td data-label="Customer Name">John Doe</td>
                    <td data-label="Phone">+123456789</td>
                    <td data-label="Country">United States</td>
                    <td data-label="Action" class="text-end">
                        <div class="action-buttons-group">
                            <button class="btn btn-sm btn-light border text-primary" title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-sm btn-light border text-danger delete-btn" data-id="102" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
 <?php if ( $total_rows > 0 ): ?>
    <div class="table-footer">
        
        <span style="font-size: 13px; color: #64748b; font-weight: 600;">
            Showing <?= (int) $start; ?> to <?= (int) $end; ?>  of <?= (int) $total_rows; ?> entries
        </span>

         <?= $pagination; ?>
      
    </div>
     <?php endif; ?>

</div>

<!-- Select2 & Delete Confirmation Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Select2 Initialization
    if (typeof jQuery !== 'undefined' && jQuery().select2) {
        $('.select2').select2({
            minimumResultsForSearch: Infinity
        });
    }

    // Delete Confirmation using SweetAlert2
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const itemId = this.getAttribute('data-id');
            
            Swal.fire({
                title: 'আপনি কি নিশ্চিত?',
                text: "এই ডাটাটি চিরতরে মুছে ফেলা হবে!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#10b981',
                cancelButtonColor: '#ef4444',
                confirmButtonText: 'হ্যাঁ, ডিলিট করুন',
                cancelButtonText: 'বাতিল'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'ডিলিট হয়েছে!',
                        'সফলভাবে ডাটাটি মুছে ফেলা হয়েছে।',
                        'success'
                    );
                }
            });
        });
    });
});
</script>