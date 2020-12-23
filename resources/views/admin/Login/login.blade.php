
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<!-- //Meta tag Keywords -->

	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">

	<!--/Style-CSS -->
	<link rel="stylesheet" href="{!!asset('AssetLogin/css/style.css')!!}" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<section class="w3l-forms-main-61">
		<div class="form-inner">
			<div class="wrapper">

				<div class="form-bg-blur">
					<div class="form-61">
						<h4 class="form-head">Đăng Nhập</h4>
						@if (count($errors) >0)
                       <ul>
                       @foreach($errors->all() as $error)
                       <li class="text-danger"> {{ $error }}</li>
                       @endforeach
                       </ul>
                       @endif

                      @if (session('status'))
                     <ul>
                     <li class="text-danger"> {{ session('status') }}</li>
                     </ul>
                      @endif
						<form action="{{route('get-admin-Login')}}" method="post">
						{{ csrf_field() }}
							<div class="">
								<p class="text-head">Tài Khoản : </p>
								<input type="text" name="txtEmail"value="admin@gmail.com" class="input" required />
							</div>
							<div class="">
								<p class="text-head">Mật Khẩu : </p>
								<input type="password" name="txtPassword"value="12345" class="input" required />
							</div>
							<label class="remember">
								<input type="checkbox">
								<span class="checkmark"></span>Nhớ Mật Khẩu
							</label>
							<button type="submit" class="signinbutton btn">Đăng Nhập</button>
							<p class="signup">Quên Mật Khẩu?<a href="#forgot" class="signuplink">Lấy Lại</a></p>
						</form>
					</div>
				</div>
			</div>
		
		</div>
	</section>
</body>

</html>