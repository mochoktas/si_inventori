        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('assets/images/lgo.jpg')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="{{request ()->is('backend') ? 'active' :'' }}">
                        <a href="/backend">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="{{request ()->is('tempat') ? 'active' :'' }}">
                        <a href="/tempat">
                            <i class="material-icons">place</i>
                            <span>Tempat</span>
                        </a>
                    </li>
                    <li class="{{request ()->is('user') ? 'active' :'' }}">
                        <a href="/user">
                            <i class="material-icons">person</i>
                            <span>User</span>
                        </a>
                    </li>
                    <li class="{{request ()->is('team') ? 'active' :'' }}">
                        <a href="/team">
                            <i class="material-icons">group</i>
                            <span>Team</span>
                        </a>
                    </li>
                    <li class="{{request ()->is('barang') ? 'active' :'' }}">
                        <a href="/barang">
                            <i class="material-icons">event_seat</i>
                            <span>Barang</span>
                        </a>
                    </li>
                    <li class="{{request ()->is('inventori') ? 'active' :'' }}">
                        <a href="/inventori">
                            <i class="material-icons">account_balance</i>
                            <span>Inventori</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>