# ELEC0138-Group-R attacks

The attack that our group implemented was a phishing site.
Phishing sites are fraudulent tactics designed to impersonate legitimate websites in order to trick users into entering sensitive information such as usernames, passwords, credit card details, and so on. These sites typically lure victims into visiting them by sending emails, text messages or other communications that appear to be from a trusted source. Links in the emails or messages may appear to point to legitimate websites, but actually lead to spoofed websites that may visually resemble the real site in order to deceive users

In order to obtain similar URLs, we used dnstwist to obtain the available domains among the similar domains.
![屏幕截图(250)](https://github.com/Zzzyii/ELEC0138-Group-R/assets/85960806/4b46e2b0-8063-4973-a373-c1badf0a01b2)
stackaverflow.com

A copy of the phishing site stackoverflow.com is created using the social engineering attack tool in the kali linux system and the connection stackaverflow.com is mapped to this copy of the phishing site via ngrok, the stackaverflow.com URL is sent to the attacked person and when he enters his account and password, the The backend can get the account and password, and the webpage will automatically jump back to the original website.
![屏幕截图(252)](https://github.com/Zzzyii/ELEC0138-Group-R/assets/85960806/e59787b5-fdb5-4fc8-ba71-4ed80ef16f72)

