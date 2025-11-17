import './bootstrap';
import 'flowbite';

// Keyboard shortcuts for presentation control
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('keydown', function(e) {
        // Only handle keyboard shortcuts if we're not in an input field
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
            return;
        }

        switch(e.key) {
            case ' ': // Spacebar - Next slide
            case 'ArrowRight':
                e.preventDefault();
                nextSlide();
                break;
            case 'Backspace':
            case 'ArrowLeft':
                e.preventDefault();
                previousSlide();
                break;
            case 'Escape':
                e.preventDefault();
                clearScreen();
                break;
            case 'F5':
                e.preventDefault();
                startPresentation();
                break;
        }
    });
});

// Presentation control functions
function nextSlide() {
    fetch('/presentation/next', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
        }
    })
    .then(response => response.json())
    .then(data => {
        updatePreview(data);
    })
    .catch(error => console.error('Error:', error));
}

function previousSlide() {
    fetch('/presentation/previous', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
        }
    })
    .then(response => response.json())
    .then(data => {
        updatePreview(data);
    })
    .catch(error => console.error('Error:', error));
}

function clearScreen() {
    fetch('/presentation/clear', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content
        }
    })
    .then(response => response.json())
    .then(data => {
        updatePreview(data);
    })
    .catch(error => console.error('Error:', error));
}

function startPresentation() {
    // Open presentation window
    window.open('/presentation', 'presentation', 'fullscreen=yes');
}

function updatePreview(data) {
    // Update preview pane with current slide
    const previewPane = document.getElementById('preview-pane');
    if (previewPane && data.slide) {
        previewPane.innerHTML = data.slide.content;
    }

    // Update slide counter
    const counter = document.getElementById('slide-counter');
    if (counter && data.currentIndex !== undefined && data.totalSlides !== undefined) {
        counter.textContent = `${data.currentIndex + 1} of ${data.totalSlides}`;
    }
}

// Make functions globally available
window.nextSlide = nextSlide;
window.previousSlide = previousSlide;
window.clearScreen = clearScreen;
window.startPresentation = startPresentation;
