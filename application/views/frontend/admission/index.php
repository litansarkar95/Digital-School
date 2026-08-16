
    <section class="page-banner">
        <div class="banner-content">
            <h1>ভর্তি বিজ্ঞপ্তি</h1>

            <p>২০২৬ শিক্ষাবর্ষে শিক্ষার্থী ভর্তি সংক্রান্ত বিস্তারিত তথ্য</p>
        </div>
    </section>

    
    <style>
 .section-title_admission {
    text-align: center;
    margin-bottom: 28px;
}
.section-title_admission .icon {
    width: 46px;
    height: 46px;
    margin: 0 auto 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    background: #e8f3ef;
    color: var(--primary);
}
.section-title_admission h2 {
    margin: 0 0 5px;
    color: var(--primary);
    font-size: 26px;
    font-weight: 800;
}
.section-title_admission p {
    margin: 0;
    color: var(--muted);
    font-size: 13px;
}

.admission-notice {
    position: relative;
    overflow: hidden;
    background: var(--primary);
    border-radius: 12px;
    border: 1px solid var(--primary-dark);
    padding: 25px;
    color: #fff;
    margin-bottom: 25px;
    box-shadow: 0 12px 28px rgba(15, 92, 76, 0.13);
}
.admission-notice::after {
    content: "";
    position: absolute;
    width: 170px;
    height: 170px;
    right: -60px;
    top: -70px;
    border-radius: 50%;
    border: 30px solid rgba(255, 255, 255, 0.04);
}
.admission-notice-content {
    position: relative;
    z-index: 2;
}
.notice-label {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: var(--secondary);
    color: var(--primary-dark);
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 11px;
    font-weight: 800;
    margin-bottom: 10px;
}
.admission-notice h3 {
    font-size: 24px;
    font-weight: 800;
    margin-bottom: 5px;
}
.admission-notice p {
    color: rgba(255, 255, 255, 0.78);
    font-size: 13px;
    margin-bottom: 15px;
}
.admission-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}
.btn-admission {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 14px;
    border-radius: 6px;
    background: #fff;
    color: var(--primary);
    font-size: 13px;
    font-weight: 700;
    transition: 0.3s;
}
.btn-admission:hover {
    background: var(--accent);
    color: var(--primary-dark);
}
.btn-outline-admission {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 7px 13px;
    border-radius: 6px;
    border: 1px solid rgba(255, 255, 255, 0.35);
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    transition: 0.3s;
}
.btn-outline-admission:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
} /* ========================================================= INFORMATION CARD ========================================================= */
.info-card {
    height: 100%;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 11px;
    overflow: hidden;
    box-shadow: 0 7px 22px rgba(15, 92, 76, 0.04);
}
.info-card-header {
    padding: 15px 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    background: #fbfdfc;
    border-bottom: 1px solid var(--border);
}
.info-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e9f4f0;
    color: var(--primary);
    border-radius: 8px;
}
.info-card-header h3 {
    margin: 0;
    color: var(--primary);
    font-size: 15px;
    font-weight: 800;
}
.info-card-header span {
    display: block;
    color: var(--muted);
    font-size: 11px;
}
.info-card-body {
    padding: 18px;
} /* ========================================================= LIST ========================================================= */
.info-list {
    list-style: none;
    margin: 0;
    padding: 0;
}
.info-list li {
    position: relative;
    padding: 8px 0 8px 25px;
    border-bottom: 1px dashed #e2ebe7;
    color: #596963;
    font-size: 13px;
}
.info-list li:last-child {
    border-bottom: 0;
}
.info-list li::before {
    content: "\f00c";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 9px;
    width: 17px;
    height: 17px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #e8f3ef;
    color: var(--primary);
    font-size: 10px;
} /* ========================================================= DATE CARD ========================================================= */
.date-card {
    height: 100%;
    padding: 20px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 11px;
}
.date-row {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid #edf2ef;
}
.date-row:last-child {
    border-bottom: 0;
}
.date-icon {
    width: 39px;
    height: 39px;
    min-width: 39px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff5e5;
    color: #d58b12;
    border-radius: 7px;
}
.date-row h4 {
    margin: 0;
    color: var(--primary);
    font-size: 13px;
    font-weight: 800;
}
.date-row p {
    margin: 1px 0 0;
    color: var(--muted);
    font-size: 11px;
} /* ========================================================= PROCESS ========================================================= */
.process-section {
    margin-top: 28px;
}
.process-title {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
}
.process-title::before {
    content: "";
    width: 4px;
    height: 23px;
    background: var(--accent);
    border-radius: 5px;
}
.process-title h3 {
    margin: 0;
    color: var(--primary);
    font-size: 18px;
    font-weight: 800;
}
.process-card {
    height: 100%;
    padding: 18px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 10px;
    transition: 0.3s;
}
.process-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(15, 92, 76, 0.07);
    border-color: #c9ddd6;
}
.process-number {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background: var(--primary);
    color: #fff;
    font-size: 12px;
    font-weight: 800;
    margin-bottom: 10px;
}
.process-card h4 {
    color: var(--primary);
    font-size: 13px;
    font-weight: 800;
    margin: 0 0 4px;
}
.process-card p {
    color: var(--muted);
    font-size: 13px;
    margin: 0;
} /* ========================================================= FEE / SEAT TABLE ========================================================= */
.simple-table {
    width: 100%;
    border-collapse: collapse;
}
.simple-table th {
    padding: 11px;
    background: var(--primary);
    color: #fff;
    font-size: 13px;
}
.simple-table td {
    padding: 10px 11px;
    border-bottom: 1px solid #e8efec;
    color: #5b6964;
    font-size: 12px;
}
.simple-table tr:last-child td {
    border-bottom: 0;
}
.simple-table tr:hover td {
    background: #f8fbfa;
} /* ========================================================= IMPORTANT NOTE ========================================================= */
.important-note {
    margin-top: 25px;
    padding: 17px 18px;
    background: #fff9ed;
    border: 1px solid #f4dfb3;
    border-left: 4px solid var(--accent);
    border-radius: 8px;
}
.important-note h4 {
    margin: 0 0 4px;
    color: #a76b0b;
    font-size: 13px;
    font-weight: 800;
}
.important-note p {
    margin: 0;
    color: #7b6b4f;
    font-size: 12px;
}
.download-card {
    margin-top: 25px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 11px;
}
.download-info {
    display: flex;
    align-items: center;
    gap: 12px;
}
.download-icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background: #f8e9ec;
    color: #b23a48;
    font-size: 18px;
}
.download-info h4 {
    margin: 0;
    color: var(--primary);
    font-size: 14px;
    font-weight: 800;
}
.download-info p {
    margin: 2px 0 0;
    color: var(--muted);
    font-size: 13px;
}
.download-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 9px 15px;
    border-radius: 6px;
    background: var(--primary);
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    transition: 0.3s;
}
.download-btn:hover {
    background: var(--primary-dark);
    color: #fff;
}
@media (max-width: 767px) {
    .topbar .container {
        flex-direction: column;
        gap: 5px;
        padding: 6px 12px;
    }
    .top-social {
        display: none;
    }
    .top-contact {
        gap: 10px;
        font-size: 13px;
    }
    .school-logo {
        width: 45px;
        height: 45px;
    }
    .school-name h1 {
        font-size: 15px;
    }
    .school-name span {
        font-size: 10px;
    }
    .page-banner {
        min-height: 200px;
    }
    .page-banner h2 {
        font-size: 25px;
    }
    .admission-section {
        padding: 32px 0;
    }
    .section-title h2 {
        font-size: 22px;
    }
    .admission-notice {
        padding: 20px;
    }
    .admission-notice h3 {
        font-size: 20px;
    }
    .download-card {
        align-items: flex-start;
        flex-direction: column;
    }
    .download-btn {
        width: 100%;
        justify-content: center;
    }
}
@media (max-width: 480px) {
    .top-contact {
        flex-direction: column;
        gap: 1px;
    }
    .admission-buttons {
        flex-direction: column;
        align-items: stretch;
    }
    .btn-admission,
    .btn-outline-admission {
        justify-content: center;
    }
}

    </style>
 
 <div class="breadcrumb-area">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                        Notice Board
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="admission-section">
      <div class="container">
        <div class="section-title_admission">
          <div class="icon">
            <i class="fa-solid fa-user-graduate"></i>
          </div>

          <h2>ভর্তি বিজ্ঞপ্তি</h2>

          <p>২০২৬ শিক্ষাবর্ষে বিভিন্ন শ্রেণিতে শিক্ষার্থী ভর্তি</p>
        </div>

        <div class="admission-notice">
          <div class="admission-notice-content">
            <div class="notice-label">
              <i class="fa-solid fa-bullhorn"></i>

              ভর্তি বিজ্ঞপ্তি ২০২৬
            </div>

            <h3>২০২৬ শিক্ষাবর্ষে শিক্ষার্থী ভর্তি চলছে</h3>

            <p>
              আদর্শ উচ্চ বিদ্যালয়ে ২০২৬ শিক্ষাবর্ষে নির্ধারিত শ্রেণিসমূহে
              শিক্ষার্থী ভর্তি করা হবে। আগ্রহী শিক্ষার্থী ও অভিভাবকদের নির্ধারিত
              সময়ের মধ্যে ভর্তি কার্যক্রম সম্পন্ন করার জন্য অনুরোধ করা হলো।
            </p>

            <div class="admission-buttons">
              <a href="online-admission.html" class="btn-admission">
                <i class="fa-solid fa-laptop"></i>

                অনলাইন ভর্তি আবেদন
              </a>

              <a
                href="files/admission-notice-2026.pdf"
                target="_blank"
                class="btn-outline-admission">
                <i class="fa-solid fa-file-pdf"></i>

                ভর্তি বিজ্ঞপ্তি PDF
              </a>
            </div>
          </div>
        </div>

        <!-- =================================================
             INFORMATION
        ================================================== -->

        <div class="row g-4">
          <!-- ELIGIBILITY -->

          <div class="col-lg-6">
            <div class="info-card">
              <div class="info-card-header">
                <div class="info-icon">
                  <i class="fa-solid fa-user-check"></i>
                </div>

                <div>
                  <h3>ভর্তি যোগ্যতা</h3>

                  <span> Admission Eligibility </span>
                </div>
              </div>

              <div class="info-card-body">
                <ul class="info-list">
                  <li>
                    নির্ধারিত শ্রেণিতে ভর্তির জন্য শিক্ষার্থীকে পূর্ববর্তী
                    শ্রেণি উত্তীর্ণ হতে হবে।
                  </li>

                  <li>
                    শিক্ষার্থীর বয়স সংশ্লিষ্ট শ্রেণির জন্য নির্ধারিত বয়সসীমার
                    মধ্যে হতে হবে।
                  </li>

                  <li>
                    প্রয়োজনীয় শিক্ষাগত সনদপত্র ও অন্যান্য কাগজপত্র থাকতে হবে।
                  </li>

                  <li>বিদ্যালয়ের ভর্তি নীতিমালা ও নির্দেশনা মেনে চলতে হবে।</li>

                  <li>
                    ভর্তি পরীক্ষায় অংশগ্রহণের ক্ষেত্রে নির্ধারিত সময় ও নিয়ম
                    অনুসরণ করতে হবে।
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- DOCUMENTS -->

          <div class="col-lg-6">
            <div class="info-card">
              <div class="info-card-header">
                <div class="info-icon">
                  <i class="fa-solid fa-file-lines"></i>
                </div>

                <div>
                  <h3>প্রয়োজনীয় কাগজপত্র</h3>

                  <span> Required Documents </span>
                </div>
              </div>

              <div class="info-card-body">
                <ul class="info-list">
                  <li>শিক্ষার্থীর জন্ম নিবন্ধন সনদের ফটোকপি।</li>

                  <li>পূর্ববর্তী বিদ্যালয়ের ছাড়পত্র / প্রশংসাপত্র।</li>

                  <li>পূর্ববর্তী শ্রেণির বার্ষিক পরীক্ষার ফলাফল।</li>

                  <li>শিক্ষার্থীর সাম্প্রতিক পাসপোর্ট সাইজ ছবি।</li>

                  <li>পিতা ও মাতার জাতীয় পরিচয়পত্রের ফটোকপি।</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- =================================================
             IMPORTANT DATES
        ================================================== -->

        <div class="row g-4 mt-1">
          <div class="col-lg-6">
            <div class="date-card">
              <div class="process-title">
                <h3>গুরুত্বপূর্ণ তারিখ</h3>
              </div>

              <div class="date-row">
                <div class="date-icon">
                  <i class="fa-solid fa-calendar-plus"></i>
                </div>

                <div>
                  <h4>আবেদন শুরু</h4>

                  <p>০১ ডিসেম্বর ২০২৫</p>
                </div>
              </div>

              <div class="date-row">
                <div class="date-icon">
                  <i class="fa-solid fa-calendar-check"></i>
                </div>

                <div>
                  <h4>আবেদন শেষ</h4>

                  <p>২০ ডিসেম্বর ২০২৫</p>
                </div>
              </div>

              <div class="date-row">
                <div class="date-icon">
                  <i class="fa-solid fa-pen-to-square"></i>
                </div>

                <div>
                  <h4>ভর্তি পরীক্ষা</h4>

                  <p>২৫ ডিসেম্বর ২০২৫</p>
                </div>
              </div>

              <div class="date-row">
                <div class="date-icon">
                  <i class="fa-solid fa-user-check"></i>
                </div>

                <div>
                  <h4>ভর্তি সম্পন্ন</h4>

                  <p>০১ জানুয়ারি ২০২৬ থেকে</p>
                </div>
              </div>
            </div>
          </div>

          <!-- CLASS INFORMATION -->

          <div class="col-lg-6">
            <div class="info-card">
              <div class="info-card-header">
                <div class="info-icon">
                  <i class="fa-solid fa-school"></i>
                </div>

                <div>
                  <h3>শ্রেণিভিত্তিক তথ্য</h3>

                  <span> Class Wise Admission </span>
                </div>
              </div>

              <div class="table-responsive">
                <table class="simple-table">
                  <thead>
                    <tr>
                      <th>শ্রেণি</th>

                      <th>আসন</th>

                      <th>ভর্তি পদ্ধতি</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>৬ষ্ঠ শ্রেণি</td>

                      <td>৬০</td>

                      <td>ভর্তি পরীক্ষা</td>
                    </tr>

                    <tr>
                      <td>৭ম শ্রেণি</td>

                      <td>৩০</td>

                      <td>মেধার ভিত্তিতে</td>
                    </tr>

                    <tr>
                      <td>৮ম শ্রেণি</td>

                      <td>৩০</td>

                      <td>মেধার ভিত্তিতে</td>
                    </tr>

                    <tr>
                      <td>৯ম শ্রেণি</td>

                      <td>৩০</td>

                      <td>মেধার ভিত্তিতে</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- =================================================
             ADMISSION PROCESS
        ================================================== -->

        <div class="process-section">
          <div class="process-title">
            <h3>ভর্তি প্রক্রিয়া</h3>
          </div>

          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="process-card">
                <div class="process-number">১</div>

                <h4>আবেদন করুন</h4>

                <p>অনলাইনে অথবা বিদ্যালয় থেকে ভর্তি ফরম সংগ্রহ করুন।</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="process-card">
                <div class="process-number">২</div>

                <h4>তথ্য প্রদান</h4>

                <p>প্রয়োজনীয় তথ্য সঠিকভাবে পূরণ করুন।</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="process-card">
                <div class="process-number">৩</div>

                <h4>পরীক্ষা / যাচাই</h4>

                <p>প্রয়োজন অনুযায়ী ভর্তি পরীক্ষা বা তথ্য যাচাই হবে।</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="process-card">
                <div class="process-number">৪</div>

                <h4>ভর্তি সম্পন্ন</h4>

                <p>নির্ধারিত ফি প্রদান করে ভর্তি সম্পন্ন করুন।</p>
              </div>
            </div>
          </div>
        </div>

        <!-- =================================================
             IMPORTANT NOTE
        ================================================== -->

        <div class="important-note">
          <h4>
            <i class="fa-solid fa-circle-info"></i>

            গুরুত্বপূর্ণ নির্দেশনা
          </h4>

          <p>
            ভর্তি সংক্রান্ত সকল তথ্য বিদ্যালয়ের অফিসিয়াল নোটিশের মাধ্যমে প্রকাশ
            করা হবে। কোনো তথ্যের পরিবর্তন হলে বিদ্যালয়ের ওয়েবসাইটের নোটিশ বিভাগে
            তা জানানো হবে। ভর্তি সংক্রান্ত বিষয়ে বিদ্যালয় কর্তৃপক্ষের সিদ্ধান্তই
            চূড়ান্ত বলে গণ্য হবে।
          </p>
        </div>

        <!-- =================================================
             DOWNLOAD
        ================================================== -->

        <div class="download-card">
          <div class="download-info">
            <div class="download-icon">
              <i class="fa-solid fa-file-pdf"></i>
            </div>

            <div>
              <h4>সম্পূর্ণ ভর্তি বিজ্ঞপ্তি</h4>

              <p>
                ভর্তি সংক্রান্ত বিস্তারিত বিজ্ঞপ্তি PDF আকারে দেখুন বা ডাউনলোড
                করুন।
              </p>
            </div>
          </div>

          <a
            href="files/admission-notice-2026.pdf"
            target="_blank"
            class="download-btn">
            <i class="fa-solid fa-download"></i>

            PDF ডাউনলোড
          </a>
        </div>
      </div>
    </section>
