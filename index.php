<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn_submit').click(function(e) {
                e.preventDefault();
                var rows = $('#rows').val();
                var cols = $('#cols').val();
                $.ajax({
                    url: "form.php",
                    method: "post",
                    data: {
                        rows: rows,
                        cols: cols
                    },
                    success: function(response) {
                        $('#second').append(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <form id="formid" method="post">
        <div>
            <label for="rows">Rows</label><br>
            <input type="number" id="rows" name="rows">
        </div>
        <div>
            <label for="cols">Columns</label><br>
            <input type="number" id="cols" name="cols">
        </div>
        <br>
        <button type="submit" id="btn_submit">click</button>
    </form>
    <div id="second"></div>
</body>
</html>

