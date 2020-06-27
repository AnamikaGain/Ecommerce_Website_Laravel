@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Home</a>
				<i class="icon-angle-right"></i>
			</li>
			<li><a href="#">Tables</a></li>
		</ul>
          <p class="alert-success">
			<?php
			$message=Session::get('message');
			if($message)
			{
				echo $message;
				Session::put('message',null);

			}
           ?>
		</p>
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
					  <thead>
						  <tr>
							  <th>Category ID</th>
							  <th>Category Name</th>
							  <th>Category Descripton</th>
							  <th>Status</th>
							  <th>Actions</th>
						  </tr>
					  </thead>
                        @php ($i=1)
                 @foreach( $categories as $v_category)
					  <tbody>
						<tr>
						<td>{{ $i++ }}</td>
						<td class="center">{{ $v_category->category_name }}</td>
						<td class="center">{{$v_category->category_description}}</td>

						<td class="center">
							@if($v_category->publication_status==1)
							<span class="label label-success">Active</span>
							@else
                                <span class="label label-danger">Unactive</span>
							@endif
						</td>

						<td class="center">
                            @if($v_category->publication_status==1)
                                <button href="{{URL::to('/unactive_category/'.$v_category->id)}}" class="btn btn-primary">unactive </button>
								<i class="halflings-icon white thumbs-down"></i>
							</a>
                            @else
                                <button href="{{URL::to('/active_category/'.$v_category->id)}}" class="btn btn-primary">Active </button>
								<i class="halflings-icon white thumbs-up"></i>
							</a>
                            @endif
                                <button href="{{URL::to('/edit-category/'.$v_category->id)}}"id="edit" class="btn btn-primary">Edit </button>
								<i class="halflings-icon white edit"></i>
							</a>
                                <button href="{{URL::to('/delete-category/'.$v_category->id)}}" id="delete" class="btn btn-primary">Delete </button>
								<i class="halflings-icon white trash"></i>
							</a>
						</td>
						</tr>
					  </tbody>
                   @endforeach
				  </table>
				</div>
			</div><!--/span-->

		</div><!--/row-->

@endsection
