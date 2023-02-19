var root_html = document.querySelector("html");

//if cookie dark mode is enabled
if (document.cookie.indexOf("dark_mode=true") >= 0) {
    root_html.classList.add("dark");
    document.querySelector("[dark-toggle]").checked = true;
}

var pageName = window.location.pathname.split("/").pop().split(".")[0];
var fixedPlugin = document.querySelector("[fixed-plugin]");
var fixedPluginButton = document.querySelector("[fixed-plugin-button]");
var fixedPluginButtonNav = document.querySelector("[fixed-plugin-button-nav]");
var fixedPluginCard = document.querySelector("[fixed-plugin-card]");
var fixedPluginCloseButton = document.querySelector("[fixed-plugin-close-button]");
var navbar = document.querySelector("[navbar-main]");
var buttonNavbarFixed = document.querySelector("[navbar-fixed-toggle]");
var sidenav = document.querySelector("aside");
var sidenav_icons = sidenav.querySelectorAll("li a div");
var sidenav_target = "../pages/" + pageName + ".html";
var whiteBtn = document.querySelector("[transparent-style-btn]");
var darkBtn = document.querySelector("[white-style-btn]");
var non_active_style = ["bg-none", "bg-transparent", "text-blue-500", "border-blue-500"];
var active_style = ["bg-gradient-to-tl", "from-blue-500", "to-violet-500", "bg-blue-500", "text-white", "border-transparent"];
var white_sidenav_classes = ["bg-white"];
var black_sidenav_classes = ["bg-slate-850"];
var sidenav_highlight = document.querySelector("a[active_primary]");
const white_elements = navbar.querySelectorAll(".text-white");
const white_bg_elements = navbar.querySelectorAll("a[aria-expanded='false'] i.bg-white");
const white_before_elements = navbar.querySelectorAll(".before\\:text-white");
if (pageName != "rtl-page") {
    fixedPluginButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });
    fixedPluginButtonNav.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });
    fixedPluginCloseButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });
    window.addEventListener("click", function (e) {
        if (!fixedPlugin.contains(e.target) && !fixedPluginButton.contains(e.target) && !fixedPluginButtonNav.contains(e.target)) {
            if (fixedPluginCard.classList.contains("right-0")) {
                fixedPluginCloseButton.click();
            }
        }
    });
} else {
    fixedPluginButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });
    fixedPluginButtonNav.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });
    fixedPluginCloseButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });
    window.addEventListener("click", function (e) {
        if (!fixedPlugin.contains(e.target) && !fixedPluginButton.contains(e.target) && !fixedPluginButtonNav.contains(e.target)) {
            if (fixedPluginCard.classList.contains("left-0")) {
                fixedPluginCloseButton.click();
            }
        }
    });
}

function sidebarColor(a) {
    var color = a.getAttribute("data-color");
    var parent = a.parentElement.children;
    var activeColor;
    var activeSidenavIconColorClass;
    var checkedSidenavIconColor = "bg-" + color + "-500/30";
    var sidenavIcon = document.querySelector("[active_primary]");
    for (var i = 0; i < parent.length; i++) {
        if (parent[i].hasAttribute("active-color")) {
            activeColor = parent[i].getAttribute("data-color");
            parent[i].classList.toggle("border-white");
            parent[i].classList.toggle("border-slate-700");
            activeSidenavIconColorClass = "bg-" + activeColor + "-500/30";
        }
        parent[i].removeAttribute("active-color");
    }
    var att = document.createAttribute("active-color");
    a.setAttributeNode(att);
    a.classList.toggle("border-white");
    a.classList.toggle("border-slate-700");
    sidenavIcon.classList.remove(activeSidenavIconColorClass);
    sidenavIcon.classList.add(checkedSidenavIconColor);
}

