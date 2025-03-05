// Display file name with image
function displayFileName() {
    const imageQR = document.getElementById('imageQR')
    const inputImg = document.getElementById('uploadImg');
    const fileName = document.getElementById('fileName');

    if (inputImg.files && inputImg.files[0]) {
        const file = inputImg.files[0];

        // Check if the file is of type jpeg, jpg, or png
        const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];

        if (validTypes.includes(file.type)) {
            let reader = new FileReader();

            reader.onload = function(e) {
                imageQR.src = e.target.result;
            };

            // Read the file as Data URL
            reader.readAsDataURL(file);

            // Display the file name
            fileName.textContent = file.name;
        } else {
            // If the file type is invalid, show a message or handle the error
            Swal.fire({
                icon: "error",
                title: "Error uploading QR Code!",
                text: "Invalid file type. Please upload a JPEG, JPG, or PNG file."
            });
            inputImg.value = ''; // Clear the file input
            fileName.textContent = 'No Chosen File';
        }
    };
};