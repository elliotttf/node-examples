var http = require('http');

options = {
  'host': 'www.google.com',
  'port': '80'
}
http.get(options, function gotIt(res) {
  var data = '';
  res.on('data', function gotSome(chunk) {
    data += chunk;
  });

  res.on('end', function reqDone() {
    console.log('I got it!');
    console.log('wwgd: ' + data);
  });
});

console.log("I'm done!");
