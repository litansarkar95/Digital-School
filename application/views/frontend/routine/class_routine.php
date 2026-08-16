
<style>
:root {
    --primary: #0b5d4b;
    --primary-dark: #073e33;
    --secondary: #f2a900;
    --cream: #fbf7f0;
    --light: #f5f8f7;
    --dark: #182a26;
    --border: #dfe8e5;
    --white: #ffffff;
    --text: #52635f;
    --danger: #b23a48;
    --gold: #f5a623;
    --gold-light: #ffc65c;
    --shadow: 0 12px 35px rgba(0, 0, 0, 0.09);
}
.routine-section {
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

/* ROUTINE CARD */
.routine-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    box-shadow: var(--shadow);
    overflow: hidden;
}

.routine-card-header {
    background: var(--primary);
    color: var(--white);
    padding: 18px 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    flex-wrap: wrap;
}

.routine-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

.routine-icon {
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

.routine-title h3 {
    margin: 0;
    font-size: 17px;
    font-weight: 800;
}

.routine-title small {
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

.form-select {
    border: 1px solid #d0ded9;
    min-height: 40px;
    font-size: 12px;
    border-radius: 6px;
    width: 100%;
}

.form-select:focus {
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

/* SCHOOL HEADING */
.routine-content {
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

.class-section-badge {
    display: inline-flex;
    align-items: center;
    background: #e8f3ef;
    color: var(--primary);
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    margin-bottom: 6px;
    border: 1px solid #cfe4dc;
}

.class-section-badge .divider {
    margin: 0 8px;
    color: #9abfb1;
}

.school-heading p {
    color: #727f7a;
    font-size: 11px;
    font-weight: 500;
    margin: 0;
}

/* TABLE STYLING */
.table-wrap {
    border: 1px solid var(--border);
    border-radius: 8px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    background: #fff;
}

.routine-table {
    margin: 0;
    width: 100%;
    min-width: 720px;
    border-collapse: collapse;
}

.routine-table thead th {
    background: var(--primary);
    color: var(--white);
    font-size: 11px;
    font-weight: 700;
    padding: 10px 8px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.routine-table thead th small {
    font-weight: 400;
    font-size: 9px;
    opacity: 0.85;
    display: block;
    margin-top: 1px;
}

.routine-table tbody td {
    font-size: 11px;
    color: #43514c;
    padding: 10px 8px;
    border-bottom: 1px solid #e5ece9;
    border-right: 1px solid #e5ece9;
    vertical-align: middle;
    text-align: center;
    font-weight: 600;
}

.routine-table tbody td:last-child {
    border-right: none;
}

.routine-table tbody tr:nth-child(even) {
    background: #f8fbfa;
}

.routine-table tbody tr:hover {
    background: #edf6f2;
}

.day-cell {
    color: var(--primary) !important;
    font-weight: 800 !important;
    background: #f0f7f4 !important;
}

.sub-name {
    display: block;
    font-weight: 700;
    color: #2b3834;
    font-size: 11px;
}

.teacher-name {
    display: block;
    font-size: 9px;
    color: #788580;
    font-weight: 400;
    margin-top: 1px;
}

td.break-row {
    background: #fff8e8 !important;
    color: #9b742a !important;
    font-weight: 800 !important;
    font-size: 11px !important;
    letter-spacing: 0.5px;
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    padding: 10px 4px !important;
}

.table-scroll-hint {
    text-align: center;
    font-size: 10px;
    color: #7b8a85;
    margin-top: 6px;
    font-style: italic;
}

/* NOTE */
.routine-note {
    margin-top: 16px;
    background: #f7faf9;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 12px 14px;
}

.routine-note h6 {
    color: var(--primary);
    font-size: 11px;
    font-weight: 800;
    margin-bottom: 4px;
}

.routine-note ul {
    padding-left: 16px;
    margin: 0;
}

.routine-note li {
    font-size: 10px;
    color: #6b7873;
    margin-bottom: 2px;
}

/* =====================================================
   MOBILE RESPONSIVE TWEAKS (মোবাইল ফ্রেন্ডলি অপ্টিমাইজেশন)
===================================================== */
@media (max-width: 768px) {
    .routine-section {
        padding: 15px 0;
    }
    .routine-card-header {
        padding: 14px 16px;
    }
    .routine-title h3 {
        font-size: 15px;
    }
    .routine-content {
        padding: 15px;
    }
    .school-heading h2 {
        font-size: 18px;
    }
    .filter-area {
        padding: 15px;
    }
}

/* =====================================================
   PRINT MEDIA QUERY
===================================================== */
/* =====================================================
   A4 SINGLE PAGE PROFESSIONAL PRINT MEDIA QUERY
===================================================== */
@media print {
    /* পেজ সাইজ এবং মার্জিন সেটআপ (কমপ্যাক্ট মার্জিন যাতে এক পেজে থাকে) */
    @page {
        size: A4 landscape; /* ল্যান্ডস্কেপ মোড টেবিলের জন্য সবচেয়ে সেরা */
        margin: 6mm;
    }

    body {
        background: #ffffff !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
        font-size: 10px !important;
    }

    /* শুধু প্রিন্ট এরিয়া দৃশ্যমান রাখা */
    body * {
        visibility: hidden;
    }
    
    #printWeeklyArea, #printWeeklyArea * {
        visibility: visible;
    }

    #printWeeklyArea {
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

    /* অপ্রয়োজনীয় অংশগুলো সম্পূর্ণ বাদ দেওয়া */
    .header-actions, 
    .filter-area, 
    .info-box, 
    .table-scroll-hint,
    button {
        display: none !important;
    }

    /* কার্ড ও কন্টেন্ট কম্প্যাক্ট করা যেন ২য় পেজে না যায় */
    .routine-card {
        border: none !important;
        box-shadow: none !important;
    }

    .routine-content {
        padding: 5px !important;
    }

    .school-heading {
        margin-bottom: 12px !important;
        padding-bottom: 8px !important;
        border-bottom: 1.5px solid #0b5d4b !important;
    }

    .school-heading h2 {
        font-size: 18px !important;
        color: #0b5d4b !important;
        margin-bottom: 2px !important;
    }

    .school-heading .exam-name {
        font-size: 12px !important;
        margin-bottom: 5px !important;
    }

    .class-section-badge {
        padding: 2px 10px !important;
        font-size: 10px !important;
        background: #e8f3ef !important;
        border: 1px solid #0b5d4b !important;
        color: #0b5d4b !important;
        margin-bottom: 4px !important;
    }

    .school-heading p {
        font-size: 10px !important;
    }

    /* টেবিলকে ১ পেইজে ফিট করার জন্য প্যাডিং ও ফন্ট ছোট করা */
    .table-wrap {
        border: 1px solid #0b5d4b !important;
        box-shadow: none !important;
        overflow: visible !important;
        border-radius: 4px !important;
    }

    .routine-table {
        width: 100% !important;
        min-width: 100% !important;
        border-collapse: collapse !important;
    }

    .routine-table thead th {
        background: #0b5d4b !important;
        color: #ffffff !important;
        border: 1px solid #0b5d4b !important;
        font-size: 10px !important;
        padding: 6px 4px !important;
        text-align: center !important;
    }

    .routine-table thead th small {
        font-size: 8px !important;
        opacity: 0.9 !important;
    }

    .routine-table tbody td {
        border: 1px solid #cbdcd5 !important;
        color: #182a26 !important;
        padding: 6px 4px !important;
        font-size: 10px !important;
        text-align: center !important;
    }

    .day-cell {
        background: #f0f7f4 !important;
        font-weight: bold !important;
    }

    .sub-name {
        font-size: 10px !important;
        font-weight: bold !important;
    }

    .teacher-name {
        font-size: 8px !important;
        color: #555 !important;
    }

    td.break-row {
        background: #fff8e8 !important;
        color: #9b742a !important;
        writing-mode: horizontal-tb !important; 
        transform: none !important;
        font-size: 10px !important;
        font-weight: bold !important;
    }

    .routine-note {
        margin-top: 10px !important;
        padding: 8px 10px !important;
        background: #f8fbfa !important;
        border: 1px solid #d0ded9 !important;
        border-radius: 4px !important;
    }

    .routine-note h6 {
        font-size: 10px !important;
        margin-bottom: 2px !important;
        color: #0b5d4b !important;
    }

    .routine-note ul {
        padding-left: 14px !important;
        margin: 0 !important;
    }

    .routine-note li {
        font-size: 9px !important;
        color: #444 !important;
        margin-bottom: 1px !important;
    }
}
    </style><section class="routine-section">
  <div class="container">
    <!-- INFO -->
    <div class="info-box">
      <i class="fa-solid fa-circle-info"></i>
      <div>
        <strong>সাপ্তাহিক ক্লাস রুটিন সংক্রান্ত নির্দেশনা</strong>
        <p>সঠিক সময়ে নিজ নিজ ক্লাসে উপস্থিত থাকতে হবে। প্রয়োজনে প্রিন্ট বাটন ব্যবহার করে রুটিনটি প্রিন্ট করে নিতে পারেন।</p>
      </div>
    </div>

    <!-- ROUTINE CARD -->
    <div class="routine-card" id="printWeeklyArea">
      <!-- CARD HEADER -->
      <div class="routine-card-header">
        <div class="routine-title">
          <div class="routine-icon">
            <i class="fa-solid fa-calendar-week"></i>
          </div>
          <div>
            <h3>সাপ্তাহিক ক্লাস রুটিন</h3>
            <small>Weekly Class Routine — Academic Session</small>
          </div>
        </div>

        <div class="header-actions">
          <button type="button" class="header-btn" onclick="printWeeklyRoutine()">
            <i class="fa-solid fa-print"></i> <span>প্রিন্ট</span>
          </button>
        </div>
      </div>

      <!-- FILTER -->
      <div class="filter-area">
        <div class="row g-3 align-items-end">
          <div class="col-lg-5 col-md-5 col-12">
            <label class="filter-label">শ্রেণি নির্বাচন করুন</label>
            <select class="form-select" id="weeklyClassFilter">
              <option value="6">৬ষ্ঠ শ্রেণি</option>
              <option value="7">৭ম শ্রেণি</option>
              <option value="8">৮ম শ্রেণি</option>
              <option value="9">৯ম শ্রেণি</option>
              <option value="10">১০ম শ্রেণি</option>
            </select>
          </div>

          <div class="col-lg-5 col-md-5 col-12">
            <label class="filter-label">শাখা নির্বাচন করুন</label>
            <select class="form-select" id="weeklySectionFilter">
              <option value="A">শাখা A</option>
              <option value="B">শাখা B</option>
            </select>
          </div>

          <div class="col-lg-2 col-md-2 col-12">
            <button type="button" class="btn search-btn w-100">
              <i class="fa-solid fa-magnifying-glass me-1"></i> খোঁজ করুন
            </button>
          </div>
        </div>
      </div>

      <!-- ROUTINE CONTENT -->
      <div class="routine-content">
        <div class="school-heading">
          <h2>আমাদের উচ্চ বিদ্যালয়</h2>
          <h5 class="exam-name">শিক্ষাবর্ষ — ২০২৬</h5>
          <div class="class-section-badge">
            <span><i class="fa-solid fa-graduation-cap me-1"></i> শ্রেণি : ৬ষ্ঠ</span>
            <span class="divider">|</span>
            <span><i class="fa-solid fa-code-branch me-1"></i> শাখা : A</span>
          </div>
          <p><i class="fa-regular fa-clock me-1"></i> ক্লাস শুরুর সময়: সকাল ১০:০০ টা</p>
        </div>

        <!-- TABLE WITH MOBILE SCROLL ENHANCEMENT -->
        <div class="table-responsive table-wrap">
          <table class="table routine-table align-middle">
            <thead>
              <tr>
                <th class="sticky-col">বার / সময়</th>
                <th>১ম পিরিয়ড<br><small>১০:০০ - ১০:৪৫</small></th>
                <th>২য় পিরিয়ড<br><small>১০:৪৫ - ১১:৩০</small></th>
                <th class="break-th">টিফিন<br><small>১১:৩০ - ১২:০০</small></th>
                <th>৩য় পিরিয়ড<br><small>১২:০০ - ১২:৪৫</small></th>
                <th>৪র্থ পিরিয়ড<br><small>১২:৪৫ - ১:৩০</small></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="day-cell sticky-col">রবিবার</td>
                <td><span class="sub-name">বাংলা</span><small class="teacher-name">শিক্ষক: ক</small></td>
                <td><span class="sub-name">ইংরেজি</span><small class="teacher-name">শিক্ষক: খ</small></td>
                <td rowspan="5" class="break-row">বিরতি (Tiffin Break)</td>
                <td><span class="sub-name">গণিত</span><small class="teacher-name">শিক্ষক: গ</small></td>
                <td><span class="sub-name">বিজ্ঞান</span><small class="teacher-name">শিক্ষক: ঘ</small></td>
              </tr>
              <tr>
                <td class="day-cell sticky-col">সোমবার</td>
                <td><span class="sub-name">ইংরেজি</span><small class="teacher-name">শিক্ষক: খ</small></td>
                <td><span class="sub-name">গণিত</span><small class="teacher-name">শিক্ষক: গ</small></td>
                <td><span class="sub-name">বাংলাদেশ ও বিশ্বপরিচয়</span><small class="teacher-name">শিক্ষক: ঙ</small></td>
                <td><span class="sub-name">আইসিটি</span><small class="teacher-name">শিক্ষক: চ</small></td>
              </tr>
              <tr>
                <td class="day-cell sticky-col">মঙ্গলবার</td>
                <td><span class="sub-name">গণিত</span><small class="teacher-name">শিক্ষক: গ</small></td>
                <td><span class="sub-name">বিজ্ঞান</span><small class="teacher-name">শিক্ষক: ঘ</small></td>
                <td><span class="sub-name">বাংলা</span><small class="teacher-name">শিক্ষক: ক</small></td>
                <td><span class="sub-name">ধর্ম ও নৈতিক শিক্ষা</span><small class="teacher-name">শিক্ষক: ছ</small></td>
              </tr>
              <tr>
                <td class="day-cell sticky-col">বুধবার</td>
                <td><span class="sub-name">বিজ্ঞান</span><small class="teacher-name">শিক্ষক: ঘ</small></td>
                <td><span class="sub-name">বাংলা</span><small class="teacher-name">শিক্ষক: ক</small></td>
                <td><span class="sub-name">ইংরেজি</span><small class="teacher-name">শিক্ষক: খ</small></td>
                <td><span class="sub-name">শারীরিক শিক্ষা</span><small class="teacher-name">শিক্ষক: জ</small></td>
              </tr>
              <tr>
                <td class="day-cell sticky-col">বৃহস্পতিবার</td>
                <td><span class="sub-name">আইসিটি</span><small class="teacher-name">শিক্ষক: চ</small></td>
                <td><span class="sub-name">ধর্ম</span><small class="teacher-name">শিক্ষক: ছ</small></td>
                <td><span class="sub-name">গণিত</span><small class="teacher-name">শিক্ষক: গ</small></td>
                <td><span class="sub-name">চারু ও কারুকলা</span><small class="teacher-name">শিক্ষক: ঝ</small></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="table-scroll-hint d-md-none">
          <i class="fa-solid fa-arrows-left-right"></i> রুটিনটি দেখতে ডানে-বামে স্ক্রোল করুন
        </div>

        <!-- NOTE -->
        <div class="routine-note">
          <h6><i class="fa-solid fa-circle-exclamation me-1"></i> জরুরি নির্দেশনা</h6>
          <ul>
            <li>প্রতিটি ক্লাস শুরুর ৫ মিনিট পূর্বে শিক্ষার্থীদের ক্লাসে নিজ আসনে উপস্থিত থাকতে হবে।</li>
            <li>শিক্ষকদের নির্দেশ অনুযায়ী রুটিন অনুযায়ী প্রয়োজনীয় বই ও খাতা সাথে আনতে হবে।</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function printWeeklyRoutine() {
  window.print();
}
    </script>