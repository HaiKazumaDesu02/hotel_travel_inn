<!doctype html>
<html lang="en">

<head>
    <title>Entry Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Poppins font CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
    <style>
        body {
            background-image: url("{{ asset('images/bg3.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 200%;
        }

        .header {
            font-size: 2.6rem;
        }

        .small {
            font-size: 2rem;
        }

        p {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <p class="header">
                Hotel Travel Inn
            </p>
            <p class="small mt-3">
                Entry-Form
            </p>
        </div>

        <div class="entry-form p-3 p-md-5">
            <form action="{{route('entry-store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <p class="mb-1">Full Name*</p>
                    <input class="form-control" type="text" name="name" placeholder="" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Email Address*</p>
                    <input class="form-control" type="text" placeholder="" name="email" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Phone Number*</p>
                    <input class="form-control" type="text" placeholder="" name="phone" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Location*</p>
                    <input class="form-control" type="text" placeholder="" name="location" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Number of guests*</p>
                    <input class="form-control" type="number" placeholder="3" name="total_guests" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Room Number*</p>
                    <input class="form-control" type="text" placeholder="120" name="room_number" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Check-In*</p>
                    <input class="form-control" type="date" placeholder="" name="check_in" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Check-Out*</p>
                    <input class="form-control" type="date" placeholder="" name="check_out" required>
                </div>
                {{-- <div class="mb-3">
                    <p class="mb-1">Total Nights</p>
                    <input class="form-control" type="text" placeholder="" name="total_nights">
                </div> --}}
                <div class="mb-3">
                    <p class="mb-1">Advance Payment*</p>
                    <input class="form-control" type="text" placeholder="500" name="advance_payment" required>
                </div>
                <div class="mb-3">
                    <p class="mb-1">Identification Card</p>
                    <input class="form-control" type="file" name="file" required>
                </div>
                <div style="text-align: right;">
                    <button type="" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>

    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xxxx" crossorigin="anonymous"></script>
        
        

</body>

</html>

