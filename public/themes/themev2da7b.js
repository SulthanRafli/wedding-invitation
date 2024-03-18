(() => {
    var e,
        n,
        t,
        o,
        l,
        a,
        i,
        r,
        s = document.getElementById("satuMomen"),
        d = document.documentElement.lang,
        u = document.getElementById("loader");
    u && (window.onload = u.style.display = "none");
    var c = new Splide("#satuMomen", {
            type: "fade",
            direction: "ttb",
            height: "100%",
            wheel: !0,
            arrows: !1,
            pagination: !1,
            updateOnMove: !0,
            drag: !1,
            noDrag: "input, textarea, .rsvp-placeholder",
        }),
        m = new Splide("#menuSlider", {
            fixedWidth: "25%",
            fixedHeight: 60,
            focus: "center",
            arrows: !1,
            rewind: !0,
            pagination: !1,
            cover: !1,
            updateOnMove: !0,
            isNavigation: !0,
        });
    c.mount();
    var y = s.dataset.guest,
        p = document.getElementById("guestNameSlot");
    y && p && (p.innerHTML = y);
    var g = s.dataset.group,
        v = document.getElementById("groupNameSlot");
    g && v && (v.innerHTML = g);
    document.getElementById("btnMusic");
    var f = document.getElementById("music")
            ? document.getElementById("music")
            : null,
        h = document.querySelector(".sc-music > iframe"),
        b = h ? SC.Widget(h) : null,
        w = !1;
    (playMusic = function (e) {
        e ? f && f.play() : f && (w ? f.pause() : f.play()),
            b &&
                SC.Widget.Events.READY &&
                (w ? (b.pause(), (w = !1)) : (b.play(), (w = !0)));
    }),
        f &&
            ((f.onplaying = function () {
                w = !0;
            }),
            (f.onpause = function () {
                w = !1;
            })),
        (openFullScreen = function () {
            document.documentElement.requestFullscreen
                ? document.documentElement.requestFullscreen()
                : document.documentElement.webkitRequestFullscreen
                ? document.documentElement.webkitRequestFullscreen()
                : document.documentElement.msRequestFullscreen &&
                  document.documentElement.msRequestFullscreen();
        }),
        (openInvitation = function (e) {
            playMusic(!0),
                -1 != navigator.userAgent.indexOf("UCBrowser") ||
                -1 != navigator.userAgent.indexOf("MiuiBrowser") ||
                -1 != navigator.userAgent.indexOf("OppoBrowser")
                    ? console.log(
                          "Browser not support portrait full screen mode"
                      )
                    : openFullScreen();
        });
    for (
        var x = function (e) {
                openInvitation(),
                    null === document.querySelector(".no-menu")
                        ? (m.mount(), c.sync(m), m.go(1))
                        : c.go(1),
                    s.classList.remove("not-open"),
                    (e.target.style.display = "none"),
                    c.Components.Drag.disable(!1);
            },
            M = document.getElementsByClassName("btn-open-invitation"),
            L = 0;
        L < M.length;
        L++
    )
        M[L].addEventListener("click", x, !1);
    showGift = function (e) {
        for (var n = 0; n < T.length; n++)
            n != e && (E[n].style.display = "none");
        E[e].style.display = "inherit";
    };
    for (
        var E = document.getElementsByClassName("gift-container"), B = 0;
        B < E.length;
        B++
    )
        E[B].style.display = "none";
    for (
        var T = document.getElementsByClassName("btn-gift"),
            I = function (e) {
                T[e].onclick = function () {
                    showGift(e);
                };
            },
            C = 0;
        C < T.length;
        C++
    )
        I(C);
    var S = document.getElementById("lightboxWrapper"),
        H = document.getElementById("lightboxCloseBtn"),
        k = document.getElementById("lightboxNextBtn"),
        q = document.getElementById("lightboxPrevBtn"),
        N = document.querySelector("#lightboxWrapper > .lightbox-list"),
        _ = document.getElementsByClassName("lightbox");
    (showLightbox = function (e) {
        S.classList.add("show"),
            (N.innerHTML = '<div class="lightbox-inner"><img src="'.concat(
                _[e].src,
                '"></div>'
            )),
            (k.dataset.index = e),
            (q.dataset.index = e);
    }),
        (k.onclick = function () {
            var e = parseInt(k.dataset.index) + 1;
            e >= _.length && (e = 0), showLightbox(e);
        }),
        (q.onclick = function () {
            var e = parseInt(q.dataset.index) - 1;
            -1 == e && (e = _.length - 1), showLightbox(e);
        }),
        (closeLightbox = function () {
            S.classList.remove("show"), (N.innerHTML = "");
        });
    for (
        var F = function (e) {
                _[e].onclick = function () {
                    showLightbox(e);
                };
            },
            O = 0;
        O < _.length;
        O++
    )
        F(O);
    H.onclick = function () {
        closeLightbox();
    };
    var D = document.getElementsByTagName("BODY")[0],
        A = document.getElementById("modalOverlay");
    (showModal = function (e) {
        D.classList.add("modal-open"),
            A.classList.add("show"),
            (A.style = "display: block;"),
            e.classList.add("show"),
            (e.style = "display: block;");
    }),
        (closeModal = function (e) {
            D.classList.remove("modal-open"),
                A.classList.remove("show"),
                (A.style = "display: none;"),
                e.classList.remove("show"),
                (e.style = "display: none;");
        });
    var R = document.getElementsByClassName("countdown-wrapper");
    displayCountdown = function (e) {
        var n = new Date(e.dataset.datetime).getTime(),
            t = e.querySelector(".countdown > .day > .number"),
            o = e.querySelector(".countdown > .hour > .number"),
            l = e.querySelector(".countdown > .minute > .number"),
            a = e.querySelector(".countdown > .second > .number"),
            i = setInterval(function () {
                var e = new Date().getTime(),
                    r = n - e,
                    s = Math.floor(r / 864e5),
                    d = Math.floor((r % 864e5) / 36e5),
                    u = Math.floor((r % 36e5) / 6e4),
                    c = Math.floor((r % 6e4) / 1e3);
                (t.innerHTML = s),
                    (o.innerHTML = d),
                    (l.innerHTML = u),
                    (a.innerHTML = c),
                    r < 0 &&
                        (clearInterval(i),
                        (t.innerHTML = "00"),
                        (o.innerHTML = "00"),
                        (l.innerHTML = "00"),
                        (a.innerHTML = "00"));
            }, 1e3);
    };
    for (var W = 0; W < R.length; W++) displayCountdown(R[W]);
    for (
        var U = document.getElementsByClassName("btn-rsvp"),
            j =
                null !== (e = document.querySelector(".rsvp-placeholder")) &&
                void 0 !== e
                    ? e
                    : null,
            G =
                null !== (n = document.querySelector(".rsvp-form")) &&
                void 0 !== n
                    ? n
                    : null,
            Y = 0;
        Y < U.length;
        Y++
    )
        j
            ? (U[Y].style.display = "none")
            : (U[Y].onclick = function () {
                  showModal(rsvpModal);
              });
    G && j && ((j.innerHTML = ""), j.appendChild(G));
    var P =
            null !== (t = document.getElementById("app")) && void 0 !== t
                ? t
                : null,
        z =
            null !== (o = document.getElementById("illegal")) && void 0 !== o
                ? o
                : null,
        J =
            null !== (l = document.getElementById("waterMark")) && void 0 !== l
                ? l
                : null,
        K =
            null !== (a = document.querySelector(".watermark-placeholder")) &&
            void 0 !== a
                ? a
                : null,
        Q =
            null !== (i = document.querySelector(".no-watermark")) &&
            void 0 !== i
                ? i
                : null,
        V =
            null !== (r = document.querySelector(".watermark")) && void 0 !== r
                ? r
                : null;
    setTimeout(function () {
        J && K && null == Q
            ? ((J.style.display = "inherit"),
              (K.innerHTML = ""),
              K.appendChild(J),
              (z.style.display = "none"))
            : V && null == K
            ? ((P.innerHTML = ""), (z.style.display = "flex"))
            : ((J.style.display = "none"), (z.style.display = "none"));
    }, 300);
    for (
        var X = document.getElementsByClassName("account-number"), Z = 0;
        Z < X.length;
        Z++
    )
        X[Z].innerHTML &&
            ("id" == d
                ? X[Z].insertAdjacentHTML(
                      "afterend",
                      "<button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text='".concat(
                          X[Z].innerText,
                          "' onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Salin Rekening</button>"
                      )
                  )
                : X[Z].insertAdjacentHTML(
                      "afterend",
                      "<button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text='".concat(
                          X[Z].innerText,
                          "' onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy to Clipboard</button>"
                      )
                  ));
    copyText = function (e) {
        var n = document.createElement("input");
        (n.autofocus = !1),
            (n.value = e.target.dataset.text),
            document.body.appendChild(n),
            n.select(),
            document.execCommand("copy"),
            n.remove(),
            (e.target.innerHTML =
                "id" == d ? "Berhasil Disalin" : "Copied to Clipboard");
    };
})();