whiteBtn.addEventListener("click", function () {
    const active_style_attr = document.createAttribute("active-style");
    if (!this.hasAttribute(active_style_attr)) {
        this.setAttributeNode(active_style_attr);
        non_active_style.forEach((style_class) => {
            this.classList.remove(style_class);
        });
        active_style.forEach((style_class) => {
            this.classList.add(style_class);
        });
        darkBtn.removeAttribute(active_style_attr);
        active_style.forEach((style_class) => {
            darkBtn.classList.remove(style_class);
        });
        non_active_style.forEach((style_class) => {
            darkBtn.classList.add(style_class);
        });
        black_sidenav_classes.forEach((style_class) => {
            sidenav.classList.remove(style_class);
        });
        white_sidenav_classes.forEach((style_class) => {
            sidenav.classList.add(style_class);
        });
        sidenav.classList.remove("dark");
    }
});
darkBtn.addEventListener("click", function () {
    const active_style_attr = document.createAttribute("active-style");
    if (!this.hasAttribute(active_style_attr)) {
        this.setAttributeNode(active_style_attr);
        non_active_style.forEach((style_class) => {
            this.classList.remove(style_class);
        });
        active_style.forEach((style_class) => {
            this.classList.add(style_class);
        });
        whiteBtn.removeAttribute(active_style_attr);
        active_style.forEach((style_class) => {
            whiteBtn.classList.remove(style_class);
        });
        non_active_style.forEach((style_class) => {
            whiteBtn.classList.add(style_class);
        });
        white_sidenav_classes.forEach((style_class) => {
            sidenav.classList.remove(style_class);
        });
        black_sidenav_classes.forEach((style_class) => {
            sidenav.classList.add(style_class);
        });
        sidenav.classList.add("dark");
    }
});

function fixNav(white_elems, white_bg_elems, white_before_elems) {
    navbar.setAttribute("navbar-scroll", "true");
    navbar.classList.add("sticky", "top-[1%]", "backdrop-saturate-200", "backdrop-blur-2xl", "bg-white/80", "shadow-blur", "z-110", "dark:bg-slate-850/80", "dark:shadow-dark-blur");
    white_elems.forEach(element => {
        element.classList.remove("text-white")
        element.classList.add("dark:text-white")
    });
    white_bg_elems.forEach(element => {
        element.classList.remove("bg-white")
        element.classList.add("dark:bg-white")
        element.classList.add("bg-slate-500")
    });
    white_before_elems.forEach(element => {
        element.classList.add("dark:before:text-white")
        element.classList.remove("before:text-white")
    });
}

function unfixNav(white_elems, white_bg_elems, white_before_elems) {
    navbar.setAttribute("navbar-scroll", "false");
    navbar.classList.remove("sticky", "top-[1%]", "backdrop-saturate-200", "backdrop-blur-2xl", "bg-white/80", "shadow-blur", "z-110", "dark:bg-slate-850/80", "dark:shadow-dark-blur");
    white_elems.forEach(element => {
        element.classList.add("text-white")
        element.classList.remove("dark:text-white")
    });
    white_bg_elems.forEach(element => {
        element.classList.add("bg-white")
        element.classList.remove("dark:bg-white")
        element.classList.remove("bg-slate-500")
    });
    white_before_elems.forEach(element => {
        element.classList.remove("dark:before:text-white")
        element.classList.add("before:text-white")
    });
}

if (navbar) {
    if (navbar.getAttribute("navbar-scroll") == "true") {
        buttonNavbarFixed.setAttribute("checked", "true");
    }
    //check cookie
    if (document.cookie.indexOf("navbar-fixed=true") >= 0) {
        buttonNavbarFixed.setAttribute("checked", "true");
        fixNav(white_elements, white_bg_elements, white_before_elements);
    }else if (document.cookie.indexOf("navbar-fixed=false") >= 0) {
        buttonNavbarFixed.removeAttribute("checked");
        unfixNav(white_elements, white_bg_elements, white_before_elements);
    }

    buttonNavbarFixed.addEventListener("change", function () {
        if (this.checked) {
            fixNav(white_elements, white_bg_elements, white_before_elements);
        } else {
            unfixNav(white_elements, white_bg_elements, white_before_elements);
        }
        //set cookie
        document.cookie = "navbar-fixed=" + this.checked + ";path=/";
    });
} else {
    buttonNavbarFixed.setAttribute("disabled", "true");
}
var sidenav = document.querySelector("aside");
var mini_sidenav_burger = document.querySelector("[mini-sidenav-burger]");
var burger_mini = mini_sidenav_burger.firstElementChild;
var top_bread_mini = burger_mini.firstElementChild;
var main = document.querySelector("main");
if (!main) {
    var main = document.querySelector("[main-content]");
}
var bottom_bread_mini = burger_mini.lastElementChild;
var normal_spans = sidenav.querySelectorAll("span:not(.opacity-0)");
var mini_spans = sidenav.querySelectorAll("span.opacity-0");
var primary_lists = sidenav.querySelectorAll("ul.ml-6");
var secondary_lists = sidenav.querySelectorAll("ul.flex-col.pl-0");
var primary_anchors = sidenav.querySelectorAll("a[collapse_trigger='primary']");
var sidenav_card = sidenav.querySelector("[sidenav-card]");
var mini_sidenav_toggle = document.querySelector("[sidenav-mini-toggle]");
mini_sidenav_burger.addEventListener("click", function (e) {
    mini_sidenav_toggle.click();
});
mini_sidenav_toggle.addEventListener("change", toggle_sidenav_mini);

