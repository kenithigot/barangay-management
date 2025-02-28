// Handle the request document form submission
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// Display the file name
function displayFileName() {
                                            
    const inputImg = document.getElementById('uploadReceipt');
    const fileName = document.getElementById('fileName');

    if (inputImg.files && inputImg.files[0]) {
        const file = inputImg.files[0];

        // Check if the file is of type jpeg, jpg, or png
        const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];

        if (validTypes.includes(file.type)) {
            let reader = new FileReader();

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

// Display payment method
function paymentClicked() {
    var paymentSelection = document.getElementById("paymentSelectionBlock").value;
    var onHandPayment = document.getElementById("onHandPaymentBlock");
    var gcashPayment = document.getElementById("gcashPaymentBlock");
    var gcashReferenceNum = document.getElementById("gcashReferenceNumBlock");
    var transactionCodeBlock = document.getElementById("transactionCodeBlock")

    // Note Message
    var onhandNote = document.getElementById("onhandPaymentNote");
    var gcashNote = document.getElementById("gcashPaymentNote");

    if (paymentSelection === "On-Cash Payment") {
        onHandPayment.style.display = "block";
        gcashPayment.style.display = "none";
        gcashReferenceNum.style.display = "none";
        transactionCodeBlock.style.display = "block";

        // Display Note
        onhandNote.style.display = "block";
        gcashNote.style.display = "none";

    } else if (paymentSelection === "GCASH Payment") {
        gcashPayment.style.display = "block";
        gcashReferenceNum.style.display = "block";
        onHandPayment.style.display = "block";
        transactionCodeBlock.style.display = "block";

        // Display Note
        onhandNote.style.display = "none";
        gcashNote.style.display = "block";

    } else {
        onHandPayment.style.display = "none";
        gcashPayment.style.display = "none";
        gcashReferenceNum.style.display = "none";
        transactionCodeBlock.style.display = "none";

        // Display Note
        onhandNote.style.display = "none";
        gcashNote.style.display = "none";
    }
}