<style>

.result-section {
    padding: 30px 0 50px;
    font-family: 'Noto Sans Bengali', sans-serif;
    background-color: #f9fbfb;
}

.info-box {
    background: #fffdf6;
    border: 1px solid #f1dfb2;
    border-left: 5px solid var(--secondary);
    border-radius: 10px;
    padding: 14px 18px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.info-box > i {
    color: var(--secondary);
    font-size: 18px;
    margin-top: 3px;
}

.info-box strong {
    display: block;
    color: var(--primary);
    font-size: 13px;
}

.info-box p {
    margin: 2px 0 0;
    color: #6c7570;
    font-size: 11px;
}

/* RESULT CARD */
.result-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    box-shadow: var(--shadow);
    overflow: hidden;
}

.result-card-header {
    background: var(--primary);
    color: var(--white);
    padding: 18px 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    flex-wrap: wrap;
}

.result-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

.result-icon {
    width: 42px;
    height: 42px;
    border-radius: 9px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 17px;
}

.result-title h3 {
    margin: 0;
    font-size: 17px;
    font-weight: 800;
}

.result-title small {
    color: rgba(255, 255, 255, 0.75);
    font-size: 10px;
}

.header-btn {
    border: 1px solid rgba(255, 255, 255, 0.25);
    background: rgba(255, 255, 255, 0.08);
    color: var(--white);
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.header-btn:hover {
    background: var(--secondary);
    color: var(--primary-dark);
}

/* FILTER AREA */
.filter-area {
    padding: 18px 22px;
    background: #f4f8f7;
    border-bottom: 1px solid var(--border);
}

.filter-label {
    font-size: 11px;
    font-weight: 700;
    color: #5c6b65;
    margin-bottom: 5px;
    display: block;
}

.form-select, .form-control {
    border: 1px solid #d0ded9;
    min-height: 40px;
    font-size: 12px;
    border-radius: 6px;
    width: 100%;
}

.form-select:focus, .form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(11, 93, 75, 0.08);
}

