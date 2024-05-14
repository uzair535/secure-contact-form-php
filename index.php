<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Car Showroom</title>

    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
    <div class="container contactForm">
        <form data-ajax>
            <div class="row">
                <h2 class="mt-0 mb-2">Contact Us</h2>
                <p class="mb-4">Feel free to reach us if you have any query</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter full name" name="full_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="number" class="form-control" id="phoneNumber" placeholder="+910000000000" name="phone_number" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject here" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" rows="4" class="form-control" placeholder="Query here..." name="message" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <!-- alerts -->
                <div class="alert alert-success mt-4 mb-0" role="alert"></div>
                <div class="alert alert-danger mt-4 mb-0" role="alert"></div>
            </div>
        </form>
    </div>


    <!-- custom js -->
    <script src="assets/script.js"></script>
</body>
</html>