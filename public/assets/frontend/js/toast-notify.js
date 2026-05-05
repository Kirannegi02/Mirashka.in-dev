/**
 * ElevateOne Media - Notification System
 * Complete toast + confirmation system
 *
 * Usage:
 *   notify('success', 'Operation completed!');
 *   confirmDelete(event, 'Delete this item?');
 */

(function () {
    "use strict";

    // Inject CSS for toast animation
    var styleEl = document.createElement("style");
    styleEl.textContent = [
        ".toastify-custom.toastify-right {",
        "  animation: slideInRight 0.3s ease;",
        "}",
        ".toastify-custom.toastify-center {",
        "  animation: slideInDown 0.3s ease;",
        "}",
        "@keyframes slideInRight {",
        "  from { transform: translateX(100%); opacity: 0; }",
        "  to { transform: translateX(0); opacity: 1; }",
        "}",
        "@keyframes slideInDown {",
        "  from { transform: translateY(-20px); opacity: 0; }",
        "  to { transform: translateY(0); opacity: 1; }",
        "}",
        ".toastify-custom .toast-close {",
        "  opacity: 0.7;",
        "  transition: opacity 0.2s;",
        "}",
        ".toastify-custom .toast-close:hover {",
        "  opacity: 1;",
        "}",
    ].join("\n");
    document.head.appendChild(styleEl);

    // Configuration
    const CONFIG = {
        toastDuration: 4000,
        maxVisibleToasts: 3,
        toastPosition: "top-right",
        mobilePosition: "top-center",
    };

    // Toastify.js styles by type
    const TOAST_STYLES = {
        success: { background: "rgba(16, 185, 129, 0.95)", color: "#fff", icon: "✔", border: "#10B981" },
        error: { background: "rgba(239, 68, 68, 0.95)", color: "#fff", icon: "✖", border: "#EF4444" },
        warning: { background: "rgba(245, 158, 11, 0.95)", color: "#fff", icon: "⚠", border: "#F59E0B" },
        info: { background: "rgba(59, 130, 246, 0.95)", color: "#fff", icon: "ℹ", border: "#3B82F6" },
    };

    // Track active toasts
    const activeToasts = new Map();
    const toastQueue = [];

    /**
     * Show toast notification
     */
    function showToast(type, message) {
        if (!message || !TOAST_STYLES[type]) return;

        const key = type + ":" + message.substring(0, 50);

        if (activeToasts.has(key)) return;
        if (activeToasts.size >= CONFIG.maxVisibleToasts) {
            toastQueue.push({ type, message });
            return;
        }

        const style = TOAST_STYLES[type];

        try {
            if (typeof Toastify === "undefined") {
                fallbackAlert(type, message);
                return;
            }

           const position = window.innerWidth < 768 ? "center" : "right";

            const toast = Toastify({
                text: style.icon + "  " + message,
                duration: CONFIG.toastDuration,
                close: true,
                gravity: "top",
                position: position,
                escapeHTML: true,
                stopOnFocus: true,
                offset: { x: 20, y: 20 },
                className: "toastify-custom",
                style: {
                    background: style.background,
                    color: style.color,
                    borderRadius: "12px",
                    boxShadow: "0 10px 40px rgba(0,0,0,0.25)",
                    fontFamily: "system-ui, -apple-system, sans-serif",
                    fontSize: "14px",
                    fontWeight: "500",
                    padding: "14px 18px",
                    maxWidth: "360px",
                    borderLeft: "4px solid " + style.border,
                    backdropFilter: "blur(10px)",
                },
            });

            const toastId = Date.now();
            activeToasts.set(key, toastId);
            toast.showToast();

            setTimeout(function () {
                activeToasts.delete(key);
                processQueue();
            }, CONFIG.toastDuration + 300);
        } catch (e) {
            fallbackAlert(type, message);
        }
    }

    /**
     * Fallback alert for when Toastify is not available
     */
    function fallbackAlert(type, message) {
        const style = TOAST_STYLES[type];
        console.log("[" + type.toUpperCase() + "] " + message);
    }

    /**
     * Process toast queue
     */
    function processQueue() {
        if (toastQueue.length === 0) return;
        const next = toastQueue.shift();
        showToast(next.type, next.message);
    }

    /**
     * Main notify function
     */
    function notify(type, message) {
        if (!message) return;
        message = String(message).trim();
        if (!message) return;
        showToast(type, message);
    }

    // Shortcuts
    notify.success = function (msg) {
        showToast("success", msg);
    };
    notify.error = function (msg) {
        showToast("error", msg);
    };
    notify.warning = function (msg) {
        showToast("warning", msg);
    };
    notify.info = function (msg) {
        showToast("info", msg);
    };
    notify.clear = function () {
        activeToasts.clear();
        toastQueue.length = 0;
    };

    /**
     * Confirmation dialog (replaces native confirm)
     */
    function confirmAction(event, message, onConfirm) {
        event.preventDefault();
        event.stopPropagation();

        const target = event.currentTarget;
        const form =
            target.tagName === "FORM" ? target : target.closest("form");
        const href = target.getAttribute("href");

        if (typeof Swal !== "undefined") {
            Swal.fire({
                title: "Are you sure?",
                text: message || "This action cannot be undone.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#EF4444",
                cancelButtonColor: "#6B7280",
                confirmButtonText: "Yes, proceed!",
                cancelButtonText: "Cancel",
                reverseButtons: true,
            }).then(function (result) {
                if (result.isConfirmed) {
                    if (form) {
                        form.dataset.swalConfirmed = "true";
                        form.submit();
                    } else if (href && href !== "#") {
                        window.location.href = href;
                    }
                    if (onConfirm) onConfirm();
                }
            });
        } else {
            if (confirm(message || "Are you sure?")) {
                if (form) {
                    form.submit();
                } else if (href && href !== "#") {
                    window.location.href = href;
                }
                if (onConfirm) onConfirm();
            }
        }
    }

    /**
     * Attach confirmation to delete buttons/forms
     */
    function initConfirmHandlers() {
        document.querySelectorAll("[data-confirm]").forEach(function (el) {
            if (el.dataset.bound) return;
            el.dataset.bound = "true";
            el.addEventListener("click", function (e) {
                const message = el.getAttribute("data-confirm");
                confirmAction(e, message);
            });
        });

        document
            .querySelectorAll("form[data-confirm]")
            .forEach(function (form) {
                if (form.dataset.bound) return;
                form.dataset.bound = "true";
                form.addEventListener("submit", function (e) {
                    if (form.dataset.swalConfirmed === "true") {
                        form.dataset.swalConfirmed = "false";
                        return;
                    }
                    const message = form.getAttribute("data-confirm");
                    confirmAction(e, message);
                });
            });
    }

    // Expose globally
    window.notify = notify;
    window.confirmAction = confirmAction;

    function init() {
        // Process flash messages from Blade component
        document.querySelectorAll(".js-flash-message").forEach(function (el) {
            const type = el.getAttribute("data-type");
            const message = el.getAttribute("data-message");
            if (type && message) {
                setTimeout(function () {
                    showToast(type, message);
                }, 100);
            }
        });

        // Initialize confirm handlers
        initConfirmHandlers();
    }

    // Initialize on DOM ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }
})();
