
    <style>
   .history-section {
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
} /* ========================================================= INTRO CARD ========================================================= */
.history-intro {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 25px;
    box-shadow: 0 8px 25px rgba(15, 92, 76, 0.06);
}
.history-image {
    height: 100%;
    min-height: 330px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}
.history-image img {
    width: 100%;
    height: 100%;
    min-height: 330px;
    object-fit: cover;
}
.history-image::after {
    content: "";
    position: absolute;
    inset: 10px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    border-radius: 7px;
    pointer-events: none;
}
.history-content {
    padding: 5px 5px 5px 12px;
}
.history-content .small-title {
    color: var(--accent);
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
}
.history-content h3 {
    color: var(--primary);
    font-size: 23px;
    font-weight: 800;
    margin: 5px 0 15px;
}
.history-content p {
    color: #64736d;
    font-size: 12px;
    line-height: 2;
    text-align: justify;
    margin-bottom: 12px;
}
.history-highlight {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 18px;
}
.history-highlight-item {
    padding: 12px 8px;
    text-align: center;
    border-radius: 8px;
    background: #f4f9f7;
    border: 1px solid #e4efeb;
}
.history-highlight-item i {
    color: var(--accent);
    font-size: 16px;
    margin-bottom: 4px;
}
.history-highlight-item strong {
    display: block;
    color: var(--primary);
    font-size: 16px;
    font-weight: 800;
}
.history-highlight-item span {
    color: var(--muted);
    font-size: 9px;
}
.history-details {
    margin-top: 35px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 28px;
}
.history-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--border);
}
.history-heading .heading-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eaf4f1;
    color: var(--primary);
    border-radius: 8px;
}
.history-heading h3 {
    margin: 0;
    color: var(--primary);
    font-size: 19px;
    font-weight: 800;
}
.history-details p {
    color: #62716b;
    font-size: 12px;
    line-height: 2.05;
    text-align: justify;
    margin-bottom: 14px;
}
.history-quote {
    margin: 25px 0;
    padding: 20px 25px;
    background: linear-gradient(135deg, #f1f8f5, #fbfdfc);
    border-left: 4px solid var(--accent);
    border-radius: 0 9px 9px 0;
}
.history-quote i {
    color: var(--accent);
    font-size: 18px;
    margin-bottom: 6px;
}
.history-quote p {
    color: var(--primary);
    font-size: 13px;
    font-weight: 600;
    line-height: 1.9;
    margin: 0;
}
.timeline-section {
    margin-top: 38px;
}
.timeline-title {
    text-align: center;
    margin-bottom: 30px;
}
.timeline-title h3 {
    color: var(--primary);
    font-size: 22px;
    font-weight: 800;
    margin-bottom: 4px;
}
.timeline-title p {
    color: var(--muted);
    font-size: 10px;
    margin: 0;
}
.timeline {
    position: relative;
    max-width: 900px;
    margin: auto;
}
.timeline::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background: #dbe8e3;
    transform: translateX(-50%);
}
.timeline-item {
    width: 50%;
    padding: 0 35px 30px;
    position: relative;
}
.timeline-item:nth-child(odd) {
    left: 0;
    text-align: right;
}
.timeline-item:nth-child(even) {
    left: 50%;
    text-align: left;
}
.timeline-dot {
    position: absolute;
    top: 3px;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: var(--primary);
    border: 3px solid #fff;
    box-shadow: 0 0 0 2px var(--primary);
}
.timeline-item:nth-child(odd) .timeline-dot {
    right: -8px;
}
.timeline-item:nth-child(even) .timeline-dot {
    left: -8px;
}
.timeline-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 6px 20px rgba(15, 92, 76, 0.05);
}
.timeline-year {
    color: var(--accent);
    font-size: 12px;
    font-weight: 800;
}
.timeline-card h4 {
    color: var(--primary);
    font-size: 14px;
    font-weight: 800;
    margin: 3px 0 5px;
}
.timeline-card p {
    color: var(--muted);
    font-size: 10px;
    line-height: 1.8;
    margin: 0;
} /* ========================================================= RESPONSIVE ========================================================= */
@media (max-width: 991px) {
    .history-content {
        padding: 20px 0 0;
    }
    .timeline-item {
        padding-left: 30px;
        padding-right: 20px;
    }
}
@media (max-width: 767px) {
    .history-section {
        padding: 35px 0;
    }
    .history-intro {
        padding: 15px;
    }
    .history-image,
    .history-image img {
        min-height: 240px;
        height: 240px;
    }
    .history-content h3 {
        font-size: 20px;
    }
    .history-highlight {
        grid-template-columns: repeat(3, 1fr);
    }
    .history-details {
        padding: 18px;
    }
    .timeline::before {
        left: 9px;
        transform: none;
    }
    .timeline-item,
    .timeline-item:nth-child(even),
    .timeline-item:nth-child(odd) {
        width: 100%;
        left: 0;
        text-align: left;
        padding: 0 0 25px 32px;
    }
    .timeline-item:nth-child(odd) .timeline-dot,
    .timeline-item:nth-child(even) .timeline-dot {
        left: 2px;
        right: auto;
    }
}
@media (max-width: 480px) {
    .history-highlight {
        gap: 5px;
    }
    .history-highlight-item {
        padding: 9px 4px;
    }
    .history-highlight-item strong {
        font-size: 13px;
    }
    .history-highlight-item span {
        font-size: 7px;
    }
} /* ========================================================= VISION & MISSION ========================================================= */
.vision-mission-section {
    margin-top: 40px;
    padding: 50px 0;
    background: linear-gradient(180deg, #f4f9f7, #ffffff);
    border-top: 1px solid #e1ebe7;
    border-bottom: 1px solid #e1ebe7;
} /* ========================================================= VISION / MISSION CARD ========================================================= */
.vm-card {
    height: 100%;
    display: flex;
    gap: 18px;
    padding: 25px;
    background: #fff;
    border: 1px solid #dfe9e5;
    border-radius: 13px;
    box-shadow: 0 8px 25px rgba(15, 92, 76, 0.06);
    transition: 0.3s;
    position: relative;
    overflow: hidden;
}
.vm-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #0f5c4c;
}
.vm-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 30px rgba(15, 92, 76, 0.1);
}
.vm-icon {
    width: 55px;
    height: 55px;
    min-width: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: #eaf4f1;
    color: #0f5c4c;
    font-size: 21px;
}
.mission-card .vm-icon {
    background: #fff6e7;
    color: #d98b0b;
}
.vm-content {
    flex: 1;
}
.vm-label {
    display: block;
    color: #f5a623;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 0.5px;
}
.vm-content h3 {
    margin: 2px 0 10px;
    color: #0f5c4c;
    font-size: 19px;
    font-weight: 800;
}
.vm-content p {
    color: #65736e;
    font-size: 11px;
    line-height: 1.95;
    text-align: justify;
    margin-bottom: 9px;
}
.vm-content p:last-child {
    margin-bottom: 0;
} /* ========================================================= CORE VALUES ========================================================= */
.core-values {
    margin-top: 25px;
    padding: 25px;
    background: #fff;
    border: 1px solid #dfe9e5;
    border-radius: 13px;
    box-shadow: 0 8px 25px rgba(15, 92, 76, 0.05);
}
.core-values-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 16px;
    margin-bottom: 18px;
    border-bottom: 1px solid #e8efec;
}
.core-values-header span {
    color: #f5a623;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 0.5px;
}
.core-values-header h3 {
    margin: 2px 0 0;
    color: #0f5c4c;
    font-size: 19px;
    font-weight: 800;
}
.core-values-icon {
    width: 43px;
    height: 43px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    background: #0f5c4c;
    font-size: 16px;
} /* ========================================================= VALUE ITEM ========================================================= */
.value-item {
    height: 100%;
    padding: 17px 12px;
    text-align: center;
    background: #f7faf8;
    border: 1px solid #e5eeeb;
    border-radius: 9px;
    transition: 0.3s;
}
.value-item:hover {
    background: #fff;
    border-color: #cbded7;
    transform: translateY(-3px);
}
.value-icon {
    width: 40px;
    height: 40px;
    margin: 0 auto 8px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eaf4f1;
    color: #0f5c4c;
    font-size: 15px;
}
.value-item h4 {
    margin: 0 0 3px;
    color: #0f5c4c;
    font-size: 14px;
    font-weight: 800;
}
.value-item p {
    margin: 0;
    color: #7a8782;
    font-size: 9px;
    line-height: 1.7;
} /* ========================================================= MOBILE ========================================================= */
@media (max-width: 767px) {
    .vision-mission-section {
        margin-top: 25px;
        padding: 35px 0;
    }
    .vm-card {
        padding: 18px;
        gap: 12px;
    }
    .vm-icon {
        width: 45px;
        height: 45px;
        min-width: 45px;
        font-size: 17px;
    }
    .vm-content h3 {
        font-size: 16px;
    }
    .vm-content p {
        font-size: 10px;
        line-height: 1.85;
    }
    .core-values {
        padding: 16px;
    }
    .core-values-header h3 {
        font-size: 16px;
    }
}
@media (max-width: 480px) {
    .vm-card {
        display: block;
        text-align: left;
    }
    .vm-icon {
        margin-bottom: 10px;
    }
    .value-item {
        padding: 14px 7px;
    }
    .value-item h4 {
        font-size: 12px;
    }
    .value-item p {
        font-size: 8px;
    }
}


    </style>
 <section class="history-section">
    <div class="container">
        <!-- Title -->
        <div class="section-title">
            <div class="icon"><i class="fa-solid fa-school"></i></div>
            <h2>আমাদের বিদ্যালয়ের ইতিহাস</h2>
            <p>প্রতিষ্ঠা থেকে বর্তমান সময় পর্যন্ত আমাদের পথচলা</p>
        </div>
        <!-- ================================================= INTRO ================================================== -->
        <div class="history-intro">
            <div class="row g-4 align-items-center">
                <!-- Image -->
                <div class="col-lg-5">
                    <div class="history-image"><img src="images/school-history.jpg" alt="বিদ্যালয়ের ছবি" /></div>
                </div>
                <!-- Content -->
                <div class="col-lg-7">
                    <div class="history-content">
                        <span class="small-title"> আমাদের গৌরব </span>
                        <h3>একটি স্বপ্ন থেকে একটি প্রতিষ্ঠানে</h3>
                        <p>
                            আমাদের বিদ্যালয়টি এলাকার শিক্ষার প্রসার ও একটি আলোকিত প্রজন্ম গড়ে তোলার মহৎ উদ্দেশ্য নিয়ে
                            প্রতিষ্ঠিত হয়। প্রতিষ্ঠালগ্ন থেকেই বিদ্যালয়টি শিক্ষার্থীদের মানসম্মত শিক্ষা, নৈতিকতা,
                            শৃঙ্খলা ও মানবিক মূল্যবোধ বিকাশে গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে।
                        </p>
                        <p>
                            সময়ের সাথে সাথে বিদ্যালয়ের অবকাঠামো, শিক্ষার পরিবেশ এবং শিক্ষা কার্যক্রমে ব্যাপক পরিবর্তন
                            এসেছে। বর্তমানে বিদ্যালয়টি আধুনিক শিক্ষা পদ্ধতি ও প্রযুক্তির সমন্বয়ে শিক্ষার্থীদের
                            ভবিষ্যতের জন্য প্রস্তুত করে চলেছে।
                        </p>
                        <!-- Highlights -->
                        <div class="history-highlight">
                            <div class="history-highlight-item">
                                <i class="fa-solid fa-calendar-check"></i> <strong> ১৯৬৫ </strong>
                                <span> প্রতিষ্ঠা </span>
                            </div>
                            <div class="history-highlight-item">
                                <i class="fa-solid fa-user-graduate"></i> <strong> ৫০০০+ </strong>
                                <span> প্রাক্তন শিক্ষার্থী </span>
                            </div>
                            <div class="history-highlight-item">
                                <i class="fa-solid fa-award"></i> <strong> ৬০+ </strong> <span> বছরের ঐতিহ্য </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================= DETAILED HISTORY ================================================== -->
        <div class="history-details">
            <div class="history-heading">
                <div class="heading-icon"><i class="fa-solid fa-book-open"></i></div>
                <h3>প্রতিষ্ঠার ইতিহাস</h3>
            </div>
            <p>
                বিদ্যালয় প্রতিষ্ঠার পেছনে রয়েছে এলাকার শিক্ষানুরাগী ব্যক্তিবর্গের দীর্ঘদিনের প্রচেষ্টা ও একটি সুন্দর
                ভবিষ্যৎ গড়ার স্বপ্ন। সে সময় এলাকার শিক্ষার্থীদের উচ্চশিক্ষার সুযোগ ছিল সীমিত। ফলে স্থানীয় গণ্যমান্য
                ব্যক্তি, শিক্ষাবিদ ও সমাজসেবীদের উদ্যোগে একটি আধুনিক শিক্ষা প্রতিষ্ঠান প্রতিষ্ঠার পরিকল্পনা গ্রহণ করা
                হয়।
            </p>
            <p>
                সকলের সম্মিলিত প্রচেষ্টায় বিদ্যালয়টি প্রতিষ্ঠিত হয়। প্রথম দিকে সীমিত সংখ্যক শিক্ষার্থী ও শিক্ষক নিয়ে
                শিক্ষা কার্যক্রম শুরু হলেও ধীরে ধীরে বিদ্যালয়ের সুনাম চারদিকে ছড়িয়ে পড়ে। শিক্ষার্থীদের ভালো ফলাফল
                এবং শিক্ষকদের আন্তরিক প্রচেষ্টার কারণে বিদ্যালয়টি এলাকার একটি গুরুত্বপূর্ণ শিক্ষা প্রতিষ্ঠানে পরিণত
                হয়।
            </p>
            <p>
                পরবর্তীতে বিদ্যালয়ের অবকাঠামো উন্নয়ন, নতুন ভবন নির্মাণ, বিজ্ঞানাগার, কম্পিউটার ল্যাব, লাইব্রেরি এবং
                অন্যান্য সুবিধা যুক্ত করা হয়। শিক্ষার পাশাপাশি খেলাধুলা, সাংস্কৃতিক কর্মকাণ্ড, বিতর্ক, বিজ্ঞান মেলা ও
                বিভিন্ন সামাজিক কার্যক্রমেও শিক্ষার্থীদের অংশগ্রহণ নিশ্চিত করা হয়।
            </p>
            <!-- Quote -->
            <div class="history-quote">
                <i class="fa-solid fa-quote-left"></i>
                <p>
                    “জ্ঞান অর্জনের মাধ্যমে একজন শিক্ষার্থী শুধু নিজের ভবিষ্যৎ গড়ে না, বরং একটি সুন্দর সমাজ ও দেশ গঠনে
                    গুরুত্বপূর্ণ ভূমিকা রাখে।”
                </p>
            </div>
            <p>
                বর্তমান সময়ে বিদ্যালয়টি আধুনিক শিক্ষা ব্যবস্থার সাথে তাল মিলিয়ে এগিয়ে যাচ্ছে। ডিজিটাল প্রযুক্তির
                ব্যবহার, মাল্টিমিডিয়া ক্লাসরুম, অনলাইন কার্যক্রম এবং আধুনিক শিক্ষা উপকরণের মাধ্যমে শিক্ষার্থীদের শেখার
                পরিবেশকে আরও সমৃদ্ধ করা হয়েছে।
            </p>
            <p>
                আমাদের লক্ষ্য শুধু পরীক্ষায় ভালো ফলাফল অর্জন নয়; বরং শিক্ষার্থীদের সৎ, দক্ষ, আত্মবিশ্বাসী, মানবিক ও
                দেশপ্রেমিক নাগরিক হিসেবে গড়ে তোলা। এই লক্ষ্যকে সামনে রেখে বিদ্যালয়ের শিক্ষক, কর্মচারী, পরিচালনা পর্ষদ
                ও অভিভাবকরা সম্মিলিতভাবে কাজ করে যাচ্ছেন।
            </p>
        </div>
        <!-- ================================================= TIMELINE ================================================== -->
        <div class="timeline-section">
            <div class="timeline-title">
                <h3>আমাদের পথচলা</h3>
                <p>গুরুত্বপূর্ণ মাইলফলকসমূহ</p>
            </div>
            <div class="timeline">
                <!-- 1965 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <span class="timeline-year"> ১৯৬৫ </span>
                        <h4>বিদ্যালয় প্রতিষ্ঠা</h4>
                        <p>এলাকার শিক্ষানুরাগী ব্যক্তিদের উদ্যোগে বিদ্যালয়ের যাত্রা শুরু।</p>
                    </div>
                </div>
                <!-- 1975 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <span class="timeline-year"> ১৯৭৫ </span>
                        <h4>নতুন ভবন নির্মাণ</h4>
                        <p>শিক্ষার্থীদের জন্য নতুন শ্রেণিকক্ষ ও অবকাঠামো তৈরি করা হয়।</p>
                    </div>
                </div>
                <!-- 1990 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <span class="timeline-year"> ১৯৯০ </span>
                        <h4>বিজ্ঞান ও লাইব্রেরি</h4>
                        <p>বিজ্ঞানাগার ও সমৃদ্ধ লাইব্রেরি কার্যক্রম শুরু হয়।</p>
                    </div>
                </div>
                <!-- 2005 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <span class="timeline-year"> ২০০৫ </span>
                        <h4>কম্পিউটার ল্যাব</h4>
                        <p>শিক্ষার্থীদের প্রযুক্তিনির্ভর শিক্ষা নিশ্চিত করতে কম্পিউটার ল্যাব চালু করা হয়।</p>
                    </div>
                </div>
                <!-- 2020 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <span class="timeline-year"> ২০২০ </span>
                        <h4>ডিজিটাল শিক্ষা কার্যক্রম</h4>
                        <p>আধুনিক প্রযুক্তি ও ডিজিটাল শিক্ষা কার্যক্রম যুক্ত করা হয়।</p>
                    </div>
                </div>
                <!-- Present -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <span class="timeline-year"> বর্তমান </span>
                        <h4>আধুনিক শিক্ষার পথে</h4>
                        <p>মানসম্মত শিক্ষা ও মানবিক মূল্যবোধ নিয়ে বিদ্যালয় এগিয়ে চলছে।</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================================= VISION & MISSION ========================================================= -->
