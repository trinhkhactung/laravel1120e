@include('includes.header')
<body>
	<div class="wrapper">
		@include('includes.nav-head')
		@include('includes.sidebar')
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
		</div>
	</div>

	@include('includes.script')
</body>
</html>