<style>

.calendar-section {
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

/* CALENDAR CARD */
.calendar-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 14px;
    box-shadow: var(--shadow);
    overflow: hidden;
}

.calendar-card-header {
    background: var(--primary);
    color: var(--white);
    padding: 18px 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    flex-wrap: wrap;
}

.calendar-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

.calendar-icon {
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

.calendar-title h3 {
    margin: 0;
    font-size: 17px;
    font-weight: 800;
}

.calendar-title small {
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

/* CALENDAR CONTENT */
.calendar-content {
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

.calendar-badge {
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

/* TABLE STYLING */
.table-wrap {
    border: 1px solid var(--border);
    border-radius: 8px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    background: #fff;
}

.calendar-table {
    margin: 0;
    width: 100%;
    min-width: 650px;
    border-collapse: collapse;
}

.calendar-table thead th {
    background: var(--primary);
    color: var(--white);
    font-size: 11px;
    font-weight: 700;
    padding: 10px 8px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}

.calendar-table tbody td {
    font-size: 11px;
    color: #43514c;
    padding: 10px 8px;
    border-bottom: 1px solid #e5ece9;
    border-right: 1px solid #e5ece9;
    vertical-align: middle;
    text-align: center;
    font-weight: 600;
}

.calendar-table tbody td:last-child {
    border-right: none;
}

.calendar-table tbody tr:nth-child(even) {
    background: #f8fbfa;
}

.calendar-table tbody tr:hover {
    background: #edf6f2;
}

.event-type-badge {
    display: inline-block;
    padding: 2px 8px;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 700;
}

.badge-exam {
    background: #e8f3ef;
    color: var(--primary);
    border: 1px solid #cfe4dc;
}

.badge-vacation {
    background: #fff8e8;
    color: #b37d00;
    border: 1px solid #f9dfb2;
}

.badge-event {
    background: #f0f4f8;
    color: #1d4ed8;
    border: 1px solid #cbd5e1;
}

/* NOTE */
.calendar-note {
    margin-top: 16px;
    background: #f7faf9;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 12px 14px;
}

.calendar-note h6 {
    color: var(--primary);
    font-size: 11px;
    font-weight: 800;
    margin-bottom: 4px;
}

.calendar-note ul {
    padding-left: 16px;
    margin: 0;
}

.calendar-note li {
    font-size: 10px;
    color: #6b7873;
    margin-bottom: 2px;
}

/* MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .calendar-section { padding: 15px 0; }
    .calendar-card-header { padding: 14px 16px; }
    .calendar-content { padding: 15px; }
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
    
    #printCalendarArea, #printCalendarArea * {
        visibility: visible;
    }

    #printCalendarArea {
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

    .calendar-card {
        border: none !important;
        box-shadow: none !important;
    }

    .calendar-content {
        padding: 5px !important;
    }

    .school-heading {
        margin-bottom: 12px !important;
        padding-bottom: 8px !important;
        border-bottom: 1.5px solid #0b5d4b !important;
    }

    .calendar-table thead th {
        background: #0b5d4b !important;
        color: #ffffff !important;
        border: 1px solid #0b5d4b !important;
    }

    .calendar-table tbody td {
        border: 1px solid #cbdcd5 !important;
        color: #182a26 !important;
    }
}
</style>
  <section class="page-banner">
        <div class="banner-content">
             
            <h1> <i class="fa-solid fa-calendar-days me-2"></i> একাডেমিক ক্যালেন্ডার</h1>

            <p>শিক্ষাবর্ষের সকল গুরুত্বপূর্ণ কার্যক্রম ও তারিখ</p>
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
                     একাডেমিক ক্যালেন্ডার
                    </li>
                </ol>
            </nav>
        </div>
    </div>
<section class="calendar-section">
  <div class="container">
    <!-- INFO -->
    <div class="info-box">
      <i class="fa-solid fa-circle-info"></i>
      <div>
        <strong>একাডেমিক ক্যালেন্ডার সংক্রান্ত নির্দেশনা</strong>
        <p>শিক্ষাবর্ষের গুরুত্বপূর্ণ ছুটির দিন, পরীক্ষা ও বিশেষ অনুষ্ঠানসমূহের তারিখ এখানে দেখতে ও প্রিন্ট করতে পারবেন।</p>
      </div>
    </div>

    <!-- CALENDAR CARD -->
    <div class="calendar-card" id="printCalendarArea">
      <!-- CARD HEADER -->
      <div class="calendar-card-header">
        <div class="calendar-title">
          <div class="calendar-icon">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div>
            <h3>একাডেমিক ক্যালেন্ডার</h3>
            <small>Academic Calendar — Annual Schedule</small>
          </div>
        </div>

        <div class="header-actions">
          <button type="button" class="header-btn" onclick="printCalendar()">
            <i class="fa-solid fa-print"></i> <span>প্রিন্ট</span>
          </button>
        </div>
      </div>

      <!-- FILTER AREA -->
      <div class="filter-area">
        <div class="row g-3 align-items-end">
          <div class="col-lg-5 col-md-5 col-12">
            <label class="filter-label">শিক্ষাবর্ষ নির্বাচন করুন</label>
            <select class="form-select" id="calendarYearFilter">
              <option value="2026">২০২৬ শিক্ষাবর্ষ</option>
              <option value="2025">২০২৫ শিক্ষাবর্ষ</option>
            </select>
          </div>

          <div class="col-lg-5 col-md-5 col-12">
            <label class="filter-label">মাস বা ক্যাটাগরি ফিল্টার</label>
            <select class="form-select" id="categoryFilter">
              <option value="all">সকল ইভেন্ট ও ছুটি</option>
              <option value="exam">পরীক্ষাসমূহ</option>
              <option value="vacation">ছুটির তালিকা</option>
              <option value="event">বিশেষ অনুষ্ঠান</option>
            </select>
          </div>

          <div class="col-lg-2 col-md-2 col-12">
            <button type="button" class="btn search-btn w-100">
              <i class="fa-solid fa-magnifying-glass me-1"></i> খোঁজ করুন
            </button>
          </div>
        </div>
      </div>

      <!-- CALENDAR CONTENT -->
      <div class="calendar-content">
        <div class="school-heading">
          <h2>আমাদের উচ্চ বিদ্যালয়</h2>
          <h5 class="exam-name">বার্ষিক একাডেমিক ক্যালেন্ডার — ২০২৬</h5>
          <div class="calendar-badge">
            <span><i class="fa-solid fa-clock-rotate-left me-1"></i> সেশন: ২০২৬</span>
          </div>
          <p><i class="fa-regular fa-calendar me-1"></i> অনুমোদিত বার্ষিক ছুটির তালিকা ও ইভেন্টসূচি</p>
        </div>

        <!-- TABLE -->
        <div class="table-wrap">
          <table class="table calendar-table align-middle">
            <thead>
              <tr>
                <th>ক্র.নং</th>
                <th>ঘটনা / ইভেন্ট / ছুটির নাম</th>
                <th>ধরন</th>
                <th>তারিখ / সময়কাল</th>
                <th>মোট দিন</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>১</td>
                <td class="text-start ps-3">পবিত্র রমজান ও ঈদুল ফিতর ছুটি</td>
                <td><span class="event-type-badge badge-vacation">ছুটি</span></td>
                <td>১০ মার্চ - ২০ এপ্রিল, ২০২৬</td>
                <td>৪২ দিন</td>
              </tr>
              <tr>
                <td>২</td>
                <td class="text-start ps-3">অর্ধবার্ষিক পরীক্ষা - ২০২৬</td>
                <td><span class="event-type-badge badge-exam">পরীক্ষা</span></td>
                <td>১৫ মে - ৩০ মে, ২০২৬</td>
                <td>১৫ দিন</td>
              </tr>
              <tr>
                <td>৩</td>
                <td class="text-start ps-3">গ্রীষ্মকালীন অবকাশ ও ঈদুল আযহা ছুটি</td>
                <td><span class="event-type-badge badge-vacation">ছুটি</span></td>
                <td>০৫ জুন - ২৫ জুন, ২০২৬</td>
                <td>২১ দিন</td>
              </tr>
              <tr>
                <td>৪</td>
                <td class="text-start ps-3">বার্ষিক ক্রীড়া প্রতিযোগিতা ও সাংস্কৃতিক অনুষ্ঠান</td>
                <td><span class="event-type-badge badge-event">অনুষ্ঠান</span></td>
                <td>১০ আগস্ট - ১২ আগস্ট, ২০২৬</td>
                <td>৩ দিন</td>
              </tr>
              <tr>
                <td>৫</td>
                <td class="text-start ps-3">বার্ষিক পরীক্ষা - ২০২৬</td>
                <td><span class="event-type-badge badge-exam">পরীক্ষা</span></td>
                <td>১০ নভেম্বর - ২৫ নভেম্বর, ২০২৬</td>
                <td>১৬ দিন</td>
              </tr>
              <tr>
                <td>৬</td>
                <td class="text-start ps-3">শীতকালীন অবকাশ ও ফলাফল প্রকাশ</td>
                <td><span class="event-type-badge badge-vacation">ছুটি</span></td>
                <td>১৫ ডিসেম্বর - ৩১ ডিসেম্বর, ২০২৬</td>
                <td>১৭ দিন</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- NOTE -->
        <div class="calendar-note">
          <h6><i class="fa-solid fa-circle-exclamation me-1"></i> জরুরি নির্দেশনা</h6>
          <ul>
            <li>বিশেষ পরিস্থিতির কারণে বিদ্যালয় কতৃপক্ষ ক্যালেন্ডারের নির্ধারিত তারিখ পরিবর্তন বা পরিমার্জন করার অধিকার সংরক্ষণ করে।</li>
            <li>ছুটির দিনগুলোতে শিক্ষার্থীদের নিয়মিত পড়াশোনা চালিয়ে যাওয়ার পরামর্শ দেওয়া হলো।</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function printCalendar() {
  window.print();
}
</script>