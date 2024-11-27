<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 5 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Publi G</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }} ">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Publi G</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="bi bi-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Show notifications"><i class="bi bi-bell fs-5"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">Entrenamiento</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
                  <div>
                    <p class="app-notification__message">Crear Nota</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
                  <div>
                    <p class="app-notification__message">Crear Factura</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
                  <div>
                    <p class="app-notification__message">Manual de usuario</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-envelope fs-4 text-primary"></i></span>
                  <div>
                    <p class="app-notification__message">Crear Nuevo Proveedor</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-exclamation-triangle fs-4 text-warning"></i></span>
                  <div>
                    <p class="app-notification__message">Google Drive</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><i class="bi bi-cash fs-4 text-success"></i></span>
                  <div>
                    <p class="app-notification__message">Crear Cliente</p>
                  </div></a></li>
            </div>
          </ul>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Mi Perfil</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Bienvenido</p>
          <p class="app-sidebar__user-designation">PUBLI G</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="/"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon bi bi-laptop"></i><span class="app-menu__label">Nota</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Todasnotas"><i class="icon bi bi-circle-fill"></i> Todas Las Notas</a></li>
            <li><a class="treeview-item" href="/crearNota"  rel="noopener"><i class="icon bi bi-circle-fill"></i> Nueva Nota</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Clientes</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item " href="/Agregarclientes"><i class="icon bi bi-circle-fill"></i> Agregar Cliente</a></li>
            <li><a class="treeview-item" href="/TodosClientes"><i class="icon bi bi-circle-fill"></i> Ver Clientes</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Facturas</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Nuevafactura"><i class="icon bi bi-circle-fill"></i> Nueva Factura</a></li>
            <li><a class="treeview-item" href="/todasFacturas"><i class="icon bi bi-circle-fill"></i> Ver Facturas</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-file-earmark"></i><span class="app-menu__label">Contabilidad</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/entradas"><i class="icon bi bi-circle-fill"></i> Entrada</a></li>
            <li><a class="treeview-item" href="/gastos"><i class="icon bi bi-circle-fill"></i> Gastos</a></li>
            <li><a class="treeview-item" href="/Vercontabilidad"><i class="icon bi bi-circle-fill"></i> Ver</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people-fill"></i><span class="app-menu__label">Empleados</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="/agregarEmpleados"><i class="icon bi bi-circle-fill"></i> Nuevo Empleados</a></li>
              <li><a class="treeview-item" href="/verEmpleados"><i class="icon bi bi-circle-fill"></i> Ver</a></li>
            </ul>
          </li>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-card-heading"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="/insertarProducto"><i class="icon bi bi-circle-fill"></i> Nuevo Producto</a></li>
              <li><a class="treeview-item" href="/verProducto"><i class="icon bi bi-circle-fill"></i> Mis Productos</a></li>
            </ul>
          </li>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-buildings-fill"></i><span class="app-menu__label">Proveedores</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="/agregarProveedor"><i class="icon bi bi-circle-fill"></i> Nuevo Proveedor</a></li>
              <li><a class="treeview-item" href="/verProveedor"><i class="icon bi bi-circle-fill"></i> Ver Proveedor</a></li>
            </ul>
          </li>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-calendar3"></i><span class="app-menu__label">Pagos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="/NuevoPago"><i class="icon bi bi-circle-fill"></i> Nuevo Pago</a></li>
              <li><a class="treeview-item" href="/verPago"><i class="icon bi bi-circle-fill"></i> Ver Mis Pagos</a></li>
            </ul>
          </li>
        
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon bi bi-x-lg"></i><span class="app-menu__label">Salir</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1> @yield('Titulo')</h1>
          
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
         @yield("contenido")
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('js/index.js')}}"></script>
    <script src="{{ asset('js/notas.js')}}"></script>
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src=" {{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
<script type="text/javascript">
  const salesData = {
    xAxis: {
      type: 'category',
      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    yAxis: {
      type: 'value',
      axisLabel: {
        formatter: '${value}'
      }
    },
    series: [
      {
        data: [150, 230, 224, 218, 135, 147, 260],
        type: 'line',
        smooth: true
      }
    ],
    tooltip: {
      trigger: 'axis',
      formatter: "<b>{b0}:</b> ${c0}"
    }
  }
  
  const supportRequests = {
    tooltip: {
      trigger: 'item'
    },
    legend: {
      orient: 'vertical',
      left: 'left'
    },
    series: [
      {
        name: 'Support Requests',
        type: 'pie',
        radius: '50%',
        data: [
          { value: 300, name: 'In Progress' },
          { value: 50, name: 'Delayed' },
          { value: 100, name: 'Complete' }
        ],
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }
    ]
  };
  
  const salesChartElement = document.getElementById('salesChart');
  const salesChart = echarts.init(salesChartElement, null, { renderer: 'svg' });
  salesChart.setOption(salesData);
  new ResizeObserver(() => salesChart.resize()).observe(salesChartElement);
  
  const supportChartElement = document.getElementById("supportRequestChart")
  const supportChart = echarts.init(supportChartElement, null, { renderer: 'svg' });
  supportChart.setOption(supportRequests);
  new ResizeObserver(() => supportChart.resize()).observe(supportChartElement);
</script>
  </body>
</html>