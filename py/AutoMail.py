import smtplib
from email.message import EmailMessage
import sys

mail_id = sys.argv[1]
otp = sys.argv[2]

msg = EmailMessage()
msg['Subject'] = 'Hostel OTP'
msg['From'] = 'devsony52@gmail.com'
print("Hi", mail_id, otp)



msg['To'] = str(mail_id)
m = str("Hello,\nYour OTP is" + str(otp))
msg.set_content(m)



with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
    print("Logged in")
    smtp.login('devsony52@gmail.com', '$h1ttyp@$$')
    smtp.send_message(msg)
