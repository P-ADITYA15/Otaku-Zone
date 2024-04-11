# Otaku Zone

## Running Otaku Zone Locally

To run the Otaku Zone web app locally on your machine, follow these steps:

1. **Download the Application:**
   - Visit the GitHub repository for Otaku Zone.
   - Click on the green "Code" button and select "Download ZIP".
   - Once downloaded, extract the ZIP file to your desired location.

2. **Install XAMPP:**
   - Download and install XAMPP from [here](https://www.apachefriends.org/index.html).
   - Start the Apache and MySQL services in the XAMPP control panel.

3. **Import the Database:**
   - Open phpMyAdmin by visiting http://localhost/phpmyadmin/.
   - Log in (default username is "root" with no password).
   - Import the `chatroom.sql` file located in the "database" folder of the extracted repository.

4. **Move the Files:**
   - Move the extracted folder to `xampp/htdocs/` (Windows) or `/Applications/XAMPP/htdocs/` (macOS).

5. **Configure Database Connection:**
   - Open `dbconnect.php` in the extracted folder and update the database connection details.

6. **Access the Web App:**
   - Open your web browser and go to `localhost/<foldername>` or `localhost/<foldername>/main.php`.
   - Use "admin@123" as the default password if prompted.

Now you can enjoy chatting anonymously and staying updated with the latest anime news on Otaku Zone!


#Features

Otaku Zone is a web application designed for anime enthusiasts to connect, chat, and stay updated with the latest anime news. Built using PHP and SQL database, Otaku Zone offers two main features:

Anonymous Chatroom: Engage in lively discussions with fellow anime fans in a completely anonymous environment. Chat about your favorite shows, characters, or anything anime-related without revealing your identity.

Anime News Feed: Stay up-to-date with the latest news, releases, and updates from the world of anime. Explore recent articles, announcements, and discussions to keep your finger on the pulse of the anime community.

Additionally, Otaku Zone allows users to create their own custom chat rooms, enabling them to chat with friends or fellow fans about specific topics of interest. Share your created chat rooms with friends and invite them to join the conversation.

Whether you're a seasoned anime aficionado or just getting started, Otaku Zone provides a vibrant platform to connect with like-minded individuals, share your passion for anime, and discover new content.

Key Features:

Anonymous chatroom for unrestricted conversations.
Stay updated with the latest anime news and releases.
Create custom chat rooms and share them with friends.
Engage in discussions about specific anime topics and interests.
Join the Otaku Zone community today and immerse yourself in the world of anime!