function toggle_sidenav_mini() {
    if (pageName != "rtl-page") {
        if (sidenav.getAttribute("mini") == "true") {
            normal_sidenav();
            sidenav.setAttribute("mini", "false");
        } else {
            mini_sidenav();
            sidenav.setAttribute("mini", "true");
        }
    } else {
        if (sidenav.getAttribute("mini") == "true") {
            normal_sidenav_rtl();
            sidenav.setAttribute("mini", "false");
        } else {
            mini_sidenav_rtl();
            sidenav.setAttribute("mini", "true");
        }
    }
}

function mini_sidenav() {
    sidenav.classList.add("max-w-24");
    sidenav.classList.remove("max-w-64");
    sidenav.classList.add("overflow-hidden");
    sidenav.classList.remove("overflow-y-auto");
    main.classList.add("xl:ml-30");
    main.classList.remove("xl:ml-68");
    primary_anchors.forEach((primary_anchor) => {
        primary_anchor.classList.remove("after:content-['\\f107']");
    });
    primary_lists.forEach((primary_list) => {
        primary_list.classList.add("pl-0", "ml-0");
        primary_list.classList.remove("pl-4", "ml-6");
    });
    secondary_lists.forEach((secondary_list) => {
        secondary_list.classList.add("ml-0");
    });
    normal_spans.forEach((normal_span) => {
        normal_span.classList.add("opacity-0");
        normal_span.classList.add("max-w-0");
        normal_span.classList.remove("opacity-100");
        if (normal_span.previousElementSibling.tagName.toLowerCase() == "span") {
            normal_span.parentElement.classList.add("before:content-[none]");
            normal_span.parentElement.classList.add("ml-2");
            normal_span.parentElement.classList.remove("before:content-['']");
            normal_span.parentElement.classList.remove("ml-5.4");
        }
    });
    mini_spans.forEach((mini_span) => {
        mini_span.classList.remove("opacity-0");
        mini_span.classList.add("ml-0.75");
        mini_span.classList.add("min-w-7");
        mini_span.classList.add("opacity-100");
    });
    sidenav_card.classList.add("hidden");
    top_bread_mini.classList.remove("translate-x-[5px]");
    bottom_bread_mini.classList.remove("translate-x-[5px]");
}

function normal_sidenav() {
    sidenav.classList.add("max-w-64");
    sidenav.classList.remove("max-w-24");
    main.classList.add("xl:ml-68");
    main.classList.remove("xl:ml-30");
    sidenav_card.classList.remove("hidden");
    primary_anchors.forEach((primary_anchor) => {
        primary_anchor.classList.add("after:content-['\\f107']");
    });
    mini_spans.forEach((mini_span) => {
        mini_span.classList.remove("opacity-100");
        mini_span.classList.remove("min-w-7");
        mini_span.classList.remove("ml-0.75");
        mini_span.classList.add("opacity-0");
    });
    primary_lists.forEach((primary_list) => {
        primary_list.classList.remove("pl-0", "ml-0");
        primary_list.classList.add("pl-4", "ml-6");
    });
    secondary_lists.forEach((secondary_list) => {
        secondary_list.classList.remove("ml-0");
    });
    normal_spans.forEach((normal_span) => {
        normal_span.classList.remove("opacity-0");
        normal_span.classList.add("opacity-100");
        normal_span.classList.remove("max-w-0");
        if (normal_span.previousElementSibling.tagName.toLowerCase() == "span") {
            normal_span.parentElement.classList.remove("before:content-[none]");
            normal_span.parentElement.classList.add("before:content-['']");
            normal_span.parentElement.classList.add("ml-5.4");
            normal_span.parentElement.classList.remove("ml-2");
        } else if (normal_span.previousElementSibling.tagName.toLowerCase() != "img") {
        }
        normal_span.classList.add("opacity-100");
    });
    top_bread_mini.classList.add("translate-x-[5px]");
    bottom_bread_mini.classList.add("translate-x-[5px]");
    sidenav.classList.remove("overflow-hidden");
    sidenav.classList.add("overflow-y-auto");
}

