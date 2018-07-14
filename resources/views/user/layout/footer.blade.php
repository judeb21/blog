 <!--footer-->
 <footer id="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>DODO</h4>
                            <div class="menu-footer">
                                <ul>
                                    <li><a href="#">About</a>
                                    </li>
                                    <li><a href="#">Careers</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Say Hello!</h4>
                            <div class="menu-footer">
                                <ul>
                                    <li>0814 742 8084</li>
                                    <li>0809 522 1113 </li>
                                    <li>Hello@dodo.ng</li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Lets Connect!</h4>
                            <div class="menu-footer">
                                <ul>
                                    <li><a href="https://www.facebook.com/DODONigeria/">Facebook</a>
                                    </li>
                                    <li><a href="https://www.instagram.com/dodo_nigeria/">Instagram</a>
                                    </li>
                                    <li><a href="https://twitter.com/DODO_Nigeria">Twitter</a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/company/dodo-design/">LinkedIn</a>
                                    </li>
                                    <li><a href="https://www.behance.net/dododesignagency">Behance</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Our Offices</h4>
                            <div class="menu-footer">
                                <ul>
                                    <li>No. 8 Tinubu St.<br> Ilupeju, Lagos.</li>
                                    <li>27 Olateju St. <br>Mushin, Lagos.</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">

                    <div class="copy-text">
                        <p>© {{Carbon\Carbon::now()->year}} DODO. All Rights Reserved</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('user/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('user/js/jssocials.js')}}"></script>
    <script type="text/javascript" src="{{ asset('user/js/bundle.js')}}"></script>
    <script type="text/javascript" src="{{ asset('user/js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('user/js/plugin.js')}}"></script>

    <script>
        $("#shareIconsCountInside").jsSocials({
            url: "http://the-peel.dodo.ng/page/The-One-Thing-Businesses-Must-Consider-for-their-Websites-to-Have-Better-Conversion9057",
            text: "Google Search Page",
            showLabel: false,
            showCount: "inside",
            shares: ["twitter", "facebook", "linkedin"]
        });
    </script>


@section('footer')

@show