<?php
$title="Contact Form";


include 'header.php'; ?>

<div id="page-content-wrapper">
    <div class = "bg-contact">
    <div class="contact">
        <span class="bullet">o</span><h1>Contact Us</h1>
        <h2>We look forward to hearing from you!</h2>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" required class="form-control" id="email" name="Email">
            </div>
            <div class="form-group">
                <label for="Name">Your Name</label>
                <input type="text" required class="form-control" id="name" name="Name">
            </div>
            <label for="Message">Message</label>
            <textarea class="form-control" id="message" name="Message" rows="5" placeholder="type your message here"></textarea>
            <button type="submit" class="submit btn btn-default">Submit</button>

        </form>
    </div>
    </div>
</div>






<?php include 'footer.php'; ?>
