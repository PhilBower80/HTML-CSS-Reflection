<?php 
$pageTitle = 'Contact Us | Netmatters';
include('inc/head.php'); 
include('inc/header.php');
include('inc/connection.php');
?>

<main>
    <div class="breadcrumb">
        <div class="container">
            <div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>How can we help you?</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>How can we help you?</h1>
    </div>

    <div class="container">
        <div class="flex-row">
            <form action="POST">  
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="name" class="required">Your name</label>
                            <input type="text" name="name">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="email" class="required">Your email</label>
                            <input type="text" name="email">
                        </div>
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="telephone" class="required">Your telephone number</label>
                            <input type="text" name="telephone">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="subject" class="required">Subject</label>
                            <input type="text" name="subject">
                        </div>
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="form-group message">
                        <label for="message" class="required">Message</label>
                        <textarea name="message" id="" cols="50" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="privacy-checkbox">
                            <input type="checkbox">
                            <span>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.</span>
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <button name="submit">Send enquiry</button>
                    </div>
                </div>
            </form>
            <div class="right-panel">
                <div>
                    <strong>Call us on:</strong>
                    <a href="tel:01603704020"><h2>01603 70 40 20</h2></a>
                </div>
                <div>
                    <strong>Email us on:</strong>
                    <a href="mailto:sales@netmatters.co.uk"><h3>sales@netmatters.co.uk</h3></a>
                </div>
                <div>
                    <strong>Call us at our Gorleston branch on:</strong>
                    <a href="tel:01603704020"><h2>01493 60 32 04</h2></a>
                </div>
                <div>
                    <strong>Business Hours:</strong>
                </div>
                <div>
                    <strong>Monday - Friday 07:00 - 18:00</strong>
                </div>
            </div>
        </div>
    </div>



</main>





<?php 
include('inc/footer.php'); 
include('inc/sidebar.php'); 
?>