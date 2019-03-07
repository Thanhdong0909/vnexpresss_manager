
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="text-indent: 700px">Trang quản trị</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        @if(Auth::check())
                        <li><a href="#"><i class="fa fa-user fa-fw">{{Auth::user()->name}} </i></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                        </li>
                        @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            @include('admin.menu')
            <!-- /.navbar-static-side -->
</nav>