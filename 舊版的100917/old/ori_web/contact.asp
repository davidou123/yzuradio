<%
	for i=1 to 7
	 	message=Request("message")
	next
	 	message=message + Request("message")	
		smtpServer = "enter your SMTP SERVER HERE"
		smtpPort = 25
		

		name = Request("Your_Name:")
		Set myMail = CreateObject("CDO.Message") 
		myMail.Subject = "from " & name
		myMail.From = Request("Your_Email:")
		myMail.To = Request("recipient")
		myMail.HTMLBody = "<html><head><title>Contact letter</title></head><body><br>" & message & "</body></html>"
		myMail.Configuration.Fields.Item("http://s952920@mail.yzu.edu.tw") = 2
		myMail.Configuration.Fields.Item("http://smtp.yzu.edu.tw") = smtpServer
		myMail.Configuration.Fields.Item("http://pop3.yzu.edu.tw") = smtpPort
		myMail.Configuration.Fields.Update 
		myMail.Send
	
%>



