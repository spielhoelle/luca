/**
 * A very lightweight plugin to do sth. with 'everything' when it's in viewport.
 * E.g. use it for lazy loading images.
 *
 * Licensed under the MIT license.
 * Copyright 2015 Stefan Käsche
 */

(function( window, document, undefined ) {
    "use strict";

    window.peekaboo = function( elements, settings ) {
        if ( typeof elements === 'string' ) elements = document.querySelectorAll( elements );
        if ( !elements || !elements.length ) return;

        var options = {
            threshold: -500,
            class: 'peekaboo',
            callback: function() {}
        };

        // merge
        if( Object.prototype.toString.call( settings ) === '[object Object]' ) {
            for ( var option in settings) {
                options[option] = settings[option];
            }

            // make sure callback is a function
            if ( typeof options['callback'] !== 'function' ) {
                options['callback'] = function() {};
            }
        }

        function peekaboo() {
            for ( var i = 0; i < elements.length; i++) {
                if ( elements[i] == undefined || elements[i].classList.contains( options.class ) ) continue;

                var element = elements[i],
                    wt = window.pageYOffset,
                    wb = wt + ( Math.max( document.documentElement.clientHeight, window.innerHeight || 0 ) ),
                    et = element.offsetTop;

                // get absolute offset top
                while ( element = element.offsetParent ) {
                    et += element.offsetTop;
                }

                var eb = et + elements[i].clientHeight;

                // check if element is in viewport
                if ( eb >= wt - options.threshold && et <= wb + options.threshold ) {
                    elements[i].classList.add( options.class );
                    options.callback.call( elements[i] );
                }
            }
        }

        // ...
        window.addEventListener( 'scroll', peekaboo );
        window.addEventListener( 'resize', peekaboo );

        // initial call
        peekaboo();
    };

})( this, this.document );
