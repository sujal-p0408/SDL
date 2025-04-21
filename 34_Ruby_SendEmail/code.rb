require 'mail'

 # Set up SMTP settings
 Mail.defaults do
 delivery_method :smtp, {
 :address => 'smtp.gmail.com',
 :port => 587,
 :user_name => 'sujalporte007@gmail.com',
 :password => 'swho nqkh mnoy incs',
 :authentication => :login,
 :enable_starttls_auto => true
 }
 end

 # Define email message
 message = Mail.new do
 from 'sujalporte007@gmail.com'
 to 'sujal.porte22@pccoepune.org'
 subject 'Hello from Ruby'
 body 'Sujal this side 😎.'
 end

 # Send email
 message.deliver!