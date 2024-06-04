class RoleToggler {
    constructor() {
        this.themeToggler = document.getElementById('theme-toggler');
        this.dynamicRole = document.getElementById('dynamic-role');
        this.roles = ['Pentester', 'Developer', 'Graphic Designer'];
        this.currentRole = 0;
        this.isDeleting = false;
        this.txt = '';
        this.txtIndex = 0;
        this.typeSpeed = 150;
        this.loadAttempts = 0;
    }

    loadParticles() {
        console.log('Attempting to load Particles.js');
        if (typeof particlesJS === 'undefined') {
            console.error('particlesJS not loaded yet');
            if (this.loadAttempts++ < 10) {
                setTimeout(() => this.loadParticles(), 1000);
            } else {
                console.error("Failed to load particlesJS after multiple attempts.");
            }
        } else {
            const theme = document.documentElement.classList.contains('dark-theme') ? 'light' : 'dark';
            const configPath = theme === 'light' ? 'js/particlesjs-red.json' : 'js/particlesjs-white.json';
            particlesJS.load('particles-js', configPath, function() {
                console.log('callback - particles.js config loaded');
            });
        }
    }

    type() {
        if (this.isDeleting) {
            this.txtIndex--;
            this.txt = this.roles[this.currentRole].substring(0, this.txtIndex);
        } else {
            this.txtIndex++;
            this.txt = this.roles[this.currentRole].substring(0, this.txtIndex);
        }

        this.dynamicRole.innerHTML = `<span class="cursor">${this.txt}</span>`;

        if (!this.isDeleting && this.txt === this.roles[this.currentRole]) {
            this.typeSpeed = 2000;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.currentRole++;
            this.typeSpeed = 500;
            if (this.currentRole >= this.roles.length) this.currentRole = 0;
        } else {
            this.typeSpeed = this.isDeleting ? 75 : 150;
        }

        setTimeout(() => this.type(), this.typeSpeed);
    }

    toggleTheme() {
        if (document.documentElement.classList.contains('dark-theme')) {
            document.documentElement.classList.remove('dark-theme');
            document.documentElement.classList.add('light-theme');
            localStorage.setItem('theme', 'light-theme');
        } else {
            document.documentElement.classList.remove('light-theme');
            document.documentElement.classList.add('dark-theme');
            localStorage.setItem('theme', 'dark-theme');
        }
        this.loadParticles();
    }

    init() {
        if (this.themeToggler && this.dynamicRole) {
            setTimeout(() => this.type(), this.typeSpeed);
            this.loadParticles();
    
            this.themeToggler.addEventListener('click', () => this.toggleTheme());
        } else {
            console.error('Initialization failed: Elements not found');
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const roleToggler = new RoleToggler();
    roleToggler.init();
});
