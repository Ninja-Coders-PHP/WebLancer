<?php
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./css/global.css">
<link rel="stylesheet" type="text/css" href="./css/freelancer-ProjectList.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
<title>WebLancer - Your Project List</title>
<?php
include "header.php";
?>
    <body>
        <main>
            <div class="row">
                <h2>Project List</h2>
                <p>Hi <span id="FreelancerName">Yifat</span>!</p>
                <p>Here are you projects:</p>
            </div>
            <table class="table table-success table-striped">
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Open</td>
                    <td>North-Side Campus: Designing interface for communication between students and instructors.</td>
                    <td>June 24, 2022 , step 1: planning , step 2:sprint , step 3: presentation and deployment</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>In-progress</td>
                    <td>All in cards: Sending virtual greeting card for your love ones.</td>
                    <td>April 15, 2022 , step 1: planning , step 2:sprint , step 3: presentation and deployment</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Completed</td>
                    <td>Cartazone: e-commerce for vintage car collection.</td>
                    <td>June 20, 2021 , step 1: planning , step 2:sprint , step 3: presentation and deployment</td>
                </tr>
            </table>
        </main>
<?php
include "footer.php";
?>
    </body>
</html>
