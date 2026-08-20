
    <style>

    /* Main Container */
    .dashboard-container {
        margin: 20px ;
        width: 100%;
        flex: 1;
    }

    /* School Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }

    .stat-card {
        background: #ffffff;
        border: 1px solid #e1e5e9;
        border-radius: 8px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: #10b981;
    }

    .stat-card-info h4 {
        font-size: 13px;
        color: #64748b;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .stat-card-info h2 {
        font-size: 24px;
        color: #1e293b;
        font-weight: 700;
    }

    .stat-card-icon {
        width: 50px;
        height: 50px;
        border-radius: 8px;
        background: #ecfdf5;
        color: #10b981;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    /* ========================================================= 
        ANALYTICS & NOTICE SECTION (NEW)
    ========================================================= */
    .dashboard-grid-2 {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 25px;
    }

    @media (max-width: 992px) {
        .dashboard-grid-2 {
            grid-template-columns: 1fr;
        }
    }

    .dash-card {
        background: #ffffff;
        border: 1px solid #e1e5e9;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .dash-card-header {
        position: relative;
        padding: 15px 20px;
        background: #f8f9fb;
        border-bottom: 1px solid #e8e8e8;
        font-size: 16px;
        font-weight: 600;
        color: #333;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .dash-card-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #5cb85c, #06ce06);
    }

    .dash-card-body {
        padding: 20px;
        flex: 1;
    }

    /* Attendance Graph Styles */
    .attendance-item {
        margin-bottom: 15px;
    }
    .attendance-item:last-child {
        margin-bottom: 0;
    }
    .attendance-info {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        font-weight: 600;
        color: #475569;
        margin-bottom: 6px;
    }
    .progress-bar-container {
        width: 100%;
        height: 10px;
        background: #f1f5f9;
        border-radius: 5px;
        overflow: hidden;
    }
    .progress-bar-fill {
        height: 100%;
        background: #10b981;
        border-radius: 5px;
    }

    /* Notice Board Styles */
    .notice-list {
        list-style: none;
    }
    .notice-item {
        padding: 12px 0;
        border-bottom: 1px solid #f1f5f9;
    }
    .notice-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .notice-date {
        font-size: 11px;
        font-weight: 700;
        color: #10b981;
        background: #ecfdf5;
        padding: 2px 8px;
        border-radius: 4px;
        display: inline-block;
        margin-bottom: 4px;
    }
    .notice-title {
        font-size: 14px;
        font-weight: 600;
        color: #1e293b;
        text-decoration: none;
        display: block;
    }
    .notice-title:hover {
        color: #10b981;
    }

    /* ========================================================= 
        CUSTOM TABLE CARD & FILTER STYLES 
    ========================================================= */
    .table-card {
        background: #ffffff;
        border: 1px solid #e1e5e9;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        margin-bottom: 25px;
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
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .table-header-right {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

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
        color: #fff;
    }

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
        text-decoration: none;
        transition: all 0.2s;
    }

    .export-btn:hover {
        background: #f1f5f9;
        color: #1e293b;
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
    }

    .filter-control:focus {
        border-color: #10b981;
        box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.12);
    }

    /* Select2 fixes */
    .select2-container { width: 100% !important; }
    .select2-container .select2-selection--single {
        height: 40px !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 6px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 38px !important;
        padding-left: 14px !important;
    }

    .filter-btn-search, .filter-btn-reset {
        height: 40px;
        padding: 0 16px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
    }
    .filter-btn-search { background: #10b981; border: 1px solid #10b981; color: #fff; }
    .filter-btn-search:hover { background: #047857; }
    .filter-btn-reset { background: #fff; border: 1px solid #cbd5e1; color: #64748b; }
    .filter-btn-reset:hover { background: #f1f5f9; }

    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

    .custom-table {
        width: 100%;
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

    .custom-table tbody tr:hover td { background-color: #f8fafc; }

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
        list-style: none;
        gap: 4px;
        margin: 0;
    }

    .pagination .page-item .page-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 34px;
        height: 34px;
        padding: 0 12px;
        font-size: 13px;
        color: #475569;
        background-color: #fff;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        text-decoration: none;
    }

    .pagination .page-item.active .page-link {
        color: #fff;
        background-color: #10b981;
        border-color: #10b981;
    }

    /* ========================================================= 
        RESPONSIVE MEDIA QUERIES (MOBILE VIEW)
    ========================================================= */
    @media (max-width: 768px) {
        .dashboard-container {
            padding: 10px;
        }
        .school-topbar {
            padding: 0 15px;
        }
        .table-card-header {
            flex-direction: column;
            align-items: stretch;
        }
        .table-header-right {
            justify-content: flex-start;
        }
        /* Mobile Card View for Table */
        .custom-table, .custom-table tbody, .custom-table tr, .custom-table td, .custom-table th {
            display: block;
        }
        .custom-table thead { display: none; }
        .custom-table tr {
            margin-bottom: 12px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        }
        .custom-table td {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: right;
            padding: 12px 15px;
            white-space: normal;
        }
        .custom-table td::before {
            content: attr(data-label);
            font-weight: 600;
            color: #64748b;
            font-size: 12px;
            text-transform: uppercase;
        }
    }
    </style>
</head>
<body>

  

    <!-- Main Container -->
    <div class="dashboard-container">

        <!-- School Stats Summary Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-card-info">
                    <h4>Total Students</h4>
                    <h2>1,250</h2>
                </div>
                <div class="stat-card-icon"><i class="fa-solid fa-user-graduate"></i></div>
            </div>
            <div class="stat-card">
                <div class="stat-card-info">
                    <h4>Total Teachers</h4>
                    <h2>65</h2>
                </div>
                <div class="stat-card-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
            </div>
            <div class="stat-card">
                <div class="stat-card-info">
                    <h4>Today Attendance</h4>
                    <h2>92%</h2>
                </div>
                <div class="stat-card-icon"><i class="fa-solid fa-clipboard-user"></i></div>
            </div>
            <div class="stat-card">
                <div class="stat-card-info">
                    <h4>Monthly Fee Collection</h4>
                    <h2>$45,200</h2>
                </div>
                <div class="stat-card-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
            </div>
        </div>

        <!-- Attendance Graph & Notice Board Section -->
        <div class="dashboard-grid-2">
            <!-- Today Attendance Graph Card -->
            <div class="dash-card">
                <div class="dash-card-header">
                    <i class="fa-solid fa-chart-column"></i> Today's Student Attendance Rate
                </div>
                <div class="dash-card-body">
                    <div class="attendance-item">
                        <div class="attendance-info">
                            <span>Class 10</span>
                            <span>95% Present</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="attendance-item">
                        <div class="attendance-info">
                            <span>Class 9</span>
                            <span>88% Present</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: 88%; background: #3b82f6;"></div>
                        </div>
                    </div>
                    <div class="attendance-item">
                        <div class="attendance-info">
                            <span>Class 8</span>
                            <span>91% Present</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: 91%; background: #f59e0b;"></div>
                        </div>
                    </div>
                    <div class="attendance-item" style="margin-bottom: 0;">
                        <div class="attendance-info">
                            <span>Class 7</span>
                            <span>85% Present</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar-fill" style="width: 85%; background: #ec4899;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notice Board Card -->
            <div class="dash-card">
                <div class="dash-card-header">
                    <i class="fa-solid fa-bullhorn"></i> Notice Board
                </div>
                <div class="dash-card-body" style="padding-top: 10px; padding-bottom: 10px;">
                    <ul class="notice-list">
                        <li class="notice-item">
                            <span class="notice-date">August 20, 2026</span>
                            <a href="#" class="notice-title">Annual Sports Competition 2026 registration starts from tomorrow.</a>
                        </li>
                        <li class="notice-item">
                            <span class="notice-date">August 15, 2026</span>
                            <a href="#" class="notice-title">Half-yearly exam routine has been published successfully.</a>
                        </li>
                        <li class="notice-item">
                            <span class="notice-date">August 10, 2026</span>
                            <a href="#" class="notice-title">School will remain closed on upcoming Sunday due to maintenance.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Student List Table Card -->
        <div class="table-card">
            <div class="table-card-header">
                <h3 class="table-card-title">
                    <i class="fa-solid fa-users-rectangle"></i> Recent Students List
                </h3>
                
                <div class="table-header-right">
                    <div class="export-buttons-group">
                        <a href="#" class="export-btn" title="Excel"><i class="fa-solid fa-file-excel text-success"></i> Excel</a>
                        <a href="#" class="export-btn" title="PDF"><i class="fa-solid fa-file-pdf text-danger"></i> PDF</a>
                        <a href="#" class="export-btn" title="Print"><i class="fa-solid fa-print text-info"></i> Print</a>
                    </div>
                    <a href="#" class="create-btn">
                        <i class="fa-solid fa-plus"></i> Add Student
                    </a>
                </div>
            </div>

            <!-- Filter Box -->
            <div class="table-filter-box">
                <form method="get" action="">
                    <div class="filter-form-grid">
                        <div class="filter-col">
                            <label class="filter-label">Student Name</label>
                            <input type="text" class="filter-control" name="name" placeholder="Search by name...">
                        </div>
                        <div class="filter-col">
                            <label class="filter-label">Class</label>
                            <select class="filter-control select2" name="class">
                                <option value="">All Classes</option>
                                <option value="10">Class 10</option>
                                <option value="9">Class 9</option>
                                <option value="8">Class 8</option>
                            </select>
                        </div>
                        <div class="filter-col-btns">
                            <button type="submit" class="filter-btn-search"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                            <a href="" class="filter-btn-reset"><i class="fa-solid fa-rotate-left"></i> Reset</a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Table Content -->
            <div class="table-responsive">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>#Roll</th>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Section</th>
                            <th>Phone</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Roll">#101</td>
                            <td data-label="Student Name">Rakibul Hasan</td>
                            <td data-label="Class">Class 10</td>
                            <td data-label="Section">Science (A)</td>
                            <td data-label="Phone">+8801700000000</td>
                            <td data-label="Action" class="text-end">
                                <button class="btn btn-sm btn-light border text-primary"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-sm btn-light border text-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Roll">#102</td>
                            <td data-label="Student Name">Sumaiya Akter</td>
                            <td data-label="Class">Class 9</td>
                            <td data-label="Section">Arts (B)</td>
                            <td data-label="Phone">+8801800000000</td>
                            <td data-label="Action" class="text-end">
                                <button class="btn btn-sm btn-light border text-primary"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-sm btn-light border text-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Roll">#103</td>
                            <td data-label="Student Name">Tanvir Ahmed</td>
                            <td data-label="Class">Class 8</td>
                            <td data-label="Section">General (C)</td>
                            <td data-label="Phone">+8801900000000</td>
                            <td data-label="Action" class="text-end">
                                <button class="btn btn-sm btn-light border text-primary"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-sm btn-light border text-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Roll">#104</td>
                            <td data-label="Student Name">Nusrat Jahan</td>
                            <td data-label="Class">Class 10</td>
                            <td data-label="Section">Commerce (B)</td>
                            <td data-label="Phone">+8801600000000</td>
                            <td data-label="Action" class="text-end">
                                <button class="btn btn-sm btn-light border text-primary"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-sm btn-light border text-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Roll">#105</td>
                            <td data-label="Student Name">Imran Hossain</td>
                            <td data-label="Class">Class 9</td>
                            <td data-label="Section">Science (A)</td>
                            <td data-label="Phone">+8801500000000</td>
                            <td data-label="Action" class="text-end">
                                <button class="btn btn-sm btn-light border text-primary"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-sm btn-light border text-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Footer / Pagination -->
            <div class="table-footer">
                <span style="font-size: 13px; color: #64748b; font-weight: 600;">Showing 1 to 5 of 5 entries</span>
                <nav>
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
