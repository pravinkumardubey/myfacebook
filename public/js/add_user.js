/**
     * The declare function addRow use for the Add More User
     * 
     */
function addRow(){
  var lengthCount=$('#mylist li').length;
  if(lengthCount!=20){
  var count = Number($('#count').val())+1;
  var formDate='';
  formDate +=`<li>
    <input type="text" name="username[]" id="username`+count+`" placeholder="Enter Your UserName" onkeyup="checkEmail(this)">
    <input type="text" name="age[]" id="age`+count+`" placeholder="Enter your age">
    <input type="password" name="password[]" id="password`+count+`" placeholder="Enter Password">
  </li>`;
  $('#mylist').append(formDate);
  $('#count').val(count);
}
}

/**
     * The declare function myForm use for the validation and submition
     * 
     */

function myForm(){
  var count = Number($('#count').val());
  var names = [];
  var ages = [];
  var pass = [];
     for(var i=1;i<=count;i++){
      var username = $('#username'+i).val();
      var age = $('#age'+i).val();
      var password = $('#password'+i).val();
        if (username!=""&&age!=""&&password!="") {
        names.push(username);
        ages.push(age);
        pass.push(password);
        var unique = names.filter(function(itm, i, names) {
          return i == names.indexOf(itm);
      });
      }
      console.log(unique.length)
      if (count==unique.length) {
        $.ajax({
          url:'form_action',
          type:'post',
          data:$('#myform').serialize(),
          success:function(data){
            alert("Success");
            $('#myform').each(function(){
              this.reset();
            });
          }
        });
      }
   }  
}


function checkEmail(arg){
  var email=$(arg).val();
  $.ajax({
    url:'check_email/'+email,
    type:'get',
    data:{
      _token:'{{ csrf_token() }}'
    },  
    success:function(data){
      if (data==1) {
        $(arg).css("border","2px solid red");
        $(arg).focus();
      }else{
         $(arg).css("border","2px solid green");
      }
    }
  });
}













/*if (username == "") {
        $('#username'+i).focus();
        $('#username'+i).css("border","2px solid red");
      }else if (age == "") {
        $('#age'+i).focus();
        $('#age'+i).css("border","2px solid red");
        $('#username'+i).css("border","2px solid green");
      }
      else if (password == "") {
        $('#password'+i).focus();
        $('#password'+i).css("border","2px solid red");
        $('#username'+i).css("border","2px solid green");
        $('#age'+i).css("border","2px solid green");
      }
      else{
        $('#password'+i).css("border","2px solid green");
        
      }*/