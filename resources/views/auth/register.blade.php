@extends('layouts.app')
@section('content')

<main class="bg_gray">
		
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Account</a></li>
					<li>Sign Up</li>
				</ul>
		</div>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3>
                    <form method="POST" action="{{ route('register') }}">
                     @csrf
					<div class="form_container">
                        <div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name*">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email*">
						</div>

                        <div class="row no-gutters">
                            <div class="col-6 pr-1">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password*">
                                </div>
                            </div>
                            <div class="col-6 pl-1">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" placeholder="Confirm Password*">
                                </div>
                            </div>
                        </div>
						
						<!-- /private -->
						<hr>
						<div class="form-group">
							<label class="container_check">Accept <a href="#0">Terms and conditions</a>
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>
					</div>
                </form>
                    <div class="mt-2">
                        Already have account? <a href="{{ route('login') }}">Log In</a>
                    </div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->

    @endsection