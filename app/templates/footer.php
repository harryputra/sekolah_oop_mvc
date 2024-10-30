</div> <!-- End of container -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Custom JS (Optional) -->
<script src="<?php echo BASE_URL; ?>assets/js/scripts.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize dropdowns
        var dropdowns = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdowns);

        // Initialize modals
        var modals = document.querySelectorAll('.modal');
        M.Modal.init(modals);

        // Initialize tooltips
        var tooltips = document.querySelectorAll('.tooltipped');
        M.Tooltip.init(tooltips);

        // Inisialisasi dropdown
        var dropdowns = document.querySelectorAll('select');
        M.FormSelect.init(dropdowns);

        // Inisialisasi timepicker
        var timepickers = document.querySelectorAll('.timepicker');
        M.Timepicker.init(timepickers, {
            twelveHour: false // format 24 jam
        });

    });
</script>

</body>
</html>
