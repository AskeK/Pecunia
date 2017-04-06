


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
        sidebar.style.height = content.clientHeight + 'px';
    }
    
} module.exports = Article;