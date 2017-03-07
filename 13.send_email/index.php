<?php

//who to send the email to
$to = 'csci_ua_0060_002_fa16@cs.nyu.edu';

//the subject of the email
$subject = "Thank you for helping make America great again";

//the body of the email message
$message = <<<END
Dear Database Designers,
Thank you so much, I mean really thank you for al your great work.
This is so important to me.  So incredibly important.

We can't do it without you.  Listen to Professor Bloomberg - he's great.  You're great.

See you in January.

Love,
President-Elect Donald J. Trump

END;

//additional SMTP headers to indicate who the email is from
//.. and you can include any additional headers you might need
$headers = <<<END
From: President-Elect Donald J. Trump <trump@whitehouse.gov>
Reply-To: no-reply@whitehouse.gov
END;


//send the email
mail($to, $subject, $message, $headers);	

?> 