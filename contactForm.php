<?php 

include('inc/functions.php');

$name = $email = $telephone = $subject = $message = $marketing = '';
$errors = array('name'=>'', 'email'=>'', 'telephone'=>'', 'subject'=>'', 'message'=>'', 'marketing'=>'');

// Add data to database after checking user entries.

if(isset($_POST['submit'])){

    // check name
    if(empty($_POST['name'])){
        $errors['name'] = 'A name is required <br />';
    } else {
        $name = $_POST['name'];
        
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
            $errors['name'] = 'Name must be letters and spaces only!';
        }
    }

    // check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email must be a valid email address';
        }
    }

    // check telephone
    if(empty($_POST['telephone'])){
        $errors['telephone'] = 'Telephone number is required! <br />';
    } else {
        $telephone = $_POST['telephone'];

       if(!is_numeric($_POST['telephone'])){
            $errors['telephone'] = 'Telephone number must be a numeric value';
        }
    }


    // check subject
    if(empty($_POST['subject'])){
        $errors['subject'] = 'A subject is required <br />';
    } else {
        $subject = $_POST['subject'];

        if(!preg_match('/^[a-zA-Z\s]+$/', $subject)){
            $errors['subject'] = 'Name must be letters and spaces only!';
        }
    }

    // check message
    if(empty($_POST['message'])){
        $errors['message'] = 'Message is required! <br />';
    } else {
        $message = $_POST['message'];
    }

    // check marketing preferences
    if(isset($_POST['marketing'])) {
        $marketing = $_POST['marketing'];
    }
        

    if(array_filter($errors)){
        // echo 'errors in the form';
    } else {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $telephone = trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    sendMessage($name, $email, $telephone, $subject, $message, $marketing);

    // save to db and check
    
    header('Location: contactForm.php?success=true');
    }

} // end of post check
?>

<?php
$pageTitle = 'Contact Us | Netmatters';

include('inc/head.php'); 
include('inc/header.php');
include('inc/cookie.php');
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
           <form class="flex-row" action="contactForm.php" method="POST">
                    <div class="panel-1">
               
                        <div class=form-row>
                            <div class="form-group ">
                                <label for="name" class="required">Your name</label>
                                <input class="form-input" type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
                                <div class="errorMsg"><?php echo $errors['name']; ?></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="required">Your email</label>
                                <input class="form-input" type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
                                <div class="errorMsg"><?php echo $errors['email']; ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="telephone" class="required">Your telephone number</label>
                                <input class="form-input" type="tel" name="telephone" value="<?php echo htmlspecialchars($telephone) ?>">
                                <div class="errorMsg"><?php echo $errors['telephone']; ?></div>
                            </div>
               
                            <div class="form-group">
                                <label for="subject" class="required">Subject</label>
                                <input class="form-input" type="text" name="subject" value="<?php echo htmlspecialchars($subject) ?>">
                                <div class="errorMsg"><?php echo $errors['subject']; ?></div>
                            </div> 
                        </div>
                    
                        <div class="form-row">
                            <div class="message ">
                                <label for="message" class="required">Message</label>
                                <textarea type="text" name="message" cols="50" rows="10"><?php echo htmlspecialchars($message) ?></textarea>
                                <div class="errorMsg"><?php echo $errors['message']; ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="marketing" class="checkbox-container">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.
                                <input type="checkbox" id="marketing" name="marketing" value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
               
                        <div class="form-row">
                            <div class="form-group enquiry">
                                <button class="contact-btn" type="submit" name="submit">Send Enquiry</button>
                                <span>
                                    <?php
                                    if ( isset($_GET['success']) && $_GET['success']==true ) {
                                        echo "Message Sent Successfully";
                                    } ?>
                                </span>
                            </div>
                        </div>
               
                    </div>
               
                    <div class="panel-2">
                        <div>
                            <strong>Call us on:</strong>
                            <a href="tel:01603704020"><h2>01603 70 40 20</h2></a>
                        </div>
                        <div>
                            <strong>Email us on:</strong>
                            <a href="mailto:sales@netmatters.com"><h3>sales@netmatters.com</h3></a>
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
           </form>
    </div>

</main>

<?php 
include('inc/footer.php'); 
include('inc/sidebar.php'); 
?>