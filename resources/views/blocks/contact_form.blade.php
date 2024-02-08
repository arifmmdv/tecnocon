<div class="contact-us-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-custom">
                <div class="comment-box mt-5">
                    <h5 class="text-uppercase">{{$block->title}}</h5>
                    @if(Session::has('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @else
                        <form method="post" action="{{ route('send.email') }}" accept-charset="UTF-8" class="contact-form">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border-0 rounded-0 w-100 input-area name gray-bg" type="text" name="name" id="con_name" placeholder="Name">
                                        @error('name')
                                            <span class="">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border-0 rounded-0 w-100 input-area email gray-bg" type="email" name="email" id="con_email" placeholder="Email">
                                        @error('email')
                                            <span class="">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border-0 rounded-0 w-100 input-area email gray-bg" type="text" name="subject" id="con_content" placeholder="Subject">
                                        @error('subject')
                                            <span class="">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-custom">
                                    <div class="input-item mb-4">
                                        <textarea cols="30" rows="5" class="border-0 rounded-0 w-100 custom-textarea input-area gray-bg" name="con_message" id="con_message" placeholder="Message"></textarea>
                                        @error('message')
                                            <span class="">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-custom mt-40">
                                    <button type="submit" id="submit" name="submit" class="btn flosun-button secondary-btn theme-color rounded-0">Send A Message</button>
                                </div>
                                <p class="col-8 col-custom form-message mb-0"></p>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
