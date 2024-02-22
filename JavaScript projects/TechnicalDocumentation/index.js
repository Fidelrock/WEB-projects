document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const progressBar = document.getElementById('progress-bar');
    const progressList = document.getElementById('progress-list');

    // Calculate the total height of the document
    const documentHeight = document.documentElement.scrollHeight - window.innerHeight;

    // Update progress when the page is scrolled
    document.addEventListener('scroll', updateProgress);

    function updateProgress() {
        const scrolledHeight = window.scrollY;
        const progressPercentage = (scrolledHeight / documentHeight) * 100;

        progressBar.style.width = `${progressPercentage}%`;

        // Update progress text
        progressList.setAttribute('data-content', `${progressPercentage.toFixed(2)}% scrolled`);
    }
});
