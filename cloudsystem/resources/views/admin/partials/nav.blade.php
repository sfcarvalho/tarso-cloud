<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Painel Administrativo</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ URL::to('') }}"><i class="fa fa-backward"></i> Frontend</a>
                </li>
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Geral
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/language')}}">
                        <i class="fa fa-language"></i> Idioma
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-bullhorn"></i> Artigos
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-list"></i>  Categorias Artigos
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> Artigos
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-camera"></i> Fotos
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/photoalbum')}}">
                                <i class="glyphicon glyphicon-list"></i> Albuns
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/photo')}}">
                                <i class="glyphicon glyphicon-camera"></i> Fotos
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/user')}}">
                        <i class="glyphicon glyphicon-user"></i> Usuários
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
