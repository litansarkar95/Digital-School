<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Professional Customer Form</title>


    <!-- Bootstrap 5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- Select2 -->
    <link
        href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
        rel="stylesheet">


    <!-- Inter Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">


<style>

/* =====================================================
   GLOBAL
===================================================== */

* {
    box-sizing: border-box;
}

body {

    margin: 0;

    padding: 35px 20px;

    background: #f5f7fb;

    color: #344054;

    font-family: "Inter", sans-serif;

}


/* =====================================================
   WRAPPER
===================================================== */

.form-wrapper {

    width: 100%;

    max-width: 1100px;

    margin: auto;

}


/* =====================================================
   MAIN CARD
===================================================== */

.form-card {

    background: #fff;

    border: 1px solid #e4e7ec;

    border-radius: 16px;

    overflow: hidden;

    box-shadow:
        0 2px 4px rgba(16,24,40,.02),
        0 10px 30px rgba(16,24,40,.05);

}


/* =====================================================
   HEADER
===================================================== */

.form-header {

    padding: 22px 26px;

    border-bottom: 1px solid #eaecf0;

    background:
        linear-gradient(
            180deg,
            #ffffff 0%,
            #fbfcfe 100%
        );

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

}


/* =====================================================
   HEADER LEFT
===================================================== */

.form-header-left {

    display: flex;

    align-items: center;

    gap: 13px;

    min-width: 0;

}


.form-header-icon {

    width: 42px;

    height: 42px;

    flex: 0 0 42px;

    border-radius: 11px;

    display: flex;

    align-items: center;

    justify-content: center;

    background:
        linear-gradient(
            135deg,
            #eef2ff,
            #e0e7ff
        );

    color: #4f46e5;

    font-size: 18px;

}


.form-header-content {

    min-width: 0;

}


.form-header h3 {

    margin: 0 0 4px;

    color: #101828;

    font-size: 17px;

    font-weight: 700;

}


.form-header p {

    margin: 0;

    color: #98a2b3;

    font-size: 12px;

}


/* =====================================================
   CUSTOMER LIST BUTTON
===================================================== */

.btn-list {

    height: 40px;

    padding: 0 14px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    flex: 0 0 auto;

    border: 1px solid #d0d5dd;

    border-radius: 8px;

    background: #ffffff;

    color: #475467;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    box-shadow:
        0 1px 2px rgba(16,24,40,.04);

    transition: all .2s ease;

}


.btn-list i {

    font-size: 14px;

    color: #6366f1;

}


.btn-list:hover {

    color: #4f46e5;

    background: #f8f8ff;

    border-color: #a5b4fc;

    box-shadow:
        0 3px 8px rgba(79,70,229,.08);

    transform: translateY(-1px);

}


.btn-list:active {

    transform: translateY(0);

}


/* =====================================================
   FORM BODY
===================================================== */

.form-body {

    padding: 26px;

}


/* =====================================================
   FORM SECTION
===================================================== */

.form-section {

    margin-bottom: 28px;

    padding-bottom: 25px;

    border-bottom: 1px solid #f0f2f5;

}


.form-section:last-child {

    margin-bottom: 0;

    padding-bottom: 0;

    border-bottom: 0;

}


/* =====================================================
   SECTION HEADING
===================================================== */

.section-heading {

    display: flex;

    align-items: center;

    gap: 9px;

    margin-bottom: 20px;

}


.section-heading-icon {

    width: 30px;

    height: 30px;

    flex: 0 0 30px;

    border-radius: 8px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #f4f3ff;

    color: #6366f1;

    font-size: 13px;

}


.section-heading-content h4 {

    margin: 0 0 2px;

    color: #101828;

    font-size: 14px;

    font-weight: 700;

}


.section-heading-content p {

    margin: 0;

    color: #98a2b3;

    font-size: 11px;

}


/* =====================================================
   FORM GROUP
===================================================== */

.form-group {

    margin-bottom: 18px;

}


.form-label {

    display: block;

    margin-bottom: 7px;

    color: #344054;

    font-size: 12px;

    font-weight: 600;

}


