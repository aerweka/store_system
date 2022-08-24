<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
        <div class="c-sidebar__brand">
            <a href="#"><img src="img/logo.svg" alt="Neat"></a>
        </div>

        <!-- Scrollable -->
        <div class="c-sidebar__body">
            <span class="c-sidebar__title">Dashboards</span>
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link is-active" href="dashboard01.html">
                        <i class="c-sidebar__icon feather icon-home"></i>Dashboard 1
                    </a>
                </li>
            </ul>

            <span class="c-sidebar__title">General</span>
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link" href="pipeline.html">
                        <i class="c-sidebar__icon feather icon-move"></i>Pipeline
                    </a>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu" aria-expanded="false" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-hash"></i>Sub Menu
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse" id="sidebar-submenu">
                            <li><a class="c-sidebar__link" href="#">Submenu link</a></li>
                            <li><a class="c-sidebar__link" href="#">Submenu link</a></li>
                            <li><a class="c-sidebar__link" href="#">Submenu link</a></li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>

        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="c-sidebar__footer">
                Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
            </button>
        </form>
    </aside>
</div>