function mini_sidenav_rtl() {
    sidenav.classList.add("max-w-24");
    sidenav.classList.remove("max-w-64");
    sidenav.classList.add("overflow-hidden");
    sidenav.classList.remove("overflow-y-auto");
    main.classList.add("xl:mr-30");
    main.classList.remove("xl:mr-68");
    primary_anchors.forEach((primary_anchor) => {
        primary_anchor.classList.remove("after:content-['\\f107']");
    });
    primary_lists.forEach((primary_list) => {
        primary_list.classList.add("pr-0", "mr-0");
        primary_list.classList.remove("pr-4", "mr-6");
    });
    secondary_lists.forEach((secondary_list) => {
        secondary_list.classList.add("mr-0");
    });
    normal_spans.forEach((normal_span) => {
        normal_span.classList.add("opacity-0");
        normal_span.classList.add("max-w-0");
        normal_span.classList.remove("opacity-100");
        if (normal_span.previousElementSibling.tagName.toLowerCase() == "span") {
            normal_span.parentElement.classList.add("before:content-[none]");
            normal_span.parentElement.classList.add("mr-4");
            normal_span.parentElement.classList.remove("before:content-['']");
            normal_span.parentElement.classList.remove("mr-5.4");
        }
    });
    mini_spans.forEach((mini_span) => {
        mini_span.classList.remove("opacity-0");
        mini_span.classList.add("mr-0.6");
        mini_span.classList.add("min-w-7");
        mini_span.classList.add("opacity-100");
    });
    sidenav_card.classList.add("hidden");
    top_bread_mini.classList.remove("-translate-x-[5px]");
    bottom_bread_mini.classList.remove("-translate-x-[5px]");
}

function normal_sidenav_rtl() {
    sidenav.classList.add("max-w-64");
    sidenav.classList.remove("max-w-24");
    main.classList.add("xl:mr-68");
    main.classList.remove("xl:mr-30");
    sidenav_card.classList.remove("hidden");
    primary_anchors.forEach((primary_anchor) => {
        primary_anchor.classList.add("after:content-['\\f107']");
    });
    mini_spans.forEach((mini_span) => {
        mini_span.classList.remove("opacity-100");
        mini_span.classList.remove("min-w-7");
        mini_span.classList.remove("mr-0.6");
        mini_span.classList.add("opacity-0");
    });
    primary_lists.forEach((primary_list) => {
        primary_list.classList.remove("pr-0", "mr-0");
        primary_list.classList.add("pr-4", "mr-6");
    });
    secondary_lists.forEach((secondary_list) => {
        secondary_list.classList.remove("mr-0");
    });
    normal_spans.forEach((normal_span) => {
        normal_span.classList.remove("opacity-0");
        normal_span.classList.add("opacity-100");
        normal_span.classList.remove("max-w-0");
        if (normal_span.previousElementSibling.tagName.toLowerCase() == "span") {
            normal_span.parentElement.classList.remove("before:content-[none]");
            normal_span.parentElement.classList.add("before:content-['']");
            normal_span.parentElement.classList.add("mr-5.4");
            normal_span.parentElement.classList.remove("mr-4");
        } else if (normal_span.previousElementSibling.tagName.toLowerCase() != "img") {
        }
        normal_span.classList.add("opacity-100");
    });
    top_bread_mini.classList.add("-translate-x-[5px]");
    bottom_bread_mini.classList.add("-translate-x-[5px]");
    sidenav.classList.remove("overflow-hidden");
    sidenav.classList.add("overflow-y-auto");
}

sidenav.addEventListener("mouseenter", () => {
    if (sidenav.getAttribute("mini") == "true") {
        if (pageName != "rtl-page") {
            normal_sidenav();
        } else {
            normal_sidenav_rtl();
        }
    }
});
sidenav.addEventListener("mouseleave", () => {
    if (sidenav.getAttribute("mini") == "true") {
        if (pageName != "rtl-page") {
            mini_sidenav();
        } else {
            mini_sidenav_rtl();
        }
    }
});
var dark_mode_toggle = document.querySelector("[dark-toggle]");

dark_mode_toggle.addEventListener("change", function () {
    dark_mode_toggle.setAttribute("manual", "true");
    if (this.checked) {
        root_html.classList.add("dark");
    } else {
        root_html.classList.remove("dark");
    }
    //set cookie
    var d = new Date();
    d.setTime(d.getTime() + 365 * 24 * 60 * 60 * 1000);//1 year
    var expires = "expires=" + d.toUTCString();
    document.cookie = "dark_mode=" + this.checked + ";" + expires + ";path=/";
});
