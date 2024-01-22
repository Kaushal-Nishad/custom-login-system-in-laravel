<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Registration Page</title>
</head>
<body class="bg-light bg-mg">
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-sm-12 col-md-6 mx-auto">
                <div class="card p-3">
                <h2>Registration Form</h2>
                <form action="{{ route('addUser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="userName" value="{{ old('userName') }}" placeholder="Enter Your Name">   
                    @error('userName')
                    <span class="alert alert-danger position-fixed">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                        @error('email')
                    <span class="alert alert-danger position-fixed">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea class="form-control" name="address" placeholder="Enter Your Address">{{ old('address') }}</textarea>
                        @error('address')
                    <span class="alert alert-danger position-fixed">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter a password">
                        @error('password')
                    <span class="alert alert-danger position-fixed">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="signup" value="Signup">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide error messages after 5 seconds (5000 milliseconds)
            setTimeout(function() {
                $('.alert-danger').fadeOut();
            }, 1000);
        });
    </script>
</body>
</html>