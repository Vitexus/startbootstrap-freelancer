check:
	wget http://localhost/VitexSoftware/startbootstrap-freelancer/index.php -O /tmp/freelancerphp.html
	wget http://localhost/VitexSoftware/startbootstrap-freelancer/index.html -O /tmp/freelancerhtm.html
	tidy -m /tmp/freelancerphp.html || true
	tidy -m /tmp/freelancerhtm.html || true
	sed -i 's/></>\n</g'  /tmp/freelancerphp.html
	sed -i 's/></>\n</g'  /tmp/freelancerhtm.html
	kdiff3 /tmp/freelancerphp.html /tmp/freelancerhtm.html
