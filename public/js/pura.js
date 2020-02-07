$(document).ready(function() {
	$(function() {

		$.fn.animateNumbers = function(stop, commas, duration, ease) {
			return this.each(function() {
				var $this = $(this);
				// var start = parseInt($this.text().replace(/,/g, ""));
				var start = Number($this.text());
				commas = (commas === undefined) ? false : commas;
				$({value: start}).animate({value: stop}, {
					duration: duration == undefined ? 1000 : duration,
					easing: ease == undefined ? "swing" : ease,
					step: function() {
						// $this.text(Math.floor(this.value));
						$this.text(parseFloat(Math.round(this.value * 100) / 100).toFixed(1));
						if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
					},
					complete: function() {
						if (parseInt($this.text()) !== stop) {
							$this.text(stop);
							if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
						}
					}
				});
			});
		};

		var controller = new ScrollMagic.Controller();

		/* .product-liber-computer */
		var tween = TweenMax.fromTo(".product-liber-computer .bc-computer-1", 1.3, { x:-20, 'caly': 120 }, { x:0, 'caly': -40 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer .banner-info", duration: '450px', offset: '100px'})
			.setTween(tween)
			.on("progress", function (e) {
				TweenMax.to(".product-liber-computer .bc-computer-1", .2 ,{ y: (120 - ( ( 120 - ( -40 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });
			})
			// .addIndicators({name:'.product-liber-computer .bc-computer-1'})
			.addTo(controller);



		/* .product-liber-performance */
		var tween = TweenMax.staggerFromTo(".product-liber-performance .data-card", .6, { x: 20, opacity: 0 }, { x: 0, opacity: 1 }, .3);
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance", reverse: false})
			.setTween(tween)
			// .addIndicators({name:'.product-liber-performance .data-card .badge-value'})
			.addTo(controller);

		/* .product-liber-power */
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-power", reverse: false})
			.setClassToggle(".product-liber-power .battery-wrap", "charge")
			// .addIndicators({name: ".product-liber-power .battery-wrap"})
			.addTo(controller);

		var tween = TweenMax.staggerTo(".product-liber-power .battery-block li", .066666, { 'background-color': '#7fb041'}, .066666);
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-power", reverse: false})
			.setTween(tween)
			// .addIndicators({name:'.product-liber-power .battery-block li'})
			.addTo(controller);

		/* .product-liber-keyboard */
		var tween = TweenMax.fromTo(".product-liber-keyboard .bc-computer-1", .9, { x: 100, opacity: 0 }, { x: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-keyboard", reverse: false, })
			.setTween(tween)
			// .addIndicators({name:'.product-liber-keyboard .bc-computer-1'})
			.addTo(controller);


		/* .Fadein */
		var tween = TweenMax.fromTo(".Fadein", .4, { opacity: 0 }, { opacity: 1 }, .3);
		var scene = new ScrollMagic.Scene({triggerElement: ".Fadein", duration: '100%', offset: '-100px'})
			.setTween(tween)
			.addTo(controller);

		/* .Fadein-up */

		var tween = TweenMax.fromTo(".Fadein-up", .9, { y: 100, opacity: 0 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".Fadein-up", duration: '50%', offset: '-100px'})
			.setTween(tween)
			.addTo(controller);

		/* .Fadein-down */

		var tween = TweenMax.fromTo(".Fadein-down", .9, { y: 0, opacity: 0 }, { y: 100, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".Fadein-down", duration: '50%', offset: '-100px'})
			.setTween(tween)
			.addTo(controller);

		/* .Fadein-left */

		var tween = TweenMax.fromTo(".Fadein-left", .9, { x: 0, opacity: 0 }, { x: 100, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".Fadein-down", duration: '50%', offset: '-100px'})
			.setTween(tween)
			.addTo(controller);

		/* .Fadein-right */

		var tween = TweenMax.fromTo(".Fadein-right", .9, { x: 100, opacity: 0 }, { x: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".Fadein-down", duration: '50%', offset: '-100px'})
			.setTween(tween)
			.addTo(controller);

		/* .product-liber-wifi */
		var tween = TweenMax.fromTo(".product-liber-wifi .bc-computer-2", .4, { 'calx': 300, opacity: 1 }, { 'calx': 100, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-wifi ", duration: '100%'})
			.setTween(tween)
			.on("progress", function (e) {
				TweenMax.to(".product-liber-wifi .bc-computer-2", .2 ,{ x: (300 - (( 300 - ( 100 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });
			})
			// .addIndicators({name:'.product-liber-size .bc-computer-2'})
			.addTo(controller);


		var tween = TweenMax.staggerFromTo(".product-liber-wifi .data-card", .6, { x: 20, opacity: 0 }, { x: 0, opacity: 1 }, .3);
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-wifi", reverse: false})
			.setTween(tween)
			// .addIndicators({name:'.product-liber-performance .data-card .badge-value'})
			.addTo(controller);




		//reverse
		var tween = TweenMax.fromTo(".product-liber-banner .banner-block", .4, {opacity: 1 }, { opacity: .3 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer", duration: '50%', offset: '-100px'})
			.setTween(tween)
			// .addIndicators({name:'.banner-block'})
			.addTo(controller);

		// var scd = new TimelineMax()
		// .add(TweenLite.set('.product-liber-banner .brand', {opacity:0}))
		// .add(TweenLite.fromTo('.product-liber-banner', 3, {opacity: 0}, {opacity: 1}, Linear.easeOut),.2)
		// .add(TweenLite.to('.product-liber-banner .brand', .4, {opacity: 1}, Linear.easeOut), 1.2);

		$('.an-scroll').length && TweenMax.to('.an-scroll span', 1.5, {y:"7px", ease:Circ.easeInOut, repeat:-1, yoyo: true});

	});
});
