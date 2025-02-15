CyberPhish
Introduction
I am Hafiz Sharjeel Shakeel, a Cybersecurity Penetration Tester and Ethical Hacker, passionate about building secure tools and exploring advanced encryption techniques. CyberPhish is an ethical hacking project designed for educational and security awareness purposes only. This project simulates phishing attacks using three login pages (Facebook, LinkedIn, Instagram) to demonstrate how users can be tricked into entering their credentials.

How CyberPhish Works
The project contains three login pages (Facebook, LinkedIn, and Instagram).
When a user inputs their credentials, they are redirected to the original login page.
The entered information is saved in a text file (user_data.txt) via PHP.
This project is designed for educational purposes to help security researchers and ethical hackers understand phishing techniques.
Requirements
WampServer (to run PHP scripts on localhost)
A web browser (Google Chrome, Firefox, Edge, etc.)
Setting Up CyberPhish on WampServer
Download & Install WampServer

Get WampServer from the official website: https://www.wampserver.com/
Install and launch WampServer.
Clone the CyberPhish Repository

Open C:\wamp64\www (default WampServer directory).
Copy the CyberPhish project folder into www.
Start WampServer

Run WampServer and ensure the icon turns green.
Open a browser and enter:

http://localhost/CyberPhish/
Access the Phishing Pages

Open Facebook login page:
http://localhost/CyberPhish/Facebook/facebook.html

Open LinkedIn login page:
http://localhost/CyberPhish/LinkedIn/linkedin.html

Open Instagram login page:
http://localhost/CyberPhish/Instagram/instagram.html

Check Captured Credentials

User data will be stored in user_data.txt inside the CyberPhish folder.
Disclaimer
This project is strictly for educational and ethical hacking purposes only. Unauthorized use of CyberPhish for malicious activities is illegal. The developer does not take responsibility for any misuse of this tool. Always test in controlled environments and follow ethical hacking guidelines.

