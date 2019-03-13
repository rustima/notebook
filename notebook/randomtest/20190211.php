<?php
// readfile("php://filter/read=string.toupper/resource=http://www.example.com");
readfile("php://filter/read=string.toupper|string.rot13/resource=http://www.example.com");
