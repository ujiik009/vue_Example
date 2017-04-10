<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="app1">
	

<ul>
	<li v-for=' item in row[0] '> {{ item.room_id }} {{item.room_name}}</li>
</ul>
<!-- { "room_id": "000001", "room_name": "ห้องนอน" } -->
<input type="" name="" v-model="message">
<button v-on:click='get_json_jquery'>  Get data</button>
<button v-on:click="add_data"> add data</button>
</div>
</body>
<script type="text/javascript" src="lib/js/vue.min.js"></script>
<script type="text/javascript" src="lib/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript">
	var vm = new Vue({
		el: '#app1',
		data:{
			message : "hello ball",
			row : [
				
			]

		},
		methods:{
			get_json_jquery : function(){
				$.getJSON('data.json', function(json, textStatus) {
						/*optional stuff to do after success */
				}).done(function(json){
					
					vm.row.push(json.data);
					
				})
				
			},
			add_data : function(){
				vm.row[0].push({ "room_id": vm.message, "room_name": vm.message });
			}
		}


	})
		
</script>
</html>