<div class="content">


    <!-- ==========================================================
         CREATE CLASS
    =========================================================== -->

    <div class="panel-card" id="addClassForm">


        <!-- PANEL HEADER -->

        <div class="panel-header">

            <div class="panel-title-wrap">

                <div class="panel-title-icon">

                    <i class="fa-solid fa-graduation-cap"></i>

                </div>


                <div>

                    <h5>Create Class</h5>

                    <p>
                        Create a class and assign sections
                    </p>

                </div>

            </div>


            <button
                class="btn btn-primary"
                type="button"
                onclick="scrollToForm()"
            >

                <i class="fa-solid fa-plus me-1"></i>

                Add Class

            </button>

        </div>


        <!-- PANEL BODY -->

        <div class="panel-body">


            <!-- SUCCESS -->

            <?php if ($this->session->flashdata('success')): ?>

                <div class="alert alert-success">

                    <i class="fa-solid fa-circle-check me-1"></i>

                    <?= html_escape(
                        $this->session->flashdata('success')
                    ); ?>

                </div>

            <?php endif; ?>


            <!-- ERROR -->

            <?php if ($this->session->flashdata('error')): ?>

                <div class="alert alert-danger">

                    <i class="fa-solid fa-circle-exclamation me-1"></i>

                    <?= html_escape(
                        $this->session->flashdata('error')
                    ); ?>

                </div>

            <?php endif; ?>


            <!-- FORM -->

            <form
                id="classForm"
                method="post"
                action="<?= site_url('classes/store'); ?>"
                novalidate
            >


                <div class="row g-3">


                    <!-- =================================================
                         CLASS NAME
                    ================================================== -->

                    <div class="col-md-6">

                        <label
                            class="form-label"
                            for="className"
                        >
                            Class Name
                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="fa-solid fa-graduation-cap"></i>

                            </span>


                            <input
                                type="text"
                                class="form-control"
                                name="class"
                                id="className"
                                placeholder="Enter class name"
                                autocomplete="off"
                                required
                            />

                        </div>


                        <div
                            id="classNameError"
                            class="validation-error"
                            style="display:none;"
                        >

                            <i class="fa-solid fa-circle-exclamation"></i>

                            Please enter class name.

                        </div>

                    </div>


                    <!-- =================================================
                         STATUS
                    ================================================== -->

                    <div class="col-md-6">

                        <label class="form-label">

                            Status

                        </label>


                        <select
                            class="form-select select2"
                            disabled
                        >

                            <option selected>
                                Active
                            </option>

                        </select>


                        <small class="text-muted">
                            New classes are active by default.
                        </small>

                    </div>


                    <!-- =================================================
                         SECTION HEADER
                    ================================================== -->

                    <div class="col-12 mt-4">


                        <div
                            class="d-flex justify-content-between align-items-center mb-2"
                        >

                            <div>

                                <h6 class="mb-1">

                                    <i
                                        class="fa-solid fa-layer-group me-1"
                                    ></i>

                                    Class Sections

                                </h6>


                                <small class="text-muted">

                                    Select one or more sections for this class.

                                </small>

                            </div>


                            <button
                                type="button"
                                class="btn btn-outline-primary btn-sm"
                                id="selectAllSections"
                            >

                                <i class="fa-solid fa-check-double me-1"></i>

                                Select All

                            </button>

                        </div>


                        <div
                            class="section-selection-box"
                            style="
                                border:1px solid #e5e7eb;
                                border-radius:12px;
                                padding:18px;
                                background:#fafafa;
                            "
                        >


                            <div class="row g-3">


                                <?php if (!empty($sections)): ?>


                                    <?php foreach ($sections as $section): ?>


                                        <div class="col-md-4 col-lg-3">


                                            <label
                                                class="section-option"
                                                style="
                                                    display:flex;
                                                    align-items:center;
                                                    gap:10px;
                                                    padding:13px 15px;
                                                    background:#fff;
                                                    border:1px solid #e5e7eb;
                                                    border-radius:10px;
                                                    cursor:pointer;
                                                    transition:.2s;
                                                "
                                            >


                                                <input
                                                    type="checkbox"
                                                    class="form-check-input section-checkbox"
                                                    name="section_id[]"
                                                    value="<?= (int) $section->id; ?>"
                                                />


                                                <span>

                                                    <i
                                                        class="fa-solid fa-layer-group text-primary me-1"
                                                    ></i>

                                                    <?= html_escape(
                                                        $section->section
                                                    ); ?>

                                                </span>


                                            </label>


                                        </div>


                                    <?php endforeach; ?>


                                <?php else: ?>


                                    <div class="col-12">

                                        <div
                                            class="alert alert-warning mb-0"
                                        >

                                            <i
                                                class="fa-solid fa-triangle-exclamation me-1"
                                            ></i>

                                            No active sections found.

                                            Please create sections first.

                                        </div>

                                    </div>


                                <?php endif; ?>


                            </div>


                        </div>


                        <div
                            id="sectionError"
                            class="validation-error mt-2"
                            style="display:none;"
                        >

                            <i class="fa-solid fa-circle-exclamation"></i>

                            Please select at least one section.

                        </div>


                    </div>


                    <!-- =================================================
                         SELECTED SECTION PREVIEW
                    ================================================== -->

                    <div class="col-12">


                        <div
                            id="selectedSectionPreview"
                            class="selected-preview"
                            style="display:none;"
                        >

                            <div class="mb-2">

                                <strong>
                                    Selected Sections
                                </strong>

                            </div>


                            <div id="selectedSectionList"></div>

                        </div>


                    </div>


                    <!-- =================================================
                         BUTTONS
                    ================================================== -->

                    <div class="col-12">


                        <div
                            class="d-flex justify-content-end gap-2"
                        >


                            <button
                                type="reset"
                                class="btn btn-light-custom"
                                id="resetClassForm"
                            >

                                <i
                                    class="fa-solid fa-rotate-left me-1"
                                ></i>

                                Reset

                            </button>


                            <button
                                type="submit"
                                class="btn btn-primary"
                            >

                                <i
                                    class="fa-solid fa-check me-1"
                                ></i>

                                Create Class

                            </button>


                        </div>


                    </div>


                </div>

            </form>

        </div>

    </div>



    <!-- ==========================================================
         CLASS LIST
    =========================================================== -->

    <div class="panel-card mt-4">


        <div class="panel-header">


            <div class="panel-title-wrap">


                <div class="panel-title-icon">

                    <i class="fa-solid fa-list"></i>

                </div>


                <div>

                    <h5>Class List</h5>

                    <p>
                        Manage all classes and their sections
                    </p>

                </div>


            </div>


        </div>


        <div class="panel-body">


            <div class="table-responsive">


                <table
                    class="table table-hover align-middle"
                >


                    <thead>

                        <tr>

                            <th style="width:70px;">
                                #
                            </th>

                            <th>
                                Class
                            </th>

                            <th>
                                Sections
                            </th>

                            <th>
                                Status
                            </th>

                            <th style="width:120px;">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <?php if (!empty($classes)): ?>


                            <?php $i = 1; ?>


                            <?php foreach ($classes as $row): ?>


                                <tr>


                                    <td>
                                        <?= $i++; ?>
                                    </td>


                                    <td>

                                        <strong>

                                            <i
                                                class="fa-solid fa-graduation-cap text-primary me-1"
                                            ></i>

                                            <?= html_escape(
                                                $row->class
                                            ); ?>

                                        </strong>

                                    </td>


                                    <td>

                                        <span
                                            class="badge bg-light text-dark"
                                        >

                                            <?= (int) $row->total_sections; ?>

                                            Sections

                                        </span>

                                    </td>


                                    <td>


                                        <?php if ($row->is_active == 1): ?>

                                            <span
                                                class="badge bg-success"
                                            >

                                                <i
                                                    class="fa-solid fa-circle-check me-1"
                                                ></i>

                                                Active

                                            </span>

                                        <?php else: ?>

                                            <span
                                                class="badge bg-danger"
                                            >

                                                Inactive

                                            </span>

                                        <?php endif; ?>


                                    </td>


                                    <td>


                                        <button
                                            type="button"
                                            class="btn btn-sm btn-light"
                                            title="Edit"
                                        >

                                            <i
                                                class="fa-solid fa-pen"
                                            ></i>

                                        </button>


                                        <button
                                            type="button"
                                            class="btn btn-sm btn-light"
                                            title="View Sections"
                                        >

                                            <i
                                                class="fa-solid fa-eye"
                                            ></i>

                                        </button>


                                    </td>


                                </tr>


                            <?php endforeach; ?>


                        <?php else: ?>


                            <tr>

                                <td
                                    colspan="5"
                                    class="text-center text-muted py-4"
                                >

                                    <i
                                        class="fa-solid fa-folder-open fa-2x mb-2"
                                    ></i>

                                    <br>

                                    No classes found.

                                </td>

                            </tr>


                        <?php endif; ?>


                    </tbody>


                </table>


            </div>

        </div>

    </div>

</div>