<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>WX CD V4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="statics/css/style.css" />
<script src="statics/js/jquery.min.js"></script>
    <script>
        var lines = 1;

        $(document).ready(function () {
            $("#addrow").click(function () {
                $("tr:last-child").clone().appendTo("table");
                lines++;
            });
            $("#detrow").click(function () {
                var index = $("tr:last-child").index();
                if(index>0){
                    $("tr:last-child").remove();
                    lines--;
                }else{
                    alert("Can not delete the first row！");
                    return false;
                }
                
                //$("table tr:not(:first):last").remove();
            });
        });

    </script>
</head>

<body>

<div class="bg-grey">
	<div class="content">
		<a href="#">
			<h2 class="title">DIR RENAME</h2></a>
		<p class="subtitle">S1:Single Rename S2:Multi Rename S3:Index Rename</p>
		<div class="tab-block information-tab">
			<div class="tab-buttons ">
				<h3 class="tab-button cur" data-tab="one">S1</h3>
				<h3 class="tab-button" data-tab="two">S2</h3>
				<h3 class="tab-button" data-tab="three">S3<span class="question-icon" onclick="bt4_submit_onclick()"></span></h3>
			</div>
			<div class="tabs">
				<div class="tab-item active" id="tab-one">
                        <form action="s2.php">
                                <label for="avatar">Fill a source filepath:</label>
								<select id="srcpath" name="srcpath" style="width:400px">
								  <option value ="D:\WEB\zh.de3wa.com\czs30\00">czs30\00</option>
								  <option value ="D:\WEB\zh.de3wa.com\czs30\000">czs30\000</option>
								  <option value="D:\WEB\zh.de3wa.com\jj\00">jj\00</option>
								  <option value="D:\WEB\zh.de3wa.com\jj\000">jj\000</option>
								  <option value="D:\WEB\zh.de3wa.com\d\000">d\000</option>
								  <option value="D:\WEB\zh.de3wa.com\e\000">e\000</option>
								  <option value="D:\WEB\zh.de3wa.com\g\000">g\000</option>
								  <option value="D:\WEB\zh.de3wa.com\000czs30bpc">000czs30bpc</option>
								  <option value="D:\WEB\zh.de3wa.com\000jjbpc">000jjbpc</option>
								  
								</select><br>
                            <!-- <input type="text" id="srcpath" name="srcpath" autocomplete="off" value="D:\WEB\zh.de3wa.com\czs30\00" style="width:400px" /><p></p> -->
                            <label for="avatar">Fill a destin filedir:</label>
                            <input type="text"  name="destdir" autocomplete="off" value="D:\WEB\zh.de3wa.com\czs30" style="color:#999;width:400px" /><p></p>
                            <label for="avatar">Fill a new filename:</label>
                            <input type="text" id="newfilename" name="newfilename" autocomplete="off" style="width:400px" /><p></p>
                            <!-- <input type="submit"/> -->
                            <input type="button" class="btn" value="Rename"  onClick="bt_submit_onclick()"/> 
                        </form>
				</div>
				<div class="tab-item" id="tab-two">
                        <form action="s3.php" method="post">
                                <label for="avatar">Fill a source filepath:</label>
								<select id="srcpath3" name="srcpath" style="width:400px">
								  <option value ="D:\WEB\zh.de3wa.com\czs30\00">czs30\00</option>
								  <option value ="D:\WEB\zh.de3wa.com\czs30\000">czs30\000</option>
								  <option value="D:\WEB\zh.de3wa.com\jj\00">jj\00</option>
								  <option value="D:\WEB\zh.de3wa.com\jj\000">jj\000</option>
								  <option value="D:\WEB\zh.de3wa.com\d\000">d\000</option>
								  <option value="D:\WEB\zh.de3wa.com\e\000">e\000</option>
								  <option value="D:\WEB\zh.de3wa.com\g\000">g\000</option>
								  <option value="D:\WEB\zh.de3wa.com\000czs30bpc">000czs30bpc</option>
								  <option value="D:\WEB\zh.de3wa.com\000jjbpc">000jjbpc</option>
								</select><br>
                                <!-- <input type="text" id="srcpath3" name="srcpath" autocomplete="off" value="D:\WEB\zh.de3wa.com\czs30\00" style="width:400px" /><p></p> -->
                                <label for="avatar">Fill a destin filedir:</label>
                                <input type="text"  name="destdir" autocomplete="off" value="D:\WEB\zh.de3wa.com\czs30" style="color:#999;width:400px" /><p></p>
                                <input type="button" id="addrow" value="ADD ONE"/>
                                <table>
                                    <tr>
                                        <td>Link:</td>
                                        <td><input type="text"  name="links[]" autocomplete="off"  style="width:400px"></td>
                                    </tr>
                                </table>
                                
                                <input type="button" id="detrow" value="DELETE ONE "/>

                            <input type="button" class="btn" value="RENAME ALL"  onClick="bt2_submit_onclick()"/> 
                        </form>
				</div>
				<div class="tab-item" id="tab-three">
						<form action="s4.php" method="post">
						        <label for="avatar">Fill a source filepath:</label>
								<select id="srcpath4" name="srcpath" style="width:400px">
								  <option value ="D:\WEB\zh.de3wa.com\czs30\00">czs30\00</option>
								  <option value ="D:\WEB\zh.de3wa.com\czs30\000">czs30\000</option>
								  <option value="D:\WEB\zh.de3wa.com\jj\00">jj\00</option>
								  <option value="D:\WEB\zh.de3wa.com\jj\000">jj\000</option>
								  <option value="D:\WEB\zh.de3wa.com\d\000">d\000</option>
								  <option value="D:\WEB\zh.de3wa.com\e\000">e\000</option>
								  <option value="D:\WEB\zh.de3wa.com\g\000">g\000</option>
								  <option value="D:\WEB\zh.de3wa.com\000czs30bpc">000czs30bpc</option>
								  <option value="D:\WEB\zh.de3wa.com\000jjbpc">000jjbpc</option>
								</select><br>
						        <!-- <input type="text" id="srcpath4" name="srcpath" autocomplete="off" value="D:\WEB\zh.de3wa.com\czs30\00" style="width:400px" /><p></p> -->
						        <label for="avatar">Fill a destin filedir:</label>
						        <input type="text"  name="destdir" autocomplete="off" value="D:\WEB\zh.de3wa.com\czs30" style="color:#999;width:400px" /><p></p>
								From:<input type="text" id="fromindex" name="fromindex" autocomplete="off" width="100px" />
								To:<input type="text" id="toindex" name="toindex" autocomplete="off" width="100px" />
						        
						    <input type="button" class="btn" value="RENAME ALL"  onClick="bt3_submit_onclick()"/> 
						</form>
				</div>
			</div>
		</div>
	</div>
