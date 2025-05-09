document.addEventListener("DOMContentLoaded", function() {
  let deleteButtons = document.querySelectorAll(".delete");

  deleteButtons.forEach(button => {
      button.addEventListener("click", function(event) {
          if (!confirm("Are you sure you want to delete this medicine?")) {
              event.preventDefault();
          }
      });
  });
});
