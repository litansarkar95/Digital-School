<style>


.section {
    padding: 60px 0;
    font-family: 'Noto Sans Bengali', sans-serif;
  
}

.section-title {
    text-align: center;
    width: fit-content;
    max-width: 100%;
    margin: 0 auto 40px;
}

.small-title {
    display: inline-flex;
    align-items: center;
    justify-content: center; 
    gap: 8px;
    background: rgba(11, 93, 75, 0.1);
    color: var(--primary);
    padding: 10px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    margin: 10px auto;
    border: 1px solid rgba(11, 93, 75, 0.15);
   width: 180px;
    box-sizing: border-box;
}

.section-title h2 {
    color: var(--primary);
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 10px;
}

.title-line {
    width: 50px;
    height: 3px;
    background: var(--secondary);
    margin: 0 auto 15px;
    border-radius: 2px;
}

.section-description {
    color: #666;
    font-size: 13.5px;
    line-height: 1.6;
    margin: 0;
}

/* =====================================
    FEATURE MESSAGE
===================================== */
.featured-message {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.05);
    margin-bottom: 45px;
}

.featured-image {
    height: 100%;
    min-height: 350px;
}

.featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.featured-content {
    padding: 38px;
}

.featured-label {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #edf7f3;
    color: var(--primary);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 15px;
}

.featured-content h3 {
    color: var(--primary);
    font-size: 25px;
    font-weight: 800;
}

.featured-content p {
    color: #666;
    font-size: 14px;
    text-align: justify;
}

.read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--primary);
    color: #fff;
    padding: 9px 18px;
    border-radius: 6px;
    font-size: 13px;
    margin-top: 5px;
    text-decoration: none;
    transition: 0.3s;
}

.read-more:hover {
    background: var(--secondary);
    color: var(--primary-dark);
}

/* =====================================
    MESSAGE CARD
===================================== */
.message-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    overflow: hidden;
    height: 100%;
    box-shadow: 0 6px 20px rgba(15, 92, 76, 0.06);
    transition: 0.35s;
    display: flex;
    flex-direction: column;
}

.message-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(15, 92, 76, 0.13);
    border-color: rgba(15, 92, 76, 0.25);
}

/* IMAGE */
.message-image {
    height: 280px;
    position: relative;
    overflow: hidden;
    background: #edf4f1;
}

.message-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s;
}

.message-card:hover .message-image img {
    transform: scale(1.05);
}

/* QUOTE ICON */
.quote-icon {
    position: absolute;
    left: 20px;
    bottom: -23px;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--secondary);
    color: var(--primary-dark);
    font-size: 22px;
    border: 5px solid #fff;
    z-index: 2;
}

