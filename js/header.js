
// Header Handler
class HeaderHandler{
    
    /* ---- Constructor ---- */
    constructor( ) {
        this.elem = document.getElementById('topbar');
        this.lastscroll = 0; this.currentPosition = 0;
        
        window.addEventListener( 'scroll', this.onscroll.bind(this) );
        let hamburger = document.getElementById('hamburger');
        hamburger.addEventListener( 'click', this.onhamburgerclick.bind(this) );
        
    }
    
    /* ---- On Scroll ---- */
    onscroll( e ) {
        if ( window.innerWidth >= 640 ) {
            this.elem.style.top = '0px';
            return;
        }
        
        let delta = window.pageYOffset - this.lastscroll;
        this.currentPosition += delta;
        
        if ( this.currentPosition > 38 ) this.currentPosition = 38;
        if ( this.currentPosition < 0 ) this.currentPosition = 0;
        this.elem.style.top = -this.currentPosition + 'px';
        this.lastscroll = window.pageYOffset;
        
    }
    
    /* ---- Handle hamburger click ---- */
    onhamburgerclick( e ) {
        let mc = document.getElementById('main-container');
        if ( mc.classList.contains('leftshifted') ) mc.classList.remove('leftshifted');
        else mc.classList.add('leftshifted');
    }
    
} module.exports = HeaderHandler;