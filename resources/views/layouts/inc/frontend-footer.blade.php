<div class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h5>Neurospecial Blog</h5>
                <div class="underline"></div>
                @php
                $content = App\Models\Content::find(1);
                @endphp
                <p class="text-justify">
                    {{ $content->f_blog }}
                </p>
            </div>

                <div class="col-md-2">
                    <h5>Quick Links</h5>
                    <div class="underline"></div>
                    <div>
                        <a href="{{ url('/') }}" class="text-white text-deco"><i class="fa-solid fa-house fa-xl"></i></a>
                        <a href="{{ url('/') }}" class="text-white text-deco"><i class="fa-solid fa-address-card fa-xl"></i></a>
                        <a href="{{ url('/') }}" class="text-white text-deco"><i class="fa-solid fa-handshake-angle fa-xl"></i></a>
                        <a href="{{ url('/') }}" class="text-white text-deco"><i class="fa-solid fa-address-book fa-xl"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5>Follow Us On</h5>
                    <div class="underline"></div>
                    <div>
                    <a href="" class="text-white text-deco"><i class="fa-brands fa-facebook-f fa-2xl"></i></a>
                    <a href="" class="text-white text-deco"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    <a href="" class="text-white text-deco"><i class="fa-brands fa-linkedin-in fa-2xl"></i></a>
                    <a href="" class="text-white text-deco"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
                    </div>
                </div>

        </div>
    </div>
</div>

<div class="py-2 bg-gray">
    <div class="container text-center">
        <p class="mb-0">
            &copy; Copyright at <a class="red" href="https://www.facebook.com/pycoder028">PyCoder.</a>
            All right reserved.
            Designed and Developed by <b>Hussain Forhad</b> {{ date('d-m-Y') }}
        </p>
    </div>
</div>