/* Good Software Ltd. (c) 2017 */
function e() {
	h = l("scroller");
	for (var e = l("categories_list").getElementsByClassName("list_element"), c = 0, d = 0; d < e.length; d++)
		if (e[d].onmouseup = function (e) {
			return e.preventDefault(), i(this.id.slice(1)), !1
		}, !isNaN(+e[d].id.slice(1))) {
			for (var f = 360 / (6 - u[c].length), g = 0; g < u[c].length; g++) {
				var C = document.createElement("p");
				C.className = "icon", C.style.left = parseInt(50 + 5 * (3 - u[c].length) + 18 * Math.cos((90 + f * g) * Math.PI / 180)) + "%", C.style.top = parseInt(55 - 21 * Math.sin((90 + f * g) * Math.PI / 180)) + "%", C.style.backgroundImage = 'url("https://quangcaosieutoc.com/style/icon_facebook/categories/f' + c + '.png")', C.style.backgroundPosition = 20 * -u[c][g] + "px center", e[d].appendChild(C)
			}
			c += 1
		}
	for (var x = l("container").getElementsByClassName("category"), w = 0, d = 0; d < x.length; d++)
		if (x[d].addEventListener("mousedown", function (e) {
			if ("P" != e.target.tagName.toUpperCase()) return !0;
			e.preventDefault();
			var t = l("copy_block"),
				o = e.target.innerText,
				i = new RegExp(/d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���|d���/gi);
			if (t.value.length > 0 && i.test(o) && (i.lastIndex = 0, i.test(t.value.slice(-2)) && (o = " " + o)), m > 0 && "f1" == e.target.parentNode.id && b.indexOf(+e.target.getAttribute("data-id")) == -1 && (o += String.fromCharCode(55356) + String.fromCharCode(57338 + m)), e.target.classList.add("active"), t.value += o, new RegExp(o, "gi").test(t.getAttribute("data-list")) || t.setAttribute("data-list", (t.getAttribute("data-list") || "").split(",").concat([o]).clean("").join(",")), 0 == e.target.getElementsByClassName("remove").length) {
				var r = s("span", "", "remove");
				r.onclick = r.ontouchup = n, e.target.appendChild(r)
			}
			return a(), !1
		}), !isNaN(+x[d].id.slice(1))) {
			var E = x[d].querySelectorAll("p");
			x[d].style.backgroundImage = 'url("https://quangcaosieutoc.com/style/icon_facebook/categories/f' + w + '.png")';
			for (var g = 0; g < E.length; g++) E[g].setAttribute("data-id", g), E[g].style.backgroundPosition = 24 * -g + "px center";
			w++
		}
	for (var N = document.querySelectorAll("li > a"), d = 0; d < N.length; d++) N[d].setAttribute("data-original-href", N[d].href);
	l("clear_selection").onmouseup = function () {
		l("copy_block").value = "", l("copy_block").setAttribute("data-list", "");
		for (var e = l("container").querySelectorAll("p.active"), t = 0; t < e.length; t++) {
			e[t].classList.remove("active");
			for (var o = 0; o < e[t].children.length; o++) e[t].removeChild(e[t].children[o])
		}
		l("copy_block").blur(), l("copy_button").innerHTML = "Copy", l("copy_button").classList.remove("copied"), this.style.display = "none"
	}, l("copy_button").onmousedown = function (e) {
		return e.preventDefault && e.preventDefault(), a(!0), !1
	}, l("search").oninput = function (e) {
		e.stopPropagation();
		var t = this.value.replace(/[^a-zA-Z0-9 ]/gi, ""),
			o = t.split(/\s/gi).clean("");
		p = new RegExp(o.map(function (e) {
			return e ? "\\b" + e : ""
		}).join("|"), "gi");
		for (var n = l("f_search"), a = n.querySelectorAll("p"), s = 0; s < a.length; s++) n.removeChild(a[s]);
		if (!this.value || 0 == t.length) return i(0), void l("copy_block").blur();
		/active/i.test(n.className) || i("_search");
		for (var s = 0; s < emojiKeywords.length; s++)
			for (var c = 0; c < emojiKeywords[s].length; c++)
				if (p.lastIndex = 0, p.test(emojiKeywords[s][c])) {
					var u = document.getElementById("f" + s).children[c + 1];
					r(n, u.innerText, u.getAttribute("alt"), u.getAttribute("title"), s, c)
				}
	};
	var k = l("categories_list").getElementsByClassName("list_element"),
		A = 0,
		_ = l("container"),
		H = !1;
	_.onscroll = function (e) {
		e = e ? e : window.event, H || (e.stopPropagation && e.stopPropagation(), e.preventDefault && e.preventDefault(), e.returnValue = !1), h.style.opacity = .5, clearTimeout(v), v = setTimeout(o, 1e3, _);
		var t = 46 + this.scrollTop / (this.scrollHeight - this.offsetHeight) * (this.offsetHeight - 110 - h.offsetHeight - 52);
		t + h.offsetHeight > this.scrollHeight - 110 && (t = this.offsetHeight - h.offsetHeight - 80), h.style.top = parseInt(t) + "px";
		for (var n = 1; n < k.length; n++) {
			var a = x[n].offsetTop - this.scrollTop;
			if (a >= 0 && k[n].offsetTop >= a) {
				A = n - 1, i(A, !0);
				break
			}
		}
		return !1
	}, _.onmousedown = _.ontouchstart = function (e) {
		e.pageY > 46 && e.pageY < this.offsetHeight - 110 && e.pageX > document.body.offsetWidth - 16 && (e.preventDefault(), H = !0)
	}, _.onmousemove = function (e) {
		return !!H || (y = {
			x: e.pageX,
			y: e.pageY
		}, void(e.pageY > 46 && e.pageY < this.offsetHeight - 110 && e.pageX > document.body.offsetWidth - 16 ? h.style.opacity = .5 : 0 != +h.style.opacity && (h.style.opacity = 0)))
	}, document.body.onmouseup = document.body.ontouchend = document.onmouseout = function (e) {
		e = e ? e : window.event;
		var t = e.relatedTarget || e.toElement;
		"mouseout" == e.type.toLowerCase() && t && "HTML" != t.nodeName || H && (H = !1)
	}, window.onmousemove = window.ontouchmove = function (e) {
		if (!H) return !0;
		var t = _.scrollTop + (_.scrollHeight - _.offsetHeight) / (_.offsetHeight - 110 - h.offsetHeight - 40) * e.movementY;
		return t < 0 ? t = 0 : t > _.scrollHeight - _.offsetHeight && (t = _.scrollHeight - _.offsetHeight), h.style.opacity = .5, _.scrollTop = t, !1
	};
	var L = s("div", "set_tone", "");
	L.title = "Choose a skin tone";
	for (var T = 0; T < 6; T += 1) {
		var I = s("div", "", "");
		0 == T ? I.style.backgroundImage = "url('https://quangcaosieutoc.com/style/icon_facebook/categories/f1.png')" : I.style.backgroundImage = "url('https://quangcaosieutoc.com/style/icon_facebook/categories/tone" + T + ".png')", (+localStorage.chosenTone || 0) == T && (I.classList.add("chosen"), m = T, t(T)), I.setAttribute("data-id", T), I.ontouchup = I.onmouseup = function () {
			t(+this.getAttribute("data-id")), this.parentNode.getElementsByClassName("chosen")[0].classList.remove("chosen"), this.classList.add("chosen")
		}, L.appendChild(I)
	}
	l("f1").appendChild(L)
}

