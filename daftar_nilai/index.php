<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rata - Rata</title>
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
    </head>
    <body>
        <H3>Daftar nilai</H3>
        <form action="hasil.php" method = "POST">
            <table class="table">
                <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td>Matematika</td>
                        <td>:</td>
                        <td><input type="text" name="matematika"></td>
                    </tr>
                    <tr class="table-info">
                        <td>Biologi</td>
                        <td>:</td>
                        <td><input type="text" name="biologi"></td>
                    </tr>
                    <tr class="table-info">
                        <td>Fisika</td>
                        <td>:</td>
                        <td><input type="text" name="fisika"></td>
                    </tr>
                    <tr class="table-info">
                        <td>Kimia</td>
                        <td>:</td>
                        <td><input type="text" name="kimia"></td>
                    </tr>
                    <tr class="table-info">
                        <td>Bhs Indonesia</td>
                        <td>:</td>
                        <td><input type="text" name="bhs_indonesia"></td>
                    </tr>
                    <tr class="table-info">
                        <td>Bhs Inggris</td>
                        <td>:</td>
                        <td><input type="text" name="bhs_inggris"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit">Hitung</button><input type="reset"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>