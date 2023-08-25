@extends("weblayout.websitelayout")
@section("weblay")
    
<!-- header -->

<div id="bg">
    <div class="min1">
        <div class="main">
            <h1 class="headroll">Contact US
                <div class="roller1">
                    <span id="rolltext">Amir<br />
                        Trading <br />
                        Corporation<br />

                </div>
            </h1>
        </div>
    </div>
</div>


    <!-- Contact Us Area Start Here -->
    <div class="container">
        <div class="dist">
            <div class="row">
                <div class="col-md-4" id="spa">
                    <!-- Content for the third column -->
                    <div class="card" id="contactcard">
                        <img src="assent/images/icon/location.png" alt="" id="prob">

                        <div class="card-body" id="prob2">
                            <p id="prob3">
                                <Strong>Address:</Strong> Plot 9, Sector 33/E Sector 33 E Korangi, Karachi, Karachi
                                City, Sindh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="spa">
                    <!-- Content for the third column -->
                    <div class="card" id="contactcard">
                        <img src="assent/images/icon/Mail-icon.png" alt="" id="prob">
                        <div class="card-body" id="prob2">
                            <p id="prob3">
                                <Strong>Email:</Strong> amirtradingcorporation@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="spa">
                    <!-- Content for the third column -->
                    <div class="card" id="contactcard">
                        <img src="assent/images/icon/call.png" alt="" id="prob">
                        <div class="card-body" id="prob4">
                            <p id="prob3">
                                <Strong>Phone no :</Strong> +923152687435 <br>03332767500
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.8132142131335!2d67.13284837424581!3d24.83606054623561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33bd87ff3f337%3A0x69d2cea3abcfda9d!2sAmir%20Trading%20Corporation!5e0!3m2!1sen!2s!4v1691572833385!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    

    <div class="container">
        <section class="get-in-touch">
            <h1 class="title">Get in touch</h1>
            <form class="contact-form row">
                <div class="form-field col-lg-6">
                    <input id="name" class="input-text js-input" type="text" required>
                    <label class="label" for="name">Name</label>
                </div>
                <div class="form-field col-lg-6 ">
                    <input id="email" class="input-text js-input" type="email" required>
                    <label class="label" for="email">E-mail</label>
                </div>
                <div class="form-field col-lg-12">
                    <input id="message" class="input-text js-input" type="text" required>
                    <label class="label" for="message">Message</label>
                </div>
                <div class="form-field col-lg-12">
                    <input class="submit-btn" type="submit" value="Submit" id="check">
                </div>
            </form>

        </section>
    </div>
    

    <!-- Contact Us Area End Here -->

@endsection