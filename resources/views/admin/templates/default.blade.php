<!DOCTYPE html>
<html>

   <!-- file css -->
   @include('admin.templates.partials.head')

<body>

    <!-- file navbar -->
	@include('admin.templates.partials.navbar')

    <!-- file sidebar -->
    @include('admin.templates.partials.sidebar')


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<a href="#">
					<em class="fa fa-home"></em>
				</a>
				<li class="active">
				  {{ Breadcrumbs::render() }}
				</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				   {{ Breadcrumbs::current()->title }}
				</h1>
			</div>
		</div>
		
		<!-- content -->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					 @yield('content')
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					 @yield('card')
				</div>
			</div>
		</div>

		<div class="col-sm-12">
				<p class="back-link" style="margin-top:10px;">
					 <strong>Copyright &copy; 2021<a href="https://www.instagram.com/yusril.mahendri/">  Maju Jaya Abadi</a>.</strong> Kantin sd aisyiyah metro version 1.3  
                </p>
			</div>
		</div>
	</div>

     <!-- script js -->
     @include('admin.templates.partials.scripts')

</body>
</html>
