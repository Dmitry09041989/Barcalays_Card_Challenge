@extends('layouts.main_layout')
@section('title') Home @endsection
@section('main_content')
    <div class="bg">
        <h1 class="text-white">
            Welcome to Shear-Locks Combs
        </h1>
        <h3 class="text-white">
            For your haircut needs.
        </h3>
        <a class="btn btn-primary fw-bold text-dark" href="">Check availabilty.</a>
    </div>
    <div class="testimonials text-center p-2">
        <div class='container mx-auto mt-5 col-md-10 col-11'>
            <div class="text-white"><h3>Testimonials</h3></div>
            <div class="row" style="justify-content: center ">
                <div class="card col-md-4 col-11 border border-primary m-2">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile mb-4 mt-3"> <img src="http://beardstyle.net/wp-content/uploads/2018/05/men-beard-style-36.jpg" id="testimony" class="rounded-circle img-thumbnail"> </div>
                            <div class="card-body company"> <i class="fab fa-ebay fa-2x"></i> <small class="intro text-muted">Jack Bobbers</small> </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> <i class="fas fa-quote-left"></i> Wow! Very easy to book an appointment, turned up on time and was seated immediately. Happy with the haircut, it looks great! <i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 col-11 second border border-primary m-2">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile mb-4 mt-3"> <img src="https://nextluxury.com/wp-content/uploads/grey-sweater-with-awesome-brown-beard-style-for-men.jpg" id="testimony" class="rounded-circle img-thumbnail"> </div>
                            <div class="card-body company"> <i class="fab fa-amazon fa-2x"></i><small class="intro text-muted">Peter Farmer</small> </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> <i class="fas fa-quote-left"></i> Lovely staff, made me feel very comfortable. Haircut was done really well, and the pricing was fair. <i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 col-11 third border border-primary m-2">
                    <div class="card-content">
                        <div class="card-body p-0">
                            <div class="profile mb-4 mt-3"> <img src="https://www.menshairstyletrends.com/wp-content/uploads/2019/10/aroperfit-full-beard-for-black-men-1024x1024.jpg" id="testimony" class="rounded-circle img-thumbnail"> </div>
                            <div class="card-body company"> <i class="fab fa-yelp fa-2x"></i><small class="intro text-muted">Timothy Bee</small> </div>
                            <div class="card-subtitle">
                                <p> <small class="text-muted"> <i class="fas fa-quote-left"></i> Great care was taken to ensure my haircut was of the highest quality, nothing to complain about! Thank you. <i class="fas fa-quote-left fa-flip-horizontal"></i> </small> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row border-top">
        <div class="col-sm-6">
            <h1 class="text-white">About Us</h1>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed quam eu metus luctus iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla fringilla auctor venenatis. Aenean in mi vel lectus ullamcorper hendrerit. Donec maximus orci arcu, eget pretium tortor rutrum et. Mauris fringilla erat non tortor euismod rhoncus. Ut suscipit neque eu enim interdum lobortis. Cras a feugiat nunc. Donec finibus eleifend massa non vestibulum. Sed ut rhoncus purus. Suspendisse viverra mollis dolor, et mattis lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus convallis cursus finibus.

                Mauris id nisl nec ipsum volutpat feugiat. Cras blandit blandit mi. Quisque accumsan fermentum pellentesque. Mauris sit amet lacus ac nisl maximus commodo ut venenatis libero. Sed posuere sem sagittis vehicula efficitur. Praesent ut tincidunt arcu. Nullam volutpat eleifend enim vel pharetra. Phasellus eu lorem varius, facilisis felis eu, hendrerit metus. Mauris in sollicitudin metus, vitae finibus nunc. Aliquam erat volutpat. Nulla felis est, ullamcorper vitae porttitor nec, viverra sed libero.</p>
            <a class="btn btn-primary fw-bold text-dark" href="">Sounds good?</a>
        </div>
        <div class="col-sm-3">
            <div id="panel2" class="text-black">
                <h1>About Us</h1>
                <p>Mauris id nisl nec ipsum volutpat feugiat. Cras blandit blandit mi. Quisque accumsan fermentum pellentesque. Mauris sit amet lacus ac nisl maximus commodo ut venenatis libero. </p>
            </div>
            <div id="panel"><h1>About Us</h1><p>Mauris id nisl nec ipsum volutpat feugiat. Cras blandit blandit mi. Quisque accumsan fermentum pellentesque. Mauris sit amet lacus ac nisl maximus commodo ut venenatis libero. </p></div></div>
        <div class="col-sm-3"><div id="panel" class="">
                <h1>About Us</h1>
                <p>Mauris id nisl nec ipsum volutpat feugiat. Cras blandit blandit mi. Quisque accumsan fermentum pellentesque. Mauris sit amet lacus ac nisl maximus commodo ut venenatis libero. </p>
            </div>
            <div id="panel2"><h1>About Us</h1><p>Mauris id nisl nec ipsum volutpat feugiat. Cras blandit blandit mi. Quisque accumsan fermentum pellentesque. Mauris sit amet lacus ac nisl maximus commodo ut venenatis libero. </p></div></div></div>
    </div>
    <div class="container p-3 border-top">

        <div class="row p-2">

            <!-- /.col-lg-3 -->

            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/shampoo.png') }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Shear-Locks Shampoo</a>
                                </h4>
                                <h5>£11.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/conditioner.png') }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Shear-Locks Conditioner</a>
                                </h4>
                                <h5>£12.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/hairmask.png') }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Shear-Locks Health Mask</a>
                                </h4>
                                <h5>£24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/hairwax.png') }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Shear-Locks Styling Wax</a>
                                </h4>
                                <h5>£6.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/hairgel.png') }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Shear-Locks Wet Look Gel</a>
                                </h4>
                                <h5>£3.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/hairspray.png') }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Shear-Locks Holding Spray</a>
                                </h4>
                                <h5>£7.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->
    </div>
    <form class="container mx-auto mt-5 col-md-10 col-11">
        <div class="form-group border-top p-2">
            <h1 class="text-white">Have an enquiry?</h1>
            <label for="exampleInputName1">Name</label>
            <input type="" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Name">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <label for="number">Phone Number</label>
        <input type="" class="form-control" id="number" placeholder="Phone Number">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
        <div class="form-check">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
