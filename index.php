<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Dashboard | CRUD APP</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="css/index.css" />

            <?php include('common/header.php') ?>

            <br/>

            <div class="container">
                <h1 class="h1">Dashboard Page</h1><br/>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <span class="counter-value" id="WithCovidEncounter"></span>
                            <h3>Covid-19 Encounter</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <span class="counter-value" id="Vaccinated"></span>
                            <h3>Vaccinated</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <span class="counter-value" id="WithFever"></span>
                            <h3>Fever</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <span class="counter-value" id="Adult"></span>
                            <h3>Adult</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <span class="counter-value" id="Minor"></span>
                            <h3>Minor</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <span class="counter-value" id="Foreigner"></span>
                            <h3>Foreigner</h3>
                        </div>
                    </div>
                </div>
            </div>

        <br/>

        <?php include('common/footer.php') ?>

        <script src="js/index.js"></script>
    
    </body>
</html>