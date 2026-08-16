<style>

      </style>
       <section class="page-banner">
        <div class="banner-content">
             
            <h1> <i class="fa-solid fa-calendar-days me-2"></i> পরীক্ষার রুটিন</h1>

            <p>পরীক্ষার তারিখ, সময় ও বিষয়সমূহের বিস্তারিত সময়সূচি</p>
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
                       পরীক্ষার রুটিন
                    </li>
                </ol>
            </nav>
        </div>
    </div>

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
    padding: 45px 0 60px;
}

.info-box {
    background: #fffdf6;
    border: 1px solid #f1dfb2;
    border-left: 5px solid var(--secondary);
    border-radius: 10px;
    padding: 15px 18px;
    margin-bottom: 22px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.info-box > i {
    color: var(--secondary);
    font-size: 21px;
    margin-top: 3px;
}

.info-box strong {
    display: block;
    color: var(--primary);
    font-size: 14px;
}

.info-box p {
    margin: 2px 0 0;
    color: #707a75;
    font-size: 12px;
}

.routine-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 15px;
    box-shadow: 0 8px 35px rgba(15, 92, 76, 0.07);
    overflow: hidden;
}

.routine-card-header {
    background: var(--primary);
    color: #fff;
    padding: 20px 25px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
}

.routine-title {
    display: flex;
    align-items: center;
    gap: 13px;
}

.routine-icon {
    width: 47px;
    height: 47px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
}

.routine-title h3 {
    margin: 0;
    font-size: 19px;
    font-weight: 800;
}

.routine-title small {
    color: rgba(255, 255, 255, 0.72);
    font-size: 11px;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 7px;
}

.header-btn {
    border: 1px solid rgba(255, 255, 255, 0.25);
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    padding: 7px 12px;
    border-radius: 6px;
    font-family: "Noto Sans Bengali", sans-serif;
    font-size: 11px;
    cursor: pointer;
    transition: 0.3s;
}

.header-btn:hover {
    background: var(--secondary);
    color: var(--primary-dark);
}

.filter-area {
    padding: 20px 25px;
    background: #f8fbfa;
    border-bottom: 1px solid var(--border);
}

.filter-label {
    font-size: 11px;
    font-weight: 700;
    color: #68756f;
    margin-bottom: 5px;
    display: block;
}

.form-select {
    border: 1px solid #d7e3de;
    min-height: 42px;
    font-size: 12px;
    border-radius: 7px;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
}

.form-select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(15, 92, 76, 0.08);
}

.routine-content {
    padding: 25px;
}

.school-heading {
    text-align: center;
    margin-bottom: 23px;
}

.school-heading h2 {
    color: var(--primary);
    font-size: 23px;
    font-weight: 800;
    margin-bottom: 2px;
}

.school-heading h5 {
    font-size: 15px;
    color: #53635d;
    margin-bottom: 3px;
}

.school-heading p {
    color: #89948f;
    font-size: 11px;
    margin: 0;
}

.table-wrap {
    border: 1px solid var(--border);
    border-radius: 10px;
    overflow: hidden;
}

.routine-table {
    margin: 0;
    width: 100%;
    min-width: 780px;
    border-collapse: collapse;
}

.routine-table thead th {
    background: var(--primary);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    padding: 13px 10px;
    border-color: rgba(255, 255, 255, 0.15);
    white-space: nowrap;
    text-align: center;
}

.routine-table tbody td {
    font-size: 11px;
    color: #4e5c57;
    padding: 12px 9px;
    border-bottom: 1px solid #e5ece9;
    vertical-align: middle;
    text-align: center;
}

.routine-table tbody tr:nth-child(even) {
    background: #f8fbfa;
}

.routine-table tbody tr:hover {
    background: #edf6f2;
}

.date-cell {
    color: var(--primary) !important;
    font-weight: 800;
}

.day-cell {
    font-weight: 700;
    color: #5d6c66 !important;
}

.subject-cell {
    color: var(--primary) !important;
    font-weight: 700;
}