.search-btn {
    background: var(--primary);
    color: var(--white);
    border: none;
    min-height: 40px;
    font-size: 12px;
    font-weight: 700;
    border-radius: 6px;
    transition: 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.search-btn:hover {
    background: var(--primary-dark);
}

/* SCHOOL HEADING & STUDENT INFO */
.result-content {
    padding: 22px;
}

.school-heading {
    text-align: center;
    margin-bottom: 22px;
    padding-bottom: 12px;
    border-bottom: 2px dashed #e2ece8;
}

.school-heading h2 {
    color: var(--primary);
    font-size: 21px;
    font-weight: 800;
    margin-bottom: 3px;
}

.school-heading .exam-name {
    font-size: 14px;
    color: #4a5a54;
    font-weight: 700;
    margin-bottom: 8px;
}

.student-info-box {
    background: #f0f7f4;
    border: 1px solid #cfe4dc;
    border-radius: 8px;
    padding: 12px 18px;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}

.student-info-item {
    font-size: 11px;
    color: #2b3834;
    font-weight: 600;
}

.student-info-item span {
    color: var(--primary);
    font-weight: 800;
}

/* TABLE STYLING */
.table-wrap {
    border: 1px solid var(--border);
    border-radius: 8px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    background: #fff;
}

.result-table {
    margin: 0;
    width: 100%;
    min-width: 600px;
    border-collapse: collapse;
}

.result-table thead th {
    background: var(--primary);
    color: var(--white);
    font-size: 11px;
    font-weight: 700;
    padding: 10px 8px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.result-table tbody td {
    font-size: 11px;
    color: #43514c;
    padding: 10px 8px;
    border-bottom: 1px solid #e5ece9;
    border-right: 1px solid #e5ece9;
    vertical-align: middle;
    text-align: center;
    font-weight: 600;
}

.result-table tbody td:last-child {
    border-right: none;
}

.result-table tbody tr:nth-child(even) {
    background: #f8fbfa;
}

.result-table tbody tr:hover {
    background: #edf6f2;
}

.grade-badge {
    display: inline-block;
    padding: 2px 8px;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 700;
    background: #e8f3ef;
    color: var(--primary);
}

/* SUMMARY BOX */
.result-summary {
    margin-top: 15px;
    background: #f7faf9;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 14px 18px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.summary-item {
    text-align: center;
}

.summary-item small {
    display: block;
    font-size: 10px;
    color: #727f7a;
}

.summary-item h5 {
    margin: 2px 0 0;
    font-size: 15px;
    font-weight: 800;
    color: var(--primary);
}

/* NOTE */
.result-note {
    margin-top: 16px;
    background: #f7faf9;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 12px 14px;
}

.result-note h6 {
    color: var(--primary);
    font-size: 11px;
    font-weight: 800;
    margin-bottom: 4px;
}

.result-note ul {
    padding-left: 16px;
    margin: 0;
}

.result-note li {
    font-size: 10px;
    color: #6b7873;
    margin-bottom: 2px;
}

/* MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .result-section { padding: 15px 0; }
    .result-card-header { padding: 14px 16px; }
    .result-content { padding: 15px; }
    .school-heading h2 { font-size: 18px; }
    .filter-area { padding: 15px; }
}

/* PRINT MEDIA QUERY */
@media print {
    @page {
        size: A4 portrait;
        margin: 10mm;
    }

    body {
        background: #ffffff !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
        font-size: 11px !important;
    }

    body * {
        visibility: hidden;
    }
    
    #printResultArea, #printResultArea * {
        visibility: visible;
    }

    #printResultArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 100% !important;
        box-shadow: none !important;
        border: none !important;
        background: #ffffff !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .header-actions, 
    .filter-area, 
    .info-box, 
    button {
        display: none !important;
    }

    .result-card {
        border: none !important;
        box-shadow: none !important;
    }

    .result-content {
        padding: 5px !important;
    }

    .school-heading {
        margin-bottom: 12px !important;
        padding-bottom: 8px !important;
        border-bottom: 1.5px solid #0b5d4b !important;
    }

    .student-info-box {
        background: #f0f7f4 !important;
        border: 1px solid #0b5d4b !important;
    }

    .result-table thead th {
        background: #0b5d4b !important;
        color: #ffffff !important;
        border: 1px solid #0b5d4b !important;
    }

    .result-table tbody td {
        border: 1px solid #cbdcd5 !important;
        color: #182a26 !important;
    }
}
</style>
   <section class="page-banner">
        <div class="banner-content">
             
            <h1> <i class="fa-solid fa-calendar-days me-2"></i> পরীক্ষার ফলাফল</h1>

            <p>শিক্ষার্থীদের পরীক্ষার ফলাফল দেখুন</p>
        </div>
    </section>
 <div class="breadcrumb-area">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa-solid fa-house"></i> হোম / একাডেমিক 
                        </a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                      ফলাফল
                    </li>
                </ol>
            </nav>
        </div>
    </div>
<section class="result-section">
  <div class="container">
    <!-- INFO -->
    <div class="info-box">
      <i class="fa-solid fa-circle-info"></i>
      <div>
        <strong>পরীক্ষার ফলাফল সংক্রান্ত নির্দেশনা</strong>
        <p>শিক্ষাবর্ষ, শ্রেণি, শাখা এবং রোল নম্বর দিয়ে আপনার কাঙ্ক্ষিত পরীক্ষার ফলাফল দেখতে এবং প্রিন্ট করতে পারবেন।</p>
      </div>
    </div>

    <!-- RESULT CARD -->
    <div class="result-card" id="printResultArea">
      <!-- CARD HEADER -->
      <div class="result-card-header">
        <div class="result-title">
          <div class="result-icon">
            <i class="fa-solid fa-square-poll-vertical"></i>
          </div>
          <div>
            <h3>একাডেমিক পরীক্ষার ফলাফল</h3>
            <small>Student Academic Result — Academic Session</small>
          </div>
        </div>

        <div class="header-actions">
          <button type="button" class="header-btn" onclick="printResult()">
            <i class="fa-solid fa-print"></i> <span>প্রিন্ট</span>
          </button>
        </div>
      </div>

      <!-- FILTER AREA (শিক্ষাবর্ষ, শ্রেণি, শাখা ও রোল সহ) -->
      <div class="filter-area">
        <div class="row g-3 align-items-end">
          <div class="col-lg-3 col-md-3 col-12">
            <label class="filter-label">শিক্ষাবর্ষ নির্বাচন</label>
            <select class="form-select" id="yearFilter">
              <option value="2026">২০২৬</option>
              <option value="2025">২০২৫</option>
              <option value="2024">২০২৪</option>
            </select>
          </div>

          <div class="col-lg-3 col-md-3 col-12">
            <label class="filter-label">পরীক্ষা নির্বাচন করুন</label>
            <select class="form-select" id="examFilter">
              <option value="half-yearly">অর্ধবার্ষিক পরীক্ষা</option>
              <option value="annual">বার্ষিক পরীক্ষা</option>
            </select>
          </div>

          <div class="col-lg-2 col-md-2 col-12">
            <label class="filter-label">শ্রেণি নির্বাচন</label>
            <select class="form-select" id="classFilter">
              <option value="6">৬ষ্ঠ শ্রেণি</option>
              <option value="7">৭ম শ্রেণি</option>
              <option value="8">৮ম শ্রেণি</option>
              <option value="9">৯ম শ্রেণি</option>
              <option value="10">১০ম শ্রেণি</option>
            </select>
          </div>

          <div class="col-lg-2 col-md-2 col-12">
            <label class="filter-label">শাখা নির্বাচন</label>
            <select class="form-select" id="sectionFilter">
              <option value="A">শাখা A</option>
              <option value="B">শাখা B</option>
            </select>
          </div>

          <div class="col-lg-2 col-md-2 col-12">
            <label class="filter-label">রোল নম্বর</label>
            <input type="text" class="form-control" placeholder="যেমন: ১০২" id="rollInput">
          </div>

          <div class="col-12 text-end mt-2">
            <button type="button" class="btn search-btn px-4 ms-auto">
              <i class="fa-solid fa-magnifying-glass me-1"></i> খোঁজ করুন
            </button>
          </div>
        </div>
      </div>

      <!-- RESULT CONTENT -->
      <div class="result-content">
        <div class="school-heading">
          <h2>আমাদের উচ্চ বিদ্যালয়</h2>
          <h5 class="exam-name">অর্ধবার্ষিক পরীক্ষা — ২০২৬</h5>
          <p><i class="fa-regular fa-calendar-days me-1"></i> প্রকাশের তারিখ: ১৫ আগস্ট, ২০২৬</p>
        </div>

        <!-- STUDENT DETAILS -->
        <div class="student-info-box">
          <div class="student-info-item">শিক্ষার্থীর নাম: <span>মো: রাফি ইসলাম</span></div>
          <div class="student-info-item">শিক্ষাবর্ষ: <span>২০২৬</span></div>
          <div class="student-info-item">শ্রেণি: <span>৬ষ্ঠ</span></div>
          <div class="student-info-item">শাখা: <span>A</span></div>
          <div class="student-info-item">রোল: <span>১০২</span></div>
        </div>

        <!-- TABLE -->
        <div class="table-wrap">
          <table class="table result-table align-middle">
            <thead>
              <tr>
                <th>ক্র.নং</th>
                <th>বিষয়ের নাম</th>
                <th>পূর্ণমান</th>
                <th>প্রাপ্ত নম্বর</th>
                <th>গ্রেড</th>
                <th>বিন্দু (GPA)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>১</td>
                <td class="text-start ps-3">বাংলা</td>
                <td>১০০</td>
                <td>৮২</td>
                <td><span class="grade-badge">A+</span></td>
                <td>৫.০০</td>
              </tr>
              <tr>
                <td>২</td>
                <td class="text-start ps-3">ইংরেজি</td>
                <td>১০০</td>
                <td>৭৮</td>
                <td><span class="grade-badge">A</span></td>
                <td>৪.০০</td>
              </tr>
              <tr>
                <td>৩</td>
                <td class="text-start ps-3">গণিত</td>
                <td>১০০</td>
                <td>৮৫</td>
                <td><span class="grade-badge">A+</span></td>
                <td>৫.০০</td>
              </tr>
              <tr>
                <td>৪</td>
                <td class="text-start ps-3">বিজ্ঞান</td>
                <td>১০০</td>
                <td>৭৪</td>
                <td><span class="grade-badge">A</span></td>
                <td>৪.০০</td>
              </tr>
              <tr>
                <td>৫</td>
                <td class="text-start ps-3">বাংলাদেশ ও বিশ্বপরিচয়</td>
                <td>১০০</td>
                <td>৮০</td>
                <td><span class="grade-badge">A+</span></td>
                <td>৫.০০</td>
              </tr>
              <tr>
                <td>৬</td>
                <td class="text-start ps-3">আইসিটি</td>
                <td>৫০</td>
                <td>৪৫</td>
                <td><span class="grade-badge">A+</span></td>
                <td>৫.০০</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- SUMMARY -->
        <div class="result-summary">
          <div class="summary-item">
            <small>মোট প্রাপ্ত নম্বর</small>
            <h5>৩৬৪ / ৪৫০</h5>
          </div>
          <div class="summary-item">
            <small>ফলাফল (GPA)</small>
            <h5>৪.৬৭</h5>
          </div>
          <div class="summary-item">
            <small>চূড়ান্ত গ্রেড</small>
            <h5><span class="grade-badge" style="font-size: 13px; padding: 4px 10px;">A+</span></h5>
          </div>
          <div class="summary-item">
            <small>মেধা অবস্থান</small>
            <h5>৫ম</h5>
          </div>
        </div>

        <!-- NOTE -->
        <div class="result-note">
          <h6><i class="fa-solid fa-circle-exclamation me-1"></i> বিশেষ নির্দেশনা</h6>
          <ul>
            <li>ফলাফল সংক্রান্ত কোনো ভুলত্রুটি পরিলক্ষিত হলে ৭ দিনের মধ্যে স্কুল অফিসে যোগাযোগ করার জন্য অনুরোধ করা হলো।</li>
            <li>নম্বরপত্র প্রিন্ট কপি সংরক্ষণ করুন।</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function printResult() {
  window.print();
}
</script>