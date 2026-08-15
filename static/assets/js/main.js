// top header (Null Safe)
(function () {
    const msgs = document.querySelectorAll(".topbar-msg");
    const wrap = document.getElementById("topbarWrap");
    const topPrev = document.getElementById("topPrev");
    const topNext = document.getElementById("topNext");
    let idx = 0;
    let timer = null;

    function show(newIdx) {
        if (!msgs.length) return;
        msgs[idx]?.classList.remove("active");
        idx = (newIdx + msgs.length) % msgs.length;
        msgs[idx]?.classList.add("active");
    }

    function start() {
        if (!msgs.length) return;
        timer = setInterval(() => show(idx + 1), 3200);
    }

    function stop() {
        clearInterval(timer);
    }

    if (wrap && msgs.length) {
        start();
        wrap.addEventListener("mouseenter", stop);
        wrap.addEventListener("mouseleave", start);
    }

    if (topPrev) {
        topPrev.addEventListener("click", () => show(idx - 1));
    }

    if (topNext) {
        topNext.addEventListener("click", () => show(idx + 1));
    }
})();

// Scroll Buttons (Null Safe)
const catScroll = document.getElementById("catScroll");
const catPrev = document.getElementById("catPrev");
const catNext = document.getElementById("catNext");

if (catNext && catScroll) {
    catNext.addEventListener("click", () => {
        catScroll.scrollBy({ left: 250, behavior: "smooth" });
    });
}

if (catPrev && catScroll) {
    catPrev.addEventListener("click", () => {
        catScroll.scrollBy({ left: -250, behavior: "smooth" });
    });
}

// Cart & Wishlist Interaction
document.addEventListener("DOMContentLoaded", () => {
    const buyButtons = document.querySelectorAll(".add-to-cart");
    const toast = document.getElementById("cart-toast");
    const toastItemName = document.getElementById("toast-item-name");
    let cartItems = [];

    buyButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            const card = e.target.closest(".product-card");
            if (!card) return;

            const productName = card.getAttribute("data-name") || "Product";
            const productPrice = card.getAttribute("data-price") || "";

            cartItems.push({ name: productName, price: productPrice });

            if (toast && toastItemName) {
                toastItemName.textContent = `${productName} (${productPrice})`;
                toast.classList.add("show");

                setTimeout(() => {
                    toast.classList.remove("show");
                }, 3000);
            }
        });
    });

    const wishButtons = document.querySelectorAll(".wish-btn");
    wishButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            if (btn.classList.contains("active")) {
                btn.classList.remove("active");
                btn.style.background = "rgba(255, 255, 255, 0.95)";
                btn.style.color = "var(--maroon)";
            } else {
                btn.classList.add("active");
                btn.style.background = "var(--maroon)";
                btn.style.color = "#fff";
            }
        });
    });
});

$(document).ready(function () {
  $(document).on('click', '#mobileMenuCloseBtn', function (e) {
    e.preventDefault();
    var bsCollapse = new bootstrap.Collapse(document.getElementById('mainNav'), {
      toggle: false
    });
    bsCollapse.hide();
  });
});
/*** ==============================================
 * ================ Start Contact Us  ========================
 * ===============================================
 */

        toastr.options = {
          "closeButton": true,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "timeOut": "4000"
        };

        const BASE_URL = $('#BASEURL').val() || '';

        $('#contactForm').on('submit', function (e) {
          e.preventDefault();

          let formData = $(this).serialize();
          let submitBtn = $('#submitBtn');

          submitBtn.prop('disabled', true).html('পাঠানো হচ্ছে... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');

          $.ajax({
            url: BASE_URL + "home/send_message",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function (response) {
              if (response.status === 'success') {
                toastr.success(response.message);
                $('#contactForm')[0].reset();
              } else {
                toastr.error(response.message);
              }
              submitBtn.prop('disabled', false).html('মেসেজ পাঠান <i class="bi bi-send-fill"></i>');
            },
            error: function () {
              toastr.error('কোথাও কোনো সমস্যা হয়েছে। দয়া করে আবার চেষ্টা করুন।');
              submitBtn.prop('disabled', false).html('মেসেজ পাঠান <i class="bi bi-send-fill"></i>');
            }
          });
        });
     
/*** ==============================================
 * ================ End  Contact Us  ========================
 * ===============================================
 */