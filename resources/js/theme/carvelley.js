(function ($) {
	'use strict';
	// fix menu
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#menu-style-3').addClass('fixed');
		} else {
			$('#menu-style-3').removeClass('fixed');
		}
	});
	$(".map-container").css({
		height: $(window).outerHeight(true) - 80 + "px"
	});
	// mega menu js
	$("#menu-style-4 nav").hover(function () {
		$('#menu-style-4').addClass("bg-white");
	}, function () {
		$('#menu-style-4').removeClass("bg-white");
	});
	$(".mega-menu-item ul li.submenu-item").hover(function () {
		$('.mega-menu-item ul li.submenu-item').removeClass("active");
		$('.sub-sub-megamenu ul li.menu-item').removeClass("active");
		$('.sub-sub-submenu ul li.sub-menu-item').removeClass("active");
	}, function () {
		$('.mega-menu-item ul li.submenu-item:first-child').addClass("active");
		$('.sub-sub-megamenu ul li.menu-item:first-child').addClass("active");
		$('.sub-sub-submenu ul li.sub-menu-item:first-child').addClass("active");
	});
	// section-drag
	$(function () {
		if ($('body').is('.drag')) {
			const slider = document.querySelector(".vertical-scroll");
			let isDown = false;
			let startX;
			let scrollLeft;
			slider.addEventListener("mousedown", e => {
				isDown = true;
				slider.classList.add("active");
				startX = e.pageX - slider.offsetLeft;
				scrollLeft = slider.scrollLeft;
			});
			slider.addEventListener("mouseleave", () => {
				isDown = false;
				slider.classList.remove("active");
			});
			slider.addEventListener("mouseup", () => {
				isDown = false;
				slider.classList.remove("active");
			});
			slider.addEventListener("mousemove", e => {
				if (!isDown) return;
				e.preventDefault();
				const x = e.pageX - slider.offsetLeft;
				const walk = x - startX;
				slider.scrollLeft = scrollLeft - walk;
			});
		}
	});
	// Search bar
	$("#search-btn").click(function () {
		$("#main-sec").hide();
		$("#show-search").show();
	});
	$("#close").click(function () {
		$("#show-search").hide();
		$("#main-sec").show();
	});
	// car browse
	$(".showtypebtn").click(function () {
		$(".type>li>a>span").toggleClass('hidecar');
	});
	$(".showmakebtn").click(function () {
		$(".make>li>a>span").toggleClass('hidecar');
	});
	// menu 3 search
	$.fn.searchBox = function (ev) {
		var $searchEl = $('.search-elem');
		if (ev === "open") {
			$searchEl.addClass('search-open')
		};
		if (ev === 'close') {
			$searchEl.removeClass('search-open');
		};
	}
	$('#menu-style-3 ul li.search-btn').on('click', function (e) {
		$(this).searchBox('open');
		e.preventDefault();
	});
	$('.menu-style-3 .search-box .close').on('click', function () {
		$(this).searchBox('close');
	});
	// Desktop Nav
	$("#open-nav").click(function () {
		$("#mySidenav").css("width", "500px");
	});
	$("#close-nav").click(function () {
		$("#mySidenav").css("width", "0%");
	});
	// Mobile Nav
	$("#mobile-open-nav").click(function () {
		$("#mobile-mySidenav").css("width", "100%");
	});
	$("#mobile-close-nav").click(function () {
		$("#mobile-mySidenav").css("width", "0%");
	});
	// register login popup
	// A $( document ).ready() block.
	$(document).ready(function () {
		if (document.cookie.indexOf('visited=true') == -1) {
			// load the overlay
			$('#register').modal({
				show: true
			});
			$(".modal-open").css("padding-right", "0px");
			var year = 1000 * 60 * 60 * 24 * 365;
			var expires = new Date((new Date()).valueOf() + year);
			document.cookie = "visited=true;expires=" + expires.toUTCString();
		}
		if ($('#banner-adv').length > 0) {
			$('.close-banner').on('click', function () {
				$('#banner-adv').hide()
			});
		}
	});
	$("#signin-btn").click(function () {
		$("#signup-text").hide();
		$("#signup-form").hide();
		$("#signin-text").show();
		$("#signin-form").show();
	});
	$("#signup-btn").click(function () {
		$("#signin-text").hide();
		$("#signin-form").hide();
		$("#signup-text").show();
		$("#signup-form").show();
	});
	// side nav 
	$(document).ready(function () {
		$('.mobile-nav .sidenav li.custom-dropdown-nav>a').on('click', function () {
			$(this).removeAttr('href');
			var element = $(this).parent('li');
			if (element.hasClass('open')) {
				element.removeClass('open');
				element.find('li').removeClass('open');
				element.find('ul').slideUp();
			} else {
				element.addClass('open');
				element.children('ul').slideDown();
				element.siblings('li').children('ul').slideUp();
				element.siblings('li').removeClass('open');
				element.siblings('li').find('li').removeClass('open');
				element.siblings('li').find('ul').slideUp();
			}
		});
		$('.mobile-nav .sidenav li.custom-dropdown-nav>a').append('<span class="arrow"></span>');
	});
	// ESC BUTTON ACTION
	$(document).keyup(function (e) {
		if (e.keyCode == 27) {
			$('.bar').removeClass('animate');
			$('.mobile-menu-second').removeClass('open-menu');
			$('.mobile-menu-second .desk-menu .menu-container .menu .menu-item-has-children a ul').each(function (index) {
				$(this).removeClass('open-sub');
			});
		}
	});
	// ANIMATE HAMBURGER MENU
	$('.hamburger-menu').on('click', function () {
		$('.hamburger-menu .bar').toggleClass('animate');
		if ($('.mobile-menu-second ').hasClass('open-menu')) {
			$('.mobile-menu-second ').removeClass('open-menu');
		} else {
			$('.mobile-menu-second ').toggleClass('open-menu');
		}
	});
	$('.desk-menu .menu-container .menu .menu-item-has-children ul').each(function (index) {
		$(this).append('<li class="back"><a href="#">Back</a></li>');
	});
	// RESPONSIVE MENU NAVIGATION
	$('.desk-menu .menu-container .menu .menu-item-has-children > a').on('click', function (e) {
		e.preventDefault();
		$(this).next('ul').addClass('open-sub');
	});
	// CLICK FUNCTION BACK MENU RESPONSIVE
	$('.desk-menu .menu-container .menu .menu-item-has-children ul .back').on('click', function (e) {
		e.preventDefault();
		$(this).parent('ul').removeClass('open-sub');
	});
	$('.mobile-menu-second  .over-menu').on('click', function () {
		$('.mobile-menu-second ').removeClass('open-menu');
		$('.bar').removeClass('animate');
	});
	// Search Category
	$(".cat-selc").on("click", ".init", function () {
		$(this).closest(".cat-selc").children('.cat-selc li:not(.init)').toggleClass("animatedcat");
		$(this).closest(".cat-selc").children('.cat-selc li.init').toggleClass("arrowh3");
	});
	var allOptions = $(".cat-selc").children('li:not(.init)');
	$(".cat-selc").on("click", "li:not(.init)", function () {
		allOptions.removeClass('selected');
		$(this).addClass('selected');
		$(".cat-selc").children('.init').html($(this).html());
		allOptions.toggleClass("animatedcat");
		$(this).closest(".cat-selc").children('.cat-selc li.init').removeClass("arrowh3");
	});
	$(document).on("click", function (event) {
		var $trigger = $(".cat-selc");
		if ($trigger !== event.target && !$trigger.has(event.target).length) {
			$(".animatedcat").removeClass("animatedcat");
			$(".cat-selc li.init").removeClass("arrowh3");
		}
	});
	// Main Slider
	$('.main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		draggable: true,
		autoplay: false,
		autoplaySpeed: 3000,
		arrows: true,
		prevArrow: $('.main-slider-prevtab'),
		nextArrow: $('.main-slider-nexttab'),
		dots: false,
		dotsClass: 'container',
		fade: true,
		speed: 500,
		infinite: true,
		cssEase: 'ease-in-out',
		touchThreshold: 100,
		responsive: [{
			breakpoint: 991,
			settings: {
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				arrows: false,
			}
		}]
	});
	$(".main-slider-prevtab,.main-slider-nexttab").click(function () {
		$('.main-slider').slick('refresh');
	});
	// main-slider-6
	$('.main-slider-6').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		draggable: true,
		autoplay: false,
		autoplaySpeed: 3000,
		arrows: true,
		dots: true,
		speed: 500,
		infinite: true,
		cssEase: 'ease-in-out',
		touchThreshold: 100,
		responsive: [{
			breakpoint: 991,
			settings: {
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				dots: true,
				arrows: false,
			}
		}]
	});
	// Category Slider
	$('.category-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: $('.category-slider-prevtab'),
		nextArrow: $('.category-slider-nexttab'),
		dots: true,
		infinite: true,
		centerMode: true,
		centerPadding: '60px',
		cssEase: 'linear',
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				centerPadding: '0px',
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				centerPadding: '0px',
			}
		}]
	});
	// News Slider
	$('.news-mobile-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		infinite: true,
		centerMode: true,
		centerPadding: '60px',
		cssEase: 'linear',
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				centerPadding: '40px',
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				centerPadding: '40px',
			}
		}]
	});
	// Video 
	$(document).on('click', '.js-videoPoster', function (e) {
		e.preventDefault();
		var poster = $(this);
		var wrapper = poster.closest('.js-videoWrapper');
		videoPlay(wrapper);
	});

	function videoPlay(wrapper) {
		var iframe = wrapper.find('.js-videoIframe');
		var src = iframe.data('src');
		wrapper.addClass('videoWrapperActive');
		iframe.attr('src', src);
	}
	// Model & Spec
	$('.model-spec-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: $('.model-spec-slider-prevtab'),
		nextArrow: $('.model-spec-slider-nexttab'),
		dots: false,
		centerMode: true,
		centerPadding: '0px',
		infinite: true,
		cssEase: 'linear',
		focusOnSelect: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				centerPadding: '0px',
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				centerPadding: '0px',
			}
		}]
	});
	$('.side-slid-for').slick({
		slidesToShow: 1,
		arrows: true,
		prevArrow: $('.side-slide-prevtab'),
		nextArrow: $('.side-slide-nexttab'),
		dots: false,
		infinite: true,
		draggable: true,
		fade: true,
		cssEase: 'linear',
		asNavFor: '.side-slid-nav',
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false
			}
		}]
	});
	$('.side-slid-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		asNavFor: '.side-slid-for',
		arrows: false,
		dots: false,
		focusOnSelect: true,
		infinite: false,
		vertical: true,
		verticalSwiping: true,
		draggable: false,
		autoHeight: true,
		accessibility: false,
		variableWidth: false,
		useTransform: false,
		adaptiveHeight: false,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				centerMode: true,
				vertical: false,
				infinite: true,
				centerPadding: '0px',
			}
		}]
	});
	$(".user-page-sec.home-4 .tab-sec ul li, .user-page-sec.home-4 .tab-sec .side-slide-nexttab, .user-page-sec.home-4 .tab-sec .side-slide-prevtab").click(function () {
		$('.side-slid-for').slick('refresh');
		$('.count').each(function () {
			$(this).prop('Counter', 0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	});
	$('.count').each(function () {
		$(this).prop('Counter', 0).animate({
			Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
	// Vehicle Research
	$('.vehicles-slider-for').slick({
		slidesToShow: 10,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: true,
		centerMode: true,
		asNavFor: '.vehicles-slider-nav',
		centerPadding: '60px',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 8,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
			}
		}, {
			breakpoint: 991,
			settings: {
				slidesToShow: 6,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 6,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				centerPadding: '0px',
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				centerPadding: '0px',
			}
		}]
	});
	$('.vehicles-slider-nav').slick({
		slidesToShow: 26,
		slidesToScroll: 26,
		asNavFor: '.vehicles-slider-for',
		dots: false,
		focusOnSelect: true,
		infinite: false,
		draggable: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 10,
				slidesToScroll: 10,
				dots: false,
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 10,
				slidesToScroll: 10,
				dots: false,
				arrows: false,
			}
		}]
	});
	$("#myInput").click(function () {
		$(".filter-option").addClass('show-search');
	});
	$(document).on("click", function (event) {
		var $trigger = $(".input-group");
		if ($trigger !== event.target && !$trigger.has(event.target).length) {
			$(".show-search").removeClass("show-search");
		}
	});
	// Vehicle Research
	$('.gallery-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false,
		draggable: false,
		asNavFor: '.gallery-slider-nav',
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				draggable: false,
				arrows: false,
			}
		}, {
			breakpoint: 991,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				draggable: false,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				draggable: false,
				centerPadding: '0px',
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				draggable: false,
				centerPadding: '0px',
			}
		}]
	});
	$('.gallery-slider-nav').slick({
		slidesToShow: 6,
		slidesToScroll: 12,
		asNavFor: '.gallery-slider-for',
		arrows: false,
		dots: false,
		focusOnSelect: true,
		infinite: false,
		vertical: true,
		verticalSwiping: false,
		draggable: false,
		autoHeight: true,
		accessibility: false,
		variableWidth: false,
		adaptiveHeight: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				dots: false,
				arrows: false,
				draggable: true,
				vertical: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: false,
				draggable: true,
				arrows: false,
				vertical: false,
			}
		}]
	});
	$(".side-video-img-sec-main .first-video-img-sec ul li").click(function () {
		$('.gallery-slider-for').slick('refresh');
	});
	$(document).ready(function () {
		$('.gallery-slider-nav li .overlay').click(function (e) {
			$('.gallery-slider-nav li.gallery-active').removeClass('gallery-active');
			var $parent = $(this).parent();
			$parent.addClass('gallery-active');
			e.preventDefault();
		});
	});
	// multiple filter
	var $grid = $('.grid').isotope({
		itemSelector: '.filter-box'
	});
	var filters = [];
	// change is-checked class on buttons
	$('.filters').on('click', 'li', function (event) {
		var $target = $(event.currentTarget);
		var $target1 = $('.vehiclemodel');
		$target.toggleClass('active');
		var isChecked = $target.hasClass('active');
		var filter = $target.attr('data-filter');
		if (isChecked) {
			addFilter(filter);
		} else {
			removeFilter(filter);
		}
		if ($('.filters li').hasClass('active')) {
			$('.vehiclemodel').addClass("active");
			$('.model-reset-top, .model-reset').css({
				"opacity": "1",
				"display": "block"
			});
		} else {
			$('.vehiclemodel').removeClass("active");
			$('.model-reset-top, .model-reset').css({
				"opacity": "0",
				"display": "none"
			});
		}
		$grid.isotope({
			filter: filters.join(',')
		});
	});

	function addFilter(filter) {
		if (filters.indexOf(filter) == -1) {
			filters.push(filter);
		}
	}

	function removeFilter(filter) {
		var index = filters.indexOf(filter);
		if (index != -1) {
			filters.splice(index, 1);
		}
	}
	// Flip flop
	$('.product-box label').click(function () {
		$(this.parentNode).toggleClass('active', this.checked);
	});
	// banner tabs
	$('.banner-tab-slider').slick({
		slidesToShow: 5,
		arrows: false,
		dots: false,
		draggable: true,
		centerMode: true,
		centerPadding: '0px',
		infinite: true,
		swipeToSlide: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				dots: false,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				dots: false,
				arrows: false,
			}
		}]
	});
	// steps
	$('#add-listing-tab').steps({
		onFinish: function () {
			alert('Completed');
		}
	});
	// darg & drop
	$(document).ready(function () {
		$(".form-group input[type='file']").change(function () {
			$('form-group .add-gallery-text').text(this.files.length + " file(s) selected");
		});
	});
	// nice selct
	$(document).ready(function () {
		$('select.form-control, select.custom-select, .menu-style-3-search').niceSelect();
	});
	// range sliders
	$(function () {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 384144,
			values: [0, 384144],
			slide: function (event, ui) {
				$("#slider-range-value1").val("$ " + ui.values[0]);
				$("#slider-range-value2").val("$ " + ui.values[1]);
			}
		});
		$("#slider-range-value1").val("$ " + $("#slider-range").slider("values", 0));
		$("#slider-range-value2").val("$ " + $("#slider-range").slider("values", 1));
	});
	$(function () {
		$("#slider-range-mobile").slider({
			range: true,
			min: 0,
			max: 384144,
			values: [0, 384144],
			slide: function (event, ui) {
				$("#slider-range-mobile-value1").val("$ " + ui.values[0]);
				$("#slider-range-mobile-value2").val("$ " + ui.values[1]);
			}
		});
		$("#slider-range-mobile-value1").val("$ " + $("#slider-range-mobile").slider("values", 0));
		$("#slider-range-mobile-value2").val("$ " + $("#slider-range-mobile").slider("values", 1));
	});
	$(function () {
		$("#search_distance").slider({
			range: "min",
			value: 60,
			min: 1,
			max: 1000,
			slide: function (event, ui) {
				$(".distance-value").val(ui.value + " Km");
			}
		});
		$(".distance-value").val($("#search_distance").slider("value") + " Km");
	});
	$(function () {
		$("#search_price").slider({
			range: "min",
			value: 50,
			min: 1,
			max: 1000,
			slide: function (event, ui) {
				$(".price-value").val("$ " + ui.value);
			}
		});
		$(".price-value").val("$ " + $("#search_price").slider("value"));
	});
	// faqs collaps
	$(document).ready(function () {
		$('.custom-accordion .card .card-header').on('click', function () {
			$(this).removeAttr('href');
			var element = $(this).parent('.card');
			if (element.hasClass('open')) {
				element.removeClass('open');
				element.find('.card').removeClass('open');
				element.find('.card-body').slideUp();
			} else {
				element.addClass('open');
				element.children('.card-body').slideDown();
				element.siblings('.card').children('.card-body').slideUp();
				element.siblings('.card').removeClass('open');
				element.siblings('.card').find('.card').removeClass('open');
				element.siblings('.card').find('.card-body').slideUp();
			}
		});
		$('.custom-accordion .card .card-header .title').append('<span class="icon"></span>');
	});
	// time counter
	function makeTimer() {
		var endTime = new Date("01 January 2020 00:00:00 GMT+05:30");
		endTime = (Date.parse(endTime) / 1000);
		var now = new Date();
		now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400);
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") {
			hours = "0" + hours;
		}
		if (minutes < "10") {
			minutes = "0" + minutes;
		}
		if (seconds < "10") {
			seconds = "0" + seconds;
		}
		$("#cvdays").html(days);
		$("#cvhours").html(hours);
		$("#cvminutes").html(minutes);
		$("#cvseconds").html(seconds);
	}
	setInterval(function () {
		makeTimer();
	}, 1000);
	// testimonial slider
	$('.testimonial-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		draggable: true,
		autoplay: false,
		autoplaySpeed: 3000,
		arrows: true,
		dots: true,
		speed: 500,
		infinite: true,
		cssEase: 'ease-in-out',
		touchThreshold: 100,
		responsive: [{
			breakpoint: 991,
			settings: {
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				dots: true,
				arrows: false,
			}
		}]
	});
	// car details
	$('.car-details-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		draggable: true,
		autoplay: true,
		autoplaySpeed: 1000,
		arrows: true,
		dots: false,
		speed: 500,
		infinite: true,
		cssEase: 'ease-in-out',
		touchThreshold: 100,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				dots: true,
				arrows: false,
			}
		}]
	});
	// car-detail-slider
	$('.car-detail-slider-for').slick({
		slidesToShow: 1,
		arrows: true,
		dots: false,
		infinite: true,
		draggable: false,
		cssEase: 'linear',
		asNavFor: '.car-detail-slider-nav',
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				arrows: false
			}
		}]
	});
	$('.car-detail-slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.car-detail-slider-for',
		arrows: true,
		dots: false,
		focusOnSelect: true,
		draggable: false,
		infinite: true,
		centerMode: true,
		centerPadding: '15px',
		responsive: [{
			breakpoint: 575,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: false,
				arrows: true
			}
		}]
	});
	// Discover-slider
	$('.discover-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		focusOnSelect: true,
		draggable: false,
		infinite: true,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				dots: true,
				arrows: false,
			}
		}]
	});
	// img-slider-reviews
	$('.img-slider-reviews').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		focusOnSelect: true,
		draggable: true,
		infinite: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
			}
		}, {
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				dots: false,
				arrows: true,
			}
		}]
	});
	// car-slider-index-6
	$('.car-slider-index-6').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		focusOnSelect: true,
		draggable: true,
		infinite: true,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: false,
				arrows: true,
			}
		}, {
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
			}
		}, {
			breakpoint: 568,
			settings: {
				slidesToShow: 1,
				dots: true,
				arrows: false,
			}
		}]
	});
	// instagram slider
	$('.instagram-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		autoplay: true,
		infinite: true,
		draggable: false,
		cssEase: 'linear',
	});
	$('.blog-page-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		infinite: true,
		draggable: true,
		cssEase: 'linear',
	});
	new WOW().init();
})(jQuery);