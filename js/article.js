


// Article
class Article {
    
    // Constructor
    constructor() {
        setTimeout(() => { this.adaptSticky(); }, 300);
        window.addEventListener('resize', this.adaptSticky);
    }
    
    // Adapt sticky
    adaptSticky() {

        // Fields
        let sidebar = document.getElementById('sidebar'),
            sidebarinner = document.getElementById('sidebar-inner'),
            content = document.getElementById('content');
        
        // Sets height
        sidebar.style.height = '100%';
        if ( window.innerWidth <= 640 ) return; 
        sidebar.style.height = content.clientHeight - 80 + 'px';

        // Sets top
        let top = window.innerHeight - sidebarinner.clientHeight - 32;
        if ( top > 0 ) { sidebarinner.style.top = ( window.innerHeight / 2 - sidebarinner.clientHeight / 2 + 114 / 2 ) + 'px'; }
        else { sidebarinner.style.top = top + 'px'; }

    }
    
} module.exports = Article;
