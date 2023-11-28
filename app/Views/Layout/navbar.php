<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top" style=" background-color: #510400;">
            <div class="navbar-brand" style="padding-left: 20px">
                <img src="assets/img/logo_unsika.png" width="100" height="100" alt="Logo">
                <span class="d-none d-md-block">ABSENSI DOSEN
                    <br>UNIVERSITAS SINGAPERBANGSA KARAWANG
                </span>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span id="current-date" class="nav-link"></span>
                        <span id="current-time" class="nav-link"></span>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- Your page content goes here -->

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Custom script for displaying current time -->
<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Add leading zeros if needed
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        var timeString = hours + ':' + minutes + ':' + seconds;
        document.getElementById('current-time').innerText = timeString;

        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var idLocaleDateString = now.toLocaleDateString('id-ID', options);
        document.getElementById('current-date').innerText = idLocaleDateString;

        setTimeout(updateClock, 1000); // Update every 1 second
    }

    // Run the function when the document is ready
    document.addEventListener('DOMContentLoaded', function () {
        updateClock();
    });
</script>