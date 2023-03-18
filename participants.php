<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title> Group3 | Case Study 2 </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">   
    
            <?php include('common/header.php') ?>

            <br/>
            <div class="container">
                <h1>List of Records</h1>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" onclick="clearModalForm()">Add Patient</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo" onclick="clearModalForm()">Record Treatment</button>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Patient_ID</th>
                            <th scope="col">Given_name</th>
                            <th scope="col">Last_name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Age</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Phone_Number</th>
                            <th scope="col">email</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider" id="participantList">                    
                    </tbody>
                </table>
            </div>

        <!-- Add Patient Modal -->           
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Add Patient</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="Patient_ID" class="col-form-label">Patient ID:</label>
                                    <input type="number" class="form-control" id="Patient_ID">
                                </div>
                                <div class="mb-3">
                                    <label for="Given_name" class="col-form-label">First Name:</label>
                                    <input type="text" class="form-control" id="Given_name">
                                </div>
                                <div class="mb-3">
                                    <label for="Last_name" class="col-form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="Last_name">
                                </div>
                                <div class="mb-3">
                                    <label for="Birthdate" class="col-form-label">Birthdate:</label>
                                    <input type="date" class="form-control" id="Birthdate">
                                </div>
                                <div class="mb-3">
                                    <label for="Age" class="col-form-label">Age:</label>
                                    <input type="number" class="form-control" id="Age">
                                </div>
                                <div class="mb-3">
                                    <label for="Sex" class="col-form-label"> Sex:</label>
                                    <select class="form-select" aria-label="Default select example" id="Sex">                                
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>                                    
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Address" class="col-form-label">Address:</label>
                                    <input type="text" class="form-control" id="Address">
                                </div>
                                <div class="mb-3">
                                    <label for="City" class="col-form-label">City:</label>
                                    <input type="text" class="form-control" id="City">
                                </div>
                                <div class="mb-3">
                                    <label for="Phone_Number" class="col-form-label">Phone Number:</label>
                                    <input type="number" class="form-control" id="Phone_Number">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="id" value="">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Add treatment record Modal -->           
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Record Treatment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="pname" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="pname">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="col-form-label">Gender:</label>
                                <select class="form-select" aria-label="Default select example" id="gender">                                
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>                                    
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="col-form-label">Age:</label>
                                <input type="number" class="form-control" id="age">
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="col-form-label">Mobile no.:</label>
                                <input type="number" class="form-control" id="mobile">
                            </div>
                            <div class="mb-3">
                                <label for="temp" class="col-form-label">Body Temperature:</label>
                                <input type="number" class="form-control" id="temp">
                            </div>
                            <div class="mb-3">
                                <label for="CovidDiagnosed" class="col-form-label">COVID-19 DIAGNOSED:(YES/NO)</label>
                                <select class="form-select" aria-label="Default select example" id="CovidDiagnosed">
                                    <option value="" disabled selected>Select your option</option>                                
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>                                      
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="CovidEncounter" class="col-form-label">COVID-19 Encounter:(YES/NO)</label>
                                <select  class="form-select" aria-label="Default select example" id="CovidEncounter">                                
                                    <option value="" disabled selected>Select your option</option>    
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>                                      
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Vaccinated" class="col-form-label">Vaccinated:(YES/NO)</label>
                                <select class="form-select" aria-label="Default select example" id="Vaccinated">  
                                    <option value="" disabled selected>Select your option</option>                              
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>                                      
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nationality" class="col-form-label">Nationality</label>
                                <input type="text" class="form-control" id="nationality">
                            </div>

                            <?php
                            // Connect to the database
                            $conn = mysqli_connect("localhost", "root", "", "crudappA");

                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // Select the database
                            mysqli_select_db($conn, "crudappA");

                            // Write the SQL query
                            $sql = "SELECT pname FROM participants";

                            // Execute the query
                            $result = mysqli_query($conn, $sql);

                            // Check if there are any results
                            if (mysqli_num_rows($result) > 0) {
                                // Start the dropdown
                                echo "<select>";

                                // Loop through the results
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Add each value as an option to the dropdown
                                    echo "<option value='" . $row["pname"] . "'>" . $row["pname"] . "</option>";
                                }

                                // Close the dropdown
                                echo "</select>";
                                $dropdown = ob_get_clean();
                            } else {
                                // If there are no results, show an error message
                                echo "No results found";
                            }

                            // Close the database connection
                            mysqli_close($conn);
                            ?>

                            <div class="mb-3">
                                <label for="gender" class="col-form-label">Gender1:</label>
                                <select class="form-select" aria-label="Default select example" id="gendera">                                       
                                </select>
                            </div>

                            <script>
                            document.getElementById("gendera").innerHTML = "<?php echo $dropdown; ?>";
                            </script>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id" value="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php include('common/footer.php') ?>

        <script src="js/participants.js"></script> 
    
    </body>
</html>