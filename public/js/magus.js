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

		var tween = TweenMax.fromTo(".product-liber-computer .bc-computer-2", 1.3, { x: 30, 'caly': -20 }, { x: 0, 'caly': 50 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer .banner-info", duration: '450px', offset: '100px'})
					.setTween(tween)
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-computer .bc-computer-2", .2 ,{ y: (-20 - ( ( -20 - ( 50 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-computer .bc-computer-2'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-computer .bc-computer-3", 1.3, { 'caly': 200 }, { x: -20, 'caly': -70 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer .banner-info", duration: '450px', offset: '100px'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-computer .bc-computer-3", .2 ,{ y: (200 - ( ( 200 - ( -70 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-computer .bc-computer-3'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-computer .bc-computer-4", 1.3, { 'caly': -30 }, { x: 30, 'caly': 70 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer .banner-info", duration: '450px', offset: '100px'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-computer .bc-computer-4", .2 ,{ y: (-30 - ( ( -30 - ( 70 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-computer .bc-computer-4'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-computer .bc-computer-5", 1.3, { x:-20, 'caly': 240 }, { x: 20, 'caly': -90 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer .banner-info", duration: '450px', offset: '100px'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-computer .bc-computer-5", .2 ,{ y: (240 - ( ( 240 - ( -90 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-computer .bc-computer-5'})
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-computer .bc-computer-6", 1.3, { x: -20, 'caly': -140}, { x: 0, 'caly': 40 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-computer .banner-info", duration: '450px', offset: '100px'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-computer .bc-computer-6", .2 ,{ y: (-140 - ( ( -140 - ( 40 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-computer .bc-computer-6'}) 
					.addTo(controller);

		/* .product-liber-size */
		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-1", .8, { 'caly': -400 }, { 'caly': 0 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '200px'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-size .bc-computer-1", .2 ,{ y: ((-400 - 0) * e.progress) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-size .bc-computer-1'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-2", .8, { 'caly': 400 }, { 'caly': 0 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '200px'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-size .bc-computer-2", .2 ,{ y: ((400 - 0) * e.progress), overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-size .bc-computer-2'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-3", 2, { y: 400, opacity: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '200px', triggerHook: 'onEnter'})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .bc-computer-3'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-4", 2, { y: 200, opacity: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '200px', triggerHook: 'onEnter'})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .bc-computer-4'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-5", 2, { y: 300, opacity: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '300px', triggerHook: 'onEnter'})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .bc-computer-5'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-6", 2, { y: 250, opacity: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '500px', triggerHook: 'onEnter'})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .bc-computer-6'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-7", 2, { y: 270, opacity: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '500px', triggerHook: 'onEnter'})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .bc-computer-7'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-size .bc-computer-8", 2, { y: 440, opacity: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size", duration: '100%', offset: '500px', triggerHook: 'onEnter'})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .bc-computer-8'}) 
					.addTo(controller);


		var tween = TweenMax.staggerFromTo(".product-liber-size .data-card", .8, { x: -50, opacity: 0 }, { x: 0, opacity: 1 }, .2);
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-size .banner-info", reverse: false, })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-size .data-card'})
					.on("start", function (e) {
						$(".product-liber-size .data-card .badge-value").each(function(i, e){ $(e).data('value', $(e).text()); $(e).text(0); $(e).animateNumbers($(e).data('value')) })
					})
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

		/* .product-liber-port  */
		var tween = TweenMax.fromTo(".product-liber-port .bc-computer-1", .9, { y: 300 }, { y: 0 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-port", duration: '100%', triggerHook: 'onEnter' })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-port .bc-computer-1'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-port .bc-computer-2", .9, { x: -300 }, { x: 0 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-port .bc-computer-2", duration: '70%', offset: '200px', triggerHook: 'onEnter' })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-port .bc-computer-2'}) 
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-port .bc-computer-3", .9, { x: 300 }, { x: 0 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-port .bc-computer-3", duration: '70%', offset: '200px', triggerHook: 'onEnter' })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-port .bc-computer-3'}) 
					.addTo(controller);


		/* .product-liber-performance2 */
		var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-1", 1.3, { opacity: 0 }, { opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2", reverse: false})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		// var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-3", 1.3, { opacity: 0 }, { opacity: 1 }, Power2.easeOut);
		// var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2", reverse: false})
		// 			.setTween(tween)
		// 			.addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
		// 			.addTo(controller);	

		var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-4", 0.75, { y: 30, opacity: 0 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2 .banner-data-block", reverse: false })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-5", 0.75, { y: 30, opacity: 0, delay: .3 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2 .banner-data-block", reverse: false })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-6", 0.75, { y: 30, opacity: 0, delay: .6 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2 .banner-data-block", reverse: false })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-7", 0.75, { y: 30, opacity: 0, delay: .9 }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2 .banner-data-block", reverse: false })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		var tween = TweenMax.fromTo(".product-liber-performance2 .bc-computer-8", 0.75, { y: 30, opacity: 0, delay: 1.2  }, { y: 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2 .banner-data-block", reverse: false })
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		var tween = TweenMax.fromTo(".product-liber-performance2 .banner-data-block", 1.3, { 'background-size': '0%', opacity: 0 }, { 'background-size': '100%', opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-performance2 .banner-data-block", reverse: false})
					.setTween(tween)
					// .addIndicators({name:'.product-liber-performance2 .banner-data-block'}) 
					.addTo(controller);	

		/* .product-liber-wifi */
		var tween = TweenMax.fromTo(".product-liber-wifi .bc-computer-1", .4, { 'calx': -400, opacity: 1 }, { 'calx': 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-wifi", duration: '100%'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-wifi .bc-computer-1", .2 ,{ x: (-400 - (( -400 - ( 0 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-size .bc-computer-1'})
					.addTo(controller);

		var tween = TweenMax.fromTo(".product-liber-wifi .bc-computer-2", .4, { 'calx': 400, opacity: 1 }, { 'calx': 0, opacity: 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-liber-wifi", duration: '100%'})
					.setTween(tween)
					.on("progress", function (e) {
						TweenMax.to(".product-liber-wifi .bc-computer-2", .2 ,{ x: (400 - (( 400 - ( 0 ) ) * e.progress)) , overwrite:5, ease:Power1.easeOut });       
					})
					// .addIndicators({name:'.product-liber-size .bc-computer-2'}) 
					.addTo(controller);



		//reverse
		var tween = TweenMax.fromTo(".product-liber-banner .banner-block", .4, {opacity: 1 }, { opacity: 1 });
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
