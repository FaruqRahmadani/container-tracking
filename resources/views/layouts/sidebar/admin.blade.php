<li class="nav-item">
	<a class="nav-link" href="">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span>
	</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('TerkirimIndex') }}">
		<i class="fas fa-fw fa-paper-plane"></i>
		<span>Barang Terkirim</span>
	</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('rekanan') }}">
    <i class="fas fa-fw fa-users"></i>
		<span>Rekanan</span>
	</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('barang') }}">
    <i class="fas fa-fw fa-archive"></i>
		<span>Barang</span>
	</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('monitoring') }}">
    <i class="fas fa-fw fa fa-search"></i>
    <span>Monitoring</span></a>
</li>


{{-- menu dibawah hanya dev items --}}

<div class="sidebar-heading">
	Devlopement Only
</div>
<li class="nav-item">
	<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
		<i class="fas fa-fw fa-folder"></i>
		<span>Pages</span>
	</a>
	<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<h6 class="collapse-header">Login Pages:</h6>
			<a class="collapse-item" href="/template/login">Login</a>
			<a class="collapse-item" href="/template/register">Register</a>
			<a class="collapse-item" href="/template/forget">Forgot Password</a>
			<div class="collapse-divider"></div>
			<h6 class="collapse-header">Component :</h6>
			<a class="collapse-item" href="/template/button">Button</a>
			<a class="collapse-item" href="/template/card">Card</a>
			<a class="collapse-item" href="/template/form1">Form Label on Top</a>
			<a class="collapse-item" href="/template/form2">Form Horizontal</a>
			<div class="collapse-divider"></div>
			<h6 class="collapse-header">Utility :</h6>
			<a class="collapse-item" href="/template/color">Color</a>
			<a class="collapse-item" href="/template/border">Border</a>
			<a class="collapse-item" href="/template/animation">Animation</a>
			<a class="collapse-item" href="/template/other">Other</a>
			<div class="collapse-divider"></div>
			<h6 class="collapse-header">Other Pages :</h6>
			<a class="collapse-item" href="/template/dashboard">Dashboard</a>
			<a class="collapse-item" href="/template/blank">Blank Page</a>
			<a class="collapse-item" href="/template/data">Table</a>
			<a class="collapse-item" href="/template/chart">Chart</a>
			<div class="collapse-divider"></div>
		</div>
	</div>
</li>
