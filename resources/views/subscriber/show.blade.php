@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">Messages</li>  

	<!-- Breadcrumb Menu-->
	<li class="breadcrumb-menu d-md-down-none">
		<div class="btn-group" role="group" aria-label="Button group">
			<!-- <a class="btn" href="#"><i class="icon-speech"></i></a> -->
			<!-- <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a> -->
			<a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
		</div>
	</li>
</ol>


<div class="container-fluid"> 
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12"> 
				<div class="card message-card">
					<div class="card-header bg-primary">
						<i class="fa fa-envelope"></i> Subscriber List
					</div>
					<div class="preview">
						<div class="row">
							<div class="col-xs-6 col-lg-8">
								<form action="" method="post" class="form-horizontal">
									<div class="form-group row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-btn">
													<button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
												</span>
												<input type="text" id="search-messages" name="search-messages" class="form-control" placeholder="Search campaigns...">
											</div>
										</div>
									</div> 
								</form>
							</div>
						</div>
					</div>
					<table class="table table-striped message-table">
						<thead>
							<tr>
								<th>Subsriber Number</b></th>
								<th>Group</b></th>
								<th class="text-right"> Date Subsribed</th> 
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
							<tr>
								<td>+1920292933</td>
								<td>Default</td>
								<td>08/22/2017 11:30AM</td>
							</tr>
						</tbody>
					</table>
					<div class="card-body">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">Prev</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">3</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">4</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<!--/.row-->





		<!--/.row-->
	</div>


</div>
@endsection