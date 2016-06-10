<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p> Administrator </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu For Lab Data Collecting', 'options' => ['class' => 'header']],
                   // ['label' => 'Dashboard', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => '#',],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    
                    [
                        'label' => 'Master',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Products Code', 'icon' => 'fa fa-file-code-o', 'url' => ['/products'],],
                            ['label' => 'Customer', 'icon' => 'fa fa-file-code-o', 'url' => ['/customer'],],
                         //    ['label' => 'User', 'icon' => 'fa fa-file-code-o', 'url' => ['/user'],],
                            ['label' => 'Period', 'icon' => 'fa fa-file-code-o', 'url' => ['/period'],],
                            ['label' => 'Control List', 'icon' => 'fa fa-file-code-o', 'url' => ['/controllist'],],
                            ['label' => 'Group Control List', 'icon' => 'fa fa-file-code-o', 'url' => ['/gcontrollist'],],
                            ['label' => 'Type Of Control', 'icon' => 'fa fa-file-code-o', 'url' => ['/typeofcontrol'],],
                            ['label' => 'Articel Card', 'icon' => 'fa fa-file-code-o', 'url' => ['/articlecard'],],
     
                           ],
                        ],
                    [
                        'label' => 'Data Collecting',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Physical Lab Data Collecting', 'icon' => 'fa fa-file-code-o', 'url' => ['/production'],],
                           // ['label' => 'Labdata', 'icon' => 'fa fa-file-code-o', 'url' => ['/labdata'],],
                            
                           ],
                        ],
                    [
                        'label' => 'Report',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Daily', 'icon' => 'fa fa-file-code-o', 'url' => ['/production/daily'],],
                            ['label' => 'Monthly', 'icon' => 'fa fa-file-code-o', 'url' => ['/debug'],],
                            ['label' => 'COA', 'icon' => 'fa fa-file-code-o', 'url' => ['/debug'],],
                            ['label' => 'Graph Chart', 'icon' => 'fa fa-file-code-o', 'url' => ['/debug'],],
                            ['label' => 'User', 'icon' => 'fa fa-file-code-o', 'url' => ['/user'],],
                           ],
                        ],
                    ],   
            ]
                
        ) ?>

    </section>

</aside>
