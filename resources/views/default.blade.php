@include('layout.header')
<body>
	<div class="wrapper">
		@include('layout.nav-head')
		@include('layout.sidebar')
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
		</div>
	</div>

	@include('layout.script')
</body>
</html>