<section class="vision-mission-section">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">
            <div class="icon"><i class="fa-solid fa-eye"></i></div>
            <h2>আমাদের দৃষ্টিভঙ্গি ও মূল্যবোধ</h2>
            <p>একটি সুন্দর, নৈতিক ও আলোকিত প্রজন্ম গড়ার প্রত্যয়</p>
        </div>
        <div class="row g-4">
            <!-- ================================================= VISION ================================================== -->
            <div class="col-lg-6">
                <div class="vm-card vision-card">
                    <div class="vm-icon"><i class="fa-solid fa-eye"></i></div>
                    <div class="vm-content">
                        <span class="vm-label"> OUR VISION </span>
                        <h3>আমাদের দৃষ্টিভঙ্গি</h3>
                        <p>
                            জ্ঞান, দক্ষতা, নৈতিকতা ও মানবিক মূল্যবোধে সমৃদ্ধ এমন একটি প্রজন্ম গড়ে তোলা, যারা নিজেদের
                            উন্নয়নের পাশাপাশি সমাজ ও দেশের কল্যাণে গুরুত্বপূর্ণ ভূমিকা রাখবে।
                        </p>
                        <p>
                            আধুনিক শিক্ষা ও প্রযুক্তির সর্বোত্তম ব্যবহার নিশ্চিত করে শিক্ষার্থীদের সৃজনশীল,
                            আত্মনির্ভরশীল এবং ভবিষ্যৎ চ্যালেঞ্জ মোকাবিলায় সক্ষম করে গড়ে তোলাই আমাদের দীর্ঘমেয়াদি
                            লক্ষ্য।
                        </p>
                    </div>
                </div>
            </div>
            <!-- ================================================= MISSION ================================================== -->
            <div class="col-lg-6">
                <div class="vm-card mission-card">
                    <div class="vm-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <div class="vm-content">
                        <span class="vm-label"> OUR MISSION </span>
                        <h3>আমাদের লক্ষ্য</h3>
                        <p>
                            প্রতিটি শিক্ষার্থীর সুপ্ত প্রতিভা ও সম্ভাবনাকে বিকশিত করার জন্য একটি নিরাপদ, আনন্দময় ও
                            শিক্ষাবান্ধব পরিবেশ তৈরি করা।
                        </p>
                        <p>
                            মানসম্মত শিক্ষা, প্রযুক্তিনির্ভর শিক্ষা পদ্ধতি, সহশিক্ষা কার্যক্রম এবং নৈতিক শিক্ষার মাধ্যমে
                            শিক্ষার্থীদের একজন আদর্শ নাগরিক হিসেবে গড়ে তোলা আমাদের প্রধান লক্ষ্য।
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================= CORE VALUES ================================================== -->
        <div class="core-values">
            <div class="core-values-header">
                <div>
                    <span> OUR CORE VALUES </span>
                    <h3>আমাদের মূল মূল্যবোধ</h3>
                </div>
                <div class="core-values-icon"><i class="fa-solid fa-heart"></i></div>
            </div>
            <div class="row g-3">
                <!-- Value 01 -->
                <div class="col-lg-3 col-6">
                    <div class="value-item">
                        <div class="value-icon"><i class="fa-solid fa-book-open"></i></div>
                        <h4>জ্ঞান</h4>
                        <p>জ্ঞান অর্জন ও জ্ঞান ভাগ করে নেওয়া।</p>
                    </div>
                </div>
                <!-- Value 02 -->
                <div class="col-lg-3 col-6">
                    <div class="value-item">
                        <div class="value-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                        <h4>সততা</h4>
                        <p>সত্য ও ন্যায়ের পথে চলা।</p>
                    </div>
                </div>
                <!-- Value 03 -->
                <div class="col-lg-3 col-6">
                    <div class="value-item">
                        <div class="value-icon"><i class="fa-solid fa-people-group"></i></div>
                        <h4>সহযোগিতা</h4>
                        <p>পারস্পরিক সহযোগিতায় এগিয়ে চলা।</p>
                    </div>
                </div>
                <!-- Value 04 -->
                <div class="col-lg-3 col-6">
                    <div class="value-item">
                        <div class="value-icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                        <h4>মানবিকতা</h4>
                        <p>মানুষের প্রতি শ্রদ্ধা ও সহমর্মিতা।</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
