<div class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Neurospecial Blog</h5>
                <div class="underline"></div>
                @php
                $content = App\Models\Content::find(1);
                @endphp
                <p>
                    {{ $content->f_blog }}
                </p>
            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <div class="underline"></div>
                <div><a href="" class="text-white">Home</a></div>
                <div><a href="" class="text-white">About Us</a></div>
                <div><a href="" class="text-white">Contact Us</a></div>
                <div><a href="" class="text-white">Needs Promotion ?</a></div>
            </div>
            <div class="col-md-3">
                <h5>Follow Us On</h5>
                <div class="underline"></div>
                <div><a href="" class="text-white">Facebook</a></div>
                <div><a href="" class="text-white">Instagram</a></div>
                <div><a href="" class="text-white">Linkedin</a></div>
                <div><a href="" class="text-white">Twitter</a></div>
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