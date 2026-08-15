  <style>
    


      .contact-section {
        padding: 55px 0;
      }

      .section-title {
        text-align: center;

        margin-bottom: 35px;
      }

      .section-title .icon {
        width: 45px;

        height: 45px;

        margin: 0 auto 10px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 8px;

        background: #e8f3ef;

        color: var(--primary);
      }

      .section-title h2 {
        color: var(--primary);

        font-size: 26px;

        font-weight: 800;

        margin-bottom: 5px;
      }

      .section-title p {
        margin: 0;

        color: var(--muted);

        font-size: 11px;
      }

      /* =========================================================
   CONTACT INFO CARDS
========================================================= */

      .contact-info-card {
        height: 100%;

        display: flex;

        align-items: flex-start;

        gap: 13px;

        padding: 18px;

        background: #fff;

        border: 1px solid var(--border);

        border-radius: 11px;

        transition: 0.3s;
      }

      .contact-info-card:hover {
        transform: translateY(-3px);

        border-color: #c7dbd4;

        box-shadow: 0 10px 25px rgba(15, 92, 76, 0.07);
      }

      .contact-info-icon {
        width: 45px;

        height: 45px;

        min-width: 45px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 9px;

        background: #eaf4f1;

        color: var(--primary);

        font-size: 17px;
      }

      .contact-info-card:nth-child(2) .contact-info-icon {
        background: #fff6e6;

        color: #d8900d;
      }

      .contact-info-card:nth-child(3) .contact-info-icon {
        background: #edf2fa;

        color: #436da8;
      }

      .contact-info-card:nth-child(4) .contact-info-icon {
        background: #f8ebee;

        color: #b23a48;
      }

      .contact-info-content h4 {
        margin: 0 0 2px;

        color: var(--primary);

        font-size: 14px;

        font-weight: 800;
      }

      .contact-info-content p {
        margin: 0;

        color: var(--muted);

        font-size: 10px;

        line-height: 1.8;
      }

      .contact-info-content a {
        color: var(--muted);
      }

      .contact-info-content a:hover {
        color: var(--primary);
      }

      /* =========================================================
   MAIN CONTACT CARD
========================================================= */

      .contact-main {
        margin-top: 30px;
      }

      .contact-card {
        height: 100%;

        background: #fff;

        border: 1px solid var(--border);

        border-radius: 13px;

        padding: 27px;

        box-shadow: 0 8px 25px rgba(15, 92, 76, 0.05);
      }

      .contact-card-header {
        display: flex;

        align-items: center;

        gap: 11px;

        padding-bottom: 15px;

        margin-bottom: 20px;

        border-bottom: 1px solid var(--border);
      }

      .contact-card-header .header-icon {
        width: 42px;

        height: 42px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 8px;

        background: #eaf4f1;

        color: var(--primary);
      }

      .contact-card-header h3 {
        margin: 0;

        color: var(--primary);

        font-size: 19px;

        font-weight: 800;
      }

      .contact-card-header p {
        margin: 1px 0 0;

        color: var(--muted);

        font-size: 9px;
      }

      /* =========================================================
   FORM
========================================================= */

      .form-label {
        color: #41514b;

        font-size: 10px;

        font-weight: 700;

        margin-bottom: 5px;
      }

      .form-control,
      .form-select {
        min-height: 43px;

        border: 1px solid #dce7e3;

        border-radius: 7px;

        color: #495952;

        font-family: inherit;

        font-size: 11px;

        background: #fbfdfc;
      }

      .form-control:focus,
      .form-select:focus {
        border-color: var(--primary);

        box-shadow: 0 0 0 3px rgba(15, 92, 76, 0.08);
      }

      textarea.form-control {
        min-height: 125px;

        resize: vertical;
      }

      .send-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 7px;

        padding: 10px 20px;

        border: 0;

        border-radius: 7px;

        color: #fff;

        background: var(--primary);

        font-family: inherit;

        font-size: 11px;

        font-weight: 700;

        transition: 0.3s;
      }

      .send-btn:hover {
        background: var(--primary-dark);

        transform: translateY(-2px);
      }

      /* =========================================================
   OFFICE HOURS
========================================================= */

      .office-hours {
        margin-top: 20px;

        padding: 18px;

        background: #f5f9f7;

        border: 1px solid #e2ece8;

        border-radius: 9px;
      }

      .office-hours-title {
        display: flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 10px;

        color: var(--primary);

        font-size: 13px;

        font-weight: 800;
      }

      .office-hours-title i {
        color: var(--accent);
      }

      .office-row {
        display: flex;

        justify-content: space-between;

        gap: 10px;

        padding: 6px 0;

        border-bottom: 1px dashed #dce7e3;

        color: var(--muted);

        font-size: 10px;
      }

      .office-row:last-child {
        border-bottom: 0;
      }

      .office-row strong {
        color: #4b5c55;
      }

      /* =========================================================
   MAP
========================================================= */

      .map-card {
        height: 100%;

        overflow: hidden;

        background: #fff;

        border: 1px solid var(--border);

        border-radius: 13px;

        box-shadow: 0 8px 25px rgba(15, 92, 76, 0.05);
      }

      .map-header {
        display: flex;

        align-items: center;

        gap: 10px;

        padding: 17px 20px;

        border-bottom: 1px solid var(--border);
      }

      .map-header .map-icon {
        width: 39px;

        height: 39px;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #eaf4f1;

        color: var(--primary);

        border-radius: 8px;
      }

      .map-header h3 {
        margin: 0;

        color: var(--primary);

        font-size: 17px;

        font-weight: 800;
      }

      .map-header span {
        display: block;

        color: var(--muted);

        font-size: 8px;
      }

      .map-frame {
        width: 100%;

        height: 425px;

        display: block;

        border: 0;
      }

      /* =========================================================
   SOCIAL CONTACT
========================================================= */

      .social-contact {
        margin-top: 25px;

        padding: 22px;

        background: var(--primary);

        border-radius: 11px;

        color: #fff;
      }

      .social-contact h3 {
        margin: 0 0 5px;

        font-size: 16px;

        font-weight: 800;
      }

      .social-contact p {
        margin: 0 0 14px;

        color: rgba(255, 255, 255, 0.7);

        font-size: 9px;
      }

      .social-buttons {
        display: flex;

        gap: 8px;

        flex-wrap: wrap;
      }

      .social-buttons a {
        width: 34px;

        height: 34px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 7px;

        color: #fff;

        background: rgba(255, 255, 255, 0.12);

        transition: 0.3s;
      }

      .social-buttons a:hover {
        background: var(--accent);

        color: var(--primary-dark);
      }

      /* =========================================================
   EMERGENCY CONTACT
========================================================= */

      .emergency-box {
        margin-top: 25px;

        padding: 22px;

        background: #fff;

        border: 1px solid #ead9dc;

        border-left: 4px solid #b23a48;

        border-radius: 10px;
      }

      .emergency-box h3 {
        margin: 0 0 5px;

        color: #9d3341;

        font-size: 15px;

        font-weight: 800;
      }

      .emergency-box p {
        color: var(--muted);

        font-size: 10px;

        margin: 0 0 10px;
      }

      .emergency-number {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        color: #9d3341;

        font-size: 13px;

        font-weight: 800;
      }

      /* =========================================================
   FOOTER
========================================================= */

      footer {
        margin-top: 20px;

        background: var(--primary-dark);

        color: #fff;

        border-top: 4px solid var(--accent);
      }

      .footer-main {
        padding: 45px 0 30px;
      }

      .footer-title {
        font-size: 15px;

        font-weight: 800;

        margin-bottom: 15px;
      }

      .footer-text {
        color: rgba(255, 255, 255, 0.65);

        font-size: 10px;

        line-height: 1.9;
      }

      .footer-links {
        list-style: none;

        padding: 0;

        margin: 0;
      }

      .footer-links li {
        margin-bottom: 6px;
      }

      .footer-links a {
        color: rgba(255, 255, 255, 0.65);

        font-size: 10px;

        transition: 0.3s;
      }

      .footer-links a:hover {
        color: var(--accent);

        padding-left: 4px;
      }

      .footer-bottom {
        padding: 12px 0;

        border-top: 1px solid rgba(255, 255, 255, 0.1);

        text-align: center;

        color: rgba(255, 255, 255, 0.55);

        font-size: 9px;
      }

      /* =========================================================
   MOBILE NAVBAR
========================================================= */

      .navbar-toggler {
        border: 1px solid var(--border);

        color: var(--primary);

        font-size: 18px;

        padding: 6px 9px;
      }

      .navbar-toggler:focus {
        box-shadow: 0 0 0 3px rgba(15, 92, 76, 0.08);
      }

      /* =========================================================
   RESPONSIVE
========================================================= */

      @media (max-width: 991px) {
       

        .contact-section {
          padding: 35px 0;
        }

        .section-title h2 {
          font-size: 22px;
        }

        .contact-card {
          padding: 18px;
        }

        .map-frame {
          height: 330px;
        }
      }

      @media (max-width: 480px) {
      
        .contact-info-card {
          padding: 14px;
        }

        .contact-info-icon {
          width: 40px;

          height: 40px;

          min-width: 40px;
        }

        .map-frame {
          height: 280px;
        }

        .send-btn {
          width: 100%;
        }
      }
    </style>
  <section class="page-banner">
        <div class="banner-content">
          

          <h2>যোগাযোগ করুন</h2>

                  <p>যেকোনো তথ্য বা প্রয়োজনে আমাদের সাথে যোগাযোগ করুন</p>
        </div>
    </section>

    <section class="contact-section">
      <div class="container">
        <!-- Section Title -->

        <div class="section-title">
          <div class="icon">
            <i class="fa-solid fa-address-book"></i>
          </div>

          <h2>আমাদের সাথে যোগাযোগ করুন</h2>

          <p>আপনার প্রয়োজনীয় তথ্য জানতে আমাদের সাথে যোগাযোগ করুন</p>
        </div>

        <div class="row g-3">
          <!-- Address -->

          <div class="col-lg-3 col-sm-6">
            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>

              <div class="contact-info-content">
                <h4>ঠিকানা</h4>

                <p style="text-align:center;!importent">
                  বিদ্যালয় রোড,<br />
                  সদর, বাংলাদেশ
                </p>
              </div>
            </div>
          </div>

          <!-- Phone -->

          <div class="col-lg-3 col-sm-6">
            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="fa-solid fa-phone"></i>
              </div>

              <div class="contact-info-content">
                <h4>ফোন</h4>

                <p>
                  <a href="tel:+8801700000000"> +880 1700-000000 </a>

                  <br />

                  <a href="tel:+8801800000000"> +880 1800-000000 </a>
                </p>
              </div>
            </div>
          </div>

          <!-- Email -->

          <div class="col-lg-3 col-sm-6">
            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="fa-solid fa-envelope"></i>
              </div>

              <div class="contact-info-content">
                <h4>ই-মেইল</h4>

                <p>
                  <a href="mailto:info@school.edu.bd"> info@school.edu.bd </a>

                  <br />

                  <a href="mailto:admin@school.edu.bd"> admin@school.edu.bd </a>
                </p>
              </div>
            </div>
          </div>

          <!-- Office -->

          <div class="col-lg-3 col-sm-6">
            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="fa-solid fa-clock"></i>
              </div>

              <div class="contact-info-content">
                <h4>অফিস সময়</h4>

                <p>
                  শনি - বৃহস্পতি<br />

                  সকাল ৯:০০ - বিকাল ৪:০০
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- =================================================
             FORM + MAP
        ================================================== -->

        <div class="row g-4 contact-main">
          <!-- =================================================
                 CONTACT FORM
            ================================================== -->

          <div class="col-lg-6">
            <div class="contact-card">
              <div class="contact-card-header">
                <div class="header-icon">
                  <i class="fa-solid fa-paper-plane"></i>
                </div>

                <div>
                  <h3>আমাদের বার্তা পাঠান</h3>

                  <p>আপনার তথ্য পূরণ করে বার্তা পাঠান</p>
                </div>
              </div>

              <form action="#" method="post">
                <div class="row g-3">
                  <!-- Name -->

                  <div class="col-md-6">
                    <label class="form-label"> আপনার নাম </label>

                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="আপনার নাম লিখুন"
                      required />
                  </div>

                  <!-- Phone -->

                  <div class="col-md-6">
                    <label class="form-label"> মোবাইল নম্বর </label>

                    <input
                      type="tel"
                      name="phone"
                      class="form-control"
                      placeholder="01XXXXXXXXX"
                      required />
                  </div>

                  <!-- Email -->

                  <div class="col-md-6">
                    <label class="form-label"> ই-মেইল </label>

                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="example@email.com" />
                  </div>

                  <!-- Subject -->

                  <div class="col-md-6">
                    <label class="form-label"> বিষয় </label>

                    <select name="subject" class="form-select" required>
                      <option value="">বিষয় নির্বাচন করুন</option>

                      <option>ভর্তি সংক্রান্ত</option>

                      <option>ফলাফল সংক্রান্ত</option>

                      <option>নোটিশ সংক্রান্ত</option>

                      <option>শিক্ষক সংক্রান্ত</option>

                      <option>অন্যান্য</option>
                    </select>
                  </div>

                  <!-- Message -->

                  <div class="col-12">
                    <label class="form-label"> আপনার বার্তা </label>

                    <textarea
                      name="message"
                      class="form-control"
                      placeholder="আপনার বার্তা লিখুন..."
                      required></textarea>
                  </div>

                  <!-- Button -->

                  <div class="col-12">
                    <button type="submit" class="send-btn">
                      <i class="fa-solid fa-paper-plane"></i>

                      বার্তা পাঠান
                    </button>
                  </div>
                </div>
              </form>

              <!-- Office Hours -->

              <div class="office-hours">
                <div class="office-hours-title">
                  <i class="fa-solid fa-business-time"></i>

                  অফিস ও যোগাযোগের সময়
                </div>

                <div class="office-row">
                  <span> শনিবার - বৃহস্পতিবার </span>

                  <strong> ৯:০০ AM - ৪:০০ PM </strong>
                </div>

                <div class="office-row">
                  <span> শুক্রবার </span>

                  <strong> বন্ধ </strong>
                </div>

                <div class="office-row">
                  <span> জরুরি যোগাযোগ </span>

                  <strong> ২৪/৭ </strong>
                </div>
              </div>
            </div>
          </div>

          <!-- =================================================
                 MAP
            ================================================== -->

          <div class="col-lg-6">
            <div class="map-card">
              <div class="map-header">
                <div class="map-icon">
                  <i class="fa-solid fa-map-location-dot"></i>
                </div>

                <div>
                  <h3>আমাদের অবস্থান</h3>

                  <span> Google Maps </span>
                </div>
              </div>

              <!--

                    এখানে আপনার Google Maps Embed Code
                    বসাবেন।

                    -->

              <iframe
                class="map-frame"
                src="https://www.google.com/maps?q=Dhaka,Bangladesh&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>

        <!-- =================================================
             SOCIAL
        ================================================== -->

        <div class="social-contact">
          <h3>আমাদের সাথে সোশ্যাল মিডিয়ায় যুক্ত থাকুন</h3>

          <p>
            বিদ্যালয়ের সর্বশেষ খবর, নোটিশ ও কার্যক্রম জানতে আমাদের সোশ্যাল
            মিডিয়া অনুসরণ করুন।
          </p>

          <div class="social-buttons">
            <a href="#" title="Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="#" title="YouTube">
              <i class="fa-brands fa-youtube"></i>
            </a>

            <a href="#" title="Instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="#" title="LinkedIn">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>

            <a href="#" title="WhatsApp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div>
        </div>

        <!-- =================================================
             EMERGENCY
        ================================================== -->

        <div class="emergency-box">
          <h3>
            <i class="fa-solid fa-triangle-exclamation"></i>

            জরুরি যোগাযোগ
          </h3>

          <p>
            বিদ্যালয় সংক্রান্ত জরুরি কোনো তথ্য বা প্রয়োজন হলে নিচের নম্বরে
            যোগাযোগ করুন।
          </p>

          <a href="tel:+8801700000000" class="emergency-number">
            <i class="fa-solid fa-phone"></i>

            +880 1700-000000
          </a>
        </div>
      </div>
    </section>