import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Animasi untuk elemen dengan kelas animate-blob
const animateBlobs = () => {
    const blobs = document.querySelectorAll('.animate-blob');

    blobs.forEach(blob => {
        const randomX = Math.random() * 10 - 5;
        const randomY = Math.random() * 10 - 5;
        const randomDelay = Math.random() * 2;
        const randomDuration = 3 + Math.random() * 2;

        blob.style.animation = `blob ${randomDuration}s ease-in-out ${randomDelay}s infinite alternate`;
        blob.style.transform = `translate(${randomX}px, ${randomY}px)`;
    });
};

// Animasi untuk partikel
const animateParticles = () => {
    const particles = document.querySelectorAll('.particle');

    particles.forEach(particle => {
        const size = Math.random() * 4 + 2;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;

        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;

        const duration = Math.random() * 15 + 15;
        const delay = Math.random() * 10;
        particle.style.animation = `float ${duration}s linear ${delay}s infinite`;
    });
};

// Efek hover pada input fields
const setupInputEffects = () => {
    const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');

    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('glow');
        });

        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('glow');
        });
    });
};

// Efek ripple pada tombol
const setupButtonRipple = () => {
    const buttons = document.querySelectorAll('button, .btn-primary, .btn-secondary');

    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
};

// Inisialisasi animasi ketika DOM sudah siap
document.addEventListener('DOMContentLoaded', () => {
    animateBlobs();
    animateParticles();
    setupInputEffects();
    setupButtonRipple();

    // Tambahkan kelas untuk animasi pada elemen yang terlihat
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
});

// Tambahkan keyframes untuk animasi blob
if (document.styleSheets.length > 0) {
    const styleSheet = document.styleSheets[0];
    const blobKeyframes = `
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(20px, -20px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }
    `;

    const floatKeyframes = `
        @keyframes float {
            0% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-20px) translateX(10px);
            }
            50% {
                transform: translateY(-35px) translateX(-10px);
            }
            75% {
                transform: translateY(-20px) translateX(8px);
            }
            100% {
                transform: translateY(0) translateX(0);
            }
        }
    `;

    const rippleKeyframes = `
        @keyframes ripple {
            0% {
                transform: scale(0);
                opacity: 1;
            }
            100% {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;

    try {
        styleSheet.insertRule(blobKeyframes, styleSheet.cssRules.length);
        styleSheet.insertRule(floatKeyframes, styleSheet.cssRules.length);
        styleSheet.insertRule(rippleKeyframes, styleSheet.cssRules.length);

        styleSheet.insertRule(`
            .ripple {
                position: absolute;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.4);
                width: 100px;
                height: 100px;
                margin-top: -50px;
                margin-left: -50px;
                animation: ripple 0.6s linear;
                transform-origin: center;
                pointer-events: none;
            }
        `, styleSheet.cssRules.length);
    } catch (e) {
        console.warn('Could not add keyframes to stylesheet', e);
    }
}