.form-label .required {

    color: #ef4444;

    margin-left: 2px;

}


/* =====================================================
   INPUT / SELECT
===================================================== */

.form-control,
.form-select {

    width: 100%;

    min-height: 44px;

    padding: 9px 12px;

    border: 1px solid #d0d5dd !important;

    border-radius: 8px !important;

    background: #fff !important;

    color: #344054 !important;

    font-family: "Inter", sans-serif;

    font-size: 12px;

    font-weight: 500;

    box-shadow:
        0 1px 2px rgba(16,24,40,.03);

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background .2s ease;

}


.form-control::placeholder {

    color: #98a2b3;

    font-weight: 400;

}


.form-control:hover,
.form-select:hover {

    border-color: #98a2b3 !important;

}


.form-control:focus,
.form-select:focus {

    border-color: #6366f1 !important;

    outline: none !important;

    box-shadow:
        0 0 0 3px rgba(99,102,241,.10) !important;

}


/* =====================================================
   NATIVE SELECT
===================================================== */

select.form-select {

    appearance: none;

    -webkit-appearance: none;

    -moz-appearance: none;

    cursor: pointer;

    padding-right: 38px;

    background-image:

        linear-gradient(
            45deg,
            transparent 50%,
            #667085 50%
        ),

        linear-gradient(
            135deg,
            #667085 50%,
            transparent 50%
        ) !important;

    background-position:

        calc(100% - 16px) 18px,
        calc(100% - 11px) 18px !important;

    background-size:
        5px 5px,
        5px 5px !important;

    background-repeat: no-repeat !important;

}


/* =====================================================
   TEXTAREA
===================================================== */

textarea.form-control {

    min-height: 110px;

    height: 110px;

    padding: 11px 12px;

    line-height: 1.55;

    resize: vertical;

}


textarea.form-control.large {

    min-height: 150px;

    height: 150px;

}


/* =====================================================
   HELP TEXT
===================================================== */

.form-help {

    display: flex;

    align-items: center;

    gap: 4px;

    margin-top: 5px;

    color: #98a2b3;

    font-size: 10px;

}


/* =====================================================
   SELECT2
===================================================== */

.select2-container {

    width: 100% !important;

}


.select2-container
.select2-selection--single {

    height: 44px !important;

    border: 1px solid #d0d5dd !important;

    border-radius: 8px !important;

    background: #fff !important;

    box-shadow:
        0 1px 2px rgba(16,24,40,.03);

    transition: .2s ease;

}


.select2-container
.select2-selection--single:hover {

    border-color: #98a2b3 !important;

}


.select2-container--open
.select2-selection--single {

    border-color: #6366f1 !important;

    box-shadow:
        0 0 0 3px rgba(99,102,241,.10) !important;

}


.select2-container
.select2-selection--single
.select2-selection__rendered {

    height: 42px;

    line-height: 42px !important;

    padding-left: 12px !important;

    padding-right: 40px !important;

    color: #344054 !important;

    font-size: 12px;

    font-weight: 500;

}


.select2-container
.select2-selection--single
.select2-selection__placeholder {

    color: #98a2b3 !important;

}


.select2-container
.select2-selection--single
.select2-selection__arrow {

    height: 42px !important;

    width: 35px !important;

    right: 2px !important;

    top: 1px !important;

}


.select2-container
.select2-selection--single
.select2-selection__arrow b {

    border-color:
        #667085 transparent transparent transparent !important;

    border-width:
        5px 5px 0 5px !important;

    margin-left: -5px !important;

    margin-top: -2px !important;

}


/* =====================================================
   SELECT2 DROPDOWN
===================================================== */

.select2-container--open {

    z-index: 999999 !important;

}


.select2-dropdown {

    margin-top: 5px;

    border: 1px solid #e4e7ec !important;

    border-radius: 10px !important;

    overflow: hidden;

    box-shadow:
        0 12px 30px rgba(16,24,40,.12),
        0 3px 8px rgba(16,24,40,.05);

}


.select2-search--dropdown {

    padding: 8px !important;

    background: #fafbfc;

    border-bottom: 1px solid #eef1f5;

}