</div>


              <script>
				  function bt_submit_onclick(){
				      var obj = document.getElementById('newfilename').value;
				      var obj2 = document.getElementById('srcpath').value;
				      if(obj== "undefined" || obj == null || obj == ""||obj2== "undefined" || obj2 == null || obj2 == ""){
				          return false;
				      }else{
				          document.getElementsByTagName('form')[0].submit();
				      }
				  }
				  
				  function bt2_submit_onclick(){
				      var links = document.getElementsByName('links[]');
				      var obj3 = document.getElementById('srcpath3').value;
				      var tmpvalcount = 0;
				      for(var i=0;i<links.length;i++)
				      {
				          var obj = links[i].value;
				          if(obj== "undefined" || obj == null || obj == ""){
				              continue;
				          }
				          tmpvalcount++;
				      }
				      
				      if(lines!=tmpvalcount||obj3== "undefined" || obj3 == null || obj3 == ""){
				          alert('Please fill in all the blanks！')
				              return false;
				      }
				      document.getElementsByTagName('form')[1].submit();
				      
				  }
                  function bt3_submit_onclick(){
                      var obj2 = document.getElementById('srcpath4').value;
                      var fromindex = document.getElementById('fromindex').value;
                      var toindex = document.getElementById('toindex').value;
					  if(fromindex>toindex){
						  return false;
					  }
                      if(obj2== "undefined" || obj2 == null || obj2 == ""
					  ||fromindex== "undefined" || fromindex == null || fromindex == ""||toindex== "undefined" || toindex == null || toindex == ""){
                          return false;
                      }else{
                          document.getElementsByTagName('form')[2].submit();
                      }
                  }
                  function bt4_submit_onclick(){
					  location.href="testmaxdir.php";
					  
                  }
            </script>
<script type="text/javascript">
	//tab切换		
	$('.tab-button').click(function() {
		var tab = $(this).data('tab')
		$(this).addClass('cur').siblings('.tab-button').removeClass('cur');
		$('#tab-' + tab + '').addClass('active').siblings('.tab-item').removeClass('active');
	});
	//新闻列表切换
	$('.information-tab .article-list').hover(function() {
		$(this).addClass('current').siblings('.article-list').removeClass('current');
	}, function() {
		$(this).parent('.information-right').find('.article-list:first-of-type').addClass('current').siblings('.article-list').removeClass('current');
	});
</script>

</body>
</html>