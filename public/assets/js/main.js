
    document.addEventListener("DOMContentLoaded", function () {
        const collapseBtn = document.getElementById("sidebarCollapseBtn");

        if (!collapseBtn) return;

        collapseBtn.addEventListener("click", function () {
            document.body.classList.toggle("sidebar-collapsed");

            const isCollapsed = document.body.classList.contains("sidebar-collapsed");

            const icon = collapseBtn.querySelector("i");

            if (isCollapsed) {
                icon.classList.remove("fa-bars-staggered");

                icon.classList.add("fa-bars");

                collapseBtn.setAttribute("aria-label", "Expand Sidebar");

                collapseBtn.setAttribute("title", "Expand Sidebar");
            } else {
                icon.classList.remove("fa-bars");

                icon.classList.add("fa-bars-staggered");

                collapseBtn.setAttribute("aria-label", "Minimize Sidebar");

                collapseBtn.setAttribute("title", "Minimize Sidebar");
            }
        });
    });

$(document).ready(function () {
    $(".select2").select2({
        width: "100%",

        minimumResultsForSearch: 0,

        allowClear: false,
    });
});

/* =====================================================
       SIDEBAR ELEMENTS
    ====================================================== */

const sidebar = document.getElementById("sidebar");

const menuBtn = document.getElementById("mobileMenuBtn");

const closeBtn = document.getElementById("mobileSidebarClose");

const overlay = document.getElementById("sidebarOverlay");

/* =====================================================
       OPEN SIDEBAR
    ====================================================== */

function openSidebar() {
    sidebar.classList.add("mobile-open");

    overlay.classList.add("show");

    document.body.style.overflow = "hidden";

    menuBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
}

/* =====================================================
       CLOSE SIDEBAR
    ====================================================== */

function closeSidebar() {
    sidebar.classList.remove("mobile-open");

    overlay.classList.remove("show");

    document.body.style.overflow = "";

    menuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
}

/* =====================================================
       MOBILE MENU BUTTON
    ====================================================== */

menuBtn.addEventListener("click", function () {
    if (sidebar.classList.contains("mobile-open")) {
        closeSidebar();
    } else {
        openSidebar();
    }
});

/* =====================================================
       SIDEBAR X BUTTON
    ====================================================== */

closeBtn.addEventListener("click", function () {
    closeSidebar();
});

/* =====================================================
       OVERLAY CLOSE
    ====================================================== */

overlay.addEventListener("click", function () {
    closeSidebar();
});

/* =====================================================
       ESC CLOSE
    ====================================================== */

document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
        closeSidebar();
    }
});

/* =====================================================
       CLOSE SIDEBAR AFTER MENU CLICK
    ====================================================== */

document.querySelectorAll(".sidebar a").forEach(function (item) {
    item.addEventListener("click", function () {
        if (window.innerWidth < 992) {
            closeSidebar();
        }
    });
});

/* =====================================================
       PAGE HEADER
    ====================================================== */

function updatePage(title, description, icon) {
    document.getElementById("pageTitle").innerText = title;

    document.getElementById("pageDescription").innerText = description;

    document.getElementById("breadcrumbTitle").innerText = title;

    document.getElementById("pageIcon").className = "fa-solid " + icon;
}

/* =====================================================
       SUBMENU
    ====================================================== */

document.querySelectorAll(".submenu a").forEach(function (link) {
    link.addEventListener("click", function (event) {
        const page = this.dataset.page;

        if (!page) {
            return;
        }

        event.preventDefault();

        document.querySelectorAll(".submenu a").forEach(function (item) {
            item.classList.remove("active");
        });

        this.classList.add("active");

        if (page === "users") {
            updatePage("Users", "Manage and monitor all users", "fa-users");

            document.getElementById("userListSection").scrollIntoView({
                behavior: "smooth",

                block: "start",
            });
        }

        if (page === "add-user") {
            updatePage("Add User", "Create a new user account", "fa-user-plus");

            scrollToForm();
        }

        if (page === "roles") {
            updatePage("Roles & Permissions", "Manage user roles and permissions", "fa-shield-halved");
        }
    });
});

/* =====================================================
       DASHBOARD
    ====================================================== */



function scrollToForm() {
    const form = document.getElementById("addUserForm");

    if (form) {
        form.scrollIntoView({
            behavior: "smooth",

            block: "start",
        });
    }
}

const userForm = document.getElementById("userForm");

const firstName = document.getElementById("firstName");

const firstNameError = document.getElementById("firstNameError");

/* REMOVE ERROR WHILE TYPING */

firstName.addEventListener("input", function () {
    if (this.value.trim() !== "") {
        this.classList.remove("input-error");

        firstNameError.style.display = "none";
    }
});

/* FORM SUBMIT */

userForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const value = firstName.value.trim();

    /* EMPTY */

    if (value === "") {
        firstName.classList.add("input-error");

        firstNameError.style.display = "flex";

        firstName.focus();

        return;
    }


    firstName.classList.remove("input-error");

    firstNameError.style.display = "none";

    alert("User created successfully!");
});

userForm.addEventListener("reset", function () {
    setTimeout(function () {
        firstName.classList.remove("input-error");

        firstNameError.style.display = "none";
    }, 10);
});

window.addEventListener("resize", function () {
    if (window.innerWidth >= 992) {
        closeSidebar();
    }
});
