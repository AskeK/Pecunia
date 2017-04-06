
require ( '../style/main.scss' );

// Main entry point for js
class Main {
    
    /* ---- Constructor ---- */
    constructor() {
        this.headerHandler = new ( require( './header.js' ) );
        this.articleHandler = new ( require( './article.js' ) );
    }
    
} new Main();