function t(e) {
	var t = l("f1").children,
		o = 0 == e ? "" : "tone" + e,
		n = 0 == m ? "" : "tone" + m;
	localStorage.chosenTone = e, m = e;
	for (var a = 0, i = 1; i < t.length; i++) "P" == t[i].tagName.toUpperCase() && b.indexOf(i - 1) == -1 && (n && t[i].classList.remove(n), o && t[i].classList.add(o), 0 == e ? t[i].style.backgroundPosition = 24 * -(i - 1) + "px center" : t[i].style.backgroundPosition = 24 * -a + "px center", a++)
}

function o(e) {
	(y.y <= 46 || y.y > e.offsetHeight - 110 || y.x < document.body.offsetWidth - 16) && (h.style.opacity = 0)
}

function n(e) {
	if (e.target == this) {
		var t = l("copy_block");
		t.value = t.value.replace(new RegExp("[ ]?" + this.parentNode.innerText + "(\\ud83c[\\udffb-\\udfff])?", "gi"), "");
		for (var o = t.getAttribute("data-list") || "", n = o.split(",").clean(""), i = o.match(new RegExp(this.parentNode.innerText + "(\\ud83c[\\udffb-\\udfff])?", "gi")), r = 0; r < i.length; r++) n.splice(n.indexOf(i[r]), 1);
		t.setAttribute("data-list", n.join(",")), this.parentNode.classList.remove("active"), this.parentNode.removeChild(this), a()
	}
}

