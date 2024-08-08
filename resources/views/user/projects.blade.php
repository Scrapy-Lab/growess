@extends('user.layouts.app')
@section('content')
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <div class="content">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div id="tracking-pre"></div>
                    <div id="tracking">
                        <h1 class="w-25 fw-bold m-0 mb-3">USER
                            <div class="mb-4 mt-11">Phase-1
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                    <hr>

                                    <!-- Create the editor container -->
                                    <div id="editor1">
                                        <p>Hello World!</p>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br /></p>
                                    </div>
                                    <div class="container mt-11">
                                        <button type="button" class="btn btn-primary btn-lg">Send</button>
                                        <button type="button" class="btn btn-success btn-lg">Transfer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 mt-11" style="display: none">Phase-2
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                    <hr>
                                    <!-- Create the editor container -->
                                    <div id="editor2">
                                        <p>Hello World!</p>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br /></p>
                                    </div>
                                    <div class="container mt-11">
                                        <button type="button" class="btn btn-primary btn-lg">Send</button>
                                        <button type="button" class="btn btn-success btn-lg">Transfer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 mt-11"  style="display: none">Phase-3
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                    <hr>
                                    <!-- Create the editor container -->
                                    <div id="editor3">
                                        <p>Hello World!</p>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br /></p>
                                    </div>
                                    <div class="container mt-11">
                                        <button type="button" class="btn btn-primary btn-lg">Send</button>
                                        <button type="button" class="btn btn-success btn-lg">Transfer</button>
                                    </div>
                                </div>
                            </div>


                        </h1>
                        <div class="tracking-list ">
                            <div class="tracking-item">
                                <div class="tracking-icon status-intransit">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Order Placed<span>09 Aug 2021, 10:00am</span></div>
                            </div>
                            <div class="tracking-item">
                                <div class="tracking-icon status-intransit">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Order Confirmed<span>09 Aug 2021, 10:30am</span></div>
                            </div>
                            <div class="tracking-item">
                                <div class="tracking-icon status-intransit">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Packed the product<span>09 Aug 2021, 12:00pm</span></div>
                            </div>
                            <div class="tracking-item">
                                <div class="tracking-icon status-intransit">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Arrived in the warehouse<span>10 Aug 2021, 02:00pm</span>
                                </div>
                            </div>
                            <div class="tracking-item">
                                <div class="tracking-icon status-current blinker">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Near by Courier facility<span>10 Aug 2021, 03:00pm</span>
                                </div>
                            </div>

                            <div class="tracking-item-pending">
                                <div class="tracking-icon status-intransit">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Out for Delivery<span>12 Aug 2021, 05:00pm</span></div>
                            </div>
                            <div class="tracking-item-pending">
                                <div class="tracking-icon status-intransit">
                                    <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                        data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tracking-date"><img
                                        src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                        class="img-responsive" alt="order-placed" /></div>
                                <div class="tracking-content">Delivered<span>12 Aug 2021, 09:00pm</span></div>
                            </div>
                        </div>
                        <h1 class="w-25 fw-bold m-0 mb-3">STATUS
                            <div class="container mt-11">
                                <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                <button type="button" class="btn btn-success btn-lg">Success</button>
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        const quill1 = new Quill('#editor1', {
            theme: 'snow'
        });
        const quill2 = new Quill('#editor2', {
            theme: 'snow'
        });

        const quill3 = new Quill('#editor3', {
            theme: 'snow'
        });
    </script>
@endsection
