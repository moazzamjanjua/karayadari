<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="login-page">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="{{ url('/admin') }}/register" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" name="email" id="email" class="form-control" >
								<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
                              </span>
                            </div>
                            <div class="form-group">
                                <label for="username">Username*</label>
                                <input type="text" name="username" id="username" class="form-control" >
								<span>
								@error('username')
								{{$message}}
								@enderror
                              </span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" name="password" id="password" class="form-control" >
								
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
