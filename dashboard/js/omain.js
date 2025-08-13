(function() {
  'use strict';

  const forms = document.querySelectorAll('.requires-validation');
  Array.from(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (event.submitter && ((event.submitter.name === 'delete_profile') || (event.submitter.name === 'delete_picture'))) {
        // Delete button clicked, disable form validation
        form.classList.remove('was-validated');
      } else {
        // Form submission, perform validation
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }
    }, false);
  });
})();