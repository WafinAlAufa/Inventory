<?php
if (isset($_POST["submit"])) {
    $result = tambah($_POST);
    if ($result === true) {
        echo "
    <script>
    alert('Successfully add new user');
    document.location.href='index.php?nav=setting';
    </script>
    ";
    } else {
        echo "
    <script>
    alert('$result');
    </script> 
    ";
    }
}

?>

<!-- 
// if (isset($_POST["submit"])) {
//     $result = tambah($_POST);
//     if ($result === true) {
//         echo "
//     <script>
//     alert('Successfuly add new user');
//     document.location.href='index.php?nav=setting';
//     </script>
//     ";
//     } else {
//         echo "
//     <script>
//    alert('$result');
//    document.location.href='index.php?nav=setting';
//     </script> 
//     ";
//     }
// } -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data user</title>
</head>

<body>
    <div class="container d-flex flex-column gap-40 pt-3">
        <h1>Tambah data user</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="nama">Nama:</label>
                        <input type="text" name='nama' id="nama" required class="form-control w_100" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="username">Username:</label>
                        <input type="text" name='username' id="username" required class="form-control w_100" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </li>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="password">Password:</label>
                        <input type="text" name='password' id="password" required class="form-control w_100" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </li>
                </li>
                <li>
                    <div class="d-flex gap-2 flex-column">
                        <label for="role">Role:</label>
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option selected disabled>Open this select role</option>
                            <option value="Admin">Admin</option>
                            <option value="Operator">Operator</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </li>
                </li>
                <ul class="d-flex justify-content-end gap-3">
                    <li><button type="submit" class="btn btn-warning" id="cancel" name="cancel">Cancel</button></li>
                    <li><button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button></li>
                </ul>
            </ul>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#username').on('input', function() {
                const username = $(this).val().trim();
                if (username !== '') {
                    $.ajax({
                        url: 'cek_tambah.php',
                        type: 'post',
                        data: { username: username },
                        success: function(response) {
                            if (response === 'taken') {
                                $('#username-status').text('Username already taken. Please choose another one.');
                                $('#submit').attr('disabled', true);
                            } else {
                                $('#username-status').text('');
                                $('#submit').attr('disabled', false);
                            }
                        }
                    });
                } else {
                    $('#username-status').text('');
                    $('#submit').attr('disabled', false);
                }
            });
        });
    </script>
</body>

</html>