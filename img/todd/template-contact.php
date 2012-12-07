<?php /* Template Name: Contact */

	$error = array();
	$name;
	$mail;
	$send_mail;
	$message;
	$send = false;

	if(isset($_POST['contact-send'])){

		if(isset($_POST['contact-name']) && $_POST['contact-name'] != ''){

			$name = filter_input(INPUT_POST, 'contact-name', FILTER_SANITIZE_STRING);
			
		} else{
			$error['name_error'] = __('Required field!', 'html5blank');
		}

		if(isset($_POST['contact-mail']) && $_POST['contact-mail'] != ''){
			
			$mail = $_POST['contact-mail'];
			if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
				$send_mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
			} else{
				$error['mail_error'] = __('Enter valid email address!', 'html5blank');
			}
			
		
		} else{
			$error['mail_error'] = __('Required field!', 'html5blank');
		}
		
		if(isset($_POST['contact-message']) && $_POST['contact-message'] != ''){

			$message = filter_input(INPUT_POST, 'contact-message', FILTER_SANITIZE_STRING);
		
		} else{
			$error['mesage_error'] = __('Required field!', 'html5blank');
		}
		
		if(empty($error)){
			
			$email_address = 'create@toddmotto.com';
			
			if(! isset($email_address)){
					
				$email_address = get_option('admin_email');
			}
			
			$subject='['.get_bloginfo('name').'] Message from : '.$name;
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=utf-8 \r\n";
			$email= " From : ".$send_mail." <br>".$message;
			
			mail($email_address,$subject,$email,$headers);
			
			$send = true;
		}
	}
	
	get_header(); ?>
	
	<!-- Section -->
	<section>
	
		<div id="blog">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<h2>Drop me a message below. </h2>
			
			<?php if($send === true){ echo '<span class="contact-send-text">'.__('Message sent successfully, speak soon.', 'html5blank').'</span>'; } ?>
		
			<form id="contact-form" action="<?php the_permalink(); ?>" method="post">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="Mail Icon">
				<h3>
					To talk to me about anything, fill in the form and I'll get back to you within a few hours. 
					For project requests, please detail in the message. If you've an idea for a tutorial, plugin or download, collaboration or anything 
					you'd like to see, drop me your ideas.
				</h3>
				
				<input type="hidden" id="contact-send" name="contact-send"/>
				<div>
					<?php if(isset($error['name_error'])){ echo '<span class="contact-error">'.$error['name_error'].'</span>'; }?>
					<input placeholder="Name:" type="text" id="contact-name" name="contact-name" <?php if(isset($_POST['contact-name']) && !$send){ echo 'value="'.$_POST['contact-name'].'"'; }?>/>
				</div>
				<div>
					<?php if(isset($error['mail_error'])){ echo '<span class="contact-error">'.$error['mail_error'].'</span>'; }?>
					<input placeholder="Email:" type="text" id="contact-mail" name="contact-mail" <?php if(isset($mail) && !$send){ echo 'value="'.$_POST['contact-mail'].'"'; }?>/>
				</div>
				<div>
					<?php if(isset($error['mesage_error'])){ echo '<span class="contact-error">'.$error['mesage_error'].'</span>'; }?>
					<textarea placeholder="Message:" id="contact-message" name="contact-message" rows="9" cols="10"><?php if(isset($_POST['contact-message']) && !$send){ echo $_POST['contact-message']; }?></textarea>
				</div>
				<div>
					<button name="submit" type="submit" id="contact-submit" ><?php _e('Send Email', 'html5blank') ?></button>
				</div>
				
			</form>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
		</div>
	
		<?php get_sidebar(); ?>
	
	</section>
	<!-- /Section -->

<?php get_footer(); ?>