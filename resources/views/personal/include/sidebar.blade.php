<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link-->  <!--begin::Brand Image-->  <!--end::Brand Image--> <!--begin::Brand Text--> <a href="{{route('main.index')}}" class="nav-link"><span class="brand-text fw-light m-0">EDICA</span></a> <!--end::Brand Text-->  <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{route('personal.main.index')}}" class="nav-link"> <i class="bi bi-house-fill"></i>
                        <p>Главная</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('personal.liked.index')}}" class="nav-link"> <i class="bi bi-heart-fill"></i>
                        <p>Понравившиеся посты</p>
                    </a>
                </li>
                <li class="nav-item"> <a href="{{route('personal.comment.index')}}" class="nav-link"> <i class="bi bi-chat-square-text-fill"></i>
                        <p>Комментарии</p>
                    </a>
                </li>

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