function a(e) {
	var t = l("copy_block");
	t.click ? t.click() : fireEvent(t, "click"), t.focus ? t.focus() : fireEvent(t, "focus"), t.setSelectionRange ? t.setSelectionRange(0, t.value.length) : t.select ? t.select() : document.execCommand && document.execCommand("selectall", null, !1);
	for (var o = document.querySelectorAll("li > a"), n = 0; n < o.length; n++) o[n].href = (o[n].getAttribute("data-original-href") || o[n].href).replace("Emojis!", "Emojis! " + t.value);
	if (l("clear_selection").style.display = 0 == t.value.length ? "none" : "block", 0 == t.value.length) t.blur(), l("copy_button").innerHTML = "Copy", l("copy_button").classList.remove("copied");
	else try {
		var a = document.execCommand("Copy");
		a ? (l("copy_button").innerHTML = "Copied", l("copy_button").classList.add("copied")) : e && prompt("Failed to copy emojis\nPress " + d + " + C to copy:", t.value)
	} catch (o) {
		e && prompt("Failed to copy emojis\nPress " + d + " + C to copy:", t.value)
	}
}

function i(e, t) {
	var o = function (e) {
		for (var t = this.parentNode.getElementsByClassName(e), o = 0; o < t.length; o++) t[o].classList.remove("active");
		this.classList.add("active")
	};
	if (o.call(l("c" + e), "active"), o.call(l("f" + e), "category active"), !t) {
		isNaN(+e) ? l("container").classList.add("search-mode") : (l("container").scrollTop = l("f" + e).offsetTop - 40, l("container").classList.remove("search-mode"));
		for (var a = l("copy_block").value, i = l("f" + e).children, r = new RegExp((l("copy_block").getAttribute("data-list") || "").replace(/,/gi, "|"), "gi"), c = 1; c < i.length; c++)
			if ("P" == i[c].tagName.toUpperCase())
				if (r.lastIndex = 0, a && r.test(i[c].innerText)) {
					if (i[c].classList.add("active"), 0 == i[c].getElementsByClassName("remove").length) {
						var u = s("span", "", "remove");
						u.onclick = u.ontouchdown = n, i[c].appendChild(u)
					}
				} else if (/active/.test(i[c].className) && i[c].classList.remove("active"), i[c].children.length > 0)
			for (var d = i[c].children, f = 0; f < d.length; f++) d[f].parentNode.removeChild(d[f]);
		return !0
	}
}

function r(e, t, o, a, i, r) {
	var c = s("p", "", "", "");
	if (c.setAttribute("data-id", r), c.setAttribute("alt", o || ""), c.setAttribute("title", a || ""), c.style.background = 'url("https://quangcaosieutoc.com/style/icon_facebook/categories/f' + i + '.png") no-repeat -' + 24 * r + "px center", c.innerText = t, l("copy_block").value.indexOf(t) != -1) {
		c.className = "active";
		var u = s("span", "", "remove");
		u.onclick = u.ontouchup = n, c.appendChild(u)
	}
	e.appendChild(c)
}

function s(e, t, o, n, a) {
	var i = document.createElement(e);
	if (t && (i.id = t), o && (i.className = o), n && (i.innerHTML = n), a) {
		var r = {};
		for (var s in a) a[s] != r[s] && (i[s] = a[s])
	}
	return i
}

function l(e, t) {
	return document.getElementById(e) || document.getElementsByClassName(e)[t || 0]
}

function c(e, t) {
	if (e.fireEvent) e.fireEvent("on" + t);
	else {
		var o = document.createEvent("Events");
		o.initEvent(t, !0, !1), e.dispatchEvent(o)
	}
}
window.onload = e;
var u = [
		[1, 80],
		[43, 0],
		[1, 70],
		[36, 6],
		[10, 0],
		[50, 1],
		[62, 0],
		[34, 56],
		[96, 18],
		[240, 4]
	],
	d = navigator.userAgent.indexOf("Mac OS X") != -1 ? "Cmd" : "Ctrl",
	f = null,
	p = new RegExp,
	g = "",
	h = null,
	v = null,
	m = 0,
	y = {
		x: 0,
		y: 0
	},
	b = [32, 33, 34, 35, 36, 37, 38, 39, 74, 75, 76, 77, 78, 79, 94, 100, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119];
window.emojiKeywords || (window.emojiKeywords = []), Array.prototype.clean = function (e) {
	for (var t = 0; t < this.length; t++) this[t] == e && (this.splice(t, 1), t--);
	return this
};