.time-badge {
    display: inline-block;
    background: #e8f3ef;
    color: var(--primary);
    padding: 4px 9px;
    border-radius: 5px;
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
}

.break-row td {
    background: #fff8e8 !important;
    color: #9b742a !important;
    font-weight: 700;
}

.empty-routine {
    text-align: center;
    padding: 55px 20px;
    display: none;
}

.empty-routine i {
    font-size: 42px;
    color: #b8c8c2;
    margin-bottom: 12px;
}

.empty-routine h5 {
    color: var(--primary);
    font-size: 15px;
}

.empty-routine p {
    font-size: 11px;
    color: #89948f;
}

.routine-note {
    margin-top: 20px;
    background: #f7faf9;
    border: 1px solid var(--border);
    border-radius: 9px;
    padding: 14px 16px;
}

.routine-note h6 {
    color: var(--primary);
    font-size: 12px;
    font-weight: 800;
    margin-bottom: 6px;
}

.routine-note ul {
    padding-left: 18px;
    margin: 0;
}

.routine-note li {
    font-size: 10px;
    color: #707c77;
    margin-bottom: 3px;
}

/* =====================================================
   PRINT MEDIA QUERY (প্রিন্ট করলে ডিজাইন ঠিক রাখার জন্য)
===================================================== */
@media print {
    body * {
        visibility: hidden;
    }
    #printArea, #printArea * {
        visibility: visible;
    }
    #printArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        box-shadow: none;
        border: none;
    }
    .header-actions, .filter-area {
        display: none !important;
    }
}
.search-btn {
    background: var(--primary);
    color: #fff;
    border: none;
    min-height: 42px;
    font-size: 12px;
    font-weight: 700;
    border-radius: 7px;
    transition: 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.search-btn:hover {
    background: var(--primary-dark);
    color: #fff;
}
.school-heading {
    text-align: center;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px dashed #e0ece7;
}

.school-heading h2 {
    color: var(--primary);
    font-size: 24px;
    font-weight: 800;
    margin-bottom: 5px;
    letter-spacing: 0.5px;
}

.school-heading .exam-name {
    font-size: 16px;
    color: #41524b;
    font-weight: 700;
    margin-bottom: 10px;
}

/* শ্রেণি ও শাখার জন্য সুন্দর ব্যাজ ডিজাইন */
.class-section-badge {
    display: inline-flex;
    align-items: center;
    background: #e8f3ef;
    color: var(--primary);
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 10px;
    border: 1px solid #d0e4dc;
}

.class-section-badge .divider {
    margin: 0 10px;
    color: #a2c2b5;
    font-weight: 400;
}

.school-heading p {
    color: #707c77;
    font-size: 12px;
    font-weight: 500;
    margin: 0;
}
</style>
<section class="routine-section">
  <div class="container">
    <!-- INFO -->
    <div class="info-box">
      <i class="fa-solid fa-circle-info"></i>
      <div>
        <strong> পরীক্ষার রুটিন সংক্রান্ত নির্দেশনা </strong>
        <p>
          পরীক্ষার নির্ধারিত সময়ের কমপক্ষে ৩০ মিনিট আগে পরীক্ষাকেন্দ্রে উপস্থিত হতে হবে। প্রয়োজন হলে নিচের Print বাটন ব্যবহার করে রুটিনটি প্রিন্ট করে রাখতে পারেন।
        </p>
      </div>
    </div>

    <!-- ROUTINE CARD -->
    <div class="routine-card" id="printArea">
      <!-- CARD HEADER -->
      <div class="routine-card-header">
        <div class="routine-title">
          <div class="routine-icon">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div>
            <h3>পরীক্ষার সময়সূচি</h3>
            <small> Examination Routine </small>
          </div>
        </div>

        <div class="header-actions">
          <button type="button" class="header-btn" onclick="printRoutine()">
            <i class="fa-solid fa-print"></i> প্রিন্ট
          </button>
          <button type="button" class="header-btn" onclick="downloadRoutine()">
            <i class="fa-solid fa-file-pdf"></i> PDF
          </button>
        </div>
      </div>

<!-- FILTER -->
<div class="filter-area">
  <div class="row g-3 align-items-end">
    <!-- পরীক্ষার ধরন -->
    <div class="col-md-3">
      <label class="filter-label"> পরীক্ষার ধরন </label>
      <select class="form-select" id="examType">
        <option>অর্ধ-বার্ষিক পরীক্ষা</option>
        <option>বার্ষিক পরীক্ষা</option>
        <option>প্রাক-নির্বাচনী পরীক্ষা</option>
        <option>নির্বাচনী পরীক্ষা</option>
      </select>
    </div>

    <!-- শিক্ষাবর্ষ -->
    <div class="col-md-2">
      <label class="filter-label"> শিক্ষাবর্ষ </label>
      <select class="form-select" id="sessionFilter">
        <option selected value="2026">২০২৬</option>
        <option value="2027">২০২৭</option>
      </select>
    </div>

    <!-- শ্রেণি নির্বাচন -->
    <div class="col-md-3">
      <label class="filter-label"> শ্রেণি নির্বাচন করুন </label>
      <select class="form-select" id="classFilter">
        <option value="all">সকল শ্রেণি</option>
        <option value="6">৬ষ্ঠ শ্রেণি</option>
        <option value="7">৭ম শ্রেণি</option>
        <option value="8">৮ম শ্রেণি</option>
        <option value="9">৯ম শ্রেণি</option>
        <option value="10">১০ম শ্রেণি</option>
      </select>
    </div>

    <!-- শাখা (Section) নির্বাচন -->
    <div class="col-md-2">
      <label class="filter-label"> শাখা নির্বাচন করুন </label>
      <select class="form-select" id="sectionFilter">
        <option value="all">সকল শাখা</option>
        <option value="A">শাখা A</option>
        <option value="B">শাখা B</option>
      </select>
    </div>

    <!-- সার্চ বাটন -->
    <div class="col-md-2">
      <button type="button" class="btn search-btn w-100" onclick="filterRoutine()">
        <i class="fa-solid fa-magnifying-glass me-1"></i> সার্চ করুন
      </button>
    </div>
  </div>
</div>

      <!-- ROUTINE CONTENT -->
      <div class="routine-content">
      <div class="school-heading">
  <h2>আমাদের উচ্চ বিদ্যালয়</h2>
  <h5 class="exam-name">অর্ধ-বার্ষিক পরীক্ষা — ২০২৬</h5>
  <div class="class-section-badge">
    <span>শ্রেণি : ৬ষ্ঠ</span>
    <span class="divider">|</span>
    <span>শাখা : A</span>
  </div>
  <p>পরীক্ষার সময়: সকাল ১০:০০টা থেকে দুপুর ১:০০টা</p>
</div>

        <!-- TABLE -->
        <div class="table-responsive table-wrap">
          <table class="table routine-table align-middle" id="routineTable">
            <thead>
              <tr>
                <th>ক্রম</th>
                <th>তারিখ</th>
                <th>বার</th>
                <th>শ্রেণি</th>
                <th>বিষয়</th>
                <th>বিষয় কোড</th>
                <th>সময়</th>
              </tr>
            </thead>
            <tbody>
              <tr data-class="6" data-session="2026">
                <td>০১</td>
                <td class="date-cell">০৫ জুন ২০২৬</td>
                <td class="day-cell">শুক্রবার</td>
                <td>৬ষ্ঠ</td>
                <td class="subject-cell">বাংলা ১ম পত্র</td>
                <td>১০১</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="7" data-session="2026">
                <td>০২</td>
                <td class="date-cell">০৬ জুন ২০২৬</td>
                <td class="day-cell">শনিবার</td>
                <td>৭ম</td>
                <td class="subject-cell">বাংলা ১ম পত্র</td>
                <td>১০১</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="8" data-session="2026">
                <td>০৩</td>
                <td class="date-cell">০৭ জুন ২০২৬</td>
                <td class="day-cell">রবিবার</td>
                <td>৮ম</td>
                <td class="subject-cell">বাংলা ১ম পত্র</td>
                <td>১০১</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="9" data-session="2026">
                <td>০৪</td>
                <td class="date-cell">০৮ জুন ২০২৬</td>
                <td class="day-cell">সোমবার</td>
                <td>৯ম</td>
                <td class="subject-cell">বাংলা ১ম পত্র</td>
                <td>১০১</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="10" data-session="2026">
                <td>০৫</td>
                <td class="date-cell">০৯ জুন ২০২৬</td>
                <td class="day-cell">মঙ্গলবার</td>
                <td>১০ম</td>
                <td class="subject-cell">বাংলা ১ম পত্র</td>
                <td>১০১</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="6" data-session="2026">
                <td>০৬</td>
                <td class="date-cell">১১ জুন ২০২৬</td>
                <td class="day-cell">বৃহস্পতিবার</td>
                <td>৬ষ্ঠ</td>
                <td class="subject-cell">ইংরেজি</td>
                <td>১০৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="7" data-session="2026">
                <td>০৭</td>
                <td class="date-cell">১২ জুন ২০২৬</td>
                <td class="day-cell">শুক্রবার</td>
                <td>৭ম</td>
                <td class="subject-cell">ইংরেজি</td>
                <td>১০৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="8" data-session="2026">
                <td>০৮</td>
                <td class="date-cell">১৩ জুন ২০২৬</td>
                <td class="day-cell">শনিবার</td>
                <td>৮ম</td>
                <td class="subject-cell">ইংরেজি</td>
                <td>১০৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="9" data-session="2026">
                <td>০৯</td>
                <td class="date-cell">১৪ জুন ২০২৬</td>
                <td class="day-cell">রবিবার</td>
                <td>৯ম</td>
                <td class="subject-cell">ইংরেজি</td>
                <td>১০৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="10" data-session="2026">
                <td>১০</td>
                <td class="date-cell">১৫ জুন ২০২৬</td>
                <td class="day-cell">সোমবার</td>
                <td>১০ম</td>
                <td class="subject-cell">ইংরেজি</td>
                <td>১০৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="6" data-session="2026">
                <td>১১</td>
                <td class="date-cell">১৭ জুন ২০২৬</td>
                <td class="day-cell">বুধবার</td>
                <td>৬ষ্ঠ</td>
                <td class="subject-cell">গণিত</td>
                <td>১০৯</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="7" data-session="2026">
                <td>১২</td>
                <td class="date-cell">১৮ জুন ২০২৬</td>
                <td class="day-cell">বৃহস্পতিবার</td>
                <td>৭ম</td>
                <td class="subject-cell">গণিত</td>
                <td>১০৯</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="8" data-session="2026">
                <td>১৩</td>
                <td class="date-cell">১৯ জুন ২০২৬</td>
                <td class="day-cell">শুক্রবার</td>
                <td>৮ম</td>
                <td class="subject-cell">গণিত</td>
                <td>১০৯</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="9" data-session="2026">
                <td>১৪</td>
                <td class="date-cell">২০ জুন ২০২৬</td>
                <td class="day-cell">শনিবার</td>
                <td>৯ম</td>
                <td class="subject-cell">গণিত</td>
                <td>১০৯</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="10" data-session="2026">
                <td>১৫</td>
                <td class="date-cell">২১ জুন ২০২৬</td>
                <td class="day-cell">রবিবার</td>
                <td>১০ম</td>
                <td class="subject-cell">গণিত</td>
                <td>১০৯</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr class="break-row" data-session="2026">
                <td colspan="7">
                  <i class="fa-solid fa-mug-hot me-1"></i> পরীক্ষার বিরতি
                </td>
              </tr>
              <tr data-class="6" data-session="2026">
                <td>১৬</td>
                <td class="date-cell">২৪ জুন ২০২৬</td>
                <td class="day-cell">বুধবার</td>
                <td>৬ষ্ঠ</td>
                <td class="subject-cell">বিজ্ঞান</td>
                <td>১২৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="7" data-session="2026">
                <td>১৭</td>
                <td class="date-cell">২৫ জুন ২০২৬</td>
                <td class="day-cell">বৃহস্পতিবার</td>
                <td>৭ম</td>
                <td class="subject-cell">বিজ্ঞান</td>
                <td>১২৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="8" data-session="2026">
                <td>১৮</td>
                <td class="date-cell">২৬ জুন ২০২৬</td>
                <td class="day-cell">শুক্রবার</td>
                <td>৮ম</td>
                <td class="subject-cell">বিজ্ঞান</td>
                <td>১২৭</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="9" data-session="2026">
                <td>১৯</td>
                <td class="date-cell">২৭ জুন ২০২৬</td>
                <td class="day-cell">শনিবার</td>
                <td>৯ম</td>
                <td class="subject-cell">পদার্থবিজ্ঞান</td>
                <td>১৩৬</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
              <tr data-class="10" data-session="2026">
                <td>২০</td>
                <td class="date-cell">২৮ জুন ২০২৬</td>
                <td class="day-cell">রবিবার</td>
                <td>১০ম</td>
                <td class="subject-cell">পদার্থবিজ্ঞান</td>
                <td>১৩৬</td>
                <td><span class="time-badge"> ১০:০০ – ১:০০ </span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- EMPTY -->
        <div class="empty-routine" id="emptyRoutine">
          <i class="fa-regular fa-calendar-xmark"></i>
          <h5>কোনো রুটিন পাওয়া যায়নি</h5>
          <p>নির্বাচিত শ্রেণির জন্য বর্তমানে কোনো পরীক্ষার রুটিন নেই।</p>
        </div>

        <!-- NOTE -->
        <div class="routine-note">
          <h6>
            <i class="fa-solid fa-circle-exclamation me-1"></i> গুরুত্বপূর্ণ নির্দেশনা
          </h6>
          <ul>
            <li>পরীক্ষার ৩০ মিনিট পূর্বে পরীক্ষাকেন্দ্রে উপস্থিত হতে হবে।</li>
            <li>পরীক্ষার হলে মোবাইল ফোন ব্যবহার সম্পূর্ণ নিষিদ্ধ।</li>
            <li>পরীক্ষার্থীকে প্রয়োজনীয় কলম ও অন্যান্য উপকরণ সঙ্গে আনতে হবে।</li>
            <li>কর্তৃপক্ষ প্রয়োজনে পরীক্ষার সময়সূচি পরিবর্তন করতে পারবেন।</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
function filterRoutine() {
  const selectedClass = document.getElementById('classFilter').value;
  const selectedSession = document.getElementById('sessionFilter').value;
  const rows = document.querySelectorAll('#routineTable tbody tr');
  
  let visibleCount = 0;

  rows.forEach(row => {
    // ব্রেক রো-এর ক্ষেত্রে শুধু সেশন চেক করবে
    if (row.classList.contains('break-row')) {
      const rowSession = row.getAttribute('data-session');
      if (rowSession === selectedSession) {
        row.style.display = selectedClass === 'all' ? '' : 'none'; // সাধারণত ব্রেক রো সব ক্লাসের জন্য বা ফিল্টার অনুযায়ী হ্যান্ডেল করতে পারেন
      } else {
        row.style.display = 'none';
      }
      return;
    }

    const rowClass = row.getAttribute('data-class');
    const rowSession = row.getAttribute('data-session');

    const matchesClass = (selectedClass === 'all' || rowClass === selectedClass);
    const matchesSession = (rowSession === selectedSession);

    if (matchesClass && matchesSession) {
      row.style.display = '';
      visibleCount++;
    } else {
      row.style.display = 'none';
    }
  });

  const emptyDiv = document.getElementById('emptyRoutine');
  const tableWrap = document.querySelector('.table-wrap');

  if (visibleCount === 0) {
    emptyDiv.style.display = 'block';
    tableWrap.style.display = 'none';
  } else {
    emptyDiv.style.display = 'none';
    tableWrap.style.display = 'block';
  }
}

function printRoutine() {
  window.print();
}

function downloadRoutine() {
  window.print();
}
</script>