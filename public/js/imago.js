$(function(){

	function detectmob() { 
		if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ) 
			return true;

		return false;
	}	

	var banner1 = new foldImage('.product-imago-banner .masked-inner', '/images/imago/sc1_01.jpg', 1218, 699, 10, 7, 35, '_js-fold');
	var banner2 = new foldImage('.product-imago-life   .masked-inner', '/images/imago/sc2_01.png', 1329, 976, 10, 7, 11, '_js-fold');
	var banner3 = new foldImage('.product-imago-home   .masked-inner', '/images/imago/sc5_01.png', 1330, 975, 10, 7, 61, '_js-fold');

	if (!detectmob()) {

		var controller = new ScrollMagic.Controller();

		var scene = new ScrollMagic.Scene({triggerElement: ".product-imago-banner",  reverse: false})
					.on('enter leave', function(e){
						$('.product-imago-banner ._js-fold').trigger('tileAnim')
					})
					.addTo(controller);		

		var scene = new ScrollMagic.Scene({triggerElement: ".product-imago-life",  reverse: false})
					.on('enter leave', function(e){
						$('.product-imago-life ._js-fold').trigger('tileAnim')
					})
					.addTo(controller);	
					
		var scene = new ScrollMagic.Scene({triggerElement: ".product-imago-home",  reverse: false})
					.on('enter leave', function(e){
						$('.product-imago-home ._js-fold').trigger('tileAnim')
					})
					.addTo(controller);				

	 
		var tween = TweenMax.fromTo(".product-imago-banner .ac-image-01", .8, { x: -100, alpha : 0 }, {x: 0, alpha : 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-imago-banner .ac-image-02",  reverse: false})
					.setTween(tween)
					.addTo(controller);				

		var tween = TweenMax.fromTo(".product-imago-banner .ac-image-02", .8, { scale: 1.3, alpha : 0 }, {scale: 1, alpha : 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-imago-banner .ac-image-02",  reverse: false})
					.setTween(tween)
					.addTo(controller);


		// var timeline = new TimelineLite()
		// 			    .fromTo('.product-imago-life .masked-inner', 1.25, {width: '0%'}, {width: '100%'})
		// 			    .fromTo('.product-imago-life .mask-img', 1.25, {x: -50, alpha: .5}, {x: 0, alpha: 1}, '-=1.25');
		// var scene    = new ScrollMagic.Scene({triggerElement: ".product-imago-life",  reverse: false})
	 //    				.setTween(timeline)
	 //    				// .addIndicators({name:'.product-liber-life'}) 
		// 				.addTo(controller);			


		var tween = TweenMax.fromTo(".product-imago-interface .ac-image-01", .8, { scale: 1.3, alpha : 0 }, {scale: 1, alpha : 1 });
		var scene = new ScrollMagic.Scene({triggerElement: ".product-imago-interface",  reverse: false})
					.setTween(tween)
					// .addIndicators({name:'.ac-image-02'}) 
					.addTo(controller);

		// var timeline = new TimelineLite()
		// 			    .fromTo('.product-imago-home .masked-inner', 1.25, {width: '0%'}, {width: '100%'})
		// 			    .fromTo('.product-imago-home .mask-img', 1.25, {x: 50, alpha: .5}, {x: 0, alpha: 1}, '-=1.25');
		// var scene    = new ScrollMagic.Scene({triggerElement: ".product-imago-home",  reverse: false})
	 //    				.setTween(timeline)
	 //    				// .addIndicators({name:'.product-liber-life'}) 
		// 				.addTo(controller);		

		$('.an-scroll').length && TweenMax.to('.an-scroll span', 1.5, {y:"7px", ease:Circ.easeInOut, repeat:-1, yoyo: true});


		$('section').each(function(){
			$el = $(this).find('.float-text');

			if (!$el.length){ return }


			var tween = TweenMax.staggerFromTo($el, .8, {  y: 40, alpha: 0}, {ease: Back.easeOut.config(1.7), y: 0, alpha: 1}, 0.2);
			var scene    = new ScrollMagic.Scene({triggerElement: this})
	    				.setTween(tween)
						.addTo(controller);		

		});

	}

	

	function foldImage(_container, _url, _w, _h, _tilesX, _tilesY, _startTileID, _className){
		var _this = this;
		var _me = document.createElement("div");
		_me.className = "foldImg " + _className;
		var _loaded = false;
		var _numTiles = _tilesX*_tilesY;
		var _tiles = [];
		var _tileW = Math.round(_w/_tilesX), _tileH = Math.round(_h/_tilesY);
		var _animedIn = false;
		for(var i=0;i<_numTiles;i++) _tiles.push(new foldTile(i, _me, _tileW, _tileH, _tilesX, _tilesY));

		var _baseImg = new GetImage(GetUrl(_url), null, _w, _h, "prodImg", baseLoaded);
		var _totalCalls = 0;

		$(_container).append(_me);
		_baseImg.load();
		$(_me).on("tileAnim", neighbourCall);

		function baseLoaded(){
			for(var i=0;i<_numTiles;i++) _tiles[i].drawSection(_baseImg.img, _tileW, _tileH);
		}
	
		function neighbourCall(e, c){
			c = c == undefined ? _startTileID : c;
			_totalCalls++;
			for(i=0;i<_numTiles;i++) _tiles[i].neighbourCalledMe(c, _totalCalls);
		}
	}

	function foldTile(_id, _container, _tileW, _tileH, _tilesX, _tilesY){
		var _this = this;
		var _me = document.createElement("div");
		_me.className = "tile";
		var _canvas = document.createElement("canvas");
		_canvas.className = "canvas";
		var _x = (_id%_tilesX) * _tileW, _y = Math.floor(_id/_tilesX) * _tileH;
		var _black = document.createElement("div");
		_black.className = "black";
		_me.appendChild(_canvas);
		var _scale = 1;
		
		var _oriTileW = _tileW, _oriTileH = _tileH;
		var _maxRotX = 90, _maxRotY = 90, _numTiles = _tilesX*_tilesY;
		var _rotX = 0, _rotY = 0;
		var _origin = "0 50%", _perspective = 500;
		var _oriX = "0", _oriY = "0";
		var _ctx = _canvas.getContext('2d');

		_this.drawSection = function(_img, _tileW, _tileH){
			_canvas.width = _tileW*_scale, _canvas.height = _tileH*_scale;
			var _x = (_id%_tilesX) * _tileW, _y = Math.floor(_id/_tilesX) * _tileH;
			_me.style.left = _x + "px", _me.style.top = _y+"px", _me.style.width = _tileW + "px", _me.style.height = _tileH + "px";
			_ctx.drawImage(_img, (_id%_tilesX) * _oriTileW, Math.floor(_id/_tilesX) * _oriTileH, _oriTileW, _oriTileH, 0, 0, _tileW*_scale, _tileH*_scale);
			_container.appendChild(_me);
		}
		
		var _animTime = 0;
		var _animInCalled = false;
		
		_this.neighbourCalledMe = function(_neighbourId, _totalCalls){
			if(_animInCalled) return;
			
			var _xstart = (_neighbourId%_tilesX) * _tileW + _tileW*.5, _ystart = Math.floor(_neighbourId/_tilesX) * _tileH + _tileH*.5;
			var _mycenterX = _x+_tileW*.5, _mycenterY = _y+_tileH*.5;
			var _distanceToStartTile = Math.sqrt( Math.pow((_mycenterX-_xstart), 2) + Math.pow((_mycenterY-_ystart), 2));
			
			if(_distanceToStartTile > (Math.max(_tileW,_tileH)+4)) return;
			_animInCalled = true;
			
			if(_mycenterX < _xstart) _rotY = _maxRotY, _oriX = "100%";
			else if(_mycenterX > _xstart) _rotY = -_maxRotY, _oriX = "0";
			else _oriX = "50%";
			if(_mycenterY < _ystart) _rotX = -_maxRotX, _oriY = "100%";
			else if(_mycenterY > _ystart) _rotX = _maxRotX, _oriY = "0";
			else _oriY = "50%";
			_origin = _oriX + " " + _oriY;

			TweenLite.set(_me, {rotationX:_rotX, rotationY:_rotY, transformPerspective:_perspective, transformOrigin:_origin});
			
			var _myTime = _animTime+Math.random()*.7, _ease = Quad.easeOut;
			if(_totalCalls > _numTiles * .5) _ease = Back.easeOut, _myTime += .2;

			setTimeout(callNeighbour, Math.max(0, _myTime*1000 * .5));
			_me.appendChild(_black);
			TweenLite.to(_me, _myTime, {rotationX:0, rotationY:0, transformOrigin:_origin, transformPerspective:_perspective, ease:_ease, onStart:started, onComplete:animInOver});
			TweenLite.to(_black, _myTime*.9, {autoAlpha:0, ease:Quad.easeOut});
		}
		
		function started(){
			_me.style.visibility = "visible";
		}
		
		function callNeighbour(){
			$(_container).trigger("tileAnim", _id);
		}
		
		function animInOver(){
			if(_id%_tilesX == 0 || _id%_tilesX == (_tilesX-1) || Math.floor(_id/_tilesY) == 0 || Math.floor(_id/_tilesX) == (_tilesY-1)){
				if(_id%_tilesX == 0) _rotY = _maxRotY, _oriX = "100%";
				else if(_id%_tilesX == (_tilesX-1)) _rotY = -_maxRotY, _oriX = "0";
				else _rotY = 0, _oriX = "50%";
				if(Math.floor(_id/_tilesY) == 0) _rotX = -_maxRotX, _oriY = "100%";
				else if(Math.floor(_id/_tilesX) == (_tilesY-1)) _rotX = _maxRotX, _oriY = "0";
				else _rotX = 0, _oriY = "50%";
				_origin = _oriX + " " + _oriY;
			}
		}
		
		_this.getTileW = function(){
			return _tileW;
		}
	}

	function GetImage(n, t, i, r, u, f, e) {
	    function a(n) {
	        i && r || (i = o.naturalWidth,
	        r = o.naturalHeight);
	        l = i / r;
	        f && f.call(s, n)
	    }
	    var s = this, o, l, h, c;
	    o = i && r ? new Image(i,r) : new Image;
        o.src = n;
	    s.img = o;
	    u ? o.className = u : o.style.position = "absolute";
	    s.load = function() {
	        o.onload = a;
	        o.src = n;
	        o.onmousedown = function(n) {
	            n && n.preventDefault && n.preventDefault()
	        };
	        t && (e ? t.insertBefore(o, t.firstChild) : t.appendChild(o))
	    };
	    s.destroy = function() {
	        o.src = "";
	        o = null
	    };
	    s.scaleTo = function(n, t, u, f, e) {
	        var s = t / u
	          , a = l;
	        n == "fill" || n == "fit" && (s = l,
	        a = t / u);
	        s < a ? (h = Math.ceil(u * l),
	        c = u) : (h = t,
	        c = Math.ceil(t / l));
	        n != "none" ? (o.style.width = h + "px",
	        o.style.height = c + "px") : (h = i,
	        c = r);
	        f == "center" ? o.style.marginLeft = Math.round((t - h) * .5) + "px" : f == "left" ? o.style.marginLeft = "0px" : f == "right" && (o.style.marginLeft = Math.round(t - h) + "px");
	        e == "center" ? o.style.marginTop = Math.round((u - c) * .5) + "px" : e == "top" ? o.style.marginTop = "0px" : e == "bottom" && (o.style.marginTop = Math.round(u - c) + "px")
	    };
	    s.getW = function() {
	        return h
	    };
	    s.getH = function() {
	        return c
	    }
	}

	function GetUrl(_input) {
        return _input;
    }

});