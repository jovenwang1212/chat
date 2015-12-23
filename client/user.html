<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="jquery-1.9.1.js"></script>
		<style>
			#online_users {
				float: left;
			}
			#chat {
				width: 400px;
				border: blue 1px solid;
				float: left;
				margin-left: 100px;
			}
			#customer_service {
				float: left;
			}
			#chat_history {
				overflow-y: scroll;
				height: 300px;
				width: 100%;
			}
		</style>
	</head>

	<body>
		<h1>用户XXX</h1>
		<div id="online_users">
			<h2>好友</h2>
			<ul id="friendsId">
			</ul>
		</div>
		<div id="chat">
			<div id="chat_history"></div>
			<div id="chat_send">
				<textarea cols="63" rows="8" id="msg_content"></textarea>
				<br/>
				<span>按"Enter"发送消息</span>
			</div>
		</div>
		<div id="customer_service">
			<a>与客服交谈</a>
		</div>
		<script>
			var name = Date.now();
			var ws = {};
			var friendsDom = document.getElementById("friendsId");
			var msg_contentDom = document.getElementById("msg_content");
			var chat_historyDom = document.getElementById("chat_history");
			 //var roomDom = document.getElementById("room");
			 //var msg_contentDom = document.getElementById("msg_content");
			ws = new WebSocket("ws://localhost:9501");
			ws.onopen = function(e) {
				console.log("websocket open");
				var msg = [
					'login', {
						'username': name,
						'password': name
					}
				];
				ws.send(JSON.stringify(msg));
			}
			ws.onmessage = function(e) {
				console.log(e.data);
				var msg = JSON.parse(e.data);
				var type = msg[0];
				if (type == "login") {
					var friends = msg[1].friends;
					console.log(friends);
					var fragment = document.createDocumentFragment();
					for (var i = 0; i < friends.length; i++) {
						var friend = friends[i];
						var liDom = document.createElement("li");
						liDom.innerHTML = friend.username;
						fragment.appendChild(liDom);
					}
					friendsDom.appendChild(fragment);
				} else if (type == "chat") {
					var pDom = document.createElement("p");
					var _msg = msg[1];
					pDom.innerHTML = '<font color="blue" >' + _msg.from_username + '</font><br/>' + _msg.content;
					chat_historyDom.appendChild(pDom);
				}
			}
			ws.onclose = function(e) {
				console.log("您已退出聊天室");
			};
			ws.onerror = function(e) {
				console.log("异常:" + e.data);
				console.log("onerror");
			};
			document.onkeydown = function(e) {
				var ev = document.all ? window.event : e;
				if (ev.keyCode == 13) {
					sendMsg();
				}
			}

			function sendMsg() {
				var content = msg_contentDom.value;
				content = content.trim();
				if (!content) {
					return false;
				}
				var msg = [
					'chat', {
						'from': name,
						'content': content,
						'to_name': 0
					}
				];
				ws.send(JSON.stringify(msg));
				msg_contentDom.value = "";
				//add chat message to history
				var pDom = document.createElement("p");
				pDom.innerHTML = '<font color="blue" >' + name + '</font><br/>' + content;
				chat_historyDom.appendChild(pDom);
				return false;
			}
		</script>
	</body>

</html>