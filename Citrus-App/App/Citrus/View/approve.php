<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../../../index.php");
}

require_once '../../../connect.php';
?>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Citrus</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <?php include '../View/Index/navbar.php'; ?>
            </div>
            <div class="col-lg-12 col-xs-12 pt-5">
                <h3> <b>Not approved comments:</b></h3>
                <div id="notApprovedComments" class="pt-5">
                    <table id="notApproved" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Id </th>
                                <th class="th-sm">Name </th>
                                <th class="th-sm">Email </th>
                                <th class="th-sm">Text </th>
                                <th class="th-sm">Approve </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="th-sm">Id </th>
                                <th class="th-sm">Name </th>
                                <th class="th-sm">Email </th>
                                <th class="th-sm">Text </th>
                                <th class="th-sm">Approve </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <hr>
                <br>
                <h3> <b>Approved comments:</b></h3>
                <div id="approvedComments" class="pt-5">
                    <table id="approved" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Id </th>
                                <th class="th-sm">Name </th>
                                <th class="th-sm">Email </th>
                                <th class="th-sm">Text </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="th-sm">Id </th>
                                <th class="th-sm">Name </th>
                                <th class="th-sm">Email </th>
                                <th class="th-sm">Text </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <?php include '../View/footer.php'; ?>
    </div>

    <script>
        <?php
        $sql = "SELECT * FROM comments";

        if (!$q = $conn->query($sql)) {
            die("Database error!");
        }
        ?>

        setTimeout(function() {

            var tableUp = $('#notApproved').DataTable();
            var tableDown = $('#approved').DataTable();

            <?php while ($line = $q->fetch_object()) { ?>
                <?php if ($line->approved == 0) { ?>
                    tableUp.row.add([
                        "<?php echo $line->id; ?>",
                        "<?php echo $line->name; ?>",
                        "<?php echo $line->email; ?>",
                        "<?php echo $line->text; ?>",
                        "<?php echo $line->id; ?>"
                    ]).draw(false);
                <?php } else { ?>
                    tableDown.row.add([
                        "<?php echo $line->id; ?>",
                        "<?php echo $line->name; ?>",
                        "<?php echo $line->email; ?>",
                        "<?php echo $line->text; ?>"
                    ]).draw(false);
                <?php } ?>
            <?php } ?>

        }, 300);
        $(document).ready(function() {
            $('#notApproved').DataTable({

                columnDefs: [{
                    targets: 4,
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            data = '<a href="/Citrus-App/App/Citrus/Scripts/approveComment.php?id=' + encodeURIComponent(data) + '">Approve</a>';
                        }
                        return data;
                    }
                }],

            });

            $('#notProcessed').DataTable({});

        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>