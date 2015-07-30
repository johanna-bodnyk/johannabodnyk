<?php include('_top.php'); ?>

    <main class="row" id="contact">

        <?php

            # Process contact form
            if($_POST) {
                include('_contact_processing.php');
            }
            # Or display contact form
            else {
                include('_contact_form.php');
            }
        ?>

    </main>

<?php include('_bottom.php'); ?>