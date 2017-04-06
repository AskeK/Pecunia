


// Article
class Article {
    
    // Constructor
    constructor() {
        this.adaptSticky();
        window.addEventListener('resize', this.adaptSticky);
    }
    
    // Adapt sticky
    adaptSticky() {
        let sidebar = document.getElementById('sidebar'),
            content = document.getElementById('content');
        
        sidebar.style.height = '100%';
        if ( window.innerWidth <= 640 ) return; 
        sidebar.style.height = content.clientHeight - 80 + 'px';
    }
    
} module.exports = Article;