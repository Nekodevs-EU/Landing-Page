<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.flex.items-center.justify-center.w-8.h-8.rounded-full.bg-gray-700');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const answerDiv = this.parentElement.nextElementSibling;
            const svgIcon = this.querySelector('svg');

            if (answerDiv.classList.contains('max-h-0')) {
                answerDiv.classList.remove('max-h-0');
                answerDiv.classList.add('max-h-full');
                svgIcon.classList.add('rotate-180');
            } else {
                answerDiv.classList.remove('max-h-full');
                answerDiv.classList.add('max-h-0');
                svgIcon.classList.remove('rotate-180');
            }
        });
    });
});
</script>