.select2-search__field {

    height: 36px !important;

    padding: 0 10px !important;

    border: 1px solid #d0d5dd !important;

    border-radius: 7px !important;

    outline: none !important;

    font-size: 12px !important;

}


.select2-search__field:focus {

    border-color: #6366f1 !important;

    box-shadow:
        0 0 0 3px rgba(99,102,241,.08) !important;

}


.select2-results {

    padding: 5px !important;

}


.select2-results__option {

    padding: 8px 10px !important;

    margin: 2px 0;

    border-radius: 6px;

    color: #344054;

    font-size: 12px;

    cursor: pointer;

}


.select2-results__option--highlighted {

    background: #eef2ff !important;

    color: #4f46e5 !important;

}


.select2-results__option[aria-selected="true"] {

    background: #f3f4ff !important;

    color: #4f46e5 !important;

    font-weight: 600;

}


.select2-results__option[aria-selected="true"]::after {

    content: "✓";

    float: right;

    color: #6366f1;

    font-weight: 700;

}


/* =====================================================
   MULTIPLE SELECT2
===================================================== */

.select2-container
.select2-selection--multiple {

    min-height: 44px !important;

    padding: 4px 6px !important;

    border: 1px solid #d0d5dd !important;

    border-radius: 8px !important;

    background: #fff !important;

}


.select2-container
.select2-selection--multiple:focus-within {

    border-color: #6366f1 !important;

    box-shadow:
        0 0 0 3px rgba(99,102,241,.10) !important;

}


.select2-container
.select2-selection__choice {

    margin-top: 2px !important;

    margin-bottom: 2px !important;

    border: 0 !important;

    border-radius: 6px !important;

    background: #eef2ff !important;

    color: #4f46e5 !important;

    font-size: 11px !important;

    font-weight: 600;

    padding: 4px 7px !important;

}


/* =====================================================
   CHECKBOX
===================================================== */

.check-wrapper {

    padding: 13px 14px;

    border: 1px solid #e4e7ec;

    border-radius: 9px;

    background: #fafbfc;

    transition: .2s ease;

}


.check-wrapper:has(input:checked) {

    border-color: #c7d2fe;

    background: #f8f8ff;

}


.custom-check {

    position: relative;

    display: flex;

    align-items: center;

    gap: 10px;

    cursor: pointer;

    margin: 0;

}


.custom-check input {

    position: absolute;

    opacity: 0;

    pointer-events: none;

}


.check-box {

    width: 19px;

    height: 19px;

    flex: 0 0 19px;

    border: 1.5px solid #cfd5df;

    border-radius: 5px;

    background: #fff;

    position: relative;

    transition: .2s ease;

}


.custom-check:hover .check-box {

    border-color: #6366f1;

    box-shadow:
        0 0 0 3px rgba(99,102,241,.07);

}


.custom-check input:checked + .check-box {

    border-color: #6366f1;

    background:
        linear-gradient(
            135deg,
            #6366f1,
            #4f46e5
        );

}


.custom-check input:checked
+ .check-box::after {

    content: "";

    position: absolute;

    width: 5px;

    height: 9px;

    left: 6px;

    top: 3px;

    border:
        solid #fff;

    border-width:
        0 2px 2px 0;

    transform: rotate(45deg);

}


.check-text {

    color: #344054;

    font-size: 12px;

    font-weight: 500;

}


.check-text strong {

    display: block;

    color: #101828;

    font-size: 12px;

    font-weight: 600;

}


.check-text small {

    display: block;

    margin-top: 2px;

    color: #98a2b3;

    font-size: 10px;

}


/* =====================================================
   CHECKBOX MESSAGE
===================================================== */

.check-message {

    display: none;

    align-items: flex-start;

    gap: 9px;

    margin-top: 10px;

    padding: 10px 12px;

    border: 1px solid #abefc6;

    border-radius: 8px;

    background: #ecfdf3;

    color: #067647;

}


.check-message-icon {

    width: 22px;

    height: 22px;

    flex: 0 0 22px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #12b76a;

    color: #fff;

    font-size: 11px;

}


.check-message strong {

    display: block;

    margin-bottom: 2px;

    font-size: 11px;

}


.check-message p {

    margin: 0;

    color: #067647;

    font-size: 10px;

    line-height: 1.5;

}


/* =====================================================
   RADIO
===================================================== */

.radio-group {

    display: flex;

    gap: 10px;

    flex-wrap: wrap;

}


.radio-option {

    position: relative;

    cursor: pointer;

    margin: 0;

}


.radio-option input {

    position: absolute;

    opacity: 0;

}


.radio-box {

    min-width: 110px;

    padding: 10px 13px;

    display: flex;

    align-items: center;

    gap: 8px;

    border: 1px solid #d0d5dd;

    border-radius: 8px;

    background: #fff;

    color: #475467;

    font-size: 11px;

    font-weight: 500;

    transition: .2s ease;

}


.radio-circle {

    width: 15px;

    height: 15px;

    border: 1.5px solid #cfd5df;

    border-radius: 50%;

    position: relative;

}


.radio-option:hover .radio-box {

    border-color: #a5b4fc;

    background: #fafaff;

}


.radio-option input:checked
+ .radio-box {

    border-color: #6366f1;

    background: #f5f3ff;

    color: #4f46e5;

}


.radio-option input:checked
+ .radio-box
.radio-circle {

    border-color: #6366f1;

}


.radio-option input:checked
+ .radio-box
.radio-circle::after {

    content: "";

    position: absolute;

    width: 7px;

    height: 7px;

    top: 2px;

    left: 2px;

    border-radius: 50%;

    background: #6366f1;

}


/* =====================================================
   FOOTER
===================================================== */

.form-footer {

    padding: 18px 26px;

    border-top: 1px solid #eaecf0;

    background: #fafbfc;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 10px;

}


.footer-note {

    color: #98a2b3;

    font-size: 10px;

}


.footer-buttons {

    display: flex;

    gap: 7px;

}


.btn-cancel {

    height: 40px;

    padding: 0 17px;

    border: 1px solid #d0d5dd;

    border-radius: 7px;

    background: #fff;

    color: #475467;

    font-size: 11px;

    font-weight: 600;

    cursor: pointer;

}


.btn-cancel:hover {

    background: #f9fafb;

    border-color: #98a2b3;

}


.btn-save {

    height: 40px;

    padding: 0 19px;

    border: 0;

    border-radius: 7px;

    background:
        linear-gradient(
            135deg,
            #6366f1,
            #4f46e5
        );

    color: #fff;

    font-size: 11px;

    font-weight: 600;

    box-shadow:
        0 4px 10px rgba(79,70,229,.18);

    transition: .2s ease;

    cursor: pointer;

}


.btn-save:hover {

    color: #fff;

    transform: translateY(-1px);

    box-shadow:
        0 6px 15px rgba(79,70,229,.25);

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 767px) {

    body {

        padding: 10px 7px;

    }


    .form-card {

        border-radius: 13px;

    }


    /* Header */

    .form-header {

        padding: 16px;

        flex-wrap: wrap;

        gap: 12px;

    }


    .form-header-left {

        width: 100%;

    }


    .form-header-icon {

        width: 37px;

        height: 37px;

        flex-basis: 37px;

        border-radius: 9px;

        font-size: 16px;

    }


    .form-header h3 {

        font-size: 15px;

    }


    .form-header p {

        font-size: 10px;

    }


    /*
       Customer List
       Mobile এ title-এর নিচে
    */

    .btn-list {

        width: 100%;

        height: 39px;

        font-size: 11px;

        border-radius: 7px;

    }


    /* Body */

    .form-body {

        padding: 17px;

    }


    .form-section {

        margin-bottom: 22px;

        padding-bottom: 20px;

    }


    .section-heading {

        margin-bottom: 16px;

    }


    .section-heading-icon {

        width: 27px;

        height: 27px;

    }


    .section-heading-content h4 {

        font-size: 13px;

    }


    .section-heading-content p {

        font-size: 10px;

    }


    .form-label {

        font-size: 11px;

    }


    .form-control,
    .form-select {

        min-height: 43px;

        font-size: 11px;

    }


    .select2-container
    .select2-selection--single {

        height: 43px !important;

    }


    .select2-container
    .select2-selection--single
    .select2-selection__rendered {

        height: 41px;

        line-height: 41px !important;

        font-size: 11px;

    }


    textarea.form-control {

        min-height: 100px;

        height: 100px;

    }


    /* Radio */

    .radio-box {

        min-width: 95px;

        padding: 9px 10px;

    }


    /* Footer */

    .form-footer {

        padding: 14px 17px;

        flex-direction: column;

        align-items: stretch;

    }


    .footer-note {

        text-align: center;

        margin-bottom: 3px;

    }


    .footer-buttons {

        display: flex;

        gap: 7px;

    }


    .footer-buttons button {

        flex: 1;

    }

}


