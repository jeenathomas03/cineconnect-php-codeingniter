var http = require('http');
var fs = require('fs');
http.createServer(function (req, res) {
  fs.readFile('demo1.html', function(err, data) {
    if (err) throw err;
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write(data);
    return res.end();
  });
}).listen(3000);