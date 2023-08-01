// if (success === 'true') {
//     $(document).ready(function () {
//       $('#successModal').modal('show');
//     });
//   }

// Wait for the document to load
// document.addEventListener("DOMContentLoaded", function () {
//   // Get the select element
//   var optionSelector = document.getElementById("option-selector");

//   // Listen for changes in the select element
//   optionSelector.addEventListener("change", function () {
//     // Check if option "1" is selected (value 1)
//     if (this.value === "1") {
//       // If option "1" is selected, open the modal using its ID
//       var updateModal = document.getElementById("ShowXmodalWeek");
//       var modalInstance = new bootstrap.Modal(updateModal);
//       modalInstance.show();
//     }
//     if (this.value === "5") {
//       // If option "1" is selected, open the modal using its ID
//       var updateModal = document.getElementById("ShowXmodalMonth");
//       var modalInstance = new bootstrap.Modal(updateModal);
//       modalInstance.show();
//     }
//   });
// });




  // Wait for the document to load
  document.addEventListener("DOMContentLoaded", function () {
    // Get the buttons
    var option1Button = document.getElementById("option1");
    var option5Button = document.getElementById("option5");

    // Listen for click events on the buttons
    option1Button.addEventListener("click", function () {
      // Open the modal for option 1
      var updateModal = document.getElementById("ShowXmodalWeek");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

    option5Button.addEventListener("click", function () {
      // Open the modal for option 5
      var updateModal = document.getElementById("ShowXmodalMonth");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });
  });