/* CONTENT */
.message-content {
    padding: 42px 25px 28px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.message-content h3 {
    color: var(--primary);
    font-size: 21px;
    font-weight: 800;
    margin-bottom: 2px;
}

.designation {
    color: #777;
    font-size: 13px;
    font-weight: 600;
}

.message-divider {
    width: 38px;
    height: 2px;
    background: var(--secondary);
    margin: 13px 0 15px;
}

.message-text {
    color: #666;
    font-size: 14px;
    text-align: justify;
    flex-grow: 1;
}

.message-text::first-letter {
    font-size: 26px;
    font-weight: 800;
    color: var(--primary);
}

/* SIGNATURE */
.signature {
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px dashed #dfe7e4;
}

.signature strong {
    display: block;
    color: var(--primary);
    font-size: 14px;
}

.signature span {
    font-size: 12px;
    color: #888;
}

/* =====================================
    MOBILE RESPONSIVE STYLES
===================================== */
@media (max-width: 991.98px) {
    .featured-content {
        padding: 30px 25px;
    }
    
    .featured-image {
        min-height: 280px;
    }
}

@media (max-width: 767.98px) {
    .section-title h2 {
        font-size: 22px;
    }
    
    .featured-content {
        padding: 25px 20px;
    }
    
    .featured-content h3 {
        font-size: 21px;
    }
    
    .message-content {
        padding: 35px 20px 22px;
    }
    
    .message-content h3 {
        font-size: 19px;
    }
    
    .message-image {
        height: 240px;
    }
}

@media (max-width: 575.98px) {
    .featured-image {
        min-height: 220px;
    }
    
    .quote-icon {
        width: 45px;
        height: 45px;
        font-size: 18px;
        bottom: -18px;
        left: 15px;
        border-width: 4px;
    }
    
    .message-content {
        padding: 32px 15px 20px;
    }
}
</style>  
  <section class="section">
  <div class="container">
    <!-- SECTION TITLE -->
    <div class="section-title">
      <div class="small-title">
        <i class="fa-solid fa-quote-left"></i>
        MESSAGES
      </div>
      <h2>আমাদের বাণী</h2>
      <div class="title-line"></div>
      <p class="section-description">
        আমাদের বিদ্যালয়ের সম্মানিত সভাপতি, প্রধান শিক্ষক ও পরিচালনা পর্ষদের
        সদস্যদের মূল্যবান বক্তব্য ও শুভেচ্ছা বাণী।
      </p>
    </div>

    <!-- ==================================================
         FEATURED MESSAGE
    ================================================== -->
    <div class="featured-message">
      <div class="row g-0 align-items-stretch">
        <div class="col-lg-5">
          <div class="featured-image">
            <img
              src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=900&q=80"
              alt="সভাপতির বাণী" />
          </div>
        </div>

        <div class="col-lg-7">
          <div class="featured-content">
            <div class="featured-label">
              <i class="fa-solid fa-quote-left"></i>
              সভাপতির বাণী
            </div>

            <h3>মোঃ আব্দুল করিম</h3>

            <div class="designation">সভাপতি, পরিচালনা পর্ষদ</div>

            <div class="message-divider"></div>

            <p>
              শিক্ষা মানুষের মৌলিক অধিকার এবং একটি জাতির উন্নয়নের প্রধান
              হাতিয়ার। একটি আদর্শ শিক্ষা প্রতিষ্ঠান শুধু শিক্ষার্থীদের
              পাঠ্যবইয়ের জ্ঞান প্রদান করে না, বরং তাদের নৈতিকতা, মূল্যবোধ,
              শৃঙ্খলা ও মানবিক গুণাবলি বিকাশে গুরুত্বপূর্ণ ভূমিকা পালন করে।
            </p>

            <p>
              আমাদের বিদ্যালয়ের প্রতিটি শিক্ষার্থী যেন সুশিক্ষায় শিক্ষিত
              হয়ে দেশ ও সমাজের কল্যাণে কাজ করতে পারে—এটাই আমাদের প্রত্যাশা।
              বিদ্যালয়ের শিক্ষক, অভিভাবক ও পরিচালনা পর্ষদের সম্মিলিত
              প্রচেষ্টায় আমরা এই লক্ষ্য অর্জনে এগিয়ে যেতে চাই।
            </p>

            <a href="#" class="read-more">
              বিস্তারিত বাণী
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================================================
         MESSAGE CARDS
    ================================================== -->
    <div class="row g-4">
      <!-- MESSAGE 1 -->
      <div class="col-lg-6">
        <div class="message-card">
          <div class="message-image">
            <img
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80"
              alt="প্রধান শিক্ষকের বাণী" />

            <div class="quote-icon">
              <i class="fa-solid fa-quote-left"></i>
            </div>
          </div>

          <div class="message-content">
            <h3>মোছাঃ নাসরিন আক্তার</h3>

            <div class="designation">প্রধান শিক্ষক</div>

            <div class="message-divider"></div>

            <div class="message-text">
              <p>
                আমাদের বিদ্যালয় শিক্ষার্থীদের আধুনিক ও মানসম্মত শিক্ষা
                প্রদানের পাশাপাশি তাদের নৈতিক ও মানবিক মূল্যবোধ গড়ে তুলতে
                প্রতিশ্রুতিবদ্ধ।
              </p>

              <p>
                একজন শিক্ষার্থীর সাফল্যের পেছনে বিদ্যালয় ও পরিবারের ভূমিকা
                অত্যন্ত গুরুত্বপূর্ণ। শিক্ষক, অভিভাবক এবং শিক্ষার্থীদের
                সম্মিলিত প্রচেষ্টায় আমরা একটি সুন্দর ও আলোকিত ভবিষ্যৎ গড়ে
                তুলতে চাই।
              </p>
            </div>

            <div class="signature">
              <strong> মোছাঃ নাসরিন আক্তার </strong>
              <span> প্রধান শিক্ষক </span>
            </div>
          </div>
        </div>
      </div>

      <!-- MESSAGE 2 -->
      <div class="col-lg-6">
        <div class="message-card">
          <div class="message-image">
            <img
              src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=800&q=80"
              alt="অভিভাবক সদস্যের বাণী" />

            <div class="quote-icon">
              <i class="fa-solid fa-quote-left"></i>
            </div>
          </div>

          <div class="message-content">
            <h3>মোঃ রফিকুল ইসলাম</h3>

            <div class="designation">অভিভাবক সদস্য</div>

            <div class="message-divider"></div>

            <div class="message-text">
              <p>
                বর্তমান বিশ্বের সাথে তাল মিলিয়ে আমাদের শিক্ষার্থীদের জ্ঞান
                ও দক্ষতা অর্জনের পাশাপাশি সৎ, যোগ্য ও দেশপ্রেমিক নাগরিক
                হ হিসেবে গড়ে তোলা আমাদের সকলের দায়িত্ব।
              </p>

              <p>
                বিদ্যালয়ের সার্বিক উন্নয়নে শিক্ষক, অভিভাবক ও পরিচালনা
                পর্ষদের মধ্যে পারস্পরিক সহযোগিতা আরও বৃদ্ধি পাবে—এটাই আমাদের
                প্রত্যাশা।
              </p>
            </div>

            <div class="signature">
              <strong> মোঃ রফিকুল ইসলাম </strong>
              <span> অভিভাবক সদস্য </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>