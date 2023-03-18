<?php

    echo '         
        </head>
    <body>
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" style="text-decoration:none; color:gray; margin-right:5px;">Group 3 | Case Study 2</a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.php" class="nav-link px-2 text-white">Dashboard</a></li>
                        <li><a href="participants.php" class="nav-link px-2 text-white">Records</a></li>                        
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="text" class="form-control form-control-dark text-bg-dark" id="keyword" onkeyup="searchParticipant()" aria-label="Search">
                    </form>

                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                </div>
            </div>
        </header>';

?>