<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Size Calculator</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $("document").ready(function() {
        $("#submit_btn").click(function() {
            sample_size_calculator();
        });
    });

    function sample_size_calculator() {
        // 不良率預設0.5
        var p = 0.5;
        var confidence_level = $("#confidence_level").val();
        var confidence_interval = $("#confidence_interval").val();
        var Population = $("#Population").val();
        var sample_szie = $("#sample_szie").val();

        var p = 0.5;
        sample_szie = (Population * p * (1 - p)) / (((Population - 1) * Math.pow(((confidence_interval / 100) / confidence_level), 2)) + p * (1 - p));
        sample_szie = Math.round(sample_szie);
        sample_szie = $("#sample_szie").val(sample_szie);

    }
</script>

<body>
    <div class="container">
        <table class="table table-bordered table-striped ">
            <tr>
                <th colspan="2" style="text-align:center"> 常態樣本數計算機</th>
            </tr>
            <tr>
                <td>
                    信心水準
                </td>
                <td>
                    <input type="radio" value="1.96" id="confidence_level"> 95%
                    <input type="radio" value="2.59" id="confidence_level"> 99%
                </td>
            </tr>
            <tr>
                <td>
                    誤差率
                </td>
                <td>
                    <input type="number" id="confidence_interval">
                </td>
            </tr>
            <tr>
                <td>
                    母體數
                </td>
                <td>
                    <input type="number" id="Population">
                </td>
            </tr>
            <tr>
                <td>
                    因抽樣本數
                </td>
                <td>
                    <input type="number" id="sample_szie">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" id="submit_btn" class="btn btn-primary" value="計算">
                </td>
            </tr>

        </table>
    </div>
</body>

</html>