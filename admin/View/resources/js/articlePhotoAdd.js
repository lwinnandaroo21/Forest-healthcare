const AboutactualBtn = document.getElementById('file-upload');

const AboutfileChosen = document.getElementById('CSfile-chosen');

AboutactualBtn.addEventListener('change', function () {
    AboutfileChosen.textContent = this.files[0].name
})