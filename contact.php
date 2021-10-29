<?php include_once("htmlhead.php"); ?>

<body>
    <?php include_once("header.php"); ?>
    <section class="body-section">
        <div class="container my-5">
            <div id="response" class="alert" role="alert"></div>
            <form id="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="last-name" class="form-control" id="last-name" placeholder="Enter your last name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Enter your message here"></textarea>
                </div>
                <button id="submit-btn" type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </section>
    <?php include_once("footer.php"); ?>
</body>

</html>