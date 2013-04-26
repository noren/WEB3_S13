var http = require("http");
var url = require("url");
var fs = require("fs");
var port = 8080;

var index, about;


fs.readFile('./index.html', function(err,data){
	
	if(err) throw err;
	
	index = data;
	
});

fs.readFile('./about.html', function(err,data){
	
	if(err) throw err;
	about = data;
});

http.createServer(function(request,response){
	
	var pathname = url.parse(request.url).pathname;
	console.log("Request for "+ pathname + " received");
	response.writeHead(200, {"Content-Type": "text/html"});
	
	if(pathname=="/" || pathname== "/index.html") response.write(index);
	if(pathname=="/about.html") response.write(about);
	
	response.end();
	
}).listen(port);

console.log("Server Running on Port "+port);
