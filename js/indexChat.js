(function(){
  var chat = {
    messageToSend: '',
    messageResponses: [
	  'Im here',
	  'Whats up everyone!!!',
	  'Marias is here',
	  'Am I logged on?',
	  '??? :-(',
	  'Anyone ealse?',
	  'Im new here',
	  'How long have you been here',
	  'Ive been here since Jan',
	  'Ive been here since October :-)',
	  '....',
	  '....',
	  '..?',
	  '.......? Anyone?',
	  'How does the Media Work',
	  'Get a Media login from Kendall',,
	  ' Get it From Kendall for the Media Password',
	  'Thanks',
	  'Hey December!!!!',
	  'December, I have logged in',
	  'Hey December, I have logged in!!!',
	  'December im in',
	  'What is december?',
	  'Why are you all talking about December?',
	  'December is the Server that you have access to',
	  'December I need Access.... :(',
    ],
	messageResponsesPlex: [
	  'Plex Media Server',
	  'Register December for Plex',
	],
	messageResponsesHelp: [
	  'For help type keywords such as: Plex, Coding, Cloud...For more help type more help',
	  'Type keywords for help...For more help type more help',
	  'For more help type more [keyword] for navigation help',
	],
	messageResponsesArt: [
	  'Hey... All of the artwork on December is located in the Portal Art Gallery',
	],
    init: function() {
      this.cacheDOM();
      this.bindEvents();
      this.render();
    },
    cacheDOM: function() {
      this.$chatHistory = $('.chat-history');
      this.$button = $('button');
      this.$textarea = $('#message-to-send');
      this.$chatHistoryList =  this.$chatHistory.find('ul');
    },
    bindEvents: function() {
      this.$button.on('click', this.addMessage.bind(this));
      this.$textarea.on('keyup', this.addMessageEnter.bind(this));
    },
    render: function() {
      this.scrollToBottom();
      if (this.messageToSend.trim() !== '') {
        var template = Handlebars.compile( $("#message-template").html());
        var context = { 
          messageOutput: this.messageToSend,
          time: this.getCurrentTime()
        };
        this.$chatHistoryList.append(template(context));
        this.scrollToBottom();
        this.$textarea.val('');      
        // responses
        var templateResponse = Handlebars.compile( $("#message-response-template").html());
		var messanger = document.getElementById("message-to-send").value;
		//alert(this.messageToSend)
		if (this.messageToSend.indexOf('Plex') >= 0 || 
			this.messageToSend.indexOf('plex') >= 0 || 
			this.messageToSend.indexOf('Media') >= 0){
			var contextResponse = { 
				response: this.getRandomItem(this.messageResponsesPlex),
				time: this.getCurrentTime()
			};
		}else if(this.messageToSend.indexOf('help') >= 0){
			var contextResponse = { 
				response: this.getRandomItem(this.messageResponsesHelp),
				time: this.getCurrentTime()
			};
		}else if(this.messageToSend.indexOf('art') >= 0 || 
			this.messageToSend.indexOf('Art') >= 0 ||
			this.messageToSend.indexOf('Art Gallery') >= 0){
			var contextResponse = { 
				response: this.getRandomItem(this.messageResponsesArt),
				time: this.getCurrentTime()
			};
		}else{
			var contextResponse = { 
				response: this.getRandomItem(this.messageResponses),
				time: this.getCurrentTime()
			};
		}
		
        setTimeout(function() {
          this.$chatHistoryList.append(templateResponse(contextResponse));
          this.scrollToBottom();
        }.bind(this), 1500);
	  }
    },
    addMessage: function() {
      this.messageToSend = this.$textarea.val()
      this.render();         
    },

    addMessageEnter: function(event) {
        // enter was pressed
        if (event.keyCode === 13) {
          this.addMessage();
		  this.addToFile();
        }
    },
    scrollToBottom: function() {
       this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
    },
    getCurrentTime: function() {
      return new Date().toLocaleTimeString().
              replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
    },
    getRandomItem: function(arr) {
      return arr[Math.floor(Math.random()*arr.length)];
    }
  };
  
  chat.init();
  

	
  
  var searchFilter = {
    options: { valueNames: ['name'] },
    init: function() {
      var userList = new List('people-list', this.options);
      var noItems = $('<li id="no-items-found">No items found</li>');
      userList.on('updated', function(list) {
        if (list.matchingItems.length === 0) {
          $(list.list).append(noItems);
        } else {
          noItems.detach();
        }
      });
    }
  };
  
  searchFilter.init();
  
})();
