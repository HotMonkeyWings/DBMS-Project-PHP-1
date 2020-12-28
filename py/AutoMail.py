import smtplib
from email.message import EmailMessage
import sys

mail_id = sys.argv[1]
otp = sys.argv[2]

msg = EmailMessage()
msg['Subject'] = 'Hostel OTP'
msg['From'] = 'hostelnitctest@gmail.com'




msg['To'] = str(mail_id)
m = str("Dear Parent,\nYour OTP is " + str(otp))
msg.set_content(m)



with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
    print("Logged in")
    smtp.login('hostelnitctest@gmail.com', '9495923271Dev')
    smtp.send_message(msg)
