// Create Function
$(document).ready(function () {
  $("#Create").click(function(e) {
      e.preventDefault();
      e.returnValue = false;
      $.ajax({
        url:"../service/crud.php/booklist", //the page containing php script
        type: "post", //request type,
        contentType: 'application/json',
        dataType: 'json',
         data: JSON.stringify( { "url": $('#url').val(),"date": $('#created').val(),"name": $('#name').val(), "description": $('#description').val() } ),
        success:function(result){
          $('#createOutput').html("Data was created succesfully");
          console.log(result);
       },
       error: function(result){
          $('#createOutput').html("Data was not created");
      }
     });
});
});

//Retrieve Function
$(document).ready(function (){
$("#Find").click(function(e){
  e.preventDefault();
  var inputValue = $('#retrieveMe').val();
    var selectedID = $('#select').val();
    var dataRetrieve = {
      "SearchTerm": inputValue,
      "SearchType": selectedID
    };
    if(dataRetrieve.SearchType == 'idVal'){
      $.ajax({
      url:"../service/crud.php/booklist/" + inputValue, //the page containing php script
      type: "GET", //request type,
      contentType: 'application/json',
      success:function(retrieveVar){
        console.log(retrieveVar);
        var data = JSON.parse(retrieveVar);
        $('#retrieveOutput').text("NAME: " + data.name + "              DESCRIPTION: " + data.description + "        DATE: " + data.created
        + "         ID: " + data.id + "         URL: " + data.url);
      },
      error: function(retrieveVar){
        $('#retrieveOutput').html("Data was not retrieved");
      }
    });
    }else{
      var x =  $('#retrieveMe').val();
      $.ajax({
      url:"../service/crud.php/booklist?name=" +  x, //removed this
      type: "GET", //request type,
      contentType: 'application/json',
      success:function(retrieveVar){
        var data = JSON.parse(retrieveVar);
        for(var i = 0; i < data.length; i++){
          if(data[i].name == x){
            $('#retrieveOutput').text("NAME: " + data[i].name + "   DESCRIPTION: " + data[i].description + "   DATE: " + data[i].created
           + "   ID: " + data[i].id + "   URL: " + data[i].url);
          };
        }
      },
      error: function(retrieveVar){
        $('#retrieveOutput').html("Data was not retrieved");
      }
    });
  }
});
});

//Delete Function
$(document).ready(function(){
  $("#Delete").click(function(e){
     var deleteMeInput = $('#deleteMeInput').val();
     e.preventDefault();
    $.ajax({
      url: '../service/crud.php/booklist/' + deleteMeInput,
      type: 'DELETE',
      data: $(this).serialize(),
          success: function(result){
            $("#deleteOutput").html(deleteMeInput + " id has been deleted.");
            // $(".deleteMeInput").empty();
      },
      error: function(result){
        console.log(result + "Id was not deleted");
      }
    });

    });

 });

//Update Description Function
$(document).ready(function () {
  $("#Update").click(function(e) {
      e.preventDefault();
      e.returnValue = false;
      var valOfId = $('#updateID').val();
      $.ajax({
        url:"../service/crud.php/booklist/" +valOfId,
        type: "PUT",
        contentType: 'application/json',
        data: JSON.stringify( { "description": $('#updateMeInput').val()} ),
        headers: {"X-HTTP-Method-Override": "PUT"},
        success:function(result){
          $('#UpdateOutput').html("Data was UPDATED");
          $('#output').html( JSON.stringify( result ));
       },
       error: function(result){
          $('#UpdateOutput').html("Data was not UPDATED");
      }
     });
});
});

//Update Name Functionn
$(document).ready(function () {
  $("#Update2").click(function(e) {
      e.preventDefault();
      e.returnValue = false;
      var valOfId = $('#updateID2').val();
      $.ajax({
        url:"../service/crud.php/booklist/" +valOfId,
        type: "PUT",
        contentType: 'application/json',
        data: JSON.stringify( { "name": $('#updateMeInput2').val()} ),
        headers: {"X-HTTP-Method-Override": "PUT"},
        success:function(result){
          $('#UpdateOutput2').html("Data was UPDATED");
          $('#output').html( JSON.stringify( result ));
       },
       error: function(result){
          $('#UpdateOutput2').html("Data was not UPDATED");
      }
     });
});
});

//Update URL Functionn
$(document).ready(function () {
  $("#Update3").click(function(e) {
      e.preventDefault();
      e.returnValue = false;
      var valOfId = $('#updateID3').val();
      $.ajax({
        url:"../service/crud.php/booklist/" +valOfId,
        type: "PUT",
        contentType: 'application/json',
        data: JSON.stringify( { "url": $('#updateMeInput3').val()}),
        headers: {"X-HTTP-Method-Override": "PUT"},
        success:function(result){
          $('#UpdateOutput3').html("Data was UPDATED");
          $('#output').html( JSON.stringify( result ) );
       },
       error: function(result){
          $('#UpdateOutput3').html("Data was not UPDATED");
      }
     });
});
});