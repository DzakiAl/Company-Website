<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <img src="{{ asset('asset/building.jpg') }}" class="background-image">
    <nav class="navbar">
        <h1 class="brand">Company Website</h1>
        <div class="menu">
            <a href="#section1" class="link">Home</a>
            <a href="#section2" class="link">About us</a>
            <a href="#section3" class="link">Services</a>
            <a href="#section4" class="link">Contact us</a>
        </div>
        <div class="hamburger-container" onclick="toggleSidebar()">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
        </div>
    </nav>
    <div class="sidebar" id="sidebar">
        <ul class="sidebar-link"><a href="#section1">Home</a></ul>
        <ul class="sidebar-link"><a href="#section2">About us</a></ul>
        <ul class="sidebar-link"><a href="#section3">Services</a></ul>
        <ul class="sidebar-link"><a href="#section4">Contact us</a></ul>
    </div>
    <div class="opening-word-container" id="section1">
        <h1 class="opening-word">
            The IT Company That <br>
            You Can Trust
        </h1>
    </div>
    <div class="about-container" id="section2">
        <div class="about-title-container">
            <h1 class="about-title">About Star Eclipse Inc.</h1>
        </div>
        <div class="about-text-container">
            <p class="about-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices vitae nisi
                non dapibus. Mauris efficitur arcu at mi blandit, eu accumsan lacus interdum. Nulla
                nec laoreet tellus, nec vestibulum felis. Nullam ipsum magna, laoreet et felis quis,
                pharetra elementum ex. Sed ut ante eget est elementum euismod sed et justo. Nam
                eleifend leo nisl, interdum euismod mi rutrum ac. Duis id risus et sem porttitor
                rhoncus a sit amet elit.
                <br><br>
                Praesent auctor sed orci in volutpat. Vestibulum quis lacus vehicula, sodales dui
                at, feugiat lorem. Mauris et lectus magna. Sed mollis consequat sapien, faucibus
                consectetur lacus rutrum sit amet. Integer at orci vitae nibh iaculis euismod a vel
                enim. Sed non ipsum pulvinar, blandit lacus vel, suscipit libero. Aliquam sed
                sodales nibh, sit amet egestas eros. Praesent tristique congue porttitor. Aliquam
                libero ante, interdum id luctus pharetra, hendrerit ut nisi.
            </p>
        </div>
    </div>
    <div class="service" id="section3">
        <div class="service-title-container">
            <h1 class="service-title">Our Services</h1>
        </div>
        <div class="service-details-container">
            <div class="service-card-container">
                <div class="second-service-card-container">
                    <div class="service-card">
                        <img src="{{ asset('asset/software-icon.png') }}" class="service-card-img">
                        <div class="service-desc-container">
                            <h1 class="service-desc-title">Software Development</h1>
                            <p class="service-desc-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Temporibus ad, quaerat nam exercitationem perferendis magnam aliquam.
                                Voluptatum, fugit et in blanditiis praesentium deserunt ab aut quod,
                                voluptates sunt ratione enim.
                            </p>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="{{ asset('asset/server-icon.png') }}" class="service-card-img">
                        <div class="service-desc-container">
                            <h1 class="service-desc-title">Cloud Service</h1>
                            <p class="service-desc-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Temporibus ad, quaerat nam exercitationem perferendis magnam aliquam.
                                Voluptatum, fugit et in blanditiis praesentium deserunt ab aut quod,
                                voluptates sunt ratione enim.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="second-service-card-container">
                    <div class="service-card">
                        <img src="{{ asset('asset/shield-icon.png') }}" class="service-card-img">
                        <div class="service-desc-container">
                            <h1 class="service-desc-title">Cyber Security</h1>
                            <p class="service-desc-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Temporibus ad, quaerat nam exercitationem perferendis magnam aliquam.
                                Voluptatum, fugit et in blanditiis praesentium deserunt ab aut quod,
                                voluptates sunt ratione enim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form" id="section4">
        <div class="form-container">
            <h1 class="form-title">Please Fill This Form and Our Representative Will<br>Contact You.</h1>
            <form action="{{route('message')}}" method="POST">
                @csrf
                <input type="text" class="input" placeholder="Full name" name="name" required>
                <input type="text" class="input" placeholder="Your email" name="email" required>
                <input type="text" class="input" placeholder="Company name" name="company" required>
                <input type="text" class="input" placeholder="Your position" name="position" required>
                <input type="text" class="input" placeholder="Number of employees" name="number_employees" required>
                <input type="text" class="input" placeholder="Industry that company in" name="industry" required>
                <p class="form-label">Select which our service your need:</p>
                <select name="service" class="input" required>
                    <option value="Software Development">Software Development</option>
                    <option value="Cloud Service">Cloud Service</option>
                    <option value="Cyber Security">Cyber Security</option>
                </select>
                <textarea class="input" placeholder="How can we help you?" name="details" rows="10"></textarea>
                <button class="form-button">Submit</button>
            </form>
        </div>
    </div>
    <footer class="footer" id="section4">
        <div class="contact">
            <p class="copyright">&copy; Star Eclipse Inc. 2024</p>
            <a href="" class="footer-link">Instagram</a>
            <a href="" class="footer-link">X</a>
        </div>
    </footer>
    <script>
        // toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

        // success message
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                alert('{{ session('success') }}');
            @endif
        });
    </script>
</body>
</html>