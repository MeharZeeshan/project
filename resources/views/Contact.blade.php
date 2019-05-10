<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.Head')

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    @include('component.Header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    @include('component.Cart')
    <!-- ##### Right Side Cart End ##### -->


    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap"></div>
        </div>

        <div class="contact-info">
            <h2>How to Find Us</h2>
            <p>Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>

            <div class="contact-address mt-50">
                <p><span>address:</span> Lahore Pakistan</p>
                <p><span>telephone:</span> +92 303 0463215</p>
                <p><a href="https://mail.google.com/">shani.engineer45512@gmail.com</a></p>
            </div>
        </div>

    </div>

    <!-- ##### Footer Area Start ##### -->
    @include('component.Footer')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('component.Jquery')
</body>

</html>