<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>JSON</title>
  <script src="../js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../js/materialize.js"></script>
  <script type="text/javascript" src="Simple.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="project.css">
</head>
<script >
  var Bruce = function() {

    this.type = 'POST';
    this.dataType = 'json';
    this.isAsync = false;
    this.postData = {};

    this.getJSON = function(url) {
      var result;
      $.ajax({
        type: this.type,
        url: url,
        data: this.postData,
        dataType: this.dataType,
        async: this.isAsync,
        success: function(response) {
          result = response;
        },
        error: function(XMLHttpRequest) {
          //alert(XMLHttpRequest.status);
          result = {Status: -1, Result: XMLHttpRequest.status};
        }
      });
      return result;
    }
    
    this.setType = function(type) {
      this.type = type; 
    }

    this.setData = function(sendData) {
      this.postData = sendData;
    }

    this.showJSON = function(url, target) {
      var a = JSON.stringify(this.getJSON(url));
      $(target).html(a);
    }

  }


  var show = function() {
    

    var s1 = $('input[name=cname]').val();
    var s2 = $('input[name=phone]').val();
    var s3 = $('input[name=email]').val();
    var post_data = {cname:s1, phone:s2, email:s3};
    //alert(JSON.stringify(post_data));

    var bruce = new Bruce();
    bruce.setData(post_data);
    var response = bruce.getJSON('http://www.daren.idv.tw/Test/people_test');
    var result = response.MySQL;
    // alert(JSON.stringify(result));
  
    var dataArray = new Array();
 
    $.each(result, function(key, value) {
      dataArray.push('<tr>');
        
      dataArray.push('<td>'+value.cname+'</td>');
      dataArray.push('<td>'+value.phone+'</td>');
      dataArray.push('<td>'+value.email+'</td>');
      
      dataArray.push('</tr>');
    });
    $('tbody#list').html(dataArray.join(""));
  }



    var showdata = function() {
    

    var bruce = new Bruce();
    var response = bruce.getJSON('http://www.daren.idv.tw/Test/people_test');
    var result = response.MySQL;
    var dataArray = new Array();
 
    $.each(result, function(key, value) {
      dataArray.push('<tr>');
        
      dataArray.push('<td>'+value.cname+'</td>');
      dataArray.push('<td>'+value.phone+'</td>');
      dataArray.push('<td>'+value.email+'</td>');
      
      dataArray.push('</tr>');
    });
    $('tbody#list').html(dataArray.join(""));
  }
 
$(document).ready(function () {
  showdata();
});

  


</script>
<style type="text/css">

</style>
<body>

<main>
   
        <input type="text" name="cname" placeholder="輸入姓名" value="張志綸"></input><br>
        <input type="text" name="phone" placeholder="輸入電話" value="0936921108 "></input><br>
        <input type="text" name="email" placeholder="輸入email" value="K0926521654@gmail.com"></input><br>
        <button onclick="show()">送出</button> 
        <button ><a href="http://www.daren.idv.tw/Test/people_delete">刪除</a></button>
       
    <div id="bpeople_test">
      <table border="1">
        <thead>
          <tr><th>名子</th><th>手機</th><th>email</th></tr>
        </thead>
        <tbody id="list">
        </tbody>
      </table>
    </div>
 </main>
 
</body>
</html>
  