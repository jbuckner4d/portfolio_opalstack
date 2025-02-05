/**
 * Modules in this bundle
 * @license
 *
 * modal-video:
 *   license: appleple
 *   author: appleple
 *   homepage: http://developer.a-blogcms.jp
 *   version: 2.4.6
 *
 * custom-event-polyfill:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   contributors: Frank Panetta, Mikhail Reenko <reenko@yandex.ru>, Joscha Feth <joscha@feth.com>
 *   homepage: https://github.com/krambuhl/custom-event-polyfill#readme
 *   version: 0.3.0
 *
 * es6-object-assign:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: RubÃ©n Norte <rubennorte@gmail.com>
 *   homepage: https://github.com/rubennorte/es6-object-assign
 *   version: 1.1.0
 *
 * This header is generated by licensify (https://github.com/twada/licensify)
 */ !(function (e) {
    if ("object" == typeof exports && "undefined" != typeof module) module.exports = e();
    else if ("function" == typeof define && define.amd) define([], e);
    else {
        var t;
        (t = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : this).ModalVideo = e();
    }
})(function () {
    return (function () {
        function e(t, n, o) {
            function i(l, r) {
                if (!n[l]) {
                    if (!t[l]) {
                        var u = "function" == typeof require && require;
                        if (!r && u) return u(l, !0);
                        if (a) return a(l, !0);
                        var d = Error("Cannot find module '" + l + "'");
                        throw ((d.code = "MODULE_NOT_FOUND"), d);
                    }
                    var s = (n[l] = { exports: {} });
                    t[l][0].call(
                        s.exports,
                        function (e) {
                            return i(t[l][1][e] || e);
                        },
                        s,
                        s.exports,
                        e,
                        t,
                        n,
                        o
                    );
                }
                return n[l].exports;
            }
            for (var a = "function" == typeof require && require, l = 0; l < o.length; l++) i(o[l]);
            return i;
        }
        return e;
    })()(
        {
            1: [
                function (e, t, n) {
                    try {
                        var o = new window.CustomEvent("test");
                        if ((o.preventDefault(), !0 !== o.defaultPrevented)) throw Error("Could not prevent default");
                    } catch (i) {
                        var a = function (e, t) {
                            var n, o;
                            return (
                                (t = t || { bubbles: !1, cancelable: !1, detail: void 0 }),
                                (n = document.createEvent("CustomEvent")).initCustomEvent(e, t.bubbles, t.cancelable, t.detail),
                                (o = n.preventDefault),
                                (n.preventDefault = function () {
                                    o.call(this);
                                    try {
                                        Object.defineProperty(this, "defaultPrevented", {
                                            get: function () {
                                                return !0;
                                            },
                                        });
                                    } catch (e) {
                                        this.defaultPrevented = !0;
                                    }
                                }),
                                n
                            );
                        };
                        (a.prototype = window.Event.prototype), (window.CustomEvent = a);
                    }
                },
                {},
            ],
            2: [
                function (e, t, n) {
                    "use strict";
                    function o(e, t) {
                        if (null == e) throw TypeError("Cannot convert first argument to object");
                        for (var n = Object(e), o = 1; o < arguments.length; o++) {
                            var i = arguments[o];
                            if (null != i)
                                for (var a = Object.keys(Object(i)), l = 0, r = a.length; l < r; l++) {
                                    var u = a[l],
                                        d = Object.getOwnPropertyDescriptor(i, u);
                                    void 0 !== d && d.enumerable && (n[u] = i[u]);
                                }
                        }
                        return n;
                    }
                    t.exports = {
                        assign: o,
                        polyfill: function e() {
                            Object.assign || Object.defineProperty(Object, "assign", { enumerable: !1, configurable: !0, writable: !0, value: o });
                        },
                    };
                },
                {},
            ],
            3: [
                function (e, t, n) {
                    "use strict";
                    Object.defineProperty(n, "__esModule", { value: !0 });
                    var o = (function () {
                        function e(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var o = t[n];
                                (o.enumerable = o.enumerable || !1), (o.configurable = !0), "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o);
                            }
                        }
                        return function (t, n, o) {
                            return n && e(t.prototype, n), o && e(t, o), t;
                        };
                    })();
                    e("custom-event-polyfill");
                    var i = e("../lib/util"),
                        a = e("es6-object-assign").assign,
                        l = {
                            channel: "youtube",
                            facebook: {},
                            youtube: {
                                autoplay: 1,
                                cc_load_policy: 1,
                                color: null,
                                controls: 1,
                                disablekb: 0,
                                enablejsapi: 0,
                                end: null,
                                fs: 1,
                                h1: null,
                                iv_load_policy: 1,
                                loop: 0,
                                modestbranding: null,
                                mute: 0,
                                origin: null,
                                playsinline: null,
                                rel: 0,
                                showinfo: 1,
                                start: 0,
                                wmode: "transparent",
                                theme: "dark",
                                nocookie: !1,
                            },
                            ratio: "16:9",
                            vimeo: {
                                api: !1,
                                autopause: !0,
                                autoplay: !0,
                                byline: !0,
                                callback: null,
                                color: null,
                                controls: !0,
                                height: null,
                                loop: !1,
                                maxheight: null,
                                maxwidth: null,
                                muted: !1,
                                player_id: null,
                                portrait: !0,
                                title: !0,
                                width: null,
                                xhtml: !1,
                            },
                            allowFullScreen: !0,
                            allowAutoplay: !0,
                            animationSpeed: 300,
                            classNames: {
                                modalVideo: "modal-video",
                                modalVideoClose: "modal-video-close",
                                modalVideoBody: "modal-video-body",
                                modalVideoInner: "modal-video-inner",
                                modalVideoIframeWrap: "modal-video-movie-wrap",
                                modalVideoCloseBtn: "modal-video-close-btn",
                            },
                            aria: { openMessage: "You just openned the modal video", dismissBtnMessage: "Close the modal by clicking here" },
                        },
                        r = (function () {
                            function e(t, n) {
                                var o = this;
                                !(function e(t, n) {
                                    if (!(t instanceof n)) throw TypeError("Cannot call a class as a function");
                                })(this, e);
                                var r = a({}, l, n),
                                    u = "string" == typeof t ? document.querySelectorAll(t) : t,
                                    d = document.querySelector("body"),
                                    s = r.classNames,
                                    c = r.animationSpeed;
                                [].forEach.call(u, function (e) {
                                    e.addEventListener("click", function (t) {
                                        "A" === e.tagName && t.preventDefault();
                                        var n = e.dataset.videoId,
                                            a = e.dataset.channel || r.channel,
                                            l = (0, i.getUniqId)(),
                                            u = e.dataset.videoUrl || o.getVideoUrl(r, a, n),
                                            f = o.getHtml(r, u, l);
                                        (0, i.append)(d, f);
                                        var v = document.getElementById(l),
                                            m = v.querySelector(".js-modal-video-dismiss-btn"),
                                            p = void 0,
                                            y = function () {
                                                clearTimeout(p),
                                                    (p = setTimeout(function () {
                                                        var e = o.getWidthFulfillAspectRatio(r.ratio, window.innerHeight, window.innerWidth),
                                                            t = document.getElementById("modal-video-inner-" + l);
                                                        t.style.maxWidth !== e && (t.style.maxWidth = e);
                                                    }, 10));
                                            };
                                        v.focus(),
                                            v.addEventListener("click", function () {
                                                (0, i.addClass)(v, s.modalVideoClose),
                                                    window.removeEventListener("resize", y),
                                                    setTimeout(function () {
                                                        (0, i.remove)(v), e.focus();
                                                    }, c);
                                            }),
                                            v.addEventListener("keydown", function (e) {
                                                9 === e.which && (e.preventDefault(), document.activeElement === v ? m.focus() : (v.setAttribute("aria-label", ""), v.focus()));
                                            }),
                                            window.addEventListener("resize", y),
                                            m.addEventListener("click", function () {
                                                (0, i.triggerEvent)(v, "click");
                                            });
                                    });
                                });
                            }
                            return (
                                o(e, [
                                    {
                                        key: "getPadding",
                                        value: function (e) {
                                            var t = e.split(":"),
                                                n = Number(t[0]);
                                            return (100 * Number(t[1])) / n + "%";
                                        },
                                    },
                                    {
                                        key: "getWidthFulfillAspectRatio",
                                        value: function (e, t, n) {
                                            var o = e.split(":"),
                                                i = Number(o[0]),
                                                a = Number(o[1]);
                                            return t < n * (a / i) ? Math.floor((i / a) * t) + "px" : "100%";
                                        },
                                    },
                                    {
                                        key: "getQueryString",
                                        value: function (e) {
                                            var t = "";
                                            return (
                                                Object.keys(e).forEach(function (n) {
                                                    t += n + "=" + e[n] + "&";
                                                }),
                                                t.substr(0, t.length - 1)
                                            );
                                        },
                                    },
                                    {
                                        key: "getVideoUrl",
                                        value: function (e, t, n) {
                                            return "youtube" === t ? this.getYoutubeUrl(e.youtube, n) : "vimeo" === t ? this.getVimeoUrl(e.vimeo, n) : "facebook" === t ? this.getFacebookUrl(e.facebook, n) : "custom" === t ? e.url : "";
                                        },
                                    },
                                    {
                                        key: "getVimeoUrl",
                                        value: function (e, t) {
                                            return "//player.vimeo.com/video/" + t + "?" + this.getQueryString(e);
                                        },
                                    },
                                    {
                                        key: "getYoutubeUrl",
                                        value: function (e, t) {
                                            var n = this.getQueryString(e);
                                            return !0 === e.nocookie ? "//www.youtube-nocookie.com/embed/" + t + "?" + n : "//www.youtube.com/embed/" + t + "?" + n;
                                        },
                                    },
                                    {
                                        key: "getFacebookUrl",
                                        value: function (e, t) {
                                            return "//www.facebook.com/v2.10/plugins/video.php?href=https://www.facebook.com/facebook/videos/" + t + "&" + this.getQueryString(e);
                                        },
                                    },
                                    {
                                        key: "getHtml",
                                        value: function (e, t, n) {
                                            var o = this.getPadding(e.ratio),
                                                i = e.classNames;
                                            return (
                                                '\n      <div class="' +
                                                i.modalVideo +
                                                '" tabindex="-1" role="dialog" aria-label="' +
                                                e.aria.openMessage +
                                                '" id="' +
                                                n +
                                                '">\n        <div class="' +
                                                i.modalVideoBody +
                                                '">\n          <div class="' +
                                                i.modalVideoInner +
                                                '" id="modal-video-inner-' +
                                                n +
                                                '">\n            <div class="' +
                                                i.modalVideoIframeWrap +
                                                '" style="padding-bottom:' +
                                                o +
                                                '">\n              <button class="' +
                                                i.modalVideoCloseBtn +
                                                ' js-modal-video-dismiss-btn" aria-label="' +
                                                e.aria.dismissBtnMessage +
                                                "\"></button>\n              <iframe width='460' height='230' src=\"" +
                                                t +
                                                "\" frameborder='0' allowfullscreen=" +
                                                e.allowFullScreen +
                                                ' tabindex="-1" allow="' +
                                                (e.allowAutoplay ? "autoplay;" : "") +
                                                ' accelerometer; encrypted-media; gyroscope; picture-in-picture" />\n            </div>\n          </div>\n        </div>\n      </div>\n    '
                                            );
                                        },
                                    },
                                ]),
                                e
                            );
                        })();
                    (n.default = r), (t.exports = n.default);
                },
                { "../lib/util": 5, "custom-event-polyfill": 1, "es6-object-assign": 2 },
            ],
            4: [
                function (e, t, n) {
                    "use strict";
                    t.exports = e("./core/");
                },
                { "./core/": 3 },
            ],
            5: [
                function (e, t, n) {
                    "use strict";
                    Object.defineProperty(n, "__esModule", { value: !0 }),
                        (n.append = function (e, t) {
                            var n = document.createElement("div");
                            for (n.innerHTML = t; n.children.length > 0; ) e.appendChild(n.children[0]);
                        }),
                        (n.getUniqId = function () {
                            return (Date.now().toString(36) + Math.random().toString(36).substr(2, 5)).toUpperCase();
                        }),
                        (n.remove = function (e) {
                            e && e.parentNode && e.parentNode.removeChild(e);
                        }),
                        (n.addClass = function (e, t) {
                            e.classList ? e.classList.add(t) : (e.className += " " + t);
                        }),
                        (n.triggerEvent = function (e, t, n) {
                            var o = void 0;
                            window.CustomEvent ? (o = new CustomEvent(t, { cancelable: !0 })) : (o = document.createEvent("CustomEvent")).initCustomEvent(t, !1, !1, n), e.dispatchEvent(o);
                        });
                },
                {},
            ],
        },
        {},
        [4]
    )(4);
});
