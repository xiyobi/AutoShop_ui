// Language content configuration
const content = {
    en: {
        title: "Car Information",
        description: "Here you can find the details of your selected car.",
        nav: {
            cars: "Cars",
            commercial: "Commercial vehicles",
            motorcycles: "Motorcycles",
            news: "News",
            contacts: "Contacts"
        },
        buttons: {
            login: "Login",
            register: "Register",
            contact: "Contact Seller",
            commonQuestions: "Common Questions"
        }
    },
    uz: {
        title: "Avtomobil ma'lumoti",
        description: "Bu yerda tanlangan avtomobilingiz haqida ma'lumot topishingiz mumkin.",
        nav: {
            cars: "Avtomobillar",
            commercial: "Tijorat transporti",
            motorcycles: "Mototsikllar",
            news: "Yangiliklar",
            contacts: "Kontaktlar"
        },
        buttons: {
            login: "Kirish",
            register: "Ro'yxatdan o'tish",
            contact: "Sotuvchi bilan bog'lanish",
            commonQuestions: "Ko'p so'raladigan savollar"
        }
    }
};

// Language switching functionality
function setLanguage(lang) {
    try {
        // Update text content for all elements
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.dataset.translate;
            const keys = key.split('.');
            let value = content[lang];
            keys.forEach(k => {
                value = value[k];
            });
            element.innerText = value;
        });

        // Update current language indicator
        document.getElementById('currentLanguage').innerText = lang.toUpperCase();
        
        // Store language preference
        localStorage.setItem('preferredLanguage', lang);
        
        // Hide the dropdown menu
        document.getElementById('languageDropdown').classList.add('hidden');
    } catch (error) {
        console.error('Error switching language:', error);
    }
}

// Mobile menu functionality
const mobileMenu = {
    init() {
        this.menuButton = document.getElementById('mobileMenuButton');
        this.menuContent = document.getElementById('mobileMenuContent');
        this.setupEventListeners();
    },

    setupEventListeners() {
        this.menuButton.addEventListener('click', () => this.toggleMenu());
        
        // Close menu on outside click
        document.addEventListener('click', (e) => {
            if (!this.menuButton.contains(e.target) && !this.menuContent.contains(e.target)) {
                this.closeMenu();
            }
        });
    },

    toggleMenu() {
        this.menuContent.classList.toggle('hidden');
        this.menuContent.classList.toggle('slide-in');
    },

    closeMenu() {
        this.menuContent.classList.add('hidden');
        this.menuContent.classList.remove('slide-in');
    }
};

// Common questions functionality
function setupCommonQuestions() {
    const commonQuestions = [
        "Is the mileage original?",
        "What's the delivery time?",
        "Can I test drive?",
        "Is there a warranty?"
    ];

    const questionContainer = document.getElementById('commonQuestions');
    if (questionContainer) {
        commonQuestions.forEach(question => {
            const button = document.createElement('button');
            button.innerText = question;
            button.className = 'common-question-btn';
            button.addEventListener('click', () => sendQuestion(question));
            questionContainer.appendChild(button);
        });
    }
}

function sendQuestion(question) {
    try {
        // Implement question sending logic here
        console.log(`Question sent: ${question}`);
        // Show success message
        showNotification('Question sent successfully!');
    } catch (error) {
        console.error('Error sending question:', error);
        showNotification('Failed to send question. Please try again.', 'error');
    }
}

// Notification system
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerText = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Initialize mobile menu
    mobileMenu.init();
    
    // Setup language switcher
    const storedLanguage = localStorage.getItem('preferredLanguage') || 'en';
    setLanguage(storedLanguage);
    
    // Setup common questions
    setupCommonQuestions();
    
    // Add smooth scrolling to all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

