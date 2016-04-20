

var dataObj = new Object();

var dataLoad = function() {
		        
	dataObj['book_list'] = {
	  "list" : [ {"isbn":"1", "activity":"選擇活動", "name":"張治倫", "price": 580},
				 {"isbn":"2", "activity":"免費愛滋篩檢", "name":"碁峯資訊股份有限公司", "price": 580},
	  			 {"isbn":"3", "activity":"疫苗施打", "name":"碁峯資訊股份有限公司", "price": 450},
	  			 {"isbn":"4", "activity":"流感疫苗施打", "name":"金禾資訊股份有限公司", "price": 650},
	  			 {"isbn":"5", "activity":"流感疫苗施打", "name":"旗標出版股份有限公司", "price": 490},
	  			 {"isbn":"6", "activity":"流感疫苗施打", "name":"文魁資訊股份有限公司", "price": 390},
	  			 {"isbn":"7", "activity":"流感疫苗施打動", "name":"日本實業出版社", "price": 1500} ]
	};
	dataObj['anno'] = {
	  "list" : [ {"doc_no":"1", "doc_name":"廠商合約","department":"會計部", "empno":"帥哥"},
				 {"doc_no":"2", "doc_name":"廠商合約","department":"經濟部", "empno":"汪屁孩"},
	  			 {"doc_no":"3", "doc_name":"廠商合約","department":"會計部", "empno":"林X傑"},
	  			 {"doc_no":"4", "doc_name":"廠商合約","department":"會計部", "empno":"黃平平1"},
	  			 {"doc_no":"5", "doc_name":"廠商合約","department":"會計部", "empno":"黃平平2"},
	  			 {"doc_no":"6", "doc_name":"廠商合約","department":"會計部", "empno":"黃平平3"}]
	};
	dataObj['status'] = {
	  "list" : [ {"status":"0", "doc_name":"廠商合約","department":"會計部", "empno":"看到這裡就是有問題了"}]
	};
	
	

}
	
var showDat = function() {
	
    var activityArray = new Array();
    activityArray.push('<option value="" disabled selected>選擇1</option>');
    $.each(dataObj['book_list'].list, function(key, value) {
    	activityArray.push('<option > '+value.activity+'</option>');
    });
    $('#activityArray').html(activityArray.join(""));
    
   

}

