<ul class="navbar-nav">
    <!-- Iterar sobre las Apps -->
    <?php foreach ($menu as $app): ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?= $app['label'] ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $app['label'] ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown<?= $app['label'] ?>">
                <!-- Validar si tiene menú antes de intentar renderizarlo -->
                <?php if (isset($app['menu'])): ?>
                    <!-- Iterar sobre los Menús de la App -->
                    <?php foreach ($app['menu'] as $menuItem): ?>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item <?= (isset($menuItem['pending']) && $menuItem['pending']) ? 'has-pendings' : ''; ?>" href="#">
                                <?= $menuItem['label'] ?>
                            </a>
                            
                            <!-- Verificar si tiene un submenú antes de renderizarlo -->
                            <?php if (isset($menuItem['submenu'])): ?>
                                <div class="dropdown-menu">
                                    <!-- Submenús dentro del menú -->
                                    <?php foreach ($menuItem['submenu'] as $submenuItem): ?>
                                        <a class="dropdown-item <?= (isset($submenuItem['count']) && $submenuItem['count'] > 0) ? 'has-pendings' : ''; ?>" href="<?= $submenuItem['url'] ?>">
                                            <?= $submenuItem['label'] ?>
                                            <?php if (isset($submenuItem['count']) && $submenuItem['count'] > 0): ?>
                                                <span class="badge badge-danger"><?= $submenuItem['count'] ?></span>
                                            <?php endif; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="dropdown-divider"></div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

#oct 17
$routes->get('/nav/reload', 'Refactor::reloadnav');