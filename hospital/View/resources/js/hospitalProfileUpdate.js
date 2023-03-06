var img = document.getElementById("profileImg");
function setImage() {
    let files = document.getElementById("Adminfile-upload").files;
    if (files.length == 0)
        return;

    let file = files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
        img.src = reader.result;
    }
}