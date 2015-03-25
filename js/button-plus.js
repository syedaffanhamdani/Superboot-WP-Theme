function btn_control(){
	if($('.btn-extra').hasClass('btn-5')){
		$('.btn-5').wrapInner('<span></span>');
	}
	if($('.btn-extra').hasClass('btn-7')){
		$('.btn-7').wrap('<span id="btn-click"></span>');
	}
	$( ".btn-extra" ).wrap( '<span style="position:relative; z-index:1;"></span>' );

}

btn_control();

var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
	buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
	totalButtons7Click = buttons7Click.length,
	totalButtons9Click = buttons9Click.length;

buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

function activate() {
	var self = this, activatedClass = 'btn-activated';

	if( classie.has( this, 'btn-7h' ) ) {
		// if it is the first of the two btn-7h then activatedClass = 'btn-error';
		// if it is the second then activatedClass = 'btn-success'
		activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success-1';
	}
	else if( classie.has( this, 'btn-8g' ) ) {
		// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
		// if it is the second then activatedClass = 'btn-error3d'
		activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success-13d' : 'btn-error3d';
	}

	if( !classie.has( this, activatedClass ) ) {
		classie.add( this, activatedClass );
		setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
	}
}




// document.querySelector( '.btn-7i' ).addEventListener( 'click', function() {
// 	classie.add( document.querySelector( '#trash-effect' ), 'trash-effect-active' );
// }, false );