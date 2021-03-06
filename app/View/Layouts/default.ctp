<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de consultas dos dados do MDA">
    <meta name="author" content="Gerson">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $title_for_layout;?></title>
    <?php 
          $app = array();
          $app['basePath'] = Router::url('/');
          $app['params'] = array(
            'controller' => $this->params['controller'],
            'action' => $this->params['action'],
            'named' => $this->params['named'],
          );
          echo $this->Html->scriptBlock('var App = ' . $this->Js->object($app) . ';');
     ?>
    <?php 
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        
        echo $this->Html->css(array(
            'bootstrap.min',
            'font-awesome.min',
            'offcanvas',
            'jquery-ui',
            'select2',
            'select2-bootstrap',
            array('inline' => false )
        ));
      
        echo $this->fetch('css');
      
      echo $this->Html->script(array(
            'jquery-1.11.2.min',
            'bootstrap.min',
            'offcanvas',
            'jquery-ui',
            'jquery.maskedinput',
            'select2',
            'select2_locale_pt-BR',
          array('inline'=>false)
      ));
      echo $this->fetch('script');
    ?>
    <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
    </script>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link(__('MDA'), array('controller' => 'pages', 'action' => 'index'), array('class'=>'navbar-brand','escape' => false)); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Inicio'), array('controller' => 'pages', 'action' => 'index'), array('escape' => false)); ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo '<span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Mais Gestão' ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Pars'), array('controller' => 'pairs', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Areas'), array('controller' => 'areas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Subareas'), array('controller' => 'subareas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Questionarios'), array('controller' => 'questionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Matrizes'), array('controller' => 'matrizes', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Checklists Questionarios'), array('controller' => 'checklistsquestionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Perfils'), array('controller' => 'Perfils', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Ufs'), array('controller' => 'Ufs', 'action' => 'index'), array('escape' => false)); ?> </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo '<span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Mapa do Site' ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Cooperativa'), array('controller' => 'Cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Comercializado'), array('controller' => 'Comercializados', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Logistica'), array('controller' => 'Logisticas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Agronegocio'), array('controller' => 'Agronegocios', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Credito'), array('controller' => 'Credits', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Finanças'), array('controller' => 'Financas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Asssociado'), array('controller' => 'Asssociados', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Vendas e Marketing'), array('controller' => 'VendaMarketings', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Funcionario'), array('controller' => 'Funcionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;ATERProduto'), array('controller' => 'ATERProdutos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Emissão de Nota'), array('controller' => 'EmissaoNotas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Recurso Humano'), array('controller' => 'RecursoHumanos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Faturamento'), array('controller' => 'Faturamentos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Produto'), array('controller' => 'Produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Socio'), array('controller' => 'Socios', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Valor Receita'), array('controller' => 'ValorReceitas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Valor Despesa'), array('controller' => 'ValorDespesas', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Valor Investomento'), array('controller' => 'ValorInvestimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Valor Patrimônio'), array('controller' => 'ValorPatrimonios', 'action' => 'index'), array('escape' => false)); ?> </li>
              </ul>
            </li>
            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Pesquisar'), array('controller' => 'pesquisas', 'action' => 'index', 'admin'=>false , 'plugin'=>null), array('escape' => false)); ?> </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if($this->Session->read('Auth.User.name')){?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __d('admin', 'Languages'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <?php
                   echo $this->Html->image("Admin.flags/por.png", array(
                       "alt" => __d('admin', "Brazilian"),
                       'url' => '/admin/languages/pt-br',
                       'class' => 'lang-flag'
                   ));
                   ?>
                </li>
                <li>
                  <?php 
                    echo $this->Html->image("Admin.flags/eng.png", array(
                        "alt" => __d('admin', "English"),
                        'url' => '/admin/languages/eng',
                        'class' => 'lang-flag'
                    ));
                   ?>
                </li>                
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->Session->read('Auth.User.name');?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('<i class="fa fa-gear"></i> '.__d('admin', 'Users'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'index', 'admin' => true),array('escape' => false)); ?></li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link(__d('admin', 'Logout'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'logout', 'admin' => true)); ?></li>
              </ul>
            </li>
            <?php
              }else{
            ?>
            <li><?php echo $this->Html->link(__d('admin', 'Login'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'login', 'admin' => true)); ?></li>
            <?php    
              }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container content row-fluid">
      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->fetch('content'); ?>
    </div> <!-- /container -->
    <hr>
    <footer>
      <p>&copy; by Gerson</p>
    </footer>
    <script type="text/javascript">
      $(function(){
        $('.lang-flag').each(function(i, val){
          $alt = val.alt;
          $(this).parent('a').append(' '+$alt);
        });
      });
     </script>
  </body>
</html>
