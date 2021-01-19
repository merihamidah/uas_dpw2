         <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="#"><img src="{{ url('public') }}/client/images/logo.jpg" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                              @if(Auth::check())
                                                {{ request()->user()->nama }}
                                                @elseif(Auth::guard('pembeli')->check())
                                                {{ Auth::guard('pembeli')->user()->nama }}
                                                <br>Pembeli                  
                                                @elseif(Auth::guard('penjual')->check())
                                                {{ Auth::guard('penjual')->user()->nama }}
                                                <br>Penjual 
                                                @else                 
                                                Silahkan Login Kembali
                                                @endif
                                             <a href="{{ url('login') }}" >
                                            <img style="margin-right: 15px;" src="{{ url('public') }}/client/icon/1.png" alt="#" />
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ url('keranjang') }}"><img style="margin-right: 15px;" src="{{ url('public') }}/client/icon/3.png" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="{{ url('public') }}/client/images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>