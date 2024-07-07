    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- if not auth tampilin -->
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                 <!-- else -->
                <a href="javascript:void(0);" class="bars"></a>
                <!-- end if -->
                <a class="navbar-brand" href="/">
                    <!-- <img src="{{asset('assets/images/lgo.jpg')}}" height="30" width="30" /> -->
                     Monitoring Inventori
                </a>
            </div>
            <!-- if not auth tampilin -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    @if (Auth::check())
                        <li><a href="/backend">dashboard</a></li>
                        <li><a href="/logout">logout</a></li>
                    @else
                        <li><a href="/login">login</a></li>
                    @endif
                    
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    
                </ul>
            </div>
            <!-- end if -->
            
        </div>
    </nav>