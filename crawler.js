var casper = require('casper').create({   
    verbose: true, 
    logLevel: 'debug',
    pageSettings: {
         loadImages:  false,         // The WebPage instance used by Casper will
         loadPlugins: false,         // use these settings
         userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4'
    }
	}),
	system = require('system'),
	group_link = 'https://www.facebook.com/groups/gpopstoplisboa',
	username = 'kae.biciclista';

// print out all the messages in the headless browser context
casper.on('remote.message', function(msg) {
    this.echo('remote message caught: ' + msg);
});

// print out all the messages in the headless browser context
casper.on("page.error", function(msg, trace) {
    this.echo("Page Error: " + msg, "ERROR");
});


casper.start(group_link, function() {
    this.echo(this.getTitle());
    system.stdout.writeLine('Insere a pass(30): (ctrl+D to end)');
		var input = system.stdin.read(30);
		system.stdout.writeLine(JSON.stringify(input));
    this.fill('form#login_form', { 
        email: username, 
        pass:  password
    }, true);
});

casper.run();