<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <main>
        <div class="container-fluid bg-dark min-vh-100 contact-container" >
            <div class="">
                <div class='h1 text-white text-center p-3 title-contact'>Contact Us</div>
                <div class='row'>
                    <div class='col-6'>
                        <form action="">
                            <div class="form-group">
                                <label for="input-fullname">Full Name</label>
                                <input type="text" id="input-fullname" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="input-email">Email address</label>
                                <input type="text" id="input-email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="input-message">Message</label>
                                <textarea class="form-control" id="input-message" placeholder="Message"></textarea>
                            </div>
                            <div class="row m-4">
                                <button type="submit" class="btn btn-primary col-2 offset-md-10">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class='col-6'>
                        <img src="../public/image/avt-ca-rong-removebg-preview.png" alt="Hình ảnh">
                    </div>
                </div>
            </div>
            <div class="text-center h2 text-white">Or</div>
            <div class="contact-logo text-center">
                <a href="" class='text-decoration-none text-white m-4'>
                    <i class="fa fa-facebook-square fs-1"></i>
                </a>
                <a href="" class='text-decoration-none text-white m-4'>
                    <i class="fa fa-google fs-1"></i>
                </a>
                <a href="" class='text-decoration-none text-white m-4'>
                    <i class="fa fa-github fs-1"></i>
                </a>
            </div>
            <div class="h2 text-white m-4 text-center">Hoặc liên hệ trực tiếp ở địa chỉ</div>
            <div class='row'>
                <div class='col-6 offset-3'>
                    <div id="map" class='w-100'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.929542712558!2d105.76222981065678!3d10.02267309004252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0883a074af3af%3A0x5ba28d8126b7bd87!2zSOG6u20gMjE2LCBIxrBuZyBM4bujaSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1695551963291!5m2!1svi!2s" class='w-100' allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>
