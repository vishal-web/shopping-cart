<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
	<div class="brand-logo">
		<a href="{{ url('/shopadmin/dashboard') }}">
			<img src="{{ asset('shop/images/logo-icon.png') }}" class="logo-icon" alt="Bangodash">
			<h5 class="logo-text"> Admin</h5>
		</a>
	</div>
	<ul class="sidebar-menu do-nicescrol"> 
		<li>
			<a href="{{ url('shopadmin/dashboard') }}" class="waves-effect"><i class="icon-home"></i> <span>Dashboard</span></a> 
		</li>
		<li>
			<a href="{{ url('shopadmin/category') }}" class="waves-effect"><i class="icon-grid"></i> <span>Category</span></a> 
		</li>
		<li>
			<a href="{{ url('shopadmin/product') }}" class="waves-effect"><i class="icon-grid"></i> <span>Product</span></a> 
		</li>
		<li>
			<a href="{{ url('shopadmin/customer') }}" class="waves-effect"><i class="icon-user"></i> <span>Customer</span></a> 
		</li>
	</ul>
</div>