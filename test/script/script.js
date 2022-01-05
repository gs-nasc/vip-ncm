// Language: javascript
// Path: test\script.js

const getBase64 = (file) => {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

document.getElementById('form').addEventListener("submit", (e) => {
    e.preventDefault();

    const fileInput = document.getElementById('xlsx');

    if (fileInput.files.length === 0) {
        alert('Please select a file');
        return;
    }else {
        getBase64(fileInput.files[0]).then((result) => console.log(result));
    }
});


