# How to Run This Project

1. Clone the repo:
   ```sh
   git clone https://github.com/yourusername/your-repo.git
   ```
2. Move the folder to C:\xampp\htdocs\
3. Open XAMPP Control Panel and start Apache
4. Run this command in the project directory to install dependencies: composer install

**TODO: make the header responsive with hamburger icon**
**Finish Footer**

I used composer to autoload mailtrap and my MailConfig class to send the form as well as store my environment variable for the SMTP password - so this would be needed for the mail to actually send.
If for some reason you aren't able to use composer install, let me know and i will just expose the SMTP password temporarily as it wont matter much, I would also need to change some files to setup my own autoloader for the MailConfig.php or just require the class manually.
I also commented out the database logic but it can be used with the correct database name to save the contact information.
To answer how i used the 2 hours: The majority was spent doing the Html and CSS since i already had an existing script to send emails with which i just reformatted for the contact page. I did go over by 1-2 hours on the CSS because I didnt want to send something that was only half complete and wanted to make it more responsive - I did also use some CSS from the original website for the footer just to speed things up since I had already spent 3-4 hours and wasn't sure if i should just stop midway through or leave out the footer.
