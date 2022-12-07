
$(function(){
   $('#socl').click(function(){
    swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: 'success',
        padding: "2em",
        // target: document.querySelector("html")
      });
   })

    $(document).on('click', "#ddo",function(){
        swal({
            title: "Done!",
            text: "Record Deleted Successfully",
            timer: 1000,
            type: 'success',
            padding: "2em",
            target: document.querySelector("html")
          });
    })
    

    function resp(response){

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="manager";
              });

        }
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="packages";
              });

        }


        else if(response == 'loginfailed'){

            swal({
                title: "Oops!",
                text: "Record not found in database! ",
                type: "error",
                padding: "2em",
              });

        }
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function before()
{
    
    swal({
        title: 'Please Wait !',
        html: 'request in progress...',// add html attribute if you want or remove
       
    });
}

// Add Package

$('.addpackage').submit(function(e){

    e.preventDefault();
   
    var staff = {
        url: 'processor/processor.php?action=addpackage',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});




// edit package

$('.editpackage').submit(function(e){

  e.preventDefault();
 
  var staff = {
      url: 'processor/processor.php?action=editpackage',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});



// edit app

$('.editapp').submit(function(e){

  e.preventDefault();
 
  var staff = {
      url: 'processor/processor.php?action=editapp',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

$('.login').submit(function(e){

  e.preventDefault();
 
  var staff = {
      url: 'processor/processor.php?action=login',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});


// delete product

$(document).on('click','.deletep',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=deletepackage',
      type: 'post',
      data: {"id": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});




// add status

$(document).on('submit','.addstatus',function(e){

  e.preventDefault();
  var user = {
            url: 'processor/processor.php?action=addstatus',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: before,
            success: resp
    
        };
      $.ajax(user);
});

// delete status
$(document).on('click','.deletes',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: 'processor/processor.php?action=deletestatus',
      type: 'post',
      data: {"id": id},
      beforeSend: before,
      success: resp

  };
  $.ajax(staff);
});

    
})