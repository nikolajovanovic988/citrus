<?php

use Citrus\Repositories\Comments;

$sql = "SELECT * FROM comments";

$comments = array();

if (!$q = $conn->query($sql)) {
    die("Database error!");
} else {
    while ($line = $q->fetch_object()) {
        $fruit = new Comments($line->name, $line->email, $line->text, $line->approved);
        array_push($comments, $fruit);
    }
}

$msg = "Note that it will take no more then 1 day for your message to get approved.";
$class = "comment-msg";

if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $text = $conn->real_escape_string($_POST['text']);
    $_POST = array();

    if (empty($name) && empty($email)) {
        $msg = "Name and Email must be filled";
        $class = "comment-msg-alert";
    } else {
        $sql1 = "INSERT INTO comments(name, email, text, approved) VALUES ('$name', '$email', '$text', '0')";

        if (!$q1 = $conn->query($sql1)) {
            die("Database error!");
        } else {
            $_POST = array();
?>
            <script type="text/javascript">
                window.location.href = "index.php";
            </script>
<?php
        };
    }
};
?>
<div class="col-lg-12 col-xs-12 comment-container">
    <div class="">
        <p>Comments:</p>
        <?php foreach ($comments as $comment) { ?>
            <?php if ($comment->getApproved() == 1) { ?>
                <div class="m-0 p-0">
                    <p class="m-0 p-0"><small><?php echo $comment->getName() ?> / <?php echo $comment->getEmail() ?> </small></p>
                    <pre> <?php echo $comment->getText() ?></pre>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <hr>
    <p class="<?php echo $class; ?>"><?php echo $msg; ?></p>

    <div class="card-body px-lg-5 pt-0">

        <form class="text-center" style="color: #757575;" action="" method="POST">
            <div class="md-form mt-3">
                <input type="text" id="name" name="name" class="form-control" placeholder="name...">
            </div>
            <div class="md-form mt-3">
                <input type="mail" id="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="md-form mt-3">
                <textarea rows="3" class="form-control md-textarea" cols="50" name="text" placeholder="Enter text here..."></textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" value="Comment">
        </form>

    </div>


</div>