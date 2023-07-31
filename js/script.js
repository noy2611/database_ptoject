


// if (success === 'true') {
//     $(document).ready(function () {
//       $('#successModal').modal('show');
//     });
//   }



    // Wait for the document to load
    document.addEventListener('DOMContentLoaded', function () {
        // Get the select element
        var optionSelector = document.getElementById('option-selector');

        // Listen for changes in the select element
        optionSelector.addEventListener('change', function () {
            // Check if option "1" is selected (value 1)
            if (this.value === "1") {
                // If option "1" is selected, open the modal using its ID
                var updateModal = document.getElementById('updateModal');
                var modalInstance = new bootstrap.Modal(updateModal);
                modalInstance.show();
            }
        });
    });

