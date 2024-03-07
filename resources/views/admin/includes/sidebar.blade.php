<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block pr-3">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard.homepage') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            الرئيسية
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.blog.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            المدونة
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            الاقسام
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.category_articles.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            مقالات الاقسام
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div id="sidebar-overlay"></div>