/* =====================================================
   EXTRA SMALL MOBILE
===================================================== */

@media (max-width: 380px) {

    .form-header {

        padding: 14px;

    }


    .form-body {

        padding: 14px;

    }


    .form-header h3 {

        font-size: 14px;

    }


    .form-header p {

        font-size: 9px;

    }


    .radio-group {

        gap: 6px;

    }


    .radio-box {

        min-width: 85px;

        padding: 8px;

        font-size: 10px;

    }

}

</style>

</head>


<body>


<div class="form-wrapper">


    <div class="form-card">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="form-header">


            <div class="form-header-left">


                <div class="form-header-icon">

                    <i class="bi bi-person-vcard"></i>

                </div>


                <div class="form-header-content">

                    <h3>
                        Customer Information
                    </h3>

                    <p>
                        Add and manage customer information
                    </p>

                </div>


            </div>


            <!-- CUSTOMER LIST BUTTON -->

            <a href="#"
               class="btn-list">

                <i class="bi bi-list-ul"></i>

                <span>
                    Customer List
                </span>

            </a>


        </div>



        <!-- =================================================
             FORM BODY
        ================================================== -->

        <div class="form-body">


            <!-- =================================================
                 PERSONAL INFORMATION
            ================================================== -->

            <div class="form-section">


                <div class="section-heading">


                    <div class="section-heading-icon">

                        <i class="bi bi-person"></i>

                    </div>


                    <div class="section-heading-content">

                        <h4>
                            Personal Information
                        </h4>

                        <p>
                            Basic information about the customer
                        </p>

                    </div>


                </div>



                <div class="row g-3">


                    <!-- First Name -->

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="form-label">

                                First Name

                                <span class="required">*</span>

                            </label>


                            <input
                                type="text"
                                name="first_name"
                                class="form-control"
                                placeholder="Enter first name">


                        </div>

                    </div>



                    <!-- Last Name -->

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="form-label">

                                Last Name

                                <span class="required">*</span>

                            </label>


                            <input
                                type="text"
                                name="last_name"
                                class="form-control"
                                placeholder="Enter last name">


                        </div>

                    </div>



                    <!-- Phone -->

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="form-label">

                                Phone Number

                                <span class="required">*</span>

                            </label>


                            <input
                                type="tel"
                                name="phone"
                                class="form-control"
                                placeholder="01XXXXXXXXX">


                        </div>

                    </div>



                    <!-- Email -->

                    <div class="col-md-6">

                        <div class="form-group">

                            <label class="form-label">

                                Email Address

                            </label>


                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="example@email.com">


                        </div>

                    </div>



                    <!-- Gender -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Gender

                            </label>


                            <div class="radio-group">


                                <label class="radio-option">

                                    <input
                                        type="radio"
                                        name="gender"
                                        value="male">


                                    <span class="radio-box">

                                        <span class="radio-circle"></span>

                                        Male

                                    </span>

                                </label>



                                <label class="radio-option">

                                    <input
                                        type="radio"
                                        name="gender"
                                        value="female">


                                    <span class="radio-box">

                                        <span class="radio-circle"></span>

                                        Female

                                    </span>

                                </label>



                                <label class="radio-option">

                                    <input
                                        type="radio"
                                        name="gender"
                                        value="other">


                                    <span class="radio-box">

                                        <span class="radio-circle"></span>

                                        Other

                                    </span>

                                </label>


                            </div>


                        </div>

                    </div>



                    <!-- Date -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Date of Birth

                            </label>


                            <input
                                type="date"
                                name="date_of_birth"
                                class="form-control">


                        </div>

                    </div>


                </div>


            </div>



            <!-- =================================================
                 ADDRESS INFORMATION
            ================================================== -->

            <div class="form-section">


                <div class="section-heading">


                    <div class="section-heading-icon">

                        <i class="bi bi-geo-alt"></i>

                    </div>


                    <div class="section-heading-content">

                        <h4>
                            Address Information
                        </h4>

                        <p>
                            Customer location and address details
                        </p>

                    </div>


                </div>



                <div class="row g-3">


                    <!-- Country -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Country

                                <span class="required">*</span>

                            </label>


                            <select
                                class="form-select select2"
                                name="country"
                                data-placeholder="Select Country">


                                <option value=""></option>

                                <option value="bd">
                                    Bangladesh
                                </option>

                                <option value="in">
                                    India
                                </option>

                                <option value="pk">
                                    Pakistan
                                </option>

                                <option value="np">
                                    Nepal
                                </option>

                                <option value="us">
                                    United States
                                </option>


                            </select>


                        </div>

                    </div>



                    <!-- Division -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Division

                            </label>


                            <select
                                class="form-select select2"
                                name="division"
                                data-placeholder="Select Division">


                                <option value=""></option>

                                <option value="dhaka">
                                    Dhaka
                                </option>

                                <option value="chattogram">
                                    Chattogram
                                </option>

                                <option value="rajshahi">
                                    Rajshahi
                                </option>

                                <option value="khulna">
                                    Khulna
                                </option>

                                <option value="sylhet">
                                    Sylhet
                                </option>

                                <option value="barishal">
                                    Barishal
                                </option>

                                <option value="rangpur">
                                    Rangpur
                                </option>

                                <option value="mymensingh">
                                    Mymensingh
                                </option>


                            </select>


                        </div>

                    </div>



                    <!-- City -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                City

                                <span class="required">*</span>

                            </label>


                            <select
                                class="form-select select2"
                                name="city"
                                data-placeholder="Select City">


                                <option value=""></option>

                                <option value="dhaka">
                                    Dhaka
                                </option>

                                <option value="gazipur">
                                    Gazipur
                                </option>

                                <option value="narayanganj">
                                    Narayanganj
                                </option>

                                <option value="tangail">
                                    Tangail
                                </option>

                                <option value="comilla">
                                    Comilla
                                </option>


                            </select>


                        </div>

                    </div>



                    <!-- Zip -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Zip Code

                            </label>


                            <input
                                type="text"
                                name="zip"
                                class="form-control"
                                placeholder="Enter zip code">


                        </div>

                    </div>



                    <!-- Address -->

                    <div class="col-md-12">

                        <div class="form-group">


                            <label class="form-label">

                                Full Address

                                <span class="required">*</span>

                            </label>


                            <textarea
                                name="address"
                                class="form-control"
                                placeholder="Enter complete address"></textarea>


                            <div class="form-help">

                                <i class="bi bi-info-circle"></i>

                                Include house number, road and area.

                            </div>


                        </div>

                    </div>


                </div>


            </div>



            <!-- =================================================
                 ADDITIONAL INFORMATION
            ================================================== -->

            <div class="form-section">


                <div class="section-heading">


                    <div class="section-heading-icon">

                        <i class="bi bi-ui-checks-grid"></i>

                    </div>


                    <div class="section-heading-content">

                        <h4>
                            Additional Information
                        </h4>

                        <p>
                            Additional preferences and settings
                        </p>

                    </div>


                </div>



                <div class="row g-3">


                    <!-- Customer Type -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Customer Type

                                <span class="required">*</span>

                            </label>


                            <select
                                class="form-select"
                                name="customer_type">


                                <option value="">

                                    Select Customer Type

                                </option>


                                <option value="regular">

                                    Regular Customer

                                </option>


                                <option value="wholesale">

                                    Wholesale Customer

                                </option>


                                <option value="corporate">

                                    Corporate Customer

                                </option>


                            </select>


                        </div>

                    </div>



                    <!-- Tags -->

                    <div class="col-md-6">

                        <div class="form-group">


                            <label class="form-label">

                                Customer Tags

                            </label>


                            <select
                                class="form-select select2"
                                name="tags[]"
                                multiple
                                data-placeholder="Select tags">


                                <option value="vip">

                                    VIP

                                </option>


                                <option value="regular">

                                    Regular

                                </option>


                                <option value="wholesale">

                                    Wholesale

                                </option>


                                <option value="corporate">

                                    Corporate

                                </option>


                                <option value="online">

                                    Online

                                </option>


                            </select>


                        </div>

                    </div>



                    <!-- Notes -->

                    <div class="col-md-12">

                        <div class="form-group">


                            <label class="form-label">

                                Notes

                            </label>


                            <textarea
                                name="notes"
                                class="form-control large"
                                placeholder="Write additional notes..."></textarea>


                        </div>

                    </div>


                </div>


            </div>



            <!-- =================================================
                 CONFIRMATION
            ================================================== -->

            <div class="form-section">


                <div class="section-heading">


                    <div class="section-heading-icon">

                        <i class="bi bi-shield-check"></i>

                    </div>


                    <div class="section-heading-content">

                        <h4>
                            Confirmation
                        </h4>

                        <p>
                            Review and confirm the information
                        </p>

                    </div>


                </div>



                <div class="check-wrapper">


                    <label class="custom-check">


                        <input
                            type="checkbox"
                            id="agreeTerms"
                            name="agree_terms"
                            value="1">


                        <span class="check-box"></span>


                        <span class="check-text">


                            <strong>

                                I confirm that the information is correct

                            </strong>


                            <small>

                                Please verify all information before saving.

                            </small>


                        </span>


                    </label>



                    <!-- Message -->

                    <div
                        class="check-message"
                        id="confirmMessage">


                        <div class="check-message-icon">

                            <i class="bi bi-check-lg"></i>

                        </div>


                        <div>


                            <strong>

                                Information confirmed

                            </strong>


                            <p>

                                Everything looks good.
                                You can now save this information.

                            </p>


                        </div>


                    </div>


                </div>


            </div>


        </div>



        <!-- =================================================
             FOOTER
        ================================================== -->

        <div class="form-footer">


            <div class="footer-note">

                <i class="bi bi-lock"></i>

                Your information is securely stored.

            </div>


            <div class="footer-buttons">


                <button
                    type="button"
                    class="btn-cancel">

                    Cancel

                </button>


                <button
                    type="submit"
                    class="btn-save">

                    <i class="bi bi-check2-circle"></i>

                    Save Customer

                </button>


            </div>


        </div>


    </div>

</div>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->


<!-- jQuery -->

<script
src="https://code.jquery.com/jquery-3.7.1.min.js">
</script>


<!-- Bootstrap -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>


<!-- Select2 -->

<script
src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js">
</script>


<script>


$(document).ready(function () {


    /* =================================================
       SELECT2
    ================================================= */

    $('.select2').each(function () {


        var placeholder =
            $(this).data('placeholder') ||
            'Select an option';


        $(this).select2({

            width: '100%',

            placeholder: placeholder,

            allowClear: true,

            minimumResultsForSearch: 0,

            closeOnSelect:
                !$(this).prop('multiple')

        });


    });



    /* =================================================
       CHECKBOX MESSAGE
    ================================================= */

    $('#agreeTerms').on('change', function () {


        if ($(this).is(':checked')) {


            $('#confirmMessage')
                .stop(true, true)
                .slideDown(180)
                .css('display', 'flex');


        } else {


            $('#confirmMessage')
                .stop(true, true)
                .slideUp(150);


        }


    });


});

</script>


</body>

</html>