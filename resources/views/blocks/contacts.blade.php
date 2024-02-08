<div class="contact-us-area mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-map-marker"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>{{$block->address_title}}</h4>
                        <p>{{$block->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-smartphone"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>{{$block->phone_title}}</h4>
                        <p>
                            @foreach($block->phone as $phone)
                                <span>
                                @if (!empty($phone->title))
                                        {{$phone->title}}:
                                    @endif
                                    @if (!empty($phone->value))
                                        <a href="tel:{{$phone->value}}" target="_blank">{{$phone->value}}</a>
                                    @endif
                            </span>
                                @if(!$loop->last)
                                    <br>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-custom text-align-center">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-envelope"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>{{$block->email_title}}</h4>
                        <p>
                            @foreach($block->email as $email)
                                <span>
                                @if (!empty($email->title))
                                        {{$email->title}}:
                                    @endif
                                    @if (!empty($email->value))
                                        <a href="mailto:{{$email->value}}" target="_blank">{{$email->value}}</a>
                                    @endif
                            </span>
                                @if(!$loop->last)
                                    <br>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
