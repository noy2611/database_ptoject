

  // Wait for the document to load
  document.addEventListener("DOMContentLoaded", function () {
    // Get the buttons
    var option1Button = document.getElementById("option1");
    var option3Button = document.getElementById("option3");
    var option5Button = document.getElementById("option5");
    var option6Button = document.getElementById("option6");
    var option7Button = document.getElementById("option7");
    var option9Button = document.getElementById("option9");

    // Listen for click events on the buttons
    option1Button.addEventListener("click", function () {
      // Open the modal for option 1
      var updateModal = document.getElementById("ShowXmodalWeek");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

    option3Button.addEventListener("click", function () {
      // Open the modal for option 3
      var updateModal = document.getElementById("ShowXincomemonth");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

    option5Button.addEventListener("click", function () {
      // Open the modal for option 5
      var updateModal = document.getElementById("ShowXmodalMonth");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

    option6Button.addEventListener("click", function () {
      // Open the modal for option 6
      var updateModal = document.getElementById("Show-price-percentage-discount");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

    option7Button.addEventListener("click", function () {
      // Open the modal for option 7
      var updateModal = document.getElementById("Display-incomes-for-specific-salesman-in-x-month");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

    option9Button.addEventListener("click", function () {
      // Open the modal for option 9
      var updateModal = document.getElementById("modal-grade");
      var modalInstance = new bootstrap.Modal(updateModal);
      modalInstance.show();
    });

   
    $('#myTable').dataTable( {
      "searching": false,
      "paging": false,
      "ordering": false,
      "info": false,
    } );



  });


  // new DataTable('#example', {
  //   ordering: false,
  //   paging: false,
  //   language: {
  //     searchPlaceholder: "חיפוש",
  //     search: "",
